<?php 


            $errors= array() ; 
    
    
                if(isset($_POST["submit"])){
                 
          
                    
                 if((trim($_POST["text"])==''))  
                  {
                      $errors[] = "insert name !";
                  }
                       if((trim($_POST["text"])==''))  
                  {
                      $errors[] = "insert nickname !";
                  }
                      if($_POST["email"]=='')  
                  {
                      $errors[] = "insert email !";
                  }
                         if((trim($_POST["text"])==''))  
                  {
                      $errors[] = "insert text !";
                  }
                       
                }
                     
                    $submit =$_POST["submit"];
                    $name = $_POST["name"];
                    $nickname = $_POST["nickname"];    
                     $email= $_POST["email"];
                     $text = $_POST["text"];
                        
               if(isset($submit)&& empty($errors)) {
         header('Location:info.php?news='.$_GET['news']);
                   
                 
               mysqli_query($connection,"INSERT INTO `comments`(name,nickname,email,text,comment_id) VALUES('$name','$nickname','$email', '$text',$news)");
                      
                      
               
                    
                    
                }
                
            ?>   
                    
                    
             