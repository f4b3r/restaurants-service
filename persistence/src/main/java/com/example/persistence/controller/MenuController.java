package com.example.persistence.controller;

import com.example.persistence.dto.MenuItemDTO;
import com.example.persistence.model.MenuItem;
import com.example.persistence.service.MenuService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class MenuController {

    @Autowired
    public MenuController(MenuService menuService){
        this.menuService = menuService;
    }

    private MenuService menuService;
    @PostMapping("/menu/additem")
    public MenuItem addMenuItem(@RequestBody MenuItemDTO menuItem){

            return this.menuService.createMenuItem(new MenuItem(menuItem.getName(),
                    menuItem.getIngredientsDescription()));
    }
}
