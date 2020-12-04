  <div class="container mt-5">
                 <br><h1>News Section</h1><br>
       
<h5>Coronavirus</h5><font  size="5px"color="red" > Outbreak</font>
Morbi fringilla nibh in velit volutpat, nec iaculis lorem mollis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas posuere eleifend lacus, et bibendum nulla ullamcorper a. Nulla vestibulum felis leo, sit amet ultricies risus interdum ut. Integer diam ex, mattis in posuere in, semper a velit. Nam massa ipsum, pulvinar sed felis quis, consequat dignissim ligula. Fusce hendrerit, neque at aliquam eleifend, ligula massa scelerisque lorem, nec ullamcorper lectus lectus id est. Ut ornare consequat molestie.
        <div class="row d-flex justify-content-around">
<?php
            
      while($cat=mysqli_fetch_assoc($nw)){       
            
            
        echo    
            
            
           '<div class="col-lg-4 col-md-6 col-sm-12 mt-3 mb-3"><a href="info.php?news='.$cat['id'].'"><img src="pic/' .$cat['images']. '" height="300px" width="100%"></a></div>';
      }
               
           ?>
            
            
        </div>   
           <div class="row w-100">
             <div class="col-lg-3 col-sm-12 mt-5">
             
             <div><img src="pic/logo.png"></div>
             <div>  Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, li tot Europa usa li sam vocabularium.  </div>
             </div>  
             
             
             <div class="col-lg-4 col-md-6  col-sm-12 mt-5">
                <h3>Recent News</h3>
                  <?php

                  while($cat=mysqli_fetch_assoc($nwn)){       
            
            
        echo     '<div class="mt-4"><img src="pic/'.$cat['images']. ' " height="40px" width="20%">'."-". mb_substr( $cat['text'],0,25,"UTF-8") .'... <br><a href="info.php?lang='.$lang.'&news='.$cat['id'].'">read more</a></div>';
                
                  }
       ?>         
             </div> 
             
              
         
             <div class="col-lg-4 col-md-10 col-sm-12  m-3" id="Contact">
               <h3>Quick Contact</h3>
           	
<form id ="mailForm" method="Post">
  <div class="col form-group  form-text text-white">Email address
      <div class="text-danger font-weight-bold" id="error"></div>
         <div class="text-success font-weight-bold" id="success"></div>
    <input type="email"  class="form-control" id="email"  placeholder="Enter email">
      
    <small  class="form-text text-white"></small>
 
  <div class="form-group form-text text-white">Name
       
    <input type="text" class="form-control" id="name" placeholder="Enter Name">
  </div>
    
 <textarea class="textarea form-control" name="message" id ="message" rows="3" cols="40" placeholder="YourMessage..."></textarea>
    <br>
      <button type="submit" id="SendMail" class=" btn btn-danger w-100">Submit</button>
    </div>
          </form>
          
                    
                
                 
                 
             </div>  
               
               
               
               
               
               
               
           </div>
       </div> 
        
        
        
        
        
        
        
        
        
        