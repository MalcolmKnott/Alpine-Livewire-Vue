<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apline Livewire Vue</title>

        <script src="https://cdn.tailwindcss.com"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app" class="container mx-auto py-24">
            <example-component></example-component>

            <div x-data="{ open: false }" class="py-12" v-pre>
                <button x-on:click="open = ! open">Alpine x-if</button>

                <template x-if="open">
                    <div>
                        Content...
                    </div>
                </template>
            </div>

            {{-- <div class="py-12" v-pre>
                <p class="mb-2">Alpine x-for</p>
                <ul x-data="{ colors: ['Red', 'Orange', 'Yellow'] }">
                    <template x-for="color in colors">
                        <li x-text="color"></li>
                    </template>
                </ul>
            </div> --}}

        </div>

        @livewireScriptConfig
    </body>
</html>
