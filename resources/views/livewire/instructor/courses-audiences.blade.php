<section>
    <h1 class="text-2xl font-bold">AUDIENCIA DEL CURSO</h1>
    <hr class="mt-2 mb-6">

    @foreach ($course->audiences as $item)
        <article class="card mb-4">
            <div class="card-body bg-gray-100">


                @if ($audience->id ==$item->id)
                <form wire:submit.prevent="update">
                    <input wire:model="audience.name" class="form-input w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                
                    @error('audience.name')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                
                </form>
                    
                @else
                    
              
                <header class="flex justify-between">
                    <h1>{{$item->name}}</h1>
                    <div>
                    <i wire:click="edit({{$item}})" class="fas fa-edit text-blue-500 cursor-pointer"></i>
                    <i wire:click="destroy({{$item}})" class="fas fa-trash text-red-500 cursor-pointer ml-2"></i>
                    </div>
                </header>
                @endif
            </div>
        </article>
    @endforeach

        <article class="card">
            <div class="card-body bg-gray-100">
                <form wire:submit.prevent="store">
                    <input  wire:model="name" class="form-input w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Agregar la audiencia del curso">
                    
                    @error('name')
                        <span class="text-xs text-red-500">  {{$message}}</span>
                    @enderror
                    
                    <div class="flex justify-end mt-2" >
                        <button type="submit" class="btn btn-primary">Agregar audiencia</button>
                    </div>
                </form>
            </div>
        </article>

</section>
