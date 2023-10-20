<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz_Midterm_By:Neil Moncada</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "HunDIN1451", sans-serif;
        }
        @font-face {
        font-family: 'HunDIN1451';
        src: url('index/HunDIN1451.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        }
        body {
        background-image: url('bg/bg_collection1.gif');
        background-repeat: repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size: cover;
        }
        .container {
            max-width: 1300px;
            width: 100%;
            margin: 0 auto;
        }
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }
        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 60px;
        }
        .nav_logo {
            padding: 10px 0;
        }
        .menu_items {
            display: flex;
            list-style: none;
            gap: 20px;
        }
        h2 {
            margin-top: 50px;
        }
        a {
            color: #fff;
            text-shadow: 2px 2px 4px #000000;
            text-decoration: none;
        }
        li {
            color: #fff;
            text-shadow: 2px 2px 4px #000000;
            text-decoration: none;
        }
        /* Hero */
        .hero {
            position: relative;
            min-height: 100vh;
            width: 100%;
            background: url(index/bg-dot.png), url(index/bg-dot.png), url(index/bg-round.png), url(index/bg-tree.png);
            background-position: 10px 10px, bottom 215px right 10px, left 55% top -1%, left 45% bottom -1px;
            background-repeat: no-repeat;
        }
        .glow-text {
        text-shadow: 0 0 10px #e60073, 0 0 20px #e60073, 0 0 30px #e60073;
        }
        .curveImg {
            position: absolute;
            bottom: 0;
            width: 100%;
            pointer-events: none;
        }
        .hero .row {
            display: flex;
            align-items: center;
            min-height: 100vh;
            height: 100%;
            width: 100%;
            padding: 0 60px;
            gap: 30px;
            justify-content: space between;
        }
        .hero .row h2, .hero .row li, .hero .row p {
            color: #fff;
            text-shadow: 2px 2px 3px #000000;
        }
        .hero .row h2 {
            font-size: 36px;
            margin-bottom: 16px;
            text-shadow: 2px 2px 3px #000000;
        }
        .hero .column {
            width: 50%;
        }
        .buttons {
            display: flex;
            margin-top: 25px;
            gap: 10px;
        }
        .btn {
            padding: 14px 26px;
            background: transparent;
            border-radius: 50px;
            border: 2px solid #fff;
            cursor: pointer;
            transition: all 0.8s ease;
        }
        .btn:hover {
            background-color: #fff;
            color: #333;
        }
        .btn:last-child {
            border: 2px solid #fff;
            background: transparent;
            color: #fff;
        }
        .btn:last-child:hover {
            background-color: #fff;
            color: #333;
        }
        .hero_img {
            width: 100%;
            z-index: 10;
            position: relative;
        }
        #menu_toggle {
            display: none;
        }
        @media (width < 860px) {
            #menu_toggle {
                display: block;
            }
            .nav {
                padding: 0 20px;
                background-color: #fff;
            }
            .menu_items {
                position: fixed;
                top: 0;
                width: 260px;
                background-color: #fff;
                height: 100%;
                left: -100%;
                padding: 50px 30px 30px;
                flex-direction: column;
                transition: all 0.5s ease;
            }
            .showMenu .menu_items {
                left: 0;
            }
            a {
                color: #333;
                text-shadow: 0.2px 0.2px 0.4px #000000;
            }
            #menu_toggle {
                width: 20px;
                cursor: pointer;
            }
            .menu_items #menu_toggle {
                position: absolute;
                top: 20px;
                right: 20px;
            }
            .hero {
                padding-top: 130px;
            }
            .hero .row {
                flex-direction: column;
                padding: 0 20px;
                justify-content: center;
            }
            .hero .row .column {
                width: 100%;
            }
        }
        @media (width < 600px) {
            .hero {
                padding-top: 80px;
            }
            .hero .row h2 {
                font-size: 26px;
            }
            .buttons {
                justify-content: center;
            }
            .btn {
                padding: 10px 16px;
            }
        }
            .centered-text {
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
        }
            footer {
            background-color: #fc5d8b;
            text-align: center;
            padding: 30px 0;
        }

            .social-media {
            list-style: none;
            padding: 0;
        }

            .social-media li {
             display: inline;
             margin: 0 30px;
        }

            .social-media a {
             color: #fff;
             text-decoration: none;
             transition: color 0.3s;
        }

            .social-media a:hover {
             color: #00ffff;
        }

            .container {
             text-align: center;
}
    </style>
</head>
<body>
    <main>
<header>
    <br><br><br><br><br><br><br><br>
<div class="">
    <marquee behavior="scroll" direction="left" scrollamount="15" scrolldelay="1" style="color: white; font-size: 70px; text-shadow: 0 0 40px #e60073;">
        <?php
        if (isset($_GET['username'])) {
            $username = urldecode($_GET['username']);
            echo "Welcome User: " . $username;
        } else {
            echo "Welcome User: Anonymous";
        }
        ?>
    </marquee>
</div>
</header>
            <div class="bg-image"></div>
            <nav class="nav container">
            </nav>
        </header>
        <section class="hero">
            <div class="row container">
                <div class="column">
                    <h2 class="nav_logo"><a href="index" class="glow-text">Mind Melter: Challenge Your Wits!</a></h2>
                    <p><strong>A riddle a day keeps boredom away</p></strong>
                    <div class="buttons">
                        <a href="login.php" class="btn">Username</a>
                        <a href="about.php" class="btn">About me</a>
                        <a href="quiz_difficulty.php" class="btn">Game Start</a>
                    </div>
                </div>
                <div class="column">
                    <img src="index/bebeko.png" alt="heroImg" class="hero_img" />
                </div>
            </div>
        </section>
<footer>
    <div class="container">
        <ul class="social-media">
            <li><a href="https://www.facebook.com/MoncadaNeilChristian">Facebook</a></li>
            <li><a href="https://instagram.com/ayano_kouj1">Instagram</a></li>
            <li><a href="https://www.youtube.com/user/shiodomemiuna2460">YouTube</a></li>
            <li><a href="https://www.tiktok.com/@kiyotaaka3">TikTok</a></li>
            <li><a href="https://github.com/Ayanokouj1-kun">GitHub</a></li>
        </ul>
    </div>
</footer>
    </main>
    <script>
        const header = document.querySelector("header");
        const menuToggler = document.querySelectorAll("#menu_toggle");

        menuToggler.forEach(toggler => {
            toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
        });
    </script>
</body>
</html>
