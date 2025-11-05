@props([
    'active' => false,
    'type' => 'a',
])

<!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
@if ($type === 'a')
    <a aria-current="{{ $active ? 'page' : 'false' }}"
        class="block rounded-md {{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} px-3 py-2 text-sm font-medium text-white"
        {{ $attributes }}>
        {{ $slot }}
    </a>
@endif

@if ($type === 'btn')
    <button
        class="rounded-xl bg-slate-800 border-blue-900 text-gray-300 hover:bg-blue-800 hover:text-white px-3 py-2 text-sm font-medium cursor-pointer"
        {{ $attributes }}>
        {{ $slot }}
    </button>
@endif
