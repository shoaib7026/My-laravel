<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <body class="bg-light" style="height: 100vh; display: flex; justify-content: center; align-items: center;">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <!-- User Registration Form -->
      <div class="card">
        <div class="card-header text-center">
          <h4>User Registration</h4>
        </div>
        <div class="card-body">

@if(session('success'))
<div class=" alert alert-success">
    {{ session('success') }}
</div>
@endif


          <form action="adduser" method="post">
            @csrf

            <div class="form-group">
              <label for="userName">Full Name</label>
              <input type="text" class="form-control" value="{{ old('uname') }}" id="userName" name="uname" placeholder="Enter your full name">
              @error('uname')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="userEmail">Email Address</label>
              <input type="email" class="form-control" value="{{ old('uemail') }}" id="userEmail" name="uemail" placeholder="Enter your email">
              @error('uemail')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="userPassword">Password</label>
              <input type="password" class="form-control" value="{{ old('upassword') }}" id="userPassword" name="upassword" placeholder="Enter your password">
              @error('upassword')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="userPhone">Phone Number</label>
              <input type="text" class="form-control" value="{{ old('uphone') }}" id="userPhone" name="uphone" placeholder="Enter your phone number">
              @error('uphone')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>




















      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>