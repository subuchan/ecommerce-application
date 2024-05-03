

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
 
/* .payment{
	background-color: #3ABC8A;
	margin: 2em auto;
	max-width: 600px;
} */

.radio{
	max-width: 450px;
	display:flex;
	justify-content: space-between;
	padding: 5px 15px 5px 10px;
	margin: 20px auto;
	border: 1px solid #DFDFDF;
	border-radius: 3px;
	background: linear-gradient(to bottom, white, #F4F4F4);
}
.radio *{
	align-self: center;
	/* flex: 1; */
}

.radio label,
.radio label span{
	text-align: right;
	display: block;
}
.radio input[type=radio]{
	margin:0px;
}

.radio img{
	max-width: 45px;
	position: relative;
	left: 25px;
}
#update-pledge-validate{
    text-align: center;
}
#submitUpdatePledge{
    width: 50%;
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
             <?php
            $user=$this->session->userdata('eco_user');
             extract($user);
             $userid= $user['id'];
            ?>

<main class="main" style="padding-top:70px;">
            <div class="page-content">
            	<div class="cart">
	                <div class="container">
                  <div class="row">
	                		<div class="col-lg-8">
                
                            <div class="container-fluid payment">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">PAYMENT OPTIONS</h3>

			<div class="radio form-group">
				<input id="CC-0" type="radio" name="availPayment" value="4582" checked>
				<img src="http://cdn.androidbeat.com/wp-content/uploads/2015/02/Visa_logo.png" alt="">
				<label for="CC-0">**** **** **** 4582<span>Visa</span></label>
                <!-- <h6>Cash on delivery</h6> -->
			</div>
			
			<div class="radio form-group">
				<input id="CC-1" type="radio" name="availPayment" value="4587">
				<img src="http://cdn.androidbeat.com/wp-content/uploads/2015/02/Visa_logo.png" alt="">
				<label for="CC-1">**** **** **** 2587<span>Visa</span></label>
			</div>
			
			<div class="radio form-group">
				<input id="CC-2" type="radio" name="availPayment" value="5079">
				<img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png" alt="">
				<label for="CC-2">**** **** **** 5079<span>MasterCard</span></label>
			</div>
			
			<div class="radio form-group">
				<input id="CC-3" type="radio" name="availPayment" value="5809">
				<img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/American-Express-icon.png" alt="">
				<label for="CC-3">**** **** **** 809<span>AmEx</span></label>
			</div>
			
			<div class="form-group col-sm-12">
				<div class="col-sm-12 field" id="update-pledge-validate">
					<input type="button" class="btn-primary" id="submitUpdatePledge" value="Update Payment">
				</div>
			</div>
		</div>
	</div>
</div>
 
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
	
  
