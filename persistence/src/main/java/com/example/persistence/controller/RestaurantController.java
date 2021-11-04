package com.example.persistence.controller;

import com.example.persistence.dto.AddCommentForm;
import com.example.persistence.dto.AddMenuToRestauranDTO;
import com.example.persistence.dto.AddRestaurantForm;
import com.example.persistence.dto.EditRestaurantForm;
import com.example.persistence.model.Comment;
import com.example.persistence.model.MenuItem;
import com.example.persistence.model.Person;
import com.example.persistence.model.Restaurant;
import com.example.persistence.service.MenuService;
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

import java.util.ArrayList;
import java.util.Collection;
import java.util.Date;
import java.util.List;
import java.util.stream.Collectors;


@Controller
public class RestaurantController {

    @Autowired
    public RestaurantController(RestaurantService restaurantService,
                                PersonService personService,
                                MenuService menuService){
        this.restaurantService = restaurantService;
        this.personService = personService;
        this.menuService = menuService;
    }

    private RestaurantService restaurantService;

    private PersonService personService;

    private MenuService menuService;


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
        model.addAttribute("formComment" , new AddCommentForm());
        return "ristoranti";
    }



    @PostMapping("/restaurants/comment/add")
    public String addComment(@ModelAttribute AddCommentForm form){

        Comment comment = new Comment();
        comment.setContent(form.getContent());
        comment.setCommentDateTime(new Date());
        comment.setAuthor("Autore commento");
        Restaurant restaurant = this.restaurantService.getRestaurant(form.getIdRestaurant());

        restaurant.addComment(comment);
        this.restaurantService.updateRestaurant(restaurant);
        return "redirect:/restaurants";
    }
    @RequestMapping("/restaurant/{id}")
    public String restaurantID(@PathVariable Long id, Model model){
        Restaurant restaurant = restaurantService.getRestaurant(id);
        model.addAttribute("restaurant",restaurant );
        model.addAttribute("persons" , personService.getAllPersons() );
        model.addAttribute("person" , new Person());
        model.addAttribute("form" ,new EditRestaurantForm());
        return "restaurantDetail";
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

    @RequestMapping("/restaurants/form-editmenu/{id}")
    public String showAddRestaurant(@PathVariable Long id, Model model){

        Collection<MenuItem> menuItems = this.menuService.getAllMenuItems();
        Restaurant restaurant = this.restaurantService.getRestaurant(id);
        List<MenuItem> itemsFiltered = new ArrayList<>();

        itemsFiltered = menuItems.stream().filter(menuItem ->
            !restaurant.getRestaurantMenu().contains(menuItem)
        ).collect(Collectors.toList());

        model.addAttribute("menuList", itemsFiltered);
        model.addAttribute("restaurantId" , id);
        model.addAttribute("form", new AddMenuToRestauranDTO());
        return "editMenu";
    }

    @PostMapping("/restaurants/menu/add")
    public String showAddRestaurant(@ModelAttribute AddMenuToRestauranDTO form){

        Restaurant restaurant = this.restaurantService.getRestaurant(form.getIdRestaurant());
        MenuItem item = this.menuService.getMenuItem(form.getIdMenuItem());
        restaurant.getRestaurantMenu().add(item);
        this.restaurantService.updateRestaurant(restaurant);
        return "redirect:/restaurants";
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
