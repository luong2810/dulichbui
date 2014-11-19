<?php
class ListController extends BaseController {

    public function index()
    {
        $group_news = Groups::listNew(6);
        $user_post_news = Postss::listUserNew(6);
        $service_news = Services::listNew(6);
        return View::make('list.index',array(
                                        'group_news'=>$group_news,                    
                                        'user_post_news'=>$user_post_news,                    
                                        'service_news'=>$service_news                    
                                        ));
    }

}