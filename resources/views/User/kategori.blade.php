
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

            <div class="container-fluid">
    
                <div class="row">
                    <div class="col-lg-100 d-flex align-items-stretch">
                        <div class="card w-100">

                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Tabel Kategori Retribusi</title>
                                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                                <style>
                                    .table-container {
                                        max-width: 800px;
                                        margin: 20px auto;
                                        padding: 20px;
                                        border: 1px solid #ccc;
                                        border-radius: 8px;
                                        background-color: #f8f9fa;
                                    }
                                    .search-container {
                                        text-align: right;
                                        margin-bottom: 10px;
                                    }
                                    .form-control {
                                        width: 200px;
                                        background-color: #e2edf7;
                                    }
                                </style>
                            </head>
                            <body>
                            
                            <div class="table-container">
                                <div class="search-container">
                                    <label for="search">Search:</label>
                                    <input type="text" id="search" class="form-control">
                                </div>
                            
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10%;">No.</th>
                                            <th>Kategori Retribusi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Kategori Retribusi 1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
                            </body>
                            </html>
                            

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
