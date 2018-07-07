$(document).ready(function() {
    <!-- Real-time Validation -->
    <!--Name can't be blank-->
    $('#film_name').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });

    <!--Email must be an email -->
   /* $('#film_registration_no').on('blur', function() {
        var input=$(this);
        var is_registration_no=input.val();
        var error_free=true;
        //alert(url);
        if(is_registration_no){
            var element=$("film_registration_no");
            var valid=element.hasClass("valid");
            var error_element= $(input).parent().find("span.error");
            var error_element_show= $(input).parent().find("span.error_show");
            //var ok = 0;
            $.ajax({
                url:host +"/check_regNo",
                data: {id : is_registration_no},
                type: 'GET',
                success: function(data){
                    var ok = data.success;
                    if(ok >= 1){
                        if (!valid) {
                            error_element.removeClass("error").addClass("error_show").html('Registration No already exist.'); error_free= false;
                        }
                        input.removeClass("valid").addClass("invalid");
                    }
                    else {
                        error_free= true;
                        input.removeClass("invalid").addClass("valid");
                        error_element_show.removeClass("error_show").addClass("error");
                    }
                }
            });
        }
        else{input.removeClass("valid").addClass("invalid");}
    });
*/
    <!--Ratings Can't Be Blank  -->
    $('#film_ratings').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });
    <!--Description Can't Be Blank -->
    $('#film_description').on('input', function() {
        var input=$(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });
    <!--Message can't be blank -->
    $('#film_ticket_price').on('input',function(event) {
        var input=$(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });
    $('#film_slug').on('input',function(event) {
        var input=$(this);
        var is_name=input.val();
        if(is_name){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });
    $('#film_genre').on('change',function(event) {
        var input=$(this);
        var message=$(this).val();
        console.log(message);
        if(message){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });
    $('#film_country').on('change',function(event) {
        var input=$(this);
        var message=$(this).val();
        console.log(message);
        if(message){input.removeClass("invalid").addClass("valid");}
        else{input.removeClass("valid").addClass("invalid");}
    });

    <!-- After Form Submitted Validation-->
    $("#film_submit").click(function(event){
        var form_data=$("#film_form").serializeArray();
        var error_free=true;
        for (var input in form_data){
            var element=$("#film_"+form_data[input]['name']);
            var valid=element.hasClass("valid");
            var error_element=$("span", element.parent());
            console.log(element);
            if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
            else{error_element.removeClass("error_show").addClass("error");  error_free=true;}
        }
        if (!error_free){
            event.preventDefault();
        }
        else{
            $(this).submit();
        }
    });



});