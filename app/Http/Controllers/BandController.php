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
