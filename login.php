<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz_Midterm_By:Neil Moncada</title>
    <style>
        body {
            font-family: "HunDIN1451", sans-serif;
            background-image: url('bg/bg_collection1.gif');
            background-repeat: repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* This will place the footer at the bottom */
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        @font-face {
            font-family: 'HunDIN1451';
            src: url('index/HunDIN1451.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .container {
            flex: 1; /* Take the remaining vertical space between header and footer */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 40px;
            max-width: 500px;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            color: #000;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-container input[type="text"] {
            width: 80%;
            padding: 8px;
            border: 1px solid;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.3);
            font-family: "HunDIN1451", sans-serif;
        }

        .login-container button {
            width: 40%;
            padding: 10px 26px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.3);
            color: #000;
            font-family: "HunDIN1451", sans-serif;
        }

        .login-container button:hover {
            background-color: #fff;
            color: #777;
        }

        footer {
            background-color: #fc5d8b;
            text-align: center;
            padding: 30px 0;
            width: 100%;
            color: #fff;
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
    </style>
</head>
<body>
<div class="container">
    <div class="login-container">
        <h2>Quiz.io Login</h2><br>
        <form action="index.php" method="get">
            <input type="text" name="username" placeholder="Username">
            <button type="submit">Login</button>
        </form>
    </div>
</div>
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
    <?php
    $username = $_POST['username'];
    header("Location: index.php?username=" . urlencode($username));
?>
</body>
</html>
