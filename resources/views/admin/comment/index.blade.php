@extends('templates.admin.master')
@section('title')
	Comment
@endsection
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="row m-t-30">
                    <div class="col-md-12" style="width: 1020px;">
                        <!-- DATA TABLE-->
                        <h3 class="title-5 m-b-35">data comment</h3>
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                    	<th>
                                            <label class="au-checkbox" style="margin-bottom: 25px">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </th>
                                        <th>customer_name</th>
                                        <th>product_name</th>
                                        <th>date_create</th>
                                        <th>content</th>
                                        <th>status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td class="process">xuannam</td>
                                        <td class="process">trà đào</td>
                                        <td>10/10/2018</td>
                                        <td>Ngon mà cũng k ngon lắm. cũng được nói chung tàm tạm</td>
                                        <td>
                                        	<label class="switch switch-3d switch-success mr-3">
	                                            <input type="checkbox" class="switch-input" checked="true">
	                                            <span class="switch-label"></span>
	                                            <span class="switch-handle"></span>
	                                        </label>
                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                
                                                <a href="#" title="" class="item">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
            
@endsection