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
                    <div class="col-md-4">
                        <img src="images/1.jpg">
                    </div>
                    <div class="col-md-4">
                        <img src="images/2.jpg">
                    </div>
                    <div class="col-md-4">
                        <img src="images/3.jpg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/4.jpg">
                    </div>
                    <div class="col-md-4">
                        <img src="images/2.jpg">
                    </div>
                    <div class="col-md-4">
                        <img src="images/3.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
