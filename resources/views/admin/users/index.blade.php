@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="toolbar row mb-3">
                <form action="" method="get" class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    @include('admin.elements.filters.searchbar')
                </form>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                    <a href="{{ route('admin.participants.users.create') }}" class="btn btn-outline-success btn-toolbar addAction text-uppercase d-block" data-toggle="tooltip" title="{{ __('New') }}">
                        <i class="mdi mdi-note-plus-outline mr-2"></i> <span class="hidden-xs hidden-sm">{{ __('New') }}</span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1">
                    <a href="{{ route('admin.participants.users.trashed') }}" class="btn btn-outline-secondary btn-toolbar addAction text-uppercase d-block" data-toggle="tooltip" title="{{ __('Trashed') }}">
                        <i class="mdi mdi-delete-outline noti-icon"></i>
                    </a>
                </div>
            </div>
            <div class="card-box">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('Social Name') }}</th>
                            <th>{{ __('Email') }}</th>
                            <th>{{ __('Guild') }}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="align-middle">{{ $user->id }}</td>
                                <td class="align-middle" nowrap>{{ $user->social_name ?? $user->name }}</td>
                                <td class="align-middle">{{ $user->email }}</td>
                                <td class="align-middle">{{ optional($user->guilds()->latest()->first())->name }}</td>
                                <td class="align-middle text-right">
                                    {{ Form::open(['route' => ['admin.participants.users.destroy', $user->id], 'class' => 'confirmDelete']) }}
                                    <div class="btn-group">
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        <a href="{{route('admin.participants.users.profile', $user->id)}}" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" title="{{ __('Profile') }}"><i class="mdi mdi-account h5"></i></a>
                                        <a href="{{route('admin.participants.users.edit', $user->id)}}" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="{{ __('Edit') }}"><i class="mdi mdi-pencil h5"></i></a>

                                        <button class="btn btn-sm btn-outline-danger" type="submit" data-toggle="tooltip" title="{{ __('Remove') }}">
                                            <i class="mdi mdi-delete h5"></i>
                                        </button>
                                    </div>
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">{{ $users->appends(request()->query())->links() }}</div>
        <div class="col-md-12">
            {{ __('Page') }} {{$users->currentPage()}} {{ __('of') }} {{$users->lastPage()}},
            {{ __('Total of') }} {{$users->total()}} {{ __('items') }}
        </div>
    </div>
@endsection

@section('css')
@endsection

@section('scripts')
@endsection
