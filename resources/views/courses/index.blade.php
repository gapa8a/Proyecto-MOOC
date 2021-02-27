<x-app-layout>
     <!-- Portada -->
     <section class="bg-cover" style="background-image: url({{asset('img/cursos/banner.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">
                    Adquiere conocimiento a tu ritmo
                </h1>
                <p class="text-white text-l mt-2 mb-4">
                    En proyecto MOOC encontraras cursos que te permitiran ser un mejor profesional fortaleciendo areas de la educación a tu gusto.
                </p>   
            
                @livewire('search')  
            </div>
        </div>
</section>
@livewire('course-index')
</x-app-layout>