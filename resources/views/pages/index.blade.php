@extends('layout.layout')

@section('main')
<div id="main">
    <div class="row">
        <div class="container">
            <div id="bio_sidebar" class="col-md-2">
                <img src="images/stathis.jpg" class="img-circle center-block" alt="Efstathios Zeinisw">
                <h4>Efstathios Zeinis</h4>
                <p>Ποιός είμαι .... : κάποιος που γοητεύεται από την φύση, προβληματίζεται με όσα παρατηρεί και καταγράφει με συναίσθημα τις δικές του εικόνες !!!</p>
            </div>
            <div id="photo_section" class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <img id="target_image" src="{{$final_photos[0][0]}}">
                    </div>
                </div>
                <div id="thumb_photo_section">
                <?php $id = 1; ?>
                @foreach($final_photos as $photo_array)
                <div class="row">
                    @foreach($photo_array as $photo)
                        <div class="col-md-4">
                            <img id="image_{{$id}}" src="{{$photo}}">
                        </div>
                        <?php $id = $id + 1; ?>
                    @endforeach
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
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

    </script>
@stop
