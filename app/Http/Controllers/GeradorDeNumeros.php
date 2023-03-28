<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeradorDeNumeros extends Controller
{
    public function geraNumero($number){

        if ($number > 9) {
            throw new \Exception('Número maior que 9!');
        }
    
        try {
            $randnumber = range(0,9);
            shuffle($randnumber);
            $finalNumber = [];

            for ($i = 0; $i < $number; $i++) {
                $finalNumber[] = array_pop($randnumber);
            }
 
            return json_encode($finalNumber);
            
        } catch (\Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }    
    } 
}
