<?php namespace Tests\Repositories;

use App\Models\role;
use App\Repositories\roleRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class roleRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var roleRepository
     */
    protected $roleRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->roleRepo = \App::make(roleRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_role()
    {
        $role = role::factory()->make()->toArray();

        $createdrole = $this->roleRepo->create($role);

        $createdrole = $createdrole->toArray();
        $this->assertArrayHasKey('id', $createdrole);
        $this->assertNotNull($createdrole['id'], 'Created role must have id specified');
        $this->assertNotNull(role::find($createdrole['id']), 'role with given id must be in DB');
        $this->assertModelData($role, $createdrole);
    }

    /**
     * @test read
     */
    public function test_read_role()
    {
        $role = role::factory()->create();

        $dbrole = $this->roleRepo->find($role->id);

        $dbrole = $dbrole->toArray();
        $this->assertModelData($role->toArray(), $dbrole);
    }

    /**
     * @test update
     */
    public function test_update_role()
    {
        $role = role::factory()->create();
        $fakerole = role::factory()->make()->toArray();

        $updatedrole = $this->roleRepo->update($fakerole, $role->id);

        $this->assertModelData($fakerole, $updatedrole->toArray());
        $dbrole = $this->roleRepo->find($role->id);
        $this->assertModelData($fakerole, $dbrole->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_role()
    {
        $role = role::factory()->create();

        $resp = $this->roleRepo->delete($role->id);

        $this->assertTrue($resp);
        $this->assertNull(role::find($role->id), 'role should not exist in DB');
    }
}
