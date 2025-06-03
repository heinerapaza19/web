<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; // Asegúrate de tener este modelo creado

class ProductoController extends Controller
{
    public function inicio(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $productos = Producto::where('nombre', 'like', "%$query%")
                ->orWhere('detalle', 'like', "%$query%")
                ->get();
        } else {
            $productos = Producto::all();
        }

        return view('inicio', compact('productos'));
    }
}
