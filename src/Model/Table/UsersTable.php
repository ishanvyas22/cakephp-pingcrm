<?php
namespace App\Model\Table;

use Cake\Database\Expression\QueryExpression;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\AccountsTable&\Cake\ORM\Association\BelongsTo $Accounts
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Accounts', [
            'foreignKey' => 'account_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 25)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 25)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmptyString('password');

        $validator
            ->boolean('owner')
            ->notEmptyString('owner');

        $validator
            ->scalar('photo_path')
            ->maxLength('photo_path', 255)
            ->allowEmptyString('photo_path');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['account_id'], 'Accounts'));

        return $rules;
    }

    /**
     * Filter the given search result with given text.
     *
     * @param \Cake\ORM\Query $query Query object.
     * @param array $options Options array.
     * @return \Cake\ORM\Query
     */
    public function findFilter(Query $query, array $options)
    {
        if ($options['search'] === null) {
            return $query;
        }

        $search = $options['search'];

        return $query->where(function (QueryExpression $exp, Query $q) use ($search) {
            return $exp->or(function (QueryExpression $or) use ($search) {
                return $or
                    ->like('first_name', "%{$search}%")
                    ->like('last_name', "%{$search}%")
                    ->like('email', "%{$search}%");
            });
        });
    }

    /**
     * Find role of given text.
     *
     * @param \Cake\ORM\Query $query Query object.
     * @param array $options Options array.
     * @return \Cake\ORM\Query
     */
    public function findRole(Query $query, array $options)
    {
        if ($options['role'] === null) {
            return $query;
        }

        switch ($options['role']) {
            case 'user':
                return $query->where(['owner' => false]);
            case 'owner':
                return $query->where(['owner' => true]);
            default:
                return $query;
        }
    }
}
