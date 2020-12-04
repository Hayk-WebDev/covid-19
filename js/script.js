$(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > 600){
            $('.fixed-bottom').css('display','block');
        } else{
            $('.fixed-bottom').css('display','none');
        }
    });


var owl = $('.slide-one');
  owl.owlCarousel({
    loop:true,
    margin:10,
    nav:false,
      dots: false,
      autoplay:true,
    items: 1,
  });


 
$('.slide-two').owlCarousel({
    loop:true,
    autoplay:true,
    margin:10,
    nav:true,
    dots: false,
   responsiveClass:true,
    responsive:{
        0:{
            items:1,
           
        },
        600:{
            items:2,
       
        },
        1000:{
            items:3,
      
}}});

 $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
 $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');





 
$("#SendMail").on("click",function(){
  var email= $("#email").val().trim();
   var name= $("#name").val().trim();  
    var message=$("#message").val().trim();
    
    if (email == ""){
        $("#error").text("Please insert Email");
        return  false;
        
    }
    else if (name == ""){
        $("#error").text("Please insert Name");   
              return  false;
    }
            else if (message =="" ){
        $("#error").text("Please insert message");   
        
              return  false;
    }
    
    $("#success").text("Message is sent");
    
    
    $.ajax({
     url:'mail.php',
    type:'POST',
        cache:false,
    data:{
            'name':name,'email':email,'message':message
    },
    
    dataType:'html',
    beforeSend:function(){
            $("#SendMail").prop("disabled",true);
        },
     success:function(data){
         
         if(!data)
         alert("Error");
         
         else
             $("#mailForm").trigger("reset");
          $("#SendMail").prop("disabled",false);
     }   
        
        
        
        
    });


});


