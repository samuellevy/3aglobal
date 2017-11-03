<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enquetes Model
 *
 * @method \App\Model\Entity\Enquete get($primaryKey, $options = [])
 * @method \App\Model\Entity\Enquete newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Enquete[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Enquete|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enquete patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Enquete[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Enquete findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EnquetesTable extends Table
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

        $this->setTable('enquetes');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        /*$this->hasMany('Files', [
            'foreignKey' => 'model_id',
            'conditions' => [
                'entity'=>'Enquetes'
            ]
        ]);*/
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
            ->allowEmpty('title');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }
}
