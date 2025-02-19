<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a category') }}
        </h2>
    </x-slot>

    <x-categories-card>

        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('categories.update', $categorie->id) }}" method="post">
            @csrf
            @method('put')

            <!-- Code -->
            <div>
                <x-input-label for="code" :value="__('Code')" />

                <x-text-input  id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')" value=" {{ $categorie->code }} " required autofocus />

                <x-input-error :messages="$errors->get('code')" class="mt-2" />
            </div>

            <!-- Titre -->
            <div class="mt-4">
                <x-input-label for="titre" :value="__('Titre')" />

                <x-textarea class="block mt-1 w-full" id="titre" name="titre">{{ old('titre') }} {{ $categorie->titre }}</x-textarea>

                <x-input-error :messages="$errors->get('titre')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    {{ __('Send') }}
                </x-primary-button>
            </div>
        </form>

    </x-categories-card>
</x-app-layout>