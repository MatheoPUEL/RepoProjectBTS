/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja40d;
import ja40d.Voiture;
/**
 *
 * @author puelm
 */
public class Ja40d {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Voiture v1;
        v1 = new Voiture("rouge", "Renault", "Megane");
        v1.demarrer();
        v1.avancer(70);
        v1.afficher();
        
        Voiture v2;
        v2 = new Voiture("bleu", "Peugot", "208");
        v2.demarrer();
        v2.avancer(20);
        v2.afficher();
        
        Voiture v3;
        v3 = new Voiture("verte", "Citroen", "c3");
        v3.demarrer();
        v3.avancer(70);
        v3.afficher();
    }
    
}
