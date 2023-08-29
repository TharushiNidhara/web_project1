@extends('students.layout')
@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 
 
<div class="card">
  <h2 class="card-header">Students Page</h2>
  <div class="card-body">
   
 
        <div class="card-body">
        <img src="{{ asset('uploads/students/' . $students->image) }}" alt="Student Image" width="170" height="120">

        <h4 class="card-title">Name : {{ $students->name }}</h4>

        <h6 class="card-text">Address : {{ $students->address }}</h6>

        <h6 class="card-text">Mobile : {{ $students->mobile }}</h6>

        <h6 class="card-text">Marks : {{ $students->marks }}</h6>

  </div>
       
    </hr>
  
  </div>
</div>
<style>

     .navbar {
       background-color: black;
     }
     
     /* .container-fluid {
       max-width: 5px;
     } */
     
     .navbar-brand, .nav-link {
       color: white !important;
     }
     
     .navbar-toggler-icon {
       background-color: white;
     }
     
     .navbar-text {
       color: white;
     }

     .container {
      max-width: 100%; 
      overflow-x: auto;
    }

    .form-group {
      margin-bottom: 20px; 
    }

    .card-header {
  text-align: center;
  font-weight: bold;
}

.card-body {
        margin: 40px;
        padding: 10px; 
        text-align: center; 
    }

    .card-title, .card-text, .card-img-top {
        margin-bottom: 20px; 
    }

    .my-4 {
        margin-top: 10rem; /* Add consistent top margin of 1rem */
        margin-bottom: 10rem; /* Add consistent bottom margin of 1rem */
    }

  
</style>