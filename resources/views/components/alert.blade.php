@props(['title' => '', 'status' => 'success'])

@php
  if($status == 'note'){
    $status = 'info';
  }
@endphp

<div class="alert alert-{{ $status }}" role="alert">
  <h4 class="alert-heading">{{ $title }}</h4>
 {{ $slot }}
</div>