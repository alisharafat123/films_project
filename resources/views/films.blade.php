@extends('admin_template')

@section('content')
    <div class="row">
        <div class="col-xs-12">

            <!-- /.box -->

            <div class="box">
                <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 241px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 302px;">Genre</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">Country</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 500px;">Ratting</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150px;">Release Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($films as $film)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $film->name }}</td>
                                            <td>
                                                <?php
                                                $genres  = \Illuminate\Support\Facades\DB::table('films_genre')
                                                        ->join('films', 'films_genre.film_id', '=', 'films.id')
                                                        ->join('genre', 'films_genre.genre_id', '=', 'genre.genre_id')
                                                        ->select('films_genre.*', 'genre.genre_title')
                                                        ->where('films_genre.film_id', $film->id)
                                                        ->get();
                                                //$genres = \Illuminate\Support\Facades\DB::table('films_genre')->where('film_id', $film->id)->get();
                                                ?>
                                                @foreach($genres as $genre)
                                                    {{ $genre->genre_title }},
                                                    @endforeach
                                            </td>
                                            <td>
                                                {{ $film->country_id }}
                                            </td>
                                            <td>
                                                <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="{{ $film->averageRating }}" data-size="xs" disabled="">
                                            </td>
                                            <td>
                                                {{ $film->ticket_price }}
                                            </td>
                                            <td>
                                                {{ date('Y-m-d',strtotime($film->release_date)) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- /.row -->
    <script type="text/javascript">

        $("#input-id").rating();

    </script>
@endsection
