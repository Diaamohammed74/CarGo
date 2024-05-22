<?php

namespace App\Http\Controllers\Dashboard\Mechanical;

use App\Models\User;
use App\Models\Mechanical;
use App\Enums\MechanicalJobType;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\Dashboard\User\UserResource;
use App\Http\Requests\Mechanical\CreateMechanicalRequest;
use App\Http\Requests\Mechanical\UpdateMechanicalRequest;
use App\Models\MechanicalsByOrder;
use App\Models\MechanicalsFullTime;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MechanicalController extends Controller
{
    public function __construct()
    {
    }
    public function index(): AnonymousResourceCollection
    {
        $users = User::useFilters()
        ->mechanical()
        ->with([
            'mechanicalUser'=>[
                'fullTimeJob',
                'byOrderJob.city'
            ],
            'mechanicalUser',
        ])
        ->dynamicPaginate();
        return UserResource::collection($users);
    }

    public function store(CreateMechanicalRequest $request): JsonResponse
    {
        $dataValidated = $request->validated();
        $user          = User::create($dataValidated);

        $dataValidated['user_id']       = $user->id;
        $dataValidated['mechanical_id'] = $user->id;
        $mechanical                     = Mechanical::create($dataValidated);

        if ($dataValidated['job_type'] == MechanicalJobType::FullTime->value) {
            MechanicalsFullTime::create([
                'mechanical_id'  => $dataValidated['mechanical_id'],
                'monthly_salary' => $dataValidated['monthly_salary'],
            ]);
        } elseif ($dataValidated['job_type'] == MechanicalJobType::ByOrder->value) {
            MechanicalsByOrder::create([
                'city_id'       => $dataValidated['city_id'],
                'mechanical_id' => $dataValidated['mechanical_id'],
            ]);
        }
        $user->load([
            'mechanicalUser' => [
                'specialization',
                'fullTimeJob',
                'byOrderJob.city',
            ]
        ]);
        return $this->apiResponseStored(new UserResource($user));
    }

    public function show(User $mechanical)
    {
        $mechanical->load([
            'mechanicalUser' => [
                'fullTimeJob',
                'byOrderJob.city'
            ],
            'mechanicalUser',
        ]);
        return $this->apiResponseShow(new UserResource($mechanical));
    }

    public function update(UpdateMechanicalRequest $request, $mechanical): JsonResponse
    {
        $userDataValidated       = $request->validated();
        $mechanicalDataValidated = $request->validated();
        unset(
            $userDataValidated['job_type'],
            $userDataValidated['birth_date'],
            $userDataValidated['join_date'],
            $userDataValidated['specialization_id']
        );
        User::where('id', $mechanical)->update($userDataValidated);
        $user = User::findOrFail($mechanical);
        $user->mechanicalUser()->update([
            'specialization_id' => $mechanicalDataValidated['specialization_id'],
            'job_type'          => $mechanicalDataValidated['job_type'],
            'birth_date'        => $mechanicalDataValidated['birth_date'],
            'join_date'         => $mechanicalDataValidated['join_date'],
        ]);
        $user->load([
            'mechanicalUser' => [
                'specialization',
                'fullTimeJob',
                'byOrderJob',
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
