<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div x-data="{ message: 'Click Me' }" class="px-10 flex items-center justify-center min-h-screen">
        <div class="flex-1 grid grid-cols-4 gap-10">
            <div class="h-32 bg-gray-300">
                <button @click="message = 'i have been clicked'" x-text="message"></button>
            </div>
            <div class="h-32 bg-gray-300"></div>
            <div class="h-32 bg-gray-300"></div>
            <div class="h-32 bg-gray-300"></div>
            <div class="h-32 bg-gray-300"></div>
            <div class="h-32 bg-gray-300"></div>
            <div class="h-32 bg-gray-300"></div>
            <div class="h-32 bg-gray-300"></div>
        </div>
    </div>

    <div x-data="{ cards: [{ color: 'green', flipped: false, cleared: false }] }" class="px-10 flex items-center justify-center min-h-screen">
        <div class="flex-1 grid grid-cols-4 gap-10">
            <template x-for="card in cards">
                <div :style="'background: ' + (card.flipped ? card.color : '#999')" class="h-32"
                    @click="card.flipped = ! card.flipped">

                </div>
            </template>
        </div>
    </div>
</body>

</html>
