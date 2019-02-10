@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        
        <div class='col-md-4'>
            <div class="small-box bg-orange">
                <div class="inner">
                <h3>{{$totalProducts}}</h3>
                <b>No Products</b>
                </div>
            </div>
        </div>
        <div class='col-md-4'>
            <div class="small-box bg-orange">
                <div class="inner">
                <h3>{{$totalViews}}</h3>
                <b>Total Views</b>
                </div>
                
            </div>
        </div>
        <div class='col-md-4'>
            <div class="small-box bg-orange">
                <div class="inner">
                <h3>{{$totalScans}}</h3>
                <b>Total Scans</b>
                </div>
                
            </div>
        </div>
        
    </div>
    
    <div class='row'>
        <div class='col-md-6'>
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Most Viewed Products</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>No. Views</th>
                    <th>No. Scans</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($mostViwed as $k => $product)
                    

                    <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['view_count']}}</td>
                        <td>{{$product['scan_count']}}</td>
                    </tr>
                  @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-footer -->
          </div>
        </div>

        <div class='col-md-6'>
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Most Scanned Products</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>No. Views</th>
                    <th>No. Scans</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($mostScanned as $k => $product)
                    

                    <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['view_count']}}</td>
                        <td>{{$product['scan_count']}}</td>
                    </tr>
                  @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-footer -->
          </div>
        </div>
    </div>

@endsection
