-- Create database if not exists
CREATE DATABASE IF NOT EXISTS student_db;
USE student_db;

-- Create table
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address TEXT,
    hobby VARCHAR(255),
    ambition VARCHAR(255),
    birth_date DATE,
    birth_place VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert data
INSERT INTO students (name, address, hobby, ambition, birth_date, birth_place) VALUES
('Pujiana', 'Desa Sukawangi', 'Memasak', 'Pengusaha Sukses', '2008-11-10', 'Majalengka'),
('Nestiana', 'Gunung Sari', 'Membaca Buku', 'CEO', '2008-12-17', 'Indramayu Pride'),
('Sifa Distiani', 'Mekarjaya', 'Memasak', 'Pengusaha, Luar Negri', '2008-10-16', 'Majalengka'),
('Elsa Nuraini', 'Desa Sukagumiwang', 'Membaca Manhwa', 'Pengusaha', '2008-04-17', 'Indramayu'),
('Zahra Alawiah', 'Jatiraga', 'Menulis', 'Jadi Orang Sukses', '2010-01-17', 'Majalengka'),
('Intania Putri Pertiwi', 'Mekarmulya', 'Menyanyi/Bernyanyi', 'Jadi Orang Sukses', '2008-12-12', 'Majalengka'),
('Mytha Mathla''ul Fazriyah', 'Desa Mekarmulya', 'Membaca', 'Hakim', '2008-06-28', 'Majalengka'),
('Atep Abdul Faqih', 'Panyingkiran', 'Membaca', 'Penulis', '2008-08-26', 'Majalengka'),
('Muhamad Ismail Ainul Yaqin', 'Mekarmulya', 'Main Game', 'Proplayer', '2008-05-11', 'Majalengka'),
('Cahaya Muhamad Reva', 'Kertawinangun', 'Menulis', 'Penulis', '2009-01-12', 'Majalengka'),
('Wina', 'Cikareo Utara', 'Nonton Dracin', 'Kuliah di UGM', '2008-06-14', 'Sumedang'),
('Maulana Ibrahim Muvik', 'Kertawinangun', 'Main Game', 'Pengusaha Sukses', '2008-12-15', 'Bandung'),
('Jihan Chaila', 'Rentang', 'Ngemil', 'Bocah Petualang', '2008-10-30', 'Majalengka'),
('Muhammad Hafid', 'Desa Biyawak', 'Baca Novel', 'Sukses', '2008-11-26', 'Majalengka'),
('Rangga Abdul Muiz', 'Jatiraga', 'Main Game', 'Pengusaha Sukses', '2009-06-26', 'Majalengka'),
('Matias Sutio Lievai', 'Gandasari', 'Belajar Hal Baru', 'Jadi Apa Aja', '2009-02-25', 'Majalengka'),
('Muhamad Amirul Zhaky', 'Sukamanah', 'Bermain Game', 'Masuk Surga Tanpa Hisab', '2008-12-11', 'Majalengka'),
('Muhamad Sa''id Nurohman', 'Balida', 'Badminton', 'All Role', '2009-04-09', 'Majalengka'),
('Muhammad Fazry', 'Kadipaten', 'Nonton Persib', 'Bos Muda', '2007-12-15', 'Sumatra Utara'),
('Ardan Hidayatusibyan', 'Ds. Biyawak Kec. Jati7 Kab. Majalengka', 'Bola Sepak', 'TNI (AD)', '2008-09-08', 'Sumedang'),
('Galih', 'Desa Biawak', 'Main Bola, Olahraga', 'Tentara', '2009-02-27', 'Majalengka'),
('Nugraha', 'Desa Lahaban', 'Main Bola-bolaan', 'CEO', '2008-12-08', 'Majalengka'),
('Akif Farhan Nurrobi', 'Ds. Biyawak Kec. Jati7 Kab. Majalengka', 'Main Game', 'Pengusaha Sukses', '2009-04-09', 'Majalengka'),
('Arif Dwi Anggara', 'Ds. Pangkalan Pari Kab. Majalengka', 'Turu', 'Pengusaha Sukses', '2009-04-20', 'Majalengka'),
('Silvia Triasfuzi', 'Kertasari', 'Make Up', 'Buka Rental Costum', '2008-07-10', 'Majalengka'),
('Reffi Riyadi', 'Ds Bantarjati, Kec Kertajati, Kab Majalengka', 'Ngonten', 'Menjadi Orang Kaya Raya', '2009-05-17', 'Majalengka'),
('Muhamad Aditya Nurojab', 'Ds. Biyawak Kec. Jati7 Kab. Majalengka', 'Fishing, Main Bola', 'Pengusaha Sukses', '2009-07-06', 'Tasikmalaya'),
('Siti Aminah Nurhasanah', 'Babakan', 'Membaca', 'Pengusaha Sukses', '2009-03-10', 'Majalengka'),
('Ardiansyah Al Akbar', 'Mekarjaya', 'Ngorek Kabel', 'Pengusaha Sukses', '2008-12-05', 'Majalengka'),
('Muhammad Rehan Ripaldi', 'Sukamulya', 'Main Game', 'Dokter Hewan', '2008-07-09', 'Majalengka'),
('Irgi Gerispian', 'Pasiripis/Buahdua', 'Main', 'Pengusaha Sukses', '2008-08-23', 'Tasikmalaya'),
('Sela Kusnul Hotimah', 'Desa Kertajati, Blok Dangdeur', 'Membaca, Menulis', 'Penulis', '2008-06-08', 'Majalengka');
