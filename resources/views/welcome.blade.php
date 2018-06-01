<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <title>Laravel</title>
        <style>
        .red{
                background: red;
        }
        .green{
                background: green;
        }
        .blue{
                background: blue;
        }
        </style>
       
    </head>
    <body>
        <div id="app">
            <h1 :class="className">Title</h1>
            <button @click="className='red'">Red</button>
            <button @click="className='green'">Green</button>
            {{-- v-model ทำให้ message มีค่าเท่ากับ data.message --}}
            <input id='message' type="text" v-model = "message" @keydown.enter="addName">
            <button @click="addName">Add</button>
            <h1 id="h1">@{{ message }}</h1>

            <ul v-show ="show">
                <li v-for="name in names">@{{ name }}</li>
            </ul>

            <h3>Computed Data</h3>
            <ul>
                <li v-for="number in lessThan6Number">@{{ number }}</li>
            </ul>
        </div>
    </body>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                className: 'blue',
                message: 'Hello world',
                show: true,
                names: ['Tor','Por','Ppppap','Pop','Man'],
                numbers: [1,2,3,4,5,6,7,8,9,10],
            },

            methods: {
                    addName() {
                        this.names.push(this.message);
                        this.message = ""
                    }
            },

            computed: {
                lessThan6Number() {
                    return this.numbers.filter((number) => {
                        return number % 2 == 0;
                    });
                }
            }
        })
    </script>
</html>
