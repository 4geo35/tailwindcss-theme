<div class="card bg-body/15">
    <div class="card-body">
        <div class="relative my-indent min-h-[48px] flex items-center justify-start">
            @isset($wirePlaceholderTitle)
                <div class="font-medium text-2xl">{{ $wirePlaceholderTitle }}</div>
            @endisset
            <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center duration-150 ease-in-out transition text-warning">
                <x-tt::ico.loading class="animate-[spin_2s_linear_infinite]" width="48" height="48" />
            </div>
        </div>
    </div>
</div>
