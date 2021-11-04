package com.example.persistence.dto;

public class AddMenuToRestauranDTO {

    private Long idMenuItem;
    private Long idRestaurant;

    public Long getIdMenuItem() {
        return idMenuItem;
    }

    public void setIdMenuItem(Long idMenuItem) {
        this.idMenuItem = idMenuItem;
    }

    public Long getIdRestaurant() {
        return idRestaurant;
    }

    public void setIdRestaurant(Long idRestaurant) {
        this.idRestaurant = idRestaurant;
    }
}
