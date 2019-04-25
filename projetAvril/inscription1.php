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
   form{
        color:white;
        border-radius:4px 4px;
        background:rgba(116, 126, 134, 0.534);
        height:70%;
        width:100%;
        float:center;
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

      



<div class="container">

<form method="POST" action="user.php">
    <p class="h4 text-center py-4"><u>Inscription !!!</u></p>

    <div class="md-form">
        <i class="fa fa-user prefix white-text"></i>
        <input type="text" name="nom" id="nom" class="form-control" required="" >
        <label for="nom" class="font-weight-light">Nom</label>
    </div>

    <div class="md-form">
        <i class="fa fa-user prefix white-text"></i>
        <input type="text" name="prenoms" id="prenoms" class="form-control" required="" >
        <label for="prenoms" class="font-weight-light">Prenoms</label>
    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix white-text"></i>
        <input type="email" name="email" id="email" class="form-control" required="" >
        <label for="email" class="font-weight-light">Email</label>
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix white-text"></i>
        <input type="password" name="password" id="password" class="form-control"required=""  >
        <label for="password" class="font-weight-light">mot de passe</label>
    </div>

    <div class="md-form">
        <i class="fa fa-exclamation-triangle prefix white-text"></i>
        <input type="password" name="passwords" id="password" class="form-control" required="" >
        <label for="mail" class="font-weight-light">Confirmer votre mot de passe</label>
    </div>

    <div class="text-center py-4 mt-3">
        <button class="btn peach-gradient btn-lg" type="submit">S'inscrire</button>
    </div>
</form>

</div><br><br><br><br>




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