<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InputDetail extends Model
{
    public static function updateData($request){
		$status = false;
		try{
			$inputDetail;
			if(isset($request->id)){
				$inputDetail = InputDetail::find($request->id);
			}else{
				$inputDetail = new InputDetail;	
			}
			$inputDetail->user_id = $request->userId;
			$inputDetail->amount = $request->amount;
			$inputDetail->category_id = $request->categoryId;
			$inputDetail->currency_id = $request->currencyId;
			$inputDetail->consumption_flag = $request->consumptionFlag;
			$inputDetail->location = $request->location;
			$inputDetail->save();
			$status = true;
		}catch(Exception $e){
			echo 'Message: ' .$e->getMessage();
		}
		return $status;
	}
}
