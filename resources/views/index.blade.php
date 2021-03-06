@extends('layouts.default')
@section('content')
<section class="banner">
    <div class="container">
        <div class=" inner-banner clearfix">
            <div class="col-md-6 col-sm-9 col-xs-12 type-room">
                <div class="hovereffect">
                     <img class="img-responsive" src="//bizweb.dktcdn.net/100/022/286/themes/28873/assets/ban1.jpg?1457574486889" alt="">
                        <div class="overlay">
                           
                           <a class="info" href="#">link here</a>
                        </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 hidden-xs type-room">
                <div class="hovereffect">
                     <img class="img-responsive" src="//bizweb.dktcdn.net/100/022/286/themes/28873/assets/ban2.jpg?1457574486889" alt="">
                     <div class="overlay">                           
                        <a class="info" href="#">link here</a>
                     </div>
                </div>
            </div>
            <div class="col-md-2 hidden-sm hidden-xs type-room">
                <div class="hovereffect">
                    <img class="img-responsive" src="//bizweb.dktcdn.net/100/022/286/themes/28873/assets/ban3.jpg?1457574486889" alt="">
                    <div class="overlay">
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2 hidden-sm hidden-xs type-room">
                <div class="hovereffect">
                    <img class="img-responsive" src="//bizweb.dktcdn.net/100/022/286/themes/28873/assets/ban4.jpg?1457574486889" alt="">
                    <div class="overlay">
                     
                       <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- DANH SACH CONG TRINH-->
<section class="sec-news p20">
      <div class="col-md-8 col-md-offset-2">
        <header class="section-title">
            <h2>Danh sách công trình</h2>
            <p></p>
        </header>
      </div>
      <div class="container">
         <div class="row da-thumbs" id="da-thumbs">
            
            <div class="col-md-3 col-sm-6 col-xs-12" id="list_construction">
               <a href="">
                   <img src={{"public/images/1.jpg"}} />
                   <div>
                     <span>Phòng ngủ loại lớn</span>
                     <p>Rộng: 12*10</p>
                     <p>Thiết kế: Lê Hưng</p>
                  </div>
               </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" id="list_construction">
               <a href="">
                   <img src={{"public/images/2.jpg"}} />
                   <div><span>Menu by Simon Jensen</span></div>
               </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" id="list_construction">
               <a href="">
                   <img src={{"public/images/3.jpg"}} />
                   <div><span>Menu by Simon Jensen</span></div>
               </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" id="list_construction">
               <a href="">
                   <img src={{"public/images/4.jpg"}} />
                   <div><span>Menu by Simon Jensen</span></div>
               </a>
            </div>
        
      </div>
</section>

<section class="sec-news p20">
      <div class="col-md-8 col-md-offset-2">
         <header class="section-title">
            <h2>Tin tức mới</h2>
            <p></p>
         </header>
      </div>
    <div class="container">
        <div class="row">
        
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
  <div class="col-md-2 col-sm-2 col-xs-2 blog-entry">
    <p class="entry-day">21</p>
    <p class="entry-month">Tháng 10</p>
    <p class="entry-year">2015</p>
  </div>
  <div class="col-md-10 col-sm-10 col-xs-10 blog-body">
    <a href="/bi-kip-chon-noi-that-cho-phong-khach-chat-hep" class="blog-title">BÍ KÍP CHỌN NỘI THẤT CHO PHÒNG KHÁCH CHẬT HẸP</a>
    <div class="author">
      <span><i class="fa fa-pencil-square-o"></i> Nguyễn Đăng Thắng</span>
      <span><i class="fa fa-comment-o"></i> 1 Nhận xét</span>
    </div>
    <div class="blog-image">
    
      
      
      <img class="img-responsive" src="//bizweb.dktcdn.net/100/005/287/files/8.jpeg?v=1445310686188" alt="">
      
      </div>
      <div class="blog-summary">  Bí kíp chọn nội thất cho phòng khách chật hẹp  

 Nói đến sofa, bạn sẽ nghĩ ngay đến những kiểu sofa có vẻ hơi…bề thế. Việc...</div>
      <a href="/bi-kip-chon-noi-that-cho-phong-khach-chat-hep" class="blog-more">Xem thêm</a>
      </div>
      </div>
            </div>
        
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
  <div class="col-md-2 col-sm-2 col-xs-2 blog-entry">
    <p class="entry-day">15</p>
    <p class="entry-month">Tháng 10</p>
    <p class="entry-year">2015</p>
  </div>
  <div class="col-md-10 col-sm-10 col-xs-10 blog-body">
    <a href="/bai-viet-mau" class="blog-title">10 CÁCH PHỐI MẦU CHO CĂN PHÒNG ĐẸP</a>
    <div class="author">
      <span><i class="fa fa-pencil-square-o"></i> Nguyễn Đăng Thắng</span>
      <span><i class="fa fa-comment-o"></i> 0 Nhận xét</span>
    </div>
    <div class="blog-image">
    
      
      
      <img class="img-responsive" src="//bizweb.dktcdn.net/100/022/286/files/a-1.jpg?v=1445392876849" alt="">
      
      </div>
      <div class="blog-summary"> Đối với gia đình Việt, phòng bếp luôn là nơi quan trọng vì ở đó, gia đình quây quần sum họp bên nhau sau một ngày dài làm việc....</div>
      <a href="/bai-viet-mau" class="blog-more">Xem thêm</a>
      </div>
      </div>
            </div>
        
        </div>
    </div>
</section>
<script type="text/javascript">
   $(function() {       
      $(' #da-thumbs > #list_construction ').each( function() { $(this).hoverdir(); } );
   });
</script>
@stop