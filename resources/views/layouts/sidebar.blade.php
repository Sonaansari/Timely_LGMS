<div class="app-sidebar-menu">
            <div class="h-100" data-simplebar>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <div class="logo-box">
                        <a class='logo logo-light' href='index.html'>
                          
                        </a>
                        <a class='logo logo-dark' href='index.html'>
                          
                            <span class="logo-lg" style="margin-top:5px;">
                                <img src="{{ asset('assets/images/logotimely.png') }}" alt="" height="65" width="160">
                            </span>
                        </a>
                    </div>

                    <ul id="side-menu">

                        <li class="menu-title"></li>

                        <li>
                            <a href="{{ route('admin.dashboard')}}" >
                                <i data-feather="home"></i>
                                <span> Dashboard </span>
                                <!-- <span class="menu-arrow"></span> -->
                            </a>
                            <!-- <div class="collapse" id="sidebarDashboards">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='index.html'>CRM</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='analytics.html'>Analytics</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ecommerce.html'>eCommerce</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>

                        <li class="menu-title">Pages</li>

                        <!-- <li>
                            <a href="#sidebarAuth" data-bs-toggle="collapse">
                                <i data-feather="users"></i>
                                <span> Authentication </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarAuth">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='auth-login.html'>Log In</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='auth-register.html'>Register</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='auth-recoverpw.html'>Recover Password</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='auth-lock-screen.html'>Lock Screen</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='auth-confirm-mail.html'>Confirm Mail</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='email-verification.html'>Email Verification</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='auth-logout.html'>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarError" data-bs-toggle="collapse">
                                <i data-feather="alert-octagon"></i>
                                <span> Error Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarError">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='error-404.html'>Error 404</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='error-500.html'>Error 500</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='error-503.html'>Error 503</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='error-429.html'>Error 429</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='offline-page.html'>Offline Page</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarExpages" data-bs-toggle="collapse">
                                <i data-feather="file-text"></i>
                                <span> Utility </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExpages">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='pages-starter.html'>Starter</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='pages-profile.html'>Profile</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='pages-pricing.html'>Pricing</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='pages-timeline.html'>Timeline</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='pages-invoice.html'>Invoice</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='pages-faqs.html'>FAQs</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='pages-gallery.html'>Gallery</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='pages-maintenance.html'>Maintenance</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='pages-coming-soon.html'>Coming Soon</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->

                        <!-- <li class="menu-title mt-2">Apps</li>

                        <li>
                            <a class='tp-link' href='apps-todolist.html'>
                                <i data-feather="columns"></i>
                                <span> Todo List </span>
                            </a>
                        </li>

                        <li>
                            <a class='tp-link' href='apps-contacts.html'>
                                <i data-feather="map-pin"></i>
                                <span> Contacts </span>
                            </a>
                        </li>

                        <li>
                            <a class='tp-link' href='apps-calendar.html'>
                                <i data-feather="calendar"></i>
                                <span> Calendar </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">General</li> -->

                        <li>
                            <a href="#sidebarBaseui" data-bs-toggle="collapse">
                                <!-- <i data-feather="package"></i> -->
                                <i data-feather="map-pin"></i>
                                <span> Users </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarBaseui">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='ui-accordions.html'>Costumers List</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-alerts.html'>Alerts</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-badges.html'>Badges</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-breadcrumb.html'>Breadcrumb</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-buttons.html'>Buttons</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-cards.html'>Cards</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-collapse.html'>Collapse</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-dropdowns.html'>Dropdowns</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-video.html'>Embed Video</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-grid.html'>Grid</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-images.html'>Images</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-list.html'>List Group</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-modals.html'>Modals</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-placeholders.html'>Placeholders</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-pagination.html'>Pagination</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-popovers.html'>Popovers</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-progress.html'>Progress</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-scrollspy.html'>Scrollspy</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-spinners.html'>Spinners</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-tabs.html'>Tabs</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-tooltips.html'>Tooltips</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='ui-typography.html'>Typography</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a class='tp-link' href='widgets.html'>
                                <i data-feather="aperture"></i>
                                <span> Widgets </span>
                            </a>
                        </li>

                        <li>
                            <a href="#sidebarAdvancedUI" data-bs-toggle="collapse">
                                <i data-feather="cpu"></i>
                                <span> Extended UI </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarAdvancedUI">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='extended-carousel.html'>Carousel</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='extended-notifications.html'>Notifications</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='extended-offcanvas.html'>Offcanvas</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='extended-range-slider.html'>Range Slider</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarIcons" data-bs-toggle="collapse">
                                <i data-feather="award"></i>
                                <span> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarIcons">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='icons-feather.html'>Feather Icons</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='icons-mdi.html'>Material Design Icons</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarForms" data-bs-toggle="collapse">
                                <i data-feather="briefcase"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarForms">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='forms-elements.html'>General Elements</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='forms-validation.html'>Validation</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='forms-quilljs.html'>Quilljs Editor</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='forms-pickers.html'>Picker</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTables" data-bs-toggle="collapse">
                                <i data-feather="table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='tables-basic.html'>Basic Tables</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='tables-datatables.html'>Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarCharts" data-bs-toggle="collapse">
                                <i data-feather="pie-chart"></i>
                                <span> Apex Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCharts">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='charts-line.html'>Line</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-area.html'>Area</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-column.html'>Column</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-bar.html'>Bar</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-mixed.html'>Mixed</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-timeline.html'>Timeline</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-rangearea.html'>Range Area</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-funnel.html'>Funnel</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-candlestick.html'>Candlestick</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-boxplot.html'>Boxplot</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-bubble.html'>Bubble</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-scatter.html'>Scatter</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-heatmap.html'>Heatmap</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-treemap.html'>Treemap</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-pie.html'>Pie</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-radialbar.html'>Radialbar</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-radar.html'>Radar</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='charts-polararea.html'>Polar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarMaps" data-bs-toggle="collapse">
                                <i data-feather="map"></i>
                                <span> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="nav-second-level">
                                    <li>
                                        <a class='tp-link' href='maps-google.html'>Google Maps</a>
                                    </li>
                                    <li>
                                        <a class='tp-link' href='maps-vector.html'>Vector Maps</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
        </div>