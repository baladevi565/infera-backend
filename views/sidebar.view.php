<nav id="navigation" class="navigation-sidebar bg-primary">
        <div class="navigation-header">
        <a href="<?php echo SITE_URL ?>"><img src="../assets/images/wbdashboard.png" style="max-width: 130px;"></a>
    </div>

    <div class="welcome">
        Welcome, <b><?php echo $user['manager_name']; ?></b> <a href="../controller/logout.php" class="sidebar-user"><i class="dripicons-exit"></i></a>
    </div>

    <!--Navigation Menu Links-->
    <div class="navigation-menu">

        <ul class="menu-items custom-scroll">

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('posts.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-article"></i></span>
                    <span class="title">Posts</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('posts.php');?>">

                    <li>
                        <a href="../controller/posts.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Show All</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_post.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">New Post</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('tags.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-bookmarks"></i></span>
                    <span class="title">Tags</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('tags.php');?>">

                    <li>
                        <a href="../controller/tags.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Show All</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_tag.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">New Tag</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('products.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-cart"></i></span>
                    <span class="title">Products</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('products.php');?>">

                    <li>
                        <a href="../controller/products.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Show All</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_product.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">New Product</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('types.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-bookmarks"></i></span>
                    <span class="title">Product Types</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('types.php');?>">

                    <li>
                        <a href="../controller/types.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Show All</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_type.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">New Type</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="have-submenu <?php showMenu('managers.php');?>">
                    <span class="icon-thumbnail"><i class="dripicons-user"></i></span>
                    <span class="title">Managers</span>
                </a>
                <!--Submenu-->
                <ul class="sub-menu" style="display: <?php activePage('managers.php');?>">

                    <li>
                        <a href="../controller/managers.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">Show All</span>
                        </a>
                    </li>

                    <li>
                        <a href="../controller/new_manager.php">
                            <span class="icon-thumbnail"><i class="dripicons-dot"></i></span>
                            <span class="title">New Manager</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="../controller/users.php">
                    <span class="icon-thumbnail"><i class="dripicons-user-group"></i></span>
                    <span class="title">Users</span>
                </a>
            </li>

            <li>
                <a href="../controller/strings.php">
                    <span class="icon-thumbnail"><i class="dripicons-document-edit"></i></span>
                    <span class="title">Legal Information</span>
                </a>
            </li>

        </div>
    </div>
</ul>
</div>

</nav>

<div class="header fixed-header">
            <div class="container-fluid side-padding">
                <div class="row">
                    <div class="col-7 col-md-6 d-lg-none">
                        <a id="toggle-navigation" href="javascript:void(0);" class="icon-btn mr-3"><i class="fa fa-bars"></i></a>
                        <img src="../assets/images/wbdashboard-dark.png" class="logo-side-dark">
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <p class="sidebar-relative">Welcome, <b><?php echo $user['manager_name']; ?></b> <a href="../controller/logout.php" class="sidebar-logout"><i class="dripicons-exit"></i></a></p>
                    </div>
                    
                </div>
            </div>
        </div>