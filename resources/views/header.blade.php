
  <nav class="nav-horizontal container-fluid">
      <div class="nav-horizontal-container container d-flex justyfy-content-between">
            <div class="logo">
                    <img src="images/logo.png">
                </div>
          <div class="nav-horizontal-content">
              <ul class="nav-ul-lv-1">
                    <li><a href="{{ url('trangchu') }}">

                    </a></li>
                  <li><a href="{{ url('trangchu') }}">Trang chủ</a></li>
                  <li class="sanpham" style="position : unset">
                      <a href="{{ url('about') }}">Về chúng tôi</a>
                  </li>
                  <li><a href="{{ url('sukien') }}">Tổ chức sự kiện</a></li>
                  <li>
                      <a href="{{ url('thietbi') }}">Thiết bị sự kiện</a>
                  </li>
                  <li class="lienhe-led"><a href="{{ url('nhansu') }}">Nhân sự sự kiện</a></li>
                  <li class="lienhe-led">
                      <a href="{{ url('tintuc') }}">Tin tức</a>

                  </li>
                  <li class="lienhe-led"><a href="{{ url('team') }}">our tem</a></li>
                  <li class="lienhe-led"><a href="{{ url('lienhe') }}">Liên hệ
                      </a></li>



              </ul>
              <div class="menu-mobile-button">
                  <i class="fas fa-bars"></i>
              </div>
          </div>
      </div>
  </nav>
  <script type="text/javascript" src="js/nav-horizontal.js"></script>

  <section class="menu-mobile">
      <div class="menu-mobile-bg"></div>
      <div class="menu-mobile-box">
          <div class="menu-mobile-info">

          </div>
          <div class="menu-mobile-content">
              <div class="menu-left">
                  <div class="menu-left-title">
                      <h3>Menu</h3>
                  </div>
                  <div class="menu-left-content">

                      <ul class="menu-left-ul-lv-1">
                          <li><a href="{{ url('trangchu') }}">Trang chủ</a></li>
                          <li><a href="{{ url('about') }}">Về chúng tôi</a></li>
                          <li><a href="{{ url('sukien') }}">Tổ chức sự kiện</a></li>
                          <li><a href="{{ url('thietbi') }}">Thiết bị sự kiện</a></li>
                          <li><a href="{{ url('nhansu') }}">Nhân sự sự kiện</a></li>
                          <li><a href="{{ url('tintuc') }}">tin tức</a></li>
                          <li><a href="{{ url('team') }}">our team</a></li>

                      </ul>

                  </div> <!-- menu-left-content -->
              </div> <!-- menu-left -->
              <script type="text/javascript" src="js/menu-left-js.js"></script>
          </div>
      </div>
      <script type="text/javascript" src="js/menu-mobile.js"></script>
  </section>
