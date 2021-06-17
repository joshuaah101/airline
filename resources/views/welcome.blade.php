<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url({{ asset('storage/images/layout/airline-runway-1.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
    <header class="h-1/2 shadow-2xl bg-gray-900">
        <nav class="px-8 mx-auto shadow-lg bg-gray-300">
            <div class="flex justify-between">
                <!-- logo -->
                
                <div class="flex">
                    <a href="#" class="flex items-center px-2 py-4 text-gray-800 hover:text-gray-500">
                        <svg class="fill-current h-8 w-8 mr-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        <span class="font-bold uppercase">{{ config("app.name") }}</span>
                    </a>
                </div>
                <!-- menu -->
                <div class="hidden sm:flex items-center space-x-1 sm:space-none">
                    <a href="/" class="{{ request()->is('/') ? 'py-2 px-4 rounded bg-gray-900 text-gray-200 hover:text-gray-400 font-bold font-mono' : 'py-5 px-2 text-gray-800 hover:text-gray-500 font-mono' }}">Home</a>
                    <a href="about" class="{{ request()->is('about') ? 'py-2 px-4 rounded bg-gray-900 text-gray-200 hover:text-gray-405 font-bold font-mono' : 'py-5 px-2 text-gray-800 hover:text-gray-500 font-mono' }}">About</a>
                    <a href="contact" class="{{ request()->is('contact') ? 'py-2 px-4 rounded bg-gray-900 text-gray-200 hover:text-gray-400 font-bold font5mono' : 'py-5 px-2 text-gray-800 hover:text-gray-500 font-mono' }}">Contact</a>
                    <a href="login" class="{{ request()->is('login') ? 'py-2 px-4 rounded bg-gray-900 text-gray-200 hover:text-gray-405 font-bold font-mono' : 'py-5 px-2 text-gray-800 hover:text-gray-500 font-mono' }}">Login</a>
                    <a href="register" class="{{ request()->is('register') ? 'py-2 px-4 rounded bg-gray-900 text-gray-200 hover:text-gray-400 font-bold fo5t-mono' : 'py-5 px-2 text-gray-800 hover:text-gray-500 font-mono' }}">Register</a>
                </div>
          
                <!-- 	mobile button here -->
                <div class="mobile-menu-btn sm:hidden flex items-center">
                    <button type="button">
                        <svg class="h-6 fill-current w-8" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        
            <!-- mobile menu here   -->
            <div class="mobile-menu-items hidden bg-gray-300 sm:hidden m-3 p-3">
                <a href="#" class="{{ request()->is('/') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Home</span>
                <a href="#" class="{{ request()->is('about') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">About</a>
                <a href="#" class="{{ request()->is('contact') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Contact</a>
                <a href="#" class="{{ request()->is('login') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Login</a>
                <a href="#" class="{{ request()->is('register') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Register</a>
            </div>
        </nav>

        <div class="p-16 mt-5 flex">
            <div class="flex flex-col font-mono text-gray-300">
                <div class="font-bold">
                    <div class="text-3xl">We offer the best flight experience</div>
                    <div class="text-2xl mt-8">More affordable & the safest trip from your source to destination</div>
                    <div class="text-6xl font-serif"> @ {{ config("app.name") }}</div>
                </div>
                <div class="mt-5">
                    <button type="button" onclick="quickFlight()" class="py-4 px-5 bg-gray-300 text-gray-700 font-bold font-serif shadow-xl rounded-br-2xl rounded-tl-xl hover:text-gray-900">
                        Book a flight!
                    </button>
                </div>
            </div>
        </div>
        
    </header>    
    

    <main class="mt-64" id="main">
        <div class="flex justify-between p-16 bg-gray-300 text-gray-900">
            <div class="flex justify-center items-center w-1/3">
                <h1 class="font-bold italic text-4xl prose prose-2xl prose-cool-gray">
                    &DoubleLeftArrow; Quick flight &DoubleRightArrow;
                </h1>
            </div>
            <div class="w-2/3">
                <div class="prose prose-lg text-lg shadow-inner shadow-2xl shadow-outline bg-gray-200 p-5 opacity-25">
                    <h2 class="text-lg">Book a flight &rightarrow;</h2>
                    <form action="" method="post">
                        <label>One way</label> <input type="radio" name="one_way_mark" id="one_way_mark" class="form-input" value="1" />
                        <label>Return trip</label> <input type="radio" name="return_trip_mark" id="return_trip_mark" class="form-input" value="11" />
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        const one_way = document.getElementById('one_way_mark')
        const return_way = document.getElementById('return_trip_mark')

        one_way.addEventListener('click', function(){
            console.log(one_way.getAttribute('value'))
        })

    </script>

    <footer class="shadow-2xl bg-gray-900 p-16">
        <div class="flex xs:flex-col text-gray-200">
            <div class="">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod dolorum vero vitae consequuntur laudantium quas tenetur doloremque reiciendis at nisi animi recusandae repellat aut, neque ad, corporis, velit voluptatum modi?
            </div>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nulla harum ad ab vitae in magni enim maiores sint? Temporibus molestias aperiam numquam rem ad magnam aliquam, illo nisi necessitatibus.
            </div>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates itaque, rerum vel accusamus mollitia aperiam id ipsum quos reprehenderit recusandae at cum? Accusantium at reprehenderit totam vel facere est vitae.
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        const btn = document.querySelector(".mobile-menu-btn")
        const menu = document.querySelector(".mobile-menu-items")

        btn.addEventListener("click", ()=> {
            menu.classList.toggle('hidden')
        })
    </script>
</body>
</html>

