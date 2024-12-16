<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Programs seed.
 */
class ProgramsSeed extends AbstractSeed
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
                'faculty_id' => 1,
                'code' => 'CDIM262',
                'name' => 'Ijazah Sarjana Muda Sains (Kepujian) Pengurusan Sistem Maklumat',
                'status' => 1,
                'created' => '2024-11-25 21:36:09',
                'modified' => '2024-11-25 21:36:09',
            ],
            [
                'id' => 2,
                'faculty_id' => 3,
                'code' => 'BM111',
                'name' => 'Diploma Pengurusan Perniagaan',
                'status' => 1,
                'created' => '2024-12-10 19:59:45',
                'modified' => '2024-12-10 19:59:45',
            ],
        ];

        $table = $this->table('programs');
        $table->insert($data)->save();
    }
}
