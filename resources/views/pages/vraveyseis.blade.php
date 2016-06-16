@extends('layout.layout')

@section('main')
<div class="row">
    <div class="container">
        <div id="vraveyseis_datetime_sidebar" class="col-md-2">
            <ul class="nav nav-pills nav-stacked">

            <li class="nav-item">
            <a class="nav-link" href="#1">Απρίλιος 2015</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#2">Ιανουάριος 2015</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#">JavaScript</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="#">Preview</a>
            </li>

            </ul>
        </div>
        <div id="vraveyseis_main_section" class="col-md-10 scrollit">
            <?php $id = 1; ?>
            @foreach($vraveyseis_photos as $photo)
                <img id="{{$id}}" src="{{$photo}}">
                <h2>2η θέση στον πανελλήνιο διαγωνισμό</h2>
                <hr>
                <?php $id++; ?>
            @endforeach
        </div>
    </div>
</div>
@stop
