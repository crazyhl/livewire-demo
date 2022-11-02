<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use DragonCode\Support\Concerns\Makeable;
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
            'name' => 'required|min:6|unique:users',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
            'password_confirmation' => 'required',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        // 如果输入的是密码字段，需要跟验证字段同时验证
        if (in_array($propertyName, ['password', 'password_confirmation'])) {
            $this->validateOnly('password_confirmation');
            $this->validateOnly('password');
        }
    }

    public function register() {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => \Hash::make($this->password),
        ]);
//        dd($res);
        \Auth::login($user, true);
        return redirect()->intended('/post/show');

    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
