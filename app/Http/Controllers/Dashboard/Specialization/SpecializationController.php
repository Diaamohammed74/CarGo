<?php

namespace App\Http\Controllers\Dashboard\Specialization;

use App\Http\Controllers\Controller;
use App\Http\Requests\Specialization\UpdateSpecializationRequest;
use App\Http\Requests\Specialization\CreateSpecializationRequest;
use App\Models\Specialization;

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
        toast('Added Successfuly');
        return redirect()->route('dashboard.specializations.create')->with('success', 'Added Successfully');
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
        return redirect()->route('dashboard.specializations.index')->with('success', 'Updated Successfully');
    }

    public function destroy(Specialization $specialization)
    {
        $specialization->delete();
        return redirect()->route('dashboard.specializations.index')->with('error', 'Deleted Successfully');
    }
}
