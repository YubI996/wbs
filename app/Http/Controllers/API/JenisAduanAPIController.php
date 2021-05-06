<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateJenisAduanAPIRequest;
use App\Http\Requests\API\UpdateJenisAduanAPIRequest;
use App\Models\JenisAduan;
use App\Repositories\JenisAduanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class JenisAduanController
 * @package App\Http\Controllers\API
 */

class JenisAduanAPIController extends AppBaseController
{
    /** @var  JenisAduanRepository */
    private $jenisAduanRepository;

    public function __construct(JenisAduanRepository $jenisAduanRepo)
    {
        $this->jenisAduanRepository = $jenisAduanRepo;
    }

    /**
     * Display a listing of the JenisAduan.
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
     * Store a newly created JenisAduan in storage.
     * POST /jenisAduans
     *
     * @param CreateJenisAduanAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisAduanAPIRequest $request)
    {
        $input = $request->all();

        $jenisAduan = $this->jenisAduanRepository->create($input);

        return $this->sendResponse($jenisAduan->toArray(), 'Jenis Aduan saved successfully');
    }

    /**
     * Display the specified JenisAduan.
     * GET|HEAD /jenisAduans/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var JenisAduan $jenisAduan */
        $jenisAduan = $this->jenisAduanRepository->find($id);

        if (empty($jenisAduan)) {
            return $this->sendError('Jenis Aduan not found');
        }

        return $this->sendResponse($jenisAduan->toArray(), 'Jenis Aduan retrieved successfully');
    }

    /**
     * Update the specified JenisAduan in storage.
     * PUT/PATCH /jenisAduans/{id}
     *
     * @param int $id
     * @param UpdateJenisAduanAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisAduanAPIRequest $request)
    {
        $input = $request->all();

        /** @var JenisAduan $jenisAduan */
        $jenisAduan = $this->jenisAduanRepository->find($id);

        if (empty($jenisAduan)) {
            return $this->sendError('Jenis Aduan not found');
        }

        $jenisAduan = $this->jenisAduanRepository->update($input, $id);

        return $this->sendResponse($jenisAduan->toArray(), 'JenisAduan updated successfully');
    }

    /**
     * Remove the specified JenisAduan from storage.
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
        /** @var JenisAduan $jenisAduan */
        $jenisAduan = $this->jenisAduanRepository->find($id);

        if (empty($jenisAduan)) {
            return $this->sendError('Jenis Aduan not found');
        }

        $jenisAduan->delete();

        return $this->sendSuccess('Jenis Aduan deleted successfully');
    }
}
