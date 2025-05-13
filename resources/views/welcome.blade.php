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

    <div x-data="game()" class="px-10 flex items-center justify-center min-h-screen">
        <h1 class="fixed top-0 right-0 p-10 font-bold text-3xl">
            <span x-text="points"></span>
            <span class="text-xs">pts</span>
        </h1>
        <div class="flex-1 grid grid-cols-4 gap-10">
            <template x-for="card in cards">
                <div>
                    <button
                        x-show="! card.cleared"
                        :style="'background: ' + (card.flipped ? card.color : '#999')" 
                        class="w-full h-32"
                        @click="flipCard(card)"
                    ></button>
                </div>
            </template>
        </div>
    </div>

    <script>
        function game() {
            return {
                cards: [
                    {color: 'green',flipped: false, cleared: false },
                    {color: 'red',flipped: false, cleared: false },
                    {color: 'blue',flipped: false, cleared: false },
                    {color: 'yellow',flipped: false, cleared: false },
                    {color: 'green',flipped: false, cleared: false },
                    {color: 'red',flipped: false, cleared: false },
                    {color: 'blue',flipped: false, cleared: false },
                    {color: 'yellow',flipped: false, cleared: false },
                ],

                get flippedCards() {
                    return this.cards.filter(card => card.flipped);
                },

                get clearedCards() {
                 return this.cards.filter(card => card.cleared);  
                },

                get remainingCards() {
                 return this.cards.filter(card => ! card.cleared);  
                },

                get points() {
                    return this.clearedCards.length; 
                },

                flipCard(card){
                    card.flipped = ! card.flipped;

                    if(this.flippedCards.length === 2) {
                        if(this.hasMatch()) {
                            this.flippedCards.forEach(card => card.cleared = true);
                            if(! this.remainingCards.length){
                                alert('you won');
                            }
                        }

                        this.flippedCards.forEach(card => card.flipped = false);
                    }
                },

                hasMatch() {
                    return this.flippedCards[0]['color'] === this.flippedCards[1]['color'];
                },
            };
        }
    </script>
</body>

</html>
