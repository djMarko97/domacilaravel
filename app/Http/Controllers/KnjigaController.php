<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knjiga;

class KnjigaController extends Controller
{
    public function vratiSveKnjige(){
        return Knjiga::all();
    }

    public function dodajKnjigu(){
        request() -> validate([
            'Naziv' => 'required',
            'Autor' => 'required',
            'Broj strana' => 'required',
            'Izdavac' => 'required',
            'Zanr' => 'required'
        ]);
        return Knjiga::create([
            'Naziv' => request('Naziv'),
            'Autor' => request('Autor'),
            'Broj strana' => request('Broj strana'),
            'Izdavac' => request('Izdavac'),
            'Zanr' => request('Zanr')
        ]);
    }

    public function izmeniKnjigu(Knjiga $knjiga){
        request() -> validate([
            'Naziv' => 'required',
            'Autor' => 'required',
            'Broj strana' => 'required',
            'Izdavac' => 'required',
            'Zanr' => 'required'
        ]);
        
        $success = $knjiga -> update([
            'Naziv' => request('Naziv'),
            'Autor' => request('Autor'),
            'Broj strana' => request('Broj strana'),
            'Izdavac' => request('Izdavac'),
            'Zanr' => request('Zanr')
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function izbrisiKnjigu(Knjiga $knjiga){
        $success = $knjiga -> delete();

        return [
            'success' => $success
        ];

    }
}
