<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Productos Model
 *
 * @method \App\Model\Entity\Producto newEmptyEntity()
 * @method \App\Model\Entity\Producto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Producto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Producto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Producto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Producto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('productos');
        $this->setDisplayField('prodid');
        $this->setPrimaryKey('prodid');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('prodimg')
            ->maxLength('prodimg', 255)
            ->requirePresence('prodimg', 'create')
            ->notEmptyString('prodimg');

        $validator
            ->scalar('prodname')
            ->maxLength('prodname', 255)
            ->requirePresence('prodname', 'create')
            ->notEmptyString('prodname');

        $validator
            ->scalar('proddesc')
            ->maxLength('proddesc', 255)
            ->requirePresence('proddesc', 'create')
            ->notEmptyString('proddesc');

        $validator
            ->scalar('prodcant')
            ->maxLength('prodcant', 255)
            ->requirePresence('prodcant', 'create')
            ->notEmptyString('prodcant');

        $validator
            ->scalar('prodprec')
            ->maxLength('prodprec', 255)
            ->requirePresence('prodprec', 'create')
            ->notEmptyString('prodprec');

        $validator
            ->scalar('prodstock')
            ->maxLength('prodstock', 255)
            ->requirePresence('prodstock', 'create')
            ->notEmptyString('prodstock');

        return $validator;
    }
}
