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
      background:url("image/form.jpg")no-repeat;   
      background-size:cover;
      color:white;
      }
  
      #valide{
          border-radius:4px 4px;
          background-color:rgba(133, 120, 49, 0.541);
          width:550px;
          height:350px;

      }
     
     
    </style>
</head>
<body>
    
<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <a href="index.html"><img src="image/logo3.png" class="animated bounce infinite" alt="Transparent MDB Logo" id="logo"></a>
        <a class="navbar-brand" href="index.html">BatiPlus</a>
        <button class="navbar-toggler" typ
        e="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
          aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Acceuil</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="entreprise.html">Projets</a>
                </li>
                <li class="nav-item">
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

      



<br><br><br><br><br><br><br><br><br><div class="container" id="valide">

                   <h3><img class="animated bounce infinite" id="logo" src="image/logo3.png" />BatiPlus</h3>
                    <p><b>Mr/Mme <?php echo $_POST['nom'] ?></b></p>
                    <p>Votre demande a été reçue avec succes</p>
                    <p>Nous vous contacterons dans les 24h pour finaliser votre demande </p>
                    <p>Merci de nous faire confiance !!!</p>
                    
</div><br><br><br><br><br><br><br><br><br>






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