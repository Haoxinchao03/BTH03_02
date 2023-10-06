<?php
class sachServicers{
    public function getAllSach() {
        try {
            $conn = new PDO('mysql:host=BTH3;dbname=qlbh', 'root', 'Haohao280423@');
            $sql = "SELECT * FROM sach";
            $stmt = $conn->query($sql);

            $sachs = []; // Đổi tên biến này thành $sachs

            while ($row = $stmt->fetch()) {
                $sach = new sach($row['id'], $row['tensach'], $row['namXuatBan'], $row['idTacGia']);
                $sachs[] = $sach; // Thêm $sach vào mảng $sachs
            }

            return $sachs;

        } catch (PDOException $e) {
            return $sach = [];
            // echo $e->getMessage();
        }
    }
}