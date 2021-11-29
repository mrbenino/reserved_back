<?php

namespace App\Http\Controllers;

use App\Models\Reserved;
use Illuminate\Http\Request;

class ReservedController extends Controller
{

  public function createdRecord(Request $request)
  {
    $reserved = Reserved::create([
      'hall' => $request->hall,
      'date' => $request->date,
      'name' => $request->name
    ]);
    return response()->json($reserved);
  }
}
