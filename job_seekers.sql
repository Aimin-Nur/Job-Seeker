-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 22 Nov 2023 pada 22.44
-- Versi server: 8.1.0
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_seekers`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job`
--

CREATE TABLE `job` (
  `id` int NOT NULL,
  `job` varchar(250) DEFAULT NULL,
  `desc_job` varchar(250) DEFAULT NULL,
  `kategori` varchar(250) DEFAULT NULL,
  `gaji` varchar(250) DEFAULT NULL,
  `company` varchar(250) DEFAULT NULL,
  `tersedia` varchar(250) DEFAULT NULL,
  `email_company` varchar(250) DEFAULT NULL,
  `kontak_company` varchar(250) DEFAULT NULL,
  `logo_company` varchar(250) DEFAULT NULL,
  `soft_skill` varchar(250) DEFAULT NULL,
  `hard_skill` varchar(250) DEFAULT NULL,
  `desc_company` varchar(250) DEFAULT NULL,
  `lokasi` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `job`
--

INSERT INTO `job` (`id`, `job`, `desc_job`, `kategori`, `gaji`, `company`, `tersedia`, `email_company`, `kontak_company`, `logo_company`, `soft_skill`, `hard_skill`, `desc_company`, `lokasi`) VALUES
(1, 'Mobile Developer', 'Mengembangkan tampilan antarmuka aplikasi menggunakan bahasa pemrograman agar aplikasi mendukung segala macam smartphone. Merawat dan melakukan perubahan secara berkala agar fungsionalitas aplikasi dapat berjalan sebagaimana mestinya.', 'Remote', '9 - 13 Juta Rupiah', 'ICT Kalla Group', '2 lowongan', 'kallagroupict@gmail.com', '+62 212-321-498', 'kalla.jpeg', 'Dapat berkomunikasi dengan baik dengan anggota tim, klien, dan pengguna akhir.\nMenjelaskan ide, masalah, dan solusi dengan jelas.\n- Mengelola waktu dengan baik untuk memenuhi tenggat waktu proyek.\n\n\n', 'Kemampuan yang kuat dalam bahasa pemrograman seperti Kotlin (Android) atau Swift (iOS).,\nPengalaman menggunakan database mobile seperti SQLite atau Realm.', 'KALLA sebagai Grup Perusahaan telah melalui perjalanan panjang dalam berkontribusi pada pembangunan dan ekonomi masyarakat khususnya di wilayah Timur Indonesia. Selama lebih dari 70 tahun berdiri, Kontribusi kami kini menjangkau berbagai sektor.\r\n', 'Makassar, Sulsel'),
(2, 'Full Stack Developer', 'Profesional pengembang perangkat lunak yang memiliki pemahaman dan keterampilan dalam pengembangan perangkat lunak baik di sisi klien (frontend) maupun di sisi server (backend)', 'Freelance', '10 - 15 Juta Rupiah', 'ICT Kalla Group', '1 Lowongan', 'kallagroupict@gmail.com', '+62 7631-839-234', 'kalla.jpeg', 'Kemampuan Berkomunikasi dengan baik.\n- Kemampuan Kolaborasi serta kerja sama tim.\n- Problem Solving.\n- Kemampuan Manajemen Waktu.\n', 'Penguasaan Bahasa Pemrograman Javascript dan bahasa pemrograman lainnya., Kemampuan menggunakan teknologi pengembangan webiste secara native ataupun framework., Database Management., Pengusaan Penggunaan API\n', 'KALLA sebagai Grup Perusahaan telah melalui perjalanan panjang dalam berkontribusi pada pembangunan dan ekonomi masyarakat khususnya di wilayah Timur Indonesia. Selama lebih dari 70 tahun berdiri.', 'Makassar, Sulsel'),
(3, 'Human Resource ', 'Seorang profesional di bidang Sumber Daya Manusia (Human Resource atau HR) memiliki tanggung jawab utama dalam mengelola aspek-aspek yang berkaitan dengan tenaga kerja dan pengelolaan sumber daya manusia di suatu organisasi.', 'Pekerja Tetap', '7 - 9 Juta Rupiah', 'Pertamina Persero', '1 Lowongan', 'pertaminaperseor@gmail.com', '+62 45768-8392-123', 'pertamina.webp', 'Berkomunikasi dengan jelas dan efektif dengan karyawan dan manajemen.\n- Memahami dan merespons kebutuhan serta perasaan karyawan.\n- \nKemampuan untuk bernegosiasi dalam hal rekrutmen, tunjangan, dan penyelesaian konflik.', 'Mengelola proses perekrutan dari awal hingga akhir., Menyusun dan mengevaluasi kriteria seleksi untuk memilih kandidat yang sesuai., Mengelola siklus penilaian kinerja karyawan.\n', 'PT Pertamina (Persero) adalah sebuah badan usaha milik negara Indonesia yang terutama bergerak di bidang minyak dan gas. Untuk menjalankan bisnis utamanya, perusahaan ini memiliki enam subholding yang masing-masing bergerak di bidang minyak.', 'Makassar, Sulsel'),
(4, 'Kepala Lab Fakultas MIPA Unhas', 'Kepala Laboratorium Sistem Informasi memiliki peran yang kritis dalam mengelola operasional laboratorium serta memberikan bimbingan dan koordinasi untuk proyek-proyek atau kegiatan riset yang dilakukan di dalamnya', 'Pekerja Tetap', '5 - 6 Juta Rupiah', 'Universitas Hasanuddin', '1 Lowongan', 'labsisfo@gmail.com', '+62 878-1236-4164', 'unhas.jpeg', '- Kemampuan Manajemen Tim\r\n- Kemampuan Problem Solving', 'Manajemen Operasional., Koordinasi Proyek', 'Universitas Hasanuddin, yang kemudian disingkat Unhas, merupakan sebuah perguruan tinggi negeri di kota Makassar, Provinsi Sulawesi, Indonesia, yang berdiri pada 10 September 1956. ', 'Makassar, Sulsel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Muhaimin Nur', 'aiminnur02@gmail.com', NULL, '$2y$10$LjgOlEWekYTfTR1miZDN9OPWTtA6PA/4Q48Vn0JQVN8ofx7X7z02e', NULL, NULL, NULL, 'User'),
(2, 'Master Admin', 'admin@gmail.com', NULL, '$2y$10$LjgOlEWekYTfTR1miZDN9OPWTtA6PA/4Q48Vn0JQVN8ofx7X7z02e', NULL, NULL, NULL, 'Admin\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `job`
--
ALTER TABLE `job`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
