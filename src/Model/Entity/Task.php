<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property int $id
 * @property int $project_id
 * @property int $created_by
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\User $user
 */
class Task extends Entity
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
    protected $_accessible = [
        'project_id' => true,
        'created_by' => true,
        'user_id' => true,
        'name' => true,
        'description' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'project' => true,
        'user' => true,
    ];
}
