@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('الاستعلامات')</h3>
    @can('folder_create')
        <p>
            <a href="{{ route('admin.folders.create') }}" class="btn btn-success">@lang('اضافة استعلام')</a>

            @if(!is_null(Auth::getUser()->role_id) && config('quickadmin.can_see_all_records_role_id') == Auth::getUser()->role_id)
                @if(Session::get('Folder.filter', 'all') == 'my')
                    
                @else
                @endif 
            @endif
        </p>
    @endcan

    @can('folder_delete')
        <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.folders.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('كل الاستعلامات')</a></li>
            |
            <li><a href="{{ route('admin.folders.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('الاستعلامات المحذوفة')</a></li>
        </ul>
        </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('قائمة الاستعلامات')
        </div>

        <div class="panel-body table-responsive">
            <table id="myTable" class="table table-bordered table-striped {{ count($folders) > 0 ? 'datatable' : '' }} @can('folder_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                <tr>
                    @can('folder_delete')
                        @if ( request('show_deleted') != 1 )
                            <th style="text-align:center;"><input type="checkbox" id="select-all"/></th>@endif
                    @endcan

                    <th>@lang('الاسم')</th>
                    <th>@lang('الرقم القومي')</th>
                    <th>@lang('جهة الاصدار')</th>
                    <th>@lang('الهاتف')</th>
                    <th>@lang('العنوان')</th>
                    @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                    @else
                        <th>&nbsp;</th>
                    @endif
                </tr>
                </thead>

                <tbody>
                @if (count($folders) > 0)
                    @foreach ($folders as $folder)
                        <tr data-entry-id="{{ $folder->id }}">
                            @can('folder_delete')
                                @if ( request('show_deleted') != 1 )
                                    <td></td>@endif
                            @endcan

                            <td field-key='name'>{{ $folder->name }}</td>
                            <td field-key='national_ID'>{{ $folder->national_ID }}</td>
                            <td field-key='issuer'>{{ $folder->issuer }}</td>
                            <td field-key='phone'>{{ $folder->phone }}</td>
                            <td field-key='address'>{{ $folder->address }}</td>
                            
                            
                            @if( request('show_deleted') == 1 )
                                <td>
                                    @can('folder_delete')
                                        {!! Form::open(array(
        'style' => 'display: inline-block;',
        'method' => 'POST',
        'onsubmit' => "return confirm('".trans("هل انت متأكد من الاسترجاع")."');",
        'route' => ['admin.folders.restore', $folder->id])) !!}
                                        {!! Form::submit(trans('استرجاع'), array('class' => 'btn btn-xs btn-success')) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                    @can('folder_delete')
                                        {!! Form::open(array(
        'style' => 'display: inline-block;',
        'method' => 'DELETE',
        'onsubmit' => "return confirm('".trans("هل انت متأكد من الحذف")."');",
        'route' => ['admin.folders.perma_del', $folder->id])) !!}
                                        {!! Form::submit(trans('حذف بشكل دائم'), array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            @else
                                <td>
                                    @can('folder_edit')
                                        <a href="folders/show/{{ $folder->id }}" class="btn btn-xs btn-success">@lang('عرض')</a>
                                    @endcan
                                    @can('folder_edit')
                                        <a href="{{ route('admin.folders.edit',[$folder->id]) }}" class="btn btn-xs btn-info">@lang('تعديل')</a>
                                    @endcan
                                    @can('folder_delete')
                                        {!! Form::open(array(
                                                                                'style' => 'display: inline-block;',
                                                                                'method' => 'DELETE',
                                                                                'onsubmit' => "return confirm('".trans("هل انت متأكد من الحذف")."');",
                                                                                'route' => ['admin.folders.destroy', $folder->id])) !!}
                                        {!! Form::submit(trans('حذف'), array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">@lang('لا يوجد استعلامات محذوفة لأسترجعها')</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $(document).ready(function () {
//            var table = $('#myTable_Wrapper').DataTable();
//console.log(table);
//            table.button( '.dt-button' ).remove();
        })
    </script>
    <script>
        @can('folder_delete')
                @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.folders.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection