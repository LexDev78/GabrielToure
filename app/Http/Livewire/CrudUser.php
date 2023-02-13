<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Type_user;
use Livewire\Component;

class CrudUser extends Component
{
    public $fields =[];
    public $types;
    public $eUser;
    public $users;
    public function addField(){
        $this->fields[] = count($this->fields) + 1;
    }


    public function removeField($key)
    {
        unset($this->fields[$key]);
    }
    public function editUser($id)
    {
        $this->eUser = User::find($id);
        
    }
    public function render()
    {
        $this->types =  Type_user::all();
        $this->users = User::all();
        $this->editUser(null);
        return view('livewire.crud-user');
    }


}
