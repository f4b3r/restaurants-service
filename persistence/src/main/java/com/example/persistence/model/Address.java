package com.example.persistence.model;

import javax.persistence.*;

@Entity
public class Address {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    private String street;

    private String city;

    @OneToOne(mappedBy = "address")
    private Restaurant restaurant;
}
