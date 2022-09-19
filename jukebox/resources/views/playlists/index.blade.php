@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Playlists</div>
                    <div class="card-body">
                        <a href="{{ url('/playlists/create') }}" class="btn btn-success btn-sm" title="Add New Playlist">
                            <i class="fa fa-plus" aria-hidden="true"></i> Create new playlist
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($playlists as $playlist)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $playlist->name }}</td>

                                        <td>
                                            <a href="{{ url('/playlists/' . $playlist->id) }}" title="View Playlist"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/playlists/' . 'edit/' . $playlist->id) }}" title="Edit playlist"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/playlists' . '/' . $playlist->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Playlist" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection