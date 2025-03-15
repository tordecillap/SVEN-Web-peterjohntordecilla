$(document).ready(function() {
    $(window).on("scroll", function() {
        $(".section").each(function() {
            let sectionTop = $(this).offset().top;
            let windowBottom = $(window).scrollTop() + $(window).height();
            if (windowBottom > sectionTop + 50) {
                $(this).addClass("visible");
            }
        });
    });

    $(".hamburger").click(function(){
        $(".nav").toggleClass("active");
    });

    $("#aboutLink").click(function(){
        $("html, body").animate({scrollTop: $('#about').offset().top}, 'slow');
    });

    $("#heroSchedule, #aboutSchedule, #scheduleLink").click(function(){
        $("html, body").animate({scrollTop: $('#appointment').offset().top}, 'slow');
    });
    
    $("#logoScroll, #logoTop").click(function(){
        $("html, body").animate({scrollTop: 0}, 'slow');
    });

    $("#appointmentForm").submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: "/schedule",
            type: "POST",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'), // CSRF Token
                frequency: $("#frequency").val(),
                start_date: $("#startDate").val(),
                days: $("#days").val(),
                time: $("#time").val(),
                notes: $("#notes").val()
            },
            success: function(response) {
                $("#message").removeClass("hidden").text(response.message).css("color",
                    "green");
            },
            error: function(xhr) {
                let errorMsg = xhr.responseJSON ? xhr.responseJSON.message :
                    "An error occurred.";
                $("#message").removeClass("hidden").text(errorMsg).css("color", "red");
            }
        });
    });

});