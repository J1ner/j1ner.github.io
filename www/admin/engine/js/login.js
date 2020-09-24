$(document).ready(function() {

    $("#login").submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                    if(response == 1){
                        $('#log').addClass('animated flash');
                        setTimeout(function () {
                            $('#log').removeClass('animated flash');
                        }, 2000);

                        setTimeout(function(){ window.location.href = "/admin/"; },2000);
                    }else{
                        $('#log').addClass('animated shake');
                        setTimeout(function () {
                            $('#log').removeClass('animated shake');
                        }, 2000);
                    }
            }
        });
    });

    $("#splogin").submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                if(response == 1){
                    $('#log').addClass('animated flash');
                    setTimeout(function () {
                        $('#log').removeClass('animated flash');
                    }, 2000);

                    setTimeout(function(){ window.location.href = "/spamer/"; },2000);
                }else{
                    $('#log').addClass('animated shake');
                    setTimeout(function () {
                        $('#log').removeClass('animated shake');
                    }, 2000);
                }
            }
        });
    });

});