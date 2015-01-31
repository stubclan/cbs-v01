<?php

namespace University\Model;

use Zend\Db\TableGateway\TableGateway;

class UniversityTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getUniversity($id)
    {
        $id = (int)$id;
        $rowset = $this->tableGateway->select(array('university_id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function saveUniversity(University $university)
    {
        $data = array(
            'university_name' => $university->university_name,
            'last_accessed' => $university->last_accessed,
        );

        $id = (int)$university->university_id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getUniversity($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('University id does not exist');
            }
        }
    }

    public function deleteUniversity($id)
    {
        $this->tableGateway->delete(array('university_id' => (int)$id));
    }
}