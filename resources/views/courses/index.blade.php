<x-app-layout>
     <!-- Portada -->
     <section class="bg-cover" style="background-image: url({{asset('img/cursos/banner.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-5xl ">
                    Adquiere conocimiento a tu ritmo
                </h1>
                <p class="text-white text-3xl mt-4 mb-4 text-justify">
                    En proyecto MOOC encontraras cursos que te permitirán ser un mejor profesional fortaleciendo áreas de la educación a tu gusto.
                </p>   
                @livewire('search')  
            </div>
        </div>
</section>
@livewire('courses-index')
</x-app-layout>