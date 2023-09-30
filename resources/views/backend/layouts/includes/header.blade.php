        <header data-particle_enable="false" data-particle-mobile-disabled="false"
            class="elementor-section elementor-top-section elementor-element elementor-element-5dcf5062 elementor-section-content-middle animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
            data-id="5dcf5062" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInDown&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5b8f7f28"
                    data-id="5b8f7f28" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-875c76e elementor-icon-list--layout-inline elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="875c76e" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items elementor-inline-items">
                                    <li class="elementor-icon-list-item elementor-inline-item"> <span
                                            class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                class="fas fa-envelope"></i> </span> <span
                                            class="elementor-icon-list-text">info@banglacentre.com</span> </li>
                                    <li class="elementor-icon-list-item elementor-inline-item"> <span
                                            class="elementor-icon-list-icon"> <i aria-hidden="true"
                                                class="fas fa-phone"></i> </span> <span
                                            class="elementor-icon-list-text">07897317088</span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-739fd67c"
                    data-id="739fd67c" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-61d05aa elementor-shape-circle e-grid-align-right e-grid-align-tablet-right e-grid-align-mobile-center elementor-hidden-phone elementor-grid-0 elementor-widget elementor-widget-social-icons"
                            data-id="61d05aa" data-element_type="widget" data-widget_type="social-icons.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-social-icons-wrapper elementor-grid"> <span
                                        class="elementor-grid-item"> <a
                                            class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-022bbc9"
                                            href="https://www.facebook.com/BanglaCentrePage/" target="_blank"> <span
                                                class="elementor-screen-only">Facebook</span> <i
                                                class="fab fa-facebook"></i> </a> </span> <span
                                        class="elementor-grid-item"> <a
                                            class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-6a2a24d"
                                            href="https://twitter.com/banglacentre85?lang=bn" target="_blank"> <span
                                                class="elementor-screen-only">Twitter</span> <i
                                                class="fab fa-twitter"></i> </a> </span> <span
                                        class="elementor-grid-item"> <a
                                            class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-7e77330"
                                            target="_blank"> <span class="elementor-screen-only">Linkedin</span> <i
                                                class="fab fa-linkedin"></i> </a> </span> <span
                                        class="elementor-grid-item"> <a
                                            class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-735f9e9"
                                            target="_blank"> <span class="elementor-screen-only">Youtube</span> <i
                                                class="fab fa-youtube"></i> </a> </span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-62e3443d"
                    data-id="62e3443d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-13c3493 elementor-align-right elementor-widget__width-initial elementor-widget elementor-widget-button"
                            data-id="13c3493" data-element_type="widget" data-widget_type="button.default">
                            @if(Auth::check())
                            <div class="elementor-widget-container d-flex ml-4">
                                <div class="elementor-button-wrapper"> <a
                                        class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                                        href="{{ route('login') }}"> <span
                                            class="elementor-button-content-wrapper"> <span
                                                class="elementor-button-text">Welcome, {{ Auth::user()->name ?? 'Login' }}</span> </span> </a> </div>
                                                <a class="dropdown-item d-flex align-items-center " style="margin-left: 5px" href="{{ asset('ui/backend') }}/#">
                                                    <i class="bi bi-box-arrow-right"></i>
                                                    <span>
                                                        <form action="{{ route('logout') }}" method="POST">
                                                            @csrf
                                                            <button class="btn btn-sm btn-primary">Logout</button>
                                                        </form>
                                                    </span>
                                                </a>

                            </div>
@else
    <div class="elementor-button-wrapper">
        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow" href="{{ route('login') }}">
            <span class="elementor-button-content-wrapper">
                <span class="elementor-button-text">Login</span>
            </span>
        </a>
    </div>
