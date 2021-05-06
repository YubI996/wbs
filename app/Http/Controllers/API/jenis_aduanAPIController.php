<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createjenis_aduanAPIRequest;
use App\Http\Requests\API\Updatejenis_aduanAPIRequest;
use App\Models\jenis_aduan;
use App\Repositories\jenis_aduanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class jenis_aduanController
 * @package App\Http\Controllers\API
 */

class jenis_aduanAPIController extends AppBaseController
{
    /** @var  jenis_aduanRepository */
    private $jenisAduanRepository;

    public function __construct(jenis_aduanRepository $jenisAduanRepo)
    {
        $this->jenisAduanRepository = $jenisAduanRepo;
    }

    /**
     * Display a listing of the jenis_aduan.
     * GET|HEAD /jenisAduans
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $jenisAduans = $this->jenisAduanRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($jenisAduans->toArray(), 'Jenis Aduans retrieved successfully');
    }

    /**
     * Store a newly created jenis_aduan in storage.
     * POST /jenisAduans
     *
     * @param Createjenis_aduanAPIRequest $request
     *
     * @return Response
     */
    public function store(Createjenis_aduanAPIRequest $request)
    {
        $input = $request->all();

        $jenisAduan = $this->jenisAduanRepository->create($input);

        return $this->sendResponse($jenisAduan->toArray(), 'Jenis Aduan saved successfully');
    }

    /**
     * Display the specified jenis_aduan.
     * GET|HEAD /jenisAduans/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var jenis_aduan $jenisAduan */
        $jenisAduan = $this->jenisAduanRepository->find($id);

        if (empty($jenisAduan)) {
            return $this->sendError('Jenis Aduan not found');
        }

        return $this->sendResponse($jenisAduan->toArray(), 'Jenis Aduan retrieved successfully');
    }

    /**
     * Update the specified jenis_aduan in storage.
     * PUT/PATCH /jenisAduans/{id}
     *
     * @param int $id
     * @param Updatejenis_aduanAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatejenis_aduanAPIRequest $request)
    {
        $input = $request->all();

        /** @var jenis_aduan $jenisAduan */
        $jenisAduan = $this->jenisAduanRepository->find($id);

        if (empty($jenisAduan)) {
            return $this->sendError('Jenis Aduan not found');
        }

        $jenisAduan = $this->jenisAduanRepository->update($input, $id);

        return $this->sendResponse($jenisAduan->toArray(), 'jenis_aduan updated successfully');
    }

    /**
     * Remove the specified jenis_aduan from storage.
     * DELETE /jenisAduans/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var jenis_aduan $jenisAduan */
        $jenisAduan = $this->jenisAduanRepository->find($id);

        if (empty($jenisAduan)) {
            return $this->sendError('Jenis Aduan not found');
        }

        $jenisAduan->delete();

        return $this->sendSuccess('Jenis Aduan deleted successfully');
    }
}
