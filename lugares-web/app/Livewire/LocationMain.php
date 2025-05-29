<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Location;
use Livewire\Attributes\On;

class LocationMain extends Component
{
    use WithPagination;

    public $search;
    public $isOpen = false;
    public $location;

    public $nombreLugar;
    public $region;
    public $provincia;
    public $distrito;
    public $descripcion;

    public function render()
    {
        $locations = Location::where('nombreLugar', 'like', '%' . $this->search . '%')
            ->orWhere('region', 'like', '%' . $this->search . '%')
            ->orWhere('provincia', 'like', '%' . $this->search . '%')
            ->orWhere('distrito', 'like', '%' . $this->search . '%')
            ->orWhere('descripcion', 'like', '%' . $this->search . '%')
            ->paginate();

        return view('livewire.location-main', compact('locations'));
    }

    public function create()
    {
        $this->isOpen = true;
        $this->reset(['location', 'nombreLugar', 'region', 'provincia', 'distrito', 'descripcion']);
    }

    public function edit(Location $location)
    {
        $this->location = $location;
        $this->nombreLugar = $location->nombreLugar;
        $this->region = $location->region;
        $this->provincia = $location->provincia;
        $this->distrito = $location->distrito;
        $this->descripcion = $location->descripcion;
        $this->isOpen = true;
    }

    public function store()
    {
        $this->validate([
            'nombreLugar' => 'required',
            'region' => 'required',
            'provincia' => 'required',
            'distrito' => 'required',
            'descripcion' => 'nullable',
        ]);

        if (!isset($this->location->id)) {
            Location::create([
                'nombreLugar' => $this->nombreLugar,
                'region' => $this->region,
                'provincia' => $this->provincia,
                'distrito' => $this->distrito,
                'descripcion' => $this->descripcion,
            ]);
        } else {
            $this->location->update([
                'nombreLugar' => $this->nombreLugar,
                'region' => $this->region,
                'provincia' => $this->provincia,
                'distrito' => $this->distrito,
                'descripcion' => $this->descripcion,
            ]);
        }

        $this->reset(['isOpen', 'location', 'nombreLugar', 'region', 'provincia', 'distrito', 'descripcion']);
        $this->dispatch('alert', 'Registro creado o actualizado satisfactoriamente');
    }

    #[On('delItem')]
    public function delete(Location $location)
    {
        $location->delete();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
