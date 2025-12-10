/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja18;
import java.util.Scanner;
/**
 *
 * @author PM504836
 */
public class Ja18 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        float nb1 = 0f;
        float nb2 = 0f;
        char op;
        
        System.out.println("Nombre 1: ");
        Scanner inNb1 = new Scanner(System.in);
        nb1 = inNb1.nextFloat();
        
        System.out.println("Opérateur ( x , + , - , / ): ");
        Scanner inOp = new Scanner(System.in);
        op = inOp.next().charAt(0);
        
        System.out.println("Nombre 2: ");
        Scanner inNb2 = new Scanner(System.in);
        nb2 = inNb2.nextFloat();
        
        if (op == '/') {
            System.out.println(nb1 + " / " + nb2 + " = " + (nb1 / nb2));
        } else if (op == '+') {
            System.out.println(nb1 + " + " + nb2 + " = " + (nb1 + nb2));
        } else if (op == '-') {
            System.out.println(nb1 + " - " + nb2 + " = " + (nb1 - nb2));
        } else if (op == 'x') {
            System.out.println(nb1 + " x " + nb2 + " = " + (nb1 * nb2));
        } else {
            System.out.println("Nan");
        }
    }
    
}
