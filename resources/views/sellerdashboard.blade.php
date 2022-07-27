{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


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
                      <h2>Hi, Seller <span>{{ Auth::user( )->name }}</span></h2>
                </div>
          </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <div class="card p-10">
                        <div class="card-image">
                            <img class="card-img-top" src="assets/img/team/yousuf-nobi.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body team-member">
                            <h5 class="card-title buyer-name">{{ Auth::user( )->name }}</h5>
                            <p class="card-text ">{{ Auth::user( )->email }}</p>
                            <p class="card-text ">01975669195 <br>
                                Tel: +88-0241070780 (Office)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-8 col-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">

                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Crate New Gig</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="javascript:void(0)" ondblclick="alert('Coming soon')" role="tab">Message</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="javascript:void(0)" ondblclick="alert('Coming soon')" role="tab">Review</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="javascript:void(0)" ondblclick="alert('Coming soon')" role="tab">Commuinity</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="javascript:void(0)" ondblclick="alert('Coming soon')" role="tab">More</a>
                                    </li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="single-features-area dt-2">
                                                        <img class="gig-img" src="assets/img/bg-img/xfeature-1.jpg.pagespeed.ic.DbE0Si6n1v.jpg"
                                                              alt="">

                                                        <div class="price-start">
                                                              <p>Price 30$/starting</p>
                                                        </div>
                                                        <div
                                                              class="feature-content d-flex align-items-center justify-content-between">
                                                              <div class="feature-title">
                                                                    <h5> <i class="fa fa-user"></i> Rakib</h5>
                                                                    <p> I will crate Logo design expensive price</p>
                                                              </div>
                                                        </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="single-features-area dt-2">
                                                        <img class="gig-img" src="assets/img/bg-img/xfeature-1.jpg.pagespeed.ic.DbE0Si6n1v.jpg"
                                                              alt="">

                                                        <div class="price-start">
                                                              <p>Price 50$/starting</p>
                                                        </div>
                                                        <div
                                                              class="feature-content d-flex align-items-center justify-content-between">
                                                              <div class="feature-title">
                                                                    <h5> <i class="fa fa-user"></i> Monir</h5>
                                                                    <p> I will do Web design expensive price</p>
                                                              </div>
                                                        </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                                        <div class="contact-form  dt-2"  >
                                            <div class="contact-form-title">
                                                  <h6>Create New Gig</h6>
                                            </div>

                                            <form method="POST" action="{{ route('register') }}">
                                              @csrf
                                                  <div class="row">
                                                    <div class="col-12">
                                                        <input type="text" name="name" class="form-control"
                                                              placeholder="Seller Name" required>
                                                  </div>
                                                        <div class="col-12">
                                                              <input type="text" name="name" class="form-control"
                                                                    placeholder="Enter your gig title" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <input type="text" name="price" class="form-control"
                                                                  placeholder="Enter gig starting price" required>
                                                      </div>
                                                      <div class="col-12">
                                                          <textarea  name="description" id="" cols="30" rows="10" class="form-control"
                                                          placeholder="Describe your project here.."  required></textarea>
                                                      </div>
                                                      <div class="col-12">
                                                        <input type="file" name="name" class="form-control"
                                                              placeholder="Enter Name" required>
                                                        </div>

                                                        <div class="col-12">
                                                              <button type="submit" class="btn dorne-btn btn-block">Submit</button>
                                                        </div>
                                                  </div>
                                            </form>
                                      </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-3" role="tabpanel">
                                        <p>Third Panel</p>
                                    </div>
                                </div>


                          </div>
                        </div>
                    </div>
                </div>
          </div>
    </div>
</section>
@endsection
