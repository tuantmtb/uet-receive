<h3>Chào bạn {{$user->name}}</h3>
<p>Tài khoản của bạn vừa được tạo thành công trên {{Html::linkRoute('home', config('app.name'))}}</p>
<div>
    <b><i>Thông tin tài khoản</i></b>
</div>
<div>
    <ul>
        <li>Tên tài khoản: {{$user->name}}</li>
        <li>Địa chỉ email: {{$user->email}}</li>
        <li>Mật khẩu: {{$password}}</li>
        <li>Ngày khởi tạo: {{$user->created_at}}</li>
    </ul>
</div>
<p>Cảm ơn bạn đã sử dụng {{config('app.name')}} - Hệ thống tiếp nhận khoá luận sinh viên.
    Hãy {{Html::linkRoute('login', 'đăng nhập')}} để thay đổi mật khẩu mặc định.</p>
<p>Trân trọng.</p>
