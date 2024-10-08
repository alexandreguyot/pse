@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-slate-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.taskStatus.title_singular') }}:
                    {{ trans('cruds.taskStatus.fields.id') }}
                    {{ $taskStatus->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('task-status.edit', [$taskStatus])
        </div>
    </div>
</div>
@endsection
