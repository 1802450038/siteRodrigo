@aware(['page'])

<div class="px-0 py-0 md:py-0" id="inicio">
    <div class="max-w-10xl mx-auto">
        <section id="initial-hero" class="h-screen relative flex flex-col items-center justify-center text-center p-6 overflow-hidden">
            
            <canvas id="animated-background" class="{{$effecttType}} {{$effectNumber}}"></canvas>
            
            <div class="relative z-10 bg-primary-color/20 dark:bg-primary-color/10 backdrop-blur-sm rounded-2xl shadow-2xl p-6 sm:p-8 md:p-12 text-center">
                
                <div class="mb-6 md:mb-8">
                    
                 <img src="{{asset('storage/'.$imageStart)}}" alt="Logo Pacifico Saldanha & Advogados Associados" class="h-24 sm:h-28 md:h-32 lg:h-36 mx-auto" onerror="this.onerror=null;this.src='https://placehold.co/200x100/FFFFFF/CCCCCC?text=Logo+Indisponível';">
                </div>
    
                <div class="flex justify-center space-x-4 sm:space-x-6">


                @if ($instagram)        
                    <a href="{{url($instagram ? $instagram : ' ')}}" target="_blank" class="initial-social-icon flex flex-col items-center group" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" class="mb-1 w-7 h-7 md:w-8 md:h-8"><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4A3.6,3.6 0 0,0 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6A3.6,3.6 0 0,0 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"/></svg>
                        <span class="text-xs md:text-sm initial-social-icon-text group-hover:secondary-color transition-colors duration-300 font-medium">Instagram</span>
                    </a>
                    @endif
                @if ($whatsApp)
                <a href="#" id="openModalBtnHeader"  class="initial-social-icon flex flex-col items-center group" aria-label="WhatsApp">
                    <svg viewBox="0 0 24 24" class="mb-1 w-7 h-7 md:w-8 md:h-8"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.33 3.43 16.79L2.05 22L7.31 20.5C8.75 21.31 10.36 21.82 12.04 21.82C17.5 21.82 21.95 17.37 21.95 11.91C21.95 9.31 20.95 6.91 19.21 5.18C17.48 3.44 15.08 2 12.04 2M12.04 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.43 7.65 20.29 9.72 20.29 11.91C20.29 16.47 16.63 20.13 12.04 20.13C10.52 20.13 9.08 19.72 7.82 19L7.43 18.78L4.73 19.53L5.5 16.89L5.27 16.5C4.42 15.18 3.79 13.59 3.79 11.91C3.79 7.35 7.45 3.67 12.04 3.67M9.12 7.71L8.09 7.72C7.58 7.72 7.13 7.79 6.79 7.9L6.73 7.92C6.44 8.04 6.14 8.24 5.91 8.5C5.64 8.79 5.46 9.12 5.38 9.32C5.29 9.52 5.24 9.86 5.26 10.28C5.29 10.71 5.41 11.11 5.59 11.43C5.73 11.69 5.96 12.03 6.3 12.5C6.81 13.17 7.41 13.91 8.12 14.7C9.22 15.9 10.12 16.63 10.92 17.09C11.21 17.25 11.51 17.37 11.83 17.46C12.2 17.56 12.53 17.58 12.81 17.53C13.21 17.46 13.61 17.26 13.91 16.93C14.25 16.56 14.46 16.12 14.53 15.78C14.61 15.42 14.62 15.04 14.56 14.65L14.45 13.8L13.76 13.52C13.53 13.41 13.25 13.34 12.93 13.46C12.62 13.58 12.42 13.82 12.21 14.16C12.02 14.48 11.85 14.62 11.62 14.72C11.39 14.82 11.18 14.82 10.96 14.7C10.75 14.58 10.29 14.32 9.71 13.7C9.02 12.98 8.53 12.21 8.29 11.78C8.2 11.58 8.12 11.39 8.14 11.19C8.16 10.99 8.26 10.82 8.41 10.67C8.55 10.52 8.71 10.41 8.88 10.35C9.05 10.28 9.21 10.28 9.35 10.32L10.06 10.5H10.18L10.1 9.74C10.06 9.39 9.93 9.03 9.76 8.7C9.62 8.42 9.4 8.17 9.12 7.99V7.98L9.12 7.71Z"/></svg>
                    <span class="text-xs md:text-sm initial-social-icon-text group-hover:secondary-color transition-colors duration-300 font-medium">WhatsApp</span>
                </a>                
                @endif
                @if ($facebook)
                <a href="{{url($facebook ? $facebook : '')}}" target="_blank" class="initial-social-icon flex flex-col items-center group" aria-label="Facebook">
                    <svg viewBox="0 0 24 24" class="mb-1 w-7 h-7 md:w-8 md:h-8"><path d="M12 2.04C6.48 2.04 2 6.52 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.81C10.44 7.31 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.52 17.52 2.04 12 2.04Z"/></svg>
                    <span class="text-xs md:text-sm initial-social-icon-text group-hover:secondary-color transition-colors duration-300 font-medium">Facebook</span>
                </a>
                @endif
                </div>

            </div>
    
            <a href="#header-nav" class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-10">
                <div class="scroll-down-icon"></div>
            </a>
        </section>
    
    </div>
</div>
