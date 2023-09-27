<!DOCTYPE html>
<html>
<head>
    <title>Submission Form</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Submission Form</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="/submit">
        @csrf
        <label for="Name">Name:</label>
        <input type="text" name="Name" placeholder="Name" id="Name" value="{{ old('Name') }}" required>
        
        <label for="Address">Address:</label>
        <input type="text" name="Address" placeholder="Address" id="Address" value="{{ old('Address') }}" >
        
        <label for="Email">Email:</label>
        <input type="email" name="Email" placeholder="Email" id="Email" value="{{ old('Email') }}" required>
        
        <label for="Age">Age:</label>
        <input type="number" name="Age" placeholder="Age" id="Age" value="{{ old('Age') }}" required>
        
        <label for="Height">Height:</label>
        <input type="number" step="0.01" name="Height" placeholder="Height" id="Height" value="{{ old('Height') }}" required>

        <label for="image">Upload an Image:</label>
        <input type="file" name="Picture" accept="image/*" required>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
