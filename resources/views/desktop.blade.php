<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
</head>

<body>
    <noscript>
        <p>JavaScript is disabled. Please click <a href="{{ route('desktops.index') }}">here</a> to continue.</p>
    </noscript>
    <script>
        // Redirect users with JavaScript enabled
        window.location.href = "{{ route('desktops.index') }}";
    </script>
</body>

</html>