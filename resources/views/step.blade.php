<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step {{ $step }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <step-component :step="{{ $step }}"></step-component>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
