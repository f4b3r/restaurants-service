package com.example.persistence.controller;

import com.example.persistence.dto.AddRestaurantForm;
import com.example.persistence.service.RestaurantService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;


@Controller
public class RestaurantController {

    @Autowired
    public RestaurantController(RestaurantService restaurantService){
        this.restaurantService = restaurantService;
    }

    private RestaurantService restaurantService;


    /*
        metodo che deve caricare tutti i ristoranti dal DB e
        visualizzarli tramite la pagina ristoranti.html
     */
    @RequestMapping("/restaurants")
    public String getAllRestaurants(Model model){
        model.addAttribute("restaurants",restaurantService.getAllRestaurants() );
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
