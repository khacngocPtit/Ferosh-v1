@extends('master-layout')

@section('title')
	Sản phẩm
@endsection

@section('content')
<main>
	<div class="sanpham">
		<div class="container">
			<div class="row">
				<div class="col-4-lg">
					<div class="sp mt-4 a mb-4">
					<ul>
						<li><a href="" class="a">Trang chủ</a></li>
						<li><i class="fas fa-caret-right"></i></li>
						<li><a href="">Bộ sưu tập</a></li>
						<li><i class="fas fa-caret-right"></i></li>
						<li><a href="">Sản phẩm</a></li>
					</ul>
				</div>
				    </div>
			</div>
		</div>
	</div>
	<div class="bosuutap">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6 left-bst mt-4">
					<h3>BỘ SƯU TẬP</h3>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6  right-bst mt-4">
					<h3>SẢN PHẨM</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="hr">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 text-center size-15 hr mt-4">
				<p>Có 17 sản phẩm</p>
				<hr>
			</div>
		</div>
	</div>
</div>
<div class="content">
	<div class="container">
		<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <a href=""><img class="pic-1" src="{{ asset('images/1.jpg') }}"></a>
                        <img class="pic-2" src="{{ asset('images/2.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><p>LE JARDIN BST MỚI THÁNG 8</p></div>
                    <div class="gia">
                </div>
            </div>
        </div> 
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/5.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/6.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">ELLY</a></h3>
                    <div class="price">ELLY BST THÁNG 8</div>
                </div>
            </div>
        </div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
	           <div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/13.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/10.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">H&T FASHION</a></h3>
                    <div class="price">H&T FASHION BST THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/11.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/12.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">ETERNITE</a></h3>
                    <div class="price">ETERNITE BST THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/14.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/15.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LARITA</a></h3>
                    <div class="price">LARITA SUMMER 19 COLLECTION</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/16.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/100.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/18.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/20.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/21.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price"><p>LE JARDIN BST MỚI THÁNG 8</p></div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/22.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/23.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/24.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/25.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/26.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/27.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/28.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/29.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3 mt-4">
			<div class="product-grid9">
                <div class="product-image9">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/30.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/19.jpg') }}">
                    </a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">LE JARDIN</a></h3>
                    <div class="price">LE JARDIN BST MỚI THÁNG 8</div>
                </div>
            </div>
		</div>
	</div>
	</div>
</div>
</main>
@endsection