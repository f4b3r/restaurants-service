package com.example.persistence.controller;

import org.springframework.http.HttpStatus;
import org.springframework.validation.BindException;
import org.springframework.web.bind.annotation.ControllerAdvice;
import org.springframework.web.bind.annotation.ExceptionHandler;
import org.springframework.web.bind.annotation.ResponseStatus;
import org.springframework.web.servlet.ModelAndView;

@ControllerAdvice
public class ErrorHandlerController {

    @ExceptionHandler(BindException.class)
    @ResponseStatus(HttpStatus.BAD_REQUEST)
    public ModelAndView handleMethodArgumentNotValid(BindException e){
        ModelAndView errorPage = new ModelAndView("errorCustom");

        errorPage.addObject("errorCount", e.getErrorCount());

        errorPage.addObject("errorList", e.getAllErrors());

        return errorPage;


    }
}
