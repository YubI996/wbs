<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateaduanAPIRequest;
use App\Http\Requests\API\UpdateaduanAPIRequest;
use App\Models\Aduan;
use App\Repositories\aduanRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class aduanController
 * @package App\Http\Controllers\API
 */

class aduanAPIController extends AppBaseController
{
    /** @var  aduanRepository */
    private $aduanRepository;

    public function __construct(aduanRepository $aduanRepo)
    {
        $this->aduanRepository = $aduanRepo;
    }

    /**
     * Display a listing of the aduan.
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
     * Store a newly created aduan in storage.
     * POST /aduans
     *
     * @param CreateaduanAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateaduanAPIRequest $request)
    {
        $input = $request->all();

        $aduan = $this->aduanRepository->create($input);

        return $this->sendResponse($aduan->toArray(), 'Aduan saved successfully');
    }

    /**
     * Display the specified aduan.
     * GET|HEAD /aduans/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var aduan $aduan */
        $aduan = $this->aduanRepository->find($id);

        if (empty($aduan)) {
            return $this->sendError('Aduan not found');
        }

        return $this->sendResponse($aduan->toArray(), 'Aduan retrieved successfully');
    }

    /**
     * Update the specified aduan in storage.
     * PUT/PATCH /aduans/{id}
     *
     * @param int $id
     * @param UpdateaduanAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateaduanAPIRequest $request)
    {
        $input = $request->all();

        /** @var aduan $aduan */
        $aduan = $this->aduanRepository->find($id);

        if (empty($aduan)) {
            return $this->sendError('Aduan not found');
        }

        $aduan = $this->aduanRepository->update($input, $id);

        return $this->sendResponse($aduan->toArray(), 'aduan updated successfully');
    }

    /**
     * Remove the specified aduan from storage.
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
        /** @var aduan $aduan */
        $aduan = $this->aduanRepository->find($id);

        if (empty($aduan)) {
            return $this->sendError('Aduan not found');
        }

        $aduan->delete();

        return $this->sendSuccess('Aduan deleted successfully');
    }
}
