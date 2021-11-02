package com.example.persistence.service;

import com.example.persistence.controller.PersonController;
import com.example.persistence.dto.AddPersonForm;
import com.example.persistence.dto.AddRestaurantForm;
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

    public Person getPerson(Long id) {
        return  personRepository.findById(id).get() ;
    }

    public Person createPerson(AddPersonForm form){

        Person person = new Person();
        person.setAge(form.getAge());
        person.setBirthDate(form.getBirthDate());
        person.setFiscalCode(form.getFiscalCode());
        person.setEmail(form.getEmail());
        person.setName(form.getName());
        person.setSurname(form.getSurname());

        return personRepository.save(person);
    }

    public Person updatePerson(Person person){
        return personRepository.save(person);
    }
}
