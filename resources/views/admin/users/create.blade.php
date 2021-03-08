@extends('layouts.master')

@section('content')
    <div class="form-header-classic materialize">
        {{ Form::open(['class' => 'form-ladda']) }}
        <fieldset class='info'>
            <div class="card-box">
                @include('admin.users.blocks.info')
            </div>
        </fieldset>

        <div class="form-wizard-buttons sticky-button">
            <button type="submit" class="btn btn-success btn-block btn-small ladda-button">{{ __('Save') }}</button>
        </div>
        {{ Form::close() }}
    </div>
@endsection

@push('css')
@endpush

@push('scripts')
@endpush
