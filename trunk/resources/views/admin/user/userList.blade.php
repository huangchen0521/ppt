@extends('layouts.admin')
@section('meta')
    <!-- Data Tables -->
    <link href="/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
@endsection
@section('content')
    <div class="ibox-content animated fadeInRight">
        <table class="table table-striped table-bordered table-hover dataTables_list">
            <thead>
            <tr>
                <th>用户帐号</th>
                <th>姓名</th>
                <th>默认群组</th>
                <th>状态</th>
                <th>在线</th>
                <th>手机号</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script src="/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $(".dataTables_list").dataTable({
                "serverSide": true,//开启服务器获取数据
                "ordering": false,
                "processing": false,
                "lengthChange": false,
                "searching": true,
                "pageLength": 10,
                "ajax": { // 获取数据
                    "url": "{{route('getUsers')}}",
                    "dataType": "json", //返回来的数据形式
                    "dataSrc": "data",
                    /*
                     data: function (d) {//d 是原始的发送给服务器的数据，默认很长。
                     var param = {};//因为服务端排序，可以新建一个参数对象
                     param.start = d.start;//开始的序号
                     param.length = d.length;//要取的数据的
                     /*
                     var formData = $("#filter_form").serializeArray();//把form里面的数据序列化成数组
                     formData.forEach(function (e) {
                     param[e.name] = e.value;
                     });
                     return param;//自定义需要传递的参数。
                     },
                     */
                },
                "sEmptyTable": "数据为空",
                "columns": [ //定义列数据来源
                    {'data': "a1"},
                    {'data': "a2"},
                    {'data': "a3"},
                    {'data': "a4"},
                    {'data': "a5"},
                    {'data': "a6"},
                    {'data': "a0"},
                ],
                "columnDefs": [{
                    "targets": -1, //改写哪一列
                    "data": "a0",
                    "render": function (data, type, row) {
                        var html = "<button class='btn btn-info' onclick='edit(" + row.a0 + ")'>修改</button>" + "   <button name='btn-del' class='btn btn-danger' onclick='del(" + row.a0 + ")'>删除</button>";
                        return html;
                    }
                },]

            });
        });
        function del(id) {
            swal({
                    title: "Are you sure?",
                    text: "你确认要删除此用户吗，删除后无法恢复!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: '是的, 我已经确认',
                    cancelButtonText: '取消',
                    closeOnConfirm: false
                },
                function () {
                    swal("删除成功!", "您已经永久删除了这条信息!", "success");
                });
        }
        function edit(id) {
            window.location.href = "{{route('addUser')}}/" + id;
        }
    </script>
@endsection