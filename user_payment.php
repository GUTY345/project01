<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค่าหน่วยกิต</title>
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

        .content {
            padding: 20px;
            max-width: 900px;
            margin-left: 300px;
        }

        @keyframes fadeInContent {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            margin-bottom: 20px;
            animation: fadeInContent 1s ease;
        }

        .btn-pay {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            color: #fff;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-pay:hover {
            background: linear-gradient(45deg, #8e44ad, #3498db);
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
    </style>
</head>

<body>
<div class="sidebar">
        <ul class="menu">
            <li><a href="../user/user_page.php">ข้อมูลส่วนตัวนักศึกษา</a></li>
            <li><a href="../user/user_page3.php">วิชา</a></li>
            <li><a href="../user/user_payment.php">ชำระค่าเทอม</a></li>
            <li><a href="../user/user_page4.php">สถิติการมาเรียน</a></li>
            <li><a href="../logout.php">ออกจากระบบ</a></li>
        </ul>
    </div>

    <div class="content">
        <h1 class="text-center mb-4">ค่าหน่วยกิต</h1>

        <div class="mb-3">
            <label for="termSelect" class="form-label">เลือกเทอม</label>
            <select class="form-select" id="termSelect">
                <option value="term1" selected>เทอม 1</option>
                <option value="term2">เทอม 2</option>
            </select>
        </div>

        <div id="term1" class="term">
            <h3>เทอม 1</h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">วิชา: คณิตศาสตร์</h5>
                    <p class="card-text">หน่วยกิต: 3</p>
                    <p class="card-text">ค่าหน่วยกิต: 3,000 บาท</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">วิชา: ภาษาอังกฤษ</h5>
                    <p class="card-text">หน่วยกิต: 2</p>
                    <p class="card-text">ค่าหน่วยกิต: 2,000 บาท</p>
                </div>
            </div>
            <a href="../user/user_page2.php" class="btn btn-pay w-100">ชำระเงินเทอม 1 (รวม 5,000 บาท)</a>
        </div>

        <div id="term2" class="term d-none">
            <h3>เทอม 2</h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">วิชา: ฟิสิกส์</h5>
                    <p class="card-text">หน่วยกิต: 3</p>
                    <p class="card-text">ค่าหน่วยกิต: 3,000 บาท</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">วิชา: เคมี</h5>
                    <p class="card-text">หน่วยกิต: 2</p>
                    <p class="card-text">ค่าหน่วยกิต: 2,000 บาท</p>
                </div>
            </div>
            <a href="../user/user_page2.php" class="btn btn-pay w-100">ชำระเงินเทอม 2 (รวม 5,000 บาท)</a>
        </div>
    </div>

    <script>
        const termSelect = document.getElementById('termSelect');
        const terms = document.querySelectorAll('.term');

        termSelect.addEventListener('change', () => {
            terms.forEach(term => term.classList.add('d-none'));
            document.getElementById(termSelect.value).classList.remove('d-none');
        });
    </script>
</body>

</html>
