@extends('front.master')

@section('body')
<section class="pt-5 pb-5">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="banner img-hover-zoom">
                    <img src="{{ asset("/") }}front/images/blog.png" class="img-thumbnail" width="100%" alt="">
                </div>
                <div class="title">
                    <h2 class="text-justify font-weight-bold text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    <div class="meta text-dark">
                        <span class="author pr-3"><i class="fas fa-pen"></i> Rahul</span>
                        <span class="date pr-3"><i class="fas fa-clock"></i> 05/11/2020</span>
                        <span class="time"><i class="fas fa-star"></i> 5 Min Read</span>
                    </div>
                </div>
                <div class="post text-justify pt-3">
                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem impedit deleniti voluptatibus a totam, assumenda dolores ut animi eligendi dolor incidunt voluptates, doloremque aliquid! Maiores provident autem consectetur error explicabo!Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quaerat deleniti exercitationem qui cupiditate quos. <br> Ipsum, delectus. Magnam maxime suscipit est quis ducimus expedita alias molestiae, blanditiis, asperiores, fugiat nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo iure officiis id atque possimus facere vitae velit, illo nulla repudiandae amet optio est cumque dolor aperiam, omnis nihil! Facilis, itaque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut perspiciatis architecto veniam voluptates ipsam nesciunt accusamus, excepturi iure optio aliquam officia <br><br> sit minus possimus quas distinctio laboriosam quod impedit hic? Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eius laborum similique eum mollitia tempore voluptate, facilis sit obcaecati quasi, suscipit repellendus, optio enim rerum! Vitae quis similique sed eum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, repudiandae. Corporis, dolores totam nesciunt suscipit sequi placeat iure quia, esse iusto laudantium eligendi ad sint maiores! Animi optio quibusdam cupiditate? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> <br> Consequatur quidem voluptate omnis, animi velit deleniti dicta laborum repellendus similique explicabo provident facilis, dolor necessitatibus reprehenderit error magnam. Quam, inventore ipsum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam expedita explicabo hic, ut qui possimus nesciunt doloribus velit porro praesentium iusto laboriosam maiores magnam sed ipsum deleniti ullam laudantium minima! <br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolore veniam accusamus itaque ut amet reiciendis dicta obcaecati, sunt expedita enim consectetur optio culpa ducimus illum earum at molestias non? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, cumque iste voluptatem accusamus, officia a aperiam consequatur adipisci quos neque ipsam illo dolores suscipit voluptates quisquam atque maiores mollitia itaque?</span>
                </div>
            </div>
        </div>
    </div>
</section>
<x-social-link/>
@endsection