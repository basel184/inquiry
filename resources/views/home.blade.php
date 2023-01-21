@extends('layouts.app')

@section('content')
    <div class="row">
     <!--    @lang('quickadmin.qa_dashboard_text') -->
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('لوحة التحكم')</div>

                <div class="row panel-body">        
            <form style="
text-align: center;
" class="d-flex form-inline col-12" type="post" action="{{ url('admin/search') }}">
 <input class="form-control " name="query" type="search" placeholder="ادخل استعلام" aria-label="Search " style="
    width: 30%;
">
      <select class="form-control col-3" name="field" style="
    width: 20%;
">
         <option value="name">الأسم</option>
          <option value="national_ID">رقم البطاقة</option>
     </select>
        <button class="btn btn-success col-3 " type="submit">ابحث</button>
      </form>    
                </div>
                
            </div>
        </div>
    </div>
@endsection
