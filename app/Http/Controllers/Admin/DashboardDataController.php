<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use App\Models\DashboardData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
        return $validated;
    }
    
    public function index()
    {
        $artItems= DashboardData::all();
        return view('admin.artists.index',compact("artItems"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.artists.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $valid_data=$this->validation($data); //questa riga richiama il metodo della f.validation e sost stringa 60 to 83
        $newArtist = new DashboardData();
        $newArtist->fill($valid_data); //prende tutti i dati dalla richiesta e li usa per popolare ma prima si validano i dati
        // $newArtist->title =$data['title'];          
        // $newArtist->description=$data['description'];   //da 58 a 61 canc
        // $newArtist->img = $data['img'];
        // $newArtist->author = $data['author'];
        $newArtist->save();

        return redirect()->route('admin.artists.show', $newArtist->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {    
        $artItems = DashboardData::find($id);
        return view('admin.artists.show', compact("artItems"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artItems = DashboardData::find($id);
        return view('admin.artists.edit', compact("artItems"));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except('_token' , '_method');
        $valid_data=$this->validation($data);
        $dashboardData = DashboardData::find($id);
        $dashboardData->update($valid_data);  
        return redirect()->route('admin.artists.index');
        // return('dati ignorati');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardData $dashboardData)
    {
        //
    }
}
