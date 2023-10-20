<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Helpers;
/**
 * Class CertificateController
 * @package App\Http\Controllers
 */
class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::paginate();

        return view('certificate.index', compact('certificates'))
            ->with('i', (request()->input('page', 1) - 1) * $certificates->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $certificate = new Certificate();
        return view('certificate.create', compact('certificate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Certificate::$rules);
        // $imageName = time().'.'.$request->logo->extension();
        // $request->logo->move(public_path('images'), $imageName); ->with('image',$imageName)


        $certificate = Certificate::create($request->all());





        return redirect()->route('certificates.index')
            ->with('success', 'Certificate created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificate = Certificate::find($id);

        return view('certificate.show', compact('certificate'));
    }

    public function pdf()
    {
    $certificate = Certificate::find(1);
    $pdf = PDF::loadView('layouts/certificate',[
        'certificate' => $certificate,
        ]);
    return $pdf ->setPaper('A4','landscape')->stream('certificate.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificate = Certificate::find($id);

        return view('certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Certificate $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        request()->validate(Certificate::$rules);

        $certificate->update($request->all());

        return redirect()->route('certificates.index')
            ->with('success', 'Certificate updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $certificate = Certificate::find($id)->delete();

        return redirect()->route('certificates.index')
            ->with('success', 'Certificate deleted successfully');
    }
}
