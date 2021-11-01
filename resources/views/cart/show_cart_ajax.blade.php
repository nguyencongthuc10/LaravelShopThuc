@extends('index')
@section('noidung')
<div class="view__gioihang">
	<div class="container">
		<form action="#" method="POST">
		<table>
			<thead>
				<tr>
					<th>Hình ảnh</th>
					<th>Tên sản phẩm</th>
					<th>Số lượng</th>
					<th>Giá</th>
					<th>Tổng</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="img__gioihang">
							<i class="far fa-times-circle"></i>
							<img src="images/bg-4.jpg" alt="bg" width="80px" height="80px" class="img-responsive">
						</div>
					</td>
					<td>
						<span class="name__gioihang">
							sản phảm 1

						</span>
					</td>
					<td>
						<span class="soluong__gioihang">
							<div class="num-block skin-2">

								<div class="num-in">
									<span class="minus dis"></span>

									<input type="text" class="in-num" value="1" min="1" max="99" readonly="">
									<span class="plus"></span>
								</div>
							</div>
						</span>
					</td>
					<td>
						<span class="price__gioihang">
							500000d
						</span>
					</td>
					<td>
						<span class="tong__gioihang">
							5000.000Đ
						</span>
					</td>
				</tr>

				<tr>
					<td>
						<div class="img__gioihang">
							<i class="far fa-times-circle"></i>
							<img src="images/bg-4.jpg" alt="bg" width="80px" height="80px" class="img-responsive">
						</div>
					</td>
					<td>
						<span class="name__gioihang">
							sản phảm 1

						</span>
					</td>
					<td>
						<span class="soluong__gioihang">
							<div class="num-block skin-2">

								<div class="num-in">
									<span class="minus dis"></span>

									<input type="text" class="in-num" value="1" min="1" max="99" readonly="">
									<span class="plus"></span>
								</div>
							</div>
						</span>
					</td>
					<td>
						<span class="price__gioihang">
							500000d
						</span>
					</td>
					<td>
						<span class="tong__gioihang">
							5000.000Đ
						</span>
					</td>
				</tr>
				<!-- <caption style="caption-side: bottom; text-align: center;">Không có sản phẩm nàotrong giỏi hàng.</caption>
 -->
			</tbody>
		</table>




		<div class="total__quality-gioihang">
			<ul>
				<li>
					Tổng phụ
					<span>1000vnd</span>
				</li>
				<li>
					Thuế
					<span>1000vnd</span>
				</li>
				<li>
					Phí vận chuyển
					<span>1000vnd</span>
				</li>
				<li>
					Thành tiền
					<span>1000vnd</span>
				</li>
			</ul>

		<div class="button__gioihang">
			<button type="submit" class="nhanxet__button"><i class="far fa-arrow-left" style="margin-right: 5px;"></i>Tiếp tục xem sản phẩm</button>
			<button type="submit" class="nhanxet__button">Thanh toán</button>
		</div>
		</div>


		</form>
	</div>
</div>

@endsection