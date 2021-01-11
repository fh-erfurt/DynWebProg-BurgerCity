<?php



namespace dwp\model;
use \dwp\core\Model as M;

class Orders extends \dwp\core\Model
{
    const TABLENAME = 'Orders';

    protected $schema = [
        'orderId' => [ 'type' => M::TYPE_INTEGER ],
        'createdAt' => [ 'type' => M::TYPE_STRING],
        'updatedAt' => [ 'type' => M::TYPE_STRING],
        'orderDate' => [ 'type' => M::TYPE_DATE ],
        'customerId' => [ 'type' => M::TYPE_INTEGER ],
        'deliveryAdressId' => [ 'type' => M::TYPE_INTEGER ],
        'productId' => [ 'type' => M::TYPE_INTEGER ],
        'deliveryInformation' => [ 'type' => M::TYPE_STRING 'max' => 255 ],
        
        
        
            ],
        ],
    ];
}