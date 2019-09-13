<?php

namespace App\Http\Requests;

use App\Expense;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreExpenseRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('expense_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'entry_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'amount'     => [
                'required',
            ],
        ];
    }
}
