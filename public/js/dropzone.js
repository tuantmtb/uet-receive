window.Dropzone.options.uploadZone = {
    paramName: 'file',
    maxFileSize: 2,
    maxFiles: 1,
    acceptedFiles: '.xls,.xlsx,.csv',
    dictInvalidFileType: 'Định dạng tệp không hợp lệ',
    dictFileTooBig: 'Dung lượng file vượt quá 2MB',
    accept: function (file, done) {
        done("Có lỗi trong quá trình tải lên");
    }
};