<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz_Midterm_By:Neil Moncada</title>
    <style>
        * {
            font-family: "HunDIN1451", sans-serif;
        }

        @font-face {
            font-family: 'HunDIN1451';
            src: url('index/HunDIN1451.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            background-image: url('bg/bg_collectiondiff.gif');
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
            margin-top: 100px;
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
            background: url(index/bg-dot.png);
            background-position: 10px 10px;
            background-repeat: no-repeat;
            }
             .glow-text {
             text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #00ffff;
                 text-align: center;
            }
             .glow-text2 {    
             text-shadow: 0 0 10px #f76857, 0 0 20px #f76857, 0 0 30px #f76857;
                 text-align: center;
            }
             .glow-text3 {
             text-shadow: 0 0 10px #e60073, 0 0 20px #e60073, 0 0 30px #e60073;
                 text-align: center;
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

        #menu_toggle {
            display: none;
        }

        @media screen and (max-width: 860px) {
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

        @media screen and (max-width: 600px) {
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

        .wrapper {
            height: 15vh;
            display: grid;
            place-items: center;
        }
        .typing-demo {
            width: 45ch;
            animation: typing 3s steps(22), blink .8s step-end infinite alternate;
            white-space: nowrap;
            overflow: hidden;
            border-right: 4px solid;
            font-size: 2em;
        }

        @keyframes typing {
            from {
                width: 0;
            }
        }

        @keyframes blink {
            60% {
                border-color: transparent;
            }
        }
    </style>
</head>
<body>
    <main>
        <header>
            <div class="bg-image"></div>
            <nav class="nav container">
            </nav>
        </header>
        <section class="hero">
            <div class="row container">
                <nav class="nav container">
                    <div class="wrapper">
                        <a class="typing-demo">
                            <h2 style="text-align: center; font-size: 70px; color: white;">| Select Difficulty |
                </h2></a><div style="display: flex; justify-content: center;">
        <a href="quiz_average.php" class="glow-text" style=" padding: 15px; margin: 5px; font-size: 50px;">Average</a>
        <a href="quiz_master.php" class="glow-text2" style="padding: 15px; margin: 5px; font-size: 50px;">Master</a>
        <a href="quiz_genius.php" class="glow-text3 bigger-text" style="padding: 15px; margin: 5px; font-size: 50px;">Genius</a>
    </div>
    </div>
                </nav>
            </div>
        </section>
    </main>
</body>
</html>
