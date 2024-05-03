

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
	
button {
  outline: none;
  cursor: pointer;
  margin: 0;
}


input[type="text"]{
				border:none;
				width:12vh;
			}
			input[type="text"]:focus{
				outline:none;
				border:none;
			}
/* .pen-wrapper {
  display: flex;
  width: 100%;
  height: calc(100vh - 85px);
  min-height: 500px;
  justify-content: space-around;
  align-items: center;
  flex-direction: column;
} */
@media screen and (min-width: 768px) {
  .pen-wrapper {
    flex-direction: row;
  }
}

.pen-title {
  text-align: center;
  font-size: 20px;
  line-height: 40px;
  padding: 20px 0;
}
.pen-title a {
  text-decoration: underline;
  font-size: 0.75em;
  cursor: pointer;
}

.buton-cover {
  position: relative;
}

.btnn, .button-slide-out__above {
  display: block;
  /* min-width: 120px; */
  border: none;
  padding: 0 1em;
  font-size: 12px;
  color: #fff;
  line-height: 40px;
  text-align: center;
  background: none;
  transition: background 0.3s ease;
}

.btn--primary {
  background-color: #000;
  width: 100%;
  font-size: 15px;
  transition: 0.5s;
}
.btn--primary:hover {
  background-color: #db6e6b;
  color:#fff;
  transition: 0.5s;
}

.btn--gray {
  background-color: #9c9c9c;
}
.btn--gray:hover {
  background-color: #8f8f8f;
}

.btn--gray-drk {
  background-color: #787878;
}
.btn--gray-drk:hover {
  background-color: #6b6b6b;
}

.btn__txt--inactive {
  display: block;
}
.is_active .btn__txt--inactive {
  display: none;
}

.btn__txt--active {
  display: none;
}
.is_active .btn__txt--active {
  display: block;
}

.button-set {
  display: flex;
  margin-top: 1px;
}
.button-set .btn, .button-set .button-slide-out__above {
  display: block;
  min-width: initial;

  padding:0px 7px;
}

.button-3d {
  perspective: 200px;
}
.button-3d.is_active > .btn, .button-3d.is_active > .button-slide-out__above {
  background-color: #9c9c9c;
}

.button-3d__dropdown {
  overflow: hidden;
  transition: all 1s ease;
  transform: rotateX(-91deg);
  transform-origin: top;
  position: absolute;
  top: 100%;
  width: 100%;
  backface-visibility: hidden;
}
.is_active .button-3d__dropdown {
  transform: rotateX(0deg);
}
.button-3d__dropdown .btn, .button-3d__dropdown .button-slide-out__above {
  background-color: #b24a48;
  transition: background-color 1s linear;
}
.is_active .button-3d__dropdown .btn, .is_active .button-3d__dropdown .button-slide-out__above {
  background-color: #d65a57;
}
.button-3d__dropdown .btn--gray {
  background-color: #7f7f7f;
}
.is_active .button-3d__dropdown .btn--gray {
  background-color: #9c9c9c;
}

.button-slide-out {
  position: relative;
}

.button-slide-out__middle {
  position: relative;
  z-index: 10;
}

.button-slide-out__above,
.button-slide-out__below {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  transition: transform 0.5s ease;
}

.button-slide-out__above {
  font-size: 14px;
}
.is_active .button-slide-out__above {
  transform: translateY(-100%);
}

.is_active .button-slide-out__below {
  transform: translateY(100%);
}

.button-slide-up {
  position: relative;
  overflow: hidden;
  min-width: 120px;
}
.button-slide-up .button-set {
  margin-top: 0;
}

.button-slide-up__button {
  position: absolute;
  top: 0;
  left: 0;
  transition: transform 0.5s ease;
}
.is_active .button-slide-up__button {
  transform: translateY(-100%);
}


.product_price strike{
  color:gray !important;
}



</style>

<main class="main" style="padding-top:70px;">
        
			                           <?php
                                     $remove =  $this->session->flashdata('remove');
                                    //   echo $this->session->flashdata('remove') ;
                                     ?>	

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
						
	                	<div class="row">
	                		<div class="col-lg-8">
                            <?php
