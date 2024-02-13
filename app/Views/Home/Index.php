<div class="my-2">
    <!-- SHOW APP: START -->
    <div class="container-fluid">
        <div class="card" style="background-color: #f2eeb3;">
            <div class="card-header"><span class="text-uppercase fw-bold">Ứng dụng quản trị</span><span class="badge bg-danger">Đăng nhập quyền quản trị để mở</span></div>
            <div class="card-body">
                <div class="row g-2 text-center justify-content-center">
                    <div class="col-sm-12 col-lg-4 d-grid d-block">
                        <button class="btn btn-outline-dark" id="miniApp1">Quản lý kho</button>
                    </div>
                    <div class="col-sm-12 col-lg-4 d-grid d-block">
                        <button class="btn btn-outline-dark" id="miniApp2">Quản lý nhân sự</button>
                    </div>
                    <div class="col-sm-12 col-lg-4 d-grid d-block">
                        <button class="btn btn-outline-dark" id="miniApp3">Tổ chức sự kiện</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOW APP: END -->

    <div class="container-fluid my-2">
        <div class="d-flex align-items-center">
            <div style="border-bottom: 3px solid #f2eeb3; width: 100%;"></div>
            <h4 style="background-color: #f2eeb3; padding: 5px;">Blogs</h4>
            <div style="border-bottom: 3px solid #f2eeb3; width: 100%;"></div>
        </div>
        <?php include "app/Views/Home/ShowPosts.php"?>
        <div class="d-flex align-items-center my-2">
            <div style="border-bottom: 3px solid #f2eeb3; width: 100%;"></div>
            <h4 style="background-color: #f2eeb3; padding: 5px; flex: none;">Kiến thức học Phật</h4>
            <div style="border-bottom: 3px solid #f2eeb3; width: 100%;"></div>
        </div>
    </div>
</div>