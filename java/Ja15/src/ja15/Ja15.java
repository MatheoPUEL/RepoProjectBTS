/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja15;
import java.util.Scanner;
/**
 *
 * @author PM504836
 */
public class Ja15 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        String phrase;
        String phrase2 = "";
        
        System.out.println("Votre phrase : ");
        Scanner inPhrase = new Scanner(System.in);
        phrase = inPhrase.nextLine();
        
        System.out.println("Chaine : " + phrase);
        
        
        for (int i = phrase.length() - 1; i >=0; i-- ) {
            phrase2 = phrase2 + phrase.charAt(i);
        }
        
        System.out.println("Chaine 2 : " + phrase2);
    }
    
}
