package com.example.persistence.model;

import javax.persistence.*;
import java.util.HashSet;
import java.util.Set;

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

    private String openTime;



    public String getOpenTime() {
        return openTime;
    }

    public void setOpenTime(String openTime) {
        this.openTime = openTime;
    }



    @ManyToOne( fetch = FetchType.LAZY)
    private Person person;

    @OneToOne(cascade = CascadeType.ALL)
    @JoinColumn(name = "address_id")
    private Address address;

    public Address getAddress() {
        return address;
    }

    public void setAddress(Address address) {
        this.address = address;
    }

    public Set<MenuItem> getRestaurantMenu() {
        return restaurantMenu;
    }

    public void setRestaurantMenu(Set<MenuItem> restaurantMenu) {
        this.restaurantMenu = restaurantMenu;
    }

    @ManyToMany(cascade = CascadeType.PERSIST)
    @JoinTable(
            name = "restaurants_menuitem",
            joinColumns = @JoinColumn(name = "restaurant_id"),
            inverseJoinColumns = @JoinColumn(name = "item_id")

    )
    private Set<MenuItem> restaurantMenu;


    @OneToMany(mappedBy = "restaurant", cascade = CascadeType.ALL)
    private Set<Comment> comments = new HashSet<>();

    public Set<Comment> getComments() {
        return comments;
    }

    public void setComments(Set<Comment> comments) {
        this.comments = comments;
    }

    public Long getId() {
        return id;
    }

    public void addComment(Comment comment)
    {
        comments.add(comment);
        comment.setRestaurant(this);
    }

    public void removeComment(Comment comment)
    {
        comments.remove(comment);
        comment.setRestaurant(null);
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
