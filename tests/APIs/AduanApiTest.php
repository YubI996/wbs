<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Aduan;

class AduanApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_aduan()
    {
        $aduan = Aduan::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/aduans', $aduan
        );

        $this->assertApiResponse($aduan);
    }

    /**
     * @test
     */
    public function test_read_aduan()
    {
        $aduan = Aduan::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/aduans/'.$aduan->id
        );

        $this->assertApiResponse($aduan->toArray());
    }

    /**
     * @test
     */
    public function test_update_aduan()
    {
        $aduan = Aduan::factory()->create();
        $editedAduan = Aduan::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/aduans/'.$aduan->id,
            $editedAduan
        );

        $this->assertApiResponse($editedAduan);
    }

    /**
     * @test
     */
    public function test_delete_aduan()
    {
        $aduan = Aduan::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/aduans/'.$aduan->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/aduans/'.$aduan->id
        );

        $this->response->assertStatus(404);
    }
}
