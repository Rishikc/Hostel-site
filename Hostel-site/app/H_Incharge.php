<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class H_Incharge extends Model
{
    //
    protected $table = "hostel_incharge";
    public $timestamps = false;

    public static function details()
	{
		//return DB::select(DB::raw("SELECT topic_id, topic_name FROM topics, topics_topics_map WHERE topic_id = child_topic_id AND child_topic_id = parent_topic_id"))->get();
		return DB::table("hostels")
					->join('hostel_incharge', 'hostel_incharge.hostel_id', '=', 'hostels.id')
					->selectRaw('hostel_incharge.id as id, hostel_incharge.name as name, hostels.name as hname, position, mail, hostel_incharge.image_url as image_url')
					->get();
	}
}
