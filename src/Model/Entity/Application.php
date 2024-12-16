<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Application Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $faculty_id
 * @property int $program_id
 * @property int $semester_id
 * @property int $branch_id
 * @property \Cake\I18n\Date $application_date
 * @property string $phone
 * @property string $nric
 * @property string $matrix
 * @property string $pic_name
 * @property string $pic_email
 * @property string $company_name
 * @property string $company_street_1
 * @property string $company_street_2
 * @property string $company_postcode
 * @property string $company_city
 * @property string $company_state
 * @property \Cake\I18n\Date $start_date
 * @property \Cake\I18n\Date $end_date
 * @property string $cv
 * @property string $cv_dir
 * @property int $status
 * @property string $approval_name
 * @property string $approval_post
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Faculty $faculty
 * @property \App\Model\Entity\Program $program
 * @property \App\Model\Entity\Semester $semester
 * @property \App\Model\Entity\Branch $branch
 */
class Application extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'faculty_id' => true,
        'program_id' => true,
        'semester_id' => true,
        'branch_id' => true,
        'application_date' => true,
        'phone' => true,
        'nric' => true,
        'matrix' => true,
        'pic_name' => true,
        'pic_email' => true,
        'company_name' => true,
        'company_street_1' => true,
        'company_street_2' => true,
        'company_postcode' => true,
        'company_city' => true,
        'company_state' => true,
        'start_date' => true,
        'end_date' => true,
        'cv' => true,
        'cv_dir' => true,
        'status' => true,
        'approval_name' => true,
        'approval_post' => true,
        'approval_status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'faculty' => true,
        'program' => true,
        'semester' => true,
        'branch' => true,
    ];
}
