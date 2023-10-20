<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz_Midterm_By:Neil Moncada</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
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
        background-image: url('bg/bg_master.gif');
        background-repeat: repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size: cover;
        color: #fff;
        text-shadow: 0 0 10px #f76857, 0 0 20px #f76857;
    }
    @keyframes fadeIn {
    0% {
        opacity: 0;
        text-shadow: 0 0 10px #f76857, 0 0 50px #f76857, 0 0 30px #f76857;
    }
    100% {
        opacity: 1;
        text-shadow: 0 0 20px #f76857, 0 0 0px #f76857, 0 0 50px #f76857;
       }
    }
      h1.animated-title {
      animation: fadeIn 6s ease-in-out infinite;
    }
    .form-group {
        background: rgba(0, 0, 0, 0.4);
        padding: 20px;
        margin: 20px 0;
        border-radius: 5px;
    }
    .form-check-label {
        color: #fff;
    }
    .btn {
        padding: 14px 26px;
        background: #fff;
        border-radius: 50px;
        border: none;
        cursor: pointer;
        transition: all 0.8s ease;
        text-shadow: 0 0 10px #f76857, 0 0 20px #f76857, 0 0 30px #f76857;
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
        .hero {
            position: relative;
            min-height: 100vh;
            width: 100%;
            background: url(index/bg-dot.png), url(index/bg-dot.png), url(index/bg-round.png), url(index/bg-tree.png);
            background-position: 10px 10px, bottom 215px right 10px, left 55% top -1%, left 45% bottom -1px;
            background-repeat: no-repeat;
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
                .hero_img {
            width: 100%;
            z-index: 10;
            position: relative;
        }
        #menu_toggle {
            display: none;
        }

        /* Responsive */
        @media (width < 860px) {
            #menu_toggle {
                display: block;
            }
            .nav {
                padding: 0 20px;
                background-color: #fff;
            }
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
            .container {
                color: #f76857;
}
</style>
</head>
    <body>
 <nav>
    <div><br>
    <a class="nav-link" href="index.php" style="color: #fff !important;">Back to Homepage</a>
   </div></br>
</nav>
  <header>
     <div class="bg-image"></div>
        </header>
<section class="hero">
<div class="container">
    <br><h1 class="animated-title">Mind Melter: Challenge Your Wits!</h1></br>
     <marquee behavior="scroll" direction="left" scrollamount="15" scrolldelay="1"><h1>'Master' is commendable</h1></marquee>
        <form method="POST">
    <!-- Question 1 -->
    <div class="form-group question">
        <label for="question"> <strong>Riddle 1:</strong><br>
            <h5> I am taken from a mine and shut up in a wooden case from which I am never released, and yet I am used by almost every person. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="gold" name="answer1" value="gold">
            <label class="form-check-label text-blue" for="gold">Gold</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="air" name="answer1" value="air">
            <label class="form-check-label text-orange" for="air">Air</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="water" name="answer1" value="water">
            <label class="form-check-label text-red" for="water">Water</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="fire" name="answer1" value="fire">
            <label class="form-check-label text-green" for="fire">Fire</label>
           </div>
         </div>
      </div>
    </div>
    <!-- Question 2 -->
        <div class="form-group question">
        <label for="question"> <strong>Riddle 2:</strong><br>
            <h5> I speak without a mouth and hear without ears. I have no body, but I come alive with the wind. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="echo" name="answer2" value="echo">
            <label class="form-check-label text-blue" for="echo">Echo</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="music" name="answer2" value="music">
            <label class="form-check-label text-orange" for= "music">Music</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="ghost" name="answer2" value="ghost">
            <label class="form-check-label text-red" for="ghost">Ghost</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="whisper" name="answer2" value="whisper">
            <label class="form-check-label text-green" for="whisper">Whisper</label>
           </div>
         </div>
      </div>
    </div>
    <!-- Question 3 -->
    <div class="form-group question">
    <label for="question"> <strong>Riddle 3:</strong><br>
            <h5> I'm not alive, but I can grow; I don't have lungs, but I need air; I don't have a mouth, but water kills me. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="fire2" name="answer3" value="fire2">
            <label class="form-check-label text-blue" for="fire2">Fire</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="tree" name="answer3" value="tree">
            <label class="form-check-label text-orange" for="tree">Tree</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="rock" name="answer3" value="rock">
            <label class="form-check-label text-red" for="rock">Rock</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="ice" name="answer3" value="ice">
            <label class="form-check-label text-green" for="ice">Ice</label>
           </div>
         </div>
      </div>
    </div>
    <!-- Question 4 -->
    <div class="form-group question">
    <label for="question"> <strong>Riddle 4:</strong><br>
            <h5> I am full of keys but open no locks, I have space but no room, you can enter but no go inside. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="piano" name="answer4" value="piano">
            <label class="form-check-label text-blue" for="piano">Piano</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="internet" name="answer4" value="internet">
            <label class="form-check-label text-orange" for="internet">Internet</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="typewriter" name="answer4" value="typewriter">
            <label class="form-check-label text-red" for="typewriter">typewriter</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="calculator" name="answer4" value="calculator">
            <label class="form-check-label text-green" for="calculator">Calculator</label>
           </div>
         </div>
      </div>
    </div>
    <!-- Question 5 -->
    <div class="form-group question">
    <label for="question"> <strong>Riddle 5:</strong><br>
            <h5> I have keys but can't open locks. I can sing but never talk. I can scale a fish but can't swim. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="bird" name="answer5" value="bird">
            <label class="form-check-label text-blue" for="bird">A bird</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="piano2" name="answer5" value="piano2">
            <label class="form-check-label text-orange" for="piano2">A piano</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="mountain" name="answer5" value="mountain">
            <label class="form-check-label text-red" for="mauntain">A mountain</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="bicycle" name="answer5" value="bicycle">
            <label class="form-check-label text-green" for="bicycle">A bicycle</label>
           </div>
         </div>
      </div>
    </div>
    <!-- Question 6 -->
    <div class="form-group question">
    <label for="question"> <strong>Riddle 6:</strong><br>
            <h5> I'm a word of letters three, add two and fewer there will be. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="few" name="answer6" value="few">
            <label class="form-check-label text-blue" for="few">Few</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="the" name="answer6" value="the">
            <label class="form-check-label text-orange" for="the">The</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="word" name="answer6" value="word">
            <label class="form-check-label text-red" for="word">Word</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="five" name="answer6" value="five">
            <label class="form-check-label text-green" for="five">Five</label>
           </div>
         </div>
      </div>
    </div>
     <!-- Question 7 -->
     <div class="form-group question">
    <label for="question"> <strong>Riddle 7:</strong><br>
            <h5> I can travel around the world while staying in a corner. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="globe" name="answer7" value="globe">
            <label class="form-check-label text-blue" for="globe">A globe</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="postage" name="answer7" value="postage">
            <label class="form-check-label text-orange" for="postage">A postage stamp</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="airplane" name="answer7" value="airplane">
            <label class="form-check-label text-red" for="airplane">An airplane</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="postcard" name="answer7" value="postcard">
            <label class="form-check-label text-green" for="postcard">A postcard</label>
           </div>
         </div>
      </div>
    </div>
      <!-- Question 8 -->
      <div class="form-group question">
    <label for="question"> <strong>Riddle 8:</strong><br>
            <h5> I can fly without wings, cry without eyes. Whenever I go, darkness follows me. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="cloud" name="answer8" value="cloud">
            <label class="form-check-label text-blue" for="cloud">A cloud</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="wind" name="answer8" value="wind">
            <label class="form-check-label text-orange" for="wind">Wind</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="owl" name="answer8" value="owl">
            <label class="form-check-label text-red" for="owl">An owl</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="night" name="answer8" value="night">
            <label class="form-check-label text-green" for="night">Night</label>
           </div>
         </div>
      </div>
    </div>
      <!-- Question 9 -->
      <div class="form-group question">
    <label for="question"> <strong>Riddle 9:</strong><br>
            <h5> The more you take, the more you leave behind. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="footsteps" name="answer9" value="footsteps">
            <label class="form-check-label text-blue" for="footsteps">Footsteps</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="money" name="answer9" value="money">
            <label class="form-check-label text-orange" for="money">Money</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="secrets" name="answer9" value="secrets">
            <label class="form-check-label text-red" for="secrets">Secrets</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="photos" name="answer9" value="photos">
            <label class="form-check-label text-green" for="photos">Photos</label>
           </div>
         </div>
      </div>
    </div>
      <!-- Question 10 -->
      <div class="form-group question">
    <label for="question"> <strong>Riddle 10:</strong><br>
            <h5> I'm not alive, but I can die. I don't have lungs, but I need air to survive. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="ghost2" name="answer10" value="ghost2">
            <label class="form-check-label text-blue" for="ghost2">A ghost</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="book" name="answer10" value="book">
            <label class="form-check-label text-orange" for="book">A book</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="car" name="answer10" value="car">
            <label class="form-check-label text-red" for="car">A car</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="computer" name="answer10" value="computer">
            <label class="form-check-label text-green" for="computer">A computer</label>
           </div>
         </div>
      </div>
    </div>
     <!-- Question 11 -->
     <div class="form-group question">
    <label for="question"> <strong>Riddle 11:</strong><br>
            <h5> I can be cracked, made, told, and played. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="joke" name="answer11" value="joke">
            <label class="form-check-label text-blue" for="joke">A joke</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="egg" name="answer11" value="egg">
            <label class="form-check-label text-orange" for="egg">An egg</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="song" name="answer11" value="song">
            <label class="form-check-label text-red" for="song">A song</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="puzzle" name="answer11" value="puzzle">
            <label class="form-check-label text-green" for="puzzle">A puzzle</label>
           </div>
         </div>
      </div>
    </div>
       <!-- Question 12 -->
       <div class="form-group question">
    <label for="question"> <strong>Riddle 12:</strong><br>
            <h5> I'm not a bird, but I can fly without wings im not a plane, but I can travel great distances. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="time" name="answer12" value="time">
            <label class="form-check-label text-blue" for="time">Time</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="plane2" name="answer12" value="plane2">
            <label class="form-check-label text-orange" for="plane2">A plane</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="birds" name="answer12" value="birds">
            <label class="form-check-label text-red" for="birds">A birds</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="eye" name="answer12" value="eye">
            <label class="form-check-label text-green" for="eye">An eye</label>
           </div>
         </div>
      </div>
    </div>
      <!-- Question 13 -->
      <div class="form-group question">
    <label for="question"> <strong>Riddle 13:</strong><br>
            <h5> I'm a ball that can be rolled but never bounced or thrown. What am I?</br></h5></label>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="globe2" name="answer13" value="globe2">
            <label class="form-check-label text-blue" for="globe2">A globe</label>
        </div>
        </div>
        <div class="col-md-6">    
        <div class="form-check">
            <input type="radio" class="form-check-input" id="coin" name="answer13" value="coin">
            <label class="form-check-label text-orange" for="coin">A coin</label>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="eyeball" name="answer13" value="eyeball">
            <label class="form-check-label text-red" for="eyeball">An eyeball</label>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-check">
            <input type="radio" class="form-check-input" id="fishball" name="answer13" value="fishball">
            <label class="form-check-label text-green" for="fishball">A fishball</label>
           </div>
         </div>
      </div>
    </div>
<!-- Question 14 -->
<div class="form-group question">
    <label for="question">
        <strong>Riddle 14:</strong><br>
        <h5>I'm tall when I'm young, and short when I'm old. What am I?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="candle" name="answer14" value="candle">
                <label class="form-check-label text-blue" for="candle">A candle</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="book2" name="answer14" value="book2">
                <label class="form-check-label text-orange" for="book2">A book</label>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="flower" name="answer14" value="flower">
                <label class="form-check-label text-red" for="flower">A flower</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="rock2" name="answer14" value="rock2">
                <label class="form-check-label text-green" for="rock2">A rock</label>
            </div>
        </div>
    </div>
 </div>
<!-- Question 15 -->
<div class="form-group question">
    <label for="question">
        <strong>Riddle 15:</strong><br>
        <h5>You see a boat filled with people. It has not sunk, but when you look again you don’t see a single person on the boat. Why?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="magic" name="answer15" value="magic">
                <label class="form-check-label text-blue" for="magic">It's magic!</label>
            </div>
        </div>
        <div a class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="dive" name="answer15" value="dive">
                <label class="form-check-label text-orange" for="dive">They all went for a dive.</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="invisible" name="answer15" value="invisible">
                <label class="form-check-label text-red" for="invisible">They turned invisible.</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="fog" name="answer15" value="fog">
                <label class="form-check-label text-green" for="fog">The boat is in the fog.</label>
            </div>
        </div>
    </div>
</div>
<!-- Question 16 -->
<div class="form-group question">
    <label for="question">
        <strong>Riddle 16:</strong><br>
        <h5> What has keys but can't open locks?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="piano3" name="answer16" value="piano3">
                <label class="form-check-label text-blue" for="piano3">A piano</label>
            </div>
        </div>
        <div a class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="keyboard2" name="answer16" value="keyboard2">
                <label class="form-check-label text-orange" for="keyboard2">A keyboard</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="computer2" name="answer16" value="computer2">
                <label class="form-check-label text-red" for="computer2">A computer</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="treasure" name="answer16" value="treasure">
                <label class="form-check-label text-green" for="treasure">A treasure chest</label>
            </div>
        </div>
    </div>
</div>
<!-- Question 17 -->
<div class="form-group question">
    <label for="question">
        <strong>Riddle 17:</strong><br>
        <h5>What comes once in a minute, twice in a moment, but never in a thousand years?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="letterm" name="answer17" value="letterm">
                <label class="form-check-label text-blue" for="letterm">The letter 'M'</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="butterfly" name="answer17" value="butterfly">
                <label class="form-check-label text-orange" for="butterfly">A butterfly</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="sunrise" name="answer17" value="sunrise">
                <label class="form-check-label text-red" for="sunrise">The sunrise</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="age1" name="answer17" value="age1">
                <label class="form-check-label text-green" for="age1">Your age</label>
            </div>
        </div>
    </div>
</div>
<!-- Question 18 -->
<div class="form-group question">
    <label for="question">
        <strong>Riddle 18:</strong><br>
        <h5>What month of the year has 28 days?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="january" name="answer18" value="january">
                <label class="form-check-label text-blue" for="january">January</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="february" name="answer18" value="february">
                <label class="form-check-label text-orange" for="february">February</label>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="april" name="answer18" value="april">
                    <label class="form-check-label text-red" for="april">April</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="all" name="answer18" value="all">
                    <label class="form-check-label text-green" for="all">All of them</label>
            </div>
        </div>
    </div>
</div>
<!-- Question 19 -->
<div class="form-group question">
    <label for="question">
        <strong>Riddle 19:</strong><br>
        <h5>What has to be broken before you can use it?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="box" name="answer19" value="box">
                <label class="form-check-label text-blue" for="box">A box</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="egg2" name="answer19" value="egg2">
                <label class="form-check-label text-orange" for="egg2">An egg</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="key" name="answer19" value="key">
                <label class="form-check-label text-red" for="key">A key</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="phone" name="answer19" value="phone">
                <label class="form-check-label text-green" for="phone">A phone</label>
            </div>
        </div>
    </div>
</div>
<!-- Question 20 -->
<div class="form-group question">
    <label for "question">
        <strong>Riddle 20:</strong><br>
        <h5>What is full of holes but still holds water?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="bucket" name="answer20" value="bucket">
                <label class="form-check-label text-blue" for="bucket">A bucket</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="sieve" name="answer20" value="sieve">
                <label class="form-check-label text-orange" for="sieve">A sieve</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="sponge" name="answer20" value="sponge">
                <label class="form-check-label text-red" for="sponge">A sponge</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="glass" name="answer20" value="glass">
                <label class="form-check-label text-green" for="glass">A glass</label>
            </div>
        </div>
    </div>
</div>
<!-- Question 21 -->
<div class="form-group question">
    <label for "question">
        <strong>Riddle 21:</strong><br>
        <h5>What question can you never answer yes to?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="areyouawake" name="answer21" value="areyouawake">
                <label class="form-check-label text-blue" for="areyouawake">Are you awake?</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="whatdayisit" name="answer21" value="whatdayisit">
                <label class="form-check-label text-orange" for="whatdayisit">What day is it?</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="areyousleepy" name="answer21" value="areyousleepy">
                <label class="form-check-label text-red" for="areyousleepy">Are you sleepy?</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="areyouhungry" name="answer21" value="areyouhungry">
                <label class="form-check-label text-green" for="areyouhungry">Are you hungry?</label>
            </div>
        </div>
    </div>
</div>
<!-- Question 22 -->
<div class="form-group question">
    <label for "question">
        <strong>Riddle 22:</strong><br>
        <h5>What is always in front of you but can't be seen?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="thefuture" name="answer22" value="thefuture">
                <label class="form-check-label text-blue" for="thefuture">The future</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="myshadow" name="answer22" value="myshadow">
                <label class="form-check-label text-orange" for="myshadow">My shadow</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="myreflection" name="answer22" value="myreflection">
                <label class="form-check-label text-red" for="myreflection">My reflection</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="theanswer" name="answer22" value="theanswer">
                <label class="form-check-label text-green" for="theanswer">The answer</label>
            </div>
        </div>
    </div>
</div>
<!-- Question 23 -->
<div class="form-group question">
    <label for "question">
        <strong>Riddle 23:</strong><br>
        <h5>What can you break, even if you never pick it up or touch it?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="apromise" name="answer23" value="apromise">
                <label class="form-check-label text-blue" for="apromise">A promise</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="glass2" name="answer23" value="glass2">
                <label class="form-check-label text-orange" for="glass2">Glass</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="rock3" name="answer23" value="rock3">
                <label class="form-check-label text-red" for="rock3">Rock</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="light" name="answer23" value="light">
                <label class="form-check-label text-green" for="light">Light</label>
            </div>
        </div>
    </div>
</div>
<!-- Question 24 -->
<div class="form-group question">
    <label for "question">
        <strong>Riddle 24:</strong><br>
        <h5>What goes up but never comes down?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="age" name="answer24" value="age">
                <label class="form-check-label text-blue" for="age">Your age</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="rocket" name="answer24" value="rocket">
                <label class="form-check-label text-orange" for="rocket">A rocket</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="balloon" name="answer24" value="balloon">
                <label class="form-check-label text-red" for="balloon">A balloon</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="sun" name="answer24" value="sun">
                <label class="form-check-label text-green" for="sun">The sun</label>
            </div>
        </div>
    </div>
</div>
<!-- Question 25 -->
<div class="form-group question">
    <label for="question">
        <strong>Riddle 25:</strong><br>
        <h5>What can you keep after giving to someone?</h5>
    </label>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="yword" name="answer25" value="yword">
                <label class="form-check-label text-blue" for="yword">Your word</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="money2" name="answer25" value="money2">
                <label class="form-check-label text-orange" for="money2">Money</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="cake" name="answer25" value="cake">
                <label class="form-check-label text-red" for="cake">A cake</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="gift" name="answer25" value="gift">
                <label class="form-check-label text-green" for="gift">A gift</label>
            </div>
        </div>
    </div>
</div>
    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $selectedAnswer1 = $_POST['answer1'];
            $correctAnswer1 = 'air';

            $selectedAnswer2 = $_POST['answer2'];
            $correctAnswer2 = 'echo';

            $selectedAnswer3 = $_POST['answer3'];
            $correctAnswer3 = 'ice';

            $selectedAnswer4 = $_POST['answer4'];
            $correctAnswer4 = 'internet';

            $selectedAnswer5 = $_POST['answer5'];
            $correctAnswer5 = 'piano2';

            $selectedAnswer6 = $_POST['answer6'];
            $correctAnswer6 = 'the';

            $selectedAnswer7 = $_POST['answer7'];
            $correctAnswer7 = 'postage';

            $selectedAnswer8 = $_POST['answer8'];
            $correctAnswer8 = 'night';

            $selectedAnswer9 = $_POST['answer9'];
            $correctAnswer9 = 'footsteps';

            $selectedAnswer10 = $_POST['answer10'];
            $correctAnswer10 = 'computer';

            $selectedAnswer11 = $_POST['answer11'];
            $correctAnswer11 = 'joke';

            $selectedAnswer12 = $_POST['answer12'];
            $correctAnswer12 = 'time';

            $selectedAnswer13 = $_POST['answer13'];
            $correctAnswer13 = 'eyeball';
            
            $selectedAnswer14 = $_POST['answer14'];
            $correctAnswer14 = 'candle';

            $selectedAnswer15 = $_POST['answer15'];
            $correctAnswer15 = 'fog';

            $selectedAnswer16 = $_POST['answer16'];
            $correctAnswer16 = 'piano3';

            $selectedAnswer17 = $_POST['answer17'];
            $correctAnswer17 = 'letterm';

            $selectedAnswer18 = $_POST['answer18'];
            $correctAnswer18 = 'all';

            $selectedAnswer19 = $_POST['answer19'];
            $correctAnswer19 = 'egg2';

            $selectedAnswer20 = $_POST['answer20'];
            $correctAnswer20 = 'sponge';

            $selectedAnswer21 = $_POST['answer21'];
            $correctAnswer21 = 'areyousleepy';

            $selectedAnswer22 = $_POST['answer22'];
            $correctAnswer22 = 'thefuture';

            $selectedAnswer23 = $_POST['answer23'];
            $correctAnswer23 = 'apromise';

            $selectedAnswer24 = $_POST['answer24'];
            $correctAnswer24 = 'age';

            $selectedAnswer25 = $_POST['answer25'];
            $correctAnswer25 = 'yword';

            $score = 0;

            // Check the answers for each question and update the score
            if ($selectedAnswer1 === $correctAnswer1) {
                $score++;
            }
            if ($selectedAnswer2 === $correctAnswer2) {
                $score++;
            }
            if ($selectedAnswer3 === $correctAnswer3) {
                $score++;
            }
            if ($selectedAnswer4 === $correctAnswer4) {
                $score++;
            }
            if ($selectedAnswer5 === $correctAnswer5) {
                $score++;
            }
            if ($selectedAnswer6 === $correctAnswer6) {
                $score++;
            }
            if ($selectedAnswer7 === $correctAnswer7) {
                $score++;
            }
            if ($selectedAnswer8 === $correctAnswer8) {
                $score++;
            }
            if ($selectedAnswer9 === $correctAnswer9) {
                $score++;
            }
            if ($selectedAnswer10 === $correctAnswer10) {
                $score++;
            }
            if ($selectedAnswer11 === $correctAnswer11) {
                $score++;
            }
            if ($selectedAnswer12 === $correctAnswer12) {
                $score++;
            }
            if ($selectedAnswer13 === $correctAnswer13) {
                $score++;
            }
            if ($selectedAnswer14 === $correctAnswer14) {
                $score++;
            }
            if ($selectedAnswer15 === $correctAnswer15) {
                $score++;
            }
            if ($selectedAnswer16 === $correctAnswer16) {
                $score++;
            }
            if ($selectedAnswer17 === $correctAnswer17) {
                $score++;
            }
            if ($selectedAnswer18 === $correctAnswer18) {
                $score++;
            }
            if ($selectedAnswer19 === $correctAnswer19) {
                $score++;
            }
            if ($selectedAnswer20 === $correctAnswer20) {
                $score++;
            }
            if ($selectedAnswer21 === $correctAnswer21) {
                $score++;
            }
            if ($selectedAnswer22 === $correctAnswer22) {
                $score++;
            }
            if ($selectedAnswer23 === $correctAnswer23) {
                $score++;
            }
            if ($selectedAnswer24 === $correctAnswer24) {
                $score++;
            }
            if ($selectedAnswer25 === $correctAnswer25) {
                $score++;
            }
            echo '<div class="mt-4 alert ';
            if ($score == 25) {
            echo 'alert-success">';
            echo 'Congratulations! You perfected the exam! Your score is <b>' . $score . '</b> out of 25.';
            } elseif ($score >= 18) {
            echo 'alert-success">';
            echo 'Nice job! You passed the exam. Your score is <b>' . $score . '</b> out of 25.';
            } else {
            echo 'alert-danger">';
            echo 'Sorry, you failed the exam. Try again. Your score is <b>' . $score . '</b> out of 25.';
    }
            echo '</div>';
            echo 'Philosopher once said "Once a cheater is always a cheater."';
        }
        ?>
<div class="mt-5 p-5" style="background-image: url('neil.png'); background-size: cover; background-position: center; height: 500px; overflow: auto;">
  <!-- Your content here -->
</div>
    <!-- Include jQuery, Popper, and Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>