

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
	
button {
  outline: none;
  cursor: pointer;
  margin: 0;
}
.summary-subtotal input[type="text"]{
				border:none;
				width:12vh;
			}
			input[type="text"]:focus{
				outline:none;
				border:none;
			}
.summary-total input[type="text"]{
				border:1px;
				width:12vh;
			}
      form {
  /* width: 600px; */
}

.form-group input {
  line-height: 2em;
  padding: .5em;
  width: 600px;
  border:1px solid gray !important;
}

label {
  width: 70px;
  display: inline-block;
  vertical-align: middle;
  margin: 20px;
}

.form-group {
  /* display: flex;
  align-items: center;
  justify-content: center; */
  margin-bottom: .5em;
  padding: 10px;
}
.contact-group{
  margin-bottom: .5em;
}
.address_button{
  display: flex;
  align-items: center;
  justify-content: center;
}
.address_button input{
  background-color: black;
  width: 70%;
}
.submit-group {
  padding: 10px;
  
}
.submit-group input[type="submit"]{
  background-color: black;
  color:#fff;
  width: 82%;
}
@media screen and (max-width:480px) {
  .form-group {
  display: flex;
   align-items: center;
  justify-content: center; 
  margin-bottom: .5em;
}
  form {
  width: 350px;
}

  .form-group input {
  line-height: 2em;
  padding: .5em;
  width: 330px;
  border:1px solid black !important;
}
}
.link{
  background-color:#fff;
  padding:10px;
  text-decoration:none;
  color:#000;
 margin: 5px;
 width: 100% !important;
 box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
}
.user_name h4{
  color:#000;
  font-size: 18px;
}
.user_address p{
  font-size: 16px;
}
.link{
  display:flex;
  justify-content: space-between;
}
.added div{
 margin: 10px;
}
.select_address{
  display: flex;
  justify-content: space-around;
  align-items: center;
  /* justify-content: center; */
  /* width: 100% !important; */
}
</style>
<div class="hide" style="display:none">
<?php
                        if(!empty(($cartItems))){
                               ?>
	                			<table class="table table-cart table-mobile basket-tbl">
                                    <?php
				        	foreach($cartItems as $row){
	                     ?>
			  <td>
                  <input type="text" hidden name="price" id="price" class="price" value="<?= $row->price ?>">
              </td>
              <td>
                  <input type="text" hidden name="qty" id="qty" class="qty" value="<?= $row->qty  ?>">
              </td>
              <td>
                  <input type="text" hidden name="cost" id="cost" class="cost" value="<?=$row->subtotal  ?>">
              </td>
			  <td>
                  <input type="text" hidden name="dis" id="dis" class="dis" value="<?=$row->discount  ?>">
              </td>
			  <td>
						 <input type="text" hidden name="del" id="del" class="del" value="<?=$row->delivery  ?>">
              </td>
                                    <?php
				               }
                         	?>
								</table>
                                <?php
                             }
                             ?>
                             </div>

