<?php
// include_once "../../config/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Collect form data
      $category_code = $_POST['category_code'];
      $category_name = $_POST['category_name'];
      $sequence = $_POST['sequence'];
      $status = $_POST['status'];

      // Handle file upload
      if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
            $img_name = $_FILES['img']['name'];
            $img_tmp_name = $_FILES['img']['tmp_name'];
            $img_size = $_FILES['img']['size'];
            $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_new_name = time() . '.' . $img_ext; // Make the image name unique

            $img_upload_dir = 'uploads/categories/'; // Upload directory
            $img_upload_path = $img_upload_dir . $img_new_name;

            // Check if the file is an image
            $allowed_ext = ['jpeg', 'jpg', 'png', 'gif'];
            if (in_array($img_ext, $allowed_ext)) {
                  if (move_uploaded_file($img_tmp_name, $img_upload_path)) {
                        // Image uploaded successfully, now insert data into the database
                        $sql = "INSERT INTO category (category_code, category_name, sequence, status, category_image)
                        VALUES ('$category_code', '$category_name', '$sequence', '$status', '$img_new_name')";

                        if ($conn->query($sql) === TRUE) {
                              echo "New category added successfully";
                        } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                  } else {
                        echo "Error uploading image.";
                  }
            } else {
                  echo "Only image files (jpeg, jpg, png, gif) are allowed.";
            }
      } else {
            // If no image is uploaded, insert the category without an image
            $sql = "INSERT INTO category (category_code, category_name, sequence, status)
                VALUES ('$category_code', '$category_name', '$sequence', '$status')";

            if ($conn->query($sql) === TRUE) {
                  echo "New category added successfully";
            } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
            }
      }
}
