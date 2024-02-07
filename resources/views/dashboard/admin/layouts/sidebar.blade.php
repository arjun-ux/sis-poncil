<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
                <a
                class="sidebar-link waves-effect waves-dark sidebar-link"
                href="{{ route('dashmin') }}"
                aria-expanded="false"
                ><i class="mdi mdi-view-dashboard"></i
                ><span class="hide-menu">Dashboard</span></a>
            </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-move-resize-variant"></i
              ><span class="hide-menu">Pondok </span></a>
            <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                    <a href="{{ route('data_saba_all') }}" class="sidebar-link"
                    ><i class="mdi mdi-view-dashboard"></i
                    ><span class="hide-menu"> Data Santri </span></a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link"
                    ><i class="mdi mdi-multiplication-box"></i
                    ><span class="hide-menu"> Data Asrama </span></a>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
