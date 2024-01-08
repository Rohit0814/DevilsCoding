<head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>


<nav class="bg-white drop-shadow-lg">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center min-[780px]:hidden">
          <!-- Mobile menu button-->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" id="hammer" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
              Icon when menu is open.
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center min-[780px]:items-stretch min-[780px]:justify-start">
          <div class="flex flex-shrink-1 min-[780px]:justify-center">
            {{-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"> --}}
            <h1 class="font-extrabold text-2xl">Devils coding</h1>
          </div>
          <div class="hidden min-[780px]:ml-6 min-[780px]:block">
            <div class="flex space-x-4 ">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class=" text-black border-b-4 border-indigo-500/100  px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
              <a href="/project" class="text-gray-500 hover:border-b-4 border-indigo-500/50 hover:text-black  px-3 py-2 text-sm font-medium">Project</a>
              <a href="/about" class="text-gray-500 hover:border-b-4 border-indigo-500/50 hover:text-black px-3 py-2 text-sm font-medium">About</a>
              <a href="/services" class="text-gray-500 hover:border-b-4 border-indigo-500/50 hover:text-black px-3 py-2 text-sm font-medium">Services</a>
              <a href="/contact" class="text-gray-500 hover:border-b-4 border-indigo-500/50 hover:text-black px-3 py-2 text-sm font-medium">Contact</a>
              <a href="/blog" class="text-gray-500 hover:border-b-4 border-indigo-500/50 hover:text-black px-3 py-2 text-sm font-medium">Blog</a>
            </div>
          </div>
        </div>
        <div class="text-center items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <!-- Profile dropdown -->
          <div class="relative ">
            <div>
              <h1 class="font-bold pl-3 pr-3 pt-1 pb-1 rounded cursor-pointer hover:bg-indigo-800 bg-indigo-500 text-white"><a href="/login">Login</a></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="  min-[780px]:hidden" id="mobile-menu">
      <div class="flex flex-wrap px-2 pb-6 pt-2 text-center justify-center">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" id="menu1" class=" text-black border-b-4 border-indigo-500/100  px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
        <a href="#" id="menu1" class="text-gray-500 hover:border-b-4 border-indigo-500/50 hover:text-black  px-3 py-2 text-sm font-medium">Project</a>
        <a href="#" id="menu1" class="text-gray-500 hover:border-b-4 border-indigo-500/50 hover:text-black px-3 py-2 text-sm font-medium">About</a>
        <a href="#" id="menu1" class="text-gray-500 hover:border-b-4 border-indigo-500/50 hover:text-black px-3 py-2 text-sm font-medium">Services</a>
        <a href="#" id="menu1" class="text-gray-500 hover:border-b-4 border-indigo-500/50 hover:text-black px-3 py-2 text-sm font-medium">Contact</a>
        <a href="#" id="menu1" class="text-gray-500 hover:border-b-4 border-indigo-500/50 hover:text-black px-3 py-2 text-sm font-medium">Blog</a>
      </div>
    </div>
  </nav>

  <script>
    $("#mobile-menu").slideUp();
    $("#hammer").click(function() {
        $("#mobile-menu").slideToggle(500);
    });
  </script>