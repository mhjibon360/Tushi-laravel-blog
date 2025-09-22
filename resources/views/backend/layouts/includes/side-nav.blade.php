@php
    $activeroutes = Route::currentRouteName();
@endphp
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('backend') }}/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
            <img src="{{ asset('backend') }}/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                @can('dashboard list')
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="dropdown-toggle no-arrow {{ $activeroutes == 'admin.dashboard' ? 'active' : '' }}">
                            <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                        </a>
                    </li>
                @endcan

                @can('Language Menu')
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-textarea-resize"></span><span class="mtext">Language</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('admin.language.create') }}"
                                    class="{{ $activeroutes == 'admin.language.create' ? 'active' : '' }}">Add
                                    Language</a>
                            </li>
                            <li><a href="{{ route('admin.language.index') }}"
                                    class="{{ $activeroutes == 'admin.language.index' ? 'active' : '' }}">All
                                    Language</a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('Category Menu')
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-textarea-resize"></span><span class="mtext">Category</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('admin.category.create') }}"
                                    class="{{ $activeroutes == 'admin.tag.create' ? 'active' : '' }}">Add Category</a>
                            </li>
                            <li><a href="{{ route('admin.category.index') }}"
                                    class="{{ $activeroutes == 'admin.tag.index' ? 'active' : '' }}">All Category</a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('Tag Menu')
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-textarea-resize"></span><span class="mtext">Tag</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('admin.tag.create') }}"
                                    class="{{ $activeroutes == 'admin.tag.create' ? 'active' : '' }}">Add Tag</a></li>
                            <li><a href="{{ route('admin.tag.index') }}"
                                    class="{{ $activeroutes == 'admin.tag.index' ? 'active' : '' }}">All Tag</a></li>
                        </ul>
                    </li>
                @endcan

                @can(' Post Menu')
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-textarea-resize"></span><span class="mtext">Post</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('admin.post.create') }}"
                                    class="{{ $activeroutes == 'admin.post.create' ? 'active' : '' }}">Add Post</a>
                            </li>
                            <li><a href="{{ route('admin.post.index') }}"
                                    class="{{ $activeroutes == 'admin.post.index' ? 'active' : '' }}">All Post</a></li>
                        </ul>
                    </li>
                @endcan
                @can('About Menu')
                    <li>
                        <a href="{{ route('admin.manage.about') }}"
                            class="dropdown-toggle no-arrow {{ $activeroutes == 'admin.manage.about' ? 'active' : '' }}">
                            <span class="micon bi bi-chat-right-dots"></span><span class="mtext">About</span>
                        </a>
                    </li>
                @endcan
                @can('Setting Menu')
                    <li>
                        <a href="{{ route('admin.setting') }}"
                            class="dropdown-toggle no-arrow {{ $activeroutes == 'admin.setting' ? 'active' : '' }}">
                            <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Setting</span>
                        </a>
                    </li>
                @endcan

                @can('Newsletter Menu')
                    <li>
                        <a href="{{ route('admin.all.subscriber.list') }}"
                            class="dropdown-toggle no-arrow {{ $activeroutes == 'admin.all.subscriber.list' ? 'active' : '' }}">
                            <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Manage
                                Newsletter</span>
                        </a>
                    </li>
                @endcan

                @can('Contact Message Menu')
                    <li>
                        <a href="{{ route('admin.all.contact.list') }}"
                            class="dropdown-toggle no-arrow {{ $activeroutes == 'admin.all.contact.list' ? 'active' : '' }}">
                            <span class="micon bi bi-chat-right-dots"></span><span class="mtext">
                                Cotact Message</span>
                        </a>
                    </li>
                @endcan



                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Admin Account</span>
                    </a>
                    <ul class="submenu">

                        <li><a href="{{ route('admin.account.create') }}"
                                class="{{ $activeroutes == 'admin.account.create' ? 'active' : '' }}">All Admin
                                Account</a>
                        </li>
                        <li><a href="{{ route('admin.account.index') }}"
                                class="{{ $activeroutes == 'admin.account.index' ? 'active' : '' }}">All
                                Admin Account</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Role and Permission</span>
                    </a>
                    <ul class="submenu">

                        <li>
                            <a href="{{ route('admin.permission.index') }}"
                                class="{{ $activeroutes == 'admin.permission.index' ? 'active' : '' }}">All
                                Permission</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.role.index') }}"
                                class="{{ $activeroutes == 'admin.role.index' ? 'active' : '' }}">All Role</a>
                        </li>

                    </ul>
                </li>







            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
