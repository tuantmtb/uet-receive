<div>Dear {{$user->name}},</div>
<div>Nhà trường đã công bố điểm môn {{$course->name}}, thông tin cụ thể như sau:</div>
<ul>
    <li>Tên môn học: {{$course->name}}</li>
    <li>Mã môn học: {{$course->code}}</li>
    <li>Tải về danh sách
        điểm {{Html::link(route('download', ['link' => $course->link_remote]), 'tại đây')}}</li>
    <li>Hoặc {{Html::link($course->link_origin, 'tại đây')}}</li>
    <li>Xem các môn khác <a href="{{config('app.url')}}">tại đây</a></li>
</ul>
<div>Best regards,</div>
<div>{{config('app.name')}}.</div>
<div>Website: <a href="{{config('app.url')}}">hong.sguet.com</a></div>
<div>Fanpage: <a href="https://facebook.com/sdpttl">SDP - Student Developing Project</a></div>