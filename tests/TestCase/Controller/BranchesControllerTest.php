<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\BranchesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\BranchesController Test Case
 *
 * @uses \App\Controller\BranchesController
 */
class BranchesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Branches',
        'app.Applications',
    ];

    /**
     * Test beforeFilter method
     *
     * @return void
     * @uses \App\Controller\BranchesController::beforeFilter()
     */
    public function testBeforeFilter(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test json method
     *
     * @return void
     * @uses \App\Controller\BranchesController::json()
     */
    public function testJson(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test csv method
     *
     * @return void
     * @uses \App\Controller\BranchesController::csv()
     */
    public function testCsv(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test pdfList method
     *
     * @return void
     * @uses \App\Controller\BranchesController::pdfList()
     */
    public function testPdfList(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\BranchesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\BranchesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\BranchesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\BranchesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\BranchesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test archived method
     *
     * @return void
     * @uses \App\Controller\BranchesController::archived()
     */
    public function testArchived(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
