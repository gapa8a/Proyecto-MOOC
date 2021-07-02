<x-app-layout>
   
    

    <!-- Portada -->
    <section class="bg-cover" style="background-image: url({{asset('img/home/home1.jpg')}})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-black font-bold text-5xl ">
                        Adquiere conocimiento a tu ritmo
                    </h1>
                    <p class="text-black text-3xl mt-4 mb-4 text-justify">
                        En proyecto MOOC encontraras cursos que te permitirán ser un mejor profesional fortaleciendo áreas de la educación a tu gusto.
                    </p>   
                    
                    @livewire('search')
                    
                </div>
            </div>
    </section>
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6 font-bold">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-x-6 gap-y-8">
                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/1.jpg')}}" alt=""> 
                    </figure>
                    <header class="mt-2">
                                <h1 class="text-center text-xl text-gray-700">CURSOS</h1>
                        </header>  
                        <p class="text-lg text-gray-500 text-justify">Bienvenido a una gran variedad de cursos, dentro de Proyecto MOOC encontraras el curso de tu agrado para desarrollar y potenciar tus habilidades.</p> 
                </article>
                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/2.jpg')}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">ÁREAS DE APRENDIZAJE</h1>
                    </header>  
                    <p class="text-lg text-gray-500 text-justify">Dentro de la plataforma tienes la posibilidad de acercarte a diversas áreas de aprendizaje, busca la tuya hoy.</p> 
                 </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/3.jpg')}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">NIVELES EDUCATIVOS</h1>
                    </header>  
                    <p class="text-lg text-gray-500 text-justify">Bienvenido al lugar donde encuentras cursos de acuerdo con tu nivel educativo en un tema específico.</p> 
                </article>

                {{-- <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/4.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y Proyectos</h1>
            </header>  
            <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum aut ex, maxime hic tempora eveniet soluta ratione adipisci, dolorum suscipit</p> 
                        
                    </header>  
                </article> --}}
        </div>

    </section>

    <section class="mt-24 bg-blue-400 py-12">
        <h1 class="text-center text-white font-bold text-3xl">CONOCE NUESTRO CATALOGO DE CURSOS</h1>
        <p class="text-center text-white text-lg mt-4">Filtra los cursos por categoria o niveles</p>
       <div class="flex justify-center mt-4"> 
        <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl text-lg">
            Catálogo de cursos
        </a>
       </div>
    </section>
    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600 font-bold">CURSOS RECIENTES</h1>
        <p class="text-center text-gray-500 text-2xl mb-6 mt-6 ">En esta sección se muestran los ultimos cursos publicados en la plataforma:</p>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-25 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach ($courses as $course)
                <x-course-card :course="$course"/>
            @endforeach

        </div>
    </section>

</x-app-layout>

