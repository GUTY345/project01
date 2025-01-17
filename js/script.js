// Toggle theme functionality
document.getElementById('themeToggle').addEventListener('click', function () {
    const body = document.body;
    if (!body.dataset.theme || body.dataset.theme === 'light') {
        body.dataset.theme = 'dark';
        document.documentElement.style.setProperty('--background-color', '#181818');
        document.documentElement.style.setProperty('--text-color', '#f0f0f0');
        document.documentElement.style.setProperty('--card-bg', '#242424');
        document.documentElement.style.setProperty('--sidebar-bg', '#121212');
        this.textContent = 'เปลี่ยน Light Mode';
    } else {
        body.dataset.theme = 'light';
        document.documentElement.style.setProperty('--background-color', '#f0f2f5');
        document.documentElement.style.setProperty('--text-color', '#333');
        document.documentElement.style.setProperty('--card-bg', '#fff');
        document.documentElement.style.setProperty('--sidebar-bg', '#007bff');
        this.textContent = 'เปลี่ยน Dark Mode';
    }
});

// Example: Loading data into the profile card
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