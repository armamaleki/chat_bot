<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Userslist extends Component
{
    public $q;
    public function render()
    {
        $users = User::whereLike('name', '%' . $this->q . '%')->get();
        return view('livewire.userslist' , compact('users'));
    }
}
