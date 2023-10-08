<div>
@livewireStyles()
    {{-- <select name="" id="" wire:model.change="livre_id">
        @foreach ($livres as $livre)
            <option value="{{ $livre->id }}">{{ $livre->nom }}</option>
        @endforeach
    </select> --}}
<input type="number" name="" id="" min=1 max=66 value="1" wire:model.change="livre_id">
    <select name="" id="" wire:model="chapitre">
        <option wire:loading>Chargement de données ...</option>
    </select>
    <p wire:model="chapitre">@php foreach ($words as $word) {
        $data[]=$word->chapitre;
    }
    var_dump($data);
    @endphp</p>
@livewireScripts()
</div>
