<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dates extends Component
{
    public function render()
    {
        //sesion de usuario
        $user = auth()->user();
        // dd($user->getSucursales);
        return view('livewire.dates', [
            'user' => $user,
            'servicios' => $user->getServicios,
            'colaboradores' => $user->getColaboradores,
            'sucursales' => $user->getSucursales,

        ]);
    }
}
