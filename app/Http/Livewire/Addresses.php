<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Address;

class Addresses extends Component
{
    public $addresses;
    public $street;
    public $neighborhood;
    public $city;
    public $number;
    public $complement;
    public $isOpen = 0;

    public function render()
    {
        $this->addresses = Address::all();
        return view('livewire.address');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        $this->$addresses = '';
        $this->$street = '';
        $this->$neighborhood = '';
        $this->$city = '';
        $this->$number = '';
        $this->$complement = '';
    }
}