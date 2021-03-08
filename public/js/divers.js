$(document).ready(function() {
    $("a.song").click(function(e) {
         e.preventDefault();
         var audio = $('#audio')[0]
         audio.src =  $(this).attr('data-file')
         audio.play();
    })
    
    $(document).pjax('a', '#pjax-container')

    
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
})

