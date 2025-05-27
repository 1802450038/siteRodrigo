@aware(['page'])
<header id="header-nav" class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="#initial-hero" class="flex items-center">
            <img src="{{asset('storage/'.$image)}}" alt="Logo Pacifico Advocacia" class="h-10 md:h-12 mr-3" onerror="this.onerror=null;this.src='https://placehold.co/100x50/FFFFFF/CCCCCC?text=Logo';">
        </a>
        <nav class="hidden md:flex space-x-6 items-center">
            
            
            @foreach ($menuItems as $item)

            <a href="#{{$item['link']}}" class="text-gray-700 hover:primary-color font-medium">{{$item['label']}}</a>
   
            @endforeach
            <button href="" id="openModalBtnMobile" class="btn-secondary py-2 px-4 rounded-lg font-medium text-sm">Agende uma Consulta</button>
        </nav>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>


    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg">

        @foreach ($menuItems as $item)
        <a href="#{{$item['link']}}" class="block px-6 py-3 text-gray-700 hover:bg-gray-100 hover:primary-color font-medium">{{$item['label']}}</a>
        @endforeach
     
    </div>
</header>
