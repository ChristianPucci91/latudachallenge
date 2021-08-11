@extends('layouts.app')


@section('content')
@include('navbar.navbar')
  <div class="sidebar-container">
    <div class="sidebar-logo">
      Admin Panel
    </div>
    <ul class="sidebar-navigation">
      <li class="header">Navigation</li>
      <li class="check-tab" data-target="documenti">
        <a href="#">
          <i class="fa fa-home" aria-hidden="true"></i> Documenti
        </a>
      </li>
      <li class="check-tab" data-target="utenti">
        <a href="#">
          <i class="fa fa-users" aria-hidden="true"></i> Utenti
        </a>
      </li>
      <li class="header">Another Menu</li>
      <li class="check-tab" data-target="friends">
        <a href="#">
          <i class="fa fa-users" aria-hidden="true"></i> Friends
        </a>
      </li>
      <li class="check-tab" data-target="settings">
        <a href="#">
          <i class="fa fa-cog" aria-hidden="true"></i> Settings
        </a>
      </li>
      <li class="check-tab" data-target="information">
        <a href="#">
          <i class="fa fa-info-circle" aria-hidden="true"></i> Information
        </a>
      </li>
    </ul>
  </div>

  <div class="content-container" style="padding-top:0;border-top:3px solid #2574A9;">

    <div class="container-fluid">

      <div class="check-table" id="table-documenti">
        @include('admin.includes.documenti.index')
      </div>
      <div class="check-table is-hidden" id="table-utenti">
        @include('admin.includes.utenti.index')
      </div>

    </div>
  </div>
@endsection

@push('scripts')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript">

    $( document ).ready(function() {

      $(function () {

          $('.check-table').first().removeClass('is-hidden');
          $('.check-tab').first().addClass('is-active');
          $('.check-tab').on('click', function () {
              $('.check-tab').removeClass('is-active');
              $('.check-table').addClass('is-hidden');
              $('#table-' + $(this).data('target')).removeClass('is-hidden');
              $(this).addClass('is-active');
          });

      });

    });

  </script>
@endpush
