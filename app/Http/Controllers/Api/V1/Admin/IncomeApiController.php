<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIncomeRequest;
use App\Http\Requests\UpdateIncomeRequest;
use App\Http\Resources\Admin\IncomeResource;
use App\Income;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IncomeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('income_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IncomeResource(Income::with(['income_category', 'created_by'])->get());
    }

    public function store(StoreIncomeRequest $request)
    {
        $income = Income::create($request->all());

        return (new IncomeResource($income))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Income $income)
    {
        abort_if(Gate::denies('income_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new IncomeResource($income->load(['income_category', 'created_by']));
    }

    public function update(UpdateIncomeRequest $request, Income $income)
    {
        $income->update($request->all());

        return (new IncomeResource($income))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Income $income)
    {
        abort_if(Gate::denies('income_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $income->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
