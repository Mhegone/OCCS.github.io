<?php
include "config.php";

class Member{
    private $acceptedFormats = ['image/png', 'image/jpeg', 'image/gif'];
	private $first_name;
    private $middle_name;
    private $last_name;
    private $position;
    public $Email;

    public function __construct($firstname, $middlename, $lastname, $position, $email){
        $this->first_name = $firstname;
        $this->middle_name = $middlename;
        $this->last_name = $lastname;
        $this->position = $position;
        $this->Email = $email;
    }
    public function setPosition() {
        switch ($this->position) {
            case 'Unchosen':
				?>
				<script>
					alert("Set the position first");
					window.location.href="FacultyAdmin.php";
				</script>
				<?php
				break;
            case 'ProgramChair':
                $this->position = 'Program Chair(IT Dept)';
                break;
            case 'Secretary':
                $this->position = 'Secretary(IT Dept)';
                break;
            case 'FacultyProfessor1':
                $this->position = 'Faculty Professor 1';
                break;
            case 'FacultyProfessor2':
                $this->position = 'Faculty Professor 2';
                break;
            case 'FacultyProfessor3':
                $this->position = 'Faculty Professor 3';
                break;
            case 'FacultyProfessor4':
                $this->position = 'Faculty Professor 4';
                break;
            case 'FacultyProfessor5':
                $this->position = 'Faculty Professor 5';
                break;
            case 'TechSupport1':
                $this->position = 'Tech Support 1';
                break;
            case 'TechSupport2':
                $this->position = 'Tech Support 2';
                break;
            default:
                $this->position = "unset";
                break;    
        }
    }
	public function get_Position(){
        return $this->position;
    }

	public function uploadFile($file){
		if (is_array($file)){
			if (in_array($file['type'], $this->acceptedFormats)){
				move_uploaded_file($file["tmp_name"], 'Member_pfp/'.$file['name']);
			}else{
				die('File format is not supported!');
			}
		}else{
			die('File was not uploaded');
		}
	}
}

$target_dir = "Member_pfp/";
$profile = $target_dir . $_FILES['MemberPFP']['name'];



if(isset($_POST['addFaculty'])){
	$first_name = mysqli_real_escape_string($conn,$_POST['Firstname']);
	$middle_name = mysqli_real_escape_string($conn,$_POST['Middlename']);
	$last_name = mysqli_real_escape_string($conn,$_POST['Lastname']);
	$position = mysqli_real_escape_string($conn,$_POST['Position']);
	$email = mysqli_real_escape_string($conn,$_POST['Email']);
	$memberPFP = mysqli_real_escape_string($conn,$_POST['MemberPFP']);
	
	$Newmember = new Member($first_name, $middle_name, $last_name, $position, $email);
	
	$Newmember->setPosition();
	
	$position = $Newmember->get_Position();

	
$sql_update = "UPDATE tbl_members SET
				member_fname = '$first_name',
				member_mname = '$middle_name',
				member_lname = '$last_name',
				member_email = '$email',
				member_pfp = '$profile',
    				active = 1
				WHERE member_position = '$position'";
if($result_update = mysqli_query($conn, $sql_update)){
	?>
	
	<script>
		alert('Successfully Update User');
		window.location.href='FacultyAdmin.php';
	</script>

	<?php
} else {

	if(!$result_update) {die('Unsucessful added'. mysqli_error()); }
}

if($result = mysqli_query($conn, $sql_update)){  // Will run this IF added data is Successful

	if (isset($_FILES['MemberPFP'])){
		$Newmember->uploadFile($_FILES['MemberPFP']);
		
				?>
				<script>
					alert("Your File has been uploaded");
					window.location.href="FacultyAdmin.php";
				</script>
				<?php
	}else{
		die('file has not been submitted');
	}
	

} else {  // Will run this IF added data is Unsuccessful

}
	mysqli_close($conn);
}