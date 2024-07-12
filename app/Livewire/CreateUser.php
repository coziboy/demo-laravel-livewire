<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateUser extends Component
{
    #[Validate]
    public $name;

    #[Validate]
    public $email;

    #[Validate]
    public $password;

    public function render()
    {
        return view('livewire.create-user');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6'],
        ];
    }

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->dispatch('user-created');
    }

    #[On('reload-page')]
    public function reloadPage()
    {
        $this->redirect(route('dashboard'));
    }
}
