<?php
include 'config.php';

// 1. Scan Gambar directory
$dir = __DIR__ . '/Gambar';
if (!is_dir($dir)) {
    die("Directory 'Gambar' not found.\n");
}

$files = scandir($dir);
$updates = 0;

echo "Scanning directory: $dir\n";

// Map of lowercase filename (no ext) -> full filename
$fileMap = [];
foreach ($files as $file) {
    if ($file === '.' || $file === '..') continue;
    $info = pathinfo($file);
    if (isset($info['filename'])) {
        $lowerName = strtolower($info['filename']);
        $fileMap[$lowerName] = $file;
    }
}

// Fetch all students
$result = $conn->query("SELECT id, name, photo FROM students");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $studentName = $row['name'];
        $studentId = $row['id'];
        $currentPhoto = $row['photo'];
        
        // If already has a valid photo, skip (optional, but let's overwrite to ensure correctness if requested)
        // The user asked to "masukin langsung foto dari folder", so we should try to match even if set.
        
        $lowerName = strtolower($studentName);
        
        // Try to find match
        $foundFile = null;
        
        // 1. Exact match in map
        if (isset($fileMap[$lowerName])) {
            $foundFile = $fileMap[$lowerName];
        } 
        // 2. Try matching first word (e.g. "Aditya" for "Muhamad Aditya Nurojab") - risky but maybe useful?
        // Let's stick to full name match or partial match if safe.
        // User said "disesuaiin sama nama dari Gambar", implying the image name matches the student name.
        // Let's try to match if the image name is contained in the student name or vice versa?
        // For now, let's stick to the robust case-insensitive full name match which was the main issue.
        
        // Special case: Check if any file in map is a substring of student name or vice versa
        if (!$foundFile) {
            foreach ($fileMap as $key => $val) {
                // If file name is "Aditya" and student is "Muhamad Aditya", this might be a match?
                // But "Aditya" is common. Let's be careful.
                // Let's try: if the file name (key) is contained in the student name
                if (strpos($lowerName, $key) !== false && strlen($key) > 3) {
                     // Potential match
                     // echo "Potential match: $val for $studentName\n";
                     // Let's use it if it's a strong match? 
                     // For now, let's just do the direct case-insensitive match as planned.
                }
            }
        }

        if ($foundFile) {
            // Only update if different
            if ($currentPhoto !== $foundFile) {
                $stmt = $conn->prepare("UPDATE students SET photo = ? WHERE id = ?");
                $stmt->bind_param("si", $foundFile, $studentId);
                if ($stmt->execute()) {
                    echo "Updated student '$studentName' with photo '$foundFile'\n";
                    $updates++;
                } else {
                    echo "Failed to update student '$studentName': " . $conn->error . "\n";
                }
            } else {
                echo "Student '$studentName' already has correct photo '$foundFile'\n";
            }
        } else {
            echo "No photo found for student '$studentName'\n";
        }
    }
}

echo "Migration v2 completed. Total updates: $updates\n";
?>
