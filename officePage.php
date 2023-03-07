<?php
include('includes/header.php');
?>




<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="assets/logo1.png" style="width: 225px; height: 66px;" alt="Fresh Pages" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" >About Us</a>
        </li>
         <li class="nav-item">
         <a class="nav-link" >About Us</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" >About Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<div class="jumbotron jumbotron-fluid" style="background-image: url('assets/assets.png');">
  <div class="container">
    <h1 class="display-4">Ajouter une ouvrage cela</h1>
    <p class="lead">Lorem ipsum dolor sit amet, sdcdcdscdsc consectetur adipiscing elit.</p>
  </div>
</div>



<div class="" style="width: 50%; margin: 5% auto 2% 37%;">


<form action="additem.php" method="POST" enctype="multipart/form-data">
<p class="" style="margin-left: 43px;">Ajouter une ouvrage sur la médiathèque mantenan !</p>

<div class="mt-3">

<div class="row mb-3">
  <div class="col-md-4">
    <input type="file" class="form-control" placeholder="Place an image" name="my_image">
  </div>
  <div class="col-md-3">
    <input type="text" class="form-control" placeholder="Titre" name="title">
  </div>
 </div>

<div class="row mb-3">
    
  <div class="col-md-4">
    <input type="text" class="form-control" placeholder="Le nom d'auteur" name="auteurname">
  </div>
  <div class="col-md-3">
  <select class="form-control" name="type">
      <option value="">-- choisir une type --</option>
      <option value="Livres">Livres</option>
      <option value="des revues">des revues</option>
      <option value="des romans">des romans</option>
      <option value="des cassettes">des cassettes</option>
      <option value="CDs">CDs</option>
      <option value="DVDs">DVDs</option>
    </select>

  </div>
  </div>




  <div class="row mb-3">

  <div class="col-md-3">
    <input type="number" placeholder="Le nombre des pages" class="form-control" name="pages">
  </div>

  <div class="col-md-4">
    <input type="date" placeholder="La date d'edition" class="form-control" name="editiondate">
  </div>

</div>

<div class="row mb-3">
 
  <div class="col-md-3">
    <input type="date" placeholder="La date d'achat" class="form-control" name="purshasedate">
  </div>

  <div class="col-md-4">
    <select class="form-control" name="state">
      <option value="">-- L'etat d'ouvrage --</option>
      <option value="Neuf">Neuf</option>
      <option value="Bon état">Bon état</option>
      <option value="Acceptable">Acceptable</option>
      <option value="Assez usé">Assez usé</option>
      <option value="Déchiré">Déchiré</option>
    </select>
  </div>

  </div>

  <div class="row mb-3">
      
        <div class="col-sm-5 mt-1">
      <p>duplicate this item as many as you wish</p>
      </div>

  <div class="col-md-2">
    <input type="number" placeholder="* Times" class="form-control" name="num_inserts">
  </div>
  </div>

  <div class="row addouvragebtn" >
  <button type="submit" class="btn btn-primary" name="upload">Inser ouvrage</button>
  </div>

</div>


</form>
</div>









<?php

require_once 'oopConnection.php';


$db = new Database("localhost", "root", "", "books");
$conn = $db->getConnection();



$sql = "SELECT * FROM ouvrage";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>



<div class="container d-flex flex-wrap wrap gap-5">
  <?php foreach ($rows as $row) { ?>




    <div class="card" style="width: 18rem;">
  <img class="card-img-top"  src="uploads/<?php echo $row['image']; ?>" alt="Card image cap">
  <div class="card-body">
    <h4 style="color: #D32F26" class="card-title"><?php echo $row['titre']; ?></h4>
    <h5 class="card-title"><strong>Type :</strong> <?php echo $row['type']; ?></h5>
    <h5 class="card-title"><strong>l'état </strong> <?php echo $row['status']; ?></h5>

    <p class="card-text"><strong>Auteur nom </strong> <?php echo $row['nom_lauteur']; ?></p>
    <div >
      <span><strong>La date d'edition : </strong><?php echo $row['date_edition']; ?></span><br>
      <span><strong>La date d'achat : </strong><?php echo $row['date_purchase']; ?></span>
    </div>
    
    <h5 class="mb-4">Le nombre des pages</strong> <?php echo $row['num_pages']; ?></h5><br>

    <div class="d-flex">
          <a href="" class="btn btn-info mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>    
          <div>
            <input type="hidden" class="delete_id_value" value="<?php echo $row['code_ouvrage'];  ?>">
            <a class="confirm_the_delete btn btn-danger ml-2">DELETE</a>
          </div>
    </div>
</div>
</div>


  <?php } ?>

  </div>


















  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="exampleModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Large Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal content goes here.</p>




   <form action="additem.php" method="POST" enctype="multipart/form-data" class="mx-auto">
  <h3 class="text-center mb-4">Ajouter une ouvrage sur la médiathèque mantenan !</h3>
  <div class="row mb-4">

    <div class="col-md-8 mb-3 mb-md-0">
      <input type="file" class="form-control" placeholder="Place an image" name="my_image">
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="Titre" name="title">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6 mb-3 mb-md-0">
      <input type="text" class="form-control" placeholder="Le nom d'auteur" name="auteurname">
    </div>
    <div class="col-md-6">
      <select class="form-control" name="type">
        <option value="">-- choisir une type --</option>
        <option value="Livres">Livres</option>
        <option value="des revues">des revues</option>
        <option value="des romans">des romans</option>
        <option value=" des cassettes vidéo"> des cassettes vidéo</option>
        <option value="CDs">CDs</option>
        <option value="DVDs">DVDs</option>
        <option value="magazine">magazine</option>
        <option value="mémoire de recherche">mémoire de recherche</option>
      </select>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6 mb-3 mb-md-0">
      <input type="number" placeholder="Le nombre des pages" class="form-control mt-4" name="pages">
    </div>
    <div class="col-md-4">
      <label for="">Edition date</label>
      <input type="date" placeholder="La date d'edition" class="form-control" name="editiondate">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-md-6 mb-3 mb-md-0">
    <label for="">purshase date</label>
      <input type="date" placeholder="La date d'achat" class="form-control" name="purshasedate">
    </div>
    <div class="col-md-6">
      <select class="form-control mt-4" name="state">
        <option value="">-- L'etat d'ouvrage --</option>
        <option value="Neuf">Neuf</option>
        <option value="Bon état">Bon état</option>
        <option value="Acceptable">Acceptable</option>
        <option value="Assez usé">Assez usé</option>
        <option value="Déchiré">Déchiré</option>
      </select>
    </div>
  </div>

  <div class="row my-4">
    <div class="col-md-6 mb-3 mb-md-0">
      <p>duplicate this item as many as you wish</p>
    </div>
    <div class="col-md-6">
      <input type="number" placeholder="* Times" class="form-control">
    </div>

</form>








        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




















































































<?php

include('includes/footer.php');

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(document).ready(function () {
    $('.confirm_the_delete').click(function (e) {
      e.preventDefault();
      var deletewithmodal = $(this).closest("div").find('.delete_id_value').val();
      console.log(deletewithmodal);

      swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this announce file!",
        icon: "error",
        buttons: true,
        dangerMode: true,
      })
        .then((willDelete) => {
          if (willDelete) {

            $.ajax({
              type: "POST",
              url: "delete.php",
              data: {
                "delete_button_set": 1,
                "deletepop_id": deletewithmodal,

            },
              success: function (response) {

              swal("anonce deleted successfully", {
                  icon: "success",
              }).then((result) => {
              location.reload();
            });


              }
            });

          }
        });



    });
  });



</script>