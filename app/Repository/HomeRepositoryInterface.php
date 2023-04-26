<?php

    namespace App\Repository;

    interface HomeRepositoryInterface
    {
        public function getAllViews();
        public function insert($data);
        public function update($data);
        public function delete(int $id);
    }
