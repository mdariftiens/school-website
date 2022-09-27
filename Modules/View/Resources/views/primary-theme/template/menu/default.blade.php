<section class="header_menu_section sm:hidden lg:block xl:block 2xl:block bg-bgColor mt-3">
    <div class="container mx-auto">
        <div class="grid grid-cols-12 items-center">
            <img class=" col-span-1 sm:w-1/1 md:w-3/4 lg:w-3/4 xl:w-3/4 2xl:w-3/4 mr-4"
                 src="{{ asset('images/frontend-themes/primary/sagc.png') }}" alt="sagcTopLogo">
            <nav class="col-span-11">
                @if(isset($menus))
                    <ul class="dropdown flex justify-between items-center text-lg">
                        @foreach($menus as $menu)
                            @include('view::primary-theme.template.menu.child',['menu' => $menu])
                        @endforeach
                    </ul>
                @endif
                <ul class="dropdown flex justify-between items-center text-lg">
                    <li class="text-lg"><a href="#">Menu one</a>
                        <ul>
                            <li><a href="">Nice Dropdown Menu</a></li>
                            <li><a href="">Submenu - 1</a></li>
                            <li><a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="">Submenu - 1</a></li>
                                    <li><a href="">Submenu - 2</a></li>
                                    <li><a href="#">Dropdown</a>
                                        <ul>
                                            <li><a href="">Submenu - 1</a></li>
                                            <li><a href="">Submenu - 2</a></li>
                                            <li><a href="">Submenu - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Submenu - 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Submenu - 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu Two</a>
                        <ul>
                            <li><a href="">Nice Dropdown Menu</a></li>
                            <li><a href="">Submenu - 1</a></li>
                            <li><a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="">Submenu - 1</a></li>
                                    <li><a href="">Submenu - 2</a></li>
                                    <li><a href="#">Dropdown</a>
                                        <ul>
                                            <li><a href="">Submenu - 1</a></li>
                                            <li><a href="">Submenu - 2</a></li>
                                            <li><a href="">Submenu - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Submenu - 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Submenu - 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu Three</a>
                        <ul>
                            <li><a href="">Nice Dropdown Menu</a></li>
                            <li><a href="">Submenu - 1</a></li>
                            <li><a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="">Submenu - 1</a></li>
                                    <li><a href="">Submenu - 2</a></li>
                                    <li><a href="#">Dropdown</a>
                                        <ul>
                                            <li><a href="">Submenu - 1</a></li>
                                            <li><a href="">Submenu - 2</a></li>
                                            <li><a href="">Submenu - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Submenu - 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Submenu - 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu Four</a>
                        <ul>
                            <li><a href="">Nice Dropdown Menu</a></li>
                            <li><a href="">Submenu - 1</a></li>
                            <li><a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="">Submenu - 1</a></li>
                                    <li><a href="">Submenu - 2</a></li>
                                    <li><a href="#">Dropdown</a>
                                        <ul>
                                            <li><a href="">Submenu - 1</a></li>
                                            <li><a href="">Submenu - 2</a></li>
                                            <li><a href="">Submenu - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Submenu - 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Submenu - 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu Five</a>
                        <ul>
                            <li><a href="">Nice Dropdown Menu</a></li>
                            <li><a href="">Submenu - 1</a></li>
                            <li><a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="">Submenu - 1</a></li>
                                    <li><a href="">Submenu - 2</a></li>
                                    <li><a href="#">Dropdown</a>
                                        <ul>
                                            <li><a href="">Submenu - 1</a></li>
                                            <li><a href="">Submenu - 2</a></li>
                                            <li><a href="">Submenu - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Submenu - 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Submenu - 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu Six</a>
                        <ul>
                            <li><a href="">Nice Dropdown Menu</a></li>
                            <li><a href="">Submenu - 1</a></li>
                            <li><a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="">Submenu - 1</a></li>
                                    <li><a href="">Submenu - 2</a></li>
                                    <li><a href="#">Dropdown</a>
                                        <ul>
                                            <li><a href="">Submenu - 1</a></li>
                                            <li><a href="">Submenu - 2</a></li>
                                            <li><a href="">Submenu - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Submenu - 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Submenu - 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu Seven</a>
                        <ul>
                            <li><a href="">Nice Dropdown Menu</a></li>
                            <li><a href="">Submenu - 1</a></li>
                            <li><a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="">Submenu - 1</a></li>
                                    <li><a href="">Submenu - 2</a></li>
                                    <li><a href="#">Dropdown</a>
                                        <ul>
                                            <li><a href="">Submenu - 1</a></li>
                                            <li><a href="">Submenu - 2</a></li>
                                            <li><a href="">Submenu - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Submenu - 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Submenu - 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu Eight</a>
                        <ul>
                            <li><a href="">Nice Dropdown Menu</a></li>
                            <li><a href="">Submenu - 1</a></li>
                            <li><a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="">Submenu - 1</a></li>
                                    <li><a href="">Submenu - 2</a></li>
                                    <li><a href="#">Dropdown</a>
                                        <ul>
                                            <li><a href="">Submenu - 1</a></li>
                                            <li><a href="">Submenu - 2</a></li>
                                            <li><a href="">Submenu - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Submenu - 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Submenu - 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu nine</a>
                        <ul>
                            <li><a href="">Nice Dropdown Menu</a></li>
                            <li><a href="">Submenu - 1</a></li>
                            <li><a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="">Submenu - 1</a></li>
                                    <li><a href="">Submenu - 2</a></li>
                                    <li><a href="#">Dropdown</a>
                                        <ul>
                                            <li><a href="">Submenu - 1</a></li>
                                            <li><a href="">Submenu - 2</a></li>
                                            <li><a href="">Submenu - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Submenu - 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Submenu - 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Menu Ten</a>
                        <ul>
                            <li><a href="">Nice Dropdown Menu</a></li>
                            <li><a href="">Submenu - 1</a></li>
                            <li><a href="#">Dropdown</a>
                                <ul>
                                    <li><a href="">Submenu - 1</a></li>
                                    <li><a href="">Submenu - 2</a></li>
                                    <li><a href="#">Dropdown</a>
                                        <ul>
                                            <li><a href="">Submenu - 1</a></li>
                                            <li><a href="">Submenu - 2</a></li>
                                            <li><a href="">Submenu - 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Submenu - 3</a></li>
                                </ul>
                            </li>
                            <li><a href="">Submenu - 2</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--header logo layout three-->
