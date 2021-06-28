@extends('layouts.app')

@section('content')

    <!-- Bootstrap Carousel -->
    <div id="welcome-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

                @php $i = 0; @endphp

                @foreach($galleries as $gallery)
    
                    @php

                        $active = ($i == 0) ? 'active' : '';
                    @endphp       

                    <div id="test" class="carousel-item {{ $active }}">
                        <img src="{{ asset("/storage/$gallery->photo") }}" class="img-fluid d-block w-100" alt="appartments_gallery_carousel">
                    </div>

                    @php $i++ @endphp  

                @endforeach

        </div>
        <a class="carousel-control-prev" href="#welcome-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#welcome-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection