<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"><i class="fa fa-dashboard"></i> MENU DE NAVEGAÇÃO</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="{{route('home')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-file"></i> <span>Posts</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{route('posts.create')}}"><i class="fa fa-plus"></i>Novo</a></li>
                    <li><a href="{{route('posts.index')}}"><i class="fa fa-search"></i>Ver Todos</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-cogs"></i> <span>Perfil</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{route('users.edit', ['user' => auth()->user()->id])}}"><i class="fa fa-pencil"></i>Editar</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
</aside>