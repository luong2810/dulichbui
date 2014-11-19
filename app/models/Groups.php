<?php


class Groups extends Eloquent {

    protected $table = 'group';

    public function groupMember()
    {
        return $this->hasMany('GroupMembers', 'group_id', 'id');
    } 

    public function memberAction()
    {
        return $this->hasMany('MemberActions', 'group_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany('Postss', 'group_id', 'id');
    }

    public static function listNew($number)
    {
    	$groups = new Groups;

    	$datas = $groups->where('group.privacy','public')
        ->with('groupMember','memberAction','posts.image')  
    	->orderBy('group.created_at','desc')
    	->take($number)
        ->get()
        ->toArray() ;

        foreach ($datas as $key => $value) {
            $datas[$key]['group_member'] = count($value['group_member']); 
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