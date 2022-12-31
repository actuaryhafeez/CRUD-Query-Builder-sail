<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Home</title>
</head>

<body>
    <div class="container">
        <div>
            <h2 class="alert alert-danger mt-5 text-center">CRUD using Query Builder Laravel</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 mt-5">
                <h2 class="alert alert-success text-center">Add New Student</h2>
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password">
                    </div> 
                    <button type="submit" class="btn btn-primary">Submit</button>                  
                </form>
                @if (session()->has('status'))
                    <div class="alert alert-success mt-2">
                        {{session('status')}}
                    </div>
                    
                @endif
            </div>
            <div class="col-sm-6 mt-5" >
                <h2 class="alert alert-danger text-center">List of Student</h2>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Marks</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $stu)
                            
                     
                        <tr>
                            <td>{{$stu -> id}}</td>
                            <td>{{$stu -> name}}</td>
                            <td>{{$stu -> email}}</td>
                            <td>{{$stu -> password}}</td>
                            <td>
                                <a href="{{ url('/edit', $stu->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{ url('/delete', $stu->id) }}" class="btn btn-danger btn-sm">Delete</a>
            

                            </td>




                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

 </body>
    
</html>
 