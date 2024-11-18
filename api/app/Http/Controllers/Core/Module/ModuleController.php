<?php
declare(strict_types=1);

namespace App\Http\Controllers\Core\Module;

use Illuminate\Http\Request;
use App\Traits\JsonResponseTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Repository\Module\ModuleRepository;
use App\Http\Resources\Module\ModuleResource;
use Symfony\Component\HttpFoundation\JsonResponse;

class ModuleController extends Controller
{
    use JsonResponseTrait;

    public function __construct(protected ModuleRepository $moduleRepository)
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $offset         = $request['offset'];
        $limit          = $request['limit'];
        $option         = $request['option'];
        $searchData     = $request['searchData'];

        try {
            Gate::authorize('view', 'modules');

            $modules = $this->moduleRepository->getAll($offset, $limit, $searchData, $option);
            $totalCount = $modules['count'];

            return $this->successJsonResponseWithLimitOffset(
                'List of Module',
                $option,
                $offset,
                $limit,
                $totalCount,
                $modules['metadata'],
                ModuleResource::collection($modules['result'])
            );
        } catch (\Exception $e) {
            return $this->errorJsonResponse($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        try {
            Gate::authorize('add', 'modules');

            $module = $this->moduleRepository->create($request->all());

            return $this->createdJsonResponse('module create successfully', [
                'module'          => $module,
            ]);
        } catch (\Exception $e) {
            return $this->errorJsonResponse($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        try {
            Gate::authorize('view', 'modules');

            $module = $this->moduleRepository->findByID($id);

            return $this->successJsonResponse("The user $id is", new ModuleResource($module));
        } catch (\Exception $e) {
            return $this->errorJsonResponse($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        try {
            Gate::authorize('edit', 'modules');

            $module = $this->moduleRepository->updateByID($id, $request->all());

            return $this->createdJsonResponse('module update successfully', [
                'module'          => $module,
            ]);
        } catch (\Exception $e) {
            return $this->errorJsonResponse($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            Gate::authorize('delete', 'modules');

            if (!empty($id)) {
                $this->moduleRepository->deletedByID($id);
                return $this->successJsonResponse('Module delete successfully');
            }
        } catch (\Exception $e) {
            return $this->errorJsonResponse($e->getMessage());
        }
    }
}
