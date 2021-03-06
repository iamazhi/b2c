<?php
class secondhandModel extends model
{
    public function getList($params)
    {
        if(!$params) return array();

        foreach($params as $key => $value) $params[$key] = "`$key`=$value";
        $where = implode(' and ', $params);
        $data = $this->dao->select("*")->from(TABLE_SECONDHAND)->where($where)->fetchAll('id');
        return $data;
    }
}
