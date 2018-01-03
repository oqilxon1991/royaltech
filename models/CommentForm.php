<?php

namespace app\models;

use yii\base\Model;
use Yii;

class CommentForm extends Model{

	public $comment;

	public function rules(){
		return [
			[['comment'], 'required'],
			[['comment'], 'string', 'length' => [3,250]]
		];
	}

	public function saveComment($product_id){

		$comment = new Comment;
		$comment->text = $this->comment;
		$comment->user_id = Yii::$app->user->id;
		$comment->product_id = $product_id;
		$comment->status = '0';
		$comment->date = date('Y-m-d');
		//vd($comment->attributes);
        if($comment->save()){
            return true;
        }else{
            vd($comment->errors);
        }
	}
}
?>