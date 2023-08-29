@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>
        
        
        </h1>
        <p class="lead"></p>
        <a class="btn btn-lg btn-primary" href="{{ url('/student') }} " role="button">Student Detaills</a>
        @endauth

        <!-- @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
        <div>
        <hr> 
        <img src = "images/students.jpeg" alt="Student Image" width="500" height="500">
        
    </div> -->

    @guest
        <h1>SUCCESS INSTITUTE</h1>
        <p class="lead">Unlock Your Potential with our SUCCESS. Experience quality education that ignites curiosity, cultivates skills, and shapes confident leaders of tomorrow. Discover a supportive community where knowledge meets opportunity, fostering a brighter future for every student.</p>
        @endguest

        <div>
            <hr> 
            <img src="{{ asset('images/backgroundImage.jpg') }}" alt="Background Image" width="1200" height="700">
        </div>
    </div>
@endsection