<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use ArrayObject;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;

/**
* Files Model
*
* @property \Cake\ORM\Association\BelongsTo $Receitas
*
* @method \App\Model\Entity\File get($primaryKey, $options = [])
* @method \App\Model\Entity\File newEntity($data = null, array $options = [])
* @method \App\Model\Entity\File[] newEntities(array $data, array $options = [])
* @method \App\Model\Entity\File|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
* @method \App\Model\Entity\File patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
* @method \App\Model\Entity\File[] patchEntities($entities, array $data, array $options = [])
* @method \App\Model\Entity\File findOrCreate($search, callable $callback = null, $options = [])
*
* @mixin \Cake\ORM\Behavior\TimestampBehavior
*/
class FilesTable extends Table
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

    $this->setTable('files');
    $this->setDisplayField('id');
    $this->setPrimaryKey('id');

    $this->addBehavior('Timestamp');
  }

  public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
  {
    $old_photo = $this->find('all')->where('id = 32');

    //die(debug($old_photo));

    if (!empty($data['filename']['name'])) {
      $file = $data['filename'];
      $filename = $file['name'];
      $file_tmp_name = $file['tmp_name'];
      $dir = WWW_ROOT.'img'.DS.'uploads';
      $newname = Text::uuid().'-'.$filename;

      $allowed = array('png', 'jpg', 'jpeg');
      if ( !in_array( substr( strrchr( $filename , '.') , 1 ) , $allowed) ) {
        throw new InternalErrorException("Error Processing Request.", 1);
      }elseif( is_uploaded_file( $file_tmp_name ) ){
        move_uploaded_file($file_tmp_name, $dir.DS.$newname);
      }

      $data['filename'] = $newname;
    }
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
    ->allowEmpty('entity');

    $validator
    ->allowEmpty('filename');

    $validator
    ->allowEmpty('type');

    $validator
    ->allowEmpty('obs');

    return $validator;
  }

  /**
  * Returns a rules checker object that will be used for validating
  * application integrity.
  *
  * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
  * @return \Cake\ORM\RulesChecker
  */
  // public function buildRules(RulesChecker $rules)
  // {
  //     $rules->add($rules->existsIn(['receita_id'], 'Receitas'));
  //
  //     return $rules;
  // }
}
