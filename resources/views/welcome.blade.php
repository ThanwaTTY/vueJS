<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <title>Laravel</title>

    </head>
    <body>
        <input id='message' type="text" onkeyup="update();">
        <h1 id="h1"></h1>
    </body>
    <script>
        var hello = 'hello world';
        document.getElementById('message').value = hello;
        document.getElementById('h1').innerHTML= hello;
    </script>
</html>
