<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soundboard</title>
    
    <link href="../css/app.css" rel="stylesheet">
    <style>
        .sound-icons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 20px;
        }

        .sound-icons .icon {
            font-size: 3rem;
            margin: 10px;
            cursor: pointer;
        }
        
        .nav-options {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .nav-options a {
            margin-right: 20px;
            text-decoration: none;
            color: black;
            cursor: pointer;
        }
        
        .content-container {
            text-align: center;
        }

        /* Style for inline icons */
        .inline-icon {
            display: inline-block;
            margin-right: 10px;
            font-size: 2rem;
        }
    </style>
</head>
<body>
@include('nav')
<div class="sound-icons">
    <div class="icon" onclick="speak('I want food')"><i class="fas fa-utensils"></i></div>
    <div class="icon" onclick="speak('I want a drink')"><i class="fas fa-cocktail"></i></div>
    <div class="icon" onclick="speak('I want to watch TV')"><i class="fas fa-tv"></i></div>
    <div class="icon" onclick="speak('I need my nappy changed')"><i class="fas fa-baby"></i></div>
    <div class="icon" onclick="speak('I need to go to the toilet')"><i class="fas fa-toilet"></i></div>
    <div class="icon" onclick="speak('I need help')"><i class="fas fa-hands-helping"></i></div>
    <div class="icon" onclick="speak('I want to listen to music')"><i class="fa-solid fa-music"></i></div>
    <div class="icon" onclick="speak('please')"> <i class="fa-solid fa-hands-praying"></i></div>
    <div class="icon" onclick="speak('Thank you')"><i class="fa-solid fa-person-praying"></i></div>
    <div class="icon" onclick="speak('Today\'s date is: ' + new Date().toDateString())"><i class="fas fa-calendar-alt"></i></div>
</div>

<div class="nav-options">
    <a href="#" onclick="showMusicOptions()">Music</a>
    <a href="#" onclick="showHolidayOptions()">Holiday</a>
    <a href="#" onclick="showActionOptions()">Action</a>
    <a href="#" onclick="showPlayOptions()">Play</a>
</div>

<div class="content-container" id="content-container">
    <!-- Content will be dynamically changed here -->
</div>

<script>
    function speak(text) {
        var utterance = new SpeechSynthesisUtterance(text);
        speechSynthesis.speak(utterance);
    }
    
    function showMusicOptions() {
        document.getElementById('content-container').innerHTML = 
        '<span class="inline-icon icon" onclick="speak(\'I want to listen to Rock\')"><i class="fa-regular fa-hand-back-fist"></i></span><span class="inline-icon icon" onclick="speak(\'I want to listen to guitar\')"><i class="fa-solid fa-guitar"></i></span><span class="inline-icon icon" onclick="speak(\'Merry Christmas\')"><i class="fa-solid fa-gift"></i></span>';
    }
    
    function showHolidayOptions() {
        document.getElementById('content-container').innerHTML = 
        '<span class="inline-icon icon" onclick="speak(\'Merry Christmas\')"><i class="fa-solid fa-gift"></i></span><span class="inline-icon icon" onclick="speak(\'Happy Easter\')"><i class="fa-solid fa-egg"></i></span><span class="inline-icon icon" onclick="speak(\'Happy Valentines\')"><i class="fa-regular fa-heart"></i></span>';
    }
    function showActionOptions() {
        document.getElementById('content-container').innerHTML = 
        '<span class="inline-icon icon" onclick="speak(\'Can i have a kiss\')"><i class="fa-regular fa-face-kiss"></i></span><span class="inline-icon icon" onclick="speak(\'Stop\')"><i class="fa-solid fa-hand"></i></span><span class="inline-icon icon" onclick="speak(\'On\')"><i class="fa-solid fa-toggle-on"></i></span><span class="inline-icon icon" onclick="speak(\'Off\')"><i class="fa-solid fa-toggle-off"></i></span><span class="inline-icon icon" onclick="speak(\'Open\')"><i class="fa-solid fa-door-open"></i></span><span class="inline-icon icon" onclick="speak(\'Close\')"><i class="fa-solid fa-door-closed"></i></span>';
    }
    function showPlayOptions() {
        document.getElementById('content-container').innerHTML = 
        '<span class="inline-icon icon" onclick="speak(\'Can i Play a Game\')"><i class="fa-solid fa-gamepad"></i></span><span class="inline-icon icon" onclick="speak(\'Can i play with sensory toys\')"><i class="fa-solid fa-scale-balanced"></i></span><span class="inline-icon icon" onclick="speak(\'can i play with a toys\')"><i class="fa-solid fa-car"></i></span><span class="inline-icon icon" onclick="speak(\'Can i go to the park\')"><i class="fa-solid fa-tree"></i></span>';
    }
</script>
</body>
</html>
