<?php

namespace App\Livewire\ProfessionalCategory;

use App\Livewire\WithConfirmation;
use App\Livewire\WithSorting;
use App\Models\ProfessionalCategory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithSorting, WithConfirmation;

    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }

    public function mount()
    {
        $this->sortBy            = 'id';
        $this->sortDirection     = 'desc';
        $this->perPage           = 100;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new ProfessionalCategory())->orderable;
    }

    public function render()
    {
        $query = ProfessionalCategory::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $professionalCategories = $query->paginate($this->perPage);

        return view('livewire.professional-category.index', compact('professionalCategories', 'query'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('professional_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        ProfessionalCategory::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(ProfessionalCategory $professionalCategory)
    {
        abort_if(Gate::denies('professional_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionalCategory->delete();
    }
}
