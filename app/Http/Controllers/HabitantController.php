<?php

namespace App\Http\Controllers;

use App\Models\Habitant;
use App\Models\Ville;
use Illuminate\Http\Request;

class HabitantController extends Controller
{
    public function index() {
        $list = Habitant::all();
        return view("habitants.index", ["list" => $list]);
    }

    public function create() {
        $villes = Ville::all();
        return view("habitants.create", ["villes" => $villes]);
    }

    public function store(Request $request) {
        if ($request->hasFile("photo")) {
            $extension = $request->photo->extension();
            $filename = $request->cin . "." . $extension;
            $request->photo->storeAs("public/" . $filename);
        }

        $habitant = new Habitant();
        $habitant->cin = $request->cin;
        $habitant->nom = $request->nom;
        $habitant->prenom = $request->prenom;
        $habitant->ville_id = $request->ville_id;
        $habitant->photo = @$filename;
        $habitant->save();

        return redirect("/habitants");
    }

    public function edit($id) {
        $villes = Ville::all();
        $habitant = Habitant::find($id);
        return view("habitants.edit", ["habitant" => $habitant, "villes" => $villes]);
    }

    public function update(Request $request) {
        if ($request->hasFile("photo")) {
            $extension = $request->photo->extension();
            $filename = $request->cin . "." . $extension;
            $request->photo->storeAs("public/" . $filename);
        }

        $habitant = Habitant::find($request->id);
        $habitant->cin = $request->cin;
        $habitant->nom = $request->nom;
        $habitant->prenom = $request->prenom;
        $habitant->ville_id = $request->ville_id;
        if (@$filename) {
            $habitant->photo = $filename;
        }
        $habitant->save();

        $villes = Ville::all();
        $villes->each(function($ville) {
            $ville->nombreHabitats = $ville->habitats()->count();
            $ville->save();
        });

        return redirect("/habitants");
    }

    public function destroy($id) {
        Habitant::destroy($id);
        return redirect("/habitants");
    }
}
