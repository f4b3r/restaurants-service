package com.example.persistence.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class HomepageController {

    //metodo di atterraggio sulla homepage
    //punto di partenza della nostra applicazione.
    @RequestMapping("/homepage")
    public String getHomepage(){
        return "index";
    }
}
