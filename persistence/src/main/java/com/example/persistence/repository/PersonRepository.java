package com.example.persistence.repository;

import com.example.persistence.model.Person;
import com.example.persistence.model.Restaurant;
import org.springframework.data.repository.CrudRepository;

import java.util.Collection;

public interface PersonRepository extends CrudRepository<Person, Long> {

    Collection<Person> findAll();
}
