<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('partials.head')


</head>
<body>



    <div class="theme-layout">
        @include('partials.navbar')


        <section>
			<div class="feature-photo">
				<figure><img src="{{asset('assets/images/resources/timeline-1.jpg')}}" alt=""></figure>
				<div class="add-btn">
					<span>1205 followers</span>
					<a href="#" title="" data-ripple="">Add Friend</a>
				</div>
				<form class="edit-phto">
					<i class="fa fa-camera-retro"></i>
					<label class="fileContainer">
						Edit Cover Photo
					<input type="file"/>
					</label>
				</form>
				<div class="container-fluid">
					<div class="row merged">
						<div class="col-lg-2 col-sm-3">
							<div class="user-avatar">
								<figure>
									<img src="{{asset('assets/images/resources/user-avatar.jpg')}}" alt="">
									<form class="edit-phto">
										<i class="fa fa-camera-retro"></i>
										<label class="fileContainer">
											Edit Display Photo
											<input type="file"/>
										</label>
									</form>
								</figure>
							</div>
						</div>
						<div class="col-lg-10 col-sm-9">
							<div class="timeline-info">
								<ul>
									<li class="admin-name">
									  <h5>{{
                                        auth()->user()->name
                                        }}</h5>
									  {{-- <span>Group Admin</span> --}}
									</li>
									<li>
										<a class="active" href="time-line.html" title="" data-ripple="">time line</a>
										<a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
										<a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
										<a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
										<a class="" href="groups.html" title="" data-ripple="">Groups</a>
										<a class="" href="about.html" title="" data-ripple="">about</a>
										<a class="" href="#" title="" data-ripple="">more</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- top area -->



        <section>
            <div class="gap2 gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20" id="page-contents">
                                <!-- LEFT sidebar -->
                                @include('partials.left_sidbar')

                                {{-- CONTENT  --}}
                                <div class="col-lg-6">
                                    @yield('content')

                                </div>


                                    {{-- RIGHT SIDE BAR  --}}
                                @include('partials.right_sidbar')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.footer')

    </div>




    @include('partials.foot')
</body>
</html>
