@extends('students.layout')
@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    
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
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>
      <!-- <span class="navbar-text">
        Navbar text with an inline element
      </span> -->
    </div>
  </div>
</nav>
<!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <!-- <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        
                    </div> -->
                    <div class="card-body">
                    <a href="{{ url('/') }}" class="btn btn-success btn-sm" title="Home page">
                          
                          <i class="fa fa-plus" aria-hidden="true"></i> Back to Home Page
                      </a>


                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">

                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                      
                                        <th>Image</th>
                                        <th>Marks</th>
                                        <th>Actions</th>
                                        
                        </div>
                                        
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        

                                         
                                           
                                          
                                          <td>
                                          
                                          <img src="{{ asset('uploads/students/' . $item->image) }}" alt="Student Image" width="50" height="50">                                              
                                              
                                          </td>
                                          
                                        <td>{{ $item->marks }}</td>
                                                                            <td>
                                        <div class="action-buttons">
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                            </a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </a>
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                               
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </div>
                                    </td>

                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
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

/* Apply styles to the active and hovered links */
.navbar-nav .nav-item .nav-link.active,
.navbar-nav .nav-item .nav-link:hover {
  color: white !important;
}

.table-container {
  max-width: 100%;
  overflow-x: auto;
} 

.table {
  margin-bottom: 20px; /* Increase the margin value as needed */
  border-collapse: separate;
  border-spacing:  5px; /* Adjust the spacing value as needed */
}

.table th,
.table td {
  padding: 30px; /* Adjust the padding value as needed */
}

    </style>
@endsection