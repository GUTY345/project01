<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            background-color: var(--background-color, #f0f2f5);
            color: var(--text-color, #333);
            transition: background-color 0.3s ease, color 0.3s ease;
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

        .profile-card {
            background-color: var(--card-bg, #fff);
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 300%;
            margin-left: 32px;
        }

        .profile-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .profile-card h4 {
            margin: 5px 0;
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-header img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 20px;
            transition: transform 0.3s ease;
        }

        .profile-header img:hover {
            transform: scale(1.1);
        }

        .theme-toggle {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .theme-toggle:hover {
            background-color: #0056b3;
            transform: scale(1.05);
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
        <div class="profile-card">
            <div class="profile-header">
                <div>
                    <h2 id="userName">Loading...</h2>
                    <p id="userBio">Loading...</p>
                </div>
            </div>

            <div style="margin-top: 90px;">
                <h4>รหัสบัตรประชาชน: </h4><br>
                <h4>คณะ: </h4><br>
                <h4>ชั้นปี: </h4><br>
                <h4>วัน/เดือน/ปีเกิด: </h4><br>
                <h4>อายุ: </h4><br>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const profileData = {
                name: 'Mathachai',
                bio: 'Student at ABC University',
                id: '123456789',
                id_student: '123456789',
                department: 'Computer Science',
                year: '2',
                dob: '2002-10-03',
                age: '22'
            };

            document.getElementById('userName').textContent = profileData.name;
            document.getElementById('userBio').textContent = profileData.bio;
            const details = `
                <h4>รหัสประจำตัวนักศึกษา: ${profileData.id_student}</h4><br>
                <h4>รหัสบัตรประชาชน: ${profileData.id}</h4><br>
                <h4>คณะ: ${profileData.department}</h4><br>
                <h4>ชั้นปี: ${profileData.year}</h4><br>
                <h4>วัน/เดือน/ปีเกิด: ${profileData.dob}</h4><br>
                <h4>อายุ: ${profileData.age}</h4>
            `;
            document.querySelector('.profile-card div:nth-child(2)').innerHTML = details;
        });
    </script>
</body>
</html>