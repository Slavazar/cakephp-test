<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppointmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppointmentsTable Test Case
 */
class AppointmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AppointmentsTable
     */
    public $Appointments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.appointments',
        'app.users',
        //'app.doctors',
        //'app.patients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Appointments') ? [] : ['className' => AppointmentsTable::class];
        $this->Appointments = TableRegistry::get('Appointments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Appointments);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
    
    public function testSaveMethod()
    {
        $data = [
            'doctor_id' => 1,
            'patient_id' => 2,
            'title' => 'Lorem ipsum dolor sit amet',
            'app_date' => '2017-07-25',
            'app_time' => '14:39:51',
            'status' => 'waiting',
            'created' => '2017-07-25 14:39:51',
            'modified' => '2017-07-25 14:39:51'
        ];
        
        $appointment = $this->Appointments->newEntity();
        $appointment = $this->Appointments->patchEntity($appointment, $data);
        //pr($appointment);
        
        $result = $this->Appointments->save($appointment);
        //var_dump($result);
        
        $this->assertInstanceOf('Cake\ORM\Entity', $result);
    }
    
    public function testSaveMethodFalse()
    {
        $data = [
            'doctor_id' => 1,
            'patient_id' => null,
            'title' => 'Lorem ipsum dolor sit amet',
            'app_date' => '2017-07-25',
            'app_time' => '14:39:51',
            'status' => 'waiting',
            'created' => '2017-07-25 14:39:51',
            'modified' => '2017-07-25 14:39:51'
        ];
        
        $appointment = $this->Appointments->newEntity();
        $appointment = $this->Appointments->patchEntity($appointment, $data);
        
        $result = $this->Appointments->save($appointment);
        
        $expected = false;

        $this->assertEquals($expected, $result);
    }
}
