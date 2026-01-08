<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FoundReports Model
 *
 * @method \App\Model\Entity\FoundReport newEmptyEntity()
 * @method \App\Model\Entity\FoundReport newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\FoundReport> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FoundReport get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\FoundReport findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\FoundReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\FoundReport> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FoundReport|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\FoundReport saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\FoundReport>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\FoundReport>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\FoundReport>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\FoundReport> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\FoundReport>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\FoundReport>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\FoundReport>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\FoundReport> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FoundReportsTable extends Table
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

        $this->setTable('found_reports');
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
            ->scalar('found_location')
            ->maxLength('found_location', 100)
            ->allowEmptyString('found_location');

        $validator
            ->date('found_date')
            ->allowEmptyDate('found_date');

        $validator
            ->scalar('finder_name')
            ->maxLength('finder_name', 100)
            ->requirePresence('finder_name', 'create')
            ->notEmptyString('finder_name');

        $validator
            ->scalar('finder_contact')
            ->maxLength('finder_contact', 20)
            ->requirePresence('finder_contact', 'create')
            ->notEmptyString('finder_contact');

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
