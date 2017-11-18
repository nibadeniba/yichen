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
                <li @if ($nav_active == 'about') class="active" @endif><a href="about">关于亿臣</a></li>
                <li @if ($nav_active == 'indexo') class="active" @endif><a href="indexo">服务体系</a></li>
                <li @if ($nav_active == 'case') class="active" @endif><a href="case">案例展示</a></li>
                <li @if ($nav_active == 'product') class="active" @endif><a href="product">产品领域</a></li>
                <li @if ($nav_active == 'news') class="active" @endif><a href="/news">新闻动态  </a> </li>
                <li @if ($nav_active == 'customer') class="active" @endif><a href="customer">合作客户</a></li>
                <li @if ($nav_active == 'talent') class="active" @endif><a href="talent"> 招贤纳士</a></li>
                <li @if ($nav_active == 'contact') class="active" @endif><a href="contact">联系我们</a></li>
            </ul>
        </div>
    </div>
</div>
</header>