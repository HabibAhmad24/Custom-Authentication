<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-6 col-lg-8 col-sm-4" style="margin-top: 50px">
        <div class="card" style="padding: 20px;background-color: rgb(230, 227, 227)">
            <div class="card-title">
                    <h3 style="text-align: center">Register</h3>
                
                    <form class="row g-3" action="/register" method="POST">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif

                    @csrf
                    <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Name" name="name" value="{{old('name')}}">
                    <span class="text-danger">@error('name') {{$message}}
                        
                    @enderror</span>
                </div>
                    <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Email address" required name="email" value="{{old('email')}}"> 
                <span class="text-danger">@error('email') {{$message}}
                        
                    @enderror</span>
                        </div>
                        </div>
                    <div class="col-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Enter Password" required name="password" value="{{old('password')}}">
                <span class="text-danger">@error('password') {{$message}}
                        
                    @enderror</span>
                
                    </div>
                
                    <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{old('address')}}">
                <span class="text-danger">@error('address') {{$message}}
                        
                    @enderror</span>
                
                    </div>
                
                    <div class="col-12">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" placeholder="Lahore" name="city" value="{{old('city')}}">
                <span class="text-danger">@error('city') {{$message}}
                        
                    @enderror</span>
                
                    </div>
                
                
                
                
                    <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Signup</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                <a href="" class="btn btn-secondary">Cancel</a>

                    </div>
                
            
                    <a href="login" class="text-center" style="text-decoration: none">All ready have a account!! Login</a>
            </div>
            </form>
        </div>

       
        </div>           
    </div>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>