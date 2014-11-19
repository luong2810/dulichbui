<?php


class Postss extends Eloquent {

    protected $table = 'posts';

    public function image()
    {
        return $this->hasMany('Images', 'posts_id', 'id');
    }

 	public function memberAction()
    {
        return $this->hasMany('MemberActions', 'posts_id', 'id');
    }

    public static function listUserNew($number)
    {
    	$postss = new Postss;

    	$datas = $postss->where('posts.type_posts','user')
        ->with('image','memberAction')  
    	->orderBy('posts.created_at','desc')
    	->take($number)
        ->get()
        ->toArray() ;

        foreach ($datas as $key => $value) {
        	$datas[$key]['member_action']['share']=0;
            $datas[$key]['member_action']['upVote']=0;
            $datas[$key]['member_action']['downVote']=0;
            
            foreach (array_pluck($value['member_action'],'type_action') as $subKey => $subValue) {
                $datas[$key]['member_action'][$subValue]++;
                unset($datas[$key]['member_action'][$subKey]);
            }

            foreach ($value['image'] as $subKeyI => $subValueI) {
                $datas[$key]['image'][$subKeyI]=$subValueI['link'];
            }
        }

    	return $datas ;
    }
}