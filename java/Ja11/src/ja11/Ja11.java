/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ja11;
import java.util.Scanner;
/**
 *
 * @author PM504836
 */
public class Ja11 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        String polyt[] = {
            "???",
            "Monogone",
            "Digone",
            "Triangle",
            "Quadrilatère",
            "Pentagone",
            "Hexagone",
            "Heptagone",
            "Octogone",
            "Ennéagone",
            "Décagone",
            "Hendécagone",
            "Dodécagone",
            "Tridécagone",
            "Tétradécagone",
            "Pentadécagone",
            "Hexadécagone",
            "Heptadécagone",
            "Octadécagone",
            "Ennéadécagone",
            "Icosagone"
        };
        int poly;
        System.out.println("Nombre de côtés : ");
        Scanner inPoly = new Scanner(System.in);
        poly = inPoly.nextInt();
        System.out.println("Un polygone à " + poly + " coté(s) est un " + polyt[poly - 1]);
    }
    
}
