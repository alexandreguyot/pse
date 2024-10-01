<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfessionalCategory;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfessionalCategoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('professional_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.professional-category.index');
    }

    public function create()
    {
        abort_if(Gate::denies('professional_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.professional-category.create');
    }

    public function edit(ProfessionalCategory $professionalCategory)
    {
        abort_if(Gate::denies('professional_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.professional-category.edit', compact('professionalCategory'));
    }

    public function show(ProfessionalCategory $professionalCategory)
    {
        abort_if(Gate::denies('professional_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.professional-category.show', compact('professionalCategory'));
    }
}
