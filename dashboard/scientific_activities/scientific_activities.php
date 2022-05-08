<?php
class SA
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function addSA($title, $branch, $image)
    {
        if (isset($title) && isset($branch) && isset($image)) {
            function img($imgg)
            {
                if (isset($imgg) && $imgg["error"] == 0) {
                    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                    $filename = rand(0, 1000) . $imgg["name"];
                    $filetype = $imgg["type"];
                    $filesize = $imgg["size"];
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                    $maxsize = 5 * 1024 * 1024 * 1024;
                    if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                    if (in_array($filetype, $allowed)) {
                        if (file_exists("../../uploads/SA/" . $filename)) {
                            echo $filename . " is already exists.";
                        } else {
                            $result = move_uploaded_file($imgg["tmp_name"], "../../uploads/SA/" . $filename);
                        }
                    } else {
                        echo "Error: There was a problem uploading your file. Please try again.";
                    }
                    if ($result) {
                        return "'" . $filename . "'";
                    } else {
                        echo "Error: " . $imgg["error"];
                    }
                }
            }
            $image = img($image);
            $this->db->con->query("INSERT INTO scientific_activities(title,branch,image) VALUES($title,$branch,$image)");
        }
    }
    public function getData()
    {
        $result = $this->db->con->query("SELECT * FROM scientific_activities");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function deleteSA($item_id = null)
    {
        if ($item_id != null) {
            $result = $this->db->con->query("DELETE FROM scientific_activities WHERE id={$item_id}");
            return $result;
        }
    }
    public function updateSA($item_id = null, $title, $branch, $image)
    {
        if ($item_id != null) {
            if (!empty($image['name'])) {
                function img($imgg)
                {
                    if (isset($imgg) && $imgg["error"] == 0) {
                        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                        $filename = rand(0, 1000) . $imgg["name"];
                        $filetype = $imgg["type"];
                        $filesize = $imgg["size"];
                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                        $maxsize = 5 * 1024 * 1024 * 1024;
                        if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                        if (in_array($filetype, $allowed)) {
                            if (file_exists("../../uploads/SA/" . $filename)) {
                                echo $filename . " is already exists.";
                            } else {
                                $result = move_uploaded_file($imgg["tmp_name"], "../../uploads/SA/" . $filename);
                                echo "Your file was uploaded successfully.";
                            }
                        } else {
                            echo "Error: There was a problem uploading your file. Please try again.";
                        }
                        if ($result) {
                            return "'" . $filename . "'";
                        } else {
                            echo "Error: " . $imgg["error"];
                        }
                    }
                }
                $image = img($image);
                $this->db->con->query("UPDATE scientific_activities SET title={$title},branch={$branch},image={$image} WHERE id={$item_id}");
            } else {
                $this->db->con->query("UPDATE scientific_activities SET title={$title},branch={$branch} WHERE id={$item_id}");
            }
        }
    }
}
