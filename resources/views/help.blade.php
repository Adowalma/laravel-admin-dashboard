@extends('layouts.app', [
'activePage' => 'help',
])

@section('content')
<div class="cardBox">
  <div class="card">
    <div>
        <div class="numbers">User Manual</div>
        <div class="cardName">Download</div>
    </div>

    <div class="iconBx">
        <ion-icon name="download-outline"></ion-icon>
    </div>
  </div>

  <div class="card">
    <div>
        <div class="numbers">Video Tutorial</div>
        <div class="cardName">Preview</div>
    </div>

    <div class="iconBx">
        <ion-icon name="eye-outline"></ion-icon>
    </div>
</div>

  <div class="card">
    <div>
        <div class="numbers">Contact Developers</div>
        <div class="cardName">Preview</div>
    </div>

    <div class="iconBx">
        <ion-icon name="call-outline"></ion-icon>
    </div>
</div>

</div>
@endsection