<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>
    <link rel="stylesheet" href="../css/adminstyles.css">
    <script src="../scripts/main.js"></script>
    <script src="https://kit.fontawesome.com/2ce145b69d.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php"> <img src="../images/logo/logo.jpg" alt="Pals and Partner Cleaning"></a>
            </div>

            <!-- logged in user -->
            <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 1){ ?>
            <div class="links">
                <a href="index.php?page=findclients">Clients</a>
                <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && $_SESSION['role'] == "admin"){ ?>
                <a href="index.php?page=staff">Staff Details</a> <?php } ?>
                <a href="index.php?page=customersupport">Support</a>
                <a href="index.php?page=chat">Chat</a>
            </div>

            <div class="login">
                <?php echo '<b><a href="#">User: '. $_SESSION['userName'] .'</a></b>' ; ?>
                <!-- Logout button -->
                <form action="../public_html/index.php?page=login" method="POST">
                    <input type="submit" name="logout" value="Logout">
                </form>
                <?php
                    }
                    else{
                        echo '<a href="index.php?page=login">Login</a>';
                    }
                ?>
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