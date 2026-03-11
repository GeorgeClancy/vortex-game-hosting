@extends('Frontend.Layouts.app')
@section('title', 'Knowledgebase')
@section('content')

<body class="maintenance-home">
    <div class="rts-error-section maintenance">
        <div class="section-inner">
            <img src="{{asset ('assets/images/maintenance.svg')}}" width="600" alt="image">
            <div class="wrapper-para mt--0">
                <h3 class="title">Server is Under Maintenance</h3>
                <p class="disc">
                    We're sorry, the page you requested could not be found <br> please go back to the homepage
                </p>
                <a href="{{route('home')}}" class="rts-btn btn__long btn-primary m-auto">Back to Home</a>
            </div>
        </div>
    </div>
@endsection