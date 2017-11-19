@extends('web/template') 

@section('content')
<<style>
<!--
.cstate_customer{width:600px;margin:0 auto;padding-bottom:30px}
.customer_type span{font-size:20px;font-weight:bold}
.customer_list ul{position:relative}
.customer_list li{width:30%;}

.customer_item{position: relative;padding-left: 15px;float:left;width:33.33333%}
-->
</style>
<div class="talentbg">
    <div class="container animated bounceInUp">
    	<h2>合作客户</h2>
    	<p>这些年我们一起走过，感谢有您，亿臣的伙伴们！</p>
    </div>
</div>

<div class="container">
    <div class="customer_type">
		<span>地产企业（排名不分先后）</span>
	</div>
	<div class="row">
	     @foreach ($customera as $item)
	     <div class="customer_item">
	     	<span>{{$item->customer_name}}</span>
	     </div>
	     @endforeach
	     <div class="customer_item">
	     	<span>...</span>
	     </div>
	</div>
</div>

<div class="container">
    <div class="customer_type">
		<span>酒店管理公司（排名不分先后）</span>
	</div>
	<div class="row">
	     @foreach ($customerb as $item)
	     <div class="customer_item">
	     	<span>{{$item->customer_name}}</span>
	     </div>
	     @endforeach
	     <div class="customer_item">
	     	<span>...</span>
	     </div>
	</div>
</div>


<div class="container">
    <div class="customer_type">
		<span>设计公司（排名不分先后）</span>
	</div>
	<div class="row">
	     @foreach ($customerc as $item)
	     <div class="customer_item">
	     	<span>{{$item->customer_name}}</span>
	     </div>
	     @endforeach
	     <div class="customer_item">
	     	<span>...</span>
	     </div>
	</div>
</div>
    
@stop