<main class="main" style="padding-top:70px;">
            <div class="page-content">
            	<div class="cart">
	                <div class="container">
                  <div class="row">
	                		<div class="col-lg-8">
                      <?php
                  $user=$this->session->userdata('eco_user');
                   extract($user);
                  $userid= $user['id'];
              	?>

                      <form action="<?=base_url('main/user_address/') . $userid ?>" method="post">      
                <div class="contact-group">
                   <h5>contact Details</h5>
                </div>        
      <div class="form-group">
        <!-- <label for="address" class="label-float">Address</label> -->
        <input name="name" class="form-control" type="text" placeholder="Name" >
      </div>

      <div class="form-group">
        <!-- <label for="route" class="label-float">Street</label> -->
        <input name="number" type="text" class="form-control"  placeholder="Contact Number" >
      </div>
      <div class="contact-group">
                   <h5>Address</h5>
                </div>  
      <div class="form-group">
        <!-- <label for="street_number" class="label-float">Number</label> -->
        <input name="address" type="text" class="form-control"  placeholder="House No / Building Name" >
      </div>

      <div class="form-group">
        <!-- <label for="locality" class="label-float">City</label> -->
        <input name="pincode" type="text" class="form-control"  placeholder ="Pincode" >
      </div>

      <div class="form-group">
        <!-- <label for="administrative_area_level_1" class="label-float">State</label> -->
        <input name="city" type="text" class="form-control"  placeholder="City" >
      </div>

      <div class="form-group">
        <!-- <label for="country" class="label-float">Country</label> -->
        <input name="state" type="text" class="form-control"  placeholder="State" >
      </div>

      <div class="form-group">
        <!-- <label for="postal_code" class="label-float">Zip code</label> -->
        <input name="nearby" type="text" class="form-control" i placeholder="Nearby Famous Place/Shop/School/,etc." >
      </div>
      <div class=" submit-group">
        <input type="submit" class="form-control" name="submit" value="Save Address and Continue" >
      </div>
    </form>
	                		</div>
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                					<tbody>
	                						<tr class="summary-subtotal">
                              <?php
                    if($user=$this->session->userdata('eco_user')){
                   extract($user);
              if(!empty($data1)){
              	?>
	                							<td>Price (<?= $data1 ?> items) :</td>
                                                <td class="item"> <i class="fa fa-rupee"></i> 
												<input type="text" name="subtotal" readonly class="subtotal" id="subtotal" value="">
													<!-- <i class="fa fa-rupee"></i>
                                             <span class="grandtotal">0 </span>  -->
                                                </td>
                                           <?php
                                   }
                                  }
                                           ?>
	                						</tr>
											<tr class="summary-subtotal">
	                							<td>Discount:</td>
                                                <td class="item"> - <i class="fa fa-rupee"></i> 
												<input type="text" name="vat" readonly class="vat" id="vat" value="">
											         </td>
                                               
	                						</tr>
											<tr class="summary-subtotal">
	                							<td>Delivery Charges:</td>
                                                <td class="item"> <i class="fa fa-rupee"></i> 
												<input type="text" name="delivery" readonly class="delivery" id="delivery" value="">
											         </td>
                                               
	                						</tr>
	                						
	                						<tr class="summary-total">
	                							<td>Total:</td>
                                                <td class="item"> <i class="fa fa-rupee"></i>
												<input type="text" name="total" readonly class="total" id="total" value="">              
											 
                                                </td>
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->

	                				<a href="<?= base_url('main/checkout_page/')  ?>" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
	                			</div><!-- End .summary -->

		            			<a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
		<!--add to cart start-->
	
  
    <!-- <div id="wrapper">
  <div id="content"> -->
        <!-- <table class="basket-tbl">
          <tbody>
            <tr>
                <label>Cotton T-Shirt, Medium</label>
              <td>
                  <input type="text" name="price" id="price" class="price" value="<?= $row->price ?>">
              </td>
              <td>
                  <input type="text" name="qty" id="qty" class="qty" value="<?= $row->qty  ?>">
              </td>
              <td>
                  <input type="text" name="cost" id="cost" class="cost" value="<?=$row->subtotal  ?>">
              </td>
            </tr>
          </tbody>
        </table> -->

       
                  <!-- <input type="text" name="subtotal" readonly class="subtotal" id="subtotal" value="">
                <input type="text" name="vat" readonly class="vat" id="vat" value="">
				<input type="text" name="delivery" readonly class="delivery" id="delivery" value="">
				
				=
                  <input type="text" name="total" readonly class="total" id="total" value="">              
                <button type="submit" id="buy-now" class="buy-now">Buy Now <i class="fa fa-angle-double-right"></i></button>
          
  </div>
</div>
 -->

		 <script>
      $("div.link").click(function(){
      $("div.link").css("background-color", "white");
    $(this).css("background-color", "rgba(51, 153, 255, 0.518)");
    
});
     </script>
