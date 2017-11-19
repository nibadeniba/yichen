@extends('web/template')
		
        
@section('content')
<style>
.title14{font-size:20px;color:#ffffff}
</style>
    <div class="indexobg">
	    <div class="container animated bounceInUp">
	    <h2>服务体系</h2>
	    <p>品牌更重要的是一种服务精神，好企业一定要有好的服务。亿臣多年来一直秉承“精心、细心、尽心、贴心、耐心”的“五心”级服务标准，始终以客户满意于我们的产品和服务作为我们的最大满足，更以“想客户之所想，急客户之所急”作为我们服务客户的理念，力求将“服务”贯穿于品牌价值的需求之中。</p>
	    </div>
    </div>
	<div class="main">
		<div class="container">
	           <h2>服务团队  </h2>
                <table width="700px" cellspacing="0" cellpadding="0" border="0" style="margin:0px auto">
                    @foreach ($teams as $item)
                    <tr>
                        <td align="center" width="220px" bgcolor="#444444">
                            <img width="200px" src="{{$item->url}}">
                        </td>
                        <td width="1"></td>
                        <td style="color:#C9CACA;line-height:20px;" bgcolor="#444444">
                            <div class="teamlight"><span class="title14">{{$item->title}}</span><br><br><span>{{$item->content}}</span></div>
                        </td>
                    </tr>
    			    @endforeach
                </table>
		</div>
		
	</div>
	<div>
	   <div class="container">
           <h2>服务流程  </h2>
    	   <div class="container" style="background: #1A2A41;width:700px;margin:0 auto;">
    	       <div>
    				<img src="/web/images/s.png" style="align:center"/>
    			</div>
    		</div>
		</div>
	</div>
	
    <div class="main5 mt">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 col-xs-12 text">
    				<p>浙江亿臣家具有限公司 </p>
					<p>地址：湖州市德清县雷甸镇白云南路397号</p>
					<p>电话：0572-8378017</p>
    			</div>
    			<div class="col-lg-6 col-xs-12 photo">
    				<p class="att">关注我们</p>
    				<img src="/web/images/wx.png" />
    			</div>
    		</div>
    	</div>
    </div>
@stop