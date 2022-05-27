 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-collapsed-menu-template/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Combo Expert</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                {{-- <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">

                        <li class=""><a href="dashboard-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href="dashboard-ecommerce.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                     </ul>
                </li> --}}
                {{-- <li class=" navigation-header"><span>Apps</span>
                </li> --}}
                 {{-- @foreach($menu as $menus)
                        <li class=" nav-item"><a href="/tableview/{{ $menus->table }}"><i class="feather {{ $menus->icon }}"></i><span class="menu-title" data-i18n="Email">{{ $menus->name }}</span></a>
                        </li>
                        @endforeach --}}
                 <li class=" nav-item"><a href="/menu/table"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Email">Data</span></a>
                </li>
                {{-- <li class=" nav-item"><a href="/submenu/table"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Email">Products</span></a>
                </li>
                  <li class=" nav-item"><a href=""><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">User</span></a>
                    <ul class="menu-content">

                        <li class=""><a href="/staff/table"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Staff</span></a>
                        </li>
                        <li><a href="/franchisee/table"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">Franchisee</span></a>
                        </li>
                        <li><a href="/vendor/table"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">Vendor</span></a>
                        </li>
                     </ul>
                </li>
                <li class=" nav-item"><a href=""><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Product Reports</span></a>
                    <ul class="menu-content">

                        <li class=""><a href="/preport/table"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Savings Account</span></a>
                        </li>
                        <li><a href="/preport/tablecc"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">Credit Card</span></a>
                        </li>
                        <li><a href="/preport/tabledemat"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">Demat</span></a>
                        </li>
                        <li><a href="/preport/tablecrypto"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">Crypto</span></a>
                        </li>
                         <li><a href="/preport/tableloan"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">Instant Loan</span></a>
                        </li>
                         <li><a href="/preport/tableonboarding"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">Onboarding</span></a>
                        </li>
                         <li><a href="/preport/tablegovt"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">Government Services</span></a>
                        </li>
                         <li><a href="/preport/tableloann"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">Loan</span></a>
                        </li>
                     </ul>
                </li>
                <li class=" nav-item"><a href="/about/table"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Email">About Us</span></a>
                </li>
                <li class=" nav-item"><a href="/setting/table"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">Setting</span></a>
                </li>
                <li class=" nav-item"><a href="/banner/table"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Todo">Banner</span></a>
                </li>
                <li class=" nav-item"><a href="/birthday/table"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Todo">Birthday</span></a>
                </li>
                <li class=" nav-item"><a href="/contact/table"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Contact</span></a>
                </li>
                <li class=" nav-item"><a href="/disclimer/table"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Disclimer</span></a>
                </li>
                <li class=" nav-item"><a href="/newupdate/table"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">New Update</span></a>
                </li>

                <li class=" nav-item"><a href="/policy/table"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Form Layout">Policy</span></a>
                </li>
                <li class=" nav-item"><a href="/product/table"><i class="feather icon-package"></i><span class="menu-title" data-i18n="Form Wizard">Product</span></a>
                </li>
                <li class=" nav-item"><a href="/youtube/table"><i class="feather icon-check-circle"></i><span class="menu-title" data-i18n="Form Validation">Youtube</span></a>
                </li>
                <li class=" nav-item"><a href="/submenu/table"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Table">Sub Menu</span></a>
                </li>
                <li class=" nav-item"><a href="/category/table"><i class="feather icon-grid"></i><span class="menu-title" data-i18n="Datatable">Category</span></a>
                </li>
                <li class=" nav-item"><a href="/comboexpert/table"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Profile">Combo Expert</span></a>
                </li>
                <li class=" nav-item"><a href="/crm/table"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Account Settings">CRM</span></a>
                </li>
                <li class=" nav-item"><a href="/festive/table"><i class="feather icon-help-circle"></i><span class="menu-title" data-i18n="FAQ">Festive</span></a>
                </li>
                <li class=" nav-item"><a href="/goodmorning/table"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Knowledge Base">Good Morning</span></a>
                </li>
                <li class=" nav-item"><a href="/goodnight/table"><i class="feather icon-search"></i><span class="menu-title" data-i18n="Search">Good Night</span></a>
                </li>
                <li class=" nav-item"><a href="/lic/table"><i class="feather icon-file"></i><span class="menu-title" data-i18n="Invoice">LIC</span></a>
                </li>
                <li class=" nav-item"><a href="/occation/table"><i class="feather icon-alert-circle"></i><span class="menu-title" data-i18n="Sweet Alert">Occation</span></a>
                </li>
                <li class=" nav-item"><a href="/poster/table"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Toastr">Poster</span></a>
                </li>
                <li class=" nav-item"><a href="/user/table"><i class="feather icon-sliders"></i><span class="menu-title" data-i18n="NoUi Slider">User</span></a>
                </li> --}}
                {{-- <li class=" nav-item"><a href="ext-component-file-uploader.html"><i class="feather icon-upload-cloud"></i><span class="menu-title" data-i18n="File Uploader">File Uploader</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-quill-editor.html"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Quill Editor">Quill Editor</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-drag-drop.html"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-tour.html"><i class="feather icon-info"></i><span class="menu-title" data-i18n="Tour">Tour</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-clipboard.html"><i class="feather icon-copy"></i><span class="menu-title" data-i18n="Clipboard">Clipboard</span></a>
                </li>
                <li class=" nav-item"><a href=" ext-component-plyr.html"><i class="feather icon-film"></i><span class="menu-title" data-i18n="Media player">Media player</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-context-menu.html"><i class="feather icon-more-horizontal"></i><span class="menu-title" data-i18n="Context Menu">Context Menu</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-swiper.html"><i class="feather icon-smartphone"></i><span class="menu-title" data-i18n="swiper">swiper</span></a>
                </li>
                <li class=" nav-item"><a href="ext-component-i18n.html"><i class="feather icon-globe"></i><span class="menu-title" data-i18n="l18n">l18n</span></a>
                </li>
                <li class=" navigation-header"><span>Others</span>
                </li> --}}
                {{-- <li class=" nav-item"><a href="#"><i class="feather icon-menu"></i><span class="menu-title" data-i18n="Menu Levels">Menu Levels</span></a>
                    <ul class="menu-content">
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Second Level">Second Level</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Second Level">Second Level</span></a>
                            <ul class="menu-content">
                                <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                                <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="disabled nav-item"><a href="#"><i class="feather icon-eye-off"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li>
                <li class=" navigation-header"><span>Support</span>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
                </li>
                <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
                </li> --}}
            </ul>
        </div>
    </div>
