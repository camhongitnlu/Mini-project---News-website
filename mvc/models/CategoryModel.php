<?php
class CategoryModel extends Database
{
    function get_all_cat()
    {
        $list = [];
        $qr = "SELECT * FROM category";
        $result = $this->conn->query($qr);
        while ($data = $result->fetch_array())
            $list[] = $data;
        return $list;
    }

    function get_name_cat($id)
    {
        $qr = "SELECT name FROM category where id=$id";
        $result = $this->conn->query($qr);
        return $result->fetch_array();
    }
    
}
