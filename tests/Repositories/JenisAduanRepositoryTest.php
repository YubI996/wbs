<?php namespace Tests\Repositories;

use App\Models\JenisAduan;
use App\Repositories\JenisAduanRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class JenisAduanRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var JenisAduanRepository
     */
    protected $jenisAduanRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->jenisAduanRepo = \App::make(JenisAduanRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_jenis_aduan()
    {
        $jenisAduan = JenisAduan::factory()->make()->toArray();

        $createdJenisAduan = $this->jenisAduanRepo->create($jenisAduan);

        $createdJenisAduan = $createdJenisAduan->toArray();
        $this->assertArrayHasKey('id', $createdJenisAduan);
        $this->assertNotNull($createdJenisAduan['id'], 'Created JenisAduan must have id specified');
        $this->assertNotNull(JenisAduan::find($createdJenisAduan['id']), 'JenisAduan with given id must be in DB');
        $this->assertModelData($jenisAduan, $createdJenisAduan);
    }

    /**
     * @test read
     */
    public function test_read_jenis_aduan()
    {
        $jenisAduan = JenisAduan::factory()->create();

        $dbJenisAduan = $this->jenisAduanRepo->find($jenisAduan->id);

        $dbJenisAduan = $dbJenisAduan->toArray();
        $this->assertModelData($jenisAduan->toArray(), $dbJenisAduan);
    }

    /**
     * @test update
     */
    public function test_update_jenis_aduan()
    {
        $jenisAduan = JenisAduan::factory()->create();
        $fakeJenisAduan = JenisAduan::factory()->make()->toArray();

        $updatedJenisAduan = $this->jenisAduanRepo->update($fakeJenisAduan, $jenisAduan->id);

        $this->assertModelData($fakeJenisAduan, $updatedJenisAduan->toArray());
        $dbJenisAduan = $this->jenisAduanRepo->find($jenisAduan->id);
        $this->assertModelData($fakeJenisAduan, $dbJenisAduan->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_jenis_aduan()
    {
        $jenisAduan = JenisAduan::factory()->create();

        $resp = $this->jenisAduanRepo->delete($jenisAduan->id);

        $this->assertTrue($resp);
        $this->assertNull(JenisAduan::find($jenisAduan->id), 'JenisAduan should not exist in DB');
    }
}
