<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Font Awesome CDN for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: aqua;">
        <b>Employee Management System - All Employee Details</b>
    </nav>
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Employee Details</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('add') }}" class="btn btn-success ">Add New Employee</a>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Position</th>
                    <th scope="col">Department</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- This part should be dynamically populated with employee data -->
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->eid }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->mobilenumber }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->department }}</td>
                        <td>{{ $employee->date }}</td>
                        <td>
                             <a href="{{route('edit')}}" class="btn btn-primary me-3">
                                <i class="far fa-edit"></i> Edit
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                <!-- End of dynamically populated part -->
            </tbody>
        </table>
    </div>
</body>
</html>
