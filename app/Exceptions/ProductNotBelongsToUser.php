<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
    	return ['data'=> 'Product NotBelongs To User']; 
    }
}
