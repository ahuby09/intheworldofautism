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
        }

        .sound-icons .icon {
            font-size: 3rem;
            margin: 10px;
            cursor: pointer;
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

<script>
    function speak(text) {
        var utterance = new SpeechSynthesisUtterance(text);
        speechSynthesis.speak(utterance);
    }
</script>
</body>
</html>
