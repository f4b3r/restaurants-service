package com.example.persistence.dto;

public class AddRestaurantForm {

    private String name;
    private String location;
    private String description;

    private String nomeProprietario;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getLocation() {
        return location;
    }

    public void setLocation(String location) {
        this.location = location;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public void setNomeProprietario(String nomeProprietario) {
        this.nomeProprietario = nomeProprietario;
    }
    public String getNomeProprietario() {
        return description;
    }
}
