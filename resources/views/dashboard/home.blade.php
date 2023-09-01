@extends('layouts.app')

@section('title','Homepage')

@section('content')
<section class="section">
    <div class="section-header">
    <h1>Homepage</h1>
    </div>

    <div class="section-body">
    </div>
</section>
@endsection

@section('sidebar')
    @parent
    <li class="menu-header">Starter</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
        <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
        <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
    </ul>
    </li>
    <li class="active"><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
        <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
        <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
        <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
        <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
        <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
        <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
        <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
        <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
        <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
        <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
        <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
        <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
        <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
        <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
        <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
        <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
        <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
        <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
        <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
    </ul>
    </li>
@endsection