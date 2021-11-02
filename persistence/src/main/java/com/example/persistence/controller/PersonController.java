package com.example.persistence.controller;

import com.example.persistence.service.PersonService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class PersonController {

    @Autowired
    public PersonController(PersonService personService){
        this.personService = personService;
    }
    private PersonService personService;

    @RequestMapping("/persons")
    public String getAllPersons(Model model){
        model.addAttribute("persons",personService);
        return "ristoranti";
    }
}
