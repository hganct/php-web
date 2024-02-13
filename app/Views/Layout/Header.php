<div class="bg-header-cus">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand text-decoration-none text-uppercase" href="#">trungtienlearn.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href=".">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="about">Thông tin</a></li>
                    <?php if (!isset($_SESSION['username'])): ?>
                    <li class="nav-item"><button class="nav-link" id="btn-login" data-bs-toggle="modal"
                            data-bs-target="#modalLogin">Đăng nhập</button></li>
                    <?php include "app/Views/Layout/components/modalLogin.php";?>
                    <li class="nav-item"><a class="nav-link" href="/myweb/register">Đăng ký</a></li>
                    <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="?action=logout">Đăng xuất</a></li>
                    <?php endif;?>
                </ul>
            </div>
        </nav>
    </div>
</div>