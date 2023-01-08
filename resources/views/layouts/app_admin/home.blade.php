@extends('layouts.app_admin.app')

@section('content')
<div class="col-lg-4 col-md-12">
    <div class="white-box analytics-info">
        <h3 class="box-title">Total Personil</h3>
        <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li>
                <div id="sparklinedash"><canvas width="67" height="30" style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas></div>
            </li>
            <li class="ms-auto"><span class="counter text-success">{{ $personil }}</span></li>
        </ul>
    </div>
</div>
@endsection