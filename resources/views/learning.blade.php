<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .active {
            background: blue;
            color: white;
        }
    </style>
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

    <br>
    <br>
    <br>

    <div x-data="{ show: false }">
        <h1 x-show="show">Hello World</h1>
        <button @click="show = ! show" x-text="show ? 'Hide' : 'Show'"></button>
    </div>

    <br>
    <br>
    <br>

    <div x-data="{ currentTab: 'first' }">
        <button @click="currentTab = 'first'" :class="{ 'active': currentTab === 'first' }">First</button>
        <button @click="currentTab = 'second'" :class="{ 'active': currentTab === 'second' }">Second</button>
        <button @click="currentTab = 'third'" :class="{ 'active': currentTab === 'third' }">Third</button>

        <div style="border: 1px dotted gray; padding: 1rem; margin-top: 1rem;">
            <div x-show="currentTab === 'first'">
                <p>First Tab.</p>
            </div>
            <div x-show="currentTab === 'second'">
                <p>Second Tab.</p>
            </div>
            <div x-show="currentTab === 'third'">
                <p>Third Tab.</p>
            </div>
        </div>
    </div>
</body>

</html>
