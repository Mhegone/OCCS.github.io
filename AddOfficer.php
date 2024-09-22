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
					window.location.href="OfficersAdmin.php";
				</script>
				<?php
				break;
            case 'President':
                $this->position = 'President';
                break;
            case 'VicePresident(internal)':
                $this->position = 'Vice President(Internal)';
                break;
            case 'VicePresident(external)':
                $this->position = 'Vice President(External)';
                break;
            case 'Secretary':
                $this->position = 'Secretary';
                break;
            case 'Auditor':
                $this->position = 'Auditor';
                break;
            case 'Treasurer':
                $this->position = 'Treasurer';
                break;
            case 'PRO':
                $this->position = 'P.R.O.';
                break;
            case 'GraphicDesigner':
                $this->position = 'Graphic Designer';
                break;
            case 'ProjectManager1':
                $this->position = 'Project Manager 1';
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



if(isset($_POST['add'])){
	$first_name = mysqli_real_escape_string($conn,$_POST['Firstname']);
	$middle_name = mysqli_real_escape_string($conn,$_POST['Middlename']);
	$last_name = mysqli_real_escape_string($conn,$_POST['Lastname']);
	$position = mysqli_real_escape_string($conn,$_POST['Position']);
	$email = mysqli_real_escape_string($conn,$_POST['Email']);
	$memberPFP = mysqli_real_escape_string($conn,$_POST['MemberPFP']);
	
	$Newmember = new Member($first_name, $middle_name, $last_name, $position, $email);
	
	$Newmember->setPosition();
	
	$position = $Newmember->get_Position();

	
$sql_update = "UPDATE tbl_officers SET
				officer_fname = '$first_name',
				officer_mname = '$middle_name',
				officer_lname = '$last_name',
				officer_email = '$email',
				officer_pfp = '$profile',
    				active = 1
				WHERE officer_position = '$position'";
if($result_update = mysqli_query($conn, $sql_update)){
	?>
	
	<script>
		alert('Successfully Added User');
		window.location.href='OfficersAdmin.php';
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
					window.location.href="OfficersAdmin.php";
				</script>
				<?php
	}else{
		die('file has not been submitted');
	}
	

} else {  // Will run this IF added data is Unsuccessful

}
	mysqli_close($conn);
}