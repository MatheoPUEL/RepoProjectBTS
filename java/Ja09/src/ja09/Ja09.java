/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja09;
import java.util.Scanner;
/**
 *
 * @author PM504836
 */
public class Ja09 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        float masse, taille, indice;
        System.out.println("Saisissez la taille : ");
        Scanner inTaille = new Scanner(System.in);
        taille = inTaille.nextFloat();
        
        System.out.println("Saisissez la masse : ");
        Scanner inMasse = new Scanner(System.in);
        masse = inMasse.nextFloat();
        
        System.out.println("Masse: " + masse);
        System.out.println("Taille: " + taille);
        
        indice = masse / (taille * taille);
        
        System.out.println("Indice: " + indice);
        
        if (indice < 16.5) {
            System.out.println("Interprétation : dénutrition ou famine");
        } else if (indice >= 16.5 && indice < 18.5) {
            System.out.println("Interprétation : Maigreur");
        } else if (indice >= 18.5 && indice < 25) {
            System.out.println("Interprétation : Corpulence normale");
        } else if (indice >= 25 && indice < 30) {
            System.out.println("Interprétation : Surpoids");
        } else if (indice >= 30 && indice < 35) {
            System.out.println("Interprétation : Obésité modérée");
        } else if (indice >= 35 && indice < 40 ) {
            System.out.println("Interprétation : Obésité sévère");
        } else {
            System.out.println("Interprétation : Obésité morbide ou sévère");
        }
    }
    
}
