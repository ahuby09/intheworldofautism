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
</div>

<div class="nav-options">
    <a href="#" onclick="showMusicOptions()">Music</a>
    <a href="#" onclick="showHolidayOptions()">Holiday</a>
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
        '<span class="inline-icon icon" onclick="speak(\'I want to listen to Rock\')"><i class="fa-regular fa-hand-back-fist"></i></span><span class="inline-icon icon" onclick="speak(\'I want to listen to guitar\')"><i class="fa-solid fa-guitar"></i></span>';
    }
    
    function showHolidayOptions() {
        document.getElementById('content-container').innerHTML = '<span class="inline-icon icon" onclick="speak(\'Merry Christmas\')"><i class="fa-solid fa-gift"></i></span><span class="inline-icon icon" onclick="speak(\'Happy Easter\')"><i class="fa-solid fa-egg"></i></span>';
    }
</script>
</body>
</html>
