
@extends('admin_template')
@section('content')

         <div class="row">

            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body">

                        <form action="{{ route('films.post') }}" method="POST">

                            {{ csrf_field() }}
                            <div class="row">

                                <div class="preview col-md-6">



                                    <div class="preview-pic tab-content">

                                        <div class="tab-pane active" id="pic-1"><img src="{{ url('storage/app/img/'.$film->photo) }}" /></div>

                                    </div>

                                </div>

                                <div class="details col-md-6">
                                    <h3 class="product-title">{{$film->name}}</h3>

                                    <div class="rating">

                                        <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $film->userAverageRating }}" data-size="xs">
                                        @if ($errors->has('rate'))
                                            <span class="help-block red" style="color: red;">
                                        <strong>{{ $errors->first('rate') }}</strong>
                                    </span>
                                        @endif
                                        <input type="hidden" name="id" required="" value="{{ $film->id }}">

                                        <br/>

                                    </div>

                                    <p class="product-description">{{ $film->description }} </p>

                                    <h4 class="price">Ticket price: <span>${{ $film->ticket_price }}</span></h4>
                                    <p class="product-description">Comments: <br><span> </span>
                                    </p>
                                            @foreach($comments as $comment)
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="box box-widget">
                                                            <div class="box-footer box-comments">
                                                                <div class="box-comment">
                                                                    <!-- User image -->
                                                                    <img class="img-circle img-sm" src="{{ asset("/bower_components/admin-lte/dist/img/avatar5.png") }}" alt="User Image">

                                                                    <div class="comment-text">
                                                   <span class="username">
                                                        {{ \App\User::find($comment->user_id)->name }}
                                              </span><!-- /.username -->
                                                                        {{ $comment->comment }}
                                                                    </div>
                                                                    <!-- /.comment-text -->
                                                                </div>
                                                                <!-- /.box-comment -->

                                                            </div>
                                                        </div>
                                                        </div>
                                                </div>
                                            @endforeach

                                    <div class="action">
                                        <div class="img-push">
                                            <textarea class="form-control input-sm" name="comment"></textarea>
                                        </div>
                                        <br>
                                        @if ($errors->has('comment'))
                                            <span class="help-block red" style="color: red;">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                        @endif
                                        <button class="btn btn-success">Submit Review</button>

                                    </div>

                                </div>

                            </div>

                        </form>



                    </div>

                </div>

            </div>

        </div>
    <script type="text/javascript">

        $("#input-id").rating();

    </script>

@endsection