package com.example.persistence.repository;

import com.example.persistence.model.Restaurant;
import org.springframework.data.repository.CrudRepository;

import java.util.Collection;

public interface RestaurantRepository extends CrudRepository<Restaurant, Long> {

    Collection<Restaurant> findAll();


    Collection<Restaurant> findAllByNameContains(String name);
}
