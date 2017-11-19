@extends('web/template')
		
        
@section('content')
<style>
.title14{font-size:20px;color:#ffffff}
</style>
    <div class="indexobg">
	    <div class="container animated bounceInUp">
	    <h2>服务体系</h2>
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
    				<img src="{{$pool->url}}" style="align:center"/>
    			</div>
    		</div>
		</div>
	</div>
@stop