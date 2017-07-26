<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AppointmentsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AppointmentsController Test Case
 */
class AppointmentsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.appointments',
        'app.users',
        //'app.patients'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        //$this->markTestIncomplete('Not implemented yet.');
        
        // Set session data
        $this->session([
            'Auth' => [
                'User' => [
                    'id' => 2,
                    'username' => 'patient',
                ]
            ]
        ]);
        
        $data = [
            'doctor_id' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'app_date' => '2017-07-25',
            'app_time' => '14:39:51',
            'status' => 'waiting',
            'created' => '2017-07-25 14:39:51',
            'modified' => '2017-07-25 14:39:51'
        ];
        
        $this->post('/appointments/add', $data);

        $this->assertResponseSuccess();        
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
