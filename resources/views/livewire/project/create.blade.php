<form wire:submit="submit" class="pt-3">

    <div class="form-group {{ $errors->has('project.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.project.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model="project.name">
        <div class="validation-message">
            {{ $errors->first('project.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.project.fields.name_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>