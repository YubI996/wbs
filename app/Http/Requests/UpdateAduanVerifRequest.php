<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Aduan;

class UpdateaduanVerifRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'status_verifikasi' => 'required',
            'catatan_verifikasi' => 'required',
            'file_verifikator' => 'required',
        ];
        
        return $rules;
    }
}
