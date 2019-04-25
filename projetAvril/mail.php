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
      #fondMais{
            background:url("image/fond2.jpg")no-repeat;   
            background-size:cover;
            height: 400px;
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

<header>
            <div id="fondMais" class="container-fluide">
                <br><br><br><br><br><center><h2>A D M I N I S T R A T I O N</h2></center>
            </div>
        </header>
    


      
      <br><br><br><br><br><br><br><div class="container">

<form method="POST" action="user.php">
    <p class="h4 text-center py-4"><u>ENVOYER UN MAIL !!!</u></p>

    

    <div class="md-form">
        <i class="fa fa-user prefix white-text"></i>
        <input type="email" name="email" id="email" class="form-control" required="" >
        <label for="imail" class="font-weight-light">Adresse email du destinatair</label>
    </div>

    <div class="md-form">
        <i class="fa fa-envelope prefix white-text"></i>
        <textarea type="text" name="mail" id="email" class="form-control" required="" ></textarea>
        <label for="email" class="font-weight-light">Message</label>
    </div>

    <div class="text-center py-4 mt-3">
        <button class="btn peach-gradient btn-lg" type="submit">Envoyer</button>
       
    </div>
    
</form>
</div><br><br><br><br><br><br><br><br><br><br>



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