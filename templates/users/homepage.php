<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../css/styles.css">
    <script type="text/javascript" src="../css/main.js"></script>
    <script src="../scripts/main.js"></script>
    <script src="https://kit.fontawesome.com/2ce145b69d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
        <div class="nav-list">
                <a href="index.php">Home</a>
                <!-- logged in links -->
                <?php
                    if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                        
                    }
                ?>
                
                <a href="index.php?page=about">About</a>
                <a href="index.php?page=contact">Contact Us</a>

                <div class="nav-user">
                    <button class="userbtn" onclick="nav()">
                        <i class="fas fa-user"></i>
                    </button>
                    <div class="nav-user-content" id="nav-user-cont">
                            <?php
                                //if logged in
                                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                                    echo '<div class="userdet">'.'Hi '. $_SESSION['userName'] .'<a href="index.php?page=userprofile"> <i class="fas fa-user-edit"></i>
                                    </a></div>';
                            ?> 
                        <!-- logout -->
                        <form method="POST" action="index.php?page=login">
                            <input class ="login" type="submit" value="LogOut" name="logout">
                        </form>

                        <?php } //if user isn't logged in
                        else{
                            echo '<a class="loginlnk" href="index.php?page=login">Login</a>';
                            echo '<a class="loginlnk" href="index.php?page=register">Sign Up</a>';
                    }?>
                    </div>
                </div> 
            </div>
        </nav>
    </header>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <section class="footer_cont">
            <span class="footer_main">Pals and Partner Cleaning Services</span>
            <span>&#169 2022 Pals and Partner Cleaning Services | All Rights Reserved.</span>
        </section>
    </footer>
    <script src="../scripts/lightbox-plus-jquery.min.js"></script> <!-- file retrived from: https://lokeshdhakar.com/projects/lightbox2/ -->
    <script src="../scripts/alternative.js"></script>
</body>
</html>