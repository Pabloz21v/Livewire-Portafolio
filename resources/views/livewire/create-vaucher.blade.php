<div>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Create Vaucher') }}
      </h2>
   </x-slot>
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
               <h1>HOLA MUNDAZOOOO vaucher create</h1>
               <h1>{{$user}}</h1>
               <h1>{{$user->name}}</h1>
               <h1>{{$user->email}}</h1>

               <form wire:submit="save">
                  <label for="name">Name:</label>
                  <input type="text" id="name" wire:model="name">
                  <div>
                     @error('name') <span class="error">{{ $message }}</span> @enderror
                  </div>

                  <label for="email">Email:</label>
                  <input type="text" id="email" wire:model="email">
                  <div>
                     @error('email') <span class="error">{{ $message }}</span> @enderror
                  </div>

                  <label for="password">Password:</label>
                  <input type="text" id="password" wire:model="password">
                  <div>
                     @error('password') <span class="error">{{ $message }}</span> @enderror
                  </div>

                  <button type="submit">Save</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>