package com.example.persistence.model;

import javax.persistence.*;
import javax.validation.constraints.Min;
import java.util.*;

@Entity
public class Person {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;


    private String name;

    private String surname;

    private int age;

    private String fiscalCode;

    private String email;

    private Date birthDate;

    @OneToMany(mappedBy = "person" , cascade = CascadeType.PERSIST)
    private Set<Restaurant> restaurants = new HashSet<Restaurant>();



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

    public String getSurname() {
        return surname;
    }

    public void setSurname(String surname) {
        this.surname = surname;
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }

    public String getFiscalCode() {
        return fiscalCode;
    }

    public void setFiscalCode(String fiscalCode) {
        this.fiscalCode = fiscalCode;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public Date getBirthDate() {
        return birthDate;
    }

    public void setBirthDate(Date birthDate) {
        this.birthDate = birthDate;
    }

    public void addRestaurant(Restaurant restaurant)
    {
        restaurants.add(restaurant);
        restaurant.setPerson(this);
    }

    public void removeRestaurant(Restaurant restaurant)
    {
        restaurants.remove(restaurant);
        restaurant.setPerson(null);
    }
}
