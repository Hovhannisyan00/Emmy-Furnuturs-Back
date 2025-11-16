<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\History\IHistoryRepository;
use App\Http\Requests\History\HistoryRequest;
use App\Http\Requests\History\HistorySearchRequest;
use App\Models\History\History;
use App\Models\History\HistorySearch;
use App\Services\History\HistoryService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class HistoryController extends BaseController
{
    public function __construct(
        HistoryService $service,
        IHistoryRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('history.index');
    }

    public function getListData(HistorySearchRequest $request): array
    {
        $searcher = new HistorySearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'history.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(HistoryRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated());
        $this->repository->create($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.histories.index')
        ]);
    }

    public function show(History $history): View
    {
        /* return $this->dashboardView(
            view: 'history.form',
            vars: $this->service->getViewData($history->id),
            viewMode: 'show'
        );*/
    }

    public function edit(History $history): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'history.form',
            vars: $this->service->getViewData($history->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'history.form',
            vars: ['history' => $history],
            viewMode: 'edit'
        );
    }

    public function update(HistoryRequest $request, History $history): JsonResponse
    {
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $history->id);
        $this->repository->update($history->id, $request->validated());

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.histories.index')
        ]);
    }

    public function destroy(History $history): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($history->id);
        $this->repository->destroy($history->id);

        return $this->sendOkDeleted();
    }

    public function geet()
    {
        $allHistories = $this->repository->all();

        return view('web.about-us', [
            'histories' => $allHistories
        ]);
    }
}
