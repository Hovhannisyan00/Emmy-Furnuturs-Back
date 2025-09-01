<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\OurTeam\OurTeamRequest;
use App\Http\Requests\OurTeam\OurTeamSearchRequest;
use App\Models\OurTeam\OurTeamSearch;
use App\Models\OurTeam\OurTeam;
use App\Services\OurTeam\OurTeamService;
use App\Contracts\OurTeam\IOurTeamRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;

class OurTeamController extends BaseController
{
    public function __construct(
        OurTeamService $service,
        IOurTeamRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('our-team.index');
    }

    public function getListData(OurTeamSearchRequest $request): array
    {
        $searcher = new OurTeamSearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'our-team.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(OurTeamRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated());
        $this->repository->create($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.our-teams.index')
        ]);
    }

//    public function show(OurTeam $ourTeam): View
//    {
       /* return $this->dashboardView(
           view: 'our-team.form',
           vars: $this->service->getViewData($ourTeam->id),
           viewMode: 'show'
       );*/
//    }

    public function edit(OurTeam $ourTeam): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'our-team.form',
            vars: $this->service->getViewData($ourTeam->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'our-team.form',
            vars: ['ourTeam' => $ourTeam],
            viewMode: 'edit'
        );
    }

    public function update(OurTeamRequest $request, OurTeam $ourTeam): JsonResponse
    {
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $ourTeam->id);
        $this->repository->update($ourTeam->id, $request->validated());

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.our-teams.index')
        ]);
    }

    public function destroy(OurTeam $ourTeam): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($ourTeam->id);
        $this->repository->destroy($ourTeam->id);

        return $this->sendOkDeleted();
    }
}
