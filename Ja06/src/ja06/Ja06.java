/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja06;
import java.util.Scanner;
/**
 *
 * @author puelm
 */
public class Ja06 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        float a, b, c;
        
        System.out.println("Saisissez a : ");
        Scanner inA = new Scanner(System.in);
        a = inA.nextFloat();
        
        System.out.println("Saisissez b : ");
        Scanner inB = new Scanner(System.in);
        b = inB.nextFloat();
        
        System.out.println("Saisissez c : ");
        Scanner inC = new Scanner(System.in);
        c = inC.nextFloat();
        
        System.out.println("a : " + a + "\nb : " + b + "\nc : " + c);
        
        if (a > b && a > c ) {
            System.out.println("Maxi : " + a);
        }
        if (b > a && b > c ) {
            System.out.println("Maxi : " + b);
        }
        if (c > b && c > a ) {
            System.out.println("Maxi : " + c);
        }
    }
    
}
