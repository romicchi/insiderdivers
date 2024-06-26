<nav class="fixed top-0 z-50 w-full bg-yellow-400 border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3 flex items-center justify-between">
    <div class="flex items-center justify-start rtl:justify-end p-0 lg:p-1">
      <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-800 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
          <span class="sr-only">Open sidebar</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
             <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
          </svg>
       </button>
       <a href="/" class="flex items-center">
         <!-- Adjusted image src path -->
         <img src="/resources/insider-divers-logo.jpg" alt="Insider Divers Logo" class="h-8 lg:h-10 mr-2">
         <span class="text-1xl gb-white-text lg:text-2xl font-bold">Insider Divers Database System</span>
       </a>
    </div>
    <div class="flex items-center">
        <div class="flex items-center ms-3">
          <div class="mx-2">
              <a href="{{ route('profile') }}" class="text-sm font-medium gb-white-text dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">Profile</a>
          </div>
          <!-- notification bell & Logout -->
          <div class="mx-2">
              <a href="#" class="text-sm font-medium gb-white-text dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
                  <i class="fas fa-bell"></i>
              </a>
          </div>
          <div class="mx-2">
              <a href="#" class="text-sm font-medium gb-white-text dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
                  <i class="fas fa-sign-out-alt"></i>
              </a>
          </div>
        </div>
      </div>
  </div>
</nav>



<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full gb-lblue border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto gb-lblue" style="background-color: #3D3D3D;">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{ route('dashboard') }}" class="flex items-center p-2 gb-white-text rounded-lg dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group" style="background-color: #3D3D3D;">
                <i class="fas fa-home gb-white-text transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                <span class="ms-3">Home</span>
            </a>
         </li>
         <li>
            <a href="{{ route('clients.management') }}" class="flex items-center p-2 gb-white-text rounded-lg dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fas fa-users gb-white-text transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Clients</span>
            </a>
         </li>
         <li>
            <a href="{{ route('trips.management') }}" class="flex items-center p-2 gb-white-text rounded-lg dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fas fa-route gb-white-text transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Trips</span>
            </a>
         </li>
         <li>
            <a href="{{ route('flights.management') }}" class="flex items-center p-2 gb-white-text rounded-lg dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fas fa-plane gb-white-text transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Flights</span>
            </a>
         </li>
         <li>
            <a href="{{ route('leaders.management') }}" class="flex items-center p-2 gb-white-text rounded-lg dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fas fa-user-tie gb-white-text transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Personnel</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 gb-white-text rounded-lg dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fas fa-history gb-white-text transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">History</span>
            </a>
         </li>
      </ul>
        <div class="absolute bottom-0 left-0 w-full gb-lblue text-center text-gray-100 p-4 border-gray-200" style="background-color: #3D3D3D;">
            <p class="text-md lg:text-xl">{{ date('h:i A') }}</p>
            <p class="text-sm">{{ date('M d, Y') }}</p>    
        </div>
   </div>
</aside>
