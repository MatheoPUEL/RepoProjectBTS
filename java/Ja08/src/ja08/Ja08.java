/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja08;
import java.util.Scanner;
/**
 *
 * @author puelm
 */
public class Ja08 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        float avg;
        
        System.out.println("Saisissez la moyenne au BAC : ");
        Scanner inAvg = new Scanner(System.in);
        avg = inAvg.nextFloat();
        
        System.out.println("Note : " + avg);
        
        if (avg >= 16 ) {
            System.out.println("Mention très bien");
        }
        if (avg < 16 && avg >= 14 ) {
            System.out.println("Mention bien");
        }
        if (avg < 14 && avg >= 12) {
            System.out.println("Mention assez bien");
        }
        if (avg < 12) {
            System.out.println("Pas de mention");
        }
    }
    
}
