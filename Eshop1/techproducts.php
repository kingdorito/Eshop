<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/techproducts.css">
    <title>Nexus Makert: Buy the latest Tech Products</title>
</head>

<body>
    <div class="header">
        <label for="">Nexus Maker: Tech Products</label>
        <label for=""><a href="index.html">Go to home page</a></label>
        <label for=""><a href="clothing.html">Clothing</a></label>
        <label for=""><a href="home.html">Home Products</a></label>
        <label for=""><a href="healthproducts.html">Health Products</a></label>
        <label for=""><a href="sports.html">Sports</a></label>
        <label for=""><a href="gifts.html">Giftcards</a></label>

        <div class="shopping-cart">
                <button><img src="eshopproducts/shoppingcart.png" width="50"height="50"></button>
        </div>
    </div>

    <!-- shop items !-->
    <section id="tech-products-container" class="tech-products-container">
        <form action="products.php" method = "post">
            <div class="tech-items">
                <img src="eshopproducts/products/gamingkeyboard.jpg" height="200">
                <div class="item-details">
                    <label for="">Gaming Keyboard RGB - White & Red Switches with Wrist Rest</label> <br>
                    <label for="">50% OFF $240 $120</label>
                    <input type="hidden" name = "product_id" value = "gamingkeyboard">
                    <input type="hidden" name = "product_name" value = "Gaming Keyboard RGB - White & Red Switches with Wrist Rest">
                    <input type="hidden" name = "product_price" value = "120">
                    <button type="submit">ADD TO CART</button>
                </div>
            </div>

            <div class="tech-items">
                <img src="eshopproducts/products/inteli3.jpg" height="200">
                <div class="item-details">
                    <label for="">Computer CPU - 8 cores/ 16 threads / 32MB Cache - 9th Gen</label> <br>
                    <label for="">$200</label>
                    <input type="hidden" name = "product_id" value = "cpu9thgen">
                    <input type="hidden" name = "product_name" value = "Computer CPU - 8 cores/ 16 threads / 32MB Cache - 9th Gen">
                    <input type="hidden" name = "product_price" value = "200">
                    <button type="submit">ADD TO CART</button>
                </div>
            </div>

            <div class="tech-items">
                <img src="eshopproducts/products/inteli5.jpg" height="200">
                <div class="item-details">
                    <label for="">Computer CPU - 12 cores/ 18 threads / 32MB Cache - 10th Gen</label> <br>
                    <label for="">$520</label>
                    <input type="hidden" name = "product_id" value = "cpu10thgen">
                    <input type="hidden" name = "product_name" value = "Computer CPU - 12 cores/ 18 threads / 32MB Cache - 10th Gen">
                    <input type="hidden" name = "product_price" value = "520">
                    <button type="submit">ADD TO CART</button>
                </div>
            </div>

            <div class="tech-items">
                <img src="eshopproducts/products/inteli7.jpg" height="200">
                <div class="item-details">
                    <label for="">Computer CPU - 16 cores/ 24 threads / 64MB Cache - 12th Gen</label> <br>
                    <label for="">$675</label>
                    <input type="hidden" name = "product_id" value = "cpu12thgen">
                    <input type="hidden" name = "product_name" value = "Computer CPU - 16 cores/ 24 threads / 64MB Cache - 12th Gen">
                    <input type="hidden" name = "product_price" value = "675">
                    <button type="submit">ADD TO CART</button>
                </div>
            </div>

            <div class="tech-items">
                <img src="eshopproducts/products/phone.jpg" height="200">
                <div class="item-details">
                    <label for="">S53 5G - 8GB RAM / 1TB Storage/ Windows OS - 2023 </label> <br>
                    <label for="">$120</label>
                    <input type="hidden" name = "product_id" value = "phone">
                    <input type="hidden" name = "product_name" value = "S53 5G - 8GB RAM / 1TB Storage/ Windows OS - 2023">
                    <input type="hidden" name = "product_price" value = "120">
                    <button type="submit">ADD TO CART</button>
                </div>
            </div>

            <div class="tech-items">
                <img src="eshopproducts/products/ryzen3.jpg" height="200">
                <div class="item-details">
                    <label for="">Computer CPU - 6 Cores/ 8 Threads / 10MB Cache - 12th Gen</label> <br>
                    <label for="">$745</label>
                    <input type="hidden" name = "product_id" value = "cpu12thgen6core8threads">
                    <input type="hidden" name = "product_name" value = "Computer CPU - 6 Cores/ 8 Threads / 10MB Cache - 12th Gen">
                    <input type="hidden" name = "product_price" value = "745">
                    <button type="submit">ADD TO CART</button>
                </div>
            </div>
            <div class="tech-items">
                <img src="eshopproducts/products/ryzen5.jpg" height="200">
                <div class="item-details">
                    <label for="">Computer CPU - 16 cores/ 24 threads / 32MB Cache - 12th Gen</label> <br>
                    <label for="">$612</label>
                    <input type="hidden" name = "product_id" value = "cpu12thgen16cores24threads">
                    <input type="hidden" name = "product_name" value = "Computer CPU - 16 cores/ 24 threads / 32MB Cache - 12th Gen">
                    <input type="hidden" name = "product_price" value = "612">
                    <button type="submit">ADD TO CART</button>
                </div>
            </div>

            <div class="tech-items">
                <img src="eshopproducts/products/ryzen7.jpg" height="200">
                <div class="item-details">
                    <label for="">Computer CPU - 24 cores/ 32 threads / 64MB Cache - 12th Gen</label> <br>
                    <label for="">$816</label>
                    <button type="submit">ADD TO CART</button>
                </div>
            </div>

            <div class="tech-items">
                <img src="eshopproducts/products/gaming mouse.jpg" height="200">
                <div class="item-details">
                    <label for="">Gaming Mouse RGB - 1000DPI</label> <br>
                    <label for="">$150</label>
                    <input type="hidden" name = "product_id" value = "gamingmouse">
                    <input type="hidden" name = "product_name" value = "Gaming Mouse RGB - 1000DPI">
                    <input type="hidden" name = "product_price" value = "150">
                    <button type="submit">ADD TO CART</button>
                </div>
            </div>
        </form>
    </section>


    <div class="footer-container">
        <footer>
            <label for="copywrite-label">
                &copy Copyrights Nexus Market 2023. All right reserved.
            </label>
        </footer>
    </div>
</body>
</html>