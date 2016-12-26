function initJstree(tree, loader) {
    $(tree).jstree({
        "plugins": ["wholerow", "conditionalselect", "search"],
        "core": {
            "expand_selected_onload": true,
            "multiple": false,
            "force_text": true,
            "dblclick_toggle": false,
            "themes": {
                "variant": "large",
                "dots": false,
                "icons": false
            }
        },
        "conditionalselect": function (node, event) {
            window.location = node.a_attr.href;
            return false;
        },
        "search": {
            "show_only_matches": true,
        }
    }).show();
    $(loader).hide();
}

function initAjaxJstree(tree, checkbox, url_func, data_func, action_func) {
    $(tree).jstree({
        "plugins": ["wholerow", "search", "contextmenu", checkbox],
        "core": {
            "expand_selected_onload": true,
            "multiple": true,
            "force_text": true,
            "dblclick_toggle": false,
            "themes": {
                "variant": "large",
                "dots": false,
                "icons": false
            },
            "data": {
                'url': url_func,
                'data': data_func
            }
        },
        "search": {
            "show_only_matches": true
        },
        "checkbox": {
            "three_state": false
        },
        "contextmenu": {
            "items": function (node) {
                return {
                    "Show": {
                        "label": "Xem thông tin",
                        "action": action_func
                    }
                }
            }
        }
    });
}

function setupOnClick(button, tree, url) {
    $(button).click(function () {
        var data = $(tree).jstree('get_selected');
        $.post(url, {
            'field_ids': data
        }, function () {
            toastr.success('Cập nhật lĩnh vực thành công', 'Cập nhật lĩnh vực');

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "showDuration": "100",
                "hideDuration": "100",
                "timeOut": "2000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
        });
    });
}

function initSearchPlugin(tree, input) {
    var to = 0;
    $(input).keyup(function () {
        if (to) {
            clearTimeout(to);
        }
        to = setTimeout(function () {
            var v = input.val();
            $(tree).jstree(true).search(v);
        }, 250);
    });
    $(input).parent().parent().parent().parent().parent().show();
}

function fireKeyup(input) {
    $(input).keyup();
}