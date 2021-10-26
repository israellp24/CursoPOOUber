public class Car {
    Integer id;
    String license;
    Account driver;
    private Integer passenger;

    public Car(String license, Account driver){
        this.license = license;
        this.driver= driver;
    }

    void printDataCar(){
        if(passenger !=null){
            System.out.println("Licence: "+ license + " Name Drive: "+ driver.name+" Passenger "+passenger);
        }
    }

    public Integer getPassenger(){
        return passenger;
    }

    public void setPassenger(Integer passenger){
        if(passenger==4){
            this.passenger=passenger;
        }else{
            System.out.println("No puedes ingresar un valor menor a 4");
        }
    }
}
