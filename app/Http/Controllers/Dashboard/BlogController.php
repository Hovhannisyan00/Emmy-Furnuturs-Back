<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Blog\IBlogRepository;
use App\Http\Requests\Blog\BlogRequest;
use App\Http\Requests\Blog\BlogSearchRequest;
use App\Models\Blog\Blog;
use App\Models\Blog\BlogSearch;
use App\Services\Blog\BlogService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class BlogController extends BaseController
{
    public function __construct(
        BlogService $service,
        IBlogRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('blog.index');
    }

    public function getListData(BlogSearchRequest $request): array
    {
        $searcher = new BlogSearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'blog.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(BlogRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated());
        $this->repository->create($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.blogs.index')
        ]);
    }

    //    public function show(Blog $blog): View
    //    {
    /* return $this->dashboardView(
        view: 'blog.form',
        vars: $this->service->getViewData($blog->id),
        viewMode: 'show'
    );*/
    //    }

    public function edit(Blog $blog): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'blog.form',
            vars: $this->service->getViewData($blog->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'blog.form',
            vars: ['blog' => $blog],
            viewMode: 'edit'
        );
    }

    public function update(BlogRequest $request, Blog $blog): JsonResponse
    {
        $data = $request->validated();

        if (!array_key_exists('is_active', $data)) {
            $data['is_active'] = '0';
        }
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $blog->id);
        $this->repository->update($blog->id, $data);

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.blogs.index')
        ]);
    }

    public function destroy(Blog $blog): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($blog->id);
        $this->repository->destroy($blog->id);

        return $this->sendOkDeleted();
    }
}
