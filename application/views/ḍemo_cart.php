
<div id="wrapper">
  <div id="content">
    
    <main role="main">
      <form id="subtotal-form" name="subtotal-form" method="post" action="">
        <table class="basket-tbl">
          <thead>
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Cost</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="product">
                <label>Cotton T-Shirt, Medium</label>
              </td>
              <td>
                <div class="currency">
                  <input type="text" name="price" id="price" class="price" value="1.99">
                </div>
              </td>
              <td>
                <div class="qty">
                  <input type="text" name="qty" id="qty" class="qty" value="1">
                </div>
              </td>
              <td>
                <div class="currency">
                  <input type="text" name="cost" id="cost" class="cost" value="">
                </div>
              </td>
              <td>
                <i class="fa fa-trash-o"></i>
              </td>
            </tr>
          
          </tbody>
        </table>

        <table class="result-tbl">
          <tbody>
            <tr class="tbl-foot">
              <td colspan="3">
                <label>Subtotal</label>
              </td>
              <td>
                <div class="currency">
                  <input type="text" name="subtotal" class="subtotal" id="subtotal" value="">
                </div>
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr class="tbl-foot">
              <td colspan="3">
                <label>VAT @ 20%</label>
              </td>
              <td class="currency">
                <input type="text" name="vat" class="vat" id="vat" value="">
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr class="tbl-foot">
              <td colspan="3">
                <label>Total Cost</label>
              </td>
              <td>
                <div class="currency">
                  <input type="text" name="total" class="total" id="total" value="">
                </div>
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr class="tbl-foot">
              <td>&nbsp;</td>
              <td colspan="4">
                <button type="submit" id="buy-now" class="buy-now">Buy Now <i class="fa fa-angle-double-right"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </main>
  </div>
</div>


	