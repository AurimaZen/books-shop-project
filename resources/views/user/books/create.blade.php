<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a new book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                <form action="{{ route('user.books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div>
                <x-label for="title" :value="__('Title*')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            <!-- Authors -->
            <div class="mt-4">
                <x-label for="authors" :value="__('Authors (comma separated)*')" />

                <x-input id="authors" class="block mt-1 w-full" type="text" name="authors" :value="old('authors')" required autofocus />
            </div>

            <!-- Genres -->
            <div class="mt-4">
                <x-label for="genres" :value="__('Genres*')" />

                @foreach ($genres as $genre)

                <input type="checkbox" name="genres[]" value="{{ $genre->id }}"
                @if (in_array($genre->id, old('genres', []))) checked @endif />
                {{ $genre->name}}
                </br>
                @endforeach
            </div>
            <!-- Slug -->
            <div class="mt-4">
                <x-label for="Slug" :value="__('Slug*')" />

                <x-input id="slug" class="block mt-1 w-full" type="text" name="slug"  :value="old('slug')" required autofocus />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description*')" />

                <x-textarea id="description" class="block mt-1 w-full" type="textarea" name="description"  :value="old('description')" required autofocus />
            </div>

            <!--Price-->
            <div class="mt-4">
            <x-label for="price" :value="__('Price*')" />

            <x-input id="price" class="block mt-1 w-full"
                type="number"
                name="price"
                value="{{old('price')}}"
                required />
            </div>

            <!--Cover-->
            <div class="mt-4">
                <x-label for="cover" :value="__('Cover Picture')" />

                <x-input id="cover"  type="file" name="cover"/>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Save Book') }}
                </x-button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
