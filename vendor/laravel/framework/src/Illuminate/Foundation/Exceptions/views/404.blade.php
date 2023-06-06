@extends('errors::minimal')

@section('title', __('Not Found'))

@include('navbar.navbar')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class= "text-center">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('img/404 Full.png') }}" alt="IMG">
                </div>
            </div>


            <div class="text-center p-t-12">
                <a class="txt1" style= "font-size: 25pt; font-style: bold; text-align: center; text-indent: 7%; ">
                    PAGE NOT FOUND:(
                </a>
            </div>

            <div class="text-center p-t-12">
                <a class="txt2" style= "font-size: 13pt; font-style: bold; text-align: center; text-indent: 7%; ">
                    It appears the page you were looking for couldn’t be found.
                </a>
            </div>

            <div class="container-login100-form-btn">
                <div class= "text-center">
                    <a href="{{ route('berandape') }}">
                        <button class="login100-form-btn">
                            Go back to Beranda
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .login100-form-btn {
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #5b5b5b;
    text-transform: uppercase;

    width: 20%;
    height: 50px;
    border-radius: 25px;
    background: #E8E9ED;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 25px;

}

.login100-form-btn:hover {
    font-family: Montserrat-Bold;
    font-size: 15px;
    line-height: 1.5;
    color: #ffffff;
    text-transform: uppercase;

    width: 25%;
    height: 50px;
    border-radius: 25px;
    background: #ff8400;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 25px;

    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}
</style>
