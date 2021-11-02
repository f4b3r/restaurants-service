package com.example.persistence.di;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;



@Controller
public class SistemaPagamento {


    @Autowired
    public SistemaPagamento(@Qualifier("paypalPagamento") Pagamento pagamento){
        this.pagamento = pagamento;
    }

    private Pagamento pagamento;

    @RequestMapping("/paga/{amount}")
    public @ResponseBody String  effettuaPagamento(@PathVariable int amount){
        return pagamento.paga(amount);
    }
}