if(!empty(($cartItems))){
?>
                    <div class="col-md-6" style="text-center">
							<?php
                      if($remove){
                ?>
				       <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span  aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Product deleted succesfully
</div>
				<?php
					  }
							?>
                           
						</div>
	                			<table class="table table-cart table-mobile basket-tbl">
									<thead>
										<tr>
		
										</tr>
									</thead>

                                    <?php
					foreach($cartItems as $row){
	?>
									<tbody>
										<tr>
											<td class="product-col">
												<div class="product">
													<figure class="product-media">
														<a href="#">
															<img src="<?= base_url('upload/men/' .$row->image); ?>" alt="Product image">
														</a>
													</figure>

													<div class="product-title">
														<div class="product_name">
														<a href="#"><?= $row->name ?></a>
														</div>
														<div class="product_data">
															<a href="">Size : <?= $row->size  ?></a>
														</div>
							                            <div class="product_data product_price">
															<a href="">Price : <strike> <i class="fa fa-rupee"></i> <?= $row->price  ?></strike> <i class="fa fa-rupee"></i> <?= $row->discount_price  ?></a>
														</div>
		
														<div class="product_data">
															<a href="#">Total :  <i class="fa fa-rupee"></i>
															<?= $row->subtotal   ?>
															</a>
														</div>
														<?php  
                                                           if($row->delivery ){
															?>
															<div class="product_data">
															<a href="#">Delivery Charges : <i class="fa fa-rupee"></i> <?= $row->delivery  ?></a>
														</div>
															<?php
														   }else{
															?>
															<div class="product_data">
															<a href="#">Delivery Charges : Free</a>
														</div>
															<?php
														   }
														?>
														<?php  
                                                           if($row->discount ){
															?>
															<div class="product_data">
															<a href="#">Discount : - <i class="fa fa-rupee"></i>  <?= $row->discount  ?></a>
														</div>
															<?php
														   }else{
															?>
															<div class="product_data">
															<a href="#">Discount : Free</a>
														</div>
															<?php
														   }
														?>
					                               </div>
												</div><!-- End .product -->
											</td>
				
											<td class="product-col">
												<div class="product">
											<form action="<?php echo base_url('main/cart_price') ?>" method="post">
											
                                        <input type="hidden" name="price" value="<?= $row->price  ?>" class="price">									
                                                <div class="qty">
                                                    <div class="qty-container">
		                                    <button class="qty-btn-minus btn-light"  type="submit" name="submit" value="Update">-</button>
		    	                           <input type="text" name="id" hidden value="<?= $row->id  ?>">
				                           <input type="text"  name="qty" value="<?= $row->qty ?>" class="input-qty"/>
		                                  <input type="hidden" name="rowid" value="<?= $row->rowid ?>"/>
				                           <button class="qty-btn-plus btn-light"  type="submit" name="submit" value="Update">+</i></button>
		                                         </div>
												 </div>                                            
                                            <div> <input type="hidden" hidden class="txt" class="subtotal" name="subtotal" value="<?= $row->subtotal  ?>"> </div>  
											<div class="total-col" class="product-col">Total : INR <span class="subtotal subtotal<?=  $row->rowid ?>"><?= $row->subtotal  ?></span></div>
											</form>	
												</div>
											</td>
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

											<td class="product-col">
												<div class="product">
												
	
	<!-- <a  href="<?= base_url('main/cart_delete/') . $row->id   ?>"  >
	<button  class="btn-remove" >Remove</button>
	</a> -->
	<div class="pen-wrapper"> 
  <div class="pen-wrapper__inner">
    <div class="buton-cover button-slide-up">
      <button class="btnn btn--primary button-slide-up__button">Remove</button>
      <div class="button-set">
       <a href="#"> <button class="btnn btn--gray">Cancel</button></a>
        <a href="<?= base_url('main/cart_delete/') . $row->id   ?>"><button class="btnn btn--gray-drk">Confirm</button></a>
      </div>
    </div>
  </div>
</div>
											
												</div>
										</td>
										</tr>
									</tbody>
                                    <?php
				}
	?>
								</table><!-- End .table table-wishlist -->
                                <?php
}


else{
	redirect(base_url('main/cart_view_empty'));
}
?>
						
	                		
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
									<?php
                  $user1=$this->session->userdata('eco_user');
				  extract($user);
                  
              	?>
	                				<a href="<?= base_url('main/checkout_page/') . $user1['id'] ?>" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
	                			</div><!-- End .summary -->

		            			<a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
		<!--add to cart start-->
	
 