/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ja40f;

/**
 *
 * @author puelm
 */
public class Voiture {
    private String couleur;
    private String marque;
    private String modele;
    private Integer compteur = 0;
    private Boolean demarre=false;
    
    public Voiture () {
        set_couleur("blanc");
        set_marque("Renault");
        set_modele("Megane");
    }
    public Voiture (String couleur, String marque, String modele) {
        set_couleur(couleur);
        set_marque(marque);
        set_modele(modele);
    }
    
    
    public void set_couleur(String couleur) {
        if (couleur.equals("bleu") || couleur.equals("blanc") || couleur.equals("rouge")) {
            this.couleur = couleur;
        } else {
            System.out.println("La couelur doit être bleu, blanc ou rouge : " + couleur);
        }
    }
    public void set_marque(String marque) {
        if (marque.equals("Renault") || marque.equals("Dacia")) {
            this.marque = marque;
        } else {
            System.out.println("Le marque doit être Renault ou Dacia");
        }
    }
    
    public void set_modele(String modele) {
        this.modele = modele;
    }
    
    public void demarrer() {
        this.demarre = true;
    }
    public void avancer(Integer km) {
        if (km > 0) {
            this.compteur = this.compteur + km;
        } else {
            System.out.println("Pas de valeur négative pour le compteur : " + km);
        }
    }
    
    public void arreter() {
        this.demarre = false;
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
