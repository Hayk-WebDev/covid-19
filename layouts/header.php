<?php
$nw= mysqli_query($connection,"SELECT *FROM`news` WHERE news_id IN(1,2)");
 $nwn= mysqli_query($connection,"SELECT *FROM`news` ORDER BY id DESC LIMIT 3");
 include("connect/lang.php");
?>
        <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img src="pic/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" justify-content-end p-1 collapse navbar-collapse" id="navbarNav"  id="top">
         <ul class="nav navbar-nav">
          <li>  <a class="nav-link" href="index.php"><?=$form['home']; ?> </a></li>
          <li> <a class="nav-link"  href="index.php#Prevention"><?=$form['Prevention']; ?></a></li>
          <li> <a class="nav-link" href="index.php#FAQs"><?=$form['FAQ']; ?></a></li>
          <li> <a class="nav-link" href="index.php#shop"><?=$form['shop']; ?></a></li>
           <li> <a class="nav-link" href="#Contact"><?=$form['contact']; ?></a></li>
           
        <li class="nav-item">
           <a class="nav-link" href="?lang=am&news=<?=$news ?>"><img  width="30px" src="../pic/lang/am.png"></a>
      </li>
      
      <li class="nav-item">
          <a class="nav-link" href="?lang=ru&news=<?=$news ?>"><img  width="30px" src="../pic/lang/ru.png"></a>
      </li>
      
      <li class="nav-item">
          <a class="nav-link" href="?lang=en&news=<?=$news ?>"><img  width="30px" src="../pic/lang/en.png"></a>
      </li>
        
        </ul>
  </div>
</nav>
    
   
    <div id="cart"><a href="cart.php"><i class="fas fa-shopping-basket"></i> <?php 
        if(isset($_SESSION['cart'])){
            $count=count($_SESSION['cart']);
          echo"<span class=\"text-warning bg light ml-5\">$count</span>" ; 
          
        }
        else{
             echo"<span class=\"text-warning bg light  ml-5\">0</span>"  ;
        }
       ?>
     
     <br>Shopping Cart
      </a>
      
            
            
          </div>