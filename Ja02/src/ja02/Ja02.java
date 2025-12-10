/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja02;
import java.util.Scanner;
/**
 *
 * @author puelm
 */
public class Ja02 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        float euros = 0f;
        float change = 0.88351f;
        
        System.out.println("Saisissez le montatn en euros: ");
        Scanner montant = new Scanner(System.in);
        euros = montant.nextFloat();
        
        System.out.println("Montant en euros : " + euros);
        System.out.println("Montant en dollars : " + (euros * (1 / change)));
    }
    
}
