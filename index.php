<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="styleee.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="#" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Entrer ici votre informations</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nom</label>
                            <input type="text" name="nom" placeholder="Entrer votre nom" required>
                        </div>

                        <div class="input-field">
                            <label>Prénom</label>
                            <input type="text" name="prenom" placeholder="Entrer votre prenom" required>
                        </div>

                        <div class="input-field">
                            <label>Adresse</label>
                            <input type="text" name="adresse" placeholder="Entrer votre adresse" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Entrer votre email" required>
                        </div>

						<div class="input-field">
                            <label>Telephone</label>
                            <input type="number" name="telephone" placeholder="Entrer votre numéro de telephone" required>
                        </div>

						
                        <div class="input-field">
                            <label>CIN</label>
                            <input type="text" name="cin" placeholder="Entrer votre CIN" required>
                        </div>

                        
						<div class="input-field">
                            <label>Date de naissance</label>
                            <input type="date" name="date_naissance" placeholder="Entrer votre date de naissance" required>
                        </div>
					
						<div class="input-field">
                            <label> Type</label>
                            <select required name="type">
                                <option disabled selected>type</option>
                                <option>Etudiant</option>
                                <option>Fonctionnaire</option>
                                <option>Employé</option>
								<option> Femme au foyer</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Entrer votre username" required>
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Entrer votre password" required>
                        </div>
						

                    </div>

                    <button type="submit" name="submit" class="nextBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>


                        
                    </div>
                </div>


        </form>
    </div>

    <script src="main.js"></script>


	<?php
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$basededonné = 'medatique';
			
			$connexion = new mysqli ($server, $username, $password, $basededonné );
			
			


			if (isset($_POST['submit'])) {
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$adresse = $_POST['adresse'];
				$email = $_POST['email'];
				$telephone = $_POST['telephone'];
				$cin = $_POST['cin'];
				$date_naissance = $_POST['date_naissance'];
				$type = $_POST['type'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				$conn = mysqli_connect('localhost', 'root', '', 'medaitique');
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				$sql = "INSERT INTO adherent (nom, prenom, adresse, email, telephone,C_I_N, date_naissance, type, username, password, date_inscription) VALUES ('$nom', '$prenom', '$adresse', '$email', '$telephone', '$cin', '$date_naissance', '$type', '$username', '$password', NOW())";
				
				if ($conn->query($sql) === TRUE) {
					header("Location: signin.php");
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close();
			}

			

			?>


	
</body>
</html>
