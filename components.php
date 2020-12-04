<?php
 function component($image,$product,$price,$id){
    
    echo "<form action=\"#carts\" method=\"POST\"class=\"col-lg-3 col-md-4 col-6\">
     
     
      <div id=\"carts\"><img src=\"pic/$image\" style=\"border:1px solid;width:100%;\"><h3>$product</h3><h5>$$price</h5>
     <button type=\"submit\" class=\"btn btn-warning m-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
     <input type='hidden' name='product_id' value='$id'>
      </div> </form>";
      
     
 }


function cartElement($image, $product, $price, $id){
  
    echo 
    "<form action=\"cart.php?action=remove&id=$id\" method=\"POST\"class=\"m-2\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3\">
                                <img src=\"pic/$image\"height=\"100px\" width=\"100px\">
                            </div>
                            <div class=\"col-md-8\">
                                <h5 class=\"pt-2\">$product</h5>
                                <small class=\"text-secondary\">Seller: HAYK</small>
                                <h5 class=\"pt-2\">$$price</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                           
                        </div>
                    </div>
                </form>"
    
    ;
  
}












?>