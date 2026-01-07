/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ja40d;

/**
 *
 * @author puelm
 */
public class Voiture {
    String couleur;
    private String marque;
    String modele;
    Integer compteur = 0;
    Boolean demarre=false;
    
    public Voiture (String couleur, String marque, String modele) {
        this.couleur = couleur;
        set_marque(marque);
        this.modele = modele;
    }
    
    public void set_marque(String marque) {
        if (marque == "Renault" || marque == "Dacia") {
            this.marque = marque;
        } else {
            System.out.println("Le marque doit être Renault ou Dacia");
        }
    }
    
    public void demarrer() {
        demarre = true;
    }
    public void avancer(Integer km) {
        compteur = compteur + km;
    }
    public void arreter() {
        demarre = false;
    }
    public void afficher() {
        System.out.println("\n-- Infos sur la voiture --");
        System.out.println("Couleur : " + couleur);
        System.out.println("Marque : " + marque);
        System.out.println("Modèle : " + modele);
        System.out.println("Compteur : " + compteur);
        System.out.println("Moteur démarré ? : " + demarre);
    }
}
