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
                            <li><a href="{{url('staff')}}">All Staff</a></li>
                            <li><a href="{{url('student')}}">All Student</a></li>
                            <li><a href="{{url('teacher')}}">All Teacher</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="shadow">
                        <div class="card">
                            <div class="card-body">
                                <h2>Add Staff</h2>
                                
                                @if(\Session::has('success'))
                                    <p class="errors" style = 'color:green; font-size : 14px; font-weight:600;'>{{ Session::get('success')}}</p>
                                @endif

                                <form action="{{ route('staff.store') }}" method="POST" >
                                @csrf
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input class="form-control" type="text" name="name" value="{{old('name')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">User name</label>
                                        <input class="form-control" type="text" name="username" value="{{old('username')}}">
                                    @if($errors -> has('username'))
                                            <p class="errors" style = 'color:red; font-size : 12px; padding-top:10px;'>{{ $errors -> first('username')}}</p>
                                    @endif
    
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input class="form-control" type="password" name="password" value="{{old('password')}}">
                                         @if($errors -> has('password'))
                                            <p class="errors" style = 'color:red; font-size : 12px; padding-top:10px;'>{{ $errors -> first('password')}}</p>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input class="form-control" type="email" name="email" value="{{old('email')}}">
                                         @if($errors -> has('email'))
                                            <p class="errors" style = 'color:red; font-size : 12px; padding-top:10px;'>{{ $errors -> first('email')}}</p>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Cell Number</label>
                                        <input class="form-control" type="text" name="cell" value="{{old('cell')}}">
                                         @if($errors -> has('cell'))
                                            <p class="errors" style = 'color:red; font-size : 12px; padding-top:10px;'>{{ $errors -> first('cell')}}</p>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Age</label>
                                        <input class="form-control" type="text" name="age" value="{{old('age')}}">
                                         @if($errors -> has('age'))
                                            <p class="errors" style = 'color:red; font-size : 12px; padding-top:10px;'>{{ $errors -> first('age')}}</p>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="staff-img-loader"> Photo <i class ="fas fa-camera"></i> </label>
                                        <br>
                                        <input class="form-control-file" type="file" name="photo" id="staff-img-loader" style="display:none;" value="{{old('photo')}}">
                                        <img src="" id="staff_img_show"><br><br>
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="staff_remove" style="display:none;">Remove Photo</a>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-dark" type="submit" value="Add Staff">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>








    
    <!-- JS FILES  -->
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>