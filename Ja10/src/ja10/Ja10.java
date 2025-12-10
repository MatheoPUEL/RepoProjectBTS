/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja10;
import java.util.Scanner;

/**
 *
 * @author PM504836
 */
public class Ja10 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        double a;
        double b;
        double c;

        Scanner inA = new Scanner(System.in);
        a = inA.nextFloat();
        
        Scanner inB = new Scanner(System.in);
        b = inB.nextFloat();
        
        Scanner inC = new Scanner(System.in);
        c = inC.nextFloat();
        
        if (a == 0) {
            System.out.println("Ce n'est pas une équation du second degré (a = 0).");
            return;
        }

        double discriminant = (b * b) - (4 * a * c);
        System.out.println("Discriminant = " + discriminant);

        if (discriminant > 0) {
            System.out.println("Deux solutions réelles :");
            double x1 = (-b + Math.sqrt(discriminant)) / (2 * a);
            double x2 = (-b - Math.sqrt(discriminant)) / (2 * a);

            System.out.println("x1 = " + x1);
            System.out.println("x2 = " + x2);

        } else if (discriminant == 0) {
            System.out.println("Une racine double :");
            double x = -b / (2 * a);
            System.out.println("x = " + x);

        } else {
            System.out.println("Aucune solution réelle (discriminant < 0).");
        }
    }
    
}
