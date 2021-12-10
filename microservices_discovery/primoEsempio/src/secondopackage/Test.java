import java.util.ArrayList;

public class Test {

   static  int count = 0;

    private int i =0;
    public void setCount(){
        while(i <5){
            i++;
            count++;
        }
    }

    public static void main(String[] args) {
        Test test1 = new Test();
        Test test2 = new Test();

        test1.setCount();
        test2.setCount();

        System.out.println("Test1 = " + test1.count + " - Test2= " + Test.count);

        System.out.println(test1);
        System.out.println(test2);
        ArrayList<Test> listaInteri = new ArrayList<>();
        listaInteri.add(test1);
        listaInteri.add(null);
        listaInteri.add(test2);
        System.out.println(listaInteri.remove(test1));
        System.out.println(listaInteri.remove(test1));
        listaInteri.remove(null);

        System.out.println(listaInteri.get(0));

        Calcolatrice.somma(2,2);

        System.out.println(Math.max(5,10));

    }
}
