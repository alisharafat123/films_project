@extends('admin_template')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Film</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('post_film') }}" method="post" id="film_form">
                {{ csrf_field() }}
                <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="film_name" placeholder="Enter Name" name="name">
                            <span class="error">This field is required</span>
                        </div>
                        <div class="form-group">
                            <label for="film_description">Description</label>
                            <input type="text" class="form-control" id="film_description" placeholder="Description" name="description">
                            <span class="error">This field is required</span>
                        </div>
                        <div class="form-group">
                            <label>Release Date:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" id="datepicker" name="release_date">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ticket Price</label>
                            <input type="text" class="form-control" id="film_ticket_price" placeholder="Ticket_price" name="ticket_price">
                            <span class="error">This field is required</span>
                        </div>
                        <div class="form-group">
                            <label>Genre</label>
                            <select class="form-control" name="genre_id" id="film_genre">
                                <option class="selected">Select Genre</option>
                                <option value="1">Comedy</option>
                                <option value="2">Romance</option>
                                <option value="3">Drama</option>
                                <option value="4">Horror</option>
                                <option value="5">Action</option>
                            </select>
                            <span class="error">This field is required</span>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select class="form-control" name="country_id" id="film_country">
                                <option class="selected">Select Country</option>
                                <option value="A">Amrica</option>
                                <option value="B">India</option>
                                <option value="C">Pakistan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Photo</label>
                            <input type="file" class="form-control" id="film_photo" name="photo">
                            {{--<span class="error">This field is required</span>--}}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Slug</label>
                            <input type="text" class="form-control" id="film_slug" placeholder="Slug" name="slug">
                            <span class="error">This field is required</span>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <input type="submit" class="btn btn-primary" name="post" id="film_submit">
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection