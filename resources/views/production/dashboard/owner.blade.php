<!-- import-template -->
@extends('layouts.ace')

<!-- main -->
@push('header')
<!-- none -->
<link rel="stylesheet" href="{{ asset('ace/css/jquery-ui.custom.min.css') }}" />
<link rel="stylesheet" href="{{ asset('ace/css/jquery.gritter.min.css') }}" />

<link rel="stylesheet" href="{{ asset('ace/css/ace-skins.min.css') }}" />
<link rel="stylesheet" href="{{ asset('ace/css/ace-rtl.min.css') }}" />
@endpush

@section('page-header')
<!-- page-header -->
<div class="page-header">
	<h1>
		Dashboard
		<small data-step="1" data-intro="Langkah 1: Halaman index form Produk Barang">
			<i class="ace-icon fa fa-angle-double-right"></i>
			<!-- top menu &amp; navigation -->
			index page
		</small>
	</h1>
</div><!-- /.page-header -->
@endsection

@section('main')
<div class="row">
	<!-- <ul class="pager">
		<li class="previous">
			<a href="#">&larr; Older</a>
		</li>

		<li class="next">
			<a href="#">Newer &rarr;</a>
		</li>
	</ul> -->
	<div class="col-xs-12">
		<a href="{{ route('owner.user.index') }}" class="btn btn-app btn-success btn-sm">
			<i class="ace-icon fa fa-users bigger-200"></i>
			Users
		</a>

		<a href="{{ route('owner.client.index') }}" class="btn btn-app btn-info btn-sm">
			<i class="ace-icon fa fa-users bigger-200"></i>
			Client
		</a>

		<a href="{{ route('owner.talent.index') }}" class="btn btn-app btn-danger btn-sm">
			<i class="ace-icon fa fa-users bigger-200"></i>
			Talent
		</a>

	</div>

</div>

<div class="space"></div>

<div class="row">
	<div class="col-xs-12">
		<p>
			<a href="{{ route('owner.service.talent.index') }}" class="btn btn-danger btn-block">
				Service Talent
			</a>
		</p>
		<p>
			<a href="{{ route('owner.order.service.index') }}" class="btn btn-danger btn-block">
				Order Service
			</a>
		</p>
		<p>
			<a href="{{ route('owner.order.temp.index') }}" class="btn btn-danger btn-block">
				Order Temp Service
			</a>
		</p>
		<p>
			<a href="{{ route('owner.order.detail.index') }}" class="btn btn-danger btn-block">
				Order Detail Service
			</a>
		</p>
	</div>
</div>

<div class="hr hr-double hr-dotted hr18"></div>

<div class="row">

	<div class="col-sm-6">
		<h3 class="header smaller lighter green">Progress Counting User</h3>

		<div class="row">
			<div class="col-xs-4">
				<div class="easy-pie-chart percentage" data-percent="100" data-color="#D15B47">
					<span class="percent">{{$sumUser}}</span>
				</div>

				<hr />
				<div class="easy-pie-chart percentage" data-percent="100" data-color="#87CEEB">
					<span class="percent">{{$sumTalent}}</span>
				</div>

				<hr />
				<div class="easy-pie-chart percentage" data-percent="100" data-color="#87B87F">
					<span class="percent">{{$sumClient}}</span>
				</div>
			</div><!-- /.col -->

			<div class="col-xs-8 center">
				<div class="well well-lg">
					<h4 class="red">TOTAL USER</h4>
					tanggal : {{$dataTime}}
				</div>
				<div class="well well-lg">
					<h4 class="blue">TOTAL TALENT</h4>
					tanggal : {{$dataTime}}
				</div>
				<div class="well well-lg">
					<h4 class="blue">TOTAL CLIENT</h4>
					tanggal : {{$dataTime}}
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.col -->

	<div class="col-sm-6">
		<h3 class="row header smaller lighter blue">
			<span class="col-xs-6"> Ringkasan </span><!-- /.col -->

			<span class="col-xs-6">
				<span class="pull-right inline">
					<span class="grey smaller-80 bolder">style:</span>

					<span class="btn-toolbar inline middle no-margin">
						<span id="accordion-style" data-toggle="buttons" class="btn-group no-margin">
							<label class="btn btn-xs btn-yellow active">
								<input type="radio" value="1" />
								1
							</label>

							<!-- <label class="btn btn-xs btn-yellow">
								<input type="radio" value="2" />
								2
							</label> -->
						</span>
					</span>
				</span>
			</span>
			<!-- /.col -->
		</h3>

		<div id="accordion" class="accordion-style1 panel-group">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							<i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down"
								data-icon-show="ace-icon fa fa-angle-right"></i>
							&nbsp;Group Item #1
						</a>
					</h4>
				</div>

				<div class="panel-collapse collapse in" id="collapseOne">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
						officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
						wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
						Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down"
								data-icon-show="ace-icon fa fa-angle-right"></i>
							&nbsp;Group Item #2
						</a>
					</h4>
				</div>

				<div class="panel-collapse collapse" id="collapseTwo">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
						officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
						wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
						Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down"
								data-icon-show="ace-icon fa fa-angle-right"></i>
							&nbsp;Group Item #3
						</a>
					</h4>
				</div>

				<div class="panel-collapse collapse" id="collapseThree">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
						officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
						wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.col -->

