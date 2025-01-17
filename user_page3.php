<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #f0f2f5;
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
            width: 200px;
            background-color: #2c3e50;
            color: #fff;
            padding: 20px;
            min-height: 100vh;
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
            transition: background-color 0.3s ease;
        }

        .sidebar .menu li a:hover {
            background-color: #34495e;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            animation: fadeInContent 1s ease;
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

        .subject-card {
            background-color: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .subject-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .subject-card h3 {
            margin: 0 0 10px;
        }

        .subject-card p {
            margin: 0;
        }

        .subject-card + .subject-card {
            margin-top: 15px;
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
        <h1>รายวิชา</h1>

        <div class="subject-card">
            <h3>Mathematics</h3>
            <p>Instructor: Dr. John Doe</p>
            <p>Schedule: Monday & Wednesday, 9:00 AM - 11:00 AM</p>
        </div>

        <div class="subject-card">
            <h3>Physics</h3>
            <p>Instructor: Dr. Jane Smith</p>
            <p>Schedule: Tuesday & Thursday, 10:00 AM - 12:00 PM</p>
        </div>

        <div class="subject-card">
            <h3>Computer Science</h3>
            <p>Instructor: Prof. Alan Turing</p>
            <p>Schedule: Friday, 1:00 PM - 4:00 PM</p>
        </div>

        <div class="subject-card">
            <h3>Chemistry</h3>
            <p>Instructor: Dr. Marie Curie</p>
            <p>Schedule: Wednesday, 2:00 PM - 5:00 PM</p>
        </div>
    </div>
</body>
</html>