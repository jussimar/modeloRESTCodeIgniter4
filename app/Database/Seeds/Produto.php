<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produto extends Seeder
{
    public function run()
    {
        $nome = ['Computador', "Notebook", "Tablet"];
        $valor = [5000, 15000, 3000];
        for($x = 0; $x < 3; $x++){

            $data = [
                'nome' => $nome[$x],
                'valor'    =>  $valor[$x],
            ];

            // Using Query Builder
            $this->db->table('produtos')->insert($data);
        }
    }
}