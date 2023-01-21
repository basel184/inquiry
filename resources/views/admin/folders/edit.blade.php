@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('الاستعلامات')</h3>
    
    {!! Form::model($folder, ['method' => 'PUT', 'route' => ['admin.folders.update', $folder->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
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
                            <option value="ذكر"
            @if($folder->gender == "ذكر") {{ 'SELECTED' }} @endif>
                              ذكر
                            </option>
                             <option value="انثي"
            @if($folder->gender == "انثي") {{ 'SELECTED' }} @endif>
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

    {!! Form::submit(trans('تعديل'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

