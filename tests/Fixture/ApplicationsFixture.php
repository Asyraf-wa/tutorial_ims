<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApplicationsFixture
 */
class ApplicationsFixture extends TestFixture
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
                'user_id' => 1,
                'faculty_id' => 1,
                'program_id' => 1,
                'semester_id' => 1,
                'branch_id' => 1,
                'application_date' => '2024-11-25',
                'phone' => 'Lorem ipsum d',
                'nric' => 'Lorem ipsu',
                'matrix' => 'Lorem ip',
                'pic_name' => 'Lorem ipsum dolor sit amet',
                'pic_email' => 'Lorem ipsum dolor sit amet',
                'company_name' => 'Lorem ipsum dolor sit amet',
                'company_street_1' => 'Lorem ipsum dolor sit amet',
                'company_street_2' => 'Lorem ipsum dolor sit amet',
                'company_postcode' => 'Lorem ip',
                'company_city' => 'Lorem ipsum dolor sit amet',
                'company_state' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2024-11-25',
                'end_date' => '2024-11-25',
                'cv' => 'Lorem ipsum dolor sit amet',
                'cv_dir' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'approval_name' => 'Lorem ipsum dolor sit amet',
                'approval_post' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-11-25 21:30:17',
                'modified' => '2024-11-25 21:30:17',
            ],
        ];
        parent::init();
    }
}
