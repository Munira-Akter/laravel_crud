<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <style>
        ul {
            text-align: center;
        }
        
        ul li {
            display: inline-block;
        }
        
        ul li a {
            color: rgb(5, 5, 5);
            text-transform: capitalize;
            padding: 5px 10px;
            display: inline-block;
            border: 3px solid #555;
            margin: 10px;
            background: #000;
            color: cornsilk;
            border-radius: 2px !important;
            box-shadow: 1px 1px 6px rgb(39, 39, 39);
        }
    </style>
</head>

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="link">
                        <ul>
                            <li><a href="{{route('teacher.create')}}">Add Teacher</a></li>
                            <li><a href="{{route('student.create')}}">Add Student</a></li>
                            <li><a href="{{route('staff.create')}}">Add Staff</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wrap-table shadow">
        <div class="card">
            <div class="card-body">
                <h2>All Student</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Cell</th>
                            <th>Age</th>
                            <th>User Name</th>
                            <th>Time</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($all_teacher as $all_teacher)
                        <tr>
                            <td>{{$loop -> index +1}}</td>
                            <td>{{$all_teacher -> name}}</td>
                            <td>{{$all_teacher -> email}}</td>
                            <td>{{$all_teacher -> cell}}</td>
                            <td>{{$all_teacher -> age}}</td>
                            <td>{{$all_teacher -> username}}</td>
                            <td>{{$all_teacher -> created_at -> diffForHumans()}}</td>
                            <td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{route('teacher.show' , $all_teacher -> id)}}">View</a>
                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                <a class="btn btn-sm btn-danger" href="{{route('teacher.delete' , $all_teacher -> id)}}">Delete</a>
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






    <!-- JS FILES  -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>