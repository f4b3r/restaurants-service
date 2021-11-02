package com.example.persistence.model;

import javax.persistence.*;

@Entity
public class Restaurant {

    public Restaurant() {

    }


    public Restaurant(String name, String location) {
        this.name = name;
        this.location = location;
    }

    public Restaurant(String name, String location, String description) {
        this.name = name;
        this.location = location;
        this.description = description;
    }

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String name;

    private String location;

    private String description;

    @ManyToOne( fetch = FetchType.LAZY)
    private Person person;

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

    public Person getPerson() {
        return person;
    }

    public void setPerson(Person person) {
        this.person = person;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (!(o instanceof Restaurant )) return false;
        return id != null && id.equals(((Restaurant) o).getId());
    }
    @Override
    public int hashCode() {
        return getClass().hashCode();
    }
}
