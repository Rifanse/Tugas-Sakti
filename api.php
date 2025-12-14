<?php
include 'config.php';

header('Content-Type: application/json');

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'get_all':
        $sql = "SELECT * FROM students ORDER BY id DESC";
        $result = $conn->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        echo json_encode(['data' => $data]);
        break;

    case 'get_one':
        $id = $_POST['id'];
        $sql = "SELECT * FROM students WHERE id = $id";
        $result = $conn->query($sql);
        echo json_encode($result->fetch_assoc());
        break;

    case 'create':
        $name = $_POST['name'];
        $address = $_POST['address'];
        $hobby = $_POST['hobby'];
        $ambition = $_POST['ambition'];
        $birth_date = $_POST['birth_date'];
        $birth_place = $_POST['birth_place'];
        $photo = null;

        // Handle file upload
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
            $target_dir = "Gambar/";
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            
            $file_extension = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
            $new_filename = $name . '.' . $file_extension;
            $target_file = $target_dir . $new_filename;
            
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $photo = $new_filename;
            }
        }

        $stmt = $conn->prepare("INSERT INTO students (name, address, hobby, ambition, birth_date, birth_place, photo) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $address, $hobby, $ambition, $birth_date, $birth_place, $photo);
        
        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Data added successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to add data']);
        }
        break;

    case 'update':
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $hobby = $_POST['hobby'];
        $ambition = $_POST['ambition'];
        $birth_date = $_POST['birth_date'];
        $birth_place = $_POST['birth_place'];

        // Handle file upload
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
            $target_dir = "Gambar/";
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            
            $file_extension = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
            $new_filename = $name . '.' . $file_extension; // Rename file to student name
            $target_file = $target_dir . $new_filename;
            
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                $photo = $new_filename;
                // Update with photo
                $stmt = $conn->prepare("UPDATE students SET name=?, address=?, hobby=?, ambition=?, birth_date=?, birth_place=?, photo=? WHERE id=?");
                $stmt->bind_param("sssssssi", $name, $address, $hobby, $ambition, $birth_date, $birth_place, $photo, $id);
            } else {
                // Update without photo if upload failed (should handle error better but keeping simple)
                $stmt = $conn->prepare("UPDATE students SET name=?, address=?, hobby=?, ambition=?, birth_date=?, birth_place=? WHERE id=?");
                $stmt->bind_param("ssssssi", $name, $address, $hobby, $ambition, $birth_date, $birth_place, $id);
            }
        } else {
            // Update without changing photo
            $stmt = $conn->prepare("UPDATE students SET name=?, address=?, hobby=?, ambition=?, birth_date=?, birth_place=? WHERE id=?");
            $stmt->bind_param("ssssssi", $name, $address, $hobby, $ambition, $birth_date, $birth_place, $id);
        }

        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Data updated successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update data']);
        }
        break;

    case 'delete':
        $id = $_POST['id'];
        
        // Get photo filename to delete file
        $check = $conn->query("SELECT photo FROM students WHERE id=$id");
        if ($check->num_rows > 0) {
            $row = $check->fetch_assoc();
            if ($row['photo'] && file_exists("Gambar/" . $row['photo'])) {
                unlink("Gambar/" . $row['photo']);
            }
        }

        $stmt = $conn->prepare("DELETE FROM students WHERE id=?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Data deleted successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete data']);
        }
        break;

    default:
        echo json_encode(['status' => 'error', 'message' => 'Invalid action']);
        break;
}
?>
