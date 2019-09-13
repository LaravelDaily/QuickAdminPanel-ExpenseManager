@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.expense.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.expense.fields.id') }}
                        </th>
                        <td>
                            {{ $expense->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expense.fields.expense_category') }}
                        </th>
                        <td>
                            {{ $expense->expense_category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expense.fields.entry_date') }}
                        </th>
                        <td>
                            {{ $expense->entry_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expense.fields.amount') }}
                        </th>
                        <td>
                            ${{ $expense->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.expense.fields.description') }}
                        </th>
                        <td>
                            {{ $expense->description }}
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