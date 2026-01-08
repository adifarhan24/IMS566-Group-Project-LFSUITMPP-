<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LostReports Model
 *
 * @method \App\Model\Entity\LostReport newEmptyEntity()
 * @method \App\Model\Entity\LostReport newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\LostReport> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LostReport get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\LostReport findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\LostReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\LostReport> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LostReport|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\LostReport saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\LostReport>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LostReport>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LostReport>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LostReport> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LostReport>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LostReport>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\LostReport>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\LostReport> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LostReportsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('lost_reports');
        $this->setDisplayField('item_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('item_name')
            ->maxLength('item_name', 100)
            ->requirePresence('item_name', 'create')
            ->notEmptyString('item_name');

        $validator
            ->scalar('category')
            ->maxLength('category', 50)
            ->requirePresence('category', 'create')
            ->notEmptyString('category');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('last_seen_location')
            ->maxLength('last_seen_location', 100)
            ->allowEmptyString('last_seen_location');

        $validator
            ->date('lost_date')
            ->allowEmptyDate('lost_date');

        $validator
            ->scalar('reporter_name')
            ->maxLength('reporter_name', 100)
            ->requirePresence('reporter_name', 'create')
            ->notEmptyString('reporter_name');

        $validator
            ->scalar('reporter_contact')
            ->maxLength('reporter_contact', 20)
            ->requirePresence('reporter_contact', 'create')
            ->notEmptyString('reporter_contact');

        $validator
            ->scalar('reporter_matrix_id')
            ->maxLength('reporter_matrix_id', 20)
            ->allowEmptyString('reporter_matrix_id');

        $validator
            ->scalar('image_file')
            ->maxLength('image_file', 255)
            ->allowEmptyFile('image_file');

        $validator
            ->scalar('status')
            ->maxLength('status', 20)
            ->allowEmptyString('status');

        return $validator;
    }
}
