package com.example.persistence.di;

import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.stereotype.Component;

@Component
@Qualifier("paypalPagamento")
public class PaypalPagamento implements Pagamento{
    @Override
    public String paga(int amount) {
       return "pago con paypal" + amount;
    }
}
