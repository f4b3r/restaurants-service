package com.example.persistence.repository;

import com.example.persistence.model.MenuItem;
import org.springframework.data.repository.CrudRepository;

import java.awt.*;
import java.util.Collection;

public interface MenuRespository extends CrudRepository<MenuItem, Long> {

    Collection<MenuItem>  findAll();
}
