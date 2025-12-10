/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja04;
import java.util.Scanner;
/**
 *
 * @author puelm
 */
public class Ja04 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        float rayon;
        float pi = 3.141592653f;
        System.out.println("Saissisez le rayon du cercle: ");
        Scanner inRayon = new Scanner(System.in);
        rayon = inRayon.nextFloat();
        
        System.out.println("Rayon : " + rayon );
        System.out.println("Surface : " + (rayon * rayon) * pi);
        System.out.println("Circonférence : " + (2 * rayon) * pi);
    }
    
}
