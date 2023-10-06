<?php
class tacgiaServicers {
    public function getAlltacgia() {
        try {
            $conn = new PDO('mysql:host=BTH3;dbname=quanly', 'root', 'Haohao280423@');
            $sql = "SELECT * FROM baihat";
            $stmt = $conn->query($sql);

            $tacgias = []; // Đổi tên biến này thành $tacgias

            while ($row = $stmt->fetch()) {
                $tacgia = new tacgia($row['id'], $row['tenTacGia']);
                $tacgias[] = $tacgia; // Thêm $tacgiavào mảng $tacgias
            }

            return $tacgias;

        } catch (PDOException $e) {
            return $tacgia = [];
            // echo $e->getMessage();
        }
    }
}