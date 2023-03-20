<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<section>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/24manguel-superJumbo.jpg" alt="livre" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                                </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </section>
<?php
        // Connexion à la base de données
        require_once 'connexion.php';

        // Vérifier la connexion
        if (!$connexion) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Récupérer les données de la base de données
        $sql = "SELECT * FROM ouvrage";
        $result = mysqli_query($connexion, $sql);

        // Vérifier s'il y a des données à afficher
        if (mysqli_num_rows($result) > 0) {
            // Parcourir les données et afficher les cartes
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="<?php echo $row['image']; ?>" alt="livre" />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">"<?php echo $row['titre']; ?>"</h5>
                                        <h3 class="fw-bolder">"<?php echo $row['auteur']; ?>"</h3>
                                        <img class="card-img-top" src="<?php echo $row['image']; ?>" alt="livre" />
                                        <h3 class="fw-bolder">"<?php echo $row['etat']; ?>"</h3>
                                        <h3 class="fw-bolder">"<?php echo $row['type']; ?>"</h3>
                                        <h3 class="fw-bolder">"<?php echo $row['date_edition']; ?>"</h3>
                                        <h3 class="fw-bolder">"<?php echo $row['date_achat']; ?>"</h3>
                                        <!-- Product price-->
                                        <h3 class="fw-bolder">"<?php echo $row['nombre_pages']; ?>"</h3>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            }
        }
        
        // Fermer la connexion
        mysqli_close($connexion);
    ?>
        
        
        
        
        
        
        




</body>
</html>