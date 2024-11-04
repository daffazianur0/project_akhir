
<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        @include('Template.left-sidebar')
        <!-- Sidebar End -->

        <!-- Main Wrapper -->
        <div class="body-wrapper">
            <!-- Header Start -->
            <header class="app-header">
                @include('Template.navbar')
            </header>
            <!-- Header End -->

           <h1>daffa</h1>
                        </div> <!-- End Card -->
                    </div> <!-- End Column -->
                </div> <!-- End Row 1 -->

                @include('Template.footer')
            </div> <!-- End Container Fluid -->
        </div> <!-- End Body Wrapper -->
    </div> <!-- End Page Wrapper -->

    @include('Template.script')
</body>

</html>
