@extends('layouts.admin')
@section('meta')
    <link href="/css/plugins/iCheck/custom.css" rel="stylesheet">
@endsection
@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>用户操作
                            <small>包括添加和修改用户</small>
                        </h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" name="addUser" id="addUser">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">用户帐号：</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="username" id="username">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">登录密码:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">确认密码:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="confirm_password"
                                           id="confirm_password">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">手机号码:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">用户功能:</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" name="user_functions" id="user_functions"
                                               value="friend">&nbsp;好友</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" name="user_functions" id="user_functions"
                                               value="location">&nbsp;查位</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" name="user_functions" id="user_functions"
                                               value="record">&nbsp;记录</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" name="user_functions" id="user_functions"
                                               value="monitor">&nbsp;监听</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" name="user_functions" id="user_functions"
                                               value="remote_control">&nbsp;遥闭</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" name="user_functions" id="user_functions"
                                               value="single_call">&nbsp;单呼</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" name="user_functions" id="user_functions"
                                               value="change_group">&nbsp;换组</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" name="user_functions" id="user_functions"
                                               value="sound_record">&nbsp;录音</label>
                                    <label class="checkbox-inline i-checks">
                                        <input type="checkbox" name="user_functions" id="user_functions"
                                               value="display_group">&nbsp;显组</label>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">IMEI:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="imei" id="imei">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">用户备注:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="用户备注"></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存用户</button>
                                    &nbsp;&nbsp;<button class="btn btn-white" type="reset">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/js/plugins/iCheck/icheck.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $(".i-checks").iCheck({checkboxClass: "icheckbox_square-green", radioClass: "iradio_square-green",});
            $(".btn-white").bind('click',function () {
                window.location.href = "{{route('users')}}";
            });
        });
        $.validator.setDefaults({
            highlight: function (e) {
                $(e).closest(".form-group").removeClass("has-success").addClass("has-error")
            }, success: function (e) {
                e.closest(".form-group").removeClass("has-error").addClass("has-success")
            }, errorElement: "span", errorPlacement: function (e, r) {
                e.appendTo(r.is(":radio") || r.is(":checkbox") ? r.parent().parent().parent() : r.parent())
            }, errorClass: "help-block m-b-none", validClass: "help-block m-b-none"
        }), $().ready(function () {
            $("#addUser").validate({
                rules: {
                    username: {required: !0, userNameCheck: true, minlength: 2, maxlength: 20},
                    password: {required: !0, minlength: 6},
                    confirm_password: {required: !0, minlength: 6, equalTo: "#password"},
                    phone: {required: true, isMobile: true},
                    imei: {required: true}
                },
                messages: {
                    username: {required: "请输入您的用户名", minlength: "用户名必须两个字符以上", maxlength: "必须是英文字母或数字,且长度不能大于15"},
                    password: {required: "请输入您的密码", minlength: "密码必须6个字符以上"},
                    confirm_password: {required: "请再次输入密码", minlength: "密码必须6个字符以上", equalTo: "两次输入的密码不一致"},
                    phone: {required: "请输入正确的手机号"},
                    imei: {required: "请输入正确的IMEI"},
                }
            })
        });
        // 手机号码验证
        jQuery.validator.addMethod("isMobile", function (value, element) {
            var length = value.length;
            var mobile = /^1[34578]\d{9}$/;
            return this.optional(element) || (length == 11 && mobile.test(value));
        }, "请正确填写您的手机号码");
        jQuery.validator.addMethod("userNameCheck", function (value, element) {
            return this.optional(element) || /^[a-zA-Z0-9_]{3,15}$/.test(value);
        }, "只能英文字母、数字和下划线");

    </script>
@endsection