<div class="row">
    <div class="col w-full">
        <div class="card overflow-visible">
            <div class="card-header">
                <h3 class="text-3xl font-bold">Dropdown and Modal</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col w-1/3">
                        <div class="space-y-indent">
                            <div>
                                <h4 class="text-2xl card-title">Dropdown</h4>

                                <x-tt::dropdown>
                                    <x-slot name="text">Click</x-slot>
                                    <x-slot name="content">
                                        <div class="px-indent-half">
                                            Hello
                                        </div>
                                    </x-slot>
                                </x-tt::dropdown>
                            </div>
                             <div>
                                 <h4 class="text-2xl card-title">Modal without livewire</h4>
                                 <button type="button" class="btn w-full btn-outline-primary" x-data @click="$dispatch('show-normal-modal')">
                                     Click me
                                 </button>
                                 <x-tt::modal.aside direction="left" id="modalWithoutLivewire" event="show-normal-modal">
                                     <x-slot name="title">Aside title</x-slot>
                                     <x-slot name="content">Hello</x-slot>
                                 </x-tt::modal.aside>
                             </div>
                        </div>
                    </div>

                    <div class="col w-2/3">
                        <livewire:tt-example-form />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
