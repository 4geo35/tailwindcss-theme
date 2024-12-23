@props(['name' => '', 'active' => 'bg-secondary/20', 'passive' => 'bg-white'])
<li>
    <button type="button" {{ $attributes->merge(['class' => 'w-full']) }}
            @click="show = '{{ $name }}'"
            :class="{ '{{ $active }}': show === '{{ $name }}', '{{ $passive }}': show !== '{{ $name }}' }">
        {{ $slot }}
    </button>
</li>
