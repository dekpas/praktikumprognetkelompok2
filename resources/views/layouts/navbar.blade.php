    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
					</button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('thewayshop/images/logo1.png') }}" class="logo" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Beranda</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Kategori</a>
                            <ul class="dropdown-menu">
							<div class="col-sm d-flex justify-content-center">
								<div class="form-group">
									@foreach ($category as $item)
										@if ($item->product->count())
											<li><a href="#" class="mt-2">{{$item->category_name}}</a></li>
										@endif	
									@endforeach
								</div>
							</div>
                            </ul>
                        </li>
						<li class="nav-item"><a class="nav-link" href="about.html">Tentang Kami</a></li>
                    </ul>
                </div>
				<div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
							<i class="fa fa-shopping-bag"></i>
							<span class="badge">3</span>
						</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>