<header class="header-frontend">
<div id="nav_div" class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/web/images/logo.png"/></a>
        </div>
        <div class="navbar-collapse collapse" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li @if ($nav_active == 'index') class="active" @endif><a href="/">首页</a></li>
                <li><a href="about.html">关于九圣</a></li>
                <li><a href="case.html">服务体系</a></li>
                <li><a href="">产品领域</a></li>
                <li><a href="case.html">案例展示</a></li>
                <li><a href="product.html">产品领域</a></li>
                <li @if ($nav_active == 'news') class="active" @endif><a href="/news">新闻动态  </a> </li>
                <li><a href="talent.html"> 招贤纳士</a></li>
                <li><a href="contact.html">联系我们</a></li>
            </ul>
        </div>
    </div>
</div>
</header>