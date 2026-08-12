@props(["code" => "", "title" => "", "homeBtn" => true])
@php($homeUrl = Route::has("web.home") ? route("web.home") : "/")

<div class="container my-indent-double">
    <div class="row">
        <div class="col w-full xl:w-1/2">
            <div class="h-full flex flex-col justify-center space-y-indent-lg">
                <div class="space-y-indent">
                    <div class="text-8xl font-semibold">{{ $code }}</div>
                    <div class="text-5xl font-semibold">{{ $title }}</div>
                    @isset($slot)
                        <div class="space-y-indent-xs">{{ $slot }}</div>
                    @endisset
                </div>
                @if ($homeBtn)
                    <div>
                        <a href="{{ $homeUrl }}" class="btn btn-primary">
                            Вернуться на главную
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <div class="hidden xl:block col w-full xl:w-1/2 mb-indent xl:mb-0">
            @isset($code)
                <img class="img-fluid" src="{{ asset("imgs/gis/{$code}.png") }}" alt="{{ $code }}">
            @endisset
        </div>
    </div>
</div>
