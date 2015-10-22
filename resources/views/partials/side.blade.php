<div class="collapse navbar-search-overlap" id="site-navbar-search">
    <form role="search">
        <div class="form-group">
            <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                        data-toggle="collapse" aria-label="Close"></button>
            </div>
        </div>
    </form>
</div>
<!-- End Site Navbar Seach -->
</div>
</nav>
<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-category">General</li>
                    <li class="site-menu-item has-sub active open">
                        <a href="{{ url('/') }}" data-slug="dashboard">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>

                        </a>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="layout">
                            <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                            <span class="site-menu-title">Document Mgmt</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('files') }}" data-slug="layout-grids">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Documents</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="page">
                            <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                            <span class="site-menu-title">Personnel Mgmt</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item ">
                                <a href="{{url('add_personnel')}}" data-slug="">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Add New Personnel</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('personel') }}" data-slug="page-faq">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Manage Personnels</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="site-menu-category">Nominations</li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="uikit">
                            <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                            <span class="site-menu-title">Peace Keeping</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('peacekeeping') }}" data-slug="uikit-buttons">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Manage Selection</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('view_peacekeeping') }}" data-slug="uikit-buttons">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">View Nominations</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('add_mission') }}" data-slug="uikit-buttons">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Add Mission</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="advanced">
                            <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                            <span class="site-menu-title">Promotions</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('promotion') }}" data-slug="advanced-animation">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Promotion Status(All)</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('manage_promotions') }}" data-slug="advanced-lightbox">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Manage Promotions</span>
                                </a>
                            </li>


                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="structure">
                            <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                            <span class="site-menu-title">Courses</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('courses') }}" data-slug="structure-alerts">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Manage Selection</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('view_courses') }}" data-slug="structure-alerts">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">View Nominations</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="site-menu-category">Manage Users</li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)" data-slug="structure">
                            <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                            <span class="site-menu-title">Manage</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ url('add_new') }}" data-slug="structure-alerts">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Add User</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/blockquotes.html" data-slug="structure-blockquotes">
                                    <i class="site-menu-icon " aria-hidden="true"></i>
                                    <span class="site-menu-title">Edit Users</span>
                                </a>
                            </li>

                        </ul>
                    </li>



                </ul>


            </div>
        </div>
    </div>
    <div class="site-menubar-footer">
        <a href="{{ url('add_new') }}" class="fold-show" data-placement="top"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="{{ url('logout') }}" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="{{ url('logout') }}" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
    </div>
</div>
<div class="site-gridmenu">
    <!-- <ul>
        <li>
            <a href="apps/mailbox/mailbox.html">
                <i class="icon wb-envelope"></i>
                <span>Mailbox</span>
            </a>
        </li>
        <li>
            <a href="apps/calendar/calendar.html">
                <i class="icon wb-calendar"></i>
                <span>Calendar</span>
            </a>
        </li>
        <li>
            <a href="apps/contacts/contacts.html">
                <i class="icon wb-user"></i>
                <span>Contacts</span>
            </a>
        </li>
        <li>
            <a href="apps/media/overview.html">
                <i class="icon wb-camera"></i>
                <span>Media</span>
            </a>
        </li>
        <li>
            <a href="apps/documents/categories.html">
                <i class="icon wb-order"></i>
                <span>Documents</span>
            </a>
        </li>
        <li>
            <a href="apps/projects/projects.html">
                <i class="icon wb-image"></i>
                <span>Project</span>
            </a>
        </li>
        <li>
            <a href="apps/forum/forum.html">
                <i class="icon wb-chat-group"></i>
                <span>Forum</span>
            </a>
        </li>
        <li>
            <a href="index.html">
                <i class="icon wb-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
    </ul> -->
</div>

