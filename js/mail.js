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