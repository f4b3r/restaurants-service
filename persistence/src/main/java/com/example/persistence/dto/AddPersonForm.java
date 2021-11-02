package com.example.persistence.dto;

import javax.validation.constraints.*;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;

public class AddPersonForm {

    /**
     * @NotNull campo non deve essere null
     * @NotEmpty controllo su lista che non sia vuota
     * @NotBlank verifica che una stringa non sia vuota ("")
     *
     * @Min e @Max range di numeri accettati
     * @Pattern prende in input una regEx e la verifica
     *
     * @Email valida email
     */

    @NotBlank
    private String name;

    @NotBlank
    private String surname;

    @Min(0)
    @Max(100)
    @NotNull
    private int age;

    @Pattern(regexp = "^([A-Z]{6}[0-9LMNPQRSTUV]{2}[ABCDEHLMPRST]{1}[0-9LMNPQRSTUV]{2}[A-Z]{1}[0-9LMNPQRSTUV]{3}[A-Z]{1})$|([0-9]{11})$")
    private String fiscalCode;

    @Email
    private String email;

    @NotNull
    private Date birthDate;



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

    public void setBirthDate(String formDate) throws ParseException {
        SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
        this.birthDate = format.parse(formDate);
    }
}
