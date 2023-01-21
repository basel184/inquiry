@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('الاستعلام')</h3>
<input type="button" value="طباعة" onclick="javascript:printDiv('mydiv')" />
    <div  class="panel panel-default">
        <div class="panel-heading">
            @lang('تعديل')
        </div>

        <div dir="rtl" id="mydiv" class="panel-body" style="padding: 0;margin: -10px;">
            <div class="container">
              <div  class="row">
                  <div class="col-xs-12" style="text-align: center;padding-bottom:120px">
    <!--               <p style="font-weight: 600;font-family: 'Arial';position: relative;-->
    <!--right: 21px;line-height: 2em;font-size:16px;">-->
                       
    <!--                       <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">طلب</span>         -->
    <!--                    <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">استعلام</span>                         <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">امني</span>-->
    <!--               </p>-->
                </div>
                <div class="col-xs-12 ">
                   <p style="text-align: center;font-weight: 600;font-family: 'Arial';font-size:14px;position: relative;
    right: 36px;;">
                        <u style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">البيانات</u>         
                        <u style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">
                            الشخصية
                            </u>                         <u style="font-family: 'Arial';line-height: 2em;font-size:14px">:
                            </u>        
                        </p>
                </div>
                <div style="position: relative;left: 45px;">
                <div class="col-xs-6">
                <div field-key='name'>
                    <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                    {{ $folder->name }}
                    </p>
                    </div>
                <div field-key='national_ID/issuer'>
                    <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                            <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">{{ $folder->national_ID }}</span>         
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">/</span>                         <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">{{ $folder->issuer }} </span>
                    </p>
                    </div>
                <div field-key='phone'>
                    <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                    {{ $folder->phone }}
                    </p>
                    </div>
                <div field-key='address'>
                    <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                    {{ $folder->address }}
                    </p>
                    </div>
                <div field-key='occupation'>
                    <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                    {{ $folder->occupation }}
                    </p>
                    </div>
                <div field-key='gender'>
                    <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                    {{ $folder->gender }}
                    </p>
                    </div>
                <div field-key='purpose'>
                    <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                    {{ $folder->purpose }}
                    </p>
                    </div>
                <div field-key='card_expiry_date'>
                    <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                    {{ $folder->card_expiry_date }}
                    </p>
                    </div>

                </div>
                
                <div class="col-xs-4">
                    <div>
                        <p style="font-family: 'Arial';line-height: 2em;font-size:16px">
                                 <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">الاسم</span>         
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px"> الرباعي</span>           
                    </p>
                    </div>
                    <div>
                        <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                        @lang('رقم قومي جهة / الأصدار')
                        </p>
                    </div>

                    <div>
                        <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                        @lang('الهاتف')
                        </p>
                    </div>
                    <div>
                        <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                        @lang('العنوان')
                        </p>
                        </div>
                    <div>
                        <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                        @lang('المهنه')
                        </p>
                        </div>
                    <div>
                        <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                        @lang('النوع')
                        </p>
                        </div>
                    <div>
                        <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">الغرض</span>         
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px"> المقدم</span>                         <span style="font-family: 'Arial';line-height: 2em;font-size:16px">لها</span>
                        </p>
                       
                        </div>
                    <div>
                        <p style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">تاريخ</span>         
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">انتهاء</span>                         <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">البطاقة</span>
                        </p>
                        </div>
                    
                </div>
                <div class="col-xs-6" style="padding-bottom: 25px;">
                        <u style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">نتيجة</u>         
                        <u style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">مباحث</u>                         <u style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">المرور</u>    
                        <u style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:16px">:</u>        
                        </div>
                                        
                <div class="col-xs-10">
                <div style="font-weight: 600;font-family: 'Arial';height:170px;width: 600px;border:1px solid #ddd" field-key='traffic_investigation'>
                    <p style="font-weight: 600;line-height: 2em;font-size:16px"> 
                    {{ $folder->traffic_investigation }}
                    </p>
                    </div>
                </div>
                  <div class="col-xs-4" style="padding-top: 10px;">
                      
                        <p style="position: relative;
    right: 20px;font-family: 'Arial';line-height: 2em;font-size:14px;;float:right;font-weight: 600;">تحرير في </p>     
                    <p style="position: relative;
    right: 20px;font-weight: 800;font-family: 'Arial';line-height: 2em;font-size:14px;float: right ;margin-right: 10px;">
                     {{ $folder->saved_at }}
                    </p>
                    
                 </div>
                   <div class="col-xs-5" style="padding-top: 10px;">
                       <p style="position: relative;
    left: 20px;font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px;">
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">مدة</span>         
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">سريان</span>                         <span style="font-family: 'Arial';line-height: 2em;font-size:14px">الاستعلام</span>       
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">اسبوع</span>        
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">من</span>       
                        <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">تاريخه</span>        
                       </p>
                 </div>
                 <div class="col-xs-9">
                      <div style="position: relative;
    left: 140px;float: left;font-family: 'Arial';line-height: 2em;font-size:14px;">
                           <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">مباحث</span>     
                           <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">المرور</span>         
                           </div>
                 </div>
                  <div class="col-xs-9">
                      <div style="position: relative;
    left: 165px;float: left;font-weight: 600;font-family: 'Arial';font-size:14px;">
                          <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">التوقيع</span>     
                           <span style="font-weight: 600;font-family: 'Arial';line-height: 2em;font-size:14px">/</span>         
                          </div>   
                 </div>
                 </div>
            </div>
            </div>
            
        </div>
        
    </div>


<script>
    function printDiv(divID) {
            var divElements = document.getElementById(divID).innerHTML;
            var oldPage = document.body.innerHTML;    
            document.body.innerHTML = 
              "<html><head><title>Print</title></head><body>" + 
              divElements + "</body>";
            window.print();
           document.body.innerHTML = oldPage;
        }
</script>
@stop