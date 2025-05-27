@aware(['page'])

    <section id="contato" class="py-16 md:py-24 bg-gray-800 text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10">{{$contactTitle}}</h2>
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-center">
                <div class="lg:w-1/2 text-center lg:text-left">
                    <p class="text-lg text-gray-300 mb-6">
                        {{$contactMessage}}
                    </p>
                    <div class="space-y-4 mb-8 lg:mb-0">
                        <a href="mailto:{{$contactMail}}" class="bg-white text-gray-800 py-3 px-6 rounded-lg text-lg font-semibold hover:bg-gray-200 transition duration-300 flex items-center justify-center lg:justify-start w-full sm:w-auto">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                            {{$contactMail}}
                        </a>
                        <a href="tel:+55{{$phoneDD}}{{$contactPhone}}" class="border border-white text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-white hover:text-gray-800 transition duration-300 flex items-center justify-center lg:justify-start w-full sm:w-auto">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                            ({{$phoneDD}}) {{$contactPhone}}
                         </a>
                    </div>
                     <p class="text-gray-400 mt-4 text-sm">{{$contactAddress}}</p>
                </div>
                <div class="lg:w-1/2 w-full">
                    
                    <iframe 
                        {!!explode(" ", $mapCode)[1]!!}
                        width="100%" 
                        height="350" 
                        style="border:0;" 
                        allowfullscreen="true" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="rounded-lg shadow-xl">
                    </iframe>
                    
                </div>
            </div>
        </div>
    </section>