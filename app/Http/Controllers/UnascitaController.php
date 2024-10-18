<?php

namespace App\Http\Controllers;

use App\Models\Unascita;
use Illuminate\Http\Request;

/**
 * Class UnascitaController
 * @package App\Http\Controllers
 */
class UnascitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unascitas = Unascita::paginate(10);

        return view('unascita.index', compact('unascitas'))
            ->with('i', (request()->input('page', 1) - 1) * $unascitas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unascita = new Unascita();
        return view('unascita.create', compact('unascita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Unascita::$rules);

        $unascita = Unascita::create($request->all());

        return redirect()->route('unascitas.index')
            ->with('success', 'Unascita created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unascita = Unascita::find($id);

        return view('unascita.show', compact('unascita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unascita = Unascita::find($id);

        return view('unascita.edit', compact('unascita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Unascita $unascita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unascita $unascita)
    {
        request()->validate(Unascita::$rules);

        $unascita->update($request->all());

        return redirect()->route('unascitas.index')
            ->with('success', 'Unascita updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $unascita = Unascita::find($id)->delete();

        return redirect()->route('unascitas.index')
            ->with('success', 'Unascita deleted successfully');
    }
}
