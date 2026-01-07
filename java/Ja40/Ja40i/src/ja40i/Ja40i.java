/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja40i;
import ja40i.Vehicule;
/**
 *
 * @author PM504836
 */
public class Ja40i {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // Voiture
        Voiture voiture1 = new Voiture("bleu", "Dacia", "Sandero");
        voiture1.afficher();
        // Camion sans paramètre
        Camion camion1 = new Camion();
        camion1.afficher();
        // Camion avec 3 paramètres
        Camion camion2 = new Camion("blanc", "Renault", "T440");
        camion2.afficher();
        // Camion avec 4 paramètres
        Camion camion3 = new Camion("rouge", "Renault", "T520", 4500);
        camion3.afficher();
    }
    
}
