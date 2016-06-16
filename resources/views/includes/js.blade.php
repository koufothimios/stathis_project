<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

<script type="text/javascript">

    $('.col-md-4').on("click", "img", function () {
        $('img').css({
            "border": "0px",
            "box-shadow": "none"
        });
        var source = $(this).attr('src');
        $(this).css({"border-color": "#DDDDDD",
             "border-width":"0.2rem",
             "border-style":"solid",
             "box-shadow": "0px 0px 5px 3px #888",
         });
        //$('#target_image').attr('src',source);
        $('#target_image').fadeOut(300,function(){
            $('#target_image').attr('src',source);

        }).fadeIn(300);
        //$('#target_image').attr('src',source);

    });

    $('img').bind('contextmenu', function(e) {
        return false;
    });

    var number_of_items_in_sidebar = $('.sidebar_links').length;
    var offsets = [];

    //alert(number_of_items_in_sidebar);

    $(window).scroll(function () {
    //You've scrolled this much:
        var scroll = $(window).scrollTop();
        if(scroll>120){
            $('#vraveyseis_datetime_sidebar').addClass("fixed");
        }else{
            $('#vraveyseis_datetime_sidebar').removeClass("fixed");
        }

        // var hT = $('#2').offset().top;
        // if (scroll > (hT)){
        //     //alert('you have scrolled to the h1!');
        //     if($('a').attr('href')==='#2'){
        //         $('a').addClass('active');
        //     }
        // }else{
        //     $('a').removeClass('active');
        // }
    });

</script>
