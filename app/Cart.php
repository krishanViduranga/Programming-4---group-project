<?php
/**
 * Created by PhpStorm.
 * User: Pasindu
 * Date: 12/17/2017
 * Time: 3:29 PM
 */

namespace App;


class Cart
{
    public $items=null;
    public $totalQty=0;
    public $totalPrice=0;

    public function __construct($oldCart)
    {
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice ;
        }
    }

    public function add($item,$id){
        $storedItem=[
            'qty' =>0,
            'price'=>$item->product_price,
            'item'=>$item

        ];
        if ($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem=$this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->product_price*$storedItem['qty'];

        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->product_price;

    }
}