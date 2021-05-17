<?php namespace Tests\Repositories;

use App\Models\JenisAduan;
use App\Repositories\jenis_aduanRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class jenis_aduanRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var jenis_aduanRepository
     */
    protected $jenisAduanRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->jenisAduanRepo = \App::make(jenis_aduanRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_jenis_aduan()
    {
        $jenisAduan = jenis_aduan::factory()->make()->toArray();

        $createdjenis_aduan = $this->jenisAduanRepo->create($jenisAduan);

        $createdjenis_aduan = $createdjenis_aduan->toArray();
        $this->assertArrayHasKey('id', $createdjenis_aduan);
        $this->assertNotNull($createdjenis_aduan['id'], 'Created jenis_aduan must have id specified');
        $this->assertNotNull(jenis_aduan::find($createdjenis_aduan['id']), 'jenis_aduan with given id must be in DB');
        $this->assertModelData($jenisAduan, $createdjenis_aduan);
    }

    /**
     * @test read
     */
    public function test_read_jenis_aduan()
    {
        $jenisAduan = jenis_aduan::factory()->create();

        $dbjenis_aduan = $this->jenisAduanRepo->find($jenisAduan->id);

        $dbjenis_aduan = $dbjenis_aduan->toArray();
        $this->assertModelData($jenisAduan->toArray(), $dbjenis_aduan);
    }

    /**
     * @test update
     */
    public function test_update_jenis_aduan()
    {
        $jenisAduan = jenis_aduan::factory()->create();
        $fakejenis_aduan = jenis_aduan::factory()->make()->toArray();

        $updatedjenis_aduan = $this->jenisAduanRepo->update($fakejenis_aduan, $jenisAduan->id);

        $this->assertModelData($fakejenis_aduan, $updatedjenis_aduan->toArray());
        $dbjenis_aduan = $this->jenisAduanRepo->find($jenisAduan->id);
        $this->assertModelData($fakejenis_aduan, $dbjenis_aduan->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_jenis_aduan()
    {
        $jenisAduan = jenis_aduan::factory()->create();

        $resp = $this->jenisAduanRepo->delete($jenisAduan->id);

        $this->assertTrue($resp);
        $this->assertNull(jenis_aduan::find($jenisAduan->id), 'jenis_aduan should not exist in DB');
    }
}
