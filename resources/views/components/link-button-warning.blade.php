<td class="px-2 py-2">
    <a role="button" {{ $attributes->merge(['class' => 'inline-flex items-center px-2 py-2 bg-orange-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-700 focus:bg-orange-700 active:bg-orange-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150' ]) }} >
        {{ $slot }}
    </a>
</td>