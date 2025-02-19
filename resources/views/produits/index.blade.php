<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Products List')
        </h2>
    </x-slot>
    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">

            <div class="w-full">
                @if (session()->has('message'))
                    <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="border-b border-gray-200 shadow pt-6">
                    <table>
                        <thead class="bg-gray-50">
                            <tr>
                                <td colspan="6">&nbsp;</td>
                                <td class="px-4 py-4">
                                    <x-link-button href="{{ route('produits.create') }}">
                                        @lang('Create')
                                    </x-link-button>
                                </td>
                            </tr>
                            <tr>
                                <th class="px-2 py-2 text-xs text-gray-500">#</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Réference</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Libelle</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Prix</th>
                                <th class="px-2 py-2 text-xs text-gray-500">Catégorie</th>
                                <th class="px-2 py-2 text-xs text-gray-500"></th>
                                <th class="px-2 py-2 text-xs text-gray-500"></th>
                                <th class="px-2 py-2 text-xs text-gray-500"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach($produits as $produit)
                                <tr class="whitespace-nowrap">
                                    <td class="px-4 py-4 text-sm text-gray-500">
                                        {{ $produit->id }}
                                    </td>
                                    <td class="px-4 py-4">
                                        {{ $produit->reference }}
                                    </td>
                                    <td class="px-4 py-4">
                                        {{ $produit->libelle }}
                                    </td>
                                    <td class="px-4 py-4">
                                        {{ $produit->prix }}
                                    </td>
                                    <td class="px-4 py-4">
                                        {{ $produit->categorie->titre }}
                                    </td>
                                    <x-link-button href="{{ route('produits.show', $produit->id) }}">
                                        @lang('Show')
                                    </x-link-button>
                                    <x-link-button href="{{ route('produits.edit', $produit->id) }}">
                                        @lang('Edit')
                                    </x-link-button>
                                    <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $produit->id }}').submit();">
                                        @lang('Delete')
                                    </x-link-button>
                                    <form id="destroy{{ $produit->id }}" action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <footer class="card-footer is-centered">
                <br>
                {{ $produits->links() }}
            </footer>
        </div>
    </div>
</x-app-layout>