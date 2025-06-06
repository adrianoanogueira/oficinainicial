<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index() {
        $veiculos = Veiculo::all();
        return view('veiculos.index', compact('veiculos'));
    }

    public function create() {
        return view('veiculos.create');
    }

    public function store(Request $request) {
        $request->validate([
            'placa' => 'required|unique:veiculos',
            'chassi' => 'required|unique:veiculos',
            'cor' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        Veiculo::create($request->all());

        return redirect()->route('veiculos.index')->with('success', 'Veículo cadastrado com sucesso.');
    }

    public function edit(Veiculo $veiculo) {
        return view('veiculos.edit', compact('veiculo'));
    }

    public function update(Request $request, Veiculo $veiculo) {
        $request->validate([
            'placa' => 'required|unique:veiculos,placa,' . $veiculo->id,
            'chassi' => 'required|unique:veiculos,chassi,' . $veiculo->id,
            'cor' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        $veiculo->update($request->all());

        return redirect()->route('veiculos.index')->with('success', 'Veículo atualizado com sucesso.');
    }

    public function destroy(Veiculo $veiculo) {
        $veiculo->delete();
        return redirect()->route('veiculos.index')->with('success', 'Veículo excluído com sucesso.');
    }
}
