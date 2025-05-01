<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>

    <form action="/contact" method="POST">
        @csrf 

           <!-- Display Validation Errors -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red; list-style: none;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}" ><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}"><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" >{{ old('message') }}</textarea><br><br>

    <button type="submit">Submit</button>
    </form>
</body>
</html>
