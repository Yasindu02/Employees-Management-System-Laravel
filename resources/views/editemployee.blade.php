<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EditEmployee Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: aqua;">
      <b>Complete Employee Management System </b>
   </nav>

    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center">Update Employee Details</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form action="{{ route('edit', $employee->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label><h6>Name-:</h6></label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="{{ $employee->name }}">
                    </div>
                        <div class="mb-3">
                            <label><h6>MobileNumber-:</h6></label>
                            <input type="text" name="mobilenumber" class="form-control"  placeholder="Enter Your MobileNumber"  value="{{ $employee->mobilenumber }}">
                        </div>
                        <div class="mb-3">
                            <label><h6>Date-:</h6></label>
                            <input type="date" name="date" class="form-control"  placeholder="Enter Date" value="{{ $employee-> date}}" >
                        </div>
                        <div class="mb-3">
                           <label class="form-label"><h6>position-:</h6></label>
                           <select class="form-select" name="position">
                                <option value=""><----Select position-------></option>
                                <option value="Manager">Manager</option>
                                <option value="Developer">Developer</option>
                                <option value="Designer">Designer</option>
                                <option value="Sales">Sales</option>
                                <option value="Customer-service">Customer Service</option>
                           </select><br>
                         </div>
            

                         <div class="mb-3">
                            <label class="form-label"><h6>Department-:</h6></label>
                            <select class="form-select" name="department">
                                    <option value=""><------Select Department------></option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Marketing">Marketing</option>
                              </select><br>
                          </div>
                        <div class="mb-3">
                            <div class="d-grid">
                            <button type="submit" class="btn btn-primary"><b>Update Employee</b></button><br>
                            <a href="{{ route('index') }}" class="btn btn-danger"><b>All Employee Details</b></a><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
