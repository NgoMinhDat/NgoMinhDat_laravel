@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin khách hàng
    </div>
    
    <div class="table-responsive">
        <?php
            $message = Session::get('message');
            if($message){
            echo '<span class="text-alert">',$message,'</span>';
            Session::put('message',null);
            }
        ?>                   
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($order_by_id as $v_content)
            
          <tr>
            
            <td>{{$v_content->customer_name}}</td>
            <td>{{$v_content->customer_phone}}</td>
            
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    
  </div>
</div>


<br>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin vận chuyển
    </div>
    
    <div class="table-responsive">
        <?php
            $message = Session::get('message');
            if($message){
            echo '<span class="text-alert">',$message,'</span>';
            Session::put('message',null);
            }
        ?>                   
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            
            <th>Tên người vận chuyển</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($order_by_id as $v_content)
            
          <tr>
            
            <td>{{$v_content->shipping_name}}</td>
            <td>{{$v_content->shipping_address}}</td>
            <td>{{$v_content->shipping_address}}</td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    
  </div>
</div>


<br><br>


<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê chi tiết đơn hàng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="table-responsive">
        <?php
            $message = Session::get('message');
            if($message){
            echo '<span class="text-alert">',$message,'</span>';
            Session::put('message',null);
            }
        ?>                   
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
            </th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($order_by_id as $v_content)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$v_content->product_name}}</td>
            <td>{{$v_content->product_sales_quantity}}</td>
            <td>{{$v_content->product_price}}</td>
            <td>{{$v_content->product_price*$v_content->product_sales_quantity}}</td>
            
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row"> 
        <div class="col-sm-7 text-right text-center-xs">                
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
