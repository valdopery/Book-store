<?php


?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

       <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

      
    

  <title></title>

</head>

<body>

 <div class="container" style="">

  <header>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Book store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="link.php">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Cart.php">Educational</a>
              <a class="dropdown-item" href="novel.php">Novels</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Others</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Cart.php">Cart</a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      </div>
    </nav>

  </header>

  <div class="row">

    <div class="col-sm-12">

      <div id="my-slider" class="carousel slide" data-ride="carousel">
                
                 <!-- indicator dot nov -->
                 <ol class="carousel-indicators">

                    <li data-target="#my-slider"  data-slide-to="0" class="active"></li>
                     <li data-target="#my-slider"  data-slide-to="1"></li>
                     

                 </ol>



                 <!-- wrapper for slides -->
                 <div class="carousel-inner " role="listbox" >

                  <div class="carousel-item active">

                    <img class="d-block w-100 " src="images/wall2.jpg" alt="zero" >
                    
                    
                  </div>
                    <div class="carousel-item ">

                    <img class="d-block w-100" src="images/wall1.png" alt="one" >
                    
                    
                  </div>

                  
                 </div>

                 <!-- controls or next/prev buttons/arrows -->

                 <a class="carousel-control-prev" href="#my-slider" role="button" data-slide="prev">
                     
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                 </a>

                 <a class="carousel-control-next" href="#my-slider" role="button" data-slide="next">
                     
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                 </a>

               






        
      </div>

      
      
    </div>

    
  </div>

    
  <div class="row">
	
  

 <div class="row">

    <footer class="col-sm-12">
       <p class="text-center">&copy; Copyright 2018</p> 
        
    </footer>
    
</div>

  
  
</div>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>