<?php


class Services extends Eloquent {

    protected $table = 'service';

    public function memberAction()
    {
        return $this->hasMany('MemberActions', 'service_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany('Postss', 'service_id', 'id');
    }

    public static function listNew($number)
    {
    	$services = new Services;

    	$datas = $services->with('memberAction','posts.image')  
    	->orderBy('service.created_at','desc')
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

            foreach ($datas[$key]['posts'] as $suKkeyP => $subValueP) {
                foreach ($subValueP['image'] as $subKeyI => $subValueI) {
                    if($subValueI['privacy']=='public'){
                        $datas[$key]['image'][]=$subValueI['link'];
                    }
                }
            }

            unset($datas[$key]['posts']);
        }

    	return $datas ;
    }
}