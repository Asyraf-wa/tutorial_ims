<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Semesters seed.
 */
class SemestersSeed extends AbstractSeed
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
                'code' => '20244',
                'session' => 'Oktober - Februari 2025',
                'status' => 1,
                'created' => '2024-11-25 21:37:50',
                'modified' => '2024-11-25 21:37:50',
            ],
            [
                'id' => 2,
                'code' => '20252',
                'session' => 'Mac - Ogos 2025',
                'status' => 1,
                'created' => '2024-11-25 21:38:19',
                'modified' => '2024-11-25 21:38:19',
            ],
        ];

        $table = $this->table('semesters');
        $table->insert($data)->save();
    }
}
