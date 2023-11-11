<div>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('List Vauchers') }}
      </h2>
   </x-slot>

   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
               <h1>HOLA MUNDAZOOOO list vaucher {{$title}}</h1>

               <div>
                  @foreach ($users as $user)
                  <div wire:key="{{ $user->id }}">
                     <h1>{{$user->name}}</h1>
                     <h1>{{$user->email}}</h1>
                     <x-primary-button wire:click="delete({{ $user->id }})">Delete</x-primary-button> 
                     
                  </div>
                  @endforeach
               </div>

            </div>
         </div>
      </div>
   </div>
   <div>
      <h1>{{ $count }}</h1>

      <button wire:click="increment">+</button>

      <button wire:click="decrement">-</button>
   </div>
</div>