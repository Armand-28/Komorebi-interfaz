<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $prodid
 * @property string $prodimg
 * @property string $prodname
 * @property string $proddesc
 * @property string $prodcant
 * @property string $prodprec
 * @property string $prodstock
 */
class Producto extends Entity
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
        'prodimg' => true,
        'prodname' => true,
        'proddesc' => true,
        'prodcant' => true,
        'prodprec' => true,
        'prodstock' => true,
    ];
}
