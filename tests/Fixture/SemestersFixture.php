<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SemestersFixture
 */
class SemestersFixture extends TestFixture
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
                'id' => 1,
                'code' => 'Lorem ip',
                'session' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2024-11-25 21:30:22',
                'modified' => '2024-11-25 21:30:22',
            ],
        ];
        parent::init();
    }
}
