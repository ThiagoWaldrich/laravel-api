<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll()
    {

        $bands = $this->getBands();

        return response()->json($bands);
    }
    public function getById($id){
        $band = null;

        foreach($this->getBands() as $_band){
            if($_band['id']==$id)
            $band = $_band;
        }
        return $band ? response()->json($band)
        : abort(code:404);
        //Se o id da banda for igual ao id chamado, retorne
        //na variável band
    }

    protected function getBands()
    {
        return [
            [
                'id' => 1, 'name' => 'Angra', 'gender' => 'power metal'
            ],
            [
                'id' => 2, 'name' => 'Shaman', 'gender' => 'power metal'
            ],
            [
                'id' => 3, 'name' => 'Stratovarius', 'gender' => 'power metal'
            ],
            [
                'id' => 4, 'name' => 'Viper', 'gender' => 'power metal'
            ],
            [
                'id' => 5, 'name' => 'Edu Falaschi', 'gender' => 'power metal'
            ]
        ];
    }
}
//php artisan make:controller nomedocontroller