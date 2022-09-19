<!DOCTYPE html>
<html lang="en">

@include('admin.includes.css')

<body>
<div class="main-wrapper">
    @include('admin.includes.header-top')

    @include('admin.includes.sidebar')

    @yield('body')

</div>

@include('admin.includes.script')
