<?php
function component($productname,$productprice,$productimage,$productid){
                  
 $element="  
         
         <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                    <form action=\"index.php\" method=\"post\">
                        <div class=\"card shadow\">
                        <div>
                        <img src=\"$productimage\" alt=\"responsive image\" class=\"img-fluid card-img-top\">    
                        </div>
                          <div class=\"card-body\">
                          <h5 class=\"card-title\">$productname</h5>
                          <h6>
                              <i class=\"fas fa-star\"></i>
                              <i class=\"fas fa-star\"></i>
                              <i class=\"fas fa-star\"></i>
                              <i class=\"fas fa-star\"></i>
                              <i class=\"far fa-star\"></i>
                          </h6>
                          <p class=\"card-text\">Some quick example text to build the card.</p>
                          <h5>
                          <small><s class=\"text-secondary\">Rs15000</s></small>
                          <span class=\"price\">Rs$productprice</span>
                          </h5>
                          <button type=\"submit\"class=\"btn btn-warning my-3\" name=\"add\">Add to cart<i class=\"fas fa-shopping-cart\"></i></button>
                          <input type=\"hidden\" name=\"product_id\" value=\"$productid\">
</div>
                        </div>
                    </form>
                </div> ";
         
echo"$element";



}