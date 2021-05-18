<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJenisAduanRequest;
use App\Http\Requests\UpdateJenisAduanRequest;
use App\Repositories\JenisAduanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class JenisAduanController extends AppBaseController
{
    /** @var  JenisAduanRepository */
    private $jenisAduanRepository;

    public function __construct(JenisAduanRepository $jenisAduanRepo)
    {
        $this->middleware('auth');

        $this->jenisAduanRepository = $jenisAduanRepo;
    }

    /**
     * Display a listing of the JenisAduan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jenisAduans = $this->jenisAduanRepository->all();

        return view('jenis_aduans.index')
            ->with('jenisAduans', $jenisAduans);
    }

    /**
     * Show the form for creating a new JenisAduan.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenis_aduans.create');
    }

    /**
     * Store a newly created JenisAduan in storage.
     *
     * @param CreateJenisAduanRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisAduanRequest $request)
    {
        $input = $request->all();

        $jenisAduan = $this->jenisAduanRepository->create($input);

        Flash::success('Jenis Aduan saved successfully.');

        return redirect(route('jenisAduans.index'));
    }

    /**
     * Display the specified JenisAduan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenisAduan = $this->jenisAduanRepository->find($id);

        if (empty($jenisAduan)) {
            Flash::error('Jenis Aduan not found');

            return redirect(route('jenisAduans.index'));
        }

        return view('jenis_aduans.show')->with('jenisAduan', $jenisAduan);
    }

    /**
     * Show the form for editing the specified JenisAduan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenisAduan = $this->jenisAduanRepository->find($id);

        if (empty($jenisAduan)) {
            Flash::error('Jenis Aduan not found');

            return redirect(route('jenisAduans.index'));
        }

        return view('jenis_aduans.edit')->with('jenisAduan', $jenisAduan);
    }

    /**
     * Update the specified JenisAduan in storage.
     *
     * @param int $id
     * @param UpdateJenisAduanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisAduanRequest $request)
    {
        $jenisAduan = $this->jenisAduanRepository->find($id);

        if (empty($jenisAduan)) {
            Flash::error('Jenis Aduan not found');

            return redirect(route('jenisAduans.index'));
        }

        $jenisAduan = $this->jenisAduanRepository->update($request->all(), $id);

        Flash::success('Jenis Aduan updated successfully.');

        return redirect(route('jenisAduans.index'));
    }

    /**
     * Remove the specified JenisAduan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenisAduan = $this->jenisAduanRepository->find($id);

        if (empty($jenisAduan)) {
            Flash::error('Jenis Aduan not found');

            return redirect(route('jenisAduans.index'));
        }

        $this->jenisAduanRepository->delete($id);

        Flash::success('Jenis Aduan deleted successfully.');

        return redirect(route('jenisAduans.index'));
    }
}
