@extends('admin.layouts.default')

@section('content')
    @if (Session::has('error_message'))
        <div class="alert alert-danger" role="alert">
            {!! Session::get('error_message') !!}
        </div>
    @endif
    @if($threads->count() > 0)
        @foreach($threads as $thread)
        <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; ?>

        <div class="media alert {!!$class!!}">
            <h4 class="media-heading">{!! link_to('admin/messages/' . $thread->id, $thread->subject) !!}</h4>
            <p></p>
            <p><small><strong>Creator:</strong> {!! $thread->creator() !!}</small></p>
            <p><small><strong>Participants:</strong> {!! $thread->participantsString(Sentinel::getUser()->id) !!}</small></p>
        </div>
        @endforeach
    @else
        <p>Sorry, no threads.</p>
    @endif
@stop