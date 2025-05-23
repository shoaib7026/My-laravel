<!doctype html>
<html lang="en">
  <head>
    <title>Product Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-light" style="padding: 50px; display: flex; justify-content: center; align-items: center;">

    <div class="container">
      <div class="row justify-content-center">
 

        <div class="col-md-6">
          <!-- Product Form -->
          <div class="card">
          @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif


            <div class="card-header text-center">
              <h4>Product Form</h4>
            </div>
            <div class="card-body">
              <form action="addproduct" method="post">
                @csrf

                <div class="form-group">
                  <label for="productName">Product Name</label>
                  <input type="text" class="form-control" value="{{ old('product_name') }}" id="productName" name="product_name" placeholder="Enter Product Name">
                  @error('product_name')
    <small class="text-danger">{{ $message }}</small>
@enderror

                  
                </div>

                <div class="form-group">
                  <label for="productDescription">Product Description</label>
                  <textarea class="form-control" value="{{ old('product_description') }}" id="productDescription" name="product_description" rows="3" placeholder="Enter Product Description"></textarea>
                  @error('product_description')
    <small class="text-danger">{{ $message }}</small>
@enderror
                </div>

                <div class="form-group">
                  <label for="productPrice">Product Price</label>
                  <input type="text" class="form-control" value="{{ old('product_price') }}" id="productPrice" name="product_price" placeholder="Enter Product Price">
                  @error('product_price')
    <small class="text-danger">{{ $message }}</small>
@enderror

                </div>

                <div class="form-group">
                  <label for="productStock">Stock Quantity</label>
                  <input type="text" class="form-control" value="{{ old('product_quantity') }}" id="productStock" name="product_quantity" placeholder="Enter Stock Quantity">
                  @error('product_quantity')
    <small class="text-danger">{{ $message }}</small>
@enderror

                </div>

                <div class="form-group">
                  <label for="productCategory">Product Category</label>
                  <select class="form-control" id="productCategory" value="{{ old('product_category') }}" name="product_category">
                    <option value="">Select Category</option>
                    <option value="Perfumes">Perfumes</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Clothing">Clothing</option>
                  </select>
                  @error('product_category')
    <small class="text-danger">{{ $message }}</small>
@enderror

                </div>

                <button type="submit" class="btn btn-success btn-block">Submit</button>
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
