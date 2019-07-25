<?php 
include 'db.php';
$active_var = 'home';
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
  <!-- SEO TAGS -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- TITLE and LINKING -->
  <title>HOME</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  
  <!-- Stylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css">

  <!-- Ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
  <!-- Google Fonts / Fontawesome -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Dancing+Script|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

  <!-- Google Fonts integration ENDS -->

</head>
<body>

  	<!-- NAVBAR -->
    <div class="wrapper">
      <header>
        <nav>
          <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
          </div>
          <div class="menu">
            
            <ul>
              <li class="lst"><a href="#" class="<?php if($active_var =='home'){echo 'active';}?>">Home</a></li>
              <li class="lst"><a href="#" class="<?php if($active_var =='about'){echo 'active';}?>">About Us</a></li>
              <li class="lst"><a href="#" class="<?php if($active_var =='product'){echo 'active';}?>">Products</a></li>
              <li class="lst"><a href="#" class="<?php if($active_var =='contact'){echo 'active';}?>">Contact Us</a></li>
            </ul>
          </div>
        </nav>
      </header>
    </div>
    <!-- NAVBAR ENDS -->

    <!-- Banner 100vh -->
		<div class="bg-img ">
			<div class="overlay text-center pt-0 ">
				<img class="logo" src="img/logo.png" alt="Responsive image">
        <h3 class="text-title pt-4 px-3">Masala Powder<span>|</span> Pastes <span>|</span> Ready To Eat Pickles</h2>
      </div>
      <div class="scroll"> <a href="#Cat"></a></div>
		</div>
    <!--END OF BANNER-->


    <!--CATEGORY SECTION-->
    <div id="Cat" class="container mt-5 pt-3 px-1 pb-4" style="background-color:#f0e9e9; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      
      <!-- Category-Row-1 -->
      <div class="row justify-content-center">
        
        <!-- Category 1-2 -->
        <div class="col-11 col-md-6 m-1 p-0 categoryBox">
          <img class="categoryImg" src="./img/category-1.jpg" alt="Responsive image">
          <a href="prod.php?id=<?php echo 'spice'; ?>" class="categoryText">Spice Powders</a>
        </div>
        
        <div class="col-11 col-md-5 m-1 p-0 categoryBox">
          <img class="categoryImg" src="./img/category-2.jpg" alt="Responsive image">
          <a href="prod.php?id=<?php echo 'ready'; ?>" class="categoryText">Ready To Eat Pickles</a>
        </div>
      </div>
      
      <!-- Category-Row-2 -->
      <div class="row justify-content-center">
        
        <!-- Category 3-5 -->
        <div class="col-lg-4 col-11 m-1 p-0 categoryBox">
            <img class="categoryImg" src="./img/category-3.jpg" alt="Responsive image">
            <a href="prod.php?id=<?php echo 'molho'; ?>" class="categoryText">Goan Molho</a>
        </div>
        
        <div class="col-11 col-lg-4 col-md-5 m-1 p-0 categoryBox">
              <img class="categoryImg" src="./img/category-4.jpg" alt="Responsive image">
              <a href="prod.php?id=<?php echo 'para'; ?>" class="categoryText">Goan Para</a>
         </div>
        
        <div class="col-11 col-lg-3 col-md-6 m-1 p-0 categoryBox">
            <img class="categoryImg" src="./img/category-5.jpg" alt="Responsive image">
            <a href="prod.php?id=<?php echo 'pastes'; ?>" class="categoryText">Pastes</a>
        </div>
      </div>

    </div>
    <!--CATEGORY ENDS-->
  
    

    <!--featured product-->
    <div class="container-fluid py-5 parallax_bg text-center position-relative">
        <div class="text-featured container p-2 my-2">
          <h1>Featured  <span style="font-size: 3rem; color: red; font-weight: bold;">P</span>roducts </h1>
        </div>
        <div class="container py-5" style="outline:5px solid white;outline-offset:-20px">
          <div class="row justify-content-center">
              <div class="col-12 col-md-3 p-2 m-1">
                <div class="card m-auto">
                  <?php
                  $sql = "SELECT * FROM products WHERE TITLE='Curry Masala'";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                      ?>
                  <img src="<?php echo $row["IMAGE"]; ?>" class="featuredImage" alt="" style="width:100%">
                    <h1 class="featuredText"><?php echo $row["TITLE"]; ?></h1>
                    <p><button name="view" value="view" id="<?php echo $row["ID"]; ?>" class="view_data" data-toggle="modal" data-target="#exampleModalLong">View</button></p>
                    <?php
                      }
                    }
                    else {
                      echo "0 results";
                    }
                    ?>
                </div>
              </div>

              <div class="col-12 col-md-3 p-2 m-1">
                <div class="card m-auto">
                  <?php
                  $sql = "SELECT * FROM products WHERE TITLE='Goan Sausage Masala'";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                      ?>
                  <img src="<?php echo $row["IMAGE"]; ?>" class="featuredImage" alt="" style="width:100%">
                    <h1 class="featuredText"><?php echo $row["TITLE"]; ?></h1>
                    <p><button name="view" value="view" id="<?php echo $row["ID"]; ?>" class="view_data" data-toggle="modal" data-target="#exampleModalLong">View</button></p>
                    <?php
                      }
                    }
                    else {
                      echo "0 results";
                    }
                    ?>
                </div>
              </div>

              <div class="col-12 col-md-3 p-2 m-1">
                <div class="card m-auto">
                  <?php
                  $sql = "SELECT * FROM products WHERE TITLE='Bombil Pickle'";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                      ?>
                  <img src="<?php echo $row["IMAGE"]; ?>" class="featuredImage" alt="" style="width:100%">
                    <h1 class="featuredText"><?php echo $row["TITLE"]; ?></h1>
                    <p><button name="view" value="view" id="<?php echo $row["ID"]; ?>" class="view_data" data-toggle="modal" data-target="#exampleModalLong">View</button></p>
                    <?php
                      }
                    }
                    else {
                      echo "0 results";
                    }
                    ?>
                </div>
              </div>
          </div>
        </div>
    </div>
    <!--featured product end-->

    <!-- Dynamic Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" id="details">
        </div>
      </div>
    </div>
    

    <!-- BLOGS - recipes-->
    <div class="container-fluid m-0 p-4 bg_image">
      <div class="container mt-2 py-2 bg-dark" style="border-radius: 5px 50px;">
        <div class="container text-center">
          <h1 style="color: #fff;">Recipes</h1>
        </div>

        <div class="row justify-content-center p-3">

          <div class="col-12 col-md-5 m-2 p-0 bg-light">
            <div class="recipeBox">
              <img class="recipeImg" src="./img/Chicken-Cafreal.jpg" alt="Responsive image">
              <div class="recipeText ">
                    <a data-toggle="modal" data-target="#exampleModalScrollable1">
                     Chicken Cafreal
                    </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-5 m-2 p-0 bg-light">
            <div class="recipeBox">
              <img class="recipeImg" src="./img/fish-molho.jpg" alt="Responsive image">
              <div class="recipeText">
                    <a data-toggle="modal" data-target="#exampleModalScrollable2">
                    fresh Fish Molho
                    </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-5 m-2 p-0 bg-light">
            <div class="recipeBox">
              <img class="recipeImg" src="./img/Goan-Sausage-meat.jpg" alt="Responsive image">
              <div class="recipeText">
                    <a data-toggle="modal" data-target="#exampleModalScrollable3">
                     Goan Sausage Meat
                    </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-5 m-2 p-0 bg-light">
            <div class="recipeBox">
              <img class="recipeImg" src="./img/Goan-Fish-Curry.jpg" alt="Responsive image">
              <div class="recipeText">
                <a data-toggle="modal" data-target="#exampleModalScrollable4">
                     Goan Fish Curry
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-5 m-2 p-0 bg-light">
            <div class="recipeBox">
              <img class="recipeImg" src="./img/goanfishcaldine.jpg" alt="Responsive image">
              <div class="recipeText">
                <a data-toggle="modal" data-target="#exampleModalScrollable5">
                     Goan Fish Caldine 
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- BLOGS ENDS -->

    <!-- Modal -->

    <!--Goan Fish Curry-->
    <div class="modal fade modalCustom" id="exampleModalScrollable4" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Goan Fish Curry</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <dl>
              <dt>Ingredients </dt>
                <dd>-4 tbsp Goan Delite Curry Masala Powder</dd>
                <dd>-2 ½ cup  coconut Juice</dd>
                <dd>-½ tsp of ginger garlic paste</dd>
                <dd>-2 green chillies (slit)</dd>
                <dd>-1 onion</dd>
                <dd>-4 dry mangoes slices </dd>
                <dd>-5 pieces kokum </dd>
                <dd>-1 lemon  </dd>
                <dd>-Salt to taste </dd>
                <dd>-Fish of your choice  </dd>
                <dd>-10 gms Tamarind ( a small ball mix in the water twice till 1 cup of pulp is obtained) </dd>
              <dt>Method </dt>
                <dd>• Clean and wash the fish well, cut into pieces and sprinkle salt and lemon juice. Let the fish marinade for ½ an hour.</dd>
                <dd>• Saute onion then add green chillies and ½ tsp of ginger garlic paste.</dd>
                <dd>• Add dry mango slices and kokum or Tamarind juice.</dd>
                <dd>• Add 4 tbsp of Goan Delite Curry Powder and add coconut juice.</dd>
                <dd>• Allow to cook slowly till the curry begins to boil.</dd>
                <dd>• Add the fish and cook for 10 mins</dd>
                <dd>• Serve with rice.</dd>
              <dt>Tips </dt>
                <dd> Do no cover the lid while cooking the curry.</dd>
              </dl>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--Goan Fish Caldine-->
    <div class="modal fade modalCustom" id="exampleModalScrollable5" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Goan Fish Caldine</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <dl>
              <dt>Ingredients </dt>
                <dd>-Goan Delite Jeerem Meerem Powder </dd>
                <dd>-½ kg any fleshy fish </dd>
                <dd>-2 onion ( sliced)</dd>
                <dd>-1 tomato (sliced)</dd>
                <dd>-2 tbs oil</dd>
                <dd>-2 green chillies</dd>
                <dd>-Tamarind Juice</dd>
                <dd>-Salt to taste </dd>
              <dt>Method </dt>
                <dd>• Clean the fish, wash and cut into desired pieces. Apply a little salt and lime and keep aside.</dd>
                <dd>• sauté onion, add green chillies and tomatoes.</dd>
                <dd>•  Add 3 tbsp Goan Delite Jeerem Meerem Powder.</dd>
                <dd>• Add Tamarind juice and cook for ten minutes.</dd>
                <dd>•   Add the fish cook till the fish is done.</dd>
              <dt>Tips </dt>
                <dd>   Can add capsicum for better flavour.</dd>
              </dl>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--Goan Chicken Cafreal-->
    <div class="modal fade modalCustom" id="exampleModalScrollable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Goan Chicken Cafreal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <dl>
              <dt>Ingredients </dt>
                <dd>-200 gms Goan Delite Cafreal Masala </dd>
                <dd>-1 chicken broiler(750gms) </dd>
                <dd>-1  lime</dd>
                <dd>-Sufficient oil to deep fry chicken</dd>
              <dt>Method </dt>
                <dd>• Clean & wash the chicken cut into medium size pieces.</dd>
                <dd>• Apply Goan Delite Cafreal Masala generously to the chicken.</dd>
                <dd>• Allow it to marinade overnight in the refrigerator.</dd>
                <dd>• Fry and serve hot with a salad.</dd>
              <dt>Tips </dt>
                <dd>Instead of frying can cook the chicken in its own gravy without adding any water till its dry. </dd>
              </dl>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--Goan Sausage Meat-->
    <div class="modal fade modalCustom" id="exampleModalScrollable3" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Goan Sausage Meat </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <dl>
              <dt>Ingredients </dt>
                <dd>-1 kg pork  (boneless)  </dd>
                <dd>-30 gms salt </dd>
                <dd>-500 gms  of Goan Delite Sausage Masala </dd>
              <dt>Method </dt>
                <dd>• Wash the pork well. Remove the skin completely. Cut into small cubes.</dd>
                <dd>• Apply 30 gms of salt and keep under weight for 4 hours. Drain out all the water that collects around the meat. Apply salt again and keep under weight for 24 hours.( turn the meet after 12 hrs and sprinkle a little salt before keeping the meat under weight.</dd>
                <dd>• Drain out all the water that is left behind. Wipe the pieces with a clean cloth and keep aside in a dry vessel.  </dd>
                <dd>• Add Goan Delite Sausage Masala to the pork and mix it well. </dd>
                <dd>• Add toddy vinegar if required. </dd>
                <dd>• Refrigerate the meat in an air tight jar for further consumption. </dd>
              <dt>Tips </dt>
                <dd>• Cook the meat in a little water and fry in its own fat for a while.</dd>
                <dd>• Use a clean dry spoon to remove just enough meat every time for consumption. </dd>
              </dl>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--fresh Fish Molho-->
    <div class="modal fade modalCustom" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">fresh Fish Molho</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <dl>
              <dt>Ingredients </dt>
                <dd>-1 kg Fish (Mackerel, kingfish or 2 kg prawns)  </dd>
                <dd>-1 tsp turmeric powder </dd>
                <dd>-500 gms Goan Delite Fish Masala </dd>
              <dt>Method </dt>
                <dd>• 500 gms Goan Delite Fish Masala.</dd>
                <dd>• Fry the fish in oil and allow to cool thoroughly.</dd>
                <dd>• Drain out all the water that is left behind. Wipe the pieces with a clean cloth and keep aside in a dry vessel.  </dd>
                <dd>• Apply Goan Delite Fish Masala to the fried fish and cook for about 10 minutes. </dd>
                <dd>• Remove from fire and allow to cool well.  </dd>
                <dd>• Can store in the refrigerator in a clean dry airtight jar. </dd>
              <dt>Tips </dt>
                <dd> Can cook with little onion and potatoes for better flavour.</dd>
              </dl>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  <!--model end-->

  <!--end recipes-->
  <!-- Footer -->
  <footer id="footer" class="sm-padding bg-dark">

    <!-- Container -->
    <div class="container-fluid">

      <!-- Row -->
      <div class="row">

        <div class="col-md-12 text-center">

          <!-- footer logo -->
          <div class="  m-3">
            <img class="footer_logo" src="./img/logo.png" alt="Responsive image" width="45" height="30">
          </div>
          <!-- /footer logo -->
          
          <!-- footer copyright -->
          <div class="footer-copyright m-0">
            <p class=" text-white">Copyright © 2019. All Rights Reserved. Designed by <a href="http://www.alphacode.co.in" target="_blank">Alphacode</a></p>
          </div>
          <!-- /footer copyright -->

        </div>

      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  </footer>
  <!-- /Footer -->
  
  <!-- BACKTOTOP -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
    <!-- Jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- bootstrap -->
    <script src="js/bootstrap.js"></script>
    <!-- bootstrap -->
  <script>
    //Navbar Toggle
      $(function (){
        $(document).scroll(function(){
          var $nav=$("#navId1");
          $nav.toggleClass("scrolled",$(this).scrollTop()>$nav.height());
        });
      });

  </script>

  <script>
      $(document).ready(function(){
           $('.view_data').click(function(){
                var product_id = $(this).attr("id");
                $.ajax({
                     url:"select.php",
                     method:"post",
                     data:{product_id:product_id},
                     success:function(data){
                          $('#details').html(data);
                          $('#exampleModalLong').modal("show");
                     }
                });
           });
      });
  </script>

  <script type="text/javascript">
  
    //menu toggle - Mobile view
    $(document).ready(function(){
      $(".menu-icon").on("click", function(){
        $("nav ul").toggleClass("showing");
      })
    })
    
    //scrolling effect
    $(window).on("scroll", function(){
      if($(window).scrollTop()){
        $('nav').addClass('black');
      }
      else{
        $('nav').removeClass('black');
      }
    })

  </script>

  <?php mysqli_close($conn);?>
</body>
</html>
