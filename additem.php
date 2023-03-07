<?php
// $host = "localhost";
// $username = "root";
// $password = "";
// $dbname = "users";

// // Create a PDO database connection object
// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

require_once 'oopConnection.php';


$db = new Database("localhost", "root", "", "books");
$conn = $db->getConnection();





class ouvrage {
    public $title;
    public $auteurname;
    public $image;
    public $state;
    public $type;

    public $edition_date;
    public $purshase_date;
    public $pages_num;

    
    public function __construct($title, $auteurname, $image, $state, $type, $edition_date, $purshase_date, $pages_num) {

        $this->title = $title;
        $this->auteurname = $auteurname;
        $this->image = $image;
        $this->state = $state;
        $this->type = $type;
        $this->edition_date = $edition_date;
        $this->purshase_date = $purshase_date;
        $this->pages_num = $pages_num;


    }
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {


 $img_name = $_FILES['my_image']['name'];
 $img_size = $_FILES['my_image']['size'];
 $img_tmp_name = $_FILES['my_image']['tmp_name'];
 $img_error = $_FILES['my_image']['error'];

 if ($img_error === 0) {
    if ($img_size > 325000) {
        $em_error = "your image is too large";
        echo $em_error;
        exit();

    } else {
        $img_type = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_type_lowercase = strtolower($img_type);
        $allowed_type = array("jpg", "jpeg", "png");
        echo $img_type;
        if (in_array($img_type_lowercase, $allowed_type)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_type_lowercase;
            $img_upload_path = 'uploads/'.$new_img_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);

           echo 'right type';

        } else {
            echo 'wrong type';
            exit();
        
        }
     
    }
 } else {
    echo 'an error has acourred';
    exit();


 }







$title = $_POST['title'];
$auteurname = $_POST['auteurname'];
$image = $new_img_name;
$state = $_POST['state'];
$type = $_POST['type'];
$edition_date = $_POST['editiondate'];
$purshase_date = $_POST['purshasedate'];
$pages_num = $_POST['pages'];


$num_inserts = $_POST['num_inserts'];

// Loop to insert the data the specified number of times
for ($i = 0; $i < $num_inserts; $i++) {


// Create a new Contact object
$ouvrage = new ouvrage($title, $auteurname, $image, $state, $type, $edition_date, $purshase_date, $pages_num);
var_dump($ouvrage);



$stmt = $conn->prepare("INSERT INTO ouvrage (titre, nom_lauteur, image, status, type , date_edition, date_purchase, num_pages) VALUES (:titre, :nom_lauteur, :image, :status, :type, :date_edition, :date_purchase, :num_pages)");
echo  $new_img_name;

// Bind the contact's data to the statement
$stmt->bindParam(":titre", $ouvrage->title);
$stmt->bindParam(":nom_lauteur", $ouvrage->auteurname);
$stmt->bindParam(":image", $ouvrage->image);
$stmt->bindParam(":status", $ouvrage->state);
$stmt->bindParam(":type", $ouvrage->type);
$stmt->bindParam(":date_edition", $ouvrage->edition_date);
$stmt->bindParam(":date_purchase", $ouvrage->purshase_date);
$stmt->bindParam(":num_pages", $ouvrage->pages_num);



// Execute the statement
if ($stmt->execute()) {
    echo "Contact added successfully";
} else {
    echo "Error adding contact: ";
}
}
}
// Close the statement and database pdoection

?>
<a href="officePage.php">bgbhg</a>