function loadImgAsync(source) {
    return $.Deferred(function (task) {
        var image = new Image();
        image.onload = function () {
            task.resolve(image);
        };
        image.onerror = function () {
            task.reject();
        };
        image.src = source;
    }).promise();
}

function replaceImgAsync(url, img, classes) {
    $.when(loadImgAsync(url)).done(function (image) {
        $(image).addClass(classes);
        $(img).replaceWith(image);
    });
}

function submitFormWhenSwitch(checkbox, form) {
    $(checkbox).on('switchChange.bootstrapSwitch', function () {
        $(form).submit();
    });
}