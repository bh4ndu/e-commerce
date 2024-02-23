<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Electronicos;
use App\Models\Entretenimiento;
use App\Models\Ropa;

class registrarProductoController extends Controller
{
    public function index(Request $request) {
        return view('registrarProducto');
    }

    public function store(Request $request)
    {
        // Dependiendo de la opción seleccionada en 'area', se instancia el modelo correspondiente
        switch ($request->area) {
            case 'electronicos':
                $producto = new Electronicos();
                break;
            case 'entretenimiento':
                $producto = new Entretenimiento();
                break;
            case 'ropa':
                $producto = new Ropa();
                break;
            default:
                // En caso de que la especialidad no esté definida correctamente, puedes manejarlo aquí
                // Por ejemplo, puedes redirigir de nuevo al formulario con un mensaje de error.
                return redirect()->back()->with('error', 'Área no válida');
        }

        // Asignar los valores recibidos del formulario al modelo correspondiente
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->marca = $request->marca; // Nota: aquí usé 'nombre_usuario' en lugar de 'marca', ajusta según lo necesario
        $producto->caracteristicas = $request->caracteristicas; // Ajusta según la estructura de tu formulario
        $producto->stock = $request->stock; // Nota: aquí usé 'email' en lugar de 'stock', ajusta según lo necesario

        // Guardar el producto en la base de datos
        $producto->save();

        // Redirigir de nuevo al formulario con un mensaje de éxito
        return redirect()->back()->with('success', 'Producto almacenado correctamente');
    }
}

