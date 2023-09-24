<!-- import-template -->
@extends('layouts.ace')
@section('title','Payment Talent Index')

<!-- header -->
@push('header')
<!-- none -->
@endpush

<!-- breadcrumbs -->
@section('breadcrumbs')
<!-- step -->
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="/">Dashboard</a>
		</li>

        <li class="active">Payment Talent</li>

		<!-- <li>
            <a href="#">Other Pages</a>
        </li>
        <li class="active">Blank Page</li> -->
	</ul><!-- /.breadcrumb -->

	<div class="nav-search" id="nav-search">
		<form class="form-search">
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="ace-icon fa fa-search nav-search-icon"></i>
			</span>
		</form>
	</div><!-- /.nav-search -->
</div>
@endsection

<!-- page-header -->
@section('page-header')
<!-- none -->
@endsection

<!-- main -->
@section('main')
<!-- none -->
<div class="row">
	<div class="col-xs-12">
	<table id="simple-table" class="table  table-bordered table-hover">
    <thead>
        <!-- <tr>
            <th class="detail-col">Detail</th>
            <th>Jenis</th>
            <th>Ukuran</th>
            <th>Harga/Lonjor</th>
            <th class="hidden-480">Berat (Kg)</th>
            <th class="hidden-480">Status</th>
            <th>Edit</th>
            <th class="hidden-xs hidden-sm">Hapus</th>
        </tr> -->

        <tr>
            <th class="center">
                <label class="pos-rel">
                    <input type="checkbox" class="ace" />
                    <span class="lbl"></span>
                </label>
            </th>
            <!-- <th class="detail-col">Detail</th> -->
            <th>ID</th>
            <th>Service</th>
            <th>Talent</th>
            <th>Start Service</th>
            <th>End Service</th>
            <th>Client</th>
            <th>Price</th>
            <th>Talent Fee</th>
            <th>Admin Fee</th>
            <th>Bukti TF</th>
            <th>Status</th>
            <th>Aksi</th>
            <!-- <th>Harga Jual</th>
					<th>
						<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
						Update
					</th>
					<th class="hidden-480">Status</th>
					<th class="hidden-480">Edit</th>
					<th class="hidden-480">Hapus</th> -->
        </tr>
    </thead>

    <tbody>
        <!-- untuk tabel umum -->
        @foreach($paymentTalent as $data)
        <tr>
            <td class="center">
                <div class="action-buttons">
                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                        <i class="ace-icon fa fa-angle-double-down"></i>
                        <span class="sr-only">Details</span>
                    </a>
                </div>
            </td>

            <td>{{ $data->id }}</td>
            <td>{{ $data->talent_name }}</td>
            <td>{{ $data->service }}</td>
            <td>{{ $data->start_service }}</td>
            <td>{{ $data->end_service }}</td>
            <td>{{ $data->client_name }}</td>
            <td>Rp {{ number_format($data->price_service,2,',','.')  }}</td>
            <td>Rp {{ number_format($data->talent_fee,2,',','.')  }}</td>
            <td>Rp {{ number_format($data->admin_fee,2,',','.')  }}</td>
            <td>{{ $data->proof_of_transfer }}</td>
            <td>{{ $data->status }}</td>

            <td>
                <div class="hidden-sm hidden-xs btn-group">
                    <button class="btn btn-xs btn-warning">
                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                    </button>
                </div>

                <div class="hidden-md hidden-lg">
                    <div class="inline pos-rel">
                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                            <li>
                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                    <span class="green">
                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                    <span class="red">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>

            <!-- hapus dan mobile button -->
            <td class="hidden-sm hidden-xs">
                <div class="hidden-sm hidden-xs btn-group">
                    <button class="btn btn-xs btn-danger">
                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                    </button>
                </div>

                <div class="hidden-md hidden-lg">
                    <div class="inline pos-rel">
                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                            <li>
                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                    <span class="blue">
                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                    <span class="green">
                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                    <span class="red">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </td>
        </tr>

        <!-- untuk detail tabel umum -->
        <tr class="detail-row">
            <td colspan="9">
                <div class="table-detail">
                    <div class="row">
                        <div class="col-xs-12 col-sm-2">
                            <div class="text-center">
                                <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                                <br />
                                <div class="width-80 label label-info label-xlg">
                                    <div class="inline position-relative">
                                        <a class="user-title-label" href="#">
                                            <i class="ace-icon fa fa-circle light-green"></i>
                                            &nbsp;
                                            <span class="white">Kode : {{ $data->from }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-5">
                            <div class="space visible-xs"></div>

                            <div class="profile-user-info profile-user-info-striped">
                                <div class="profile-info-row">
                                    <div class="profile-info-name"> ID </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->from }}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Jenis </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->jenis }}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Ukuran </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->ukuran }}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Berat </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->berat_kg }} Kg</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Merk </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->merk_besi }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-5">
                            <div class="space visible-xs"></div>

                            <div class="profile-user-info profile-user-info-striped">
                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Harga PerKg </div>

                                    <div class="profile-info-value">
                                        <span>Rp {{ number_format($data->harga_kg,2,',','.')  }} / Kg</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Harga Lonjor </div>

                                    <div class="profile-info-value">
                                        <span>Rp {{ number_format($data->harga_lonjor,2,',','.')  }} / Lonjor </span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Created at </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->created_at  }}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Updated at </div>

                                    <div class="profile-info-value">
                                        <span>{{ $data->updated_at  }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- <div class="col-xs-12 col-sm-3">
                            <div class="space visible-xs"></div>
                            <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                            <div class="space-6"></div>

                            <form>
                                <fieldset>
                                    <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                </fieldset>

                                <div class="hr hr-dotted"></div>

                                <div class="clearfix">
                                    <label class="pull-left">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"> Email me a copy</span>
                                    </label>

                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                        Submit
                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                    </button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
	</div><!-- /.span -->
</div><!-- /.row -->

<div class="row">
    <div class="col-xs-12">
        <!-- div.dataTables_borderWrap -->
        <div style="display: none;">
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                
            </table>
        </div>
    </div>
</div>
@endsection

<!-- script -->
@push('script')
<!-- none -->
<!-- page specific plugin scripts -->
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>
@endpush


<!-- inline_scripts -->
@push('inline_scripts')
<!-- none -->
<script type="text/javascript">
	jQuery(function($) {
		//initiate dataTables plugin
		var myTable =
			$('#dynamic-table')
			//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
			.DataTable({
				bAutoWidth: false,
				"aoColumns": [{
						"bSortable": false
					},
					null, null, null, null, null,
					{
						"bSortable": false
					}
				],
				"aaSorting": [],


				//"bProcessing": true,
				//"bServerSide": true,
				//"sAjaxSource": "http://127.0.0.1/table.php"	,

				//,
				//"sScrollY": "200px",
				//"bPaginate": false,

				//"sScrollX": "100%",
				//"sScrollXInner": "120%",
				//"bScrollCollapse": true,
				//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
				//you may want to wrap the table inside a "div.dataTables_borderWrap" element

				//"iDisplayLength": 50


				select: {
					style: 'multi'
				}
			});



		$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

		new $.fn.dataTable.Buttons(myTable, {
			buttons: [{
					"extend": "colvis",
					"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
					"className": "btn btn-white btn-primary btn-bold",
					columns: ':not(:first):not(:last)'
				},
				{
					"extend": "copy",
					"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "csv",
					"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "excel",
					"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "pdf",
					"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
					"className": "btn btn-white btn-primary btn-bold"
				},
				{
					"extend": "print",
					"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
					"className": "btn btn-white btn-primary btn-bold",
					autoPrint: false,
					message: 'This print was produced using the Print button for DataTables'
				}
			]
		});
		myTable.buttons().container().appendTo($('.tableTools-container'));

		//style the message box
		var defaultCopyAction = myTable.button(1).action();
		myTable.button(1).action(function(e, dt, button, config) {
			defaultCopyAction(e, dt, button, config);
			$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
		});


		var defaultColvisAction = myTable.button(0).action();
		myTable.button(0).action(function(e, dt, button, config) {

			defaultColvisAction(e, dt, button, config);


			if ($('.dt-button-collection > .dropdown-menu').length == 0) {
				$('.dt-button-collection')
					.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
					.find('a').attr('href', '#').wrap("<li />")
			}
			$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
		});

		////

		setTimeout(function() {
			$($('.tableTools-container')).find('a.dt-button').each(function() {
				var div = $(this).find(' > div').first();
				if (div.length == 1) div.tooltip({
					container: 'body',
					title: div.parent().text()
				});
				else $(this).tooltip({
					container: 'body',
					title: $(this).text()
				});
			});
		}, 500);





		myTable.on('select', function(e, dt, type, index) {
			if (type === 'row') {
				$(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
			}
		});
		myTable.on('deselect', function(e, dt, type, index) {
			if (type === 'row') {
				$(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
			}
		});




		/////////////////////////////////
		//table checkboxes
		$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

		//select/deselect all rows according to table header checkbox
		$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {
			var th_checked = this.checked; //checkbox inside "TH" table header

			$('#dynamic-table').find('tbody > tr').each(function() {
				var row = this;
				if (th_checked) myTable.row(row).select();
				else myTable.row(row).deselect();
			});
		});

		//select/deselect a row when the checkbox is checked/unchecked
		$('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
			var row = $(this).closest('tr').get(0);
			if (this.checked) myTable.row(row).deselect();
			else myTable.row(row).select();
		});



		$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
		});



		//And for the first simple table, which doesn't have TableTools or dataTables
		//select/deselect all rows according to table header checkbox
		var active_class = 'active';
		$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
			var th_checked = this.checked; //checkbox inside "TH" table header

			$(this).closest('table').find('tbody > tr').each(function() {
				var row = this;
				if (th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
				else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
			});
		});

		//select/deselect a row when the checkbox is checked/unchecked
		$('#simple-table').on('click', 'td input[type=checkbox]', function() {
			var $row = $(this).closest('tr');
			if ($row.is('.detail-row ')) return;
			if (this.checked) $row.addClass(active_class);
			else $row.removeClass(active_class);
		});



		/********************************/
		//add tooltip for small view action buttons in dropdown menu
		$('[data-rel="tooltip"]').tooltip({
			placement: tooltip_placement
		});

		//tooltip placement on right or left
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();

			var off2 = $source.offset();
			//var w2 = $source.width();

			if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
			return 'left';
		}




		/***************/
		$('.show-details-btn').on('click', function(e) {
			e.preventDefault();
			$(this).closest('tr').next().toggleClass('open');
			$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
		});
		/***************/





		/**
		//add horizontal scrollbars to a simple table
		$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
		  {
			horizontal: true,
			styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
			size: 2000,
			mouseWheelLock: true
		  }
		).css('padding-top', '12px');
		*/


	})
</script>
@endpush