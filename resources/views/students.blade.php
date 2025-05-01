<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students</title>
  <!-- boot -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- boot -->
</head>
<body>

<div class="d-flex justify-content-center align-items-center vh-100 flex-column">
  <h1>Students</h1>
  <form action="students" method="post">
    @csrf

    <div class="form-group mb-2">
      <label>Name</label>
      <input type="text" class="form-control" value="{{ old('name') }}" name="name">
      @error('name')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-group mb-2">
      <label>Email</label>
      <input type="text" class="form-control" value="{{ old('email') }}" name="email">
      @error('email')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-group mb-2">
      <label>Phone</label>
      <input type="number" class="form-control" value="{{ old('phone') }}" name="phone">
      @error('phone')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-group mb-2">
      <label>Date of Birth</label>
      <input type="date" class="form-control" value="{{ old('dob') }}" name="dob">
      @error('dob')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <div class="form-group mb-2">
      <label>Course</label>
      <input type="text" class="form-control" value="{{ old('course') }}" name="course">
      @error('course')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <button class="btn btn-info mt-3" type="submit">Submit</button>
  </form>
</div>

<!-- boot -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- boot -->
</body>
</html>
