
CREATE TABLE IF NOT EXISTS Sach (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tenSach VARCHAR(255),
    namXuatBan INT,
    idTacGia INT,
    FOREIGN KEY (idTacGia) REFERENCES TacGia(id)
);