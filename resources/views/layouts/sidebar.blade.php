<aside class="main-sidebar" id="sidebar-wrapper">
    <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">
            @if (!Auth::guest())
                @include('layouts.menu')
            @endif
        </ul>

    </section>
</aside>