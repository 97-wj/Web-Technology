<html>
    <head>
        <title>Recipe</title>
        <link rel="stylesheet" href="./view/css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="top">
            <div class="logo">FlavorFolio</div>
            <div class="nav">
                <a href="#">Home</a>
                <a href="#">Menu</a>
                <a href="#">About</a>
                <a href="#">Location</a>
                <a href="#">Contact</a>
            </div>
            <div class="search">
                <i class="fa-solid fa-search"></i>
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="heading">
            <div class="left">
                <p>Are You Hungry?</p>
                <h1>Don't Wait</h1>
                <p>Let start to order recipe now</p>
                <div class="php">
                  <?php
                            // Use absolute path to avoid issues
                            require_once __DIR__ . '/controller/AuthController.php';

                            $action = isset($_GET['action']) ? $_GET['action'] : 'login';

                            $authController = new AuthController();

                            switch ($action) {
                                case 'login':
                                    $authController->login();
                                    break;
                                case 'register':
                                    $authController->register();
                                    break;
                                case 'logout':
                                    $authController->logout();
                                    break;
                                default:
                                    $authController->login();
                                    break;
                                    
                            }
                            ?>

                </div>
            </div>

            <div class="right" id="food"></div>

            <div class="SocialMedia">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-whatsapp"></i>
            </div>
        </div>

        

    </body>
</html>


