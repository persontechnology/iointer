<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;


class UserPolicy
{
    use HandlesAuthorization;

    public function eliminarCliente(User $user, User $model)
    {
        if($model->hasRole('Cliente') && $model->id != $user->id){
            return true;
        }

    }


    public function editarCliente(User $user, User $model)
    {
        if($model->hasRole('Cliente') && $model->id != $user->id){
            return true;
        }

    }
}
