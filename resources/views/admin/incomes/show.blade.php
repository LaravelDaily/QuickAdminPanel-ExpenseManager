@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.income.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.id') }}
                        </th>
                        <td>
                            {{ $income->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.income_category') }}
                        </th>
                        <td>
                            {{ $income->income_category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.entry_date') }}
                        </th>
                        <td>
                            {{ $income->entry_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.amount') }}
                        </th>
                        <td>
                            ${{ $income->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.description') }}
                        </th>
                        <td>
                            {{ $income->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection