<?php 


 require 'BD.php';
 if(isset ($_POST) AND $_SERVER['REQUEST_METHOD']=="POST"){  
     
        $nom = $_POST['nom'];
        $prenoms = $_POST['prenoms'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $plan = $_FILES['plan']['name'];
        $nbrPieces = $_POST['nbrPieces'];
        $espace = $_POST['espace'];  
        $categorie=$_POST['categorie'];
      $db = Database::connect();
      $item = $db->prepare('INSERT INTO maison(nom,prenoms,email,telephone,plan,nbrPieces,espace ) VALUES(?,?,?,?,?,?,?)');
      $item->execute(array($nom,$prenoms,$email,$telephone,$plan,$nbrPieces,$espace));
      
      $item = $db->prepare('INSERT INTO items(nom,email,nbrPieces,categorie,plan,espace ) VALUES(?,?,?,?,?,?)');
      $item->execute(array($nom,$email,$nbrPieces,$categorie,$plan,$espace));
     
     //header('Location:validation.php');
      
      
   } 
   

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>BatiPlus</title>
    <style>
             body{
      background:url("image/body5.jpg")no-repeat;   
      background-size:cover;
      
    }
    
    
            #fondMais{
            background:url("image/fond2.jpg")no-repeat;   
            background-size:cover;
            height: 500px;
            }

            center h3{
              color:white;
            }
            label{
              color:white;
            }
            form{
                border-radius:4px 4px;
               
            }
    </style>
</head>
<body>
    

        <header>
            <div id="fondMais" class="container-fluide">
                
            </div>
        </header>
            



    <!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <a href="index.html"><img src="image/logo3.png" class="animated bounce infinite" alt="Transparent MDB Logo" id="logo"></a>
        <a class="navbar-brand" href="index.html">BatiPlus</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
          aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">

                <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="entreprise.html">Projets</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="maison.html">Maisons</a>
                        </li>
                    </ul>
         
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>

          </ul>
        </div>
      </nav>
      <!--/.Navbar -->
      
    <section class="container">



       <form enctype="multipart/form-data" method="POST" action="">
           <br><br><center><h3><u>INFORMATIONS DU CLIENT</h3></u></center>
           <label for="nom">Nom</label>
           <input type="text" id="nom" name="nom" class="form-control" required="" />

           <label for="prenoms">Prenoms</label>
           <input type="text" id="prenoms" name="prenoms" class="form-control" required="" />

           <label for="mail">Email</label>
           <input type="email" id="mail" name="email" class="form-control" required="" />

           <label for="tel">Tel</label>
           <input type="tel" id="tel" name="telephone" class="form-control" required="" />

           <br><center><h3><u>ENGAGEMENT DU CLIENT</u></h3></center>

           <label for="nbr">Type</label>
           <select name="categorie" class="form-control">
             <option></option>
             <option>MAISON</option>
           </select>

           <label for="img">Plan</label>
           <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
           <input type="file" id="img" name="plan" class="form-control" required="" />

           <label for="nbr">Nombre de pièces</label>
           <input type="number" id="nbr" name="nbrPieces" class="form-control" required="" value= />

           <label for="espace">Espace(m²)</label>
           <input type="number" id="espace" name="espace" class="form-control" required="" />

          
          
           <input type="reset" id="annuler" value="Annuler"  class="btn btn-danger"/>
           
           <a href="validation.php"><input type="submit" name="submit"  id="valider" class="btn btn-success" value="Envoyer"/></a>
       </form>
       
    </section><br><br><br>



  <!-- Footer -->
  <footer class="page-footer font-small mdb-color lighten-3 pt-4">

<!-- Footer Elements -->
<div class="container">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-2 col-md-12 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="image/foot1.jpg" class="img-fluid" alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="image/foot2.jpg" class="img-fluid" alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="image/foot3.jpg" class="img-fluid" alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-12 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="image/foot4.jpg" class="img-fluid" alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="image/footer5.jpg" class="img-fluid" alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-2 col-md-6 mb-4">

      <!--Image-->
      <div class="view overlay z-depth-1-half">
        <img src="image/footer6.jpg" class="img-fluid" alt="">
        <a href="">
          <div class="mask rgba-white-light"></div>
        </a>
      </div>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="#"> BatiPlus.com</a>
</div>
<!-- Copyright -->

</footer>
  <!-- Footer -->



      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/mdb.min.js"></script>  
</body>
</html>