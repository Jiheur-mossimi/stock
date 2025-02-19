<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a category')
        </h2>
    </x-slot>

    <x-categories-card>
        <h3 class="font-semibold text-xl text-gray-800">@lang('Code')</h3>
        <p> {{ $categorie->code }} </p>

        <h3 class="font-semibold text-xl text-gray-800">@lang('Titre')</h3>
        <p> {{ $categorie->titre }} </p>

        <h3 class="font-semibold text-xl text-gray-800" pt-2>
            @lang('Date creation')
        </h3>
        <p> {{ $categorie->created_at->format('d/m/Y') }} </p>
        @if($categorie->created_at != $categorie->updated_at)
            <h3 class="font-semibold text-xl text-gray-800" pt-2>
                @lang('Last update')
            </h3>
            <p> {{ $categorie->updated_at->format('d/m/Y') }} </p>
        @endif
    </x-categories-card>
</x-app-layout>