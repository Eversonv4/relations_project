<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
  public function index()
  {
    $invoices = Invoice::all();
    return $invoices;
  }

  public function create(Request $request)
  {
    $data = $request->only(["description", "value", "address_id", "user_id"]);

    $invoice = Invoice::create($data);

    return $invoice;
  }

  public function findOne($id)
  {
    $invoice = Invoice::find($id);
    $invoice["user"] = $invoice->user;
    $invoice["address"] = $invoice->address;
    return $invoice;
  }
}
