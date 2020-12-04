<?php
session_start();
include("db.php");
include("components.php");
$news = $_GET['news'];



$nw= mysqli_query($connection,"SELECT *FROM`news` WHERE news_id IN(1,2)");
 $nwn= mysqli_query($connection,"SELECT *FROM`news` ORDER BY id DESC LIMIT 3");
$ns= mysqli_query($connection,"SELECT *FROM`news`WHERE id='$news'");
$comment =mysqli_query($connection,"SELECT *FROM`comments`WHERE comment_id='$news'");
mysqli_query($connection,"UPDATE `news` SET `views`=`views`+1 WHERE id='$news'");
include("comment.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
   <header>
        <?php 
include('layouts/header.php');
        ?>
   </header>
   <main>
 <?php
    
  $row=mysqli_fetch_assoc($ns);



       echo 
        '<div class="container border mt-5 bg-light">
        <center style="background-color:#c55e5e;position: relative;
    "><h1>NEWS </h1></center>
        <div class="mt-5"><i class="far fa-eye"></i> ' .$row['views']. '</i></div>
            <div class="row"> 
           <div class="col-lg-4  col-sm-12 mt-5"><img src="pic/'  .$row['images'].'"  style="height:250px; width:100%;object-fit:cover;"></div>
            <div class="col-lg-8 col-sm-12 p-4">'  .$row['text'].  '</div>
            
    </div></div><hr>';
         
 
         
  
   
    if(mysqli_num_rows($comment)<=0){
        echo "<center><h4><i>no comments yet</i></h4></center>";
    }

   while(($com = mysqli_fetch_assoc($comment))){
       echo "<div class=\"form\"><img src=\"https://s.gravatar.com/avatar/" .md5($com["email"])."?s=80\"> <b>Nickname-".$com["nickname"]. "</b><br>".$com["text"]."</div>"
        ;
 }
  ?>     
       <div class="container">
       <div class="row">
       <div class="col-lg-4 col-md-10 col-sm-8" >
        <hr> <form method="POST"action="#form">
      
                  
                     <font color="blue"size="+2" class="ml-5"> Your Comments </font>
                    <div id="form"><font color="red" class="ml-5"><?= $errors[0];?></font></div>
             
                
      NAME:    <input type="text"name="name" placeholder="name"class="form-control"><br>
      NICKNAME:<input type="text"name="nickname"placeholder="nickname" class="form-control"><br>
      EMAIL:   <input type="email"name="email"placeholder="email" value="<?php echo $_POST["email"];?>" class="form-control"><br>

        <textarea rows="4"  name="text" id="text" class="form-control">  </textarea> <br>

        
        <input type="submit" name="submit" class=" text-center btn btn-primary ibutton" value="Add">
          
            </form>
    </div>
    </div>
    </div>
    </main>
  <footer>
         <?php 
include('layouts/footer.php');
        ?>
  </footer>      
 <script type="text/javascript" src="js/mail.js"></script>  
</body>
</html>