<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text-To-Speech</title>
    <link href="../css/app.css" rel="stylesheet">
    <style>
        /* Set minimum size for desktop */
        @media (min-width: 600px) {
            .text-to-speech-container {
                min-height: 600px; /* Minimum height for desktop */
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .text-to-speech-container textarea {
                resize: none;
                margin-bottom: 10px;
            }
            .text-to-speech-container .btn-container {
                display: flex;
                justify-content: center;
                margin-left: 20px;
            }
            .text-to-speech-container button {
                margin: 0 5px;
            }
        }
    </style>
</head>
<body>
@include('nav')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-to-speech-container">
            <textarea id="textToSpeak" class="form-control" rows="4" placeholder="Enter text here..."></textarea>
            <div class="btn-container">
                <button class="btn btn-primary" onclick="speak('voice1')">Voice 1</button>
                <button class="btn btn-primary" onclick="speak('voice2')">Voice 2</button>
                <button class="btn btn-primary" onclick="speak('voice3')">Voice 3</button>
            </div>
        </div>
    </div>
</div>

<script>
    function speak(voice) {
        var text = document.getElementById('textToSpeak').value;
        var utterance = new SpeechSynthesisUtterance(text);
        switch (voice) {
            case 'voice1':
                utterance.voice = speechSynthesis.getVoices().find(voice => voice.name === 'Google UK English Female');
                break;
            case 'voice2':
                utterance.voice = speechSynthesis.getVoices().find(voice => voice.name === 'Google UK English Male');
                break;
            case 'voice3':
                utterance.voice = speechSynthesis.getVoices().find(voice => voice.name === 'Google US English');
                break;
            default:
                utterance.voice = speechSynthesis.getVoices().find(voice => voice.name === 'Google UK English Female');
        }
        speechSynthesis.speak(utterance);
    }
</script>
</body>
</html>
