<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a product') }}
        </h2>
    </x-slot>

    <x-produits-card>

        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('produits.update', $produit->id) }}" method="post">
            @csrf
            @method('put')

            <!-- Réference -->
            <div>
                <x-input-label for="reference" :value="__('Réference')" />

                <x-text-input  id="reference" class="block mt-1 w-full" type="text" name="reference" :value="old('reference')" value=" {{ $produit->reference }} " required autofocus />

                <x-input-error :messages="$errors->get('reference')" class="mt-2" />
            </div>

            <!-- Libellé -->
            <div class="mt-4">
                <x-input-label for="libelle" :value="__('Libelle')" />

                <x-textarea class="block mt-1 w-full" id="libelle" name="libelle">{{ old('libelle') }} {{ $produit->libelle }}</x-textarea>

                <x-input-error :messages="$errors->get('libelle')" class="mt-2" />
            </div>

            <!-- Quantité -->
            <div>
                <x-input-label for="quantite" :value="__('Quantité')" />

                <x-text-input  id="quantite" class="block mt-1 w-full" type="text" name="quantite" :value="old('quantite')" value=" {{ $produit->quantite }} " required autofocus />

                <x-input-error :messages="$errors->get('quantite')" class="mt-2" />
            </div>

            <!-- Prix -->
            <div>
                <x-input-label for="prix" :value="__('Prix')" />

                <x-text-input  id="prix" class="block mt-1 w-full" type="text" name="prix" :value="old('prix')" value=" {{ $produit->prix }} " required autofocus />

                <x-input-error :messages="$errors->get('prix')" class="mt-2" />
            </div>

            <!-- Catégorie -->
            <div>
                <x-input-label for="categorie_id" :value="__('Catégorie')" />

                <x-select class="block mt-1 w-full" name="categorie_id" :value="old('categorie_id')">
                        <option value=""></option>
                    @foreach($categories as $categorie)
                        <option
                            value="{{ $categorie->id }}"
                            @if ($produit->categorie_id == $categorie->id)
                                 selected
                            @endif
                            >
                            {{ $categorie->titre }} </option>
                    @endforeach
                </x-select>

                <x-input-error :messages="$errors->get('categorie_id')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    {{ __('Send') }}
                </x-primary-button>
            </div>
        </form>

    </x-produits-card>
</x-app-layout>