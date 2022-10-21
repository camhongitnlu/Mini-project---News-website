<?php
class SubCategoryModel extends Database
{
    function get_sub_by_cat_id($id)
    {
        $list = [];
        $qr = "SELECT * FROM sub_category where categoryId=$id";
        $result = $this->conn->query($qr);
        while ($data = $result->fetch_array())
            $list[] = $data;
        return $list;
    }

}
