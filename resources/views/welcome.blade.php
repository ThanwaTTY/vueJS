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
        <div id="app">
            {{-- v-model ทำให้ message มีค่าเท่ากับ data.message --}}
            <input id='message' type="text" v-model = "message">
            <h1 id="h1">@{{ message }}</h1>
        </div>
    </body>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!',
                age: 23
            }
        })
    </script>
</html>
