<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PostalModel;
use App\Http\Requests\PostalRequest;
use Illuminate\Http\JsonResponse;

class PostalController extends Controller
{
    private $objPostal;

    public function __construct()
    {
        $this -> objPostal = new PostalModel();
    }
    public function index()
    {
        $postal = $this -> objPostal -> all() -> sortBy('id');
        return view('index', compact('postal'));
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
    public function store(PostalRequest $request): JsonResponse
    {
        $request->validate([
            'titulo' => 'required',
            'conteudo' => 'required',
        ]);
        PostalModel::create([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
        ]);
        return response()->json(['success' => 'Item criado com sucesso.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $postal=$this->objPostal->find($id);
        return view('index', compact('postal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostalRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $del=$this->objPostal->destroy($id);
        return($del)?"sim":"não";
    }
}
