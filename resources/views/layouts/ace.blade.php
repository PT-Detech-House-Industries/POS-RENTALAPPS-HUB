<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8" />
  <title>nihon uwu - owner</title>

  <meta name="description" content="top menu &amp; navigation" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <!-- bootstrap & fontawesome -->
  <link rel="stylesheet" href="{{ asset('ace/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('ace/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

  <!-- page specific plugin styles -->
  @stack('header')

  <!-- text fonts -->
  <link rel="stylesheet" href="{{ asset('ace/css/fonts.googleapis.com.css')}}" />

  <!-- ace styles -->
  <link rel="stylesheet" href="{{ asset('ace/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

  <!--[if lte IE 9]>
			<link rel="stylesheet" href="ace/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
  <link rel="stylesheet" href="{{ asset('ace/css/ace-skins.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('ace/css/ace-rtl.min.css')}}" />

  <!--[if lte IE 9]>
		  <link rel="stylesheet" href="ace/css/ace-ie.min.css" />
		<![endif]-->

  <!-- inline styles related to this page -->

  <!-- ace settings handler -->
  <script src="{{ asset('ace/js/ace-extra.min.js')}}"></script>

  <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

  <!--[if lte IE 8]>
		<script src="ace/js/html5shiv.min.js"></script>
		<script src="ace/js/respond.min.js"></script>
		<![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Intro.js -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/intro.js/minified/introjs.min.css">
  <script type="text/javascript" src="https://unpkg.com/intro.js/minified/intro.min.js"></script>
</head>

<body class="no-skin">
  <div id="navbar" class="navbar navbar-default navbar-collapse h-navbar ace-save-state">
    @include('layouts.header.topmenu-main-ace')
  </div>

  <div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
      try {
        ace.settings.loadState('main-container')
      } catch (e) {}
    </script>

    @include('layouts.menu.topmenu-main-ace')

    <div class="main-content">
      @include('sweetalert::alert')
      <div class="main-content-inner">
        <div class="page-content">
          <div class="ace-settings-container" id="ace-settings-container">
            <a href="javascript:void(0);" onclick="javascript:introJs().start();">
              <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="ace-icon fa fa-info bigger-130"></i>
              </div>
            </a>
          </div>
          <!-- /.tutorial-settings-container -->

          @yield('page-header')

          <div class="row">
            <div class="col-xs-12">
              <!-- PAGE CONTENT BEGINS -->

              @yield('main')

              <div class="center">
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
              </div>

              <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.page-content -->
      </div>
    </div><!-- /.main-content -->

    <div class="footer">
      <div class="footer-inner">
        <div class="footer-content">
          <span class="bigger-120">
            <span class="blue bolder">PT.</span>
            Detech house &copy;{{ now()->year }}
          </span>
        </div>
      </div>
    </div>
    <!-- footer -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
      <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
  </div><!-- /.main-container -->

  <!-- basic scripts -->

  <!--[if !IE]> -->
  <script src="{{ asset('ace/js/jquery-2.1.4.min.js') }}"></script>

  <!-- <![endif]-->

  <!--[if IE]>
  <script src="ace/js/jquery-1.11.3.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write(
      "<script src='ace/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
  </script>
  <script src="{{ asset('ace/js/bootstrap.min.js') }}"></script>

  <!-- page specific plugin scripts -->
  @stack('script')

  <!-- ace scripts -->
  <script src="{{ asset('ace/js/ace-elements.min.js') }}"></script>
  <script src="{{ asset('ace/js/ace.min.js') }}"></script>

  <!-- inline scripts related to this page -->
  @stack('inline_scripts')
  <script type="text/javascript">
    jQuery(function($) {
      var $sidebar = $('.sidebar').eq(0);
      if (!$sidebar.hasClass('h-sidebar')) return;
      $(document).on('settings.ace.top_menu', function(ev, event_name, fixed) {
        if (event_name !== 'sidebar_fixed') return;
        var sidebar = $sidebar.get(0);
        var $window = $(window);
        //return if sidebar is not fixed or in mobile view mode
        var sidebar_vars = $sidebar.ace_sidebar('vars');
        if (!fixed || (sidebar_vars['mobile_view'] || sidebar_vars['collapsible'])) {
          $sidebar.removeClass('lower-highlight');
          //restore original, default marginTop
          sidebar.style.marginTop = '';
          $window.off('scroll.ace.top_menu')
          return;
        }
        var done = false;
        $window.on('scroll.ace.top_menu', function(e) {
          var scroll = $window.scrollTop();
          scroll = parseInt(scroll / 4); //move the menu up 1px for every 4px of document scrolling
          if (scroll > 17) scroll = 17;
          if (scroll > 16) {
            if (!done) {
              $sidebar.addClass('lower-highlight');
              done = true;
            }
          } else {
            if (done) {
              $sidebar.removeClass('lower-highlight');
              done = false;
            }
          }
          sidebar.style['marginTop'] = (17 - scroll) + 'px';
        }).triggerHandler('scroll.ace.top_menu');
      }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);
      $(window).on('resize.ace.top_menu', function() {
        $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass(
          'sidebar-fixed')]);
      });
    });
  </script>

  <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
  <script>
    function deleteConfirmation() {
      swal({
        title: "Apakah Anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        buttons: {
          cancel: {
            text: "Batal",
            value: false,
            visible: true,
            className: "",
            closeModal: true,
          },
          confirm: {
            text: "Hapus",
            value: true,
            visible: true,
            className: "btn-danger",
            closeModal: true
          }
        },
        dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
          document.getElementById('delete').submit();
        }
      });
    }
  </script>
</body>

</html>