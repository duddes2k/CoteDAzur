@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Bookings</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="media width-250 float-right">
           
          </div>
        </div>
      </div>
      <div class="content-body">
        <section class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <p class="card-text">
                  
                  </p>
                  <!-- Item List table -->
                  <div class="table-responsive">
                    <table id="invoices-list" class="table table-striped table-bordered zero-configuration item-list">
                      <thead>
                        <tr>
                          <th>Date Booked</th>
                          <th>Rental</th>
                          <th>Name</th>
                          <th>Pick Date</th>
                          <th>Return Date</th>
                          <th>Duration</th>
                          <th>Total</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach( $bookings as $key => $booking)
                          <tr>
                            <td>{{ Carbon\Carbon::parse($booking->created_at)->format('M j, Y h:i:sA') }}</td>
                            <td>{{ $booking->service->name }}</td>
                            <td>{{ $booking->client->first_name .' '.$booking->client->last_name }}</td>
                            <td>{{ Carbon\Carbon::parse($booking->departure_date)->format('M j, Y') }}</td>
                            <td>{{ Carbon\Carbon::parse($booking->return_date)->format('M j, Y') }}</td>
                            <td>{{ $booking->duration }} day(s)</td>
                            <td><strong>&euro; {{ number_format($booking->total,2) }}</strong></td>
                            <td>{{ $booking->status }}</td>
                            <td>
                              <button class="btn btn-primary" id="btnDetails">Details</button>
                            </td>

                          </tr>
                        @endforeach

                      </tbody>
                      
                    </table>
                  </div>
                  <!--/ Invoices table -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

@endsection

@prepend('style')

   <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/tables/datatable/datatables.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('admin//css/pickers/pickadate/pickadate.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/css/pickers/daterange/daterangepicker.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/plugins/pickers/daterange/daterange.css') }}">

@endprepend

@push('page_vendor_level_scripts')
<script src="{{ asset('admin/vendors/js/tables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}"
  type="text/javascript"></script>
@endpush

@push('page_level_scripts')

  <script type="text/javascript" src="{{ asset('admin/js/scripts/ui/breadcrumbs-with-stats.js') }}"></script>  

  <script src="{{ asset('admin/vendors/js/pickers/pickadate/picker.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/vendors/js/pickers/pickadate/picker.date.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin//js/pickers/pickadate/picker.time.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin//js/pickers/pickadate/legacy.js') }}" type="text/javascript"></script>
  <script src="{{ asset('admin/vendors/js/pickers/dateTime/moment-with-locales.min.js') }}"
  type="text/javascript"></script>
  <script src="{{ asset('admin/vendors/js/pickers/daterange/daterangepicker.js') }}"
  type="text/javascript"></script>


@endpush

@push('page_level_scripts')

<script>

  $(document).ready(function(){

    $('table').css('table-layout','fixed');
    $('table').css('word-wrap','break-word');
   
    // Auto CAPS
    $("input:not([name='_token']), textarea").keyup(function(){
          $(this).val( $(this).val().toUpperCase() );
    });
    
    /********************************************
    *        js of Order by the grouping        *
    ********************************************/
    var groupColumn = 0;
    var groupingTable = $('.item-list').DataTable({
        responsive: true,
        rowReorder: true,
        order: [[ 0, "desc" ]],
        displayLength: 25,
        dom: '<"toolbar">frtip',
        columnDefs: [
            {
                targets: [4,5,6,7],
                className: "text-center",
            },
            {
              target: [0,1,2],
              width: 150
            }
        ]
    } );

    $("div.toolbar").html('<table><tr><td><strong>Date Range</strong></td><td><td><div class="input-group"><input type="text" class="form-control daterange" readonly><div class="input-group-append"><span class="input-group-text"><span class="la la-calendar"></span></span></div></div></td></tr></table>');
    
    $("div.toolbar").css('width','500');

    $('input[type="search"]').css('width','300');
    $('.dataTables_filter,.dataTables_length').addClass('info');

    // ** ====================================================== **//
    
    // Basic Date Range Picker
    $('.daterange').daterangepicker({
        startDate: moment().startOf('month'),
        endDate: moment().endOf('month'),
        autoApply: true,
        drops: "down",
        buttonClasses: "btn btn-sm",
        applyClass: "btn-info",
        cancelClass: "btn-danger",
        showDropdowns: true,
        ranges: {
            'Current Month Sales': [moment().startOf('month'), moment().endOf('month')],
            'Previous Month Sales': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
        },
        locale: {
            format: 'YYYY-MM-DD'
            }
    });
    
    // Set date range element width
    $('.daterange').css('width','190');

    // Custom search for date range
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var daterange = $('.daterange').val();
            var range = daterange.split(' - ');

            var startDate = Date.parse(range[0],10);
            var endDate = Date.parse(range[1],10);
            var columnDate = Date.parse(data[0]) || 0; 
            if ((isNaN(startDate) && isNaN(endDate)) ||
                (isNaN(startDate) && columnDate <= endDate) ||
                (startDate <= columnDate && isNaN(endDate)) ||
                (startDate <= columnDate && columnDate <= endDate)) {
                return true;
            }
            return false;
        }
    );
    
    // Update table on date range select
    $('.daterange').on('apply.daterangepicker', function(ev, picker) {
      groupingTable.draw();
    });
    // End Date Range 

    // Product Code Generator
    $('#category_id').on('change', function(e){
        e.preventDefault();
        
        var itemcode_loader = $('#spinner');

        itemcode_loader.show();

        var selCategory = $(this,'option:checked').val();

        $.ajax({
            url: "{{ route('admin.bookings') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            data: {
                category_id: selCategory
            },
            type: 'POST',
            dataType: 'json',
            success: function(response){

                if(response.status === 'true')
                {
                    $('#item_code').val(response.sequence).css('font-weight','bold');
                    $('.modal-body div.alert').hide();
                } else {
                    $('.modal-body div.alert').text(response.message).show();
                }
                itemcode_loader.hide();
            },
            error: function(e){
                $('.modal-body div.alert').text(e.message).show();
            }
        });
    });
    
    // Save: Saving Meter Reading
    $('#item-save').on('click', function(e){
        e.preventDefault();

        var item_code = $('input#item_code').val();

        // Validate required fields before submitting
        var err = 0;
        $('.required').each(function(i)
        {
            if($(this).val() == ''){
                $(this).addClass('border-danger');
                err++;
                $('.modal-body div.alert').text('There are required fields that needs to be fill-in.').show();
            } 
        })

        if(err == 0)
        {
          var button = $(this).children('i');

          button.removeClass('la la-save');
          button.addClass('la la-spinner spinner');
          
          // Submit data to server
          $.ajax({
              url: "{{ route('admin.bookings') }}", 
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              data:{ 
                category_id     : $('#category_id').val(),
                item_code       : $('#item_code').val(),
                barcode         : $('#barcode').val(),
                item_name       : $('#item_name').val(),
                item_desc       : $('#item_desc').val(),
                beg_bal         : $('#beg_bal').val(),
                end_bal         : $('#end_bal').val(),
                unit            : $('#unit').val(),
                cost_price      : $('#cost_price').val(),
                wholesale_price : $('#wholesale_price').val(),
                retail_price    : $('#retail_price').val()
              },
              type: 'POST',  
              success: function(response){

                  button.removeClass('la la-save spinner');
                  button.addClass('la la-save');

                  if(response.status === true)
                  {
                    $("#readingModal").modal('hide');//close our modal now
                    location.reload();
                  } else {
                    $('.modal-body div.alert').text(response.message).show();
                  }
                  
              },
              error: function(jqXHR, textStatus, errorThrown){
                  console.log(jqXHR.responseText);
                  button.removeClass('la la-spinner spinner');
                  button.addClass('la la-save');
                  $('.modal-body div.alert').text(jqXHR.responseText).show();
              }
          });

        }
    });

    // Modal: onShowing event
    $('#readingModal').on('show.bs.modal', function (event){
        var modal = $(this);
        modal.find('.modal-body div.alert').hide();
        modal.find('.modal-body #spinner').hide();
    });
    // Modal: onShown event
    $('#readingModal').on('shown.bs.modal', function (event) {  

        $(".modal:visible").each(alignModal);
        var button = $(event.relatedTarget); // Button that triggered the modal 
        var modal = $(this);
        var meterid = button.data('reading');

        // Clear form inputs
        modal.find(".modal-body input").val('');

    });
    // Modal: onHide event
    $('#readingModal').on('hidden.bs.modal', function (e) {
        $(this).removeData('bs.modal');
        $(this).find(".modal-body input")
               .val('')
               .end();
        $(this).find("select option:first-child").attr("selected", "selected");
        $(this).find(".modal-body div.alert").html('<span class="text-bold-600">Oh snap!</span> You entered an invalid meter number, please try again.');
        $(this).data('bs.modal', null);
    });
    

  });
</script>

@endpush