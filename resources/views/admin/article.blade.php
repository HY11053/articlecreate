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
                        <h3 class="box-title">文档列表管理</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>文章标题</th>
                                <th>内容简介</th>
                                <th>操作</th>
                            </tr>
                            @foreach($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($article->body))), $limit = 120, $end = '...')}}</td>
                                <td class="astyle"><span class="label label-success"><a href="/article/{{$article->id}}.shtml" target="_blank">预览</a></span><span class="label label-danger"><a href="/delete/article/{{$article->id}}}" >删除</a></span>
                                </td>
                            </tr>
                                @endforeach

                        </table>
                        {!! $articles->links() !!}

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

    <!-- /.content -->
@stop

