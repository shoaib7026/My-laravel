<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>

</head>
<body>
    
<h1>Product Details</h1>
<p><strong>Product Name:</strong>{{ ucfirst($pr) }}</p>
<p><strong>Product Price:</strong>{{ $product['price'] }}</p>
<p><strong>Brand:</strong>{{ $product['brand'] }}</p>
<p><strong>Category:</strong>{{ $product['category'] }}</p>



</body>
</html>