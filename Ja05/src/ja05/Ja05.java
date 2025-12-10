/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja05;
import java.util.Scanner;
/**
 *
 * @author puelm
 */
public class Ja05 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int nb;
        int reste;
        System.out.println("Saisissez un nombre : ");
        Scanner inNb = new Scanner(System.in);
        nb = inNb.nextInt();
        
        System.out.println("Nombre : " + nb);
        reste = nb % 2;
        System.out.println("Reste : " + reste);
        
        if(reste == 0) {
            System.out.println("Ce nombre est pair");
        } else {
            System.out.println("Ce nombre est impair");
        }
    }
    
}
