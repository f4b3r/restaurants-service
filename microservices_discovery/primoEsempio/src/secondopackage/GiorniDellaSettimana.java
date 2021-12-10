public enum GiorniDellaSettimana {

    LUNEDI(1),
    MARTEDI(2),
    MERCOLEDI(3),
    GIOVEDI(4),
    VENERDI(5),
    SABATO(6),
    DOMENICA(7);


    public int codiceSettimana;


    GiorniDellaSettimana(int codiceSettimana){
        this.codiceSettimana = codiceSettimana;
    }

    public int getCodiceSettimana() {
        return codiceSettimana;
    }
}
