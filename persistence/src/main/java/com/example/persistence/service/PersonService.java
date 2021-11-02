package com.example.persistence.service;

import com.example.persistence.controller.PersonController;
import com.example.persistence.model.Person;
import com.example.persistence.model.Restaurant;
import com.example.persistence.repository.PersonRepository;
import org.springframework.stereotype.Service;

import javax.transaction.Transactional;
import java.util.Collection;

@Service
@Transactional
public class PersonService {

    public PersonService(PersonRepository personRepository){
        this.personRepository = personRepository;
    }
    private PersonRepository personRepository;

    public Collection<Person> getAllPersons() {
        return  personRepository.findAll();
    }

}
