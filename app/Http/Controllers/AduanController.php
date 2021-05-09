<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateaduanRequest;
use App\Http\Requests\UpdateaduanRequest;
use App\Repositories\aduanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;

class aduanController extends AppBaseController
{
    /** @var  aduanRepository */
    private $aduanRepository;

    public function __construct(aduanRepository $aduanRepo)
    {
        $this->aduanRepository = $aduanRepo;
    }

    /**
     * Display a listing of the aduan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $aduans = $this->aduanRepository->all();

        return view('aduans.index')
            ->with('aduans', $aduans);
    }

    /**
     * Show the form for creating a new aduan.
     *
     * @return Response
     */
    public function create()
    {
        return view('aduans.create');
    }

    /**
     * Store a newly created aduan in storage.
     *
     * @param CreateaduanRequest $request
     *
     * @return Response
     */
    public function store(CreateaduanRequest $request)
    {
        $input = $request->all();
        dd($input['user_id']+9999);
        $aduan = $this->aduanRepository->create($input);

        Flash::success('Aduan saved successfully.');

        return redirect(route('aduans.index'));
    }

    /**
     * Display the specified aduan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aduan = $this->aduanRepository->find($id);

        if (empty($aduan)) {
            Flash::error('Aduan not found');

            return redirect(route('aduans.index'));
        }

        return view('aduans.show')->with('aduan', $aduan);
    }

    /**
     * Show the form for editing the specified aduan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aduan = $this->aduanRepository->find($id);

        if (empty($aduan)) {
            Flash::error('Aduan not found');

            return redirect(route('aduans.index'));
        }

        return view('aduans.edit')->with('aduan', $aduan);
    }

    /**
     * Update the specified aduan in storage.
     *
     * @param int $id
     * @param UpdateaduanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateaduanRequest $request)
    {
        $aduan = $this->aduanRepository->find($id);

        if (empty($aduan)) {
            Flash::error('Aduan not found');

            return redirect(route('aduans.index'));
        }

        $aduan = $this->aduanRepository->update($request->all(), $id);

        Flash::success('Aduan updated successfully.');

        return redirect(route('aduans.index'));
    }

    /**
     * Remove the specified aduan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aduan = $this->aduanRepository->find($id);

        if (empty($aduan)) {
            Flash::error('Aduan not found');

            return redirect(route('aduans.index'));
        }

        $this->aduanRepository->delete($id);

        Flash::success('Aduan deleted successfully.');

        return redirect(route('aduans.index'));
    }
    public function export() 
    {
        return Excel::download(new LaporanExport, 'validated.xlsx');
    }
}
