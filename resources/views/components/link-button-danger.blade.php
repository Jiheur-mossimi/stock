<td class="px-2 py-2">
    <a role="button" {{ $attributes->merge(['class' => 'inline-flex items-center px-2 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150' ]) }} >
        {{ $slot }}
    </a>
</td>