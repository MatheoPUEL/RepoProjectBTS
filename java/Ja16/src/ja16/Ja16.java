/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja16;
import java.util.Scanner;
/**
 *
 * @author PM504836
 */
public class Ja16 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        int jour;
        int indice;
        String semaine[] = {"Jeudi", "Vendredi", "Samedi", "Dimanche", "Lundi", "Mardi", "Mercredi"};
        
        System.out.println("Numéro du jour : ");
        Scanner inJ = new Scanner(System.in);
        jour = inJ.nextInt();
        
        indice = (jour - 1) % 7;
        
        System.out.println("Le " + jour + " corresponds au jour : " + semaine[indice]);
        
    }
    
}