@endif


                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header data-particle_enable="false" data-particle-mobile-disabled="false"
            class="elementor-section elementor-top-section elementor-element elementor-element-a419fa8 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="a419fa8" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-47cc4e4"
                    data-id="47cc4e4" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-2c01df9 elementor-widget elementor-widget-theme-site-logo elementor-widget-image"
                            data-id="2c01df9" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;none&quot;}"
                            data-widget_type="theme-site-logo.default">
                            <div class="elementor-widget-container"> <a href="https://banglacentre.com/newsite"> <img
                                        width="632" height="180" src="{{ asset('ui/backend') }}/assets/images/2023-08-logo-footer-2-1.png"
                                        class="attachment-full size-full wp-image-3105" alt=""
                                        srcset="{{ asset('ui/backend') }}/assets/images/2023-08-logo-footer-2-1.png 632w, ./images/2023-08-logo-footer-2-1-600x171.png 600w"
                                        sizes="(max-width: 632px) 100vw, 632px" /> </a> </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-34e0aab"
                    data-id="34e0aab" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-846b2f3 elementor-nav-menu__align-right elementor-nav-menu--stretch elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-invisible elementor-widget elementor-widget-nav-menu"
                            data-id="846b2f3" data-element_type="widget"
                            data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-angle-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}"
                            data-widget_type="nav-menu.default">
                            <div class="elementor-widget-container">
                                <nav
                                    class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-drop-out">
                                    <ul id="menu-1-846b2f3" class="elementor-nav-menu">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4611">
                                            <a href="https://banglacentre.com/newsite/"
                                                class="elementor-item">Home</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4602">
                                            <a href="https://banglacentre.com/newsite/registration/"
                                                class="elementor-item">Registration</a>
                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4603">
                                                    <a href="https://banglacentre.com/newsite/membership/"
                                                        class="elementor-sub-item">Membership</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4604">
                                                    <a href="https://banglacentre.com/newsite/bangla-school-registration/"
                                                        class="elementor-sub-item">Bangla School registration</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4605">
                                                    <a href="https://banglacentre.com/newsite/other-registration/"
                                                        class="elementor-sub-item">Other Registration</a></li>
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4617">
                                            <a href="https://banglacentre.com/newsite/blog/"
                                                class="elementor-item">Blog</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4610">
                                            <a href="https://banglacentre.com/newsite/contact/"
                                                class="elementor-item">Contact</a></li>
                                    </ul>
                                </nav>
                                <div class="elementor-menu-toggle" role="button" tabindex="0"
                                    aria-label="Menu Toggle" aria-expanded="false"> <i aria-hidden="true"
                                        role="presentation"
                                        class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i
                                        aria-hidden="true" role="presentation"
                                        class="elementor-menu-toggle__icon--close eicon-close"></i> <span
                                        class="elementor-screen-only">Menu</span> </div>
                                <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                    aria-hidden="true">
                                    <ul id="menu-2-846b2f3" class="elementor-nav-menu">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4611">
                                            <a href="https://banglacentre.com/newsite/" class="elementor-item"
                                                tabindex="-1">Home</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-533">
                                            <a href="https://banglacentre.com/newsite/about/" class="elementor-item"
                                                tabindex="-1">About</a>
                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1800">
                                                    <a href="https://banglacentre.com/newsite/history/"
                                                        class="elementor-sub-item" tabindex="-1">History</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4576">
                                                    <a href="https://banglacentre.com/newsite/meet-the-team/"
                                                        class="elementor-sub-item" tabindex="-1">Meet the team</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-4570">
                                            <a href="https://banglacentre.com/newsite/balgrayhill-community-hall/"
                                                class="elementor-item" tabindex="-1">Balgrayhill Community hall</a>
                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4564 current_page_item menu-item-4572">
                                                    <a href="./booking.html" aria-current="page"
                                                        class="elementor-sub-item elementor-item-active"
                                                        tabindex="-1">Booking</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4571">
                                                    <a href="https://banglacentre.com/newsite/whats-happening-on/"
                                                        class="elementor-sub-item" tabindex="-1">What’s Happening
                                                        on</a></li>
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4597">
                                            <a href="https://banglacentre.com/newsite/bangla-school/"
                                                class="elementor-item" tabindex="-1">Bangla school</a>
                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4596">
                                                    <a href="https://banglacentre.com/newsite/students-archive/"
                                                        class="elementor-sub-item" tabindex="-1">Students’
                                                        Archive</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4599">
                                                    <a href="https://banglacentre.com/newsite/star-of-the-month/"
                                                        class="elementor-sub-item" tabindex="-1">Star of the
                                                        Month</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4600">
                                                    <a href="https://banglacentre.com/newsite/school-gallery/"
                                                        class="elementor-sub-item" tabindex="-1">School Gallery</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4601">
                                                    <a href="https://banglacentre.com/newsite/teaches-and-school-committee/"
                                                        class="elementor-sub-item" tabindex="-1">Teaches and School
                                                        committee</a></li>
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4602">
                                            <a href="https://banglacentre.com/newsite/registration/"
                                                class="elementor-item" tabindex="-1">Registration</a>
                                            <ul class="sub-menu elementor-nav-menu--dropdown">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4603">
                                                    <a href="https://banglacentre.com/newsite/membership/"
                                                        class="elementor-sub-item" tabindex="-1">Membership</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4604">
                                                    <a href="https://banglacentre.com/newsite/bangla-school-registration/"
                                                        class="elementor-sub-item" tabindex="-1">Bangla School
                                                        registration</a></li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4605">
                                                    <a href="https://banglacentre.com/newsite/other-registration/"
                                                        class="elementor-sub-item" tabindex="-1">Other
                                                        Registration</a></li>
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4617">
                                            <a href="https://banglacentre.com/newsite/blog/" class="elementor-item"
                                                tabindex="-1">Blog</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4610">
                                            <a href="https://banglacentre.com/newsite/contact/" class="elementor-item"
                                                tabindex="-1">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
