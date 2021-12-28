<?php

namespace Tests\Feature;

use App\Models\Categoria;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;



class CategoriaTest extends TestCase{


    /*
     *  sin parametros
    public function test_store(){
        $response = $this->post('/api/categorias',
        ["nom_categoria"=>""]);

        $response->assertJsonStructure(
            ['nom_categoria'])
            ->assertJson(['msg'=>'Categoria creada']) // status'=>'ok', 'msg'=>'Categoria creada'
            ->assertJson(['status'=>'ok']);
        $response->assertDatabaseHas('categorias', ['nom_categoria'=>'test']);
    }

    public function test_store(){
        $response = $this->post('/api/categorias',
            ['nom_categoria'=>'prueba test' ]
        );

        $response->assertJsonStructure(
            ['status','msg'])
            ->assertJson(['status'=>'ok'])
            ->assertJson(['msg'   =>'Categoria creada'])
            ->assertStatus(201);
    }


    public function test_store(){
        $response = $this->post('/api/categorias',
            ['nom_categoria'=>234543 ]
        );

        $response->assertJsonStructure(
            ['status','msg'])
            ->assertJson(['status'=>'error'])
            ->assertJson(['msg'   =>'The nom categoria must be a string.'])
            ->assertStatus(200);
    }

    // Si no hay datos
    public function test_index()
    {
        $response = $this->get('/api/categorias');
        $response->assertJsonStructure(
            ['status', 'msg'])
            ->assertJson(['status' => 'error'])
            ->assertJson(['msg' => 'No hay categorias']);
    }


    // Si hay datos
    public function test_index(){
        $response = $this->get('/api/categorias');
        $response->assertJsonStructure(
            ['status', 'msg','data'=>[
                '*'=>['id','nom_categoria','created_at','updated_at']
    ]])
            ->assertJson(['status' => 'ok'])
            ->assertJson(['msg'    => 'Listado de categorias']
            )->assertStatus(200);
    }

    // error por envio de parametro number
    public function test_update1(){
        $response = $this->json('PUT','/api/categorias/1',[
           // 'nom_categoria'=>'actualizada'
            'nom_categoria'=>432534
        ]);
        $response->assertJsonStructure(
            ['status', 'msg'])
            ->assertJson(['status' => 'error'])
            ->assertJson(['msg'   => 'The nom categoria must be a string.']
            )->assertStatus(202);
    }

    // error por no envio de parametros
    public function test_update2(){
        $response = $this->json('PUT','/api/categorias/1',[
         //   'nom_categoria'=>'Test actualizada 3'
        ]);
        $response->assertJsonStructure(
            ['status', 'msg'])
            ->assertJson(['status' => 'error'])
            ->assertJson(['msg'    => 'The nom categoria field is required.']
            )->assertStatus(202);
    }


    // error por arametro numerico
    public function test_update3(){
        $response = $this->json('PUT','/api/categorias/1',[
            'nom_categoria'=>234543
        ]);
        $response->assertJsonStructure(
            ['status', 'msg'])
            ->assertJson(['status' => 'error'])
            ->assertJson(['msg'    => 'The nom categoria must be a string.']
            )->assertStatus(202);
    }


    // status ok
    public function test_update(){
        $response = $this->json('PUT','/api/categorias/1',[
            'nom_categoria'=>'Test actualizada 4'
        ]);
        $response->assertJsonStructure(
            ['status', 'msg'])
            ->assertJson(['status' => 'ok'])
            ->assertJson(['msg'    => 'Categoria actualizada']
            )->assertStatus(201);
    }

    // estatus ok
    public function test_show1(){
        $response = $this->get('/api/categorias/1');
        $response->assertJsonStructure(
            ['status', 'msg','data'=>['id_categoria','nom_categoria','created_at','updated_at']
            ])
            ->assertJson(['status' => 'ok'])
            ->assertJson(['msg'    => 'Categoría']
            )->assertStatus(200);
    }

    // no existe categoria
    public function test_show2(){
        $response = $this->get('/api/categorias/40');
        $response->assertJsonStructure(
            ['status', 'msg'])
            ->assertJson(['status' => 'error'])
            ->assertJson(['msg'    => 'No existe categoría']
            )->assertStatus(202);
    }

    public function test_delete(){
        $response = $this->json('DELETE','/api/categorias/5');
        $response->assertJsonStructure(
            ['status', 'msg'])
            ->assertJson(['status' => 'ok'])
            ->assertJson(['msg'    => 'Elimino categoría']
            )->assertStatus(201);
    }
        */
}
