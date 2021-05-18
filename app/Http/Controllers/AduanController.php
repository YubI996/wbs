<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateaduanRequest;
use App\Http\Requests\UpdateaduanRequest;
use App\Http\Requests\UpdateaduanVerifRequest;
use App\Http\Requests\UpdateaduanAdminRequest;
use App\Http\Requests\UpdateaduanInspekRequest;
use App\Repositories\aduanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\JenisAduan;
use App\Models\Aduan;
class aduanController extends AppBaseController
{
    /** @var  aduanRepository */
    private $aduanRepository;

    public function __construct(aduanRepository $aduanRepo)
    {
        $this->middleware('auth');

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
        $ja = JenisAduan::pluck('name','slug')->toArray();
        return view('aduans.create')
            ->with('ja', $ja);
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
        // dd($request);
        $input = $request->all();
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
        $ja = JenisAduan::pluck('name','slug')->toArray();

        return view('aduans.edit')->with(['aduan'=> $aduan,'ja'=>$ja]);
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

    public function download($name,$id) 
    {
        $a = Aduan::findOrFail($id);
        if(!empty($a)){
            switch ($name) {
                case 'bukti':
                    $file = storage_path('app/public/files/'. $a->value('file_bukti'));
                    break;
                
                case 'verif':
                    $file = storage_path('app/public/files/'. $a->value('file_verifikator'));
                    break;
                
                case 'inspek':
                    # code...
                    break;
                
                default:
                    Flash::warning('Not Found.');
                    return redirect(route('aduans.index'));

            }
        }
        if(file_exists($file)){
            return back();
            Flash::warning('Not Found.');
        }
        // $file = storage_path('app/public/files/'. $a->value('file_bukti'));
        return Response::download($file);
    }
  
    

    public function verif($id, UpdateaduanVerifRequest $request) 
    {
        // dd($request->dirty());
        $aduan = Aduan::findOrFail($id);
        // dump($aduan);
        // $aduan->status_verifikasi = 1;
        // $hasil = $aduan->save();
        if (empty($aduan)) {
            Flash::error('Aduan not found');

            return redirect(route('aduans.index'));
        }
        $aduan->status_verifikasi = $request->status_verifikasi;
        $aduan->catatan_verifikasi = $request->catatan_verifikasi;
        $aduan->file_verifikator = $request->file_verifikator;
        $aduan->save();
        // dd($hasil);
        Flash::success('Aduan telah di verifikasi.');

        return redirect(route('aduans.index'));
    }
    public function inspek($id, UpdateaduanInspekRequest $request) 
    {
        // dd($request->dirty());
        $aduan = Aduan::findOrFail($id);
        // dump($aduan);
        // $aduan->status_verifikasi = 1;
        // $hasil = $aduan->save();
        if (empty($aduan)) {
            Flash::error('Aduan not found');

            return redirect(route('aduans.index'));
        }
        $aduan->status_verifikasi = $request->status_verifikasi;
        $aduan->catatan_verifikasi = $request->catatan_verifikasi;
        $aduan->file_verifikator = $request->file_verifikator;
        $aduan->save();
        // dd($hasil);
        Flash::success('Aduan telah di verifikasi.');

        return redirect(route('aduans.index'));
    }
    public function admin($id, UpdateaduanAdminfRequest $request) 
    {
        // dd($request->dirty());
        $aduan = Aduan::findOrFail($id);
        // dump($aduan);
        // $aduan->status_verifikasi = 1;
        // $hasil = $aduan->save();
        if (empty($aduan)) {
            Flash::error('Aduan not found');

            return redirect(route('aduans.index'));
        }
        $aduan->status_verifikasi = $request->status_verifikasi;
        $aduan->catatan_verifikasi = $request->catatan_verifikasi;
        $aduan->file_verifikator = $request->file_verifikator;
        $aduan->save();
        // dd($hasil);
        Flash::success('Aduan telah di verifikasi.');

        return redirect(route('aduans.index'));
    }
}
