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
                          <th>Date Received</th>
                          <th>Rental</th>
                          <th>Name</th>
                          <th>Pick Date</th>
                          <th>Return Date</th>
                          <th>Duration</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach( $bookings as $key => $booking)
                          <tr>
                            <td>{{ Carbon\Carbon::parse($booking->created_at)->format('M j, Y h:i:sA') }}</td>
                            <td>{{ strtoupper($booking->service->type) }}</td>
                            <td>{{ $booking->client->first_name .' '.$booking->client->last_name }}</td>
                            <td>{{ Carbon\Carbon::parse($booking->departure_date)->format('M j, Y') }}</td>
                            <td>{{ Carbon\Carbon::parse($booking->return_date)->format('M j, Y') }}</td>
                            <td>{{ $booking->duration }} DAY(s)</td>
                            <td>{{ strtoupper($booking->status) }}</td>
                            <td>
                              <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailsModal" data-id="{{ $booking->id }}">Details</button>
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

  <!-- Rental Details Modal -->
  <div class="modal fade text-left" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success">
          <h3 class="modal-title" id="myModalLabel35"> Booking Details</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                      <label for="consumer_name">Rental/Charter</label>
                      <div class="form-group">
                          <input type="text" class="form-control text-bold-600" id="rental" placeholder="Rental" readonly>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <label for="email">Pick Date</label>
                      <div class="form-group">
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <div class="input-group-text">
                                      <span class="la la-calendar"></span>
                                  </div>
                              </div>
                                <input type="text" class="form-control" placeholder="Select a date" id="pick_date" aria-haspopup="true" aria-expanded="true" aria-readonly="false" readonly>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <label for="email">Return Date</label>
                      <div class="form-group">
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <div class="input-group-text">
                                      <span class="la la-calendar"></span>
                                  </div>
                              </div>
                                <input type="text" class="form-control pickadate picker__input picker__input--active" placeholder="Select a date" id="return_date" aria-haspopup="true" aria-expanded="true" aria-readonly="false" readonly>
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-6">
                        <label for="accountno">First Name</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="firstname" placeholder="First Name" readonly>
                            <input type="hidden" id="consumer_id">
                            <input type="hidden" id="meter_id">
                            <input type="hidden" id="soa_id">
                            <input type="hidden" id="service_type_id">
                        </div>
                  </div>
                  <div class="col-md-6">
                      <label for="consumer_name">Last Name</label>
                      <div class="form-group">
                          <input type="text" class="form-control" id="lastname" placeholder="Last Name" readonly>
                      </div>
                  </div>
                  
                  <div class="col-md-6">
                      <label for="consumer_name">Email Address</label>
                      <div class="form-group">
                          <input type="text" class="form-control" id="email" placeholder="Email Address" readonly>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <label for="consumer_name">Contact Number</label>
                      <div class="form-group">
                          <input type="text" class="form-control" id="phone" placeholder="Contact Number" readonly>
                      </div>
                  </div>
                  
                  <div class="col-md-6">
                      <label for="consumer_name">Duration</label>
                      <div class="form-group">
                          <input type="text" class="form-control text-bold-600" id="duration" placeholder="0" readonly>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <label for="title1">Total</label>
                      <div class="form-group">
                          <input type="number" class="form-control text-bold-600" id="total" placeholder="0.00" readonly>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <label for="title1">Additional Information</label>
                      <div class="form-group">
                          <textarea class="form-control" id="info" readonly></textarea>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="alert alert-danger" role="alert">
                        <span class="text-bold-600">Oh snap!</span>
                        You entered an invalid meter number, please try again.
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-outline-danger btn-sm" data-dismiss="modal"><i class="la la-close"></i> Close</button>
            <button type="button" class="btn btn-danger btn-sm" id="cancelled" disabled><i class="la la-ban"></i> Cancelled</button>
            <button type="button" class="btn btn-secondary btn-sm" id="confirmed" disabled><i class="la la-check-circle"></i> Confirmed</button>
          </div>
        </form>
      </div>
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
                targets: [3,4,5,6,7],
                className: "text-center",
            },
            {
              targets: [5,6,7],
              width: 55
            },
            {
              targets: [0,2],
              width: 170
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
            'Current Month': [moment().startOf('month'), moment().endOf('month')],
            'Previous Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
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
            var columnDate = Date.parse(data[3]) || 4; 
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
    $('#detailsModal').on('show.bs.modal', function (event){
        var modal = $(this);
        modal.find('.modal-body div.alert').hide();
        modal.find('.modal-body #spinner').hide();
    });
    // Modal: onShown event
    $('#detailsModal').on('shown.bs.modal', function (event) {  

        $(".modal:visible").each(alignModal);
        var button = $(event.relatedTarget); // Button that triggered the modal 
        var modal = $(this);
        var booking_id = button.data('id');

        console.log(booking_id);  

        // Clear form inputs
        modal.find(".modal-body input").val('');

        // Request data from the server
        $.ajax({
            url: "{{ route('admin.bookings.get') }}", 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{ 
              booking_id : booking_id,
            },
            type: 'POST',  
            success: function(response){
                if(response.status == '200')
                {
                  $('#rental').val(response.data.service.name);
                  $('#pick_date').val(response.data.departure_date);
                  $('#return_date').val(response.data.return_date);
                  $('#firstname').val(response.data.client.first_name);
                  $('#lastname').val(response.data.client.last_name);
                  $('#email').val(response.data.client.email);
                  $('#phone').val(response.data.client.phone);
                  $('#duration').val(response.data.duration);
                  $('#total').val(response.data.total);
                  $('#info').text(response.data.client.other_info);
                } else {
                  $('.modal-body div.alert').text(response.message).show();
                }
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(jqXHR.responseText);
                $('.modal-body div.alert').text(jqXHR.responseText).show();
            }
        });

    });
    // Modal: onHide event
    $('#detailsModal').on('hidden.bs.modal', function (e) {
        $(this).removeData('bs.modal');
        $(this).find(".modal-body input")
               .val('')
               .end();
        $(this).find(".modal-body textarea")
               .text('');
        $(this).find("select option:first-child").attr("selected", "selected");
        $(this).find(".modal-body div.alert").html('<span class="text-bold-600">Oh snap!</span> There\'s an unknown error, please try again.');
        $(this).data('bs.modal', null);
    });
    
  });
</script>

@endpush