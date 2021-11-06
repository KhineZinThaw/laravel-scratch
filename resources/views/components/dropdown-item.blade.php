@props(['href'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:rext-white focus:text-white']) }}>
    {{ $slot }}
</a>
