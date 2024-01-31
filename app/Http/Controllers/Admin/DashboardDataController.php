<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\DashboardData;
use App\Http\Controllers\Controller; 

class DashboardDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function validation($data){  //metodo a parte per la validation
        $validated = Validator::make($data,[    //accetta 3 argomenti dato da validare, primo array con regole e secondo array con messaggi
            'title'=>'required|max:50',
            'description'=>'required|min:20',
            'img'=>'required',
            'author'=>'required|max:50',
        ],
        [
            'title.required'=>'Requisito Necessario',
            'title.max'=>'Numero caratteri consentiti superato',
            'description.required'=>'Requisito Necessario',
            'description.min'=>'Numero caratteri minimi non raggiunto',
            'img.required'=>'Requisito Necessario',
            'author.required'=>'Requisito Necessario',
            'author.max'=>'Numero caratteri consentiti superato',
        ])->validate();
        return validated;
    }
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DashboardData $dashboardData)
    {
        $data = $request->all();
        $valid_data=$this->validation($data); //questa riga richiama il metodo della f.validation e sost stringa 60 to 83
        $newArtist = new DashboardData();
        $newArtist->fill($valid_data); //prende tutti i dati dalla richiesta e li usa per popolare ma prima si validano i dati
        $newArtist->save();

        return redirect()->route('dashboard.admin.show', $newArtist->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardData $dashboardData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DashboardData $dashboardData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardData $dashboardData)
    {
        //
    }
}
