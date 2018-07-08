@extends('admin_template')



@section('content')

    <div class="container">

        <div class="row">
            @if($posts->count())

                @foreach($posts as $post)
                    <div class="box box-success">
                                             <!-- /.box-header -->
                        <div class="box-body">
                            <div class="container_12">
                                <div class="grid_12"> <img src="{{ url('img/move.jpg') }}" alt="website template image" class="fleft">
                                    <h2>{{ $post->name }} </h2>
                                    <p class="product-descriptions">{{ $post->description }}</p>
                                    <a href="{{ route('films.show',$post->slug) }}" class="btn btn-primary btn-sm">View</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                @endforeach
            @endif
    </div>



    <script type="text/javascript">

        $("#input-id").rating();

    </script>

    @endsection