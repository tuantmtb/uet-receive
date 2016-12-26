@extends('layouts.profile.account')

@section('title', 'Trang cá nhân')
@section('menu.profile', 'active')

@section('profile-content-inner')
    <div class="row">
        <div class="col-md-6">
            <!-- BEGIN PORTLET -->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart theme-font"></i>
                        <span class="caption-subject font-blue-madison bold">Thông tin hồ sơ</span>

                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-hover table-light">
                        <tbody>
                        @if(Entrust::hasRole('teacher'))
                            <tr>
                                <td class="">
                                    <div>Giảng viên</div>
                                </td>
                                <td>
                                    <div>{{Auth::user()->name}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>Email</div>
                                </td>

                                <td>
                                    <div>
                                        {{Html::mailto(Auth::user()->email)}}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>Đơn vị</div>
                                </td>
                                @if(isset(Auth::user()->teacher->unit))
                                    <td>
                                        <div>
                                            {{Html::linkRoute('unit.show', Auth::user()->teacher->unit->name, [Auth::user()->teacher->unit->id])}}
                                        </div>
                                    </td>
                                @endif
                            </tr>
                            <tr>
                                <td class="">
                                    <div>Hướng nghiên cứu</div>
                                </td>
                                <td>
                                    @if(count(Auth::user()->teacher->interests) > 0)
                                        @foreach(Auth::user()->teacher->interests as $interest)
                                            <div>
                                                {{Html::linkRoute('interest.show', $interest->name, [$interest->id])}}
                                            </div>
                                        @endforeach
                                    @else
                                        <div>
                                            Bạn chưa chọn hướng nghiên cứu.
                                        </div>
                                        <div>
                                            Bấm vào <b>{{Html::linkRoute('teacher.interests', 'đây')}}</b> để chọn.
                                        </div>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>Lĩnh vực nghiên cứu</div>
                                </td>
                                <td>
                                    @if(count(Auth::user()->teacher->fields) > 0)
                                        @foreach(Auth::user()->teacher->fields as $field)
                                            <div>
                                                {{Html::linkRoute('field.show', $field->name, [$field->id])}}
                                            </div>
                                        @endforeach
                                    @else
                                        <div>
                                            Bạn chưa chọn lĩnh vực.
                                        </div>
                                        <div>
                                            Bấm vào <b>{{Html::linkRoute('teacher.fields', 'đây')}}</b> để chọn.
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endif

                        @if(Entrust::hasRole('student'))
                            <tr>
                                <td class="">
                                    <div>Sinh viên</div>
                                </td>
                                <td>
                                    <div>{{Auth::user()->name}}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>Email</div>
                                </td>

                                <td>
                                    <div>
                                        {{Html::mailto(Auth::user()->email)}}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>Lớp</div>
                                </td>

                                <td>
                                    <div>
                                        {{Html::linkRoute('clazz.show', Auth::user()->student->clazz->name, [Auth::user()->student->clazz_id])}}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>Khoa</div>
                                </td>

                                <td>
                                    <div>
                                        {{Html::linkRoute('faculty.show', Auth::user()->student->clazz->courseprogram->faculty->unit->name, [Auth::user()->student->clazz->courseprogram->faculty_id])}}
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <div>Ghi chú</div>
                                </td>

                                <td>
                                    <div class="">
                                        @if(Auth::user()->hasRole('dissertator'))
                                            <div class="alert alert-info">
                                                Được phép làm đề tài
                                            </div>
                                        @else
                                            <div class="alert alert-danger">
                                                Không được phép làm đề tài
                                            </div>
                                        @endif
                                    </div>

                                    <div class="">
                                        @if(Auth::user()->hasRole('protector'))
                                            <div class="alert alert-info">
                                                Được phép bảo vệ
                                            </div>
                                        @else
                                            <div class="alert alert-danger">
                                                Không được phép bảo vệ
                                            </div>
                                        @endif
                                    </div>

                                    <div class="">
                                        @if(Auth::user()->student->dissertation && Auth::user()->student->dissertation->dissertationresult && Auth::user()->student->dissertation->dissertationresult->is_accepted)
                                            <div class="alert alert-success">
                                                Đã hoàn thành bảo vệ đề tài
                                            </div>
                                        @else
                                            <div class="alert alert-danger">
                                                Cần bổ sung hồ sơ cho đề tài
                                            </div>
                                        @endif
                                    </div>

                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END PORTLET -->
        </div>
        @if(Entrust::hasRole('teacher'))
            <div class="col-md-6">
                <!-- BEGIN PORTLET -->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption caption-md">
                            <i class="icon-bar-chart theme-font"></i>
                            <span class="caption-subject font-blue-madison bold">Thao tác</span>

                        </div>
                    </div>
                    <div class="portlet-body">

                        <div class="margin-top-10 margin-bottom-10">
                            {{Html::linkRoute('teacher.disertationall', 'Danh sách đề tài hướng dẫn', [],['class'=>'btn blue btn-outline'])}}
                        </div>
                        <div class="marign-top-10">
                            {{Html::linkRoute('teacher.councils', 'Hội đồng đang là thành viên', [],['class'=>'btn green btn-outline'])}}
                        </div>

                    </div>
                </div>
                <!-- END PORTLET -->
            </div>
        @endif

        @if(Entrust::hasRole('student'))
            @if(Auth::user()->student->dissertation)
                <div class="col-md-6">
                    <!-- BEGIN PORTLET -->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font"></i>
                                <span class="caption-subject font-blue-madison bold">Thông tin đề tài</span>

                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-hover table-light">
                                <tbody>

                                <tr>
                                    <td class="">
                                        <div>Tên đề tài</div>
                                    </td>
                                    <td>
                                        <div>
                                            {{Html::linkRoute('thesis.show',Auth::user()->student->dissertation->name, [Auth::user()->student->dissertation->id])}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <div>Thời gian cập nhật</div>
                                    </td>

                                    <td>
                                        <div>
                                            {{Auth::user()->student->dissertation->created_at}}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <div>Giảng viên hướng dẫn</div>
                                    </td>

                                    <td>
                                        @foreach(Auth::user()->student->dissertation->teachers as $teacher)
                                            <div>
                                                <span>GV </span>{{Html::linkRoute('teacher.show',$teacher->user->name, [$teacher->id])}}
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <div>Khoa</div>
                                    </td>
                                    <td>
                                        <div>
                                            {{Html::linkRoute('faculty.show', Auth::user()->student->clazz->courseprogram->faculty->unit->name, [Auth::user()->student->clazz->courseprogram->faculty_id])}}
                                        </div>
                                    </td>
                                </tr>
                                @if(\App\Http\Facades\StudentThesis::check(Auth::user()->student->dissertation->id))
                                    <tr>
                                        <th><i class="fa fa-cogs"></i> Thao tác</th>
                                        <td>
                                            @if(StudentThesis::canRegister())
                                                <a href="{{route('thesis.edit', [Auth::user()->student->dissertation->id])}}"
                                                   class="btn btn-outline btn-circle btn-sm purple">
                                                    <i class="fa fa-edit"></i> Sửa đề tài </a>
                                            @endif
                                            {{--TODO: route Nộp báo cáo--}}
                                            @if(StudentThesis::canResubmission()||StudentThesis::canSubmission())
                                                <a href="javascript:"
                                                   class="btn btn-outline btn-circle btn-sm purple">
                                                    <i class="fa fa-check"></i> Nộp báo cáo </a>
                                            @endif
                                        </td>
                                    </tr>

                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END PORTLET -->
                </div>
            @endif
        @endif
    </div>
@endsection

