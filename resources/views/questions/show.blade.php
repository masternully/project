@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-3">
            <h1>ACCOUNTS</h1>
        </div>
        <div class="col-md-9">
                {{ $question->title }}
                <hr>
                <div class="account-image">
                    @php
                        $scrs = explode(';', $question->screenshots)
                    @endphp
                    <img class="screen" src="http://127.0.0.1:8081/pawno/public/images/{{$scrs[0]}}" id="currentImage" alt="">
                </div>
                <div class="account-images">
                    @foreach(explode(';', $question->screenshots) as $scr) 
                        <div class="thumbnail">
                            <img class="screen" src="http://127.0.0.1:8081/pawno/public/images/{{$scr}}" alt="">
                        </div>
                    @endforeach
                </div>
                <hr>
                {!! $question->body !!}
                <hr>
                {{ $question->price }} EURO
                <hr>
                <p style="text-align:center;width:100%;">MasterCard, Visa, Maestro, WebMoney, PayPal, QIWI</p>
                <div class="col-md-12">
                    <a href="{{route('accounts.create')}}" style="width:100%;height:60px;font-size:33px;" type="submit" class="btn btn-primary btn-sm">LOGIN BEFORE BUYING</a>
                </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
    <script>
        (function(){
            console.log(document.querySelector('#currentImage'));
            
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.thumbnail');
            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick({ target }) {
                console.log("sdfsd");
                currentImage.setAttribute('src', target.getAttribute('src'));
            }
        })();
    </script>
@endsection