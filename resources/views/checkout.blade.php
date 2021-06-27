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
<body class="bg-gray-100">
    <header class="h-1/2 shadow-2xl bg-blue-800 bg-opacity-75">
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
        </nav>      
    </header>    

    <!-- mobile menu here   -->
    <div class="mobile-menu-items hidden bg-gray-100 sm:hidden m-3 p-3">
        <a href="#" class="{{ request()->is('/') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block font-bold border-green-900' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Home</a>
        <a href="#" class="{{ request()->is('about') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block font-bold border-green-900' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">About</a>
        <a href="#" class="{{ request()->is('contact') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block font-bold border-green-900' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Contact</a>
        <a href="#" class="{{ request()->is('login') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block font-bold border-green-900' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Login</a>
        <a href="#" class="{{ request()->is('register') ? 'py-2 text-gray-900 border-b-2 hover:text-gray-500 block font-bold border-green-900' : 'py-2 text-gray-800 hover:text-gray-500 block'}}">Register</a>
    </div>
    

    <main id="main">
        <div class="text-gray-800 p-8">
            <div class="prose prose-2xl text-4xl font-bold text-gray-900">
                Book a flight
            </div>
            <div class="flex space-x-5">
                <div class="grid w-9/12 bg-gray-200 p-8 rounded shadow-2xl mt-5">
                    <form action="" method="POST" id="flight-form">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-5 w-full">
                            <div class="flex items-center space-x-5 w-full">
                                <label class="prose prose-lg italic text-gray-700">One way trip</label>
                                <input type="radio" name="trip_type" value="0" id="one-way-trip-radio" />
                            </div>
                            <div class="flex items-center space-x-5 w-full">
                                <label class="prose prose-lg italic text-gray-700">Return trip</label>
                                <input type="radio" name="trip_type" value="1" id="return-trip-radio" />
                            </div>
                        </div>
                         
                        <div class="text-2xl font-sans font-semibold mt-8">
                            Reservation
                        </div>
                        <hr>
    
                        <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-8">
                            <div class="w-full">
                                <label class="prose prose-lg italic  text-gray-700">
                                    Reservation type:
                                </label>
                                <select name="reservation_type" class="px-2 py-1 border-blue-800 bg-gray-200 focus:bg-white placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2 w-full">
                                    <option value="">Type ...</option>
                                    <option value="Adult">Adult</option>
                                    <option value="Child">Child</option>
                                    <option value="Infant">Infant</option>
                                </select>
                            </div>
                            <div class="w-full">
                                <label class="prose prose-lg italic text-gray-700">
                                    Number of ticket(s):
                                </label>
                                <input type="number" name="number_of_ticket" min="1" max="10" class="px-2 py-1 border-blue-800 bg-gray-200 focus:bg-white placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2 w-full" id="" placeholder="Number of ticket(s)" />
                            </div>
    
                            <div class="w-full">
                                <label class="prose prose-lg italic py-2 text-gray-700">
                                    Flying from:
                                </label>
                                <select name="flying_from" class="px-2 py-1 border-blue-800 bg-gray-200 focus:bg-white placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2 w-full">
                                    <option value="">From ...</option>
                                    <option value="Lagos">Lagos</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-5">
                            <div class="w-full">
                                <label class="prose prose-lg italic py-2 text-gray-700">
                                    Flying to:
                                </label>
                                <select name="flying_to" class="px-2 py-1 border-blue-800 bg-gray-200 focus:bg-white placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2 w-full">
                                    <option value="">To ...</option>
                                    <option value="Delta">Delta</option>
                                </select>
                            </div>                    
                        
                            <div class="w-full">
                                <label class="prose prose-lg italic text-gray-700">
                                    Departure date:
                                </label>
                                <input type="date" name="departure_date" class="px-2 py-1 bg-gray-200 focus:bg-white border-blue-800 placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2 w-full"  />
                            </div>
                            <div class="w-full hide-return-date">
                                <label class="prose prose-lg italic text-gray-700">
                                    Returning date:
                                </label>
                                <input type="date" name="returning_date" class="px-2 py-1 bg-gray-200 focus:bg-white border-blue-800 placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2 w-full" id="" />
                            </div>
                        </div>
                    
                        {{-- personal information card --}}
                        <div class="grid gap-5 mt-16">
                            <div class="text-2xl font-sans font-semibold">
                                Fill in your checkout information
                            </div>
                            <div class="text-1xl font-sans font-semibold">
                                Personal information
                            </div>
                            <hr>
                            {{-- first row --}}
                            <div class="-ml-3">
                                <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-3">
                                    <div class="w-full p-3">
                                        <label class="text-sm text-gray-700 font-bold">
                                            Surname
                                        </label>
                                        <input type="text" name="surname" id="surname" placeholder="Enter surname" class="px-2 py-1 bg-gray-200 focus:bg-white w-full border-blue-800 placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2" />
                                    </div>
                                    <div class="w-full p-3">
                                        <label class="text-sm text-gray-700 font-bold">
                                            First name
                                        </label>
                                        <input type="text" name="first_name" id="first_name" placeholder="Enter first name" class="px-2 py-1 bg-gray-200 focus:bg-white w-full border-blue-800 placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2" />
                                    </div>
                                    <div class="w-full p-3">
                                        <label class="text-sm text-gray-700 font-bold">
                                            Middle name
                                        </label>
                                        <input type="text" name="mid_name" id="mid_name" placeholder="Enter middle name" class="px-2 py-1 bg-gray-200 focus:bg-white w-full border-blue-800 placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2" />
                                    </div>
                                </div>
                            </div>
    
                            {{-- second row --}}
                            <div class="-ml-3">
                                <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-3">
                                    <div class="w-full p-3">
                                        <label class="text-sm text-gray-700 font-bold block">
                                            Gender
                                        </label>
                                        <select name="sex" id="sex" class="px-2 py-1 bg-gray-200 focus:bg-white border-blue-800 border-b-4 focus:border-0 focus:outline-none mt-2 w-full appearance-none">
                                            <option value="">Gender ...</option>
                                            <option value="Male">Male</option>
                                            <option value="Edo">Female</option>
                                        </select>
                                    </div>
    
                                    <div class="w-full p-3">
                                        <label class="text-sm text-gray-700 font-bold">
                                            State
                                        </label>
                                        <select name="state" id="state" class="px-2 py-1 bg-gray-200 focus:bg-white border-blue-800 border-b-4 focus:border-0 focus:outline-none mt-2 w-full appearance-none">
                                            <option value="">State ...</option>
                                            <option value="Abuja">Abuja</option>
                                            <option value="Edo">Edo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
    
                            <div class="text-1xl font-sans font-semibold mt-5">
                                Contact information
                            </div>
                            <hr>
    
                            {{-- third row --}}
                            <div class="-ml-3">
                                <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 mt-3">
                                    <div class="w-full p-3">
                                        <label class="text-sm text-gray-700 font-bold">
                                            Phone number
                                        </label>
                                        <input type="tel" name="phone_number" id="phone_number" placeholder="Phone number" class="px-2 py-1 bg-gray-200 focus:bg-white border-blue-800 w-full placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2" />
                                    </div>
                                   
                                    <div class="w-full p-3">
                                        <label class="text-sm text-gray-700 font-bold">
                                            E-mail
                                        </label>
                                        <input type="email" name="email" id="email" placeholder="example@something.com" class="px-2 py-1 bg-gray-200 focus:bg-white border-blue-800 w-full placeholder-gray-700 border-b-4 focus:border-0 focus:outline-none mt-2" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-5 mb-5">
                                <button type="submit" class="bg-green-600 text-green-200 hover:text-green-300 hover:bg-green-800 rounded-tr-lg rounded-bl-lg  p-3 font-bold  w-1/2">
                                    Submit .
                                </button>
                            </div>
                        </div>                        
                    </form>
                </div>
    
                {{-- checkout card --}}
                <div class="w-3/12 bg-white p-8 rounded shadow-2xl mt-5">
                    checkout card
                </div> 
            </div>       
        </div>
    </main>

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