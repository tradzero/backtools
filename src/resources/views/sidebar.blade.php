<div class="sidebar-left">
    <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
        <a>
            <i class="fa fa-credit-card"></i>
            <span class="brand-name" style="font-size: 17px;">{{ config('app.name') }}</span>
        </a>
    </div>
    <div class="sidebar-left-info">
        <ul class="nav nav-pills nav-stacked side-navigation">
            <li>
                <h3 class="navigation-title">{{ config('app.name') }}后台</h3>
            </li>
            <li class="{{ menuIsActive('') ? 'active' : '' }}">
                <a href="">
                    <i class="fa fa-home"></i>
                    <span>首页</span>
                </a>
            </li>
        </ul>
    </div>
</div>

