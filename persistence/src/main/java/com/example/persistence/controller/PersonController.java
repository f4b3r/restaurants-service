package com.example.persistence.controller;

import com.example.persistence.dto.AddPersonForm;
import com.example.persistence.dto.AddRestaurantForm;
import com.example.persistence.service.PersonService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.annotation.Validated;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import javax.validation.Valid;
import javax.validation.constraints.Max;

@Controller
@Validated
public class PersonController {

    @Autowired
    public PersonController(PersonService personService){
        this.personService = personService;
    }
    private PersonService personService;

    @RequestMapping("/persons/form-add")
    public String showAddPersonForm(Model model){
        model.addAttribute("form",new AddPersonForm());
        return "aggiungi-persona";
    }

    @RequestMapping("/persons")
    public String getAllPersons(Model model){
        model.addAttribute("persons",personService.getAllPersons() );
        return "persone";
    }

    @RequestMapping("/persons/{id}/")
    public String getAllPersons(@PathVariable  long id, Model model){
        model.addAttribute("person",personService.getPerson(id) );
        return "detailsPerson";
    }

    /**
     * metodo invocato alla submit della form add-person
     * chiama il metodo per salvare l'oggetto su db
     * @param form
     * @return
     */
    @PostMapping("/persons/add")
    public String showAddRestaurant(@Valid @ModelAttribute AddPersonForm form){

        //chiamiamo il service per andare ad aggiugnere sul db il ristorante


        personService.createPerson(form);



        return "redirect:/persons";
    }
}
