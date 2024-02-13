<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>username</th>
                <th>password</th>
                <th>email</th>
                <th>phần quyền</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "ajax/account/index.php",
        dataType: "json",
        success: function(response) {
            // Kiểm tra nếu có dữ liệu
            if (response && response.length > 0) {
                // Sử dụng map() để tạo một mảng HTML cho mỗi tài khoản
                var htmlArray = response.map(function(account, index) {
                    var html = '<tr>';
                    html += '<td>' + (index + 1) + '</td>';
                    html += '<td>' + account.username + '</td>';
                    html += '<td>' + account.password + '</td>';
                    html += '<td>' + account.email + '</td>';
                    html += '<td>' + account.role + '</td>';
                    html +=
                        '<td><button class="btn btn-sm btn-outline-danger">Delete</button></td>';
                    html += '</tr>';
                    return html;
                });
                // Nối các chuỗi HTML lại với nhau và chèn vào tbody
                $('tbody').html(htmlArray.join(''));
            } else {
                // Xử lý khi không có dữ liệu
                $('tbody').html('<tr><td colspan="6">No records found</td></tr>');
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
            // Xử lý lỗi khi tải dữ liệu
            $('tbody').html('<tr><td colspan="6">Error loading data</td></tr>');
        }
    });
});
</script>