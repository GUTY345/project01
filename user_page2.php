<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ชำระค่าเทอม</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #f3f4f6, #e3e4e8);
            color: #333;
            margin: 0;
            padding: 0;
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .sidebar {
            width: 220px;
            background-color: #34495e;
            color: #fff;
            padding: 20px;
            min-height: 100vh;
            position: fixed;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .sidebar:hover {
            transform: translateX(0);
        }

        .sidebar .menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar .menu li {
            margin: 15px 0;
            transition: transform 0.3s ease;
        }

        .sidebar .menu li:hover {
            transform: translateX(10px);
        }

        .sidebar .menu li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            display: block;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .sidebar .menu li a:hover {
            background-color: #2c3e50;
        }

        .content {
            margin-left: 240px;
            padding: 20px;
        }

        .payment-card {
            max-width: 450px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: slideIn 1s ease;
        }

        @keyframes slideIn {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .payment-card h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control,
        .form-select {
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #8e44ad;
            box-shadow: 0 0 10px rgba(142, 68, 173, 0.2);
        }

        .btn-primary {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            border: none;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #8e44ad, #3498db);
            transform: scale(1.05);
        }

        #installmentDetails {
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.5s ease, opacity 0.5s ease;
            opacity: 0;
        }

        #installmentDetails.show {
            max-height: 500px;
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="menu">
            <li><a href="../user/user_page.php">ข้อมูลส่วนตัวนักศึกษา</a></li>
            <li><a href="../user/user_page3.php">วิชา</a></li>
            <li><a href="../user/user_payment.php">ชำระค่าเทอม</a></li>
            <li><a href="../user/user_page4.php">สถิติการมาเรียน</a></li>
            <li><a href="../logout.php">ออกจากระบบ</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="payment-card">
            <h3>ชำระค่าเทอม</h3>
            <form id="paymentForm">
                <div class="mb-3">
                    <label for="studentId" class="form-label">รหัสประจำตัวนักศึกษา</label>
                    <input type="text" class="form-control" id="studentId" placeholder="กรอกรหัสนักศึกษา" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">ชื่อ-นามสกุล</label>
                    <input type="text" class="form-control" id="name" placeholder="กรอกชื่อ-นามสกุล" required>
                </div>
                <div class="mb-3">
                    <label for="department" class="form-label">แผนกวิชา</label>
                    <select class="form-select" id="department" required>
                        <option value="" disabled selected>เลือกแผนกวิชา</option>
                        <option value="ช่างยนต์">ช่างยนต์</option>
                        <option value="ช่างไฟฟ้า">ช่างไฟฟ้า</option>
                        <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">ชั้นปี</label>
                    <select class="form-select" id="year" required>
                        <option value="" disabled selected>เลือกชั้นปี</option>
                        <option value="ปวช 1">ปวช 1</option>
                        <option value="ปวช 2">ปวช 2</option>
                        <option value="ปวช 3">ปวช 3</option>
                        <option value="ปวส 1">ปวส 1</option>
                        <option value="ปวส 2">ปวส 2</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="term" class="form-label">เทอม</label>
                    <select class="form-select" id="term" required>
                        <option value="" disabled selected>เลือกเทอม</option>
                        <option value="เทอม 1">เทอม 1</option>
                        <option value="เทอม 2">เทอม 2</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="paymentOption" class="form-label">ตัวเลือกการชำระเงิน</label>
                    <select class="form-select" id="paymentOption" required>
                        <option value="" disabled selected>เลือกตัวเลือก</option>
                        <option value="full">ชำระเต็มจำนวน</option>
                        <option value="installment">ผ่อนผันค่าใช้จ่าย</option>
                    </select>
                </div>
                <div id="installmentDetails">
                    <div class="mb-3">
                        <label for="installmentAmount" class="form-label">จำนวนเงินที่ต้องการผ่อน (บาท)</label>
                        <input type="number" class="form-control" id="installmentAmount" placeholder="กรอกจำนวนเงิน">
                    </div>
                    <div class="mb-3">
                        <label for="installmentPeriod" class="form-label">ระยะเวลาการผ่อน (เดือน)</label>
                        <input type="number" class="form-control" id="installmentPeriod" placeholder="กรอกจำนวนเดือน">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="upload" class="form-label">อัปโหลดหลักฐานการชำระเงิน</label>
                    <input type="file" class="form-control" id="upload" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">ยืนยันการชำระเงิน</button>
            </form>
        </div>
    </div>

    <script>
        const paymentOption = document.getElementById('paymentOption');
        const installmentDetails = document.getElementById('installmentDetails');

        paymentOption.addEventListener('change', () => {
            if (paymentOption.value === 'installment') {
                installmentDetails.classList.add('show');
            } else {
                installmentDetails.classList.remove('show');
            }
        });

        document.getElementById('paymentForm').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('การชำระเงินสำเร็จ!');
        });
    </script>
</body>

</html>