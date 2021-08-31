<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateEndereco;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EnderecoController extends Controller
{
    private $repository;

    public function __construct(Endereco $endereco)
    {
        $this->repository = $endereco;
    }

    public function index(){
        $enderecos = $this->repository->latest()->paginate(10);
        return view('admin.pages.enderecos.index', [
            'enderecos' => $enderecos,
        ]);
    }

    public function create(){
        return view('admin.pages.enderecos.create');
    }

    public function store(StoreUpdateEndereco $request){
        //dd($request->all()); conferir se está pegando dados
        $this->repository->create($request->all());
        return redirect()->route('enderecos.index');
    }

    public function show($id){
        $endereco = $this->repository->where('id', $id)->first();
        if(!$endereco)
            return redirect()->back();

        return view('admin.pages.enderecos.show',[
            'endereco' => $endereco
        ]);
    }

    public function destroy($id){
        $endereco = $this->repository->where('id', $id)->first();
        if(!$endereco)
            return redirect()->back();

        $endereco->delete();

        return redirect()->route('enderecos.index');
    }

    public function search(Request $request){
        //dd($request->all());
        $filters = $request->except('_token');
        $enderecos = $this->repository->search($request->filter);

        return view('admin.pages.enderecos.index', [
            'enderecos' => $enderecos,
            'filters' => $filters,
        ]);
        /*return view('admin.pages.cadastros.funcionarios.index', [
            'enderecos' => $enderecos,
            'filters' => $filters,
        ]);*/
    }

    public function edit($id){
        $endereco = $this->repository->where('id', $id)->first();
        if(!$endereco)
            return redirect()->back();

        return view('admin.pages.enderecos.edit', [
            'endereco' => $endereco
        ]);
    }

    public function update(StoreUpdateEndereco $request, $id){
        $endereco = $this->repository->where('id', $id)->first();
        if(!$endereco)
            return redirect()->back();

        //dd($request->all());
        $endereco->update($request->all());
        return redirect()->route('enderecos.index');
    }

}
