$(document).ready(function() {
    //Partie keep the music playing
    $("a.song").click(function(e) {
        e.preventDefault();
        var audio = $('#audio')[0]
        audio.src =  $(this).attr('data-file')
        audio.play();
    })
    
    $(document).pjax('a', '#pjax-container')

    
    //Partie recher
    $('#search').submit(function (e) {
        e.preventDefault();
        if ($.support.pjax)
            $.pjax({url: "/search/" + e.target.elements[0].value, container: '#pjax-container'});
        else
            window.location.href = "/search/" + e.target.elements[0].value;
    });

    $(document).on('submit', 'form[data-pjax]', function(event) {
        $.pjax.submit(event, '#pjax-container')
    })


    //Partie Overview
    $("#overviewform button").hide();

    $("#overview").on('input', function (e) {
        $("#overviewform button").fadeIn();
    });

    $("#overviewform").submit(function(e) {
        e.target.elements['overview'].value = $("#overview").html();
    });

    $("#overview").keydown(function(e) {
        // trap the return key being pressed
        if (e.keyCode === 13) {
            // insert 2 br tags (if only one br tag is inserted the cursor won't go to the next line)
            document.execCommand('insertHTML', false, '<br><br>');
            // prevent the default behaviour of return key pressed
            return false;
        }
    });


    //Partie Player
    let play_btn = document.querySelector("#play");
    let range = document.querySelector("#timeRange");
    let total_time = 0;
    let currentTime = 0;
    let isPlaying = false;


    let song = document.querySelector("#audio");
    window.onload = playSong;

    function playSong() {
        
        play_btn.addEventListener('click', function() {
            if (!isPlaying) {
                song.play();
                isPlaying = true;
                total_time = song.duration;
                range.max = total_time;
                play_img.src = "/images/icons/pause_button.png";
            } else {
                song.pause();
                isPlaying = false;
                play_img.src = "/images/icons/play_button.png";
        }

        song.addEventListener('ended', function() {
            song.currentTime = 0
            song.pause();
            isPlaying = false;
            range.value = 0;
            play_img.src = "/images/icons/pause_button.png";
        })
            
        song.addEventListener('timeupdate', function() {
            range.value = song.currentTime;
        })
            
        range.addEventListener('change',function() {
            song.currentTime = range.value;
        })
        

    });
       
    
}
})


/*
function volume(amount){
    var balAudio = document.getElementsByTagName('audio')[0];
    balAudio.volume = amount;
    if(balAudio.volume == 0){
        document.getElementById('mute-icon').className = 'fas fa-volume-mute';
    } else {
      document.getElementById('mute-icon').className = 'fas fa-volume-up';
    }
*/