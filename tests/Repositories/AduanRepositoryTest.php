<?php namespace Tests\Repositories;

use App\Models\aduan;
use App\Repositories\aduanRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class aduanRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var aduanRepository
     */
    protected $aduanRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->aduanRepo = \App::make(aduanRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_aduan()
    {
        $aduan = aduan::factory()->make()->toArray();

        $createdaduan = $this->aduanRepo->create($aduan);

        $createdaduan = $createdaduan->toArray();
        $this->assertArrayHasKey('id', $createdaduan);
        $this->assertNotNull($createdaduan['id'], 'Created aduan must have id specified');
        $this->assertNotNull(aduan::find($createdaduan['id']), 'aduan with given id must be in DB');
        $this->assertModelData($aduan, $createdaduan);
    }

    /**
     * @test read
     */
    public function test_read_aduan()
    {
        $aduan = aduan::factory()->create();

        $dbaduan = $this->aduanRepo->find($aduan->id);

        $dbaduan = $dbaduan->toArray();
        $this->assertModelData($aduan->toArray(), $dbaduan);
    }

    /**
     * @test update
     */
    public function test_update_aduan()
    {
        $aduan = aduan::factory()->create();
        $fakeaduan = aduan::factory()->make()->toArray();

        $updatedaduan = $this->aduanRepo->update($fakeaduan, $aduan->id);

        $this->assertModelData($fakeaduan, $updatedaduan->toArray());
        $dbaduan = $this->aduanRepo->find($aduan->id);
        $this->assertModelData($fakeaduan, $dbaduan->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_aduan()
    {
        $aduan = aduan::factory()->create();

        $resp = $this->aduanRepo->delete($aduan->id);

        $this->assertTrue($resp);
        $this->assertNull(aduan::find($aduan->id), 'aduan should not exist in DB');
    }
}
