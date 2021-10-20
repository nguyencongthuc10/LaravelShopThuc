    <!DOCTYPE html>
    <html lang="vi">

    <head>
        <title>Shop Thuc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/bootstrap.min.css') }}">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link href="{{ asset('public/fontend/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/swiper.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('public/fontend/css/magnify.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="{{ asset('public/fontend/css/xzoom.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;1,200;1,400&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('public/fontend/css/28.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="shopthuc">
            <header>
                <div class="header-top">
                    <span class="map"><i class="fal fa-map-marker-alt"></i> Số 15, Đường 18, P.Lnh Đông TP.Thủ
                        Đức</span>
                    <span class="phone"><i class="far fa-phone-alt"></i><a href="tel:034 998 3657">034 998
                            3657</a></span>
                </div>
                <div class="header-banner">
                    <nav>
                        <div class="logo">thucshop</div>
                        <div class="cart">
                            <span class="cart-span">

                                <a href="#"> <i class="fal fa-shopping-cart "></i></a>
                                <div class="dropdown-cart">
                                    <div class="product-cart">
                                        <img src="{{ asset('/images/user.png') }}">
                                        <div class="item-cart">
                                            <span class="name-pr-cart">Sản phẩm 1</span>
                                            <span class="pricr-pr-cart">1 * 700000</span>
                                        </div>
                                    </div>
                                    <div class="price-cart"><span>Tổng :</span>2,800,000đ</div>

                                    <div class=btn-full>
                                        <button class="btn-cart">Xem giỏi hàng</button>
                                        <button class="btn-pay">Thanh toán</button>
                                    </div>
                                </div>
                                <span class="cout-cart">1</span>

                            </span>

                        </div>
                        <span id="bars">
                            <i class="fas fa-bars"></i>
                        </span>
                        <span id="close">
                            <i class="fas fa-close"></i>
                        </span>
                        <div class="menu">
                            <ul>
                                <li>
                                    <div class="search">
                                        <form action="#">
                                            <label for="search"></label>
                                            <input class="input " type="search" placeholder="Nhập tìm kiếm">
                                            <button class="fas fa-search"></button>
                                        </form>
                                    </div>

                                </li>
                                <div id="menu-1" class="menu-1">
                                    <li><a href="{{ URL('/home') }}" style="color: #d54242;"><i
                                                style="margin-right: 5px;" class="fas fa-home"></i>Trang chủ</a></li>
                                    <li><a href="{{ URL('/introduce') }}">Giới thiệu</a></li>
                                    <li><a href="{{ URL('/watch-man') }}">Đồng hồ nam</a></li>
                                    <li><a href="{{ URL('/watch-woman') }}">Đồng hồ nữ</a></li>
                                    <li><a href="{{ URL('/contact') }}">Liên hệ</a></li>
                                    <li class="login"><a href="{{ URL('/contact') }}"><i
                                                class="fad fa-user"></i>Đăng nhập</a></li>
                                </div>

                            </ul>
                        </div>
                    </nav>
                </div>

            </header>



            @yield('noidung')



            <footer id="footer">
                <div class="container">
                    <div class="footer">
                        <div class="row">
                            <div class="col-md-3">
                                <h1>THUCSHOP</h1>
                                <div class="footer-left1">
                                    <p><i class="fal fa-map-marker-alt" style="margin-right: 5px;"></i>Số 15, Đường 18,
                                        P.Lnh Đông TP.Thủ Đức</p>
                                    <p><i class="far fa-phone-alt" style="margin-right: 5px;"></i><a
                                            href="tel:034 998 3657">034 998 3657</a></p>
                                    <p><i class="far fa-envelope" style="margin-right: 5px;"></i><a
                                            href="mailto:nguyencongthuc10g@gmail.com">nguyencongthuc10g@gmail.com
                                        </a></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 col-sm-6">
                                <h2>Liên kết</h2>
                                <div class="footer-left2">
                                    <p><a href="{{ URL('/home') }}" style="color: #d54242;"></i>Trang chủ</a></p>
                                    <p><a href="{{ URL('/introduce') }}">Giới thiệu</a></p>
                                    <p><a href="{{ URL('/contact') }}">Đồng hồ nam</a></p>
                                    <p><a href="{{ URL('/contact') }}">Đông hồ nữ</a></p>
                                    <p><a href="{{ URL('/contact') }}">Liên hệ</a></p>


                                </div>
                            </div>
                            <div class="col-md-3 col-6 col-sm-6">
                                <h2>Hổ trợ</h2>
                                <div class="footer-right1">
                                    <p><a href="#">Hướng dẫn mua hàng</a></p>
                                    <p><a href="#">Hướng dẫn thanh toán</a></p>
                                    <p><a href="#">Chính sách bảo hành</a></p>
                                    <p><a href="#">Chính sach đổi trả</a></p>
                                    <p><a href="#">Tư vấn khách hàng</a></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h2>Đăng ký</h2>
                                <p>Đăng ký để nhận thông tin mới nhất từ chúng tôi.</p>
                                <div class="footer-right2">
                                    <div class="send-email">
                                        <form action="#">
                                            <label for="search"></label>
                                            <input class="input " type="search" placeholder="Nhập tìm kiếm">
                                            <button class="fal fa-paper-plane"></button>
                                        </form>
                                    </div>
                                    <div class="footer-icon">
                                        <span data-toggle="tooltip" data-html="true" data-placement="bottom"
                                            title="<h6>Facebook</h6>"><i class="fab fa-facebook"></i></span>
                                        <span data-toggle="tooltip" data-html="true" data-placement="bottom"
                                            title="<h6>Instagram</h6>"><i class="fab fa-instagram"></i></span>
                                        <span data-toggle="tooltip" data-html="true" data-placement="bottom"
                                            title="<h6>Twitter</h6>"><i class="fab fa-twitter"></i></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
            <div class="footer-license" id="footerlicense">
                <p>&copy Bản quyền thuộc về <a href="#">THUCSHOP</a></p>
            </div>
        </div>

        <div class="tt-backto-top">

            <div id="button"></div>
        </div>


        <script src="{{ asset('public/fontend/js/jquery.js') }}"></script>
        <script src="{{ asset('public/fontend/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('public/fontend/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('public/fontend/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('public/fontend/js/swiper.js') }}"></script>
        <script src="{{ asset('public/fontend/js/jquery.magnify.js') }}"></script>

        <script type="text/javascript" src="{{ asset('public/fontend/js/xzoom.js') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/react/17.0.1/umd/react.production.min.js">
        </script>
        <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/17.0.1/umd/react-dom.production.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.6/index.min.js"></script>
        <script src="{{ asset('public/fontend/js/script1.js') }}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // No double click
            function isDoubleClicked(element) {
                //if already clicked return TRUE to indicate this click is not allowed
                if (element.data("isclicked")) return true;

                //mark as clicked for 1 second
                element.data("isclicked", true);
                setTimeout(function() {
                    element.removeData("isclicked");
                }, 1000);

                //return FALSE to indicate this click was allowed
                return false;
            }
        </script>
        <script type="text/javascript">
          (function(){
              var id = '';
            if ($('#product_home')) {
                
                load_more(id);

                function load_more($id = '') {
                    $.ajax({
                        method: 'POST',
                        url: '{{ url('/load-more-product') }}',
                        data: {

                            id: $id,
                        },
                        success: function(data) {
                            if (data == '') {

                                $('#load_more_product').remove();
                               
                                return;
                            } else {
                                $('#load_more_product').remove();
                                $('#product_home').append(data);
                            }
                        }

                    });
                }

                $(document).on('click', '#load_more_product', function() {
                    if (isDoubleClicked($(this))) return;
                    var id = $(this).data('id');
                    $('#load_more_product').html('<b>Loading...</b>');
                    load_more(id);



                });
                
                    
                    
                    // alert(footer + 50);
                    

              
                // alert(id);
                // if(id.offsetTop > 3094){
                    $(window).scroll(function() {
                    //     var footer =  $('#footer').height();
                    id = $('#load_more_product').data('id');
                    
                    // alert($(document).height() -400);
                    // alert($(window).scrollTop() + $(window).height());
                    if (($(window).scrollTop() + $(window).height()) >= $(document).height()) {
                       
                        
                        $('#load_more_product').html('<b>Loading...</b>');
                      
                        load_more(id)
                       
                     
                    }

           

                    //alert($(window).scrollTop());
                    //var aaa = id1.offsetTop - ($(window).scrollTop() + $(window).height());
                //     var idd1 =   $(document).scrollTop() + $(window).height();
                // alert(idd1);
                    //  alert(id.offsetTop);
                    // var sbHeight = window.innerHeight * (window.innerHeight / document.body.offsetHeight);
                    // alert(sbHeight);
                    
                  
                });
               
                

            }
          })();
        </script>

        <script>
            (function(){
                if ($('#product_watch') !== null) {
               
                var idWatch = '';
                var data1 = 0;
                var data2 = 0;
                var classify = 1;
                var sortWatch = '';
                var last_price = '';
                sessionStorage.setItem('data1', 0);
                sessionStorage.setItem('data2', 0);
                watchAjax(0, 0, '', classify, '', '');

                function watchAjax($data1, $data2, $id, $classify, $sortWatch, $last_price) {
                    $.ajax({
                        method: 'get',
                        url: '{{ url('/watchAjax') }}',
                        data: {

                            data1: $data1,
                            data2: $data2,
                            id: $id,
                            classify: $classify,
                            sortWatch: $sortWatch,
                            last_price: $last_price,
                        },
                        success: function(data) {
                            if (data == '') {
                                $('#load_more_watch').remove();
                                return;
                            } else {
                                $('#load_more_watch').remove();
                                $('#product_watch').append(data);
                            }

                        }

                    });
                }

                function dungchung($this) {
                    document.getElementById('sxwatch').value = "00";
                    $this.siblings().removeClass('active');
                    $this.addClass('active');
                    data1 = sessionStorage.getItem('data1');
                    data2 = sessionStorage.getItem('data2');
                    sortWatch = '';
                    $('#product_watch').html('');
                }
                $(document).on('click', '#load_more_watch', function(e) {
                    if (isDoubleClicked($(this))) return;
                    idWatch = $(this).data('id');
                    $('#load_more_watch').html('<b>Loading...</b>');
                    data1 = sessionStorage.getItem('data1');
                    data2 = sessionStorage.getItem('data2');
                    last_price = $(this).data('price');
                    watchAjax(data1, data2, idWatch, classify, sortWatch, last_price);



                });

                // $(window).scroll(function() {
                //     if ($(window).scrollTop() + $(window).height()>=  $(document).height()) { 
                //         var id = $('#load_more_watch').data('id');
                //         $('#load_more_watch').html('<b>Loading...</b>');
                //          watchAjax(data1, data2, id,classify);

                //     }
                // });   
                // lấy ra tất cả thẻ có name là brandimage
                //  var elements = document.querySelectorAll('.brandimage'); 

                //Thêm vào 1 sự kiện click
                // elements.addEventListener("click", function(e) { 
                //  });

                // từ id findBrandImagae tìm thẻ input
                // var adu = $('#findBrandImagae').find('input');

                //lấy tất cả phần tử con từ id findBrandImagae và lặp tất cả và click theo từng phần tử con
                var children = document.querySelectorAll('#findBrandImagae>input');
                var watchLi = $("#watchLi>li");

                children.forEach((child) => {
                    child.addEventListener('click', function(event) {
                        if (isDoubleClicked($(this))) return;
                        document.getElementById('sxwatch').value = "00";
                        watchLi.removeClass();
                        id_brand = $(this).val();
                        sessionStorage.setItem('data1', id_brand);
                        sessionStorage.setItem('data2', 99);
                        data1 = sessionStorage.getItem('data1');
                        data2 = sessionStorage.getItem('data2');
                        sortWatch = '';
                        $('#product_watch').html('');
                        watchAjax(data1, data2, '', classify, '', '');

                    });
                });
                //click theo id và find all brother of id and  removeClass, the addClass

                $('#allwatch').click(function() {
                    if (isDoubleClicked($(this))) return;
                    sessionStorage.setItem('data1', 0);
                    sessionStorage.setItem('data2', 0);
                    dungchung($(this));
                    watchAjax(data1, data2, '', classify, '', '');
                });
                $('#duoi2tr').click(function() {
                    if (isDoubleClicked($(this))) return;
                    sessionStorage.setItem('data1', 2000000);
                    sessionStorage.setItem('data2', 0);
                    dungchung($(this));
                    watchAjax(data1, data2, '', classify, '', '');
                });
                $('#2den5tr').click(function() {
                    if (isDoubleClicked($(this))) return;
                    sessionStorage.setItem('data1', 2000000);
                    sessionStorage.setItem('data2', 5000000);
                    dungchung($(this));
                    watchAjax(data1, data2, '', classify, '', '');

                });
                $('#5den10tr').click(function() {
                    if (isDoubleClicked($(this))) return;
                    sessionStorage.setItem('data1', 5000000);
                    sessionStorage.setItem('data2', 10000000);
                    dungchung($(this));
                    watchAjax(data1, data2, '', classify, '', '');
                });
                $('#10den20tr').click(function() {
                    if (isDoubleClicked($(this))) return;
                    sessionStorage.setItem('data1', 10000000);
                    sessionStorage.setItem('data2', 20000000);

                    dungchung($(this));
                    watchAjax(data1, data2, '', classify, '', '');
                });
                $('#tren20tr').click(function() {
                    if (isDoubleClicked($(this))) return;
                    sessionStorage.setItem('data1', 20000000);
                    sessionStorage.setItem('data2', 0);
                    dungchung($(this));
                    watchAjax(data1, data2, '', classify, '', '');
                });

                $('#sxwatch').change(function() {
                    sortWatch = $('#sxwatch').val();
                    data1 = sessionStorage.getItem('data1');
                    data2 = sessionStorage.getItem('data2');

                    $('#product_watch').html('');
                    watchAjax(data1, data2, '', classify, sortWatch, '');

                });

            }
            })();
            
        </script>
    </body>
