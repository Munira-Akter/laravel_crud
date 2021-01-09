<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
     <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>

    <table class="table table-striped shadow m-auto mt-5 w-50">
          <thead>
            <tr>
                <td><img src=""></td>
            </tr>
          </thead>


          <tbody>
            <tr>
              <td>Name</td>
              <td>{{$single_staff -> name}}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>{{$single_staff -> email}}</td>
            </tr>
            <tr>
              <td>Cell</td>
              <td>{{$single_staff -> cell}}</td>
            </tr>
            <tr>
              <td>Age</td>
              <td>{{$single_staff -> age}}</td>
            </tr>
            <tr>
              <td>User Name</td>
              <td>{{$single_staff -> username}}</td>
            </tr>
          
            <tr>
              <td>Start Job</td>
              <td>{{date('d/F/y' , strtotime($single_staff -> created_at))}}</td>
            </tr>
          
            <tr>
              <td><a href ="{{route('staff.index')}}" class="btn btn-sm btn-outline-primary">Back</a></td>
            </tr>
          
          </tbody>
    </table>



    
    <!-- JS FILES  -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>