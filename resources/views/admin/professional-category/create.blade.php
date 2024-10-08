@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-slate-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.create') }}
                    {{ trans('cruds.professionalCategory.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('professional-category.create')
        </div>
    </div>
</div>
@endsection
