@extends('layout.layout')

@section('main')
<div id="main">
    <div class="row">
        <div class="container">
            <div id="bio_sidebar" class="col-md-2">
                <img src="images/stathis.jpg" class="img-circle center-block" alt="Efstathios Zeinisw">
                <h4>Efstathios Zeinis</h4>
                <p>Ποιός είμαι .... : κάποιος που gοητεύεται από την φύση, προβληματίζεται με όσα παρατηρεί και καταγράφει με συναίσθημα τις δικές του εικόνες !!!</p>
            </div>
            <div id="photo_section" class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <img id="target_image" src="{{$final_photos[0][0]}}">
                    </div>
                </div>
                @foreach($final_photos as $photo_array)
                <div class="row">
                    @foreach($photo_array as $photo)
                        <div class="col-md-4">
                        <img src="{{$photo}}">
                        </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop
