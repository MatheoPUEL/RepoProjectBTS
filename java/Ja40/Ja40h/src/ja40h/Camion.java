/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ja40h;

/**
 *
 * @author puelm
 */
public class Camion extends Vehicule {
    private Integer charge = 0;
    
    public void set_charge(Integer kg) {
        this.charge = kg;
    }
    
    public Integer get_charge() {
        return this.charge;
    }
    
    public void getLibCharge() {
        System.out.println(this.charge + " kg");
    }
    
    public void charger(Integer kg) {
        if (this.charge + kg < 5000) {
            this.charge = this.charge + Math.abs(kg);
        } else {
            System.out.println("Charge maximale dépassée (5000 kg)");
        }
    }
    
    public void decharger(Integer kg) {
        if (this.charge - kg >= 0) {
            this.charge = this.charge - kg;
        } else {
            System.out.println("Charge insuffisante pour décharger : " + kg);
        }
    }
    
    public void afficher(){
        super.afficher();
        System.out.print("Charge : ");
        getLibCharge();
    }
}
