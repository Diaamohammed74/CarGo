<?php

namespace App\Http\Controllers\Dashboard\Specialization;

use App\Models\Specialization;
use App\Http\Controllers\Controller;
use App\Http\Requests\Specialization\CreateSpecializationRequest;
use App\Http\Requests\Specialization\UpdateSpecializationRequest;

class SpecializationController extends Controller
{
    public function __construct()
    {
          //
    }

    public function index()
    {
        $specializations = Specialization::useFilters()->latest()->get();
        return view('dashboard.specializations.index', compact('specializations'));
    }

    public function create()
    {
        return view('dashboard.specializations.add');
    }

    public function store(CreateSpecializationRequest $request)
    {
        Specialization::create($request->validated());
        $this->StoredToaster();
        return redirect()->route('dashboard.specializations.create');
    }

    public function show(Specialization $specialization)
    {
        return view('dashboard.specializations.show', compact('specialization'));
    }

    public function edit(Specialization $specialization)
    {
        return view('dashboard.specializations.edit', compact('specialization'));
    }

    public function update(UpdateSpecializationRequest $request, Specialization $specialization)
    {
        $specialization->update($request->validated());
        $this->UpdatedToaster();
        return redirect()->route('dashboard.specializations.index');
    }

    public function destroy(Specialization $specialization)
    {
        $specialization->delete();
        $this->DeletedToaster();
        return redirect()->route('dashboard.specializations.index');
    }
}
