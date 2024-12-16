<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Applications seed.
 */
class ApplicationsSeed extends AbstractSeed
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
                'user_id' => 1,
                'faculty_id' => 1,
                'program_id' => 1,
                'semester_id' => 1,
                'branch_id' => 2,
                'application_date' => '2024-11-25',
                'phone' => '012-01010101',
                'nric' => '123456789012',
                'matrix' => '2024123456',
                'pic_name' => 'Muhammad Mikael',
                'pic_email' => 'mika@gmail.com',
                'company_name' => 'Code The Pixel',
                'company_street_1' => 'Lot 12/20, Menara South',
                'company_street_2' => 'Jalan Bunga Raya 5',
                'company_postcode' => '85000',
                'company_city' => 'Shah Alam',
                'company_state' => 'Selangor',
                'start_date' => '2024-12-01',
                'end_date' => '2025-02-28',
                'cv' => '-',
                'cv_dir' => '',
                'status' => 1,
                'approval_name' => '',
                'approval_post' => '',
                'approval_status' => 1,
                'ref_no' => 'UiTM-B2(HEA-CDIM.CDIM262/1',
                'created' => '2024-11-25 22:12:47',
                'modified' => '2024-12-16 10:37:57',
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'faculty_id' => 1,
                'program_id' => 1,
                'semester_id' => 2,
                'branch_id' => 1,
                'application_date' => '2024-12-09',
                'phone' => '123',
                'nric' => '123456789012',
                'matrix' => '2024515151',
                'pic_name' => 'Muhammad ',
                'pic_email' => 'mhds@gmail.com',
                'company_name' => 'Universiti Teknologi MARA',
                'company_street_1' => 'Seksyen 1/1',
                'company_street_2' => 'Jalan Ilmu',
                'company_postcode' => '40450',
                'company_city' => 'Shah Alam',
                'company_state' => 'Selangor',
                'start_date' => '2025-01-02',
                'end_date' => '2025-06-30',
                'cv' => 'abc123.pdf',
                'cv_dir' => 'webroot\\files\\Applications\\cv\\',
                'status' => 1,
                'approval_name' => '',
                'approval_post' => '',
                'approval_status' => 1,
                'ref_no' => 'UiTM-B1(HEA-CDIM.CDIM262/2',
                'created' => '2024-12-09 13:33:46',
                'modified' => '2024-12-12 10:18:07',
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'faculty_id' => 1,
                'program_id' => 1,
                'semester_id' => 1,
                'branch_id' => 1,
                'application_date' => '2024-12-09',
                'phone' => '2352256552',
                'nric' => '123456789012',
                'matrix' => '2024161616',
                'pic_name' => 'Asyraf',
                'pic_email' => 'test@gmail.com',
                'company_name' => 'Code The Pixel',
                'company_street_1' => 'No 73, PP66',
                'company_street_2' => 'Taman Putra',
                'company_postcode' => '858585',
                'company_city' => 'Puchong',
                'company_state' => 'Selangor',
                'start_date' => '2024-12-03',
                'end_date' => '2025-01-02',
                'cv' => 'abc123.pdf',
                'cv_dir' => 'webroot\\files\\Applications\\cv\\',
                'status' => 1,
                'approval_name' => '',
                'approval_post' => '',
                'approval_status' => 1,
                'ref_no' => '',
                'created' => '2024-12-09 21:09:40',
                'modified' => '2024-12-09 21:09:40',
            ],
            [
                'id' => 4,
                'user_id' => 2,
                'faculty_id' => 2,
                'program_id' => 1,
                'semester_id' => 1,
                'branch_id' => 1,
                'application_date' => '2024-12-09',
                'phone' => '0125295785',
                'nric' => '123456789012',
                'matrix' => '2024161616',
                'pic_name' => 'Ali bin Abu',
                'pic_email' => 'alir@gmail.com',
                'company_name' => 'Code The Pixel',
                'company_street_1' => '11/4 Blok 20',
                'company_street_2' => 'Menara ABC',
                'company_postcode' => '47130',
                'company_city' => 'Puchong',
                'company_state' => 'Selangor',
                'start_date' => '2024-12-03',
                'end_date' => '2025-01-02',
                'cv' => 'abc123.pdf',
                'cv_dir' => 'webroot\\files\\Applications\\cv\\',
                'status' => 1,
                'approval_name' => '',
                'approval_post' => '',
                'approval_status' => 0,
                'ref_no' => '',
                'created' => '2024-12-09 21:10:00',
                'modified' => '2024-12-09 21:34:41',
            ],
        ];

        $table = $this->table('applications');
        $table->insert($data)->save();
    }
}
