<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: black;
            /* Changed from background-image to background-color */
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            /* Hide overflow to prevent scrollbars */
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            text-align: center;
            opacity: 0;
            /* Initially hidden */
            animation: fadeIn 2s forwards;
            /* Fade in animation */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .content {
            color: #fff;
            animation: slideIn 1s forwards;
            /* Slide in animation */
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .btn {
            padding: 12px 24px;
            font-size: 18px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .auth-links {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10;
        }

        .auth-links a {
            margin-left: 10px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            background-color: #424242;
            /* Grey background color */
            border: 2px solid transparent;
            border-radius: 30px;
            transition: background-color 0.3s ease-in-out, border-color 0.3s ease-in-out;
            text-decoration: none;
        }

        .auth-links a:hover {
            background-color: #757575;
            /* Darker grey on hover */
            border-color: #757575;
        }

        @media screen and (max-width: 768px) {
            .auth-links {
                position: static;
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <h1>Unlocking the Potential of Your Assets, Seamlessly</h1>
        </div>
    </div>

    <div class="auth-links">
        @if (Route::has('login'))
        <div>
            @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</body>

</html>