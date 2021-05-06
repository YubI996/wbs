<?php namespace Tests\Repositories;

use App\Models\Aduan;
use App\Repositories\AduanRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class AduanRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var AduanRepository
     */
    protected $aduanRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->aduanRepo = \App::make(AduanRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_aduan()
    {
        $aduan = Aduan::factory()->make()->toArray();

        $createdAduan = $this->aduanRepo->create($aduan);

        $createdAduan = $createdAduan->toArray();
        $this->assertArrayHasKey('id', $createdAduan);
        $this->assertNotNull($createdAduan['id'], 'Created Aduan must have id specified');
        $this->assertNotNull(Aduan::find($createdAduan['id']), 'Aduan with given id must be in DB');
        $this->assertModelData($aduan, $createdAduan);
    }

    /**
     * @test read
     */
    public function test_read_aduan()
    {
        $aduan = Aduan::factory()->create();

        $dbAduan = $this->aduanRepo->find($aduan->id);

        $dbAduan = $dbAduan->toArray();
        $this->assertModelData($aduan->toArray(), $dbAduan);
    }

    /**
     * @test update
     */
    public function test_update_aduan()
    {
        $aduan = Aduan::factory()->create();
        $fakeAduan = Aduan::factory()->make()->toArray();

        $updatedAduan = $this->aduanRepo->update($fakeAduan, $aduan->id);

        $this->assertModelData($fakeAduan, $updatedAduan->toArray());
        $dbAduan = $this->aduanRepo->find($aduan->id);
        $this->assertModelData($fakeAduan, $dbAduan->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_aduan()
    {
        $aduan = Aduan::factory()->create();

        $resp = $this->aduanRepo->delete($aduan->id);

        $this->assertTrue($resp);
        $this->assertNull(Aduan::find($aduan->id), 'Aduan should not exist in DB');
    }
}
