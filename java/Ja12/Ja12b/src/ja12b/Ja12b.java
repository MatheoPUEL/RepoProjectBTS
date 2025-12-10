/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja12b;
import java.util.Scanner;
/**
 *
 * @author PM504836
 */
public class Ja12b {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int nb;

        System.out.println("Entrez votre nombre : ");
        Scanner inNb = new Scanner(System.in);
        nb = inNb.nextInt();

        System.out.println("-- Table de " + nb + " --");

        int i = 1;
        while (i <= 10) {
            System.out.println(nb + " x " + i + " = " + (nb * i));
            i++;
        }
    }
    
}
