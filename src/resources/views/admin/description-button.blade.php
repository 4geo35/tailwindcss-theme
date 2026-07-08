@props(["id" => "infoHidden"])
<button type="button" class="text-info hover:text-info-hover ml-indent-half cursor-pointer"
        x-data="{}" x-on:click.prevent.stop="document.getElementById('{{ $id }}').click()">
    <x-tt::ico.question />
</button>
