<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      {{ __('') }}
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('E-Arsip-LSP') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      <li class="@if ($activePage == 'arsip') active @endif">
        <a href="{{ route('page.index','arsip') }}">
          <i class="now-ui-icons education_agenda-bookmark"></i>
          <p>{{ __('Arsip') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'about') active @endif">
        <a href="{{ route('page.index','about') }}">
          <i class="now-ui-icons travel_info"></i>
          <p>{{ __('About') }}</p>
        </a>
      </li>
       <li>
       </li>
    </ul>
  </div>
</div>
