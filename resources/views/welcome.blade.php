<x-app-layout>
   
    <!-- Portada -->
    <section class="bg-cover" style="background-image: url({{asset('img/home/img.jpg')}})">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-white font-bold text-4xl">
                        Adquiere conocimiento a tu ritmo
                    </h1>
                    <p class="text-white text-l mt-2 mb-4">
                        En proyecto MOOC encontraras cursos que te permitiran ser un mejor profesional fortaleciendo areas de la educación a tu gusto.
                    </p>   
                    <!-- component -->
                    <div class="relative text-gray-600">
                        <input type="search" name="serch" placeholder="Buscar un curso" class=" w-full bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                        <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                        </svg>
                        </button>
                    </div>
                </div>
            </div>
    </section>
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/1.jpg')}}" alt=""> 
                    </figure>
                    <header class="mt-2">
                                <h1 class="text-center text-xl text-gray-700">Cursos y Proyectos</h1>
                        </header>  
                        <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum aut ex, maxime hic tempora eveniet soluta ratione adipisci, dolorum suscipit</p> 
                </article>
                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/2.jpg')}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Cursos y Proyectos</h1>
                    </header>  
                    <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum aut ex, maxime hic tempora eveniet soluta ratione adipisci, dolorum suscipit</p> 
                 </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/3.jpg')}}" alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Cursos y Proyectos</h1>
                    </header>  
                    <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum aut ex, maxime hic tempora eveniet soluta ratione adipisci, dolorum suscipit</p> 
                </article>

                <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/4.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y Proyectos</h1>
            </header>  
            <p class="text-sm text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum aut ex, maxime hic tempora eveniet soluta ratione adipisci, dolorum suscipit</p> 
                        
                    </header>  
                </article>
        </div>

    </section>

    <section class="mt-24 bg-blue-400 py-12">
        <h1 class="text-center text-white text-3xl">Conoce nuestro catalogo de cursos.</h1>
        <p class="text-center text-white">Filtra los cursos por categoria o niveles</p>
       <div class="flex justify-center mt-4"> 
        <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">
            Catálogo de cursos
        </a>
       </div>
    </section>
    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">CURSOS RECIENTES</h1>
        <p class="text-center text-gray-500 text-sm mb-6">En esta sección se muestran los ultimos cursos publicados en la plataforma:</p>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach ($courses as $course)
                <x-course-card :course="$course"/>
            @endforeach

        </div>
    </section>

</x-app-layout>

