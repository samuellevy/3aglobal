<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
* Affiliates Model
*
* @method \App\Model\Entity\Affiliate get($primaryKey, $options = [])
* @method \App\Model\Entity\Affiliate newEntity($data = null, array $options = [])
* @method \App\Model\Entity\Affiliate[] newEntities(array $data, array $options = [])
* @method \App\Model\Entity\Affiliate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
* @method \App\Model\Entity\Affiliate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
* @method \App\Model\Entity\Affiliate[] patchEntities($entities, array $data, array $options = [])
* @method \App\Model\Entity\Affiliate findOrCreate($search, callable $callback = null, $options = [])
*
* @mixin \Cake\ORM\Behavior\TimestampBehavior
*/
class AffiliatesTable extends Table
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

    $this->setTable('affiliates');
    $this->setDisplayField('name');
    $this->setPrimaryKey('id');

    $this->addBehavior('Timestamp');
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
    ->allowEmpty('id', 'create');

    $validator
    ->allowEmpty('name');

    $validator
    ->allowEmpty('country');

    $validator
    ->allowEmpty('site');

    $validator
    ->allowEmpty('description');

    $validator
    ->email('email')
    ->allowEmpty('email');

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

    return $rules;
  }
}
