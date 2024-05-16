

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

document.getElementById('playButton').addEventListener('click', function() {
    var audioPlayer = document.getElementById('Musicplayer');
    if (audioPlayer.paused) {
        audioPlayer.play();
        document.getElementById('playButton').innerText = 'Stop Music';
    } else {
        audioPlayer.pause();
        document.getElementById('playButton').innerText = 'Play Music';
    }
});

