<?php

namespace App\Http\Controllers\Dashboard\Mechanical;

use App\Http\Traits\Api\MediaHandler;
use App\Models\City;
use App\Models\User;
use App\Models\WeekDay;
use App\Enums\StatusEnum;
use App\Models\Mechanical;
use App\Models\Specialization;
use App\Enums\MechanicalJobType;
use Illuminate\Http\JsonResponse;
use App\Models\MechanicalsByOrder;
use App\Models\MechanicalsFullTime;
use App\Http\Controllers\Controller;
use App\Http\Resources\Dashboard\User\UserResource;
use App\Http\Requests\Mechanical\CreateMechanicalRequest;
use App\Http\Requests\Mechanical\UpdateMechanicalRequest;

class MechanicalController extends Controller
{
    use MediaHandler;
    public function index()
    {
        $mechanicals = User::useFilters()
            ->mechanical()
            ->with([
                'mechanicalUser' => [
                    'fullTimeJob',
                    'byOrderJob.city'
                ],
                'mechanicalUser',
            ])->get();
        return view('dashboard.mechanical.index', ['mechanicals' => $mechanicals]);
    }
    public function create()
    {
        return view('dashboard.mechanical.add')->with([
            'specializations' => Specialization::query()->get(['id', 'title']),
            'cities'          => City::where('governrate_id', '1')->get(['id', 'city_name_en']),
        ]);
    }
    public function store(CreateMechanicalRequest $request)
    {
        $dataValidated                  = $request->validated();
        $dataValidated['image']         = $this->upload($dataValidated['image'],'uploads/images');
        $user                           = User::create($dataValidated);
        $dataValidated['user_id']       = $user->id;
        $dataValidated['mechanical_id'] = $user->id;
        Mechanical::create($dataValidated);
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
        $this->StoredToaster();
        return back();
    }

    public function edit(User $mechanical)
    {
        $mechanical->load([
            'mechanicalUser' => [
                'fullTimeJob',
                'byOrderJob.city'
            ],
            'mechanicalUser',
        ]);
        return view('dashboard.mechanical.edit', [
            'mechanical'      => $mechanical,
            'specializations' => Specialization::query()->get(['id', 'title']),
            'cities'          => City::where('governrate_id', '1')->get(['id', 'city_name_en']),
        ]);
    }

    public function update(UpdateMechanicalRequest $request, $mechanical)
    {
        $userDataValidated       = $request->validated();
        $mechanicalDataValidated = $request->validated();
        unset(
            $userDataValidated['job_type'],
            $userDataValidated['city_id'],
            $userDataValidated['monthly_salary'],
            $userDataValidated['birth_date'],
            $userDataValidated['join_date'],
            $userDataValidated['specialization_id']
        );
        User::where('id', $mechanical)->update($userDataValidated);
        $user = User::findOrFail($mechanical);
        $userId= $user->id;
        $user->mechanicalUser()->update([
            'specialization_id' => $mechanicalDataValidated['specialization_id'],
            'job_type'          => $mechanicalDataValidated['job_type'],
            'birth_date'        => $mechanicalDataValidated['birth_date'],
            'join_date'         => $mechanicalDataValidated['join_date'],
        ]);
        $jobType = $mechanicalDataValidated['job_type'];
        if ($jobType == MechanicalJobType::FullTime->value) {
            MechanicalsFullTime::where('mechanical_id',$userId)->update(
                ['monthly_salary' => $mechanicalDataValidated['monthly_salary']]
            );
        } elseif ($jobType == MechanicalJobType::ByOrder->value) {
            MechanicalsByOrder::where('mechanical_id',$userId)->update(
                [
                    'city_id' => $mechanicalDataValidated['city_id'],
                ]
            );
        }
        return to_route('dashboard.mechanicals.index');
    }

    public function destroy(User $mechanical)
    {
        $mechanical->delete();
        $this->DeletedToaster();
        return back();
    }
}
