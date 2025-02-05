<form class="relative text-gray-600" autocomplete="off">
    <input wire:model="search" type="search" name="serch" placeholder="Buscar un curso" class=" w-full bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
    </svg>
    </button>

    @if ($search)
        <ul class="absolute  z-50 left-0 w-full bg-white mt-1 rounded-lg overflow-hidden">
            @forelse ($this->results as $result)
                <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-blue-300">
                    <a href="{{route('courses.show', $result)}}">{{$result->title}}</a>

                </li>
               @empty
               <li class="leading-10 px-5 text-sm cursor-pointer hover:bg-blue-300"> No hay coincidencias </li>
               

            @endforelse
        </ul>
    @endif

</form>