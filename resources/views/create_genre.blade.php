@extends('admin_template')

@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-sitemap"></i> Genre</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <form class="form-horizontal" role="form" method="post" action="{{ url('post_genre') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="classes" class="col-sm-2 control-label">
                                        Genre Title <span class="text-red">*</span>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="genre_title" name="genre_title" value="">
                                    </div>
                        <span class="col-sm-4 control-label">
                        </span>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <input type="submit" class="btn btn-success" name="post" value="Add Genre">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection