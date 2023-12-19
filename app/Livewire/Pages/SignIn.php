<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class SignIn extends Component
{
    public function render()
    {
        return view('livewire.pages.sign-in');
    }

    public function redirectToSignUp()
    {
        return $this->redirect('/signup', navigate: true);
    }
}
