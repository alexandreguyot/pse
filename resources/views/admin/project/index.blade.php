@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-slate-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.project.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('project_create')
                    <a class="btn btn-indigo" href="{{ route('admin.projects.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.project.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('project.index')

    </div>
</div>
@endsection
