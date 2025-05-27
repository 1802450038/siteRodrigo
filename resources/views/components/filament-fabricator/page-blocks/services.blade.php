@aware(['page'])
<section id="servicos" class="py-16 md:py-24 hero-bg-content" id="servicos">
    <div class="container mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-bold primary-color text-center mb-12">Nossas Áreas de Atuação</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($services as $service)
            
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 max-h-[205px] overflow-hidden hover:max-h-[1000px] group" style="will-change: max-height; cursor: pointer;">
                <div class="flex items-center mb-4">
                    <i class="fas {{$service['icon']}} w-10 h-10 secondary-color mr-4 mt-4" style="font-size: 26pt;" ></i>
                    <h3 class="text-xl font-semibold primary-color">{{$service['title']}}</h3>
                </div>
                <p class="description-text text-gray-600 leading-relaxed">
                    {!!$service['description']!!}
                </p>
                <br>
            </div>
            
            @endforeach

           
        </div>

    </div>
</section>