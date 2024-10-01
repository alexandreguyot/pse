@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.professionalCategory.title_singular') }}:
                    {{ trans('cruds.professionalCategory.fields.id') }}
                    {{ $professionalCategory->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('professional-category.edit', [$professionalCategory])
        </div>
    </div>
</div>
@endsection