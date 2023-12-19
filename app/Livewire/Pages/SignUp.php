<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class SignUp extends Component
{
    public function render()
    {
        return view('livewire.pages.sign-up');
    }

    public function redirectToSignIn()
    {
        return $this->redirect('/', navigate: true);
    }
}
