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
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="image upload" id="image upload" value="{{$students->image}}" class="form-control"></br>
        <label>Marks</label></br>
        <input type="text" name="marks" id="marks" value="{{$students->marks}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
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
</style>
 
 
@stop