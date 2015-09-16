<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class M_Incharge extends Model
{
    //
    protected $table = "mess_incharge";
    public $timestamps = false;

    public static function details()
	{
		//return DB::select(DB::raw("SELECT topic_id, topic_name FROM topics, topics_topics_map WHERE topic_id = child_topic_id AND child_topic_id = parent_topic_id"))->get();
		return DB::table("messes")
					->join('mess_incharge', 'mess_incharge.mess_id', '=', 'messes.id')
					->selectRaw('mess_incharge.id as id, mess_incharge.name as name, messes.name as mname, position, mail, mess_incharge.image_url as image_url')
					->get();
	}
}
