<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMINISTRATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
    <style>
    /*administration*/
    #admin{
    background-color: white;
    padding: 50px;
    border-radius: 10px;
    }
    #fondMais{
            background:url("image/fond2.jpg")no-repeat;   
            background-size:cover;
            height: 400px;
            color:white;
           
            }
    body{
      background:url("image/body5.jpg")no-repeat;   
      background-size:cover;
      
    }
    img{
        height:100px;
        width:150px;
    }

   
    </style>
</head>
<body>
<header>
            <div id="fondMais" class="container-fluide">
                <br><br><br><br><br><center><h2>A D M I N I S T R A T I O N</h2></center>
            </div>
        </header>


<div class="container" id="admin">
    <div class="row" >
        <strong><h1>ADMINISTRATION </strong></h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>noms</th>
                    <th>email</th>
                    <th>nombre de pieces</th>
                    <th>categorie</th>
                    <th>plan</th>
                    <th>espace(m²)</th>
                    <th>action</th>
                </tr>
               
            </thead>
            <tbody>
                <?php 
                require "BD.php";
                $db=Database::connect();
                if(!empty($_POST['submit'])){  
                   
                       $nom = $_POST['nom'];
                       $prenoms = $_POST['prenoms'];
                       $email = $_POST['email'];
                       $telephone = $_POST['telephone'];
                       $categorie=$_POST['categorie'];
                       $plan = $_POST['plan'];
                       $nbrPieces = $_POST['nbrPieces'];
                       $espace = $_POST['espace'];  
                     $db = Database::connect();
                
                  } 
                  $statement=$db->query('SELECT items.id, items.nom, items.email, items.nbrPieces, items.categorie, items.plan, items.espace
                                        FROM items 
                                        ORDER BY items.id DESC ');

                  

               

                while($items=$statement->fetch()){
                    echo'<tr>';
                   echo '<td>'.$items['nom'].'</td>';
                    echo'<td>'.$items['email'].'</td>';
                    echo'<td>'.$items['nbrPieces'].'</td>';
                    echo'<td>'.$items['categorie'].'</td>';
                    //echo'<td>'.'<img src='.'"'.'image/'.$items['plan'].'"'.'></td>';
                    echo '<td><a href="image/'.$items["plan"].'" data-lightbox="mygallery"><img src="image/'.$items["plan"].'"/></a></td>';
                    echo'<td>'.$items['espace'].'</td>';
                   echo '<td width=900px>';
                        
                       echo '<a href="mail.php?id='.$items['id'] .'"><button class="btn btn-primary"><i class="fa fa-envelope prefix white-text"></i> Ecrire mail</button></a>';
                       echo '<a href="delect.php?id='.$items['id'] .'"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> suprimer</button></a>';
                   echo '</td>';
               echo '</tr>';
                }
                
                ?>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
                
            </tbody>
        </table>
    </div>    

</div>

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
</body>
</html>