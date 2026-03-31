<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Phòng Khách Sạn</title>
    <!-- Nhúng file CSS qua Laravel asset helper -->
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
</head>

<body>

    <div class="booking-container">
        <h2>Đặt Phòng Khách Sạn</h2>

        <!-- Form gửi dữ liệu (action sẽ trỏ về một route trong Laravel) -->
        <form action="#" method="POST">
            <!-- CSRF token bắt buộc trong Laravel khi submit form -->
            @csrf

            <div class="form-group">
                <label for="room_type">Loại phòng</label>
                <select id="room_type" name="room_type" required>
                    <option value="" disabled selected>-- Chọn loại phòng --</option>
                    <option value="standard">Phòng Standard (Tiêu chuẩn)</option>
                    <option value="superior">Phòng Superior (Cao cấp)</option>
                    <option value="deluxe">Phòng Deluxe (Sang trọng)</option>
                    <option value="suite">Phòng Suite (Thương gia)</option>
                </select>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="check_in">Ngày nhận phòng</label>
                    <input type="date" id="check_in" name="check_in" required>
                </div>
                <div class="form-group">
                    <label for="check_out">Ngày trả phòng</label>
                    <input type="date" id="check_out" name="check_out" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="adults">Người lớn</label>
                    <input type="number" id="adults" name="adults" min="1" max="10" value="1" required>
                </div>
                <div class="form-group">
                    <label for="children">Trẻ em</label>
                    <input type="number" id="children" name="children" min="0" max="10" value="0">
                </div>
            </div>

            <div class="form-group">
                <label for="customer_name">Họ và Tên</label>
                <input type="text" id="customer_name" name="customer_name" placeholder="Nhập tên của bạn" required>
            </div>

            <div class="form-group">
                <label for="customer_phone">Số điện thoại</label>
                <input type="tel" id="customer_phone" name="customer_phone" placeholder="Nhập số điện thoại" required>
            </div>

            <button type="submit" class="btn-submit">Xác nhận đặt phòng</button>
        </form>
    </div>

</body>

</html>