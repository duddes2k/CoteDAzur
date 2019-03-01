@extends('layouts.admin')

@section('style')
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('content')

<div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Availability Calendar</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Calendar</a>
                </li>
                <li class="breadcrumb-item active"><strong>Availability</strong>
                </li>
              </ol>
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
                  <p class="card-text"></p>
                  {!! $calendar->calendar() !!}
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

@endsection

@section('script')

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script> -->
  
@endsection


@push('page_level_scripts')

  <script type="text/javascript" src="{{ asset('admin/js/scripts/ui/breadcrumbs-with-stats.js') }}"></script>  
  <script src="{{ asset('admin/vendors/js/pickers/dateTime/moment-with-locales.min.js') }}"
  type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
  {!! $calendar->script() !!}
  
@endpush

@push('page_level_scripts')

<script></script>

@endpush