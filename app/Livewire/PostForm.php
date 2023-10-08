<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Word;
use Livewire\Component;
use Ramsey\Uuid\Type\Integer;

class PostForm extends Component
{
    public int $livre_id=1;
    public $chapitre;
    public int $debut_verset;
    public int $fin_verset;

    public function mount()
    {
        $this->chapitre = Word::where("livre", $this->livre_id ?? '');
    }

    public function updateLivreId($newValue)
    {
        $this->chapitre = Word::where("livre", $newValue)->first()->get();
    }
    public function render()
    {
        $livres = Book::orderBy("id", "ASC")
            ->get(["id"]);
        $this->chapitre = Word::where("livre", $this->livre_id ?? '')
            ->get(["chapitre", "livre", "verset"]);
        return view('livewire.post-form', [
            "livres" => $livres,
            "words" => $this->chapitre,
        ]);
    }
}
