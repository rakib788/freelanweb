@extends('layouts.app2')
@section('content')
<div class="breadcumb-area bg-img bg-overlay"
style="background-image:url(assets/img/bg-img/xhero-1.jpg.pagespeed.ic.hwB2Ntcwl-.jpg)">
</div>

<section class="dorne-about-area section-padding-100">
    <div class="container">
          <div class="row">
            <div class="col-12">
                <div class="about-content text-center">
                      <h2>FreelanWeb Recommand Seller <span> </span></h2>
                </div>
          </div>

                <div class="col-8 col-md-8 col-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="feature-events-content">
                                    <h5>About gig: </h5>
                                    <h5>{{ $sellers->title }}</h5>
                                    <div>
                                        <img class="" src="{{ asset($sellers->image) }}" alt="Card image cap">
                                    </div>


                                    <p>{{ $sellers->desc }}</p>


                                </div>

                                <div class="feature-events-content">
                                    <h5>About seller: </h5>
                                    <div class="">
                                        <img class="card-img-top" src="" alt="Card image cap">
                                    </div>
                                    <div class="">
                                        <h5 class="card-title buyer-name">name</h5>
                                        <p class="card-text ">email</p>
                                        <p class="card-text ">01837875027</p>
                                        <p class="card-text ">address</p>
                                    </div>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 col-md-4 col-lg-4">
                    <div class="card p-10">
                        <h5>gig starting price: </h5>
                        <div class="card-body team-member">
                            <p class="card-text ">${{ $sellers->price }}</p>

                            <a href="{{ route('buyer_gig_checkout',$sellers->id) }}" class="btn btn-block">Hire Now !</a>
                        </div>

                    </div>
                </div>
          </div>
    </div>
</section>
@endsection
