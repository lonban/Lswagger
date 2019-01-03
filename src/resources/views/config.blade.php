@extends('lswagger::layouts.default')
@section('content')
    <form action="{{url('/lswagger/config')}}" method="post">
        {{csrf_field()}}
        <table>
            <tr>
                <td><input type="text" name="name" value="{{config('lswagger.name')}}" /></td>
                <td>程序名称,不要随意改动(默认 lswagger)</td>
            </tr>
            <tr>
                <td><input type="text" name="file_type" value="{{config('lswagger.file_type')}}" /></td>
                <td>生成的文档类型(默认 yaml)</td>
            </tr>
            <tr>
                <td><input type="text" name="to_path" value="{{config('lswagger.to_path')}}" /></td>
                <td>从哪个目录生成文档(默认 'vendor/lonban/l-swagger/src')</td>
            </tr>
            <tr>
                <td><input type="text" name="in_path" value="{{config('lswagger.in_path')}}" /></td>
                <td>文档所在位置(默认 storage/app/vendor/lonban/l-swagger/)</td>
            </tr>
        </table>
    </form>
@endsection