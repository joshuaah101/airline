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
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body style="background-image: url({{ asset('storage/images/layout/airline-runway-1-with-plane.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
    <header class="h-1/2 shadow-2xl bg-blue-900 bg-opacity-75">
        <nav class="px-8 mx-auto shadow-lg bg-transparent">
            <div class="flex justify-between">
                <!-- logo -->
                
                <div class="flex">
                    <a href="#" class="flex items-center px-2 py-4 text-blue-100 hover:text-blue-300">
                        <svg class="fill-current h-8 w-8 mr-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                        <span class="font-bold uppercase">{{ config("app.name") }}</span>
                    </a>
                </div>
                <!-- menu -->
                <div class="hidden sm:flex items-center space-x-1 sm:space-none">
                    <a href="/" class="{{ request()->is('/') ? 'py-1 text-lg px-4 border-b-4 rounded text-blue-300 border-green-600 hover:border-green-900 tracking-wide font-bold hover:text-blue-300 font-bold font-mono' : 'py-5 px-2 text-blue-100 hover:text-blue-300 font-mono' }}">Home</a>
                    <a href="about" class="{{ request()->is('about') ? 'py-1 text-lg px-4 border-b-4 rounded text-blue-300 border-green-600 hover:border-green-900 tracking-wide font-bold hover:text-blue-300 font-bold font-mono' : 'py-5 px-2 text-blue-100 hover:text-blue-300 font-mono' }}">About</a>
                    <a href="contact" class="{{ request()->is('contact') ? 'py-1 text-lg px-4 border-b-4 rounded text-blue-300 border-green-600 hover:border-green-900 tracking-wide font-bold hover:text-blue-300 font-bold font-mono' : 'py-5 px-2 text-blue-100 hover:text-blue-300 font-mono' }}">Contact</a>
                    <a href="login" class="{{ request()->is('login') ? 'py-1 text-lg px-4 border-b-4 rounded text-blue-300 border-green-600 hover:border-green-900 tracking-wide font-bold hover:text-blue-300 font-bold font-mono' : 'py-5 px-2 text-blue-100 hover:text-blue-300 font-mono' }}">Login</a>
                    <a href="register" class="{{ request()->is('register') ? 'py-1 text-lg px-4 border-b-4 rounded text-blue-300 border-green-600 hover:border-green-900 tracking-wide font-bold hover:text-blue-300 font-bold font-mono' : 'py-5 px-2 text-blue-100 hover:text-blue-300 font-mono' }}">Register</a>
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
            <div class="mobile-menu-items hidden bg-gray-100 sm:hidden m-3 p-3">
                <a href="#" class="{{ request()->is('/') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block font-bold border-green-900' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Home</a>
                <a href="#" class="{{ request()->is('about') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block font-bold border-green-900' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">About</a>
                <a href="#" class="{{ request()->is('contact') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block font-bold border-green-900' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Contact</a>
                <a href="#" class="{{ request()->is('login') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block font-bold border-green-900' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Login</a>
                <a href="#" class="{{ request()->is('register') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block font-bold border-green-900' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Register</a>
            </div>
        </nav>

        <div class="p-16 mt-5 flex">
            <div class="flex flex-col font-mono text-gray-300">
                <div class="font-bold">
                    <div class="text-2xl">We offer the best flight experience</div>
                    <div class="text-2xl mt-8">More affordable & the safest trip from your <br/> source to destination</div>
                    <div class="text-4xl font-serif"> @ {{ config("app.name") }}</div>
                </div>
                <div class="mt-5">
                    <button type="button" onclick="quickFlight()" class="py-3 px-3 bg-green-600 text-green-200 hover:text-green-300 hover:bg-green-800 font-bold font-serif shadow-xl rounded-br-2xl rounded-tl-xl w-1/2">
                        Book a flight
                    </button>
                </div>
            </div>
        </div>

        <script>
            function quickFlight(){
               const quickTrip = document.getElementById('quickTrip')
               quickTrip.scrollIntoView({
                behavior: 'smooth'
                })
            }
        </script>
        
    </header>    
    

    <main class="mt-64" id="main">
        
    </main>

    <script type="text/javascript">
        const one_way_trip_radio = document.getElementById('one-way-trip-radio')
        const return_trip_radio = document.getElementById('return-trip-radio')
        const return_date = document.querySelector('.hide-return-date')

        window.onload = function(){
            return_date.classList.add("hidden")
        }

        one_way_trip_radio.addEventListener('click', function(){
            return_date.classList.add("hidden")
        })

        return_trip_radio.addEventListener('click', function(){
            return_date.classList.remove("hidden")
        })


        $(function(){
            $("#flight-form").on("submit", function(e){
                e.preventDefault()
                var data = $(this).serialize()
                console.log(data)
            })

            
        })

    </script>

    <footer class="shadow-2xl bg-blue-900 mt-64 bg-opacity-75">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 text-gray-200 p-2" >
            <div class="p-5 w-full">
                <div class="text-md">
                    <h1 class="font-bold">Address: </h1> 
                    <p class="text-sm">
                        2, Ahmadu bello way, buhari estate, ijeun, abeokuta.
                    </p>
                </div>
                <div class="text-md mt-3">
                    <h1 class="font-bold">Contact: </h1>
                    <p class="text-sm">
                        E-mail: femiairline@gmail.com
                    </p>
                    <p class="text-sm">
                        Phone: 0803366458
                    </p>
                </div>
            </div>
            <div class="p-5 w-full">
                <div class="text-md">
                    <h1 class="font-bold">Quick links: </h1>
                </div>
                <div class="text-sm mt-3">
                    <a href="#" class="text-blue-600 block hover:text-blue-800">link 1</a>
                    <a href="#" class="text-blue-600 block hover:text-blue-800">link 2</a>
                    <a href="#" class="text-blue-600 block hover:text-blue-800">link 3</a>
                    <a href="#" class="text-blue-600 block hover:text-blue-800">link 4</a>
                    <a href="#" class="text-blue-600 block hover:text-blue-800">link 5</a>
                </div>
            </div>
            <div class="p-5 w-full">
                <div class="text-md">
                    Support: 
                    <p class="text-sm">
                        Support line: 08036696555
                    </p>
                </div>
                <div class="text-md mt-3">
                    Links: 
                    <div class="text-sm">
                        <a href="#" class="text-blue-600 block hover:text-blue-800">link 1</a>
                        <a href="#" class="text-blue-600 block hover:text-blue-800">link 2</a>
                        <a href="#" class="text-blue-600 block hover:text-blue-800">link 3</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex text-center text-xs justify-center items-center py-2 bg-gray-800 text-gray-100 font-bold">
           {{ config("app.name") }} &middot; All rights reserved <br/> &copy; {{ date('Y') }}
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

