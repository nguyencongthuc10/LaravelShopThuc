@extends('index')
@section('noidung')
<div class="donghonam" id="test">
	<div class="video">
		<video width="100%" src="{{URL('public/fontend/images/video.mp4')}}" muted loop autoplay></video>
	</div>
	<div class="container">
		<h3 class="title-comm"><span class="title-holder">Thương hiệu</span></h3>
		<div class="thuonghieu-dhnam">

			<div class="row-collapse">
				
				@foreach ($brand as $key => $brand_image)
                    <div class="col ">
                        <div class="paddding-th" id="findBrandImagae">
                            
                            <input type="image" name="brandimage" value="{{$brand_image->id}}" alt="{{$brand_image->imagae_brand}}" title="{{$brand_image->name_brand}}"
                                src="{{URL('public/updates/brand/'.$brand_image->image_brand)}}">
                        </div>
                    </div>
                
                    
                @endforeach
			</div>


		</div>
		<div id='nz-div'>
			<h3 class="tde">			
				<span class="null">Tìm kiếm</span>	
			</h3>
		</div>
		<div class="timkiem-dhtnam">

			<ul id="watchLi">
				<li id="allwatch" title="Tất cả" >Tất cả</li>
				<li id="duoi2tr" title="Dưới 2 triệu" >Dưới 2 triệu</li>
                <li id="2den5tr" title="Từ 2 - 5 triệu">Từ 2 - 5 triệu</li>
                <li id="5den10tr" title="Từ 5 - 10 triệu">Từ 5 - 10 triệu</li>
                <li id="10den20tr" title="Từ 10 - 20 triệu">Từ 10 - 20 triệu</li>
                <li id="tren20tr" title="Trên 20 triệu">Trên 20 triệu</li>
				

			</ul>

		</div>
		<div class="sx">
			
			<div class="sx-theo">
				<select name="sx" id="sxwatch" class="sx-dhnam">
					<option value="00">Sắp xếp</option>
					<option value="11">Giá cao đến thấp</option>
					<option value="22">Giá thấp đến cao</option>

				</select>
			</div>
		</div>
		<div class="sanpham">
			<div class="row-sp" id="product_watch">
				
				
				

			</div>
		</div>
	</div>
</div>
@endsection