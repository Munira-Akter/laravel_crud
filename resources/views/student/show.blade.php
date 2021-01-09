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
              <td>{{ $single_student -> name }}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>{{ $single_student -> email }}</td>
            </tr>
            <tr>
              <td>Cell</td>
              <td>{{ $single_student -> cell }}</td>
            </tr>
            <tr>
              <td>User Name</td>
              <td>{{$single_student -> username }}</td>
            </tr>
            <tr>
              <td>Age</td>
              <td>{{$single_student -> age }}</td>
            </tr>
          
            <tr>
              <td>Time</td>
              <td>{{date( 'd / M / Y' , strtotime($single_student -> created_at))}}</td>
            </tr>
          
        
              <a href ="{{route('student.index')}}" class="btn btn-sm btn-outline-primary">Back</a>
       
          
          </tbody>
    </table>



    
    <!-- JS FILES  -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>