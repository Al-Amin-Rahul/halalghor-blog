@extends('front.master')

@section('body')
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="wrapper bg-white shadow-sm post-cat-lg rounded">
                    <a href="">
                        <div class="banner img-hover-zoom">
                            <img src="{{ asset("/") }}front/images/blog.png" width="100%" class="img-fluid" alt="">
                        </div>
                        <div class="title bg-dark py-3">
                            <h2 class="text-justify font-weight-bold px-3 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                            <div class="meta text-white px-3">
                                <span class="author pr-3"><i class="fas fa-pen"></i> Rahul</span>
                                <span class="date pr-3"><i class="fas fa-clock"></i> 05/11/2020</span>
                                <span class="view"><i class="fas fa-eye"></i> 0</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg-white shadow-sm px-3 py-3 border-bottom">
                            <div class="cat-name">
                                <span class="badge badge-info">Electronics</span>
                            </div>
                            <div class="title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <div class="meta">
                                    <small>
                                        <span class="author pr-3"><i class="fas fa-pen"></i> Rahul</span>
                                        <span class="date pr-3"><i class="fas fa-clock"></i> 05/11/2020</span>
                                        <span class="view"><i class="fas fa-eye"></i> 0</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="bg-white shadow-sm px-3 py-3 border-bottom">
                            <div class="cat-name">
                                <span class="badge badge-info">Electronics</span>
                            </div>
                            <div class="title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <div class="meta">
                                    <small>
                                        <span class="author pr-3"><i class="fas fa-pen"></i> Rahul</span>
                                        <span class="date pr-3"><i class="fas fa-clock"></i> 05/11/2020</span>
                                        <span class="view"><i class="fas fa-eye"></i> 0</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="bg-white shadow-sm px-3 py-3 border-bottom">
                            <div class="cat-name">
                                <span class="badge badge-info">Electronics</span>
                            </div>
                            <div class="title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <div class="meta">
                                    <small>
                                        <span class="author pr-3"><i class="fas fa-pen"></i> Rahul</span>
                                        <span class="date pr-3"><i class="fas fa-clock"></i> 05/11/2020</span>
                                        <span class="view"><i class="fas fa-eye"></i> 0</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="bg-white shadow-sm px-3 py-3 border-bottom">
                            <div class="cat-name">
                                <span class="badge badge-info">Electronics</span>
                            </div>
                            <div class="title">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <div class="meta">
                                    <small>
                                        <span class="author pr-3"><i class="fas fa-pen"></i> Rahul</span>
                                        <span class="date pr-3"><i class="fas fa-clock"></i> 05/11/2020</span>
                                        <span class="view"><i class="fas fa-eye"></i> 0</span>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5 pt-5">
    <div class="container">
        <div class="alert bg-pink text-white font-weight-bold">
            Latest Post
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white shadow-sm rounded px-3 pt-3">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="wrapper mb-3 shadow-sm bg-dark">
                                <a href="{{ route("post-details") }}">
                                    <div class="banner img-hover-zoom">
                                        <img src="{{ asset("/") }}front/images/blog2.png" class="img-fluid" alt="">
                                        <div class="cat-overlay position-absolute">
                                            <span class="badge bg-info text-white">Electronics</span>
                                        </div>
                                    </div>
                                    <div class="title text-justify p-3">
                                        <span class="font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                        <div class="meta">
                                            <small>
                                                <span class="date pr-3"><i class="fas fa-clock"></i> 05/11/2020</span>
                                                <span class="view"><i class="fas fa-eye"></i> 0</span>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection