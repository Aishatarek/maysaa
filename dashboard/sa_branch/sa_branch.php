<?php
class SABranch
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function addSABranch($title)
    {
        if (isset($title)) {
            $this->db->con->query("INSERT INTO sa_branch(title) VALUES($title)");
        }
    }
    public function getData()
    {
        $result = $this->db->con->query("SELECT * FROM sa_branch");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function deleteSABranch($item_id = null)
    {
        if ($item_id != null) {
            $this->db->con->query("DELETE FROM scientific_activities WHERE branch={$item_id}");
            $this->db->con->query("DELETE FROM sa_branch WHERE id={$item_id}");
        }
    }
    public function updateSABranch($item_id = null, $title)
    {
        if ($item_id != null) {
            $this->db->con->query("UPDATE sa_branch SET title={$title} WHERE id={$item_id}");
        }
    }
}
