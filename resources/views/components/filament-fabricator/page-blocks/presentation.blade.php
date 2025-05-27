@aware(['page'])
<section class="hero-bg-content py-20 md:py-32" id="apresentacao">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-5xl font-bold primary-color mb-6 leading-tight">
            {{$presentationTitle}}
        </h2>
        <div class="text-lg md:text-xl text-gray-700 mb-10 max-w-2xl mx-auto">
            {!!$presentationText!!}
        </div>
        <a href="#" id="openModalBtnContentHero" class="btn-primary mt-3 py-3 px-8 rounded-lg text-lg font-semibold hover:shadow-lg transform hover:scale-105 transition duration-300">
            Entre em Contato
        </a>
    </div>
</section>