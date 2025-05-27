@aware(['page'])
<section id="artigos" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold primary-color text-center mb-12">Publicações Relevantes</h2>
        <div class="carousel-container">
            <div class="carousel-track-container ">
                <div class="carousel-track  pt-4 pb-4" id="publications-carousel-track">
                    @foreach ($articles as $article)
                     
                        <div class="publication-card mb-2 mt-2">
                            <div class="publication-card-icon-area">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </div>
                            <div class="publication-card-content">
                                <h2 class="font-semibold primary-color mb-2" style="max-height: 50px; overflow: hidden;">
                                    {{ $article['title'] }}
                                </h2>
                                <p class="publication-card-summary" style="  text-overflow: ellipsis;">
                                    {{ $article['description'] }}
                                </p>

                                <div class="publication-card-meta">
                                    <p class="text-xs text-gray-500">Autor: Dr. {{ $article['author']}}</p>
                                    <p class="text-xs text-gray-500">Data: {{ $article['date']}}</p>
                                </div>

                            </div>
                            <div class="publication-card-actions ">
                                <div class="flex justify-center w-full">
                                
                                    <a href="{{ 'storage/'.$article['file'] ?? '#' }}" target="_blank"
                                        class="btn-primary btn-publication btn-visualizar flex items-center w-full justify-center p-1 rounded">
                                        Visualizar
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block ml-1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12s3.75-7.5 9.75-7.5 9.75 7.5 9.75 7.5-3.75 7.5-9.75 7.5S2.25 12 2.25 12z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </a>
                                </div>
                               
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="carousel-button-wrapper">
                <button id="prevPublication" class="carousel-button prev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                    Anterior
                </button>
                <button id="nextPublication" class="carousel-button next">
                    Proximo
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>



        {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($articles as $article)
                <div class="publication-card">
                    <h3 class="text-xl font-semibold primary-color mb-2">{{ $article['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-4">{{ $article['description'] }}</p>
                    <a href="link_para_seu_pdf_1.pdf" target="_blank"
                        class="btn-secondary py-2 px-4 rounded-md text-sm font-medium inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Ler Documento (PDF)
                    </a>
                    <footer class="flex justify-between items-center mt-4 text-sm  secondary-color p-2 rounded">
                        <span class="text-primary-color">Autor: {{ $article['author'] }}</span>
                        <span class="text-gray-400">Data: {{ $article['date'] }}</span>
                    </footer>
                </div>
            @endforeach
        </div> --}}


    </div>
</section>
