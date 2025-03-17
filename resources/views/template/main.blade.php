<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>BesaFranco_Midterm Exam</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
        
        <style>
            .rounded-header {
                border-radius: 10px;
                background-color: #351F0C;
                padding: 10px;
                color: #F5F4F3;
            }

            body {
                padding: 10px;
            }

            th, td {
                padding: 10px;
            }

            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>

        <a href="{{ url('BesaFranco') }}">Features</a>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>