<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAduanAPIRequest;
use App\Http\Requests\API\UpdateAduanAPIRequest;
use App\Models\Aduan;
use App\Repositories\AduanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class AduanController
 * @package App\Http\Controllers\API
 */

class AduanAPIController extends AppBaseController
{
    /** @var  AduanRepository */
    private $aduanRepository;

    public function __construct(AduanRepository $aduanRepo)
    {
        $this->aduanRepository = $aduanRepo;
    }

    /**
     * Display a listing of the Aduan.
     * GET|HEAD /aduans
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $aduans = $this->aduanRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($aduans->toArray(), 'Aduans retrieved successfully');
    }

    /**
     * Store a newly created Aduan in storage.
     * POST /aduans
     *
     * @param CreateAduanAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateAduanAPIRequest $request)
    {
        $input = $request->all();

        $aduan = $this->aduanRepository->create($input);

        return $this->sendResponse($aduan->toArray(), 'Aduan saved successfully');
    }

    /**
     * Display the specified Aduan.
     * GET|HEAD /aduans/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Aduan $aduan */
        $aduan = $this->aduanRepository->find($id);

        if (empty($aduan)) {
            return $this->sendError('Aduan not found');
        }

        return $this->sendResponse($aduan->toArray(), 'Aduan retrieved successfully');
    }

    /**
     * Update the specified Aduan in storage.
     * PUT/PATCH /aduans/{id}
     *
     * @param int $id
     * @param UpdateAduanAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAduanAPIRequest $request)
    {
        $input = $request->all();

        /** @var Aduan $aduan */
        $aduan = $this->aduanRepository->find($id);

        if (empty($aduan)) {
            return $this->sendError('Aduan not found');
        }

        $aduan = $this->aduanRepository->update($input, $id);

        return $this->sendResponse($aduan->toArray(), 'Aduan updated successfully');
    }

    /**
     * Remove the specified Aduan from storage.
     * DELETE /aduans/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Aduan $aduan */
        $aduan = $this->aduanRepository->find($id);

        if (empty($aduan)) {
            return $this->sendError('Aduan not found');
        }

        $aduan->delete();

        return $this->sendSuccess('Aduan deleted successfully');
    }
}
