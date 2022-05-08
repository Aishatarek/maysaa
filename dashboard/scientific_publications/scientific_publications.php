<?php
class SP
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function addSP($title, $description, $link, $publication_date)
    {
        if (isset($title) && isset($description) && isset($link) && isset($publication_date)) {
            $this->db->con->query("INSERT INTO scientific_publications(title,description,link,publication_date) VALUES($title,$description,$link,$publication_date)");
        }
    }
    public function getData()
    {
        $result = $this->db->con->query("SELECT * FROM scientific_publications");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function getLimitedData()
    {
        $result = $this->db->con->query("SELECT * FROM scientific_publications ORDER BY id ASC LIMIT 3");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function deleteSP($item_id = null)
    {
        if ($item_id != null) {
            $result = $this->db->con->query("DELETE FROM scientific_publications WHERE id={$item_id}");
            return $result;
        }
    }
    public function updateSP($item_id = null, $title, $description, $link, $publication_date)
    {
        if ($item_id != null) {
            if($publication_date!="'1970-01-01'"){
                $this->db->con->query("UPDATE scientific_publications SET title={$title},description={$description}, link={$link}, publication_date={$publication_date} WHERE id={$item_id}");
            }else{
                $this->db->con->query("UPDATE scientific_publications SET title={$title},description={$description}, link={$link} WHERE id={$item_id}");

            }
        }
    }
}
