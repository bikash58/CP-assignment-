<?php 
namespace App;
use App\Product;


class cart{
	public $items=null;
	public $totalQty=0;
	public $totalPrice=0;
	public $image;
	public $otherdetails;
	
	
	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
			$this->image = $oldCart->image;
			$this->otherdetails = $oldCart->otherdetails;
			
		}
	}

	public function add($item, $id){//new item adding
		
		

		$storedItem = ['qty' => 0, 'price' => $item->price,'image'=>$item->thumbnail_url,'otherDetails'=>$item->other_details];
		

		if($this->items){//check already have an items in array
			
			if(array_key_exists($id, $this->items)){//check already have this item
				$storedItem = $this->items[$id];
			}
		}

		
				
		$storedItem['qty']++;
		$storedItem['image']= $item->thumbnail_url;
		$storedItem['otherdetails']=$item->other_details;
		$storedItem['price'] = $item->price * $storedItem['qty'];//multiplying same product
		 $this->items[$id]=$storedItem;
		 $this->totalQty++;
		 $this->totalPrice += $item->price;
		 $this->image=$item->thumbnail_url;
		 $this->otherdetails=$item->other_details;
			
	}
}