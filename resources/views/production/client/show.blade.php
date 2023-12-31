@if (Auth::user()->hasRole('owner') )

<!-- import-template -->
@extends('layouts.ace')

<!-- main -->
@push('header')
<!-- none -->
@endpush

@section('page-header')
<!-- page-header -->
<div class="page-header">
  <h1>
    Client
    <small data-step="1" data-intro="Langkah 1: Halaman index form Produk Barang">
      <i class="ace-icon fa fa-angle-double-right"></i>
      <!-- top menu &amp; navigation -->
      show page
    </small>
  </h1>
</div><!-- /.page-header -->
@endsection

@section('main')
<!-- PAGE CONTENT BEGINS -->
<div class="row">
  <div class="col-xs-12">
    <h3 class="row header smaller lighter purple">
      <span class="col-sm-6"> DETAIL </span><!-- /.col -->

      <span class="col-sm-6">
        <label class="pull-right inline">
          <a onclick="hapusAlert(event)" href="#" class="btn btn-danger btn-minier">
            Delete Data
          </a>

          <form id="delete" action="{{ route('owner.client.destroy', [$data->id]) }}" method="POST"
            style="display: none;">
            @method('DELETE')
            @csrf
          </form>

          <a href="{{ route('owner.client.edit', [$data->id]) }}" class="btn btn-warning btn-minier">
            Edit Data
          </a>
          <a href="{{ route('owner.client.index') }}" class="btn btn-info btn-minier">
            Kembali
          </a>
        </label>
      </span><!-- /.col -->
    </h3><!-- /.row -->

    <div class="space-4"></div>
    <div class="space-4"></div>
    <div class="space-4"></div>

    <div class="col-xs-12">
      <div class="center">
        <span class="profile-picture">
          @if($data->profile_picture !== null)
          <img id="avatar" class="editable img-responsive" alt="Foto Talent"
            src="{{ asset('foto_user/' . $data->id . '_' . $data->nick_name . '/profile/' . $data->profile_picture) }}" />
          @else
          <img id="avatar" class="editable img-responsive" alt="Foto Talent" src="{{ asset('no-image.jpg') }}" />
          @endif
        </span>
      </div>

      <div class="space-4"></div>
      <div class="space-4"></div>
      <div class="space-4"></div>
      <div class="space-4"></div>
      <div class="space-4"></div>

      <table class="table table-bordered table-striped">
        <!-- <thead class="thin-border-bottom">
          <tr>
            <th>
              <i class="ace-icon fa fa-caret-right blue"></i>name
            </th>

            <th>
              <i class="ace-icon fa fa-caret-right blue"></i>price
            </th>

            <th class="hidden-480">
              <i class="ace-icon fa fa-caret-right blue"></i>status
            </th>
          </tr>
        </thead> -->

        <tbody>
          <tr>
            <td>id</td>
            <td>{{ $data->id }}</td>
          </tr>
          <tr>
            <td>nama</td>
            <td>{{ $data->user->name }}</td>
          </tr>
          <tr>
            <td>email</td>
            <td>{{ $data->user->email }}</td>
          </tr>
          <tr>
            <td>role</td>
            <td>{{ $data->user->role }}</td>
          </tr>
          <tr>
            <td>password</td>
            <td>{{ $backupPass }}</td>
          </tr>
          <tr>
            <td>gender</td>
            <td>{{ $data->gender }}</td>
          </tr>
          <tr>
            <td>nama</td>
            <td>{{ $data->fullname }}</td>
          </tr>
          <tr>
            <td>tanggal lahir</td>
            <td>{{ $data->birthday }}</td>
          </tr>
          <tr>
            <td>umur</td>
            <td>{{ $age }}</td>
          </tr>
          <tr>
            <td>phone</td>
            <td>{{ $data->phone }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
  function hapusAlert(event) {
    event.preventDefault();
    Swal.fire({
      title: 'Apa Anda Yakin?',
      text: "Mengahapus Data Ini Dari Database.",
      type: 'warning',
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Iya, Hapus Data!',
      dangerMode: true,
    }).then((result) => {
      if (result.value) {
        document.getElementById('delete').submit();
      }
    })
  }
</script>
<!-- PAGE CONTENT ENDS -->

@endsection

@push('script')
<!-- page specific plugin scripts -->
<script src="{{ asset('ace/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('ace/js/jquery.dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('ace/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('ace/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('ace/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('ace/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('ace/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('ace/js/dataTables.select.min.js') }}"></script>
@endpush

@push('inline_scripts')
<!-- inline scripts related to this page -->
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
    $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0)
      .on('click', function() {
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
        if (th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked',
          true);
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
@endif

@section('main-old')
id : {{ $data->id }} <br>
nama : {{ $data->user->name }} <br>
email : {{ $data->user->email }} <br>
role : {{ $data->user->role }} <br>
password : {{ $backupPass }} <br>
biodata diri: <br>
gender: {{ $data->gender }} <br>
nama lengkap: {{ $data->fullname }} <br>
tanggal lahir: {{ $data->birthday }} <br>
umur: {{ $age }} <br>
phone: {{ $data->phone }} <br>
@endsection