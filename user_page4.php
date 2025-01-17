<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Statistics</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            color: #333;
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
            background-color: #2c3e50;
            color: #fff;
            min-height: 100vh;
            position: fixed;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            transform: translateX(-220px); /* ซ่อน Sidebar จากหน้าจอ */
            animation: slideInSidebar 0.5s forwards; /* เพิ่มแอนิเมชั่น */
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

        .header {
            text-align: center;
            margin-bottom: 30px;
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

        .header h1 {
            font-size: 28px;
            color: #2c3e50;
        }

        .statistics {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            animation: fadeIn 1s ease;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 20px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
            opacity: 0;
            animation: fadeInCard 1s ease forwards;
        }

        @keyframes fadeInCard {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin: 0;
            color: #2c3e50;
        }

        .card p {
            font-size: 18px;
            color: #555;
            margin: 10px 0 0;
        }

        .chart-container {
            margin-top: 40px;
            text-align: center;
            opacity: 0;
            animation: fadeIn 1s ease forwards;
        }

        canvas {
            max-width: 100%;
            height: auto;
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
        <div class="header">
            <h1>สถิติการเข้าเรียนและมาสาย</h1>
        </div>

        <div class="statistics">
            <div class="card">
                <h3>การเข้าชั้นเรียน</h3>
                <p>80%</p>
            </div>

            <div class="card">
                <h3>การมาสาย</h3>
                <p>15%</p>
            </div>

            <div class="card">
                <h3>การขาดเรียน</h3>
                <p>5%</p>
            </div>
        </div>

        <div class="chart-container">
            <h2>กราฟแสดงสถิติ</h2>
            <canvas id="attendanceChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('attendanceChart').getContext('2d');
        const attendanceChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['เข้าเรียน', 'มาสาย', 'ขาดเรียน'],
                datasets: [{
                    data: [80, 15, 5],
                    backgroundColor: ['#2ecc71', '#f39c12', '#e74c3c'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
    </script>
</body>

</html>