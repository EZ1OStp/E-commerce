<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();

        return view('admin.produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantite' => ['required', 'numeric']
        ]);

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['price'] = $request->price;
        $data['quantite'] = $request->quantite;



        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $fileImageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileImageName);
            $data['image'] = $fileImageName;
        }



        Produit::create($data);



        session()->flash('success', 'Enregistrement effectuer');


        return redirect()->route('produit.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = produit::find($id);

        return view('admin.produits.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = produit::find($id);
        return view('admin.produits.update', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if (isset($request->description)){
            $data['description'] = Produit::find($id)->description  ;
        }

        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantite' => ['required', 'numeric']
        ]);

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['price'] = $request->price;
        $data['quantite'] = $request->quantite;



        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $fileImageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileImageName);
            $data['image'] = $fileImageName;
        }

        $produit = produit::find($id);
        $produit->update($data);

        return redirect()->route('produit.index')->with('info', 'Modification a ??t?? r??alise avec succ??s');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = produit::find($id);

        $produit->delete();

        return redirect()->route('produit.index')->with('success', 'Suppression eff??ctuer - produit'.' '.$produit->title.' id '.$produit->id  );
    }
}
