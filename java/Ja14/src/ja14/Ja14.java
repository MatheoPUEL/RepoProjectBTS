/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja14;
import java.util.Scanner;
/**
 *
 * @author PM504836
 */
public class Ja14 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        float[] notes = new float[100];
        int i = 0;
        float valeur;

        Scanner in = new Scanner(System.in);

        do {
            System.out.println("Note " + (i + 1) + " : ");
            valeur = in.nextFloat();

            if (valeur < 0) {
                break;
            }

            notes[i] = valeur;
            i++;

        } while (i < notes.length);

        float min = notes[0];
        float max = notes[0];
        float sum = notes[0];
        
        for (int j = 1; j < i; j++) {
            if (notes[j] < min) min = notes[j];
            if (notes[j] > max) max = notes[j];
            
            sum = sum + notes[j];
        }
        
        System.out.println("Nb note(s) : " + i);
        System.out.println("Note mini : " + min);
        System.out.println("Note maxi : " + max);
        System.out.println("Somme des notes : " + sum);
        System.out.println("Moyenne des notes : " + sum / i);
        
    }
}