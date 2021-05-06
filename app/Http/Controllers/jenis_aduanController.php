<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createjenis_aduanRequest;
use App\Http\Requests\Updatejenis_aduanRequest;
use App\Repositories\jenis_aduanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class jenis_aduanController extends AppBaseController
{
    /** @var  jenis_aduanRepository */
    private $jenisAduanRepository;

    public function __construct(jenis_aduanRepository $jenisAduanRepo)
    {
        $this->jenisAduanRepository = $jenisAduanRepo;
    }

    /**
     * Display a listing of the jenis_aduan.
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
     * Show the form for creating a new jenis_aduan.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenis_aduans.create');
    }

    /**
     * Store a newly created jenis_aduan in storage.
     *
     * @param Createjenis_aduanRequest $request
     *
     * @return Response
     */
    public function store(Createjenis_aduanRequest $request)
    {
        $input = $request->all();

        $jenisAduan = $this->jenisAduanRepository->create($input);

        Flash::success('Jenis Aduan saved successfully.');

        return redirect(route('jenisAduans.index'));
    }

    /**
     * Display the specified jenis_aduan.
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
     * Show the form for editing the specified jenis_aduan.
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
     * Update the specified jenis_aduan in storage.
     *
     * @param int $id
     * @param Updatejenis_aduanRequest $request
     *
     * @return Response
     */
    public function update($id, Updatejenis_aduanRequest $request)
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
     * Remove the specified jenis_aduan from storage.
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
