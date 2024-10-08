@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-slate-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.taskTag.title_singular') }}:
                    {{ trans('cruds.taskTag.fields.id') }}
                    {{ $taskTag->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('task-tag.edit', [$taskTag])
        </div>
    </div>
</div>
@endsection
