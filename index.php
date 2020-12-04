<?php
session_start();
include("db.php");
include("components.php");
include("add_cart.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>


<body>
   
    <header>
    <?php 
       include('layouts/header.php');
       ?>
    </header>
    <main>
     <div class="fixed-bottom" style="left:95%; display:none;"><a href="#top"><i class="fas fa-angle-double-up fa-3x"></i></a></div>   
        
       <article>
            <div class="owl-carousel slide-one owl-theme" >
   
            <div class="item"><img src="pic/slider-1.jpg" alt="Loading" ><p class="slide_text">COVID-19 Outbreak<br> International  Pandemic </p></div>
            <div class="item"><img src="pic/slider-2.jpg" alt="Loading" ><p class="slide_text">Stay Safe<br> Follow Prevention</p></div>
            <div class="item"><img src="pic/slider-3.jpg" alt="Loading" ><p class="slide_text">Experienced<br> Doctors & Staff</p></div> </div>  
      
     
         
            <div class="container mt-5">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-5"><h2>Knowledge About COVID-19</h2><br/>

                <p>
                In 2019, the Centers for Disease Control and Prevention (CDC) started monitoring the outbreak of a new coronavirus, SARS-CoV-2, which causes the respiratory illness now known as COVID-19. Authorities first identified the virus in Wuhan, China. More than 78,191 people have contracted the virus in China. Health authorities have identified many other people with COVID-19 around the world, including in the United States. On January 31, 2020, the virus passed from one person to another in the U.S.

                The World Health Organization (WHO) have declared a public health emergency relating to COVID-19.
                Since then, this strain has been diagnosed in several U.S. residents. The CDC have advised that it is likely to spread to more people. COVID-19 has started causing disruption in at least 25 other countries.
                 </p></div>

                 <div class="col-lg-4 col-md-4 col-sm-6 mt-5 mb-5 p1"></div></div>     


<div class="flourish-embed flourish-chart" data-src="story/230085"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
                
                <center><h2>How Does Corona Spreads</h2></center>
                <div class="row d-flex justify-content-around mt-5">
                <div class="col-lg-3 col-md-3 col-sm-12"><div class="p2"></div>
                    
                     Person To Person
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.<br></div> 
         

                <div class="col-lg-3 col-md-3 col-sm-12"><div class="p3"></div>Infected Person Cough
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.<br></div>

                <div class="col-lg-3 col-md-3 col-sm-12"><div class="p4"></div>Close Contact
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.<br/></div></div>  


                <div class="row mt-5">
                <div class="col-lg-4 col-md-4 col-sm-12 p5"></div>  

                <div class="col-lg-6 col-md-6 col-sm-12 m-3 text-center">
                        
                         <h2> Symptoms Of Coronavirus</h2>
                <h2>Know More About Corona Virus</h2>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                   
                    <div class="row m-3">
                      <div class="col-lg-6 col-md-12 col-sm-12">
                       <div class="symptoms">Cough</div>
                       <div class="symptoms">Tirdness</div>
                       <div class="symptoms">Breath Shortness</div></div>
                       <div class="col-lg-6 col-md-12 col-sm-12">
                       <div class="symptoms">Fever</div>
                       <div class="symptoms">Headache</div>
                           <div class="symptoms">Muscle Pain</div> </div>
                    </div></div></div>

        </div>
    </article>
     <article>

     <div class="container" id="Prevention">
           <div class="row">
               <div class="col-lg-7 col-md-6 col-sm-6"> <h3>How To Be Safe?</h3><br/>
                    Know More About Corona Virus
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.

            <div class="row w-100">  
                <div class="col-lg-6 col-md-6 col-sm-12">
                     <div class="mt-3"><img src="pic/wash-hands.jpg"><h5>-Wash Your Hands</h5></div>
                     <div class="mt-3"><img src="pic/wash-hands.jpg"><h5>-Avoid Close Contact</h5></div>
                     <div class="mt-3"><img src="pic/stay-at-home.jpg"><h5>-Stay At Home</h5></div></div> 


                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="mt-3"><img src="pic/face.jpg"><h5> -Don't Touch Your Face</h5></div>
                     <div class="mt-3"><img src="pic/mask.jpg"><h5>-Wear A Face Mask</h5></div>
                     <div class="mt-3"><img src="pic/crowd.jpg"><h5>- Avoid Crowded Places</h5></div> 
                </div></div></div>

            <div class="col-lg-4 col-md-4 col-sm-6 p7 mt-5 ml-5"></div>
        
        
    </div>
        
        
        <div class="row mt-5">
        <div class="col-lg-6 col-md-6 col-sm-12">
                
                
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                
				<div class="panel panel-default">
                   
                      <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> What is COVID-19?  </a> </h4></div>
                   
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body"> Curabitur convallis nunc urna, sit amet pulvinar neque commodo in. Fusce vel ex sed nisi consequat molestie a quis massa. Maecenas vel dictum magna. Aenean non mauris accumsan massa efficitur molestie vel tristique nibh. Phasellus magna odio, feugiat ac leo eget placerat. </div></div>
                            </div>
                    
            
                <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> How Does It Spreads? </a></h4>           </div>            

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body"> Curabitur convallis nunc urna, sit amet pulvinar neque commodo in. Fusce vel ex sed nisi consequat molestie a quis massa. Maecenas vel dictum magna. Aenean non mauris accumsan massa efficitur molestie vel tristique nibh. Phasellus magna odio, feugiat ac leo eget placerat. </div></div>
                            </div>
                 
                    
        
                    <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Why Should We Take Care?  </a> </h4></div>
                
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body"> Curabitur convallis nunc urna, sit amet pulvinar neque commodo in. Fusce vel ex sed nisi consequat molestie a quis massa. Maecenas vel dictum magna. Aenean non mauris accumsan massa efficitur molestie vel tristique nibh. Phasellus magna odio, feugiat ac leo eget placerat. </div>
				         </div></div></div></div>
               
                
                
                 <div class="col-lg-6 col-md-6 col-sm-12">
                 
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              
				<div class="panel panel-default">
                                    
				    <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title"> <a  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"> How To Test Yourself?  </a> </h4> </div>
                                   
								<div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">Curabitur convallis nunc urna, sit amet pulvinar neque commodo in. Fusce vel ex sed nisi consequat molestie a quis massa. Maecenas vel dictum magna. Aenean non mauris accumsan massa efficitur molestie vel tristique nibh. Phasellus magna odio, feugiat ac leo eget placerat. </div></div>			
								</div>
							
								<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingFive">
												<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> What Are Preventions? </a></h4></div>
									
										<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
												<div class="panel-body"> Curabitur convallis nunc urna, sit amet pulvinar neque commodo in. Fusce vel ex sed nisi consequat molestie a quis massa. Maecenas vel dictum magna. Aenean non mauris accumsan massa efficitur molestie vel tristique nibh. Phasellus magna odio, feugiat ac leo eget placerat. </div></div>
									
								</div>
								<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingSix">
												<h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> Where To go If Infected?  </a> </h4>
										</div>
										<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
												<div class="panel-body"> Curabitur convallis nunc urna, sit amet pulvinar neque commodo in. Fusce vel ex sed nisi consequat molestie a quis massa. Maecenas vel dictum magna. Aenean non mauris accumsan massa efficitur molestie vel tristique nibh. Phasellus magna odio, feugiat ac leo eget placerat </div>
										</div>
								</div>
						</div>
				</div>  
            </div>
        </div>
    <br>
        
      
        <center><h1>Meet Our Awesome Team</h1>
            All The Specialist Doctors</center>

              <div class="owl-carousel slide-two owl-theme m-2" id="FAQs">
              <div class="m-5"><img src="pic/post1.jpg"><h3>Dr.Johana</h3><font size="5px" color="red" class="mr-5">Urology</font><a href="#" class="btn btn-danger">Consult Now</a></div>

             <div class="m-5"><img src="pic/post2.jpg"><h3>Dr.John</h3><font size="5px" color="red" class="mr-5">Nephrology</font><a href="#" class="btn btn-danger ">Consult Now</a></div>

             <div class="m-5"><img src="pic/post3.jpg"><h3>Dr.Ntalia</h3><font size="5px" color="red" class="mr-5">Genecology</font><a href="#" class="btn btn-danger">Consult Now</a></div>


               <div class="m-5"><img src="pic/post1.jpg"><h3>Dr.Johana</h3><font size="5px" color="red" class="mr-5">Urology</font><a href="#" class="btn btn-danger">Consult Now</a></div>

             <div class="m-5"><img src="pic/post2.jpg"><h3>Dr.John</h3><font size="5px" color="red" class="mr-5">Nephrology</font><a href="#" class="btn btn-danger ">Consult Now</a></div>

             <div class="m-5"><img src="pic/post3.jpg"><h3>Dr.Ntalia</h3><font size="5px" color="red" class="mr-5">Genecology</font><a href="#" class="btn btn-danger ">Consult Now</a></div>
            </div>   

            

         <div class="container mt-5">
             <center><h1>Emergency Gadgets</h1>Online Shoping</center>

         <div class="row d-flex justify-content-around mt-5 text-center"id="shop">
         
         <?php
        while($row=mysqli_fetch_assoc($pd)){
           component($row["product_image"],$row["product_name"],$row["product_price"],$row["id"]) ;
            
        } 
         ?> 
         
         </div>
         
        </div>          

     </article>
    </main>
    <footer>
     <?php
        
        include('layouts/footer.php');
        ?>
        
    </footer>
    
   <script type="text/javascript" src="js/script.js"></script>  
</body>
</html>