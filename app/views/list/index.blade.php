@extends('layouts.application')

@section('content')
	
	<h2 class="page-header" style="color: inherit;font-size: xx-large;">Nhóm mới thành lập </h2>

	<div class="row">
        @foreach($group_news as $key => $value)
            <div class="col-md-4">
                 <div id="carousel_fade" class="list carousel slide carousel-fade">
                      <div class="carousel-inner">
                          @foreach($value['image'] as $subKey => $subValue)
                            @if($subKey==0)
                              <div class="item active">
                            @else
                              <div class="item">
                            @endif
                              <img src="img/image/{{$subValue}}">
                            </div>
                          @endforeach
                      </div>
                      <div class="carousel-caption">
                            <div class="statistic">
                              <i class="fa fa-fw fa-thumbs-o-up"> </i> {{$value['member_action']['upVote']}}
                              <i class="fa fa-fw fa-thumbs-o-down"> </i> {{$value['member_action']['downVote']}}
                              <i class="fa fa-fw fa-share-square-o"> </i> {{$value['member_action']['share']}}
                              <i class="fa fa-fw fa-user"></i> {{$value['group_member']}}
                            </div>
                              <h4> {{$value['group_name']}} </h4>
                      </div>
                </div>
            </div>
            @endforeach

  </div>


  <h2 class="page-header" style="color: inherit;font-size: xx-large;">Chia sẻ kinh nghiệm mới </h2>

  <div class="row">
        @foreach($user_post_news as $key => $value)
            <div class="col-md-4">
                 <div id="carousel_fade" class="list carousel slide carousel-fade">
                      <div class="carousel-inner">
                          @foreach($value['image'] as $subKey => $subValue)
                            @if($subKey==0)
                              <div class="item active">
                            @else
                              <div class="item">
                            @endif
                              <img src="img/image/{{$subValue}}">
                            </div>
                          @endforeach
                      </div>
                      <div class="carousel-caption">
                            <div class="statistic">
                              <i class="fa fa-fw fa-thumbs-o-up"> </i> {{$value['member_action']['upVote']}}
                              <i class="fa fa-fw fa-thumbs-o-down"> </i> {{$value['member_action']['downVote']}}
                              <i class="fa fa-fw fa-share-square-o"> </i> {{$value['member_action']['share']}}
                            </div>
                              <h4> {{$value['title']}} </h4>
                      </div>
                </div>
            </div>
            @endforeach

  </div>

    <h2 class="page-header" style="color: inherit;font-size: xx-large;">Chia sẻ kinh nghiệm mới </h2>

  <div class="row">
        @foreach($service_news as $key => $value)
            <div class="col-md-4">
                 <div id="carousel_fade" class="list carousel slide carousel-fade">
                      <div class="carousel-inner">
                          @foreach($value['image'] as $subKey => $subValue)
                            @if($subKey==0)
                              <div class="item active">
                            @else
                              <div class="item">
                            @endif
                              <img src="img/image/{{$subValue}}">
                            </div>
                          @endforeach
                      </div>
                      <div class="carousel-caption">
                            <div class="statistic">
                              <i class="fa fa-fw fa-thumbs-o-up"> </i> {{$value['member_action']['upVote']}}
                              <i class="fa fa-fw fa-thumbs-o-down"> </i> {{$value['member_action']['downVote']}}
                              <i class="fa fa-fw fa-share-square-o"> </i> {{$value['member_action']['share']}}
                            </div>
                              <h4> {{$value['service_name']}} </h4>
                      </div>
                </div>
            </div>
            @endforeach

  </div>

@stop
