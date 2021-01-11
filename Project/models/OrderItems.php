<?php



namespace dwp\model;
use \dwp\core\Model as M;

class ordersItems extends \dwp\core\Model
{
    const TABLENAME = 'OrderItems';

    protected $schema = [
        'ordersItemsId' => [ 'type' => M::TYPE_INTEGER ],
        'createdAt' => [ 'type' => M::TYPE_STRING],
        'updatedAt' => [ 'type' => M::TYPE_STRING],
        'productId' => [ 'type' => M::TYPE_INTEGER ],
        'quantity' => [ 'type' => M::TYPE_INTEGER ],
        'orderId' => [ 'type' => M::TYPE_INTEGER ],
        
        
            ],
        ],
    ];
}