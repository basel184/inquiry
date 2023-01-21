@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('الاستعلامات')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.folders.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('اضافة الاستعلام')
            
            
                    @if (Session::has('message'))
                        <div class="alert alert-info">
                            <p>{{ Session::get('message') }}</p>
                        </div>
                    @endif
                    @if ($errors->count() > 0)
                        <div class="alert alert-danger">
                           <p>يرجي المحاوله مره   اخري بسبب وجود مشكله في بعض الحقول </p>
                        </div>
                    @endif
        </div>
         <div class="row">
              
            </div>
        <div class="panel-body">
              <div class="col-md-12">


                    @yield('content')




                </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('الاسم').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    {!! Form::label('national_ID', trans('الرقم القومي').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('national_ID', old('national_ID'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    {!! Form::label('issuer', trans('جهة الاصدار').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('issuer', old('issuer'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    {!! Form::label('phone', trans('الهاتف').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    {!! Form::label('address', trans('العنوان').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    {!! Form::label('occupation', trans('المهنه').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('occupation', old('occupation'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    <div class="form-group">
                        <label for="gender" >النوع*</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="ذكر">
                              ذكر
                            </option>
                             <option value="انثي">
                                 انثي
                             </option>
            
                        </select>
                     </div>
                    
                    {!! Form::label('purpose', trans('الغرض المقدم له').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('purpose', old('purpose'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    {!! Form::label('card_expiry_date', trans('تاريخ انتهاء البطاقة').'*', ['class' => 'control-label']) !!}
                    {!! Form::date('card_expiry_date', old('card_expiry_date'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    {!! Form::label('traffic_investigation', trans('نتيجة مباحث المرور').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('traffic_investigation', old('traffic_investigation'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    {!! Form::label('saved_at', trans('تحرير في').'*', ['class' => 'control-label']) !!}
                    {!! Form::date('saved_at', old('saved_at'), ['class' => 'form-control', 'placeholder' => '',]) !!}
                    
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('حفظ'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

