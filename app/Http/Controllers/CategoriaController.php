<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Validator;


class CategoriaController extends Controller{

    public function index(){
        $categorias = Categoria::all();
        if($categorias->count() == 0){
            return response()->json(['status'=>'error','msg'=>'No hay categorias'], 202 );
        }else{
            return response()->json(['status'=>'ok','msg'=>'Listado de categorias','data'=>$categorias], 200 );
        }
    }


    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'nom_categoria'=>'required|string'
            ]);
        if($validator->fails()){
            return response()->json(['status'=>'error', 'msg'=> $validator->errors()->first() ],202);
        }
        Categoria::create($request->all());
        return response()->json(['status'=>'ok', 'msg'=>'Categoria creada'],201 );
    }


    public function show($id){
        $categoria = Categoria::find($id);
        if($categoria == null){
            return response()->json(['status'=>'error','msg'=>'No existe categoría'], 202 );
        }else{
            return response()->json(['status'=>'ok','msg'=>'Categoría','data'=>$categoria], 200 );
        }
        return $categoria;
    }


    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'nom_categoria'=>'required|string'
        ]);

        $categoria = Categoria::find($id);
        if($categoria == null ){
            return response()->json(['status'=>'error', 'msg'=> 'Categoria no existe' ],202);
        }

        if($validator->fails()){
            return response()->json(['status'=>'error', 'msg'=> $validator->errors()->first() ],202);
        }else{
            $categoria->nom_categoria = $request->input('nom_categoria');
            $categoria->descript      = ($request->input('descript')??'');
            $categoria->save();
            return response()->json(['status'=>'ok', 'msg'=>'Categoria actualizada'],201 );
        }
    }


    public function destroy($id){
        $categoria = Categoria::find($id);
        if($categoria == null){
            return response()->json(['status'=>'error', 'msg'=> 'No elimino categoria no existe' ],202);
        }else{
            $categoria->delete();
            return response()->json(['status'=>'ok', 'msg'=> 'Elimino categoría' ],201);
        }
    }
}
