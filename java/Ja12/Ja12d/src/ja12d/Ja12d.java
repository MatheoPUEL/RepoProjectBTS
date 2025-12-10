/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja12d;
import java.util.Scanner;

/**
 *
 * @author PM504836
 */
public class Ja12d {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
                int nb;
        
        System.out.println("Entrez votre nombre : ");
        Scanner inNb = new Scanner(System.in);
        nb = inNb.nextInt();
        
        System.out.println("-- Table de " + nb + " --");
        
        for (int i = 10; i >= 1; i--) {
            System.out.println(nb + " x " + i + " = " + (nb * i));
        }
    }
    
}
