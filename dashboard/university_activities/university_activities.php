<?php
class UA
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function addUA($title, $description, $image, $image2, $image3, $image4, $image5, $publication_date)
    {
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
                    if (file_exists("../../uploads/UA/" . $filename)) {
                        echo $filename . " is already exists.";
                    } else {
                        $result = move_uploaded_file($imgg["tmp_name"], "../../uploads/UA/" . $filename);
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
        if (!empty($image2['name'])) {
            $image2 = img($image2);
        } else {
            $image2 = "NULL";
        }
        if (!empty($image3['name'])) {
            $image3 = img($image3);
        } else {
            $image3 = "NULL";
        }
        if (!empty($image4['name'])) {
            $image4 = img($image4);
        } else {
            $image4 = "NULL";
        }
        if (!empty($image5['name'])) {
            $image5 = img($image5);
        } else {
            $image5 = "NULL";
        }

        if (isset($title) && isset($description) && isset($image) && isset($publication_date)) {
            echo $image2 . $image3 . $image4 . $image5;
            $this->db->con->query("INSERT INTO university_activities(title,description,image,image2,image3,image4,image5,publication_date) VALUES($title,$description,$image,$image2,$image3,$image4,$image5,$publication_date)");
        }
    }
    public function getData()
    {
        $resultt = $this->db->con->query("SELECT * FROM university_activities");
        $limit = 5;
        $total_rows = mysqli_num_rows($resultt);
        $total_pages = ceil($total_rows / $limit);
        if (!isset($_GET['page'])) {
            $page_number = 1;
        } else {
            $page_number = $_GET['page'];
        }
        $initial_page = ($page_number-1) * $limit;   
        $result = $this->db->con->query("SELECT *FROM university_activities LIMIT " . $initial_page . ',' . $limit);  
        return [$result, $total_pages];
    }
    public function getAllData()
    {
        $result = $this->db->con->query("SELECT * FROM university_activities ");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function deleteUA($item_id = null)
    {
        if ($item_id != null) {
            $result = $this->db->con->query("DELETE FROM university_activities WHERE id={$item_id}");
            return $result;
        }
    }
    public function updateUA($item_id = null, $title, $description, $image, $image2, $image3, $image4, $image5, $publication_date)
    {
        function imgg($imgg)
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
                    if (file_exists("../../uploads/UA/" . $filename)) {
                        echo $filename . " is already exists.";
                    } else {
                        $result = move_uploaded_file($imgg["tmp_name"], "../../uploads/UA/" . $filename);
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
        if ($item_id != null) {
            if ($publication_date != "'1970-01-01'") {
                $this->db->con->query("UPDATE university_activities SET title={$title},description={$description},publication_date={$publication_date} WHERE id={$item_id}");
            }
            if (!empty($image['name'])) {
                $image = imgg($image);
                $this->db->con->query("UPDATE university_activities SET title={$title},description={$description}, image={$image} WHERE id={$item_id}");
            }
            if (!empty($image2['name'])) {
                $image2 = imgg($image2);
                $this->db->con->query("UPDATE university_activities SET title={$title},description={$description}, image2={$image2} WHERE id={$item_id}");
            }
            if (!empty($image3['name'])) {
                $image3 = imgg($image3);
                $this->db->con->query("UPDATE university_activities SET title={$title},description={$description}, image3={$image3} WHERE id={$item_id}");
            }
            if (!empty($image4['name'])) {
                $image4 = imgg($image4);
                $this->db->con->query("UPDATE university_activities SET title={$title},description={$description}, image4={$image4} WHERE id={$item_id}");
            }
            if (!empty($image5['name'])) {
                $image5 = imgg($image5);
                $this->db->con->query("UPDATE university_activities SET title={$title},description={$description}, image5={$image5} WHERE id={$item_id}");
            }
        }
    }
}
