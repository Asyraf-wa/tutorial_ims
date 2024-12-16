<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Faculty Entity
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Application[] $applications
 * @property \App\Model\Entity\Program[] $programs
 */
class Faculty extends Entity
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
        'code' => true,
        'name' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'applications' => true,
        'programs' => true,
    ];
}
