<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Mostrar información de un usuario.
     * @param  int  $id
     * @return Response
     */
    public function getEdit($id)
    {
        $id = ($id <= 10) ? $id : 10;
        return view('catalog.edit', ['id' => $id]);
    }
}
