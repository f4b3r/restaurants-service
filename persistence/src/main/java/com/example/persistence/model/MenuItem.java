package com.example.persistence.model;

import javax.persistence.*;
import javax.validation.constraints.Email;
import java.util.Set;

@Entity
public class MenuItem {

    public MenuItem(String name, String ingredientsDescription) {
        this.name = name;
        this.ingredientsDescription = ingredientsDescription;
    }

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String name;

    private String ingredientsDescription;

    @ManyToMany(mappedBy = "restaurantMenu")
    private Set<Restaurant> restaurants;

    public MenuItem() {

    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getIngredientsDescription() {
        return ingredientsDescription;
    }

    public void setIngredientsDescription(String ingredientsDescription) {
        this.ingredientsDescription = ingredientsDescription;
    }

    public Set<Restaurant> getRestaurants() {
        return restaurants;
    }

    public void setRestaurants(Set<Restaurant> restaurants) {
        this.restaurants = restaurants;
    }
}
