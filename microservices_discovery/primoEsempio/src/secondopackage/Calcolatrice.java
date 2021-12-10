public class Calcolatrice extends Object{


    private Calcolatrice(){}
    public static int somma(int a, int b){
        return a+b;
    }


    public void sveglia(GiorniDellaSettimana giornoDellaSettimana){

/*
        switch (giornoDellaSettimana){

            case LUNEDI,MARTEDI,MERCOLEDI,GIOVEDI,VENERDI ->
                System.out.println("sveglia suona alle 8");


            case SABATO,DOMENICA ->
                System.out.println("sveglia suona alle 10");

            default->
                System.out.println("dormi");

        }*/


        if(     giornoDellaSettimana == GiorniDellaSettimana.LUNEDI ||
                giornoDellaSettimana == GiorniDellaSettimana.MARTEDI ||
                giornoDellaSettimana == GiorniDellaSettimana.MERCOLEDI ||
                giornoDellaSettimana == GiorniDellaSettimana.GIOVEDI ||
                giornoDellaSettimana == GiorniDellaSettimana.VENERDI )
        {
            System.out.println("sveglia suona alle 8");
        }else if( giornoDellaSettimana == GiorniDellaSettimana.SABATO ||
                giornoDellaSettimana == GiorniDellaSettimana.DOMENICA){
            System.out.println("sveglia suona alle 10");
        }else{
            System.out.println("dormi");
        }


    }
}
