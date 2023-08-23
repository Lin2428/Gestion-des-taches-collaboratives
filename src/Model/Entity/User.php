<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;
/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $phone
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenTime $created
 * @property string $modified
 *
 * @property \App\Model\Entity\Message[] $messages
 * @property \App\Model\Entity\Notification[] $notifications
 * @property \App\Model\Entity\ProjectUser[] $project_users
 * @property \App\Model\Entity\Project[] $projects
 * @property \App\Model\Entity\Task[] $tasks
 */
class User extends Entity
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
        'name' => true,
        'phone' => true,
        'email' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'messages' => true,
        'notifications' => true,
        'project_users' => true,
        'projects' => true,
        'tasks' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
    
}
