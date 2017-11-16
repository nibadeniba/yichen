@extends('web.template')

@section('content')
<link rel="stylesheet" href="css/jPicture.min.css">
<script src="js/jPicture.min.js"></script>
<style type="text/css" media="screen">
    .main{width:50%;margin:20px auto;}
    .facsx8 {
        margin-top: 10px;
        margin-bottom: 10px;
        line-height: 26px;
        color: #805522;
        font-weight: bold;
        font-size: 24px;
        text-align: justify;
    }
    .object {
        width: 100%;
        height:400px;
        line-height: 400px;
        overflow: hidden;
    }
    .content {
        width:100%;
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
    <div class="row">
    @foreach ($products as $k => $product)
        <div class="span6 main">
            <div class="facsx8">{{$product['title']}}</div>
            <div class="object" id="object{{$k}}">
                <div>
                @foreach (explode(',', $product['url']) as $key=>$img)
                    <div><img src="{{$img}}" width="100%"></div>
                @endforeach
                </div>
            </div>
            <div class="content">{{$product['content']}}</div>
            <div id="caa">
                <p class="demo_functions">
                    <a href="case?product_id={{$product->id}}" class="cross-link">
                        <span class="title11">了解更多案例</span>
                    </a>
                </p>
            </div>
            
        </div>
    @endforeach
    </div>
@stop

@section('script')
<script>
    $(function(){
        jPicture(".object", {
            type: "slide",
            autoplay: 5000
        });
    });
</script>
@stop
