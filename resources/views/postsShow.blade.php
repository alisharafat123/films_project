
@extends('admin_template')
@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-default">



                    <div class="panel-body">

                        <form action="{{ route('films.post') }}" method="POST">

                            {{ csrf_field() }}
                            <div class="row">

                                <div class="preview col-md-6">



                                    <div class="preview-pic tab-content">

                                        <div class="tab-pane active" id="pic-1"><img src="{{ url('img/move.jpg') }}" /></div>

                                    </div>

                                </div>

                                <div class="details col-md-6">

                                    <h3 class="product-title">{{$film->name}}</h3>

                                    <div class="rating">

                                        <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $film->userAverageRating }}" data-size="xs">

                                        <input type="hidden" name="id" required="" value="{{ $film->id }}">

                                        <span class="review-no">{{ count($film->averageRating) }}</span>

                                        <br/>

                                        <button class="btn btn-success">Submit Review</button>

                                    </div>

                                    <p class="product-description">{{ $film->description }} </p>

                                    <h4 class="price">Ticket price: <span>${{ $film->ticket_price }}</span></h4>

                                    <p class="vote"><strong>91%</strong> of viewers enjoyed this movie! <strong>({{ count($film->averageRating) }})</strong></p>
                                    <div class="action">
                                        <textarea></textarea><br>
                                        <button class="like btn btn-default" type="button">Submit Comment</button>

                                    </div>

                                </div>

                            </div>

                        </form>



                    </div>

                </div>

            </div>

        </div>

    </div>



    <script type="text/javascript">

        $("#input-id").rating();

    </script>

@endsection