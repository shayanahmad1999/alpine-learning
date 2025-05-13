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

<body class="p-10 max-w-lg mx-auto">
    <h1 class="text-xl text-center">Extract Component Logic</h1>

    <div 
        class="bg-gray-300 px-10 py-6 mt-6 rounded"
        x-data="taskApp()"
    >
    <form
        @submit.prevent="submit"
    >
    <input 
        type="text"
        placeholder="Go to the market..."
        x-model="newTask"
        class="w-full px-1"
    />
    </form>
    <ul class="list-disc mt-3">
        <template
            x-for="(task, index) in tasks"
            :key="index"
        >
            <li>
                <input 
                    type="checkbox"
                    x-model="task.completed"
                />
                <span x-text="task.body" :class="{'line-through' : task.completed}"></span>
            </li>
        </template>
    </ul>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
