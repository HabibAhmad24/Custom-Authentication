<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-4 col-lg-6 col-sm-4" style="margin-top: 50px">
        <div class="card" style="padding: 20px;background-color: rgb(230, 227, 227)">
            <div class="card-title">
                <h3 style="text-align: center">Login</h3>
            </div>
        <form class="row g-3" action="/login" method="POST">
            @if (Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
            @csrf
            <div class="col-12">
              <label for="inputEmail4" class="form-label" >Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Email Address " name="email" required value="{{old('email')}}">
              <span class="text-danger">@error('email') {{$message}}
                        
                @enderror</span>
            </div>
            <div class="col-12">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Enter Password " name="password" required>
              <span class="text-danger">@error('password') {{$message}}
                        
                @enderror</span>
            </div>
            
            
            
    
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary">Login</button>
              <button type="submit" class="btn btn-danger">Cancel</button>

            </div>
            <a href="register" class="text-center" style="text-decoration: none">New User!! Register Yourself Here</a>
          </form>

        </div>
    </div>



    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>