<div id="content" class="cart">
    <form class="cart__wrapper" action="index.php?page=cart" method="post" id="cartform">
      <table class='cart'>
        <thead class="cart__thead">
          <tr>
            <th class='product-description' colspan='2'></th>
            <th class='price'>Price</th>
            <th class='quantity'>Quantity</th>
            <th class='total'>Total</th>
          </tr>
        </thead>
        <tbody class="cart__tbody">
          <?php
          $total = 0;
          foreach($_SESSION['cart'] as $item) {
            $itemTotal = $item['product']['price'] * $item['quantity'];
            $total += $itemTotal;
          ?>
          <tr class="item">
          <td class='remove-item'><button type="submit" class="btn remove-from-cart" name="remove" value="<?php echo $item['product']['id'];?>">X</button></td>
            <td class='product-description'>
              <?php echo $item['product']['name'];?>
            </td>
            <td class='price'><?php echo money_format("%i", $item['product']['price']);?></td>
            <td class='quantity'> <input class="text quantity" type="text" name="quantity[<?php echo $item['product']['id'];?>]" value="<?php echo $item['quantity'];?>" class="replace" /> </td>
            <div class="total__wrapper">
            <td class='total'><?php echo money_format("%i", $itemTotal);?></td>
            </div>
          </tr>
          <?php
          }
          ?>
        </tbody>
        </table>
        <div class='column two'>
          <p class='order-total'><span>total:</span> <?php echo money_format("%i", $total);?></p>
          <div class="cart__buttons-wrapper">
          <p><button type="submit" id="update-cart" class="btn button__cart--update" name="action" value="update">Update Cart</button></p>
          </div>
        </div>
    </form>
    <?php
      if($numItems != '0'){
        echo '<a class="button__cart--link" href="index.php?page=checkout"><p><button class="btn-reversed btn button__cart--checkout" type="submit" id="checkout" name="action" value="checkout">Checkout</button></p></a>';
      }  
    ?>
  </div>
<div class="cart__footer">
<div><img class="home__img3" src="./assets/img/footerBackground.svg" alt=""></div>