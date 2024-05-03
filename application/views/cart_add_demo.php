

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
	




/* .fade.in {top:10.4%;} */
/* .btn-main {background-color:#E85365;border:none;color:white;padding:.5em 1.75em;}
.btn-default {background:none;border:none;color:#3975cc;padding:.5em 1.75em;margin-right:1.5em;}
.modal-dialog {margin: 100px auto;}
.modal-header {border-bottom: transparent;padding:1em 1em;}
.modal-content {background-color: #d8d8d8;}
.modal-body {padding: 0em 4em;margin-top:-.5em;}
.modal-footer {border-top:transparent;padding:1.5em 3em 2.5em 0em;} */
</style>



<div id="wrapper">
  <div id="content">
        <table class="basket-tbl">
          <tbody>
            <tr>
                <label>Cotton T-Shirt, Medium</label>
              <td>
                  <input type="text" name="price" id="price" class="price" value="1.99">
              </td>
              <td>
                  <input type="text" name="qty" id="qty" class="qty" value="1">
              </td>
              <td>
                  <input type="text" name="cost" id="cost" class="cost" value="">
              </td>
            </tr>
          </tbody>
        </table>

       
                  <input type="text" name="subtotal" class="subtotal" id="subtotal" value="">
            
           
                <input type="text" name="vat" class="vat" id="vat" value="">
            
                  <input type="text" name="total" class="total" id="total" value="">
               
                <button type="submit" id="buy-now" class="buy-now">Buy Now <i class="fa fa-angle-double-right"></i></button>
          
  </div>
</div>


		 

		 <script>
            $(function() {
calculate();
function calculate() {
    $(".basket-tbl tr").each(function() {
      var priceVal = $(this).find('input.price').val();
      var qtyVal = $(this).find("input.qty").val();
      var costVal = (priceVal * qtyVal);
      $(this).find('input.cost').val((costVal).toFixed(2));
    });

    var subtotalVal = 0;
    $('.cost').each(function() {
      subtotalVal += parseFloat($(this).val());
    });
    $('.subtotal').val((subtotalVal).toFixed(2));

    $(".vat").val(((subtotalVal / 100) * 20).toFixed(2));

    var vatVal = ((subtotalVal / 100) * 20).toFixed(2);
    var total = parseFloat(subtotalVal) + parseFloat(vatVal);
    $(".total").val((total).toFixed(2));
}
});
         </script>