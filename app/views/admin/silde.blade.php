<li ><a href="#"><i class="fa fa-list-alt"></i><span>新闻管理</span></a>
    <ul class="sub-menu">
        <li @if ($action == 'admin/news') class="active" @endif><a href="/admin/news">新闻页</a></li>
        <li @if ($action == 'admin/news/add') class="active" @endif><a href="/admin/news/add">新闻添加</a></li>
    </ul>
</li>

