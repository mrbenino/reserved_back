<?php

namespace App\Http\Requests;

use http\Client\Request;
use Illuminate\Foundation\Http\FormRequest;

class ReservedRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @param Request $request
   * @return int
   */
  public function rules(Request $request): array
  {
    return [
      'hall' => 'required',
      'date' => 'required',
      'name' => 'required'
    ];
  }
}
