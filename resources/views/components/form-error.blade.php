@props(['name'])

@error($name)
    <p class="test-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
@enderror
