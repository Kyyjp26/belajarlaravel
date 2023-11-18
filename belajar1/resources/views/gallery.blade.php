@extends('layout.master')
@section ('title', 'Gallery')
@section('menuGallery', 'active')

@section ('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="/img/p1.jpeg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/img/p2.jpeg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="/img/p3.jpeg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="/img/p4.jpeg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="/img/p5.jpeg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="/img/p6.jpeg" class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>
@endsection