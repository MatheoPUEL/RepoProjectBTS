/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja13;
import java.util.Scanner;
/**
 *
 * @author PM504836
 */
public class Ja13 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int height, width;
        
        System.out.println("Largeur : ");
        Scanner inWidth = new Scanner(System.in);
        width = inWidth.nextInt();
        
        System.out.println("Hauteur : ");
        Scanner inHeight = new Scanner(System.in);
        height = inHeight.nextInt();
        
        System.out.println("-- Rectangle " + width + "x" + height + " --");
        for (int i = 1; i <= height; i++) {
            for (int j = 1; j <= width; j++) {
                System.out.print("*");
            }
            System.out.print("\n");
        }
    }
    
}
