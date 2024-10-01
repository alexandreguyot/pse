<?php

namespace App\Http\Livewire\ProfessionalCategory;

use App\Models\ProfessionalCategory;
use Livewire\Component;

class Create extends Component
{
    public ProfessionalCategory $professionalCategory;

    public function mount(ProfessionalCategory $professionalCategory)
    {
        $this->professionalCategory = $professionalCategory;
    }

    public function render()
    {
        return view('livewire.professional-category.create');
    }

    public function submit()
    {
        $this->validate();

        $this->professionalCategory->save();

        return redirect()->route('admin.professional-categories.index');
    }

    protected function rules(): array
    {
        return [
            'professionalCategory.title' => [
                'string',
                'required',
            ],
        ];
    }
}
