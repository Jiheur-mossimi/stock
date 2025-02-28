<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show a product') }}
        </h2>
    </x-slot>

    <x-categories-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Réference')</h3>
        <p> {{ $produit->reference }} </p>

        <h3 class="font-semibold text-xl text-gray-800">@lang('Libelle')</h3>
        <p> {{ $produit->libelle }} </p>

        <h3 class="font-semibold text-xl text-gray-800">@lang('Quantité')</h3>
        <p> {{ $produit->quantite }} </p>

        <h3 class="font-semibold text-xl text-gray-800">@lang('Prix')</h3>
        <p> {{ $produit->prix }} </p>

        <h3 class="font-semibold text-xl text-gray-800">@lang('Catégorie')</h3>
        <p> {{ $produit->categorie->titre }} </p>

        <h3 class="font-semibold text-xl text-gray-800" pt-2>
            @lang('Date creation')
        </h3>
        <p> {{ $produit->created_at->format('d/m/Y') }} </p>
        @if ($produit->created_at != $produit->updated_at)
            <h3 class="font-semibold text-xl text-gray-800" pt-2>
                @lang('Last update')
            </h3>
            <p> {{ $produit->updated_at->format('d/m/Y') }} </p>
        @endif

    </x-categories-card>
</x-app-layout>
