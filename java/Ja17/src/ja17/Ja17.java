/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja17;
import java.util.Scanner;
/**
 *
 * @author PM504836
 */
public class Ja17 {
    
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int nb;
        int heure;
        int reste;
        System.out.println("Nombre de minute(s) : ");
        Scanner inMn = new Scanner(System.in);
        nb = inMn.nextInt();
        
        heure = nb / 60;
        reste = nb % 60;
        
        if (reste < 10) {
            System.out.println("" + heure + "H0" + reste );
        } else {
            System.out.println("" + heure + "H" + reste );
        }
    }
    
}