</div><!-- /.row -->

<br><br>
<p>daftar dengan akun social media (masih gagal)</p>
<a href="{{ url('/auth/google') }}">Masuk dengan Google</a>
<br>
<a href="{{ url('/auth/facebook') }}">Masuk dengan Facebook</a>

@endsection

@push('script')
<script type="text/javascript">
	if ('ontouchstart' in document.documentElement) document.write("<script src='ace/js/jquery.mobile.custom.min.js'>" +
		"<" + "/script>");
</script>

<script src="{{ asset('ace/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('ace/js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ asset('ace/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('ace/js/bootbox.js') }}"></script>
<script src="{{ asset('ace/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('ace/js/jquery.gritter.min.js') }}"></script>
<script src="{{ asset('ace/js/spin.js') }}"></script>

@endpush

@push('inline_scripts')
<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
		/**
		$('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		  //console.log(e.target.getAttribute("href"));
		})
			
		$('#accordion').on('shown.bs.collapse', function (e) {
			//console.log($(e.target).is('#collapseTwo'))
		});
		*/
		$('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
			//if($(e.target).attr('href') == "#home") doSomethingNow();
		})
		/**
			//go to next tab, without user clicking
			$('#myTab > .active').next().find('> a').trigger('click');
		*/
		$('#accordion-style').on('click', function(ev) {
			var target = $('input', ev.target);
			var which = parseInt(target.val());
			if (which == 2) $('#accordion').addClass('accordion-style2');
			else $('#accordion').removeClass('accordion-style2');
		});
		//$('[href="#collapseTwo"]').trigger('click');
		$('.easy-pie-chart.percentage').each(function() {
			$(this).easyPieChart({
				barColor: $(this).data('color'),
				trackColor: '#EEEEEE',
				scaleColor: false,
				lineCap: 'butt',
				lineWidth: 8,
				animate: ace.vars['old_ie'] ? false : 1000,
				size: 75
			}).css('color', $(this).data('color'));
		});
		$('[data-rel=tooltip]').tooltip();
		$('[data-rel=popover]').popover({
			html: true
		});
		$('#gritter-regular').on(ace.click_event, function() {
			$.gritter.add({
				title: 'This is a regular notice!',
				text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				image: 'assets/images/avatars/avatar1.png', //in Ace demo ./dist will be replaced by correct assets path
				sticky: false,
				time: '',
				class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
			});
			return false;
		});
		$('#gritter-sticky').on(ace.click_event, function() {
			var unique_id = $.gritter.add({
				title: 'This is a sticky notice!',
				text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				image: 'assets/images/avatars/avatar.png',
				sticky: true,
				time: '',
				class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
			});
			return false;
		});
		$('#gritter-without-image').on(ace.click_event, function() {
			$.gritter.add({
				// (string | mandatory) the heading of the notification
				title: 'This is a notice without an image!',
				// (string | mandatory) the text inside the notification
				text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
			});
			return false;
		});
		$('#gritter-max3').on(ace.click_event, function() {
			$.gritter.add({
				title: 'This is a notice with a max of 3 on screen at one time!',
				text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				image: 'assets/images/avatars/avatar3.png', //in Ace demo ./dist will be replaced by correct assets path
				sticky: false,
				before_open: function() {
					if ($('.gritter-item-wrapper').length >= 3) {
						return false;
					}
				},
				class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
			});
			return false;
		});
		$('#gritter-center').on(ace.click_event, function() {
			$.gritter.add({
				title: 'This is a centered notification',
				text: 'Just add a "gritter-center" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
				class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' :
					'')
			});
			return false;
		});
		$('#gritter-error').on(ace.click_event, function() {
			$.gritter.add({
				title: 'This is a warning notification',
				text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
				class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
			});
			return false;
		});
		$("#gritter-remove").on(ace.click_event, function() {
			$.gritter.removeAll();
			return false;
		});
		///////
		$("#bootbox-regular").on(ace.click_event, function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {} else {}
			});
		});
		$("#bootbox-confirm").on(ace.click_event, function() {
			bootbox.confirm("Are you sure?", function(result) {
				if (result) {
					//
				}
			});
		});
		/**
			$("#bootbox-confirm").on(ace.click_event, function() {
				bootbox.confirm({
					message: "Are you sure?",
					buttons: {
					  confirm: {
						 label: "OK",
						 className: "btn-primary btn-sm",
					  },
					  cancel: {
						 label: "Cancel",
						 className: "btn-sm",
					  }
					},
					callback: function(result) {
						if(result) alert(1)
					}
				  }
				);
			});
		**/
		$("#bootbox-options").on(ace.click_event, function() {
			bootbox.dialog({
				message: "<span class='bigger-110'>I am a custom dialog with smaller buttons</span>",
				buttons: {
					"success": {
						"label": "<i class='ace-icon fa fa-check'></i> Success!",
						"className": "btn-sm btn-success",
						"callback": function() {
							//Example.show("great success");
						}
					},
					"danger": {
						"label": "Danger!",
						"className": "btn-sm btn-danger",
						"callback": function() {
							//Example.show("uh oh, look out!");
						}
					},
					"click": {
						"label": "Click ME!",
						"className": "btn-sm btn-primary",
						"callback": function() {
							//Example.show("Primary button");
						}
					},
					"button": {
						"label": "Just a button...",
						"className": "btn-sm"
					}
				}
			});
		});
		$('#spinner-opts small').css({
			display: 'inline-block',
			width: '60px'
		})
		var slide_styles = ['', 'green', 'red', 'purple', 'orange', 'dark'];
		var ii = 0;
		$("#spinner-opts input[type=text]").each(function() {
			var $this = $(this);
			$this.hide().after('<span />');
			$this.next().addClass('ui-slider-small').
			addClass("inline ui-slider-" + slide_styles[ii++ % slide_styles.length]).
			css('width', '125px').slider({
				value: parseInt($this.val()),
				range: "min",
				animate: true,
				min: parseInt($this.attr('data-min')),
				max: parseInt($this.attr('data-max')),
				step: parseFloat($this.attr('data-step')) || 1,
				slide: function(event, ui) {
					$this.val(ui.value);
					spinner_update();
				}
			});
		});
		//CSS3 spinner
		$.fn.spin = function(opts) {
			this.each(function() {
				var $this = $(this),
					data = $this.data();
				if (data.spinner) {
					data.spinner.stop();
					delete data.spinner;
				}
				if (opts !== false) {
					data.spinner = new Spinner($.extend({
						color: $this.css('color')
					}, opts)).spin(this);
				}
			});
			return this;
		};

		function spinner_update() {
			var opts = {};
			$('#spinner-opts input[type=text]').each(function() {
				opts[this.name] = parseFloat(this.value);
			});
			opts['left'] = 'auto';
			$('#spinner-preview').spin(opts);
		}
		$('#id-pills-stacked').removeAttr('checked').on('click', function() {
			$('.nav-pills').toggleClass('nav-stacked');
		});
		///////////
		$(document).one('ajaxloadstart.page', function(e) {
			$.gritter.removeAll();
			$('.modal').modal('hide');
		});
	});
</script>
@endpush

<!-- part-dokumentasi -->