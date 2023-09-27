
<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
</head>
<body>
    <h1>Submitted Data</h1>
    <p>Your Name is: {{ $data['Name'] }}</p>
    <p>Your address is: {{ $data['Address'] }}</p>
    <p>Your email is: {{ $data['Email'] }}</p>
    <p>Your age is: {{ $data['Age'] }}</p>
    <p>Your height is: {{ $data['Height'] }}</p>

    @if(isset($data['Picture']))
    <p>Uploaded Image:</p>
    <img src="{{ asset('/storage/' . str_replace('public', '', $data['Picture'])) }}" alt="Uploaded Image">
    @endif


    <a href="/form">Go back</a>
</body>
</html>
