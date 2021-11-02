package com.example.persistence.controller;

import com.example.persistence.dto.AddRestaurantForm;
import com.example.persistence.dto.EditRestaurantForm;
import com.example.persistence.model.Person;
import com.example.persistence.model.Restaurant;
import com.example.persistence.service.PersonService;
import com.example.persistence.service.RestaurantService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;


@Controller
public class RestaurantController {

    @Autowired
    public RestaurantController(RestaurantService restaurantService,
                                PersonService personService){
        this.restaurantService = restaurantService;
        this.personService = personService;
    }

    private RestaurantService restaurantService;

    private PersonService personService;


    /*
        metodo che deve caricare tutti i ristoranti dal DB e
        visualizzarli tramite la pagina ristoranti.html
     */
    @RequestMapping("/restaurants")
    public String getAllRestaurants(Model model){
        model.addAttribute("restaurants",restaurantService.getAllRestaurants() );
        model.addAttribute("persons" , personService.getAllPersons() );
        model.addAttribute("person" , new Person());
        model.addAttribute("form" ,new EditRestaurantForm());
        return "ristoranti";
    }

    /**
     * viene chiamato per visualizzare su frontend il form di aggiunta ristorante
     * @param model
     * @return
     */
    @RequestMapping("/restaurants/form-add")
    public String showAddRestaurant(Model model){
        model.addAttribute("form",new AddRestaurantForm());
        return "aggiungi-ristorante";
    }

    @PostMapping("/restaurants/edit/{id}")
    public String showAddRestaurant(@ModelAttribute EditRestaurantForm form,
                                    @PathVariable(name = "id") Long restaurantId){
        Restaurant restaurant = this.restaurantService.getRestaurant(restaurantId);
        Person person = this.personService.getPerson(form.getPersonID());
        person.addRestaurant(restaurant);
          this.personService.updatePerson(person);
        return "redirect:/restaurants";
    }


    /**
     * metodo invocato alla submit della form add-restaurant
     * chiama il metodo per salvare l'oggetto su db
     * @param form
     * @return
     */
    @PostMapping("/restaurants/add")
    public String showAddRestaurant(@ModelAttribute AddRestaurantForm form){

        //chiamiamo il service per andare ad aggiugnere sul db il ristorante


        restaurantService.createRestaurant(form);

        return "redirect:/restaurants";
    }

}
