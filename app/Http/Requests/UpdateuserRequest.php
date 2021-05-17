<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\user;
use Illuminate\Support\Facades\Validator;


class UpdateuserRequest extends FormRequest
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
            'nip' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username'.','.$this->route('user'),
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email'.','.$this->route('user'),
            'password' => 'required|string|max:255',
            'role_id' => 'required|integer',
            'avatar' => 'nullable|string|max:255',
            'tempat' => 'nullable|string|max:255',
            'tanggal' => 'nullable',
            'jabatan' => 'nullable|string|max:255',
            'pangkat' => 'nullable|string|max:255',
            'instansi' => 'nullable|string|max:255',
            'unit' => 'nullable|string|max:255',
            'kota' => 'nullable|string|max:255',
            'nohp' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'nolain' => 'nullable|string|max:255',
            'email_verified_at' => 'nullable',
            'remember_token' => 'nullable|string|max:100',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
        return $rules;
    }
}
