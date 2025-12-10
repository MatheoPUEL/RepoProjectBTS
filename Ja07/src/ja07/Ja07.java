/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja07;
import java.util.Scanner;
/**
 *
 * @author puelm
 */
public class Ja07 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        float temp = 0f;
        
        System.out.println("Saisissez la température : ");
        Scanner inTemp = new Scanner(System.in);
        temp = inTemp.nextFloat();
        
        if(temp < 0 ) {
            System.out.println("L'état est solide");
        }
        if(temp >= 0 && temp < 100 ) {
            System.out.println("L'état est liquide");
        }
        if(temp >= 100) {
            System.out.println("L'état est gazeux");
        }
    }
    
}
