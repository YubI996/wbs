<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAduanRequest;
use App\Http\Requests\UpdateAduanRequest;
use App\Repositories\AduanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AduanController extends AppBaseController
{
    /** @var  AduanRepository */
    private $aduanRepository;

    public function __construct(AduanRepository $aduanRepo)
    {
        $this->aduanRepository = $aduanRepo;
    }

    /**
     * Display a listing of the Aduan.
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
     * Show the form for creating a new Aduan.
     *
     * @return Response
     */
    public function create()
    {
        return view('aduans.create');
    }

    /**
     * Store a newly created Aduan in storage.
     *
     * @param CreateAduanRequest $request
     *
     * @return Response
     */
    public function store(CreateAduanRequest $request)
    {
        $input = $request->all();

        $aduan = $this->aduanRepository->create($input);

        Flash::success('Aduan saved successfully.');

        return redirect(route('aduans.index'));
    }

    /**
     * Display the specified Aduan.
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
     * Show the form for editing the specified Aduan.
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
     * Update the specified Aduan in storage.
     *
     * @param int $id
     * @param UpdateAduanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAduanRequest $request)
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
     * Remove the specified Aduan from storage.
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
}
