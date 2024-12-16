<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Branches seed.
 */
class BranchesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'code' => 'B1',
                'name' => 'UiTM Cawangan Selangor Kampus Puncak Alam',
                'status' => 1,
                'created' => '2024-11-25 21:38:53',
                'modified' => '2024-11-25 21:38:53',
            ],
            [
                'id' => 2,
                'code' => 'B2',
                'name' => 'UiTM Cawangan Selangor Kampus Puncak Perdana',
                'status' => 1,
                'created' => '2024-11-25 21:39:07',
                'modified' => '2024-11-25 21:39:07',
            ],
        ];

        $table = $this->table('branches');
        $table->insert($data)->save();
    }
}
