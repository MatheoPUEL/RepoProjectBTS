/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja19;
import java.util.Scanner;
/**
 *
 * @author PM504836
 */
public class Ja19 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        char choix;
        int nb;
        int min = 1;
        int max = 100;
        int guess = 0;
        System.out.println("Pensez à un chiffre entre 1 et 100");
        
        
        for (int i=1; guess != 1; i++) {
           
            nb = (min + max) / 2;
            System.out.println("Je pense a : " + nb);
            Scanner inChoix = new Scanner(System.in);
            choix = inChoix.next().charAt(0);
            
            if (choix == '-') {
                max = nb - 1;
            } else if (choix == '+') {
                min = nb + 1;
            } else if (choix == '=') {
                System.out.println("j'ai trouvé en " + i + " coup(s)");
                break;
            }
            
        }       
    }
    
}
