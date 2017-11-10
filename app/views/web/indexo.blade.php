@extends('web/template')
		
        
@section('content')
    <div id="banner" class="m-banner hidden-xs" >
		<div class="bg">
		   <div class="itm bannerIn" style="background:url(/web/images/banner-bg.jpg) top center no-repeat"></div>
		</div>
		<ul>
			<li class="scene-1">
				<div class="text">
					<h2 class="slogan">微享，不只是朋友圈中的分享</h2>
					<a class="u-btn u-btn-solid" href="" target="_blank" hideFocus="true">立即了解</a>
				</div>
				<div class="image fadeInUp animated">
					<div class="device-desktop"></div>
					<div class="device-mobile"></div>
				</div>
				<div class="shadow"></div>
			</li>
			<li class="scene-2">
				<div class="image"></div>
				<div class="text">
					<h2>在小的品牌也有自己的微享</h2>
					<p>想要更简单的方式制作网站？我们已经准备好一切</p>
					<p>提供多种行业解决方案，让你拥有更多选择</p>
				</div>
			</li>
		</ul>
	</div>
	<div id="carousel-example-generic" class="carousel slide hidden-lg" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="/web/images/banner.png" alt="微享">
		    </div>
		    <div class="item">
		      <img src="/web/images/banner1.png" alt="微享">
		    </div>
		  </div>
    </div>
	<div class="main">
		<h2 class="w-title">关于微享</h2>
		<p class="w-text">想要更简单的方式制作网站？我们已经准备好一切</p>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 clo-xs-12">
					<div class="he_3DFlipY">
		                <div class="he_3DFlipY_inner">
		                    <div class="he_3DFlipY_img">
		                        <img src="/web/images/i_04.jpg" alt="img01">
		                    </div>
		                    <div class="he_3DFlipY_caption">
		                        <h3>经验</h3>
		                        <p>拥有超过2年行业经验的资深团队及设计开发经验，服务上百家品牌企业。</p>
		                    </div>
		                 </div>
		            </div>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="he_3DFlipY">
		                <div class="he_3DFlipY_inner">
		                    <div class="he_3DFlipY_img">
		                        <img src="/web/images/i_06.jpg" alt="img01">
		                    </div>
		                    <div class="he_3DFlipY_caption">
		                        <h3>专业</h3>
		                        <p>我们整合商业思考，不断追求完美和卓越，渴望成为潮流的引领者。</p>
		                    </div>
		                 </div>
		            </div>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="he_3DFlipY">
		                <div class="he_3DFlipY_inner">
		                    <div class="he_3DFlipY_img">
		                        <img src="/web/images/i_04.jpg" alt="img01">
		                    </div>
		                    <div class="he_3DFlipY_caption">
		                        <h3>创新</h3>
		                        <p>我们摒弃墨守成规、腐朽不堪的设计理念和页面风格设计，希望能创造更多独特精彩的作品。</p>
		                    </div>
		                 </div>
		            </div>
				</div>
			</div>
		</div>
		<div class="container mt">
			<div class="row company">
	    		<div class="col-lg-7 col-xs-12 text">
	    			<p>微享基于微信为用户提供开发、运营、培训、推广一体化解决方案，帮助用户搭建新一代微商分销体系，实现线上线下互通和客户沉淀。微享以直销模式+代理+熟人经济的模式帮助微商快速建立分销渠道，让粉丝主动传播和宣传产品。</p>
	    		</div>
	    		<div class="col-lg-5 clo-xs-12"><img src="images/yw.jpg"/></div>
	    	</div>
    	</div>
	</div>
	<div class="main1 mt">
		<h2 class="w-title">微享优势</h2>
		<p class="w-text">在小的品牌也有自己的微享</p>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-xs-12 fabzhuan">
					<img src="/web/images/icon.png" />
					<h2 class="tit"><span>无需代码，</span>可视化拖拽操作</h2>
					<p>操作简单，会用鼠标即可建站</p>
					<p>彻底打破技术门槛</p>
					<p>成倍节省网站维护成本</p>
				</div>
				<div class="col-lg-4 col-xs-12 fabzhuan">
					<img src="/web/images/icon1.png" />
					<h2 class="tit"><span>纯云结构，</span>快速安全稳定</h2>
					<p>全面应用阿里云计算技术新架构</p>
					<p>RDS+OCS+Oss存储网站数据，万无一失</p>
					<p>Sass化结构+SLB+CDN网站访问，稳如泰山</p>
				</div>
				<div class="col-lg-4 col-xs-12 fabzhuan">
					<img src="/web/images/icon3.png" />
					<h2 class="tit"><span>金牌服务，</span>拥有精英团队</h2>
					<p>秉承客户第一价值观，用心服务</p>
					<p>良心承诺</p>
					<p>彻底消除您的后顾之忧</p>
				</div>
			</div>
		</div>
	</div>
	<div class="main2 mt">
		<h2 class="w-title">功能介绍</h2>
		<p class="w-text">提供多种行业解决方案，让你拥有更多选择</p>
			<div class="container gongneng">
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe606;</i>
					<p>微点餐</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe600;</i>
					<p>微二手房</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe603;</i>
					<p>微信墙</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe601;</i>
					<p>微拍卖</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe60f;</i>
					<p>微分销</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe60d;</i>
					<p>微商城</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe602;</i>
					<p>微医疗</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe605;</i>
					<p>微路由</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe60b;</i>
					<p>微众筹</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe604;</i>
					<p>微名片</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe60a;</i>
					<p>微场景</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe607;</i>
					<p>1元购    </p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe60e;</i>
					<p>微外卖</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe609;</i>
					<p>微相亲</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe608;</i>
					<p> 微人才</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe607;</i>
					<p>1元购    </p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe60e;</i>
					<p>微外卖</p>
				</div>
				<div class="col-lg-2 col-xs-6">
					<i class="iconfont">&#xe60c;</i>
					<p>微考试</p>
				</div>
			</div>
	</div>
	<div class="main3 mt">
		<h2 class="w-title">案例展示</h2>
		<p class="w-text">提供多种行业解决方案，让你拥有更多选择</p>
		<div class="container case">
			<div class="row">
				<div class="col-lg-3 col-xs-12 casepic">
					<div class="recent-work-wrap">
			          <a href="">
			          <img class="img-responsive" src="/web/images/7.jpg" alt="">
				          <div class="overlay">
					            <div class="recent-work-inner">
					              <h3>福隆超市连锁</h3>
					            </div>
				          </div>
				       </a>
			        </div>
				</div>
				<div class="col-lg-3 col-xs-12 casepic">
					<div class="recent-work-wrap">
			          <a href="">
			          <img class="img-responsive" src="/web/images/7a.jpg" alt="">
				          <div class="overlay">
					            <div class="recent-work-inner">
					              <h3>福隆超市连锁</h3>
					            </div>
				          </div>
				       </a>
			        </div>
				</div>
				<div class="col-lg-3 col-xs-12 casepic">
					<div class="recent-work-wrap">
			          <a href="">
			          <img class="img-responsive" src="/web/images/8.jpg" alt="">
				          <div class="overlay">
					            <div class="recent-work-inner">
					              <h3>福隆超市连锁</h3>
					            </div>
				          </div>
				       </a>
			        </div>
				</div>
				<div class="col-lg-3 col-xs-12 casepic">
					<div class="recent-work-wrap">
			          <a href="">
			          <img class="img-responsive" src="/web/images/12.jpg" alt="">
				          <div class="overlay">
					            <div class="recent-work-inner">
					              <h3>福隆超市连锁</h3>
					            </div>
				          </div>
				       </a>
			        </div>
				</div>
				<div class="col-lg-3 col-xs-12 casepic">
					<div class="recent-work-wrap">
			          <a href="">
			          <img class="img-responsive" src="/web/images/12.jpg" alt="">
				          <div class="overlay">
					            <div class="recent-work-inner">
					              <h3>福隆超市连锁</h3>
					            </div>
				          </div>
				       </a>
			        </div>
				</div>
				<div class="col-lg-3 col-xs-12 casepic">
					<div class="recent-work-wrap">
			          <a href="">
			          <img class="img-responsive" src="/web/images/8.jpg" alt="">
				          <div class="overlay">
					            <div class="recent-work-inner">
					              <h3>福隆超市连锁</h3>
					            </div>
				          </div>
				       </a>
			        </div>
				</div>
				<div class="col-lg-3 col-xs-12 casepic">
					<div class="recent-work-wrap">
			          <a href="">
			          <img class="img-responsive" src="/web/images/7a.jpg" alt="">
				          <div class="overlay">
					            <div class="recent-work-inner">
					              <h3>福隆超市连锁</h3>
					            </div>
				          </div>
				       </a>
			        </div>
				</div>
				<div class="col-lg-3 col-xs-12 casepic">
					<div class="recent-work-wrap">
			          <a href="">
			          <img class="img-responsive" src="/web/images/7.jpg" alt="">
				          <div class="overlay">
					            <div class="recent-work-inner">
					              <h3>福隆超市连锁</h3>
					            </div>
				          </div>
				       </a>
			        </div>
				</div>
				
			</div>
		</div>
		<a href="case.html" class="more">查看更多</a>
	</div>
	<div class="main4 mt">
		<h2 class="w-title">新闻资讯</h2>
		<p class="w-text">实时掌握最新动态，了解互联网发展方向</p>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-xs-12 ">
					<a href="" class="line">
						<img src="/web/images/n1.jpg" />
						<div class="xin">
							<div class="time">
								<span>08</span>
								<p>2016.06</p>
							</div>
							<div class="text">
								<h2>变革时代，如何写商业计划书？</h2>
								<p>变革时代，如何写商业计划书？变革时代，如何写商业计划书？</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-xs-12 ">
					<a href="" class="line">
						<img src="/web/images/n1.jpg" />
						<div class="xin">
							<div class="time">
								<span>08</span>
								<p>2016.06</p>
							</div>
							<div class="text">
								<h2>变革时代，如何写商业计划书？</h2>
								<p>变革时代，如何写商业计划书？变革时代，如何写商业计划书？</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-xs-12">
					<a href="" class="line">
						<img src="/web/images/n1.jpg" />
						<div class="xin">
							<div class="time">
								<span>08</span>
								<p>2016.06</p>
							</div>
							<div class="text">
								<h2>变革时代，如何写商业计划书？</h2>
								<p>变革时代，如何写商业计划书？变革时代，如何写商业计划书？</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<a href="news.html" class="more">查看更多</a>
	</div>
    <div class="main5 mt">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 col-xs-12 text">
    				<p>广东澳新考拉信息技术有限公司 </p>
					<p>地 址：汕头市龙湖区高新区嘉泽中心大厦7B01</p>
					<p>联系方式：0754-87263166</p>
					<p>公司官网：<a href="http://www.ozkoalas.com/" target="_blank">http://www.ozkoalas.com/</a> </p>
    			</div>
    			<div class="col-lg-6 col-xs-12 photo">
    				<p class="att">关注我们</p>
    				<img src="/web/images/wx.png" />
    			</div>
    		</div>
    	</div>
    </div>
@stop