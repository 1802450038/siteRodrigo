@aware(['page'])



<section id="sobre" class="py-16 md:py-24 bg-white" >
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-start gap-x-12">
            <div class="lg:w-2/5 mb-12 lg:mb-0">
                <h2 class="text-3xl md:text-4xl font-bold primary-color mb-6">{{ $aboutTitle }}</h2>
                <p id="page-description" class="text-gray-700 mb-4 leading-relaxed" style="font-size: 16pt;">
                    {!! $description !!}
                </p>

                <a href="#servicos" class="text-lg font-medium secondary-color hover:underline">Conheça nossas áreas de
                    atuação →</a>
            </div>
            <div class="lg:w-3/5">
                <h3 class="text-2xl md:text-3xl font-bold primary-color mb-8 text-center lg:text-left">
                    {{ $partnersTitle }}</h3>

                <div class="grid grid-cols-1 md:grid-cols-1 gap-8">
                    @foreach ($partners as $partner)
                        @if ($partner['featured'])
                            <div class="team-card md:col-span-1 bg-gray-50 p-8">
                                @if ($partner['image'])
                                    <img src="{{ $partner['image'] }}" alt="Foto do Dr. Pacífico Luiz Saldanha"
                                        class="team-member-img w-28 h-28"
                                        onerror="this.onerror=null;this.src='https://placehold.co/120x120/CCCCCC/FFFFFF?text=Foto';">
                                @else
                                    <img src="https://placehold.co/120x120/0A2A4D/FFFFFF?text={{ $partner['initials'] }}"
                                        alt="Foto do Dr. Pacífico Luiz Saldanha" class="team-member-img w-28 h-28"
                                        onerror="this.onerror=null;this.src='https://placehold.co/120x120/CCCCCC/FFFFFF?text=Foto';">
                                @endif

                                <h4 class="text-2xl font-semibold primary-color mb-1">Dr. {{ $partner['name'] }}</h4>
                                <p class="text-md secondary-color mb-1">{{ $partner['rolePartner'] }}</p>
                                <p class="text-xs text-gray-500 mb-3">OAB/RS {{ $partner['OAB'] }}</p>

                                <div class="team-description-wrapper">
                                    <div class="team-description text-gray-600 text-sm mb-2 leading-relaxed">
                                        {{ $partner['descriptionPartner'] }}
                                    </div>
                                    <button class="btn-email btn-see-more hidden inline-block w-full text-center">
                                        Ver mais
                                    </button>
                                </div>

                                {{-- @if ($partner['link'])
                                    <a href="{{ $partner['link'] }}" class="btn-email">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                            </path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                        </svg>
                                        Enviar {{ $partner['type'] }}
                                    </a>
                                @endif --}}
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-8">
                    @foreach ($partners as $partner)
                        @if (!$partner['featured'])
                            <div class="team-card">
                                <img src="https://placehold.co/100x100/C0A062/0A2A4D?text={{ $partner['initials'] }}"
                                    alt="Foto do Dr. Flávio Luiz Saldanha" class="team-member-img"
                                    onerror="this.onerror=null;this.src='https://placehold.co/100x100/CCCCCC/FFFFFF?text=Foto';">
                                @if ($partner['rolePartner'] != 'Atendente')
                                    <h4 class="text-xl font-semibold primary-color mb-1">Dr. {{ $partner['name'] }}
                                    </h4>
                                @else
                                    <h4 class="text-xl font-semibold primary-color mb-1">Atendente
                                        {{ $partner['name'] }}</h4>
                                @endif

                                <p class="text-sm secondary-color mb-1">{{ $partner['rolePartner'] }}</p>
                                @if ($partner['rolePartner'] != 'Atendente')
                                    <p class="text-xs text-gray-500 mb-3">OAB/RS {{ $partner['OAB'] }}</p>
                                @endif
                                <div class="team-description-wrapper">
                                    <div class="team-description text-gray-600 text-sm mb-2 leading-relaxed">
                                        {{ $partner['descriptionPartner'] }}
                                    </div>



                                    <button class="btn-email btn-see-more hidden inline-block w-full text-center">
                                        Ver mais
                                    </button>
                                </div>

                                {{-- @if ($partner['link'])
                                    @if ($partner['type'] == 'Email')
                                        <a href="mailto:{{ $partner['link'] }}" class="btn-email">
                                    @else
                                        <a href="{{ url($partner['link']) }}" class="btn-email">
                                    @endif
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                                </path>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                            </svg> Enviar {{ $partner['type'] }}
                                        </a>
                                @endif --}}
                            </div>
                        @endif
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</section>
