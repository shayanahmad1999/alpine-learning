<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div x-data="{ message: 'Hello World' }">
        <h1 x-text="message.toUpperCase()"></h1>
        <label for="">Simple input</label>
        <input type="text" :value="message">
        <br>
        <label for="">with model input</label>
        <input type="text" x-model="message">
    </div>
    <br>
    <br>
    <br>
    <div x-data="{ first: 0, second: 0 }">
        <input type="text" x-model.number="first"> + <input type="text" x-model.number="second"> = <output
            x-text="first + second"></output>
    </div>
</body>

</html>
