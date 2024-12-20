<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
@if ($errors->any())
    <div style="color: red;">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if(isset($result))
    <p>Result of "{{ $expression }}": <strong>{{ $result }}</strong></p>
@endif

<!-- Форма для введення виразу -->
<form action="{{ route('calculate') }}" method="post">
    @csrf
    <input type="text" name="expression" placeholder="Enter expression" required>
    <input type="submit" value="Submit">
</form>
</body>
</html>
