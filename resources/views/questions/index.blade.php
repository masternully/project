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
                            <div class="col-md-2">
                                <a href="{{route('accounts.create')}}" style="height:35px;width:130px;font-size:11px;" type="submit" class="btn btn-primary btn-sm">НОВЫЙ ВОПРОС</a>
                            </div>
                            <div class="col-md-10">
                                <input style="height:35px;" type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="card-body">
                    @include('layouts._messages')
                    @foreach($questions as $question)
                        <div class="media">
                            <a href="{{ $question->url }}"> 
                            <div class="media-body"> 
                                <h1 class="mt-0 mt-title">
                                   {{ $question->title }} 
                                </h1>
                                <h3 class="mt-0">
                                   {{ $question->desc }}
                                </h3>
                                <h3 class="mt-price">
                                    <strong>BUY | {{ $question->price }} EURO</strong>
                                </h3>
                            </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="text-center"></div>
                </div>
               
                {{ $questions->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
