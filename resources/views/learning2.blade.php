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
    <h1 class="text-xl text-center">Two-Way Data Binding</h1>
    <form 
        x-data="{
            form:{
                name: ''
            },

            user: null,

           submit() {
                fetch('https://reqres.in/api/users', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'x-api-key': 'reqres-free-v1'
                    },
                    body: JSON.stringify(this.form)
                })
                .then(response => response.json())
                .then(user => this.user = user)
                .catch(error => console.error('API Error:', error));
            }

        }"
        @submit.prevent="submit"
    >
        <div class="mb-6">
            <label 
                class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                for="name"
            >
                Name
            </label>
            <input
                class="border borer-gray-400 p-2 w-full" 
                type="text"
                name="name"
                id="name"
                x-model="form.name"
                required
            />
        </div>

        <template x-if="user">
            <div x-text="'The user ' + user.name + ' was created at ' + user.createdAt"></div>
        </template>
    </form>
</body>

</html>
