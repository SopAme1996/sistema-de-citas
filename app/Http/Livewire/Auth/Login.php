<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component
{

    public $nickName='';
    public $password='';

    protected $rules= [
        'nickName' => 'required',
        'password' => 'required'

    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function mount() {
      
        $this->fill(['nickName' => 'Lsolis', 'password' => 'secret']);    
    }
    
    public function store()
    {
        $attributes = $this->validate();

        if (! auth()->attempt([...$attributes, 'status' => 1])) {
            //Verificamos la informacion del request
            $messageError = [];
            $userInfo = User::WHERE('nickName', $this->nickName)->WHERE('password', $this->password)->first();
            if(!$userInfo){
                 $messageError = ['nickName' => 'Your nickName credentials could not be verified.'];
            }else{
                //validamos las contrasenas
                $isSamePassword = Hash::check($userInfo->password, $this->password);
                if(!$isSamePassword){
                     $messageError = ['password' => 'Your password credentials could not be verified.'];
                }
            }

            
            throw ValidationException::withMessages($messageError);
        }

        session()->regenerate();

        return redirect('/dashboard');

    }
}
