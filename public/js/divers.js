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
})