@extends('DashBoard/layout')
@section('content')
<h1 class="page-header">remote</h1>

<div class="row my-4">
    <div class="col-12 mb-4 col-xl-12">
        <div class="card">
                <h5 class="card-header">リモコン一覧</h5>
                <div class="card-body">
                    <div class="col-md-3">
                        {{ Form::select(
                            'category_select', 
                            $categories->pluck('name','id'), 
                            ['selected' => $category_id], 
                            ['class'=>'form-control', 'placeholder'=>'選択してください']
                        ) }}
                    </div>
                    <div class="col-md-11 col-md-offset-1">
                        <table class="table text-center">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">コマンド</th>
                                <th class="text-center">送信</th>
                            </tr>
                            @foreach($codes as $code)
                            <tr>
                                <td>
                                    <a href="/remote/{{ $code->id }}/edit">{{ $code->id }}</a>
                                </td>
                                <td>{{ $code->code_name }}</td>
                                <td>
                                    <form action="send" method="post">
                                    @csrf
                                        <input type="hidden" name="category_id" value="{{ $category_id }}">
                                        <input type="hidden" name="id" value="{{ $code->id }}">
                                        <button type="submit" class="btn btn-sm btn-primary" aria-label="送信">
                                            <span class="far fa-paper-plane"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('select[name="category_select"]').change(function() {
        window.location.href = '' + this.value;
    });
</script>
@endsection