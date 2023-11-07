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
               <h1>{{$name}}</h1>
               <h1>{{$email}}</h1>
               <input type="text" wire:model='name'>
               <input type="text" wire:model='email'>
               <button wire:click='save'>SAVE</button>
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
