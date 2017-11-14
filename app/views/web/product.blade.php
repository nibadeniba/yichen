@extends('web.template')

@section('content')
<style type="text/css" media="screen">
    .main{width:1600px;margin:20px auto;}
    .facsx8 {
        margin-top: 10px;
        margin-bottom: 10px;
        line-height: 26px;
        color: #805522;
        font-weight: bold;
        font-size: 24px;
        margin-right: 100px;
        text-align: justify;
    }
    .object {
        width: 1400px;
        height: 250px;
    }
    .content {
        width:1400px;
        margin-top:20px;
        margin-bottom:20px;
    }
    .demo_functions {
        font-weight: bold;
    }
    .cross-link:visited {
        color: #dab866;
        text-decoration: underline;
        font-weight: bold;
    }

    css.css:37
    .cross-link:link {
        color: #dab866;
        text-decoration: underline;
        font-weight: bold;
    }
    css.css:23
    a:visited {
        color: #aeaeae;
        text-decoration: none;
    }
    .title11 {
        font-size: 18px;
        line-height: 24px;
        text-decoration: underline;
    }
</style>
    <div class="probg">
	    <div class="container animated bounceInUp">
	    	<h2>微享产品</h2>
	    	<p>微享 — 不只是朋友圈中的分享</p>
	    </div>
    </div>
    @foreach ($products as $product)
        <div class="main">
            <div class="facsx8">{{$product['title']}}</div>
            <div class="object"></div>
            <div class="content">{{$product['content']}}</div>
            <div id="caa"><p class="demo_functions"><a href="case" class="cross-link"><span class="title11">了解更多案例</span></a></p></div>
        </div>
    @endforeach
@stop
