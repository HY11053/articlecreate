@extends('admin.layouts.admin_app')
@section('title')网站文档列表@stop
@section('head')
    <style>.red{color: red;}</style>
@stop
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">关键词爬取列表管理 总计 {!! $keywords->total() !!}</h3>
                    <form method="GET" action="/keywords/search"  class="form-inline pull-right">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-location-arrow" style="width:10px;"></i>
                                </div>
                                <input class="form-control  pull-right" style="width: 150px;" placeholder="文档标题" @if(isset($title)) value="{{$title}}" @endif name="title" type="text">
                            </div>
                    </form>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>关键词</th>
                            <th>爬取来源</th>
                            <th>使用状态</th>
                            <th>操作</th>
                        </tr>
                        @foreach($keywords as $keyword)
                            <tr>
                                <td>{{$keyword->id}}</td>
                                <td>{{$keyword->keywords}}</td>
                                <td>{{$keyword->types}}</td>
                                <td >@if($keyword->status) <button class="btn btn-sm  btn-success">已使用</button> @else <button class="btn btn-sm  btn-danger" id="status{{$keyword->id}}" onclick="statuschick('status{{$keyword->id}}',{{$keyword->id}})">未使用</button> @endif</td>
                                <td class="astyle"><span class="label label-danger"><a href="/delete/keywords/{{$keyword->id}}}" >删除</a></span>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                    @if(isset($title))
                        {!! $keywords->appends(['title' => $title])->links() !!}
                    @else
                        {!! $keywords->links() !!}
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    <!-- /.content -->
@stop
@section('libs')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });
        function statuschick(element,id) {
            $.ajax({
                //提交数据的类型 POST GET
                type:"POST",
                //提交的网址
                url:"/update/keywords/"+id,
                //提交的数据
                data:{"id":id},
                //返回数据的格式
                datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                success:function (response, stutas, xhr) {
                    //$(".modal-s-m"+id+" .modal-body").html(response);
                    $('#'+element).text(response);
                    $('#'+element).removeClass( "btn-danger" );
                    $('#'+element).addClass( "btn-success" );
                }
            });
        }
    </script>
@stop
