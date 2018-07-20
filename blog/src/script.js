$(document).ready(
    $(document).scroll(function(){
        var screen=$(window).height();
        var distance = $(document).scrollTop();
        // console.log("screen:"+screen);
        // console.log("distance:"+distance);
        if(screen>distance)
            $("#back_to_top").fadeOut();
        else
        {
            $("#back_to_top").fadeIn();
        }



    })
)


$(document).ready(function () {
    var screen=$(window).height();
    var distance = $(document).scrollTop();
    if(screen>distance)
    {
        $("#back_to_top").hide();
    }
    else
    {
        $("#back_to_top").show();
    }

    $("#back_to_top").css("visibility","visible");
    }
)