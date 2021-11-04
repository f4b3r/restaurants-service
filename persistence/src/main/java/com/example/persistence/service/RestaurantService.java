package com.example.persistence.service;

import com.example.persistence.dto.AddRestaurantForm;
import com.example.persistence.model.Restaurant;
import com.example.persistence.repository.RestaurantRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import javax.transaction.Transactional;
import java.util.Collection;

@Service
@Transactional
public class RestaurantService {

    private RestaurantRepository restaurantRepository;

    @Autowired
    public RestaurantService(RestaurantRepository repository){
        this.restaurantRepository = repository;
    }



   public Restaurant createRestaurant(String name, String location) {
        Restaurant restaurant = new Restaurant(name, location);
        return restaurantRepository.save(restaurant);
    }

    public Restaurant updateRestaurant(Restaurant restaurant) {

        return restaurantRepository.save(restaurant);
    }
    public Restaurant createRestaurant(String name, String location,String description) {
        Restaurant restaurant = new Restaurant(name, location,description);
        return restaurantRepository.save(restaurant);
    }

    public Restaurant createRestaurant(AddRestaurantForm form){
        Restaurant restaurant = new Restaurant(form.getName(),form.getLocation(),form.getDescription());
        return restaurantRepository.save(restaurant);
    }


    public Restaurant getRestaurant(Long id) {
        return restaurantRepository.findById(id).orElse(null);
    }


    public Collection<Restaurant> getAllRestaurants() {
      return  restaurantRepository.findAll();
    }

}
