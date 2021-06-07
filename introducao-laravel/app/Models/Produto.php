<?php

namespace App\Models;

class Produto {
    const PRODUTOS = ['A', 'B', 'C'];

    static public function getProdutos (){
        return self::PRODUTOS;
    }

    static public function setProducts (){
        return 'New product';
    } 

    static public function delete () {
        return 'Delete';
    }
}