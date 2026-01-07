/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja40h;

/**
 *
 * @author puelm
 */
public class Ja40h {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Camion camion1 = new Camion();
        camion1.afficher();
        camion1.set_modele("T440");
        camion1.charger(300); // 300
        camion1.charger(5000); // Erreur
        camion1.charger(-50); // 350
        camion1.afficher();
        camion1.decharger(200); // 150
        camion1.afficher();
        camion1.decharger(200); // Erreur
        camion1.afficher();
    }
    
}
