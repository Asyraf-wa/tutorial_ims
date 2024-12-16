<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Faculties seed.
 */
class FacultiesSeed extends AbstractSeed
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
                'code' => 'CDIM',
                'name' => 'Kolej Pengkomputeran Informatik dan Matematik',
                'status' => 1,
                'created' => '2024-11-25 21:34:24',
                'modified' => '2024-11-25 21:34:24',
            ],
            [
                'id' => 2,
                'code' => 'IS',
                'name' => 'Fakulti Pengurusan Maklumat',
                'status' => 1,
                'created' => '2024-11-25 21:34:42',
                'modified' => '2024-11-25 21:34:42',
            ],
            [
                'id' => 3,
                'code' => 'BM',
                'name' => 'Faculty of Business Management',
                'status' => 1,
                'created' => '2024-12-10 19:59:12',
                'modified' => '2024-12-10 19:59:12',
            ],
        ];

        $table = $this->table('faculties');
        $table->insert($data)->save();
    }
}
