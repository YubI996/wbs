<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\JenisAduan;

class jenis_aduanApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_jenis_aduan()
    {
        $jenisAduan = jenis_aduan::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/jenis_aduans', $jenisAduan
        );

        $this->assertApiResponse($jenisAduan);
    }

    /**
     * @test
     */
    public function test_read_jenis_aduan()
    {
        $jenisAduan = jenis_aduan::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/jenis_aduans/'.$jenisAduan->id
        );

        $this->assertApiResponse($jenisAduan->toArray());
    }

    /**
     * @test
     */
    public function test_update_jenis_aduan()
    {
        $jenisAduan = jenis_aduan::factory()->create();
        $editedjenis_aduan = jenis_aduan::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/jenis_aduans/'.$jenisAduan->id,
            $editedjenis_aduan
        );

        $this->assertApiResponse($editedjenis_aduan);
    }

    /**
     * @test
     */
    public function test_delete_jenis_aduan()
    {
        $jenisAduan = jenis_aduan::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/jenis_aduans/'.$jenisAduan->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/jenis_aduans/'.$jenisAduan->id
        );

        $this->response->assertStatus(404);
    }
}
