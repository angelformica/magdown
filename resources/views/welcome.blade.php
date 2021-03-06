@extends('layouts.app')
<!-- Modificado por Angel Formica -->
@section('css')
    <style>
        .col-xs-5ths,
        .col-sm-5ths,
        .col-md-5ths,
        .col-lg-5ths {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-xs-5ths {
            width: 20%;
            float: left;
        }

        @media (min-width: 768px) {
            .col-sm-5ths {
                width: 20%;
                float: left;
            }
        }

        @media (min-width: 992px) {
            .col-md-5ths {
                width: 20%;
                float: left;
            }
        }

        @media (min-width: 1200px) {
            .col-lg-5ths {
                width: 20%;
                float: left;
            }
        }
    </style>
@endsection
<!-- End Section CSS -->
@section('content')
    @if(isset($infinite))
        <input type="hidden" id="infinite" value="{{$infinite}}">
    @endif
    <div class="container">
        <div class="row">
            <div id="bannerPlaceHolder" class="row" style="height: 60px; margin:10px;">
                <!-- here you can place your banner -->
            </div>
            <div class="col-xs-9">
                @if(isset($search))
                    <div class="col-md-12">
                        <h2>Search results from "{{$search}}"</h2>
                    </div>
                @endif
                @if(sizeof($magazines)==0)
                        <div class="col-md-12">
                            <h3 class="text-white">No magazines found</h3>
                        </div>
                @endif
                        <div class="infinite-scroll">
                            @foreach($magazines as $magazine)
                                <div class="col-md-5ths col-xs-6 magazine-item" style="padding: 20px">
                                    <a href="{{url('/show-magazine/'.$magazine->id)}}" class="magazine-open-btn">
                                        <img src="{{url('uploads/covers/'.$magazine->id.'.jpg')}}" class="img-responsive">
                                        <div class="magazine-data text-center">
                                            <span class="magazine-name"><b>{{substr($magazine->name,0,100)}}</b></span>
                                            <span class="magazine-edition">{{\Carbon\Carbon::parse($magazine->publication_date)->format('F Y')}}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    <div class="col-md-12">
                        {{ $magazines->links() }}
                    </div>

            </div>
            <!-- Modificado por Angel Formica -->
            <!--<div class="col-xs-3">
                <div style="margin-top: 20px;margin-right: 20px">
                    @include('partials.adwords')
                </div>
            </div>-->
        </div>
    </div>
@endsection
