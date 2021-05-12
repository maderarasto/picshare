<nav class="navbar navigation" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item logo" href="#"><span class="has-text-primary">Pic</span>Share</a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu is-align-items-center">
        <div class="navbar-start">
            <button type="button" class="button is-primary">
                Upload Image
            </button>
        </div>

        <div class="field">
            <p class="control has-icons-right">
                <label for="search-input"></label>
                <input type="text" id="search-input" class="input search" placeholder="Search images...">
                <span class="icon is-right">
                    <i class="fas fa-search"></i>
                </span>
            </p>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    @guest
                    <a href="{{ route('register.show') }}" class="button is-link is-outlined">Sign up</a>
                    <a href="{{ route('login.show') }}" class="button is-primary">Log in</a>
                    @endguest
                    @auth
                    <a href="#" class="button is-primary">Profile</a>
                    <a href="{{ route('logout') }}" class="button is-link">Log Out</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
