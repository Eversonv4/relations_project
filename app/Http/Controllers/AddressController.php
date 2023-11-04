<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
  public function index(Request $request)
  {
    $addresses = Address::all();
    return $addresses;
  }

  public function findOne($id)
  {
    $address = Address::find($id);
    $address["user"] = $address->user;
    return $address;
  }

  public function create(Request $request)
  {
    $data = $request->only(["address"]);

    $address = Address::create($data);

    return $address;
  }
}
