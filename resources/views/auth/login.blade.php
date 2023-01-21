@extends('layouts.auth')

@section('content')
<div class="row h-100 w-100" style="justify-content:center;display:flex" id="login-box">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div style="text-align:center" class="panel-heading"> @lang('تسجل الدخول')</div>
            <div class="panel-body">
                @if (count($errors) > 0)
                <div style="
text-align: right;
" class="alert alert-danger">
                    <strong>عذرًا!</strong> @lang(
                    'كانت هناك مشاكل في الإدخال:
يرجي التأكد من اسم المستخدم او الباسورد')
                    <br><br>

                </div>
                @endif

                <form class="form-horizontal"
                      role="form"
                      method="POST"
                      action="{{ url('login') }}">
                    <input type="hidden"
                           name="_token"
                           value="{{ csrf_token() }}">

                    <div style="display: flex;
    flex-direction: row-reverse;" class="form-group">


                        
                                                <label style="
text-align: left;
" class="col-md-4 control-label">@lang('الأسم')</label>
                                                <div class="col-md-6">
                            <input type="text"
                                   class="form-control"
                                   name="email"
                                   value="{{ old('email') }}">
                        </div>
                    </div>

                    <div style="display: flex;
    flex-direction: row-reverse;" class="form-group">
                        <label style="
text-align: left;
" class="col-md-4 control-label">@lang('الباسورد')</label>

                        <div class="col-md-6">
                            <input type="password"
                                   class="form-control"
                                   name="password">
                        </div>
                    </div>

<!--                    <div style="-->
<!--text-align: right;-->
<!--" class="form-group">-->
<!--                        <div class="col-md-6 col-md-offset-4">-->
<!--                            <a href="{{ route('auth.password.reset') }}">@lang('نسبت الباسورد')</a>-->
<!--                            <br>-->
<!--                            <a href="{{ route('auth.register') }}">@lang('إنشاء حساب')</a>-->
<!--                        </div>-->
<!--                    </div>-->


                    <div style="
text-align: right;
" class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <label>
                                <input type="checkbox"
                                       name="remember"> @lang('تذكرني')
                            </label>
                        </div>
                    </div>
                    <div style="
text-align: center;
" class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <button type="submit"
                                    class="btn btn-primary"
                                    style="margin-right: 15px;">
                                @lang('الدخول')
                            </button>
                        </div>
                    </div>

                    

                </form>
            </div>
        </div>
    </div>
</div>
@endsection