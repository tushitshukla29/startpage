<?php 

  if(isset($_POST['submit'])){
    $name=$_POST['nameinp'];
  }

?>




<html>
  <head>
     <!-- CSS only -->
<!-- JavaScript Bundle with Popper -->
<link href="style.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700&display=swap" rel="stylesheet">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=604866daae08f90011442702&product=inline-share-buttons' async='async'></script>
  </head> 
  <body>
  <div class="nav">
    <div class="title">
      <?php echo $name ?> wishes you happy holi
    </div>
  </div>
  <div class="container">
  
  
  <div class="card" >
  <div class="img-wrapper">
    <img class="card-img-top" src="./holi.png" alt="Card image cap">
  </div>
  <div class="card-body">
    <h5 class="card-title">Happy Holi</h5>
    <div class="img-wrapper">
    <p class="card-text">from <?php echo $name ?> and fam</p>
    
  </div>
 
</div>
</div>

</div>
 <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
  </body>    
</html>
