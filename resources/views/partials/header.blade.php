<div class="header_main">
    <div class="up_header">
        <div class="container">
            <div class="d_flex align_items justify_flex_end">
                <h4 class="visa_upheader m-0">
                    <strong>DC POWER VISA</strong>
                </h4>
                <h4 class="visa_upheader m-0 px-3">
                    <strong>ADDITIONAL DC SITES</strong>
                </h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align_items justify_end header_content">
            <div class="logo_header col-4">
                <img class="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Comics">
            </div>
            <div class="menu_header col-8">
                <div class="menu_elements">
                    <ul class="d_flex align_items m-0 justify-content-end">
                        <li class="menu_element">
                            <a class="menu_item {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">COMICS</a>
                        </li>
                        <li class="menu_element">
                            <a class="menu_item {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}" href="{{route('comics.index')}}">ADMIN COMICS</a>
                        </li>
                        <li class="menu_element">
                            <a class="menu_item {{ Route::currentRouteName() === 'comics.create' ? 'active' : '' }}" href="{{route('comics.create')}}">CREATE COMIC</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>