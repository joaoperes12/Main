<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\AlterarPasswordRequest;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if (count($request->all()) == 0) {
           $users = User::all();
       } else {
           $users = User::query();
           if ($request->filled('name')) {
               $users->where('name', 'like', '%' . $request->name . '%');
           }
           if ($request->filled('email')) {
               $users->where('email', 'like', '%' . $request->email . '%');
           }
           if ($request->filled('role')) {
               $users->where('role', $request->role);
           }
           $users=$users->get();
       }
       return view('users.list', compact("users"));
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        return view('users.add', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreUserRequest $request)
    {
       $fields = $request->validated();
       $user = new User;
       $user->fill($fields);
       $user->password = Hash::make('password');
       if ($request->hasFile('photo')) {
           $photo_path = $request->file('photo')->store('public/users_photos');
           $user->photo = basename($photo_path);
       }
       $user->save();
       $user->sendEmailVerificationNotification();
       return redirect()->route('users.index')->with('success', 'Utilizador criado com sucesso');
   }

   public function show(User $user)
   {
       return view('users.show',compact("user"));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
       $fields = $request->validated();
       $user->fill($fields);
       if ($request->hasFile('photo')) {
           if (!empty($user->photo)) {
               Storage::disk('public')->delete('users_photos/' . $user->photo);
           }
           $photo_path = $request->file('photo')->store('public/users_photos');
           $user->photo = basename($photo_path);
       }
       $user->save();
       return redirect()->route('users.index')->with('success', 'Utilizador atualizado com sucesso');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
     $user->delete();
     return redirect()->route('users.index')->with('success', 'O utilizador foi eliminado com sucesso');
 }

 public function send_reactivate_email(User $user)
 {
   $user->sendEmailVerificationNotification();
   return redirect()->route('users.index')->with('success', 'O email foi enviado ao utilizador');
}

public function editpass(){
return view('auth.alterarpass');

}

public function updatepass(AlterarPasswordRequest $request ){
       $fields = $request->validated();

 $user=auth()->user();

 $user->password=Hash::make($fields['password']);
 $user->save();
return redirect()->route('admin')->with('success', 'Password alterada com sucesso');
}

}
