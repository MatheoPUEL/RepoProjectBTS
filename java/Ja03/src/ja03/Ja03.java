/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja03;
import java.util.Scanner;
/**
 *
 * @author puelm
 */
public class Ja03 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        float t1, t2, t3;
        
        System.out.println("Saisissez la temprétaure 1");
        Scanner InTemp1 = new Scanner(System.in);
        t1 = InTemp1.nextFloat();
        
        System.out.println("Saisissez la temprétaure 2");
        Scanner InTemp2 = new Scanner(System.in);
        t2 = InTemp2.nextFloat();
        
        System.out.println("Saisissez la temprétaure 3");
        Scanner InTemp3 = new Scanner(System.in);
        t3 = InTemp3.nextFloat();
        
        System.out.println("t1 : " + t1 + "\nt2 : " + t2 + "\nt3 : " + t3);
        float sum = t1 + t2+ t3;
        System.out.println("Somme : " + sum);
        System.out.println("Moyenne : " + (sum / 3));
    }
    
}
