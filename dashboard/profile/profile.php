<?php
class Profile
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function getData()
    {
        $result = $this->db->con->query("SELECT * FROM theprofile");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function updateProfile($item_id = null, $avatar, $cv)
    {
        if ($item_id != null) {
            if ($avatar['name']) {
                function img($imgg)
                {
                    if (isset($imgg) && $imgg["error"] == 0) {
                        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                        $filename = rand(0, 1000) . $imgg["name"];
                        $filetype = $imgg["type"];
                        $filesize = $imgg["size"];
                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                        $maxsize = 5 * 1024 * 1024;
                        if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                        if (in_array($filetype, $allowed)) {
                            if (file_exists("../../uploads/profile/" . $filename)) {
                                echo $filename . " is already exists.";
                            } else {
                                $result = move_uploaded_file($imgg["tmp_name"], "../../uploads/profile/" . $filename);
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
                $avatar = img($avatar);
                $this->db->con->query("UPDATE theprofile SET avatar={$avatar} WHERE id={$item_id}");
            }
            if ($cv['name']) {
                function CV($cvv)
                {
                    if (isset($cvv) && $cvv["error"] == 0) {
                        $allowed = array("pdf" => "application/pdf");
                        $filename = rand(0, 1000) . $cvv["name"];
                        $filetype = $cvv["type"];
                        $filesize = $cvv["size"];
                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                        $maxsize = 5 * 1024 * 1024;
                        if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                        if (in_array($filetype, $allowed)) {
                            if (file_exists("../../uploads/profile/" . $filename)) {
                                echo $filename . " is already exists.";
                            } else {
                                $result = move_uploaded_file($cvv["tmp_name"], "../../uploads/profile/" . $filename);
                            }
                        } else {
                            echo "Error: There was a problem uploading your file. Please try again.";
                        }
                        if ($result) {
                            return "'" . $filename . "'";
                        } else {
                            echo "Error: " . $cvv["error"];
                        }
                    }
                }
                $cv = CV($cv);
                $this->db->con->query("UPDATE theprofile SET cv={$cv} WHERE id={$item_id}");
            }
        }
    }
}
