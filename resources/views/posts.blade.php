@extends('admin_template')



@section('content')

    <div class="row">
        <div class="col-xs-12">
            @if($posts->count())

                @foreach($posts as $post)
                    <div class="box box-success">
                                             <!-- /.box-header -->
                        <div class="box-body">
                            <div class="container_12">
                                <div class="grid_12">
                                    @if(!empty($post->photo))
                                        <img src="{{ url('storage/app/img/'.$post->photo) }}" alt="website template image" class="fleft">
                                        @else
                                        <img src="{{ url('storage/app/img/Science Fiction_1531049480.jpeg') }}" alt="website template image" class="fleft">
                                    @endif
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
    </div>
    <script type="text/javascript">

        $("#input-id").rating();

    </script>

    @endsection