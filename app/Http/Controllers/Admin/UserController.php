<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

use App\Models\User;

use Illuminate\Http\Request;
class UserController extends Controller
{
    //
    public function index(){
        $users = User::paginate(15); //all();
        return view('admin.users.index',compact('users'));
    }
   public function create(){
        return view('admin.users.create');
    }
    public function store(StoreUserRequest $request)
    {
        User::create([
            'name'     =>$request->name,
            'email'    =>$request->email,
            'password' =>bcrypt($request->password),
        ]);
        return redirect()
            ->route('users.index')
            ->with('sucess','Usuario criado com sucesso!');
    }
    public function update(UpdateUserRequest $request,string $id){
        if (!$user = User::find($id)){
            return black()->with('mensagem','Usuario nao encontrado');
        }
        $user->update($request->only([
            'name',
            'email',
        ]));
       return redirect()
            ->route('users.index')
            ->with('sucess','Usuario editado com sucesso');
    }
}
