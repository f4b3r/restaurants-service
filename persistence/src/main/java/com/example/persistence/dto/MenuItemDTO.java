package com.example.persistence.dto;

public class MenuItemDTO {

    private String name;

    private String ingredientsDescription;

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
}
