<div>
    <div class="container">
        <h1 class="text-uppercase text-center fw-bold bg-danger">Đăng ký tài khoản</h1>
        <form method="POST" id="registerForm">
            <label class="form-label" for="username">Tên tài khoản:</label>
            <input class="form-control" id="username" type="text" placeholder="Nhập tên tài khoản" required>
            <label class="form-label" for="password">Mật khẩu:</label>
            <input class="form-control" id="password" type="password" placeholder="Nhập mật khẩu" required>
            <label class="form-label" for="email">Email:</label>
            <input class="form-control" id="email" type="email" placeholder="example@gmail.com" required>
            <div class="form-check my-3 ms-3">
                <input class="form-check-input" type="checkbox" name="registerCheck" id="registerCheck" value="">
                <label class="form-check-label fst-italic" for="registerCheck">Đồng ý với các <a href="#">điều
                        khoảng</a> của chúng tôi</label>
            </div>
            <button class="btn btn-primary my-2" type="submit" value="submit">Đăng ký</button>
        </form>
    </div>
</div>