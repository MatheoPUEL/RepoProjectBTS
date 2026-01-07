/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja40e;
import ja40e.Voiture;
/**
 *
 * @author puelm
 */
public class Ja40e {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Voiture voiture1 = new Voiture("blanc", "Renault", "Megane");
        voiture1.demarrer();
        voiture1.avancer(50);
        voiture1.avancer(-40);
        voiture1.set_couleur("rose");
        voiture1.set_marque("Honda");
        voiture1.afficher();
    }
    
}
