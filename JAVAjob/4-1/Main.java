package check;
import constants.Constants;

public class Main {

	private String firstName="Aki";
	private String lastName="Masato";
	
	public static void main(String[] args) {
	}
		
    
	private static void printName(String firstName,String lastName){
    System.out.println(firstName + lastName);
	}

	Pet pet = new Pet(CHECK_CLASS_JAVA,CHECK_CLASS_HOGE);
	RobotPet robotpet = new RobotPet(CHECK_CLASS_R2D2,CHECK_CLASS_LUKE);
	
	Pet.introduce();
	RobotPet.introduce();

}
	