@extends('web/template')
        
        
@section('content')
    <div class="talentbg">
	    <div class="container animated bounceInUp">
	    	{{$title->content}}
	    </div>
    </div>
    <div class="container mt">
    	<div class="row">
    	     @foreach ($recruits as $item)
    	     <div class="col-lg-4 col-xs-12 talent" style="height:200px">
    	     	<h2>{{$item->position}}</h2>
    	     	<h3>职位要求：</h3>
    	     	<p>{{$item->requirement}}</p>
    	     </div>
    	     @endforeach
    	</div>
    </div>
@stop