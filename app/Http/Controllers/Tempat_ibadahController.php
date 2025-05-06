<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tempat_ibadahController extends Controller
{
    public function getData()
    {

        $ibadah = [
            ['id' => 1, 'nama' => 'GPIB Immanuel', 'tiket' => 2],
            ['id' => 2, 'nama' => 'Paroki Santo Petrus', 'tiket' => 3],
            ['id' => 3, 'nama' => 'HKBP Batam Centre', 'tiket' => 4],
            
        ];
       
        return $ibadah;
    }


public function tampilkan(){
    $data = $this->getData();
    return view('Tempat_ibadahview', compact('data'));
}

}