/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja20;
import java.util.Scanner;
import java.util.Random;

/**
 *
 * @author puelm
 */
public class Ja20 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int nbQuestion = 5;
        int points = 0;
        int nb1;
        int nb2;
        int reponse;
        
        System.out.println("Quizz de multiplication sur " + nbQuestion + " questions");

        for (int i = 0; i <= nbQuestion; i++) {
            // Génération des nombres aléatoires
            Random randNb1 = new Random();
            nb1 = randNb1.nextInt(8) + 2;
            Random randNb2 = new Random();
            nb2 = randNb2.nextInt(13) + 2;
            
            // Début du quiz
            
            System.out.println("Combien font: " + nb1 + " x " + nb2);
            Scanner inReponse = new Scanner(System.in);
            reponse = inReponse.nextInt();
            
            if (reponse == (nb1 * nb2)) {
                points++;
                System.out.println("Bonne réponse ! " + points + "/" + nbQuestion);
            } else {
                System.out.println("Mauvaise réponse ! C'était: " + nb1*nb2);
            }
        }
        
        System.out.println("Vous avez " + points + " point(s) sur " + nbQuestion + " question(s)");
    }
    
}
