<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(Request $request)
  {
    $users = User::all();
    return $users;
  }

  public function findOne($id)
  {
    $address = User::find($id);
    return $address;
  }

  public function create(Request $request)
  {
    $data = $request->only(["name", "email", "password"]);

    $user = User::create($data);

    return $user;
  }
}
