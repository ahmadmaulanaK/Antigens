@extends('layouts.auth')

@section('title')
<title>Welcome </title>
@endsection

@section('content')
<div class="container">
    <ui-view class="app ng-scope">
        <!-- uiView: -->
        <ui-view class="ng-scope">
            <div class="app flex-row align-items-center ng-scope">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card-group">

                                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                                    <div class="card-body text-center">
                                        <div>
                                            <h2>Selamat Datang</h2>
                                            <p class="fst-italic"> Resep kesuksesan adalah bekerja keras dan pantang menyerah.</p>
                                           

                                            @if (Route::has('login'))
                                          
                                                @auth
                                                <a href="{{ url('/home') }}"
                                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                                @else
                                                <a href="{{ route('login') }}"
                                                    class="btn btn-success active "><i
                                                        class=""> LOGIN</i></a>

                                             
                                                @endauth
                                          
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </ui-view>
    </ui-view>
</div>
</div>
@endsection
