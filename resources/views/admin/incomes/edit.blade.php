@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.income.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.incomes.update", [$income->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('income_category_id') ? 'has-error' : '' }}">
                <label for="income_category">{{ trans('cruds.income.fields.income_category') }}</label>
                <select name="income_category_id" id="income_category" class="form-control select2">
                    @foreach($income_categories as $id => $income_category)
                        <option value="{{ $id }}" {{ (isset($income) && $income->income_category ? $income->income_category->id : old('income_category_id')) == $id ? 'selected' : '' }}>{{ $income_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('income_category_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('income_category_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('entry_date') ? 'has-error' : '' }}">
                <label for="entry_date">{{ trans('cruds.income.fields.entry_date') }}*</label>
                <input type="text" id="entry_date" name="entry_date" class="form-control date" value="{{ old('entry_date', isset($income) ? $income->entry_date : '') }}" required>
                @if($errors->has('entry_date'))
                    <em class="invalid-feedback">
                        {{ $errors->first('entry_date') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.income.fields.entry_date_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
                <label for="amount">{{ trans('cruds.income.fields.amount') }}*</label>
                <input type="number" id="amount" name="amount" class="form-control" value="{{ old('amount', isset($income) ? $income->amount : '') }}" step="0.01" required>
                @if($errors->has('amount'))
                    <em class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.income.fields.amount_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('cruds.income.fields.description') }}</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ old('description', isset($income) ? $income->description : '') }}">
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.income.fields.description_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection