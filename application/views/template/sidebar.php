
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url("menu/index")?>">Data Arsip </a>
        </div>
        <!-- /.navbar-header -->
    
<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <h5>Menu</h5>
                        </div>
                    </li>
                    <li>
                        <a href="<?= base_url("menu/index")?>"><i class="fa fa-edit fa-fw"></i> Arsip</a>
                    </li>
                    <li>
                        <a href="<?= base_url("menu/about")?>"><i class="fa fa-star"></i> About</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
</nav>