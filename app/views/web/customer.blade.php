@extends('web/template') 

@section('content')
<<style>
<!--
.cstate_customer{width:600px;margin:0 auto;padding-bottom:30px}
.customer_type span{font-size:20px;font-weight:bold}
.customer_list ul{position:relative}
.customer_list li{width:30%;}
-->
</style>
<div class="talentbg">
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
			@foreach ($customerb as $item)
			<li>{{$item->customer_name}}</li>
			@endforeach
			<li>...</li>
		</ul>
	</div>
</div>

<div class="cstate_customer">
	<div class="customer_type">
		<span>酒店管理公司（排名不分先后）</span>
	</div>
	<div class="customer_list">
		<ul>
			@foreach ($customerc as $item)
			<li>{{$item->customer_name}}</li>
			@endforeach
			<li>...</li>
		</ul>
	</div>
</div>

<div class="cstate_customer">
	<div class="customer_type">
		<span>设计公司</span>
	</div>
	<div class="customer_list">
		<ul>
			@foreach ($customera as $item)
			<li>{{$item->customer_name}}</li>
			@endforeach
			<li>...</li>
		</ul>
	</div>
</div>

@stop
