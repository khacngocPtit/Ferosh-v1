@extends('master-layout')

@section('title')
	Đăng kí
@endsection

@section('content')

<main>
	<div class="menutren"  style="margin-bottom: 20px;">
		<div class="container">
			<div class="row">
				<div class="col-4-lg">
					<div class="menu mt-4 a mb-4">
					<ul>
						<li><a href="" class="a">Trang chủ</a></li>
						<li><i class="fas fa-caret-right"></i></li>
						<li><a href="">Đăng kí</a></li>
					</ul>
				</div>
				    </div>
			</div>
		</div>
	</div>
	<div class="dangki">
		<div class="container">
			<div class="row">
				<div class="col-12 dangki">
					<p>ĐĂNG KÝ</p>
				</div>
			</div>
		</div>
	</div>
	<div class="trogiup">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 trogiupt mt-4">
				<ul>
					<li style="border-left: none;">Trợ giúp? 1900 636 517</li>
					<li><a href="">Chính sách đổi trả</a></li>
					<li><a href="">Chính sách giao hàng</a></li>
					<li><a href="">Chính sách thanh toán</a></li>
					<li><a href="">Size Guide</a></li>
				</ul>
			</div>
			<div class="col-12">
				<hr style="height: 0,5px;background-color:black">
			</div>
		</div>
	</div>
</div>
<div class="contentdk">
	<div class="container">
		<div class="row">
			<div class="col-md-12 noidungdk">
				<div class="col-12">
					<p style="margin-top: 2%;font-size:18px;">MỞ TÀI KHOẢN VỚI FEROSH</p>
					<p style="font-size: 12px;margin-top:-1%;color: black;">Trở thành thành viên của Ferosh nhận các tin tức thời trang trong nước và quốc tế, các chương trình khuyến mại duy nhất chỉ dành cho các thành viên của Ferosh hay là những người đầu tiên được thông báo khi có sản phẩm thiết kế mới. Bạn còn chờ gì nữa?</p>
					<p>* Thông tin bắt buộc</p>
				</div>

				<div class="col-md-12">
					<div class="row">
					<div class="col-md-6 left">
						<table  >
							<tr>
								<td>Email *
									<td><input type="text" name=""></td>
								</td>
							</tr>
							<tr>
			                    <td>Mật khẩu *
									<td><input type="text" name=""></td>
								</td>
							</tr>
							<tr>
			                    <td>Nhập lại mật khẩu *
									<td><input type="text" name=""></td>
								</td>
							</tr>
							<tr>
			                    <td>Địa chỉ *
									<td><input type="text" name=""></td>
								</td>
							</tr>
							<tr>
			                    <td>Thành phố *
									<td>
										<select >
											<option>chọn thành phố</option>
											<option>Hà Nội</option>
											<option>Hà Nội</option>
											<option>Hà Nội</option>
											<option>Hà Nội</option>
											<option>Hà Nội</option>
											<option>Hà Nội</option>
											<option>Hà Nội</option>
										</select>
									</td>
								</td>
							</tr>
						</table>
					</div>
					<div class="col-md-6 right">
						<table  >
							<tr>
								<td>Email *
									<td><input type="text" name=""></td>
								</td>
							</tr>
							<tr>
			                    <td>Mật khẩu *
									<td><input type="text" name=""></td>
								</td>
							</tr>
							<!-- <tr>
			                    <td>Giới tính
			                    	<td>
			                    		
			                    	</td>
								</td>
							</tr> -->
							<form action="">
								Giới tính:
								<input type="radio" name="sex">Nam
								<input type="radio" name="sex">Nữ
							</form>
						</table>
                        <div class="khuyenmai ">
                        	
                        	<a href="">Nhận thông tin về các chương trình khuyến mại và các cập nhật mới từ Ferosh</a>
                        </div>
                        <div class="infor">
                        	<a href="">Nhận thông tin sản phẩm thiết kế mới</a>
                        </div>
                        <div class="dkn">
                        <a href="">Đăng kí ngay</a>
                        </div>
                        <div class="facebook">
                        <a href="">facebook</a>
                        </div>
					</div>
					</div>
			</div>
			</div>
		</div>
	</div>
</div>
</main>

@endsection