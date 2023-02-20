package check;
import constants.Constants;

public class Main {

	private static String firstName="Aki";
	private static String lastName="Masato";
	
	public static void main(String[] args) {
		printName(firstName,lastName);
		Pet pet = new Pet(Constants.CHECK_CLASS_JAVA,Constants.CHECK_CLASS_HOGE);
	    RobotPet robotpet = new RobotPet(Constants.CHECK_CLASS_R2D2,Constants.CHECK_CLASS_LUKE);
	
	    pet.introduce();
	    robotpet.introduce();
	}
		


	private static void printName(String name,String name2){
    System.out.println(firstName + lastName);
	}

}

	