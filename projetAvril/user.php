<?php
session_start();
$_SESSION['nom']="";
$_SESSION['img']="";

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

            center h1{
        color:white;
        
      }
            center h3{
        color:white;
        box-shadow: 4px 4px ;
      }
      center p{
        color:white;
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

            <li class="nav-item">
            <a class="nav-link waves-effect waves-light"><i class="fa fa-user "> <?php echo  $_POST["nom"]?></i></a>
            </li>

            <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="index.html">Deconnexion</a>
            </li>
            
          </ul>
        </div>
      </nav>
      <!--/.Navbar -->
      
    <section>
            <div>
                <center><h1>CONSTRUIR SA MAISON</h1></center>
                <br> <center><p>Nos equipes de construction a votre disposition pour la construction de vos <b> maisons basses </b></p></center>
                <center><p><b>Des plans 3D disponible</b> pour vous donner plus d'idée ...</p></center>
                
                
                <center><h3>Les maisons basses de 1 pieces!!!</h3></center><br><br>
                <div class="row">
                    <div class="col-md-4">
                        <img name="img" src="image/bas1.jpg"/>
                        <center><a href="formulaire.php"><button type="button" class="btn peach-gradient btn-lg">Construir</button></a></center>
                    </div>
                    <div class="col-md-4">
                        <img name="img" src="image/bas111.jpg"/>
                        <center><a href="formulaire.php"><button type="button" class="btn peach-gradient btn-lg">Construir</button></a></center>
                    </div>
                    <div class="col-md-4">
                        <img name="img" src="image/bass1111.jpg">
                        <center><a href="formulaire.php"><button type="button" class="btn peach-gradient btn-lg">Construir</button></a></center>
                    </div>
                </div><br><br><br>


                <center><h3>Les maisons de 2 pieces!!!</h3></center><br><br>
                <div class="row">
                    <div class="col-md-4">
                        <img name="img" src="image/basse2.jpg"/>
                        <center><a href="formulaire.php"><button type="button" class="btn peach-gradient btn-lg">Construir</button></a></center>
                    </div>
                    <div class="col-md-4">
                        <img name="img" src="image/basse22.jpg"/>
                        <center><a href="formulaire.php"><button type="button" class="btn peach-gradient btn-lg">Construir</button></a></center>
                    </div>
                    <div class="col-md-4">
                        <img name="img" src="image/basse222.jpg">
                        <center><a href="formulaire.php"><button type="button" class="btn peach-gradient btn-lg">Construir</button></a></center>
                    </div>
                </div><br><br><br>

                
                <center><h3>Les maisons de 3 pieces!!!</h3></center><br><br>
                <div class="row">
                    <div class="col-md-4">
                        <img name="img" src="image/bass3.jpg"/>
                        <center><a href="formulaire.php"><button type="button" class="btn peach-gradient btn-lg">Construir</button></a></center>
                    </div>
                    <div class="col-md-4">
                        <img name="img" src="image/bass33.jpg"/>
                        <center><a href="formulaire.php"><button type="button" class="btn peach-gradient btn-lg">Construir</button></a></center>
                    </div>
                    <div class="col-md-4">
                        <img name="img" src="image/bass333.jpg">
                        <center><a href="formulaire.php"><button type="button" class="btn peach-gradient btn-lg">Construir</button></a></center>
                    </div>
                </div>
            </div>
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