<?php $count =  Sentinel::getUser()->newMessagesCount(); ?>
@if($count > 0)
<span class="badge badge-danger">{!! $count !!}</span>
@elseif($count == 0)
<span class="badge badge-danger">0</span>
@endif