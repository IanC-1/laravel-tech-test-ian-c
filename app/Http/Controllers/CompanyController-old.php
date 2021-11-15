<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Allow access to Company Model
use App\Models\Company;

class CompanyController extends Controller
{

    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies', 'companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'logo' => 'image',
            'website' => 'url'
        ]);
        $input = $request->all();
        Company::create($input);
        return redirect()->route('companies.index');
    }

    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.show', compact('company', 'company'));
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', compact('company','company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email',
            'logo' => 'image',
            'website' => 'url'
        ]);
        $input = $request->all();
        $company->fill($input)->save();
        return redirect()->route('companies.index');
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect()->route('companies.index');
    }
}
