@extends('layouts.master')
@section('content')
<main>
                <h2 dash-titel>All Orders</h2>
               
                                                                                                           
                <table class="table table-striped">
                    <thead>
                      <tr>
                            <th scope="col">Order #</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Cart</th>
                            <th scope="col">Payment Id</th>
                            <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($orders->count()>0)
                   
                   @foreach($orders as $order)
                           <td>{{$order->id}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->address}}</td>
                            <td>
                             @foreach($order->cart->items as $item)
                               {{$item['product_name'].','}}
                             @endforeach
                            </td>
                            <td>{{$order->payment_id}}</td>
                           
                            <td>
                              <a href="{{route('view.pdf',['id'=>$order->id])}}" class="btn btn-outline-primary">View</a>
                            </td>
                 @endforeach
                
                @else
                    <tr>
                    		<th colspan="5" class="text-center">No Categories Yet..</th>
                    </tr>
                 @endif   
                    </tbody>
                  </table>
              
        </main>                  
@endsection