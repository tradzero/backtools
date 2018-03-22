var Tool = new Vue({
    methods: {
        sweet: function (text, type, callback) {
            callback
                ? swal({ title: '提示', text: text, type: type }, callback)
                : swal('提示', text, type);
        },
        sweetConfirn: function (text, callback) {
            swal({
                title: "提示",
                text: text,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "确认",
                cancelButtonText: "取消",
                closeOnConfirm: false
            }, callback);
        },
        reload: function () {
            location.reload();
        },
        postToggle: function (url, data) {
            axios.post(url, data).then(function (rep) {
                var isError = rep.data.code == -1;
                var text = isError ? rep.data.errmsg : rep.data.data.message;
                var type = isError ? 'error' : 'success';
                Tool.sweet(text, type, Tool.reload);
            });
        }
    }
});
