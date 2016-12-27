@extends('layouts.app')

@section('title', 'Giới thiệu')

@section('menu.introduction', 'active')

@section('styles')
    {{Html::style('metronic/dtui/css/index.css')}}
    {{Html::style('metronic/dtui/css/main.css')}}
@endsection

@section('content')
    <!-- BEGIN CONTAINER -->
    <div class="page-content">
        <!-- BEGIN CONTENT -->
        <div class="container">
            <!-- BEGIN PAGE CONTENT BODY -->
            <div class="page-content-inner">
                <div class="row margin-bottom-20">
                    <div class="col-lg-12">
                        <div class="portlet light about-text" style="height: inherit;">
                            <h4 style="background-color: #3fc8da">
                                <i class="fa fa-check icon-info"></i> Giới thiệu hệ thống</h4>
                            <p class="margin-top-20">
                                Hệ thống đăng ký khóa luận do sinh viên trường Đại học Công nghệ - Đại học Quốc gia Hà
                                Nội xây dựng và phát triển.
                                Hệ thống gồm các chức năng chính
                            </p>
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="list-unstyled margin-top-10 margin-bottom-10">
                                        <li>
                                            <i class="fa fa-check"></i> Tìm hiểu các hướng nghiên cứu
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i> Tìm hiểu các lĩnh vực
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i> Thông tin về giảng viên
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i> Đăng ký đề tài, lựa chọn giảng viên hướng dẫn
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i> Nộp đề tài trực tuyến
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="list-unstyled margin-top-10 margin-bottom-10">
                                        <li>
                                            <i class="fa fa-check"></i> Cấu hình thời gian đóng mở đăng ký, nộp đề tài
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i> Tạo biên bản phản biện đề tài trực tuyến
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i> Công bố kết quả đề tài
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i> Hỗ trợ nhập dữ liệu từ excel
                                        </li>
                                        <li>
                                            <i class="fa fa-check"></i> Hỗ trợ xuất báo cáo ra word
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom-20">
                    <div class="col-md-12">
                        <div class="portlet light portlet-fit ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class=" icon-layers font-green"></i>
                                    <span class="caption-subject font-green bold uppercase">Quy trình</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="mt-element-step">
                                    <div class="row step-line">
                                        <div class="mt-step-desc">
                                            <div class="font-blue bold">
                                                <blockquote>
                                                    <p> Sinh viên </p>
                                                </blockquote>

                                            </div>
                                            <div class="caption-desc font-grey-cascade">
                                            </div>
                                            <br></div>
                                        <div class="col-md-3 mt-step-col first done">
                                            <div class="mt-step-number bg-white">1</div>
                                            <div class="mt-step-title uppercase font-grey-cascade">Đăng ký</div>
                                            <div class="mt-step-content font-grey-cascade">
                                                <p>
                                                    Khi nhà trường mở đăng ký đề tài, học viên đủ điều kiện làm đề tài
                                                    sẽ
                                                    chọn cán bộ hướng dẫn và tên đề tài.
                                                    Trong thời gian này học viên có thể sửa đổi tên đề tài, cập nhật cán
                                                    bộ hướng dẫn
                                                </p>

                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-step-col done">
                                            <div class="mt-step-number bg-white">2</div>
                                            <div class="mt-step-title uppercase font-grey-cascade">Nộp báo cáo</div>
                                            <div class="mt-step-content font-grey-cascade">
                                                Sau khi giảng viên hướng dẫn chấp nhận hướng dẫn đề tài. Khoa thông báo
                                                các đề tài đăng ký chính thức. Khi khoa mở nộp báo cáo đề tài, học viên
                                                nộp bản tóm tắt và toàn văn đề
                                                tài.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-step-col done">
                                            <div class="mt-step-number bg-white">3</div>
                                            <div class="mt-step-title uppercase font-grey-cascade">Bảo vệ đề tài</div>
                                            <div class="mt-step-content font-grey-cascade">
                                                Khoa sẽ phân công hội đồng bảo vệ. Học viên theo dõi thông báo để biết
                                                ngày và cách thức bảo vệ.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-step-col active">
                                            <div class="mt-step-number bg-white">4</div>
                                            <div class="mt-step-title uppercase font-grey-cascade">Kết quả đề tài</div>
                                            <div class="mt-step-content font-grey-cascade">
                                                Sau khi bảo vệ xong, khoa sẽ công bố biên bản và kết quả bảo vệ đề tài.
                                                Trong bước này học viên có thể cần nộp bổ sung đề tài khi hội đồng yêu
                                                cầu thêm.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="margin-bottom-20 stories-cont">
                    <div class="portlet light portlet-fit ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green bold uppercase">Nhóm phát triển</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="portlet light">
                                        <div class="photo">
                                            <img src="img/member/tuantm.jpg"
                                                 alt=""
                                                 class="img-responsive"></div>
                                        <div class="title">
                                            <span> Trần Minh Tuấn </span>
                                        </div>
                                        <div class="">
                                            <ul class="list-unstyled margin-top-10 margin-bottom-10">
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Thiết lập các resource (framework,
                                                    library, tạo
                                                    repository, task issues) cho
                                                    project
                                                </li>
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Thiết kế cơ sở dữ liệu
                                                </li>
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Viết các chức năng
                                                </li>
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Module xuất báo cáo ra word
                                                </li>
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Load ajax
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="portlet light">
                                        <div class="photo">
                                            <img src="img/member/nhatnv.jpg"
                                                 alt=""
                                                 class="img-responsive"></div>
                                        <div class="title">
                                            <span> Nguyễn Văn Nhật </span>
                                        </div>
                                        <div class="">
                                            <ul class="list-unstyled margin-top-10 margin-bottom-10">
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Viết các chức năng
                                                </li>
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Thiết lập các layout cho view
                                                </li>
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Module nhập dữ liệu từ excel
                                                </li>
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Tạo sitemap
                                                </li>
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Tạo cây lĩnh vực ACM
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="portlet light">
                                        <div class="photo">
                                            <img src="img/member/vuct.jpg"
                                                 alt=""
                                                 class="img-responsive"></div>
                                        <div class="title">
                                            <span> Chu Thừa Vũ </span>
                                        </div>
                                        <div class="">
                                            <ul class="list-unstyled margin-top-10 margin-bottom-10">
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Tạo dữ liệu giả
                                                </li>
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Hoàn thiệu các view
                                                </li>
                                                <li class="margin-top-5">
                                                    <i class="fa fa-circle-o"></i> Kiểm thử giao diện, chức năng
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
@endsection