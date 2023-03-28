<h1>orders details</h1>
<p>{{ $order->firstname }}</p>
<p>{{ $order->lastname }}</p>
<p>{{ $order->country }}</p>
<p>{{ $order->provience }}</p>
<p>{{ $order->city }}</p>
<p>{{$order->ward}}</p>
<p>{{$order->appartmentno}}</p>
<p>{{$order->address}}</p>
<p>{{$order->email}}</p>
<p>{{$order->phone}}</p>

<form action="{{ route('admin.ship') }}" method="POST">

    @csrf
    @method('put')
    <input type="hidden" value="{{ $order->id }}" name="id">
    <button type="submit" class="btn btn-danger">ship</button><form>
<hr>
<h3>Items</h3>
<hr>
@foreach ($item as $item)
@php
    $product = DB::table('products')->where('id',$item->product_id)->first();
@endphp
<p>{{ $product->productname}}</p>
<p>{{ $product->image }}</p>
<p>{{ $item->quantity }}</p>
<hr>

@endforeach