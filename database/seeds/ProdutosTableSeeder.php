<?php

use Illuminate\Database\Seeder;
use App\User;

class ProdutosTableSeeder extends Seeder{

    public function run(){

        DB::table('produtos')->insert([
            'id' =>'1',
           	'nome' =>'Camiseta Anime BNHA',
            'arquivo' =>'/img/imgLoja/cami1.jpg',
            'valor'=>'38.00',
            'marca' =>'Blackened',
            'modelo' =>'Raglan manga curta unissex',
            'material' =>'Poliéster',
            'desenho' =>'Sublimado',
            'Categoria'=>'Camiseta',
            'cliente'=>1,
        ]);

        DB::table('produtos')->insert([
            'id' =>'2',
           	'nome' =>'Caneca: BNHA',
            'arquivo' =>'/img/imgLoja/cami2.jpg',
            'valor'=>'29.00',
            'marca' =>'Kaioken Store',
            'modelo' =>'My Hero Acadêmia',
            'material' =>'Cerâmica',
            'desenho' =>'Sublimado',
            'Categoria'=>'Xícaras',
            'cliente'=>1,
        ]);
        DB::table('produtos')->insert([
            'id' =>'3',
           	'nome' =>'Caneca: BNHA',
            'arquivo' =>'/img/imgLoja/cami3.jpg',
            'valor'=>'29.00',
            'marca' =>'Kaioken Store',
            'modelo' =>'My Hero Academia',
            'material' =>'Cerâmica',
            'desenho' =>'Sublimado',
            'Categoria'=>'Xícaras',
            'cliente'=>1,
        ]);
        DB::table('produtos')->insert([
            'id' =>'4',
           	'nome' =>'Pop Funko Animation BNHA- All Might',
            'arquivo' =>'/img/imgLoja/cami4.jpg',
            'valor'=>'150.00',
            'marca' =>' My Hero Academia',
            'modelo' =>'All Might',
            'material' =>'Vinil',
            'desenho' =>'Tinta',
            'Categoria'=>'Bonecos de Funko',
            'cliente'=>1,
        ]);
    }
}
 	