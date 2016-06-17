@extends('layout.layout')

@section('main')
<div class="row">
    <div class="container">
        <div id="vraveyseis_datetime_sidebar" class="col-md-2">
            <ul class="nav nav-pills nav-stacked">
            <?php $i = 1; ?>
            @foreach($final_photos as $photo)
                <li class="nav-item">
                @if($i==1)
                    <a id="sidebar_link_{{$photo[1]}}" class="sidebar_links nav-link active" href="#{{$photo[1]}}">{{substr($photo[1],0,-4)." ".substr($photo[1],-4)}}</a>
                @else
                    <a id="sidebar_link_{{$photo[1]}}" class="sidebar_links nav-link" href="#{{$photo[1]}}">{{substr($photo[1],0,-4)." ".substr($photo[1],-4)}}</a>
                @endif
                </li>
                <?php $i++; ?>
            @endforeach
            </ul>
        </div>
        <div id="vraveyseis_main_section" class="col-md-10 scrollit">
            <?php $id = 1; ?>
            @foreach($final_photos as $photo)
                <h2 id="{{$photo[1]}}">{{$photo[2]}}</h2>
                <img src="{{$photo[0]}}">
                <hr>
                <?php $id++; ?>
            @endforeach
        </div>
    </div>
</div>
@stop
