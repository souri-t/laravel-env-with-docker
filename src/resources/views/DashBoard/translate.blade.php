@extends('DashBoard/layout')
@section('content')
<h1 class="page-header">Translate</h1>
<p>by DeepL</p>
<div class="row">
    <div class="col-12 col-md-12 col-lg-12 mb-4 mb-lg-0 my-4">
        <div class="card">
            <h5 class="card-header">日英翻訳</h5>
            <div class="card-body">
                <form class="form-signin" role="form" action="" method="post">
                    {{-- CSRF対策 --}}
                    <div class="btn-group" role="group" aria-label="button group">
                        <input type="radio" class="btn-check" name="translateMode" id="btnradio1" value='EN' autocomplete="off" checked>
                        <label class="btn btn-outline-secondary" for="btnradio1">日本語→英語</label>
                        <input type="radio" class="btn-check" name="translateMode" id="btnradio2" value='JA' autocomplete="off">
                        <label class="btn btn-outline-secondary" for="btnradio2">英語→日本語</label>
                        <input type="radio" class="btn-check" name="translateMode" id="btnradio3" value='ZH' autocomplete="off">
                        <label class="btn btn-outline-secondary" for="btnradio3">日本語→中国語</label>
                        <input type="radio" class="btn-check" name="translateMode" id="btnradio4" value='JA' autocomplete="off">
                        <label class="btn btn-outline-secondary" for="btnradio4">中国語→日本語</label>
                    </div>
                    @csrf
                    <div class="row my-4">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h5 class="card-title">原文</h5>
                            <textarea rows="10" name="sourcetext" class="form-control mb-1" placeholder="入力してください" required>{{ ($sourceText ?? '')}}</textarea>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h5 class="card-title">翻訳結果</h5>
                            <textarea rows="10" name="translatedText" class="form-control mb-1">{{ ($translatedText ?? '')}}</textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <button class="btn btn-block btn-light btn-sm mt-4" type="submit">送信</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection