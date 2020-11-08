<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $account_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string|null $password
 * @property bool $owner
 * @property string|null $photo_path
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Account $account
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
     * @var array
     */
    protected $_accessible = [
        'account_id' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'password' => true,
        'owner' => true,
        'photo_path' => true,
        'created' => true,
        'modified' => true,
        'account' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    /**
     * Virtual fields.
     *
     * @var array
     */
    protected $_virtual = ['name'];

    /**
     * Name virtual field.
     *
     * @return string
     */
    protected function _getName()
    {
        return $this->first_name . '  ' . $this->last_name;
    }
}
