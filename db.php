<?php
// ==========================================
// Disinest - ডেটাবেজ কানেকশন ফাইল (db.php)
// ==========================================

// ✅ হোস্টিং এর ডেটাবেজ তথ্য নিচে বসাও
$host     = "localhost";         // লাইভ হোস্টিং-এ সাধারণত 'localhost'
$username = "your_db_username"; // 🔁 এখানে তোমার ডেটাবেজ ইউজারনেম দাও
$password = "your_db_password"; // 🔁 এখানে তোমার ডেটাবেজ পাসওয়ার্ড দাও
$database = "your_db_name";     // 🔁 এখানে তোমার ডেটাবেজ নাম বসাও

// ✅ ডেটাবেজ কানেকশন তৈরি করা
$conn = new mysqli($host, $username, $password, $database);

// ✅ কানেকশন সফল না হলে error দেখাও
if ($conn->connect_error) {
    die("❌ ডেটাবেজ কানেক্ট হয়নি: " . $conn->connect_error);
}

// ✅ বাংলা লেখা বা UTF-8 এর জন্য charset সেট করো
$conn->set_charset("utf8");

// ✅ সফলভাবে কানেকশন হলে কিছু দেখানো লাগবে না
// echo "✅ ডেটাবেজ কানেক্ট সফল হয়েছে!";
?>
