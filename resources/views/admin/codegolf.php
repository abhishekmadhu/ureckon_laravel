@extends('admin.layouts.admin')
@section('page', 'Dashboard')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">List of Participants</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Team</th>
                        <th>Event</th>
                        <th>User</th>
                        <th>Partner</th>
                        <th>Partner</th>
                        <th>Partner</th>
                        <th>Partner</th>
                        <th>Partner</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($participants as $participant)
                        @if($participant->event === 'codegolf')
                            <tr>
                                <td> {{ $participant->team }}</td>
                                <td>{{ $participant->event }}</td>
                                <td>{{ $participant->user }}</td>
                                <td>{{ $participant->username1 }}</td>
                                <td>{{ $participant->username2 }}</td>
                                <td>{{ $participant->username3 }}</td>
                                <td>{{ $participant->username4 }}</td>
                                <td>{{ $participant->username5 }}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $participants->links() }}
    </div>
@endsection
