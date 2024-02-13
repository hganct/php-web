<div class="modal fade" id="modalSignup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Đăng ký tài khoản</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="data-type" value="registration" />
                    <label class="form-label">Ảnh đại diện:</label>
                    <input class="form-control" type="file" name="fileAvatar" placeholder="Chọn ảnh đại diện" />
                    <label class="form-label">Tên đăng nhập:</label>
                    <input class="form-control" type="text" name="username" placeholder="Nhập tên đăng nhập" required />
                    <label class="form-label">Mật khẩu:</label>
                    <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" required />
                    <label class="form-label">Email:</label>
                    <input class="form-control" type="email" name="email" placeholder="example@gmail.com" required />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>
</div>