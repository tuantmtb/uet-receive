<div class="row">
    <div class="col-md-12">
        <div class="table-scrollable" style="">
            <table class="table table-hover" id="table-course">
                <thead>
                <tr>
                    <th> #</th>
                    <th> Môn học</th>
                    <th> Mã lớp</th>
                    <th> Số TC</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $index => $course)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td><a href="{{route('download', ['link' => $course->link_remote])}}">
                                {{$course->name}}
                            </a></td>
                        <td>{{$course->code}}</td>
                        <td>{{$course->credit}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
