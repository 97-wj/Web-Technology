<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
     <link rel="stylesheet" href="./css/UpdateAddress.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <h1 class="nav_intro">FlavorFolio</h1>
            <div>
                <a id="btn" href="">Home</a>
                <a id="btn" href="">Recipes</a>
                <a id="btn" href="">Meal Plans</a>
                <a id="btn"href="">Shopping List</a>
                
            </div>
        </nav>
    </header>

    <main class="main">
        <div class="address-form">
            <h2>YOUR ADDRESS</h2>
             <form action="" method="post">
                
                <input type="text" maxlength="50" placeholder="flat no. and building name" required class="box" name="flat">
                <input type="text" maxlength="50" placeholder="area name" required class="box" name="street">
                <input type="text" maxlength="50" placeholder="city name" required class="box" name="city">
                <input type="text" maxlength="50" placeholder="state name" required class="box" name="state">
                <input type="text" maxlength="50" placeholder="country name" required class="box" name="country">
                <input type="number" min="0" max="999999" placeholder="pin code" required class="box" name="pin_code" onkeypress="if(this.value.length == 6) return false;">
                <input type="submit" value="save address" name="submit" class="btn">
            </form>
        </div>
    </main>


    <footer class="footer">

        <section class="box-container">

            <div class="box">
                <img src="./image/email-icon.png" alt="">
                <h3>our email</h3>
                <a href="shahriarshakil28@gmail.com">shahriarshakil28@gmail.com</a>
                <a href="shahriarshakil28@gmail.com">shahriarshakil28@gmail.com</a>
            </div>

            <div class="box">
                <img src="./image/clock-icon.png" alt="">
                <h3>opening hours</h3>
                <p>00:09am to 00:10pm </p>
            </div>

            <div class="box">
                <img src="./image/map-icon.png" alt="">
                <h3>our address</h3>
                <a href="https://maps.app.goo.gl/DLxSFDu78oHUMtdg6">Roadside Kitchen Bashundhara R/A</a>
            </div>

            <div class="box">
                <img src="./image/phone-icon.png" alt="">
                <h3>our number</h3>
                <a href="tel:1234567890">+01797440XXX</a>
                <a href="tel:1112223333">+01797440XXX</a>
            </div>

        </section>

        <section class="footers">
            <div>
                <h1 class="nav_intro">FlavorFolio</h1>
                <p>FlavorFolio helps you organize and share your favorite recipes while simplifying meal planning.</p>
                <div class="social-icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-github"></i>
                </div>
            </div>
            <div>
                <h3>User Link</h3>
                <p>About Us</p>
                <p>Contact Us</p>
                <p>Order Delivery</p>
                <p>Terms of Services</p>
            </div>

            <div>
                <h3>Contact Us</h3>
                <p>Roadside Kitchen Bashundhara R/A +01797440XXX</p>
            </div>
        </section>
    
    </footer>
</body>
</html>