@props(['id' => null, 'event' => null, 'direction' => 'right'])
@php($type = 'aside-' . $direction)
<x-tt::modal :id="$id" :event="$event" :type="$type" {{ $attributes }}>
    @isset($title)
        <div class="text-lg font-medium px-indent py-indent flex justify-between items-center">
            {{ $title }}
            <button type="button" x-on:click="show = false" class="focus:ring-0 group cursor-pointer text-body/40 hover:text-body">
                <x-tt::ico.cross class="transition-colors duration-300 ease-in-out" />
            </button>
        </div>
    @endisset

    <div class="p-indent">
        {{ $content }}
    </div>
</x-tt::modal>
