<?php

class dataKostAdmin_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }