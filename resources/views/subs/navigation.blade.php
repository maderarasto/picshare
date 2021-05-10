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
                    <a class="button is-link is-outlined">Sign up</a>
                    <a href="{{ route('login.index') }}" class="button is-primary">Log in</a>
                </div>
            </div>
        </div>
    </div>
</nav>
