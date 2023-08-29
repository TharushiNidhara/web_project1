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
  <h2 class="card-header">Students Page </h2> 
  
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <!-- <label>image upload</label></br>
        <input type="text" name="image upload" id="image upload" class="form-control"></br> -->
        <td>
          <!-- <label for="">Upload Image</label>
              <input type="file" name="image" required class="course form-control">
                        </div> 
                         <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Upload</button>
                            
                        </div>  
                                          </td> -->
       <div class="mb-3">
        <label for="image">Upload Image</label>
        <div class="input-group">
          <input type="file" name="image" required class="form-control">
          
        </div>
      </div>
        <label>Marks</label></br>
        <input type="text" name="marks" id="marks" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
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
 
@endsection