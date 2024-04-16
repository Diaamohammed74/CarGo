<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Mechanical;

use App\Models\User;
use App\Models\Mechanical;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Mechanical\CreateMechanicalRequest;
use App\Http\Requests\Mechanical\UpdateMechanicalRequest;
use App\Http\Resources\Dashboard\User\UserResource;
use App\Models\MechanicalSpecialization;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MechanicalController extends Controller
{
    public function __construct()
    {
    }
      //specializations()->attach($specializationIds);
    public function index(): AnonymousResourceCollection
    {
        $users = User::useFilters()->mechanical()->with('mechanicalUser')->dynamicPaginate();
        return UserResource::collection($users);
    }

    public function store(CreateMechanicalRequest $request): JsonResponse
    {
        $dataValidated = $request->validated();
        $user          = User::create($dataValidated);
        $user->mechanicalUser()->create($dataValidated);
        $user->mechanicalUser->specializations()->sync($dataValidated['specialization_id']);
        $user->load([
            'mechanicalUser' => [
                'specializations'
            ]
        ]);
        return $this->apiResponseStored(new UserResource($user));
    }

    public function show(User $mechanical)
    {
        $mechanical->load([
            'mechanicalUser' => [
                'specializations'
            ]
        ]);
        return $this->apiResponseShow(new UserResource($mechanical));
    }

    public function update(UpdateMechanicalRequest $request, $mechanical): JsonResponse
    {
        $userDataValidated       = $request->validated();
        $mechanicalDataValidated = $request->validated();
        unset($userDataValidated['job_type'], $userDataValidated['birth_date'], $userDataValidated['join_date'], $userDataValidated['specialization_id']);
        User::where('id', $mechanical)->update($userDataValidated);

          // Get the user instance
        $user = User::findOrFail($mechanical);

          // Update the mechanical user's information
        $user->mechanicalUser()->update([
            'job_type'   => $mechanicalDataValidated['job_type'],
            'birth_date' => $mechanicalDataValidated['birth_date'],
            'join_date'  => $mechanicalDataValidated['join_date'],
        ]);

          // Update or create the specializations
        $user->mechanicalUser->specializations()->sync($mechanicalDataValidated['specialization_id']);

        $user->load([
            'mechanicalUser' => [
                'specializations'
            ]
        ]);
        return $this->apiResponseUpdated(new UserResource($user));
    }

    public function destroy(User $mechanical): JsonResponse
    {
        $mechanical->delete();
        return $this->apiResponseDeleted();
    }
}
