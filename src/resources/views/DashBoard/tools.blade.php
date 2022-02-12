@extends('DashBoard/layout')
@section('content')

<h1 class="page-header">tools</h1>
<p>This is Tools Page</p>
<div class="row my-4">
<div class="col-12 col-md-8 col-lg-8 mb-4 mb-lg-0">
        <div class="card">
            <h5 class="card-header">TikTok</h5>
            <div class="card-body">
                <h5 class="card-title">URL加工</h5>
                <p class="card-text">URLを入力してください</p>
                <form class="form-signin" role="form" action="/dashboard/tools/trim" method="post">
                    {{-- CSRF対策 --}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="text" name="urltext" class="form-control" placeholder="URLを入力してください" required autofocus>
                    <button class="btn btn-block btn-light btn-sm mt-4" type="submit">送信</button>
                </form>
                <p class="card-text text-success">{{ $message ?? '' }}</p>
            </div>
        </div>
    </div>
</div>
@endsection