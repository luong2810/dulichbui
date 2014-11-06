@extends('layouts.application')

@section('content')
<div class="row">
	<div class="col-xs-9">
		<img src="../img/groupnew.jpg" style="width: 100%;
max-height: 250px;">
		<div>
			<label class="control-label" for="inputSuccess" style="font-size: initial;
color: #7D888B;
padding-top: 5px;">Nhóm phượt xuyên việt ...</label>
			<div style="float:right">
			<button type="button" class="btn btn-info"><i class="fa fa-fw fa-users"></i> Thành viên</button>
			<button type="button" class="btn btn-info"><i class="fa fa-fw fa-flag"></i> Sự kiện</button>
			<button type="button" class="btn btn-info"><i class="fa fa-fw fa-picture-o"></i> Album ảnh</button>
			</div>
		</div>

		<div class="row" style="padding-top: 15px;">
			<div class="col-xs-8">
				<div class="form-group" style="padding-bottom: 50px;">
	                <label><i class="fa fa-fw fa-pencil-square-o"></i> Đăng bài</label>
	                <textarea class="form-control" rows="3" placeholder="Chia sẻ điều gì đó ..."></textarea>
	                <div class="btn-group" style="float: right;">
                        <button type="button" class="btn btn-info">Đăng bài</button>
                    </div>
	            </div>


	            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Du lịch quất lâm =))</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                   
                                    <p>
                                       Thời gian gần đây, xu hướng đi du lịch theo nhóm bắt đầu trở nên phổ biến. Những trang mạng xã hội, các diễn đàn du lịch luôn được dân du lịch bụi lựa chọn để tìm kiếm bạn đồng hành cho những chuyến đi. Một vài lý do để bạn đi du lịch theo nhóm:
                                    </p>
                                </div><!-- /.box-body -->
                                <div>
                                	<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Tham gia</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Thích</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Bình luận</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Chia sẻ</label>
                                </div>
                                
                                <div>
                                	<p class="margin"><code>Xuyên Việt</code> Anh cho em theo với .... =))</p>
                                	<p class="margin"><code>Bắc Nam</code> Anh cho em theo với .... =))</p>
                                	<p class="margin"><code>Ngựa Hoang</code> Anh cho em theo với .... =))</p>

                                </div>
                                
                                <div>
                                	<div><i class="fa fa-fw fa-female" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">18 người tham gia</label>
									<i class="fa fa-fw fa-heart" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">81 thích</label>
									<i class="fa fa-fw fa-skype" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">23 shared</label>
									</div>
                                </div>
                                
                                <div>
                                	<div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Viết bình luận...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>	
                            </div>

                            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Du lịch quất lâm =))</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                   
                                    <p>
                                       Thời gian gần đây, xu hướng đi du lịch theo nhóm bắt đầu trở nên phổ biến. Những trang mạng xã hội, các diễn đàn du lịch luôn được dân du lịch bụi lựa chọn để tìm kiếm bạn đồng hành cho những chuyến đi. Một vài lý do để bạn đi du lịch theo nhóm:
                                    </p>
                                </div><!-- /.box-body -->
                                <div>
                                	<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Tham gia</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Thích</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Bình luận</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Chia sẻ</label>
                                </div>
                                
                                <div>
                                	<p class="margin"><code>Xuyên Việt</code> Anh cho em theo với .... =))</p>
                                	<p class="margin"><code>Bắc Nam</code> Anh cho em theo với .... =))</p>
                                	<p class="margin"><code>Ngựa Hoang</code> Anh cho em theo với .... =))</p>

                                </div>
                                
                                <div>
                                	<div><i class="fa fa-fw fa-female" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">18 người tham gia</label>
									<i class="fa fa-fw fa-heart" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">81 thích</label>
									<i class="fa fa-fw fa-skype" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">23 shared</label>
									</div>
                                </div>
                                
                                <div>
                                	<div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Viết bình luận...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>	
                            </div>
                            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Du lịch quất lâm =))</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                   
                                    <p>
                                       Thời gian gần đây, xu hướng đi du lịch theo nhóm bắt đầu trở nên phổ biến. Những trang mạng xã hội, các diễn đàn du lịch luôn được dân du lịch bụi lựa chọn để tìm kiếm bạn đồng hành cho những chuyến đi. Một vài lý do để bạn đi du lịch theo nhóm:
                                    </p>
                                </div><!-- /.box-body -->
                                <div>
                                	<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Tham gia</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Thích</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Bình luận</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Chia sẻ</label>
                                </div>
                                
                                <div>
                                	<p class="margin"><code>Xuyên Việt</code> Anh cho em theo với .... =))</p>
                                	<p class="margin"><code>Bắc Nam</code> Anh cho em theo với .... =))</p>
                                	<p class="margin"><code>Ngựa Hoang</code> Anh cho em theo với .... =))</p>

                                </div>
                                
                                <div>
                                	<div><i class="fa fa-fw fa-female" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">18 người tham gia</label>
									<i class="fa fa-fw fa-heart" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">81 thích</label>
									<i class="fa fa-fw fa-skype" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">23 shared</label>
									</div>
                                </div>
                                
                                <div>
                                	<div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Viết bình luận...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-flat" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>	
                            </div>

			</div>
			<div class="col-xs-4" style="background-color: #E4DFDF;">
				<p class="lead">Nơi đã qua </p>
					<div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Tam đảo huyền ảo =))</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                    	<img src="../img/dulich_nui.jpg" style="width: 50%;padding-right: 10px;" align="left"> 
                                       Thời gian gần đây, xu hướng đi du lịch theo nhóm bắt đầu trở nên phổ biến. Những trang mạng xã hội, các diễn đàn du lịch luôn được dân du lịch bụi lựa chọn để tìm kiếm bạn đồng hành cho những chuyến đi. Một vài lý do để bạn đi du lịch theo nhóm:
                                    </p>
                                </div><!-- /.box-body -->
                                <div>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Thích</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Chia sẻ</label>
                                </div>
                                
                                <div>
                                	<div><i class="fa fa-fw fa-female" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">18 người tham gia</label>
									<i class="fa fa-fw fa-heart" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">81 thích </label><br>
									<i class="fa fa-fw fa-skype" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">23 shared</label>
									</div>
                                </div>
                                
                                <div>
                                	
                                </div>	
                            </div>
                            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Tam đảo huyền ảo =))</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                    	<img src="../img/dulich_nui.jpg" style="width: 50%;padding-right: 10px;" align="left"> 
                                       Thời gian gần đây, xu hướng đi du lịch theo nhóm bắt đầu trở nên phổ biến. Những trang mạng xã hội, các diễn đàn du lịch luôn được dân du lịch bụi lựa chọn để tìm kiếm bạn đồng hành cho những chuyến đi. Một vài lý do để bạn đi du lịch theo nhóm:
                                    </p>
                                </div><!-- /.box-body -->
                                <div>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Thích</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Chia sẻ</label>
                                </div>
                                
                                <div>
                                	<div><i class="fa fa-fw fa-female" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">18 người tham gia</label>
									<i class="fa fa-fw fa-heart" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">81 thích </label><br>
									<i class="fa fa-fw fa-skype" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">23 shared</label>
									</div>
                                </div>
                                
                                <div>
                                	
                                </div>	
                            </div>
                            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Tam đảo huyền ảo =))</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                    	<img src="../img/dulich_nui.jpg" style="width: 50%;padding-right: 10px;" align="left"> 
                                       Thời gian gần đây, xu hướng đi du lịch theo nhóm bắt đầu trở nên phổ biến. Những trang mạng xã hội, các diễn đàn du lịch luôn được dân du lịch bụi lựa chọn để tìm kiếm bạn đồng hành cho những chuyến đi. Một vài lý do để bạn đi du lịch theo nhóm:
                                    </p>
                                </div><!-- /.box-body -->
                                <div>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Thích</label>
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Chia sẻ</label>
                                </div>
                                
                                <div>
                                	<div><i class="fa fa-fw fa-female" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">18 người tham gia</label>
									<i class="fa fa-fw fa-heart" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">81 thích </label><br>
									<i class="fa fa-fw fa-skype" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">23 shared</label>
									</div>
                                </div>
                                
                                <div>
                                	
                                </div>	
                            </div>
			</div>
		</div>
		
	</div>
	<div class="col-xs-3">
		<p class="lead">Dịch vụ hỗ trợ</p>
		<div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Xe đường dài</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                    	<img src="../img/xedulich.jpg" style="width: 50%;padding-right: 10px;" align="left"> 
                                       Thời gian gần đây, xu hướng đi du lịch theo nhóm bắt đầu trở nên phổ biến. Những trang mạng xã hội, các diễn đàn du lịch luôn được dân du lịch bụi lựa chọn để tìm kiếm bạn đồng hành cho những chuyến đi. Một vài lý do để bạn đi du lịch theo nhóm:
                                    </p>
                                </div><!-- /.box-body -->
                                <div>
                                	
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Thích</label>
									
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Chia sẻ</label>
                                </div>
                                
                                <div>
                                	<div>
									<i class="fa fa-fw fa-heart" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">81 thích</label>
									<i class="fa fa-fw fa-skype" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">23 shared</label>
									</div>
                                </div>
                                
                                <div>
                                	
                                </div>	
                            </div>
            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Xe đường dài</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                    	<img src="../img/xedulich.jpg" style="width: 50%;padding-right: 10px;" align="left"> 
                                       Thời gian gần đây, xu hướng đi du lịch theo nhóm bắt đầu trở nên phổ biến. Những trang mạng xã hội, các diễn đàn du lịch luôn được dân du lịch bụi lựa chọn để tìm kiếm bạn đồng hành cho những chuyến đi. Một vài lý do để bạn đi du lịch theo nhóm:
                                    </p>
                                </div><!-- /.box-body -->
                                <div>
                                	
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Thích</label>
									
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Chia sẻ</label>
                                </div>
                                
                                <div>
                                	<div>
									<i class="fa fa-fw fa-heart" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">81 thích</label>
									<i class="fa fa-fw fa-skype" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">23 shared</label>
									</div>
                                </div>
                                
                                <div>
                                	
                                </div>	
                            </div>
               <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Xe đường dài</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                    	<img src="../img/xedulich.jpg" style="width: 50%;padding-right: 10px;" align="left"> 
                                       Thời gian gần đây, xu hướng đi du lịch theo nhóm bắt đầu trở nên phổ biến. Những trang mạng xã hội, các diễn đàn du lịch luôn được dân du lịch bụi lựa chọn để tìm kiếm bạn đồng hành cho những chuyến đi. Một vài lý do để bạn đi du lịch theo nhóm:
                                    </p>
                                </div><!-- /.box-body -->
                                <div>
                                	
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Thích</label>
									
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Chia sẻ</label>
                                </div>
                                
                                <div>
                                	<div>
									<i class="fa fa-fw fa-heart" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">81 thích</label>
									<i class="fa fa-fw fa-skype" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">23 shared</label>
									</div>
                                </div>
                                
                                <div>
                                	
                                </div>	
                            </div>
                 <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Xe đường dài</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                    	<img src="../img/xedulich.jpg" style="width: 50%;padding-right: 10px;" align="left"> 
                                       Thời gian gần đây, xu hướng đi du lịch theo nhóm bắt đầu trở nên phổ biến. Những trang mạng xã hội, các diễn đàn du lịch luôn được dân du lịch bụi lựa chọn để tìm kiếm bạn đồng hành cho những chuyến đi. Một vài lý do để bạn đi du lịch theo nhóm:
                                    </p>
                                </div><!-- /.box-body -->
                                <div>
                                	
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Thích</label>
									
									<label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">Chia sẻ</label>
                                </div>
                                
                                <div>
                                	<div>
									<i class="fa fa-fw fa-heart" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">81 thích</label>
									<i class="fa fa-fw fa-skype" style="
									    padding-left: 10px;
									"></i><label class="text-green" style="
									    font-weight: 600;
									    padding-left: 10px;
									">23 shared</label>
									</div>
                                </div>
                                
                                <div>
                                	
                                </div>	
                            </div>
	</div>
</div>
@stop
