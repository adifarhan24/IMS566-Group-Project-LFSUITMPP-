<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LostReport Entity
 *
 * @property int $id
 * @property string $item_name
 * @property string $category
 * @property string|null $description
 * @property string|null $last_seen_location
 * @property \Cake\I18n\Date|null $lost_date
 * @property string $reporter_name
 * @property string $reporter_contact
 * @property string|null $reporter_matrix_id
 * @property string|null $image_file
 * @property string|null $status
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 */
class LostReport extends Entity
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
    protected array $_accessible = [
        'item_name' => true,
        'category' => true,
        'description' => true,
        'last_seen_location' => true,
        'lost_date' => true,
        'reporter_name' => true,
        'reporter_contact' => true,
        'reporter_matrix_id' => true,
        'image_file' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ];
}
