<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
 use HandlesAuthorization;
 public function before($user, $ability)
 {
 if ($user->isAdmin()) {
 return true;
 }
 }

 public function viewAny(User $user)
 {
 return true;
 }

 public function view(User $user, User $model)
 {
 return true;
 }

 public function create(User $user)
 {
 return false;
 }

 public function update(User $user, User $model)
 {
 if ($user->id==$model->id){
return true;
 }
 return false;
 }

 public function updateRole(User $user, User $model)
 {
 return false;
 }

 public function delete(User $user, User $model)
 {
 return false;
 }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */

}
