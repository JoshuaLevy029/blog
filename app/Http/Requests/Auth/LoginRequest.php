<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate() {
        $user = User::where('email', $this->input('email'))->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => 'User not registered',
            ]);
        }

        if (!Hash::check($this->input('password'), $user->password)) {
            throw ValidationException::withMessages([
                'passwword' => 'Email or password invalid',
            ]);
        }

        if (!Auth::loginUsingId($user->id, $this->filled('remember'))) {
            throw ValidationException::withMessages([
                'email' => "Couldn't authenticate",
            ]);
        }
    }
}
