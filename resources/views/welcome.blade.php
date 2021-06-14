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
<body class="">
   <nav class="px-8 bg-gray-100 mx-auto shadow-lg">
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
				<a href="/" class="{{ request()->is('/') ? 'py-1 px-4 rounded bg-gray-900 text-gray-200 hover:text-gray-400 font-bold font-mono' : 'py-5 px-2 text-gray-800 hover:text-gray-500 font-mono' }}">Home</a>
				<a href="about" class="{{ request()->is('about') ? 'py-1 px-4 rounded bg-gray-900 text-gray-200 hover:text-gray-405 font-bold font-mono' : 'py-5 px-2 text-gray-800 hover:text-gray-500 font-mono' }}">About</a>
				<a href="contact" class="{{ request()->is('contact') ? 'py-1 px-4 rounded bg-gray-900 text-gray-200 hover:text-gray-400 font-bold font5mono' : 'py-5 px-2 text-gray-800 hover:text-gray-500 font-mono' }}">Contact</a>
				<a href="login" class="{{ request()->is('login') ? 'py-1 px-4 rounded bg-gray-900 text-gray-200 hover:text-gray-405 font-bold font-mono' : 'py-5 px-2 text-gray-800 hover:text-gray-500 font-mono' }}">Login</a>
				<a href="register" class="{{ request()->is('register') ? 'py-1 px-4 rounded bg-gray-900 text-gray-200 hover:text-gray-400 font-bold fo5t-mono' : 'py-5 px-2 text-gray-800 hover:text-gray-500 font-mono' }}">Register</a>
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
        <div class="mobile-menu-items hidden sm:hidden">
            <a href="#" class="py-2 text-gray-800 hover:text-gray-500 block">Home</span>
            <a href="#" class="py-2 text-gray-800 hover:text-gray-500 block">About</a>
            <a href="#" class="py-2 text-gray-800 hover:text-gray-500 block">Contact</a>
            <a href="#" class="py-2 text-gray-800 hover:text-gray-500 block">Login</a>
            <a href="#" class="py-2 text-gray-800 hover:text-gray-500 block">Register</a>
        </div>
    </nav> 
    
    <main class="h-3/4 bg-gray-300">
        <div class="">
            <div class=""></div>
            <div class=""></div>
        </div>
    </main>

    <footer>
        <div class="bg-blue-700">
            
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

