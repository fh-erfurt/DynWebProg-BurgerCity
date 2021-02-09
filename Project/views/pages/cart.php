<div class="cart-body">
    <h1>Einkaufswagen</h1>
    <div class="cart-body-right">
        <p class="total-number-of-products">Summe (<?=htmlspecialchars($preloadGesamtSumme)?> Artiekl):<p class="sum-of-total-products"> <?=htmlspecialchars($preloadGesamtSumme)?> €</p></p>
        
        <form method="POST">
            <input class ="goToCartReview" type="submit" name="goToCartReview" id="goToCardReview" value="Zur Kasse gehen">
        </form>
    </div>

    
    <div class="cart-body-left">
        <?php foreach($preloadOrders as $orderItem){ ?>
        <form method="POST">
            <div class="cart-product-box">
                <a class="cart-product-picture-link" href="">
                    <img class="cart-product-picture"src="<?=IMAGESPATH.$orderItem['product']->pictureURL?>" alt="">
                </a>

                <div class="cart-product-box-right">
                    <h4><?=htmlspecialchars($orderItem['product']->description)?></h4>
                    

                    <div class="cart-item-id">
                        <input type="number" name="productId" id="productsId" required readonly>
                    </div>

                    <label class="totalProductPrice" for="totalProductPrice"><?=htmlspecialchars($orderItem['product']->price * $orderItem['quantity'])?> €</label>
                    
                    <label class="singleProductPrice"for="singleProductPrice">(<?=htmlspecialchars($orderItem['product']->price)?> € / Stück)</label>

                <br>

                    <label class="label-numberOfItem" for="numberOfItem">Anzahl:</label>
                    <input class="input-numberOfItem" type="number" min="0" step="1" value="<?=htmlspecialchars($orderItem['quantity'])?>" required>
                
                </div>
                <div class="cart-product-box-buttons">
                    <input type="submit" name="deleteItem" id="deleteItem" value="Löschen">
                    <input type="submit" name="saveItemCount" id="saveItemCount" value="Anzahl speichern">
                </div>
            </div>
        </form>
        <?php }?>

<!-- 
        <h5>Lieferinformationen</h5>
        <textarea name="" id="" maxlenght="255"></textarea> -->
    </div>
    <!-- <p class="total-number-of-products">Summe (3 Artiekl):<p class="sum-of-total-products"> 61.38€</p></p>
    
    <form method="POST">
        <input class ="goToCartReview" type="submit" name="goToCartReview" id="goToCardReview" value="Zur Kasse gehen">
    </form> -->


</div>