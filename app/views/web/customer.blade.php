@extends('web/customer') 

@section('content')
<div class="customerbg">
	<div class="container animated bounceInUp">
		<h2>合作客户</h2>
		<p>这些年我们一起走过，感谢有您，亿臣的伙伴们！</p>
	</div>
</div>

<div class="cstate_customer">
	<div class="customer_type">
		<span>地产企业（排名不分先后）</span>
	</div>
	<div class="customer_list">
		<ul>
			@foreach (customera as $item)
			<li>{{$item->customer_name}}</li> @endforeach
		</ul>
	</div>
</div>

@stop
