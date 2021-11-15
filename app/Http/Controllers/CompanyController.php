<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Allow access to Company Model
use App\Models\Company;

class CompanyController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies', 'companies'));
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'logo' => 'image',
            'website' => 'url',
        ]);

        $input = $request->all();

        Company::create($input);

        return redirect()->route('companies.index');
    }

    /*
     * Display the specified resource.
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.show', compact('company', 'company'));
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', compact('company','company'));
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'logo' => 'image',
            'website' => 'url',
        ]);

        $input = $request->all();
        
        $company->fill($input)->save();
        
        return redirect()->route('companies.index');
    }

    /*
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect()->route('companies.index');
    }
}
