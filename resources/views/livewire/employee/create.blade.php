<form wire:submit="submit" class="pt-3">

    <div class="form-group {{ $errors->has('employee.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.employee.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model="employee.name">
        <div class="validation-message">
            {{ $errors->first('employee.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employee.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('employee.firstname') ? 'invalid' : '' }}">
        <label class="form-label required" for="firstname">{{ trans('cruds.employee.fields.firstname') }}</label>
        <input class="form-control" type="text" name="firstname" id="firstname" required wire:model="employee.firstname">
        <div class="validation-message">
            {{ $errors->first('employee.firstname') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.employee.fields.firstname_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.employees.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>