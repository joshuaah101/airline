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
                <a href="#" class="{{ request()->is('/') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Home</a>
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
        <div class="flex justify-between p-16 bg-gray-900 text-gray-900" id="quickTrip">
            <div class="flex justify-center items-center w-1/3">
                <h1 class="font-bold italic text-4xl prose prose-2xl prose-cool-gray">
                    &DoubleLeftArrow; Quick flight &DoubleRightArrow;
                </h1>
            </div>
            <div class="w-2/3 bg-gray-400 p-8 rounded">
                <div class="prose prose-2xl font-bold">
                    Book a flight
                </div>
                <div class="flex py-5">
                    <div class="flex justify-center space-x-5 items-center">
                        <label class="prose prose-lg italic font-bold">One way trip</label>
                        <input type="radio" name="one_way_trip_radio" value="11" class="form-input" id="one-way-trip-radio" />
                    </div>

                    <span class="font-bold">
                        &nbsp; / &nbsp;
                    </span>

                    <div class="flex justify-center space-x-5 items-center">
                        <label class="prose prose-lg italic font-bold">Return trip</label>
                        <input type="radio" name="return_trip_radio" value="11" class="form-input" id="return-trip-radio" />
                    </div>
                </div>

                <div class="flex space-x-5">
                    <div class="flex flex-col w-full">
                        <label class="prose prose-lg italic font-bold py-2">
                            Flying from:
                        </label>
                        <select class="text-gray-100 bg-gray-900 font-bold p-2 rounded-tl-lg form-select focus:bg-gray-200  focus:text-gray-800 focus:outline-none ">
                            <option value="">From ...</option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="flex flex-col w-full">
                        <label class="prose prose-lg italic font-bold py-2">
                            Flying to:
                        </label>
                        <select class="text-gray-100 bg-gray-900 font-bold p-2 rounded-tl-lg form-select focus:bg-gray-200  focus:text-gray-800 focus:outline-none ">
                            <option value="">To ...</option>
                            <option value=""></option>
                        </select>
                    </div>                    
                </div>

                <div class="flex space-x-5 mt-3">
                    <div class="flex flex-col w-1/2">
                        <label class="prose prose-lg italic font-bold">
                            Departure date:
                        </label>
                        <input type="date" class="text-gray-100 bg-gray-900 font-bold p-2 rounded-tl-lg focus:bg-gray-200  focus:text-gray-800 focus:outline-none form-input"  />
                    </div>
                    <div class="flex flex-col w-1/2 hide-return-date">
                        <label class="prose prose-lg italic font-bold">
                            Returning date:
                        </label>
                        <input type="date" class="text-gray-100 bg-gray-900 font-bold p-2 rounded-tl-lg focus:bg-gray-200  focus:text-gray-800 focus:outline-none form-input" id="" />
                    </div>
                </div>

                <div class="flex space-x-5 mt-3">
                    <div class="flex flex-col w-1/2">
                        <label class="prose prose-lg italic font-bold">
                            Reservation type:
                        </label>
                        <select class="text-gray-100 bg-gray-900 font-bold p-2 rounded-tl-lg form-select focus:bg-gray-200  focus:text-gray-800 focus:outline-none ">
                            <option value="">Type ...</option>
                            <option value="Adult">Adult</option>
                            <option value="Child">Child</option>
                            <option value="Infant">Infant</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-1/2 hide-return-date">
                        <label class="prose prose-lg italic font-bold">
                            Number of ticket(s):
                        </label>
                        <input type="number" min="1" max="10" class="text-gray-100 bg-gray-900 font-bold p-2 rounded-tl-lg focus:bg-gray-200  focus:text-gray-800 focus:outline-none form-input" id="" placeholder="Number of ticket(s)" />
                    </div>
                </div>

                <div class="flex mt-5">
                    <button type="submit" class="bg-gray-900 text-gray-100 rounded-tr-lg rounded-bl-lg p-3 font-bold hover:bg-gray-200 hover:text-gray-800 w-full">
                        Submit .
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
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

