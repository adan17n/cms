@extends('layouts.FrontMaster')
@section('judul')
    <title>Gallery</title>
@endsection

@section('body')

	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image:url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			Gallery
		</h2>
	</section>



	<!-- Gallery -->
	<div class="section-gallery p-t-118 p-b-100">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				All Photo
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".interior">
				Interior
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".food">
				Food
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".events">
				Events
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".guests">
				Vip guests
			</button>
		</div>

		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">

            @foreach ($gambar as $g)


            <!-- - -->

			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">
                    <div class="card" style="width: 100%;">
				<img src="{{asset('image/'.$g->gambar)}}" alt="IMG-GALLERY">
                <div class="card-body text-center">

                        {!!$g->keterangan!!}
				<div class="overlay-item-gallery trans-0-6 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="{{asset('image/'.$g->gambar)}}" data-lightbox="gallery"></a>
				</div>
            </div>
                    </div>
			</div>
            @endforeach
		{{$gambar->links()}}
	</div>


	<!-- Sign up -->
	<div class="section-signup bg1-pattern p-t-85 p-b-85">
		<form class="flex-c-m flex-w flex-col-c-m-lg p-l-5 p-r-5">
			<span class="txt5 m-10">
				Specials Sign up
			</span>

			<div class="wrap-input-signup size17 bo2 bo-rad-10 bgwhite pos-relative txt10 m-10">
				<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email-address" placeholder="Email Adrress">
				<i class="fa fa-envelope ab-r-m m-r-18" aria-hidden="true"></i>
			</div>

			<!-- Button3 -->
			<button type="submit" class="btn3 flex-c-m size18 txt11 trans-0-4 m-10">
				Sign-up
			</button>
		</form>
	</div>


@endsection
