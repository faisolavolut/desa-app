<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        input:focus {
            outline: none !important;
            box-shadow: none !important;
            border: none !important;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#C04103',
                    }
                }
            }
        }
    </script>
</head>

<body>
    <div class="relative w-screen h-screen flex flex-col overflow-y-scroll">
        <div class="absolute top-0 left-0 w-full h-full flex flex-col">
            @yield('content')
        </div>
    </div>
</body>

</html>
