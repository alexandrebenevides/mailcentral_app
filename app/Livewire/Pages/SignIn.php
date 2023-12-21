<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Services\Contracts\AuthServiceInterface;

class SignIn extends Component
{
    protected AuthServiceInterface $authService;
    
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.pages.sign-in')
            ->layout('livewire.layouts.app');
    }

    public function boot(AuthServiceInterface $authService)
    {
        $this->authService = $authService;
    }

    public function redirectToSignUp()
    {
        return $this->redirect('/signup', navigate: true);
    }

    public function authUser()
    {
        $credentials = $this->only(['email', 'password']);
        $this->authService->authUser($credentials);
    }
}
