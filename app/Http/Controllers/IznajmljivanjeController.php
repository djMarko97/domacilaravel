<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iznajmljivanje;

class IznajmljivanjeController extends Controller
{
    public function vratiSvaIznajmljivanja(){
        $data = Iznajmljivanje::join('knjigas', 'knjigas.id','=','iznajmljivanjes.Knjiga')
                        ->get(['iznajmljivanjes.Ime','iznajmljivanjes.Prezime','knjigas.Naziv','knjigas.Autor','knjigas.Broj strana']);
        
        return $data;
    }

    public function dodajIznajmljivanje(){
        request() -> validate([
            'Ime' => 'required',
            'Prezime' => 'required',
            'Knjiga' => 'required'
        ]);
        return Iznajmljivanje::create([
            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'Knjiga' => intval(request('Knjiga'))
        ]);
    }
}
