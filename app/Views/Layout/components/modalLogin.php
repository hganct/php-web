<div class="modal fade" id="modalLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Đăng nhập</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="data-type" value="login" />
                    <label class="form-label">Tên đăng nhập:</label>
                    <input class="form-control is-invalid" type="text" name="username" placeholder="Nhập tên đăng nhập"
                        required />
                    <div class="invalid-feedback">Sai tên đăng nhập</div>
                    <label class="form-label">Mật khẩu:</label>
                    <input class="form-control is-invalid" type="password" placeholder="Nhập mật khẩu" required />
                    <div class="invalid-feedback">Sai mật khẩu</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</div>