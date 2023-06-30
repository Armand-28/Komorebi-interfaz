<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductosTable Test Case
 */
class ProductosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductosTable
     */
    protected $Productos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Productos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Productos') ? [] : ['className' => ProductosTable::class];
        $this->Productos = $this->getTableLocator()->get('Productos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Productos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
