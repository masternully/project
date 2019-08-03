@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h1>ACCOUNTS</h1>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{route('accounts.index')}}" style="height:35px;width:130px;font-size:11px;" type="submit" class="btn btn-primary btn-sm">НАЗАД К ВОПРОСАМ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <form action="{{ route('accounts.update', $question->id) }}" method="post">
                    {{method_field('PUT')}}
                    @include("questions._form", ['buttonText' => "Update Account"])
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
