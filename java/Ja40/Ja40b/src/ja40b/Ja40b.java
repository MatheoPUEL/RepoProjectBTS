/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja40b;
import ja40b.Voiture;
/**
 *
 * @author puelm
 */
public class Ja40b {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Voiture v1;
        v1 = new Voiture();
        v1.demarrer();
        v1.marque = "Renault";
        v1.modele = "Megane";
        v1.avancer(70);
        
        Voiture v2;
        v2 = new Voiture();
        v2.demarrer();
        v2.marque = "Peugot";
        v2.modele = "208";
        v2.avancer(20);
        
        Voiture v3;
        v3 = new Voiture();
        v3.demarrer();
        v3.marque = "Citroen";
        v3.modele = "C3";
        v3.avancer(0);
        
        v1.afficher();
        v2.afficher();
        v3.afficher();
    }
    
}
