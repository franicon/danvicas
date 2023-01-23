<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid tw-max-w-7xl align-items-center">
        <a class=" tw-text-slate-900 mt-2 tw-no-underline tw-font-black md:tw-text-2xl tw-text-lg" href="/">DANVICAS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-2" id="navbarNav">
            <ul class="navbar-nav tw-text-[15px] mx-auto">
                <li class="nav-item px-2">
                    <a class="{{Request::is('/') ? 'active': ''}} nav-link tw-font-bold " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link tw-text-slate-900 {{Request::is('services') ? 'active': ''}}" href="/services">Services</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link {{Request::is('projects') ? 'active': ''}}" href="/projects">Projects</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link {{Request::is('news') ? 'active': ''}}" href="/news">News</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link {{Request::is('about') ? 'active': ''}}" href="/about">About</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link {{Request::is('contact') ? 'active': ''}}" href="/contact">Contact</a>
                </li>
            </ul>
            <a class="d-flex tw-no-underline tw-text-stone-700 hover:tw-text-stone-900 {{Request::is('quotation') ? 'active': ''}}"  href="/quotation">
                <button class=" tw-border-[1.5px] tw-border-gray-400 tw-px-8 tw-py-3 hover:tw-border-gray-800 tw-duration-200 tw-mx-auto tw-w-full">Quotation</button>
            </a>
        </div>
    </div>
</nav>
