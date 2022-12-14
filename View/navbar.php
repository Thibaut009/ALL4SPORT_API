<header>
    <nav>
        <div class="header">
            <img class="logo" src="../View/img/home/ALL4SPORT.png" alt="logo ALL4SPORT" height=50px>
            <a class="nav" href="#">Home</a>
            <a class="nav" href="../Controller/Produits/produits_controller.php">Shop</a>
            <a class="nav" href="#">Contact Us</a>
            <a class="nav" href="../Controller/Cart/cart_controller.php">Cart</a>

            <?php if (!isset($_SESSION['pseudo'])): ?>
                <a class='nav login' href='../Controller/Auth/login_controller.php'>login</a>
                <a class='nav register' href='../Controller/Auth/register_controller.php'>register</a>
            <?php else: ?>
                <div class='container-menu'>
                <img src='../View/img/home/user.png' class='user-pic' onclick='toggleMenu()'>
                    <div class='sub-menu-wrap' id='subMenu'> 
                        <div class='sub-menu'>
                            <div class='user-info'>
                                <h2><?= $_SESSION['pseudo']?></h2>
                            </div>
                            <hr>

                            <a href='#' class='sub-menu-link'>
                                <img src='../View/img/home/profile.png'>
                                <p> Edit Profile </p>
                                <span><span>
                            </a>

                            <a href='#' class='sub-menu-link'>
                                <img src='../View/img/home/setting.png'>
                                <p> Settings </p>
                                <span><span>
                            </a>

                            <a href='#' class='sub-menu-link'>
                                <img src='../View/img/home/help.png'>
                                <p> Help </p>
                                <span><span>
                            </a>

                            <a href='../Controller/Auth/logout_controller.php' class='sub-menu-link'>
                                <img src='../View/img/home/logout.png'>
                                <p> LogOut </p>
                                <span><span>
                            </a> 
                        </div>
                    </div>
                </div>
            <?php endif ?>

            <script>
                let subMenu = document.getElementById("subMenu");

                function toggleMenu() {
                    subMenu.classList.toggle("open-menu");
                }
            </script>
        </div>
    </nav>
</header>

