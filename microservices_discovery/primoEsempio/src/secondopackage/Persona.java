public class Persona {

    //dichiarazione variabili di classe
    public String nome;
    private String citta;
    int eta;
    String[] arrayDiClasse;
    boolean isMaggiorenne;



    public void modificaNome(String nomeInput){
        this.nome = nomeInput;

    }

    public void stampaNome(){
        System.out.println("il nome è " + this.nome);
    }




    public Persona(){

        System.out.println("costruisco la persona");
    }

    //costruttore custom
    public Persona(String nomeInput, String cittaInput, int etaInput){






        this.nome = nomeInput;
        this.citta = cittaInput;
        this.eta = etaInput;
    }

    //costruttore custom
    public Persona(String nomeInput, String cittaInput){
        this.nome = nomeInput;
        this.citta = cittaInput;

    }

    public Persona(String[] arrayInput){
        this.arrayDiClasse = arrayInput;


    }


}
