<li >
	<a href="#"><i class="fa fa-list-alt"></i><span>首页管理</span></a>
    <ul class="sub-menu">
        <li @if ($action == 'admin/indexImg') class="active" @endif><a href="/admin/indexImg">首页图片</a></li>
        <li @if ($action == 'admin/indexCard') class="active" @endif><a href="/admin/indexCard">底部卡片</a></li>
        <li @if ($action == 'admin/indexText') class="active" @endif><a href="/admin/indexText">底部简介</a></li>
    </ul>

	<a href="#"><i class="fa fa-list-alt"></i><span>新闻管理</span></a>
    <ul class="sub-menu">
        <li @if ($action == 'admin/news') class="active" @endif><a href="/admin/news">新闻页</a></li>
        <li @if ($action == 'admin/news/add') class="active" @endif><a href="/admin/news/add">新闻添加</a></li>
    </ul>

    <a href="#"><i class="fa fa-list-alt"></i><span>产品管理</span></a>
    <ul class="sub-menu">
        <li @if ($action == 'admin/products') class="active" @endif><a href="/admin/products">产品页</a></li>
        <li @if ($action == 'admin/productAdd') class="active" @endif><a href="/admin/productAdd">产品添加</a></li>
    </ul>

    <a href="#"><i class="fa fa-list-alt"></i><span>案例管理</span></a>
    <ul class="sub-menu">
        <li @if ($action == 'admin/cases') class="active" @endif><a href="/admin/cases">案例页</a></li>
        <li @if ($action == 'admin/caseAdd') class="active" @endif><a href="/admin/caseAdd">案例添加</a></li>
    </ul>
    
    <a href="#"><i class="fa fa-list-alt"></i><span>岗位管理</span></a>
    <ul class="sub-menu">
        <li @if ($action == 'admin/talent') class="active" @endif><a href="/admin/talent">岗位列表</a></li>
        <li @if ($action == 'admin/talent/add') class="active" @endif><a href="/admin/talent/add">岗位添加</a></li>
    </ul>
</li>

