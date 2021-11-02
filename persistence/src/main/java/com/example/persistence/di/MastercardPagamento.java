package com.example.persistence.di;

import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.stereotype.Component;

@Component
@Qualifier("masterCardPagamento")
public class MastercardPagamento implements Pagamento{
    @Override
    public String paga(int amount) {
        return "pago con mastercard " + amount;
    }
}
