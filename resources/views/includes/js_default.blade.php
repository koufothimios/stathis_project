<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

<script type="text/javascript">

    $('img').bind('contextmenu', function(e) {
        return false;
    });

    var h2_ids = [];
    var h2_length = $('#vraveyseis_main_section').find('h2').length;
    // for(var i=0;i<h2_length;i=i+1){h2_ids.push($('#vraveyseis_main_section h2').eq(i).attr('id'));}
    $('#vraveyseis_main_section h2').each(function(idx,obj){
        h2_ids.push($(this).attr('id'));
    });

</script>
