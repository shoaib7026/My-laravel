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


  <div class="container mt-5">
    <h2 class="mb-4 text-center">Product List</h2>
    @if(session('success'))
      <div class="text-center alert alert-success">
          {{ session('success') }}
      </div>
  @endif

    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price (Rs)</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($allProducts as $product )
            <tr>
                <td>{{ $product-> id}}</td>
                <td>{{ $product-> product_name}}</td>
                <td>{{ $product-> product_description}}</td>
                <td>{{ $product-> product_price}}</td>
                <td>{{ $product-> product_quantity}}</td>
                <td>{{ $product-> product_category}}</td>
                <td>{{ $product->created_at}}</td>
                <td>{{ $product-> updated_at}}</td>
               <td> <a class="btn btn-success" href="{{ url('Editproduct/'.$product->id) }}">Edit</a></td>
               <td> <a class="btn btn-danger" href="{{ url('Deleteproduct/'.$product->id) }}" onclick="return confirm('Soch lo bhai')">Delete</a></td>


</tr>
            @endforeach
      
        </tbody>
    </table>
</div>








      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
