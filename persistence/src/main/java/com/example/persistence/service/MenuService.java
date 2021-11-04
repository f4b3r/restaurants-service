package com.example.persistence.service;

import com.example.persistence.model.MenuItem;
import com.example.persistence.repository.MenuRespository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import javax.transaction.Transactional;
import java.util.Collection;

@Service
@Transactional
public class MenuService {

    @Autowired
    public MenuService(MenuRespository menuRespository){
        this.menuRespository = menuRespository;
    }

    private MenuRespository menuRespository;

    public MenuItem createMenuItem(MenuItem item){
        return   this.menuRespository.save(item);
    }

    public MenuItem getMenuItem(Long itemId){
        return   this.menuRespository.findById(itemId).get();
    }

    public Collection<MenuItem> getAllMenuItems(){
        return   this.menuRespository.findAll();
    }

}
