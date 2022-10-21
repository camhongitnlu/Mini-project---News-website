<?php
class NewsModel extends Database
{
    function getNewest()
    {
        $qr = "SELECT * FROM news order by id desc limit 0,1";
        $result = $this->conn->query($qr);
        return $result->fetch_array();
    }

    function get_hot_news()
    {
        $list = [];
        $qr = "SELECT * FROM news order by id desc limit 1,8";
        $result = $this->conn->query($qr);
        while ($data = $result->fetch_array())
            $list[] = $data;
        return $list;
    }
    function get_new_by_cat_id($id)
    {
        $list = [];
        $qr = "SELECT * FROM news n join sub_category sub on n.subCategoryId=sub.sub_id join category cat on sub.categoryId=cat.cat_id where sub.categoryId=$id";
        $result = $this->conn->query($qr);
        while ($data = $result->fetch_array())
            $list[] = $data;
        return $list;
    }
    function get_six_new_by_cat_id($id)
    {
        $list = [];
        $qr = "SELECT * FROM news n join sub_category sub on n.subCategoryId=sub.sub_id join category cat on sub.categoryId=cat.cat_id where sub.categoryId=$id order by n.id desc limit 0,6";
        $result = $this->conn->query($qr);
        while ($data = $result->fetch_array())
            $list[] = $data;
        return $list;
    }
    function get_new_by_id($id)
    {
        $qr = "SELECT * FROM news n join sub_category sub on n.subCategoryId=sub.sub_id where n.id=$id";
        $result = $this->conn->query($qr);
        return $result->fetch_array();
    }
    function get_new_by_name($name)
    {
        $list = [];
        $qr = "SELECT * FROM news where title like '%$name%'";
        $result = $this->conn->query($qr);
        while ($data = $result->fetch_array())
            $list[] = $data;
        return $list;
    }
}
