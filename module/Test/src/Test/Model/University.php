<?php

namespace Testing\Model;

class University
{
public $university_id;
public $last_accessed;
public $university_name;

public function exchangeArray($data)
{
$this->university_id    = (!empty($data['university_id'])) ? $data['university_id'] : null;
$this->university_name = (!empty($data['university_name'])) ? $data['university_name'] : null;
$this->last_accessed  = (!empty($data['last_accessed'])) ? $data['last_accessed'] : null;
}
}