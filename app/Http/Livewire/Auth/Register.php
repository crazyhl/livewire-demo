<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    // 为了验证密码字段，不能采用 rules 属性，而采用 rules 方法
    protected function rules()
    {
        return [
            'name' => 'required|min:6|unique:user',
            'email' => 'required|email|unique:user',
            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
            'password_confirmation' => 'required',
        ];
    }

    public function register() {
        $this->validate();

        dd('验证通过');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
