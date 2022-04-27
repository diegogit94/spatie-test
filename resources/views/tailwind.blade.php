<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300">
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl text-pink-400 text-center">ありがとう</h1>
        <h2 class="text-xl">ありがとう</h2>
        <h3 class="text-lg">ありがとう</h3>
        <h4 class="text-base">ありがとう</h4>
        <h5 class="text-sm">ありがとう</h5>
        <h6 class="text-xs">ありがとう</h6>
        <h6 class="text-xs">ありがとう</h6>
        <div class="text-center">
            <button class="bg-fuchsia-500 hover:bg-fuchsia-600 text-white font-semibold py-2 px-4 rounded-full text-sm shadow-xl text-center">
                Elbo de ton
              </button>
        </div>
          <div class="m-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, quam deleniti deserunt ea odio provident porro ad necessitatibus ratione, sit assumenda dicta culpa aliquam itaque tempore, quasi vel perferendis expedita.</p>
        </div>

        {{-- Charmander card --}}
        <div class="m-5 grid-cols-1 text-center border-4 border-orange-300 bg-orange-200">
            <img class="mx-auto bg-orange-600 rounded" src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png" :alt="charmander">
            <div class="mt-2">
            <div>
                <div class="text-xs text-slate-600 uppercase font-bold tracking-wider">Name: Charmander</div>
                <div class="font-bold text-slate-700 leading-snug">
                <a :href="url" class="hover:underline">Type: Fuego</a>
                </div>
                <div class="mt-2 text-sm text-slate-600">Zone: Pallet Town</div>
            </div>
            </div>
        </div>
        {{-- Charmander card end--}}

        {{-- PokeChat --}}
        <div class="m-5 p-6 max-w-sm mx-auto bg-white rounded-xl shadow-xl flex items-center space-x-4">
            <div class="shrink-0">
              <img class="h-12 w-12" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Pok%C3%A9_Ball_icon.svg/1026px-Pok%C3%A9_Ball_icon.svg.png" alt="PokeChat-logo">
            </div>
            <div>
              <div class="text-xl font-medium text-black">PokeChat</div>
              <p class="text-slate-500">You have a new message!</p>
            </div>
          </div>
          {{-- PokeChat end --}}

          {{-- profile card --}}
          <div class="m-5 p-3 max-w-sm mx-auto bg-white rounded-xl shadow-xl flex items-center space-x-4 border-4 border-gray-300">
            <div class="shrink-0">
                <img class="rounded-full object-left h-12 w-12 sm:mx-0 sm:shrink-0" src="https://elcomercio.pe/resizer/fDpamxykE5nIy4prWWJ2U_RvxGA=/620x0/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/OH3T4JIOGFC65P3FKPRX7WONEA.jpg" alt="ash-profile-picture">
            </div>
            <div class="text-center space-y-2 sm:text-left">
                <div class="space-y-0.5">
                    <p class="text-lg text-black font-semibold">
                        Ash Ketchup
                    </p>
                    <p>
                        Pallet Town
                    </p>
                </div>
                <button class="bg-red-500 hover:bg-red-600 rounded text-center py-2 px-4 text-gray-100">
                    Message
                </button>
            </div>
          </div>
          {{-- Profile card end --}}
    </div>

    <div class="container mx-auto text-center m-10">
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-red-400">1</div>
            <div class="bg-red-400">2</div>
            <div class="bg-red-400">3</div>
            <div class="bg-red-400">4</div>
            <div class="bg-red-400">5</div>
            <div class="bg-red-400">6</div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-4 mx-10">
            <div class="bg-green-400">1</div>
            <div class="bg-green-400">2</div>
            <div class="bg-green-400">3</div>
            <div class="bg-green-400">4</div>
            <div class="bg-green-400">5</div>
            <div class="bg-green-400">6</div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-4">
            <div class="bg-blue-400 col-span-2">1</div>
            <div class="bg-blue-400">2</div>
            <div class="bg-blue-400">3</div>
            <div class="bg-blue-400 col-span-2">4</div>
            <div class="bg-blue-400 col-span-2">5</div>
            <div class="bg-blue-400">6</div>
        </div>

        <div class="grid grid-cols-12 gap-2 mt-4">
            <div class="bg-yellow-400">1</div>
            <div class="bg-yellow-400">2</div>
            <div class="bg-yellow-400">3</div>
            <div class="bg-yellow-400">4</div>
            <div class="bg-yellow-400">5</div>
            <div class="bg-yellow-400">6</div>
            <div class="bg-yellow-400">7</div>
            <div class="bg-yellow-400">8</div>
            <div class="bg-yellow-400">9</div>
            <div class="bg-yellow-400">10</div>
            <div class="bg-yellow-400">11</div>
            <div class="bg-yellow-400">12</div>
        </div>

        <div class="grid grid-cols-12 gap-2 mt-4">
            <div class="bg-yellow-400 col-span-4">1</div>
            <div class="bg-yellow-400 col-span-4">2</div>
            <div class="bg-yellow-400 col-span-4">3</div>
        </div>

        <div class="grid grid-cols-4 gap-4 mt-4">
            <div class="bg-gray-400 col-start-2">1</div>
            <div class="bg-gray-400">2</div>
            <div class="bg-gray-400">3</div>
            <div class="bg-gray-400">4</div>
        </div>

        <div class="grid grid-rows-4 gap-4 mt-4">
            <div class="bg-purple-400 row-span-2">1</div>
            <div class="bg-purple-400">2</div>
            <div class="bg-purple-400">3</div>
            <div class="bg-purple-400">4</div>
        </div>

        <div class="h-64 grid grid-flow-col gap-4 mt-4">
            <div class="bg-pink-400 col-span-2 row-span-2">1</div>
            <div class="bg-pink-400 col-span-2 row-span-2">2</div>
            <div class="bg-pink-400 col-span-2 row-span-2">3</div>
            <div class="bg-pink-400 col-span-2 row-span-2">4</div>
            <div class="bg-pink-400 col-span-2 row-span-2">5</div>
            <div class="bg-pink-400 col-span-2 row-span-2">6</div>
        </div>

    </div>

</body>
</html>
