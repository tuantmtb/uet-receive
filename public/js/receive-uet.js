/**
 * Created by tuantmtb on 12/28/16.
 */
$("#code").keyup(function ($e) {
    $("#dialog-helper").hide();
    resetData();
    if ($("#code").val().length == 8) {
        $(".table-scrollable").show();
        var code = $("#code").val();
        var url = 'api/findStudentByCode/' + code;
//                console.log(url);
        $.get(url, function (data) {
            if (data["status"] == "success") {
//                        console.log("success");
                $("#fullname-intro").text("sinh viên : " + data["name"]);
                $("#fullname-intro").show();
                $("#dialog-helper").hide();
                $("#fullname").val(data["name"]);
                $("#class").text(data["class"]);
                $("#tbody-table-course").text("");
                $.each(data["courses"], function (i, course) {
                    if (course.link_remote) {
                        $("#tbody-table-course").append("<tr> <td> " + (i + 1) +
                            "</td> <td> <a target=\"_blank\" href=\" " + "/download?link=" + course.link_remote + " \"> " + course.name + "</a></td> <td>" + course.code + "</td> <td>" + course.credit + "</td> <td> <a target=\"_blank\" href=\" " + "/download?link=" + course.link_remote + " \"><span class=\"label label-sm label-success\" style=\"font-size:12px \"> Đã có điểm </span> </a></td></tr>"
                        );
                    } else {
                        $("#tbody-table-course").append("<tr> <td> " + (i + 1) +
                            "</td> <td>" + course.name + "</td> <td>" + course.code + "</td> <td>" + course.credit + "</td> <td> <span class=\"label label-sm label-info\"> Chưa có điểm </span> </td></tr>"
                        );
                    }
                })
            }
            if (data["status"] == "not_found") {
                resetData();
                $("#dialog-helper-data").text("Mã sinh viên không tồn tại");
                $("#dialog-helper").show();
                $("#fullname-intro").hide();
                $(".table-scrollable").hide();
            }
        });
    } else {
        $(".table-scrollable").hide();
        $("#fullname-intro").hide();
    }

});
function resetData() {
    $("#fullname-intro").text("");
    $("#fullname").val("");
    $("#class").text("");
    $("#tbody-table-course").text("");
}

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1776380719244936";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
