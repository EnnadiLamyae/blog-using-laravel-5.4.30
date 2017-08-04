<?php

namespace App\Http\Requests;

use App\Mail\Welcome;
use Illuminate\Foundation\Http\FormRequest;
use App\Mail\Hello;
use App\User;

class RegistrationRequest extends FormRequest
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
        return [
            'name'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ];
    }
    public function persist(){

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        auth()->login($user);
        \Mail::to($user)->send(new Hello($user));
    }
}
