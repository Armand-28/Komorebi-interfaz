<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductosFixture
 */
class ProductosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'prodid' => 1,
                'prodimg' => 'Lorem ipsum dolor sit amet',
                'prodname' => 'Lorem ipsum dolor sit amet',
                'proddesc' => 'Lorem ipsum dolor sit amet',
                'prodcant' => 'Lorem ipsum dolor sit amet',
                'prodprec' => 'Lorem ipsum dolor sit amet',
                'prodstock' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
