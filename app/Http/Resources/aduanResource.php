<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class aduanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'jenis_aduan_id' => $this->jenis_aduan_id,
            'nama_terlapor' => $this->nama_terlapor,
            'jabatan_terlapor' => $this->jabatan_terlapor,
            'pangkat_terlapor' => $this->pangkat_terlapor,
            'instansi_terlapor' => $this->instansi_terlapor,
            'unit_terlapor' => $this->unit_terlapor,
            'kota_terlapor' => $this->kota_terlapor,
            'penjelasan' => $this->penjelasan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
