-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 02, 2025 lúc 07:21 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lab5_php3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '0001_01_01_000000_create_users_table', 1),
(7, '0001_01_01_000001_create_cache_table', 1),
(8, '0001_01_01_000002_create_jobs_table', 1),
(9, '2025_04_01_172353_create_tin_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8cS0cIBz3upl87vpA2lbQRFm38f0UXoKPhnyuURs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1BHTG9TczlrZXZ5R1lFdFRFZFJWT3JFUkpBWENIcXUzODFtWHhpZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1743571235);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tieuDe` varchar(500) NOT NULL,
  `tomTat` varchar(10000) NOT NULL,
  `urlHinh` varchar(255) DEFAULT NULL,
  `idLT` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin`
--

INSERT INTO `tin` (`id`, `tieuDe`, `tomTat`, `urlHinh`, `idLT`, `created_at`, `updated_at`) VALUES
(4, 'Mới: Bộ Công an đề xuất không được yêu cầu chụp ảnh căn cước để xác thực tài khoản mạng xã hội', 'ANTD.VN - Tại dự thảo Luật Bảo vệ dữ liệu cá nhân, Bộ Công an đã đề xuất quy định, không được yêu cầu chụp ảnh thẻ căn cước làm yếu tố xác thực tài khoản mạng xã hội.\r\nMới: Vi phạm quy định bảo vệ dữ liệu cá nhân sẽ bị phạt tới hàng trăm triệu đồng?\r\nBộ Công an đề xuất: Không được phép công khai dữ liệu cá nhân nếu họ không đồng ý\r\nĐiều 31 dự thảo Luật Bảo vệ dữ liệu cá nhân quy định về việc Bảo vệ dữ liệu cá nhân trên mạng xã hội và dịch vụ truyền thông trực tuyến (OTT) đã nêu rõ trách nhiệm của nhà cung cấp dịch vụ mạng xã hội và dịch vụ OTT bao gồm:\r\n\r\nBảo vệ dữ liệu cá nhân tại thị trường Việt Nam: Bảo vệ dữ liệu cá nhân của công dân Việt Nam khi hoạt động tại thị trường Việt Nam hoặc xuất hiện trên kho ứng dụng di động cung cấp cho thị trường Việt Nam;\r\n\r\nMinh bạch trong việc thu thập dữ liệu: Thông báo rõ ràng nội dung dữ liệu cá nhân thu thập khi chủ thể dữ liệu cài đặt và sử dụng mạng xã hội, dịch vụ OTT. Không thu thập trái phép dữ liệu cá nhân và ngoài phạm vi theo thỏa thuận với khách hàng;\r\n\r\nKhông yêu cầu ảnh căn cước công dân, chứng minh nhân dân: Không được yêu cầu chụp ảnh căn cước công dân, chứng minh nhân dân làm yếu tố xác thực tài khoản;\r\n\r\nLựa chọn \"không theo dõi\": Cung cấp lựa chọn “không theo dõi” hoặc chỉ được theo dõi hoạt động sử dụng mạng xã hội, dịch vụ OTT khi có sự đồng ý của người sử dụng;\r\n\r\nThông báo về chia sẻ dữ liệu cá nhân và quảng cáo: Thông báo cụ thể, rõ ràng, bằng văn bản về việc chia sẻ dữ liệu cá nhân cũng như áp dụng biện pháp bảo mật khi thực hiện hoạt động quảng cáo, tiếp thị dựa trên dữ liệu cá nhân của khách hàng;\r\n\r\nCấm nghe lén, ghi âm, đọc tin nhắn không có sự đồng ý: Nghe lén, nghe trộm hoặc ghi âm cuộc gọi và đọc tin nhắn văn bản khi không có sự đồng ý của chủ thể dữ liệu là hành vi vi phạm pháp luật.\r\n\r\nCũng theo dự thảo Luật, dữ liệu cá nhân đăng ký tài khoản mạng xã hội, dịch vụ OTT không phải là dữ liệu công khai và không thuộc trường hợp được xử lý mà không cần có sự đồng ý của chủ thể dữ liệu.', '1743532375.jpg', 1, '2025-04-01 11:04:17', '2025-04-01 11:32:55'),
(5, 'Chuẩn bị trình Trung ương sắp xếp lại các tổ chức chính trị - xã hội, hội quần chúng', 'Ban Thường vụ Đảng ủy Mặt trận Tổ quốc, các đoàn thể Trung ương đang tập trung làm rất nhiều việc thực hiện theo kết luận của Bộ Chính trị, Ban Bí thư liên quan sắp xếp bộ máy.\r\nNgày 1-4, Đảng ủy Mặt trận Tổ quốc, các đoàn thể Trung ương tổ chức Hội nghị nghiên cứu, học tập, quán triệt, tuyên truyền nghị quyết của Đảng theo hình thức trực tiếp kết hợp trực tuyến.\r\n\r\nQuán triệt nhiều nội dung quan trọng\r\nCác đại biểu đã nghe các chuyên đề đột phá phát triển khoa học, công nghệ, đổi mới sáng tạo và chuyển đổi số quốc gia theo tinh thần nghị quyết 57 của Bộ Chính trị.\r\n\r\nChuyên đề tăng cường sự lãnh đạo của Đảng đối với công tác giáo dục cần, kiệm, liêm, chính, chí công vô tư theo chỉ thị 42/2025 và quy định 231/2025 của Bộ Chính trị.', '1743532387.webp', 2, '2025-04-01 11:24:26', '2025-04-01 11:43:37'),
(6, 'Động đất Myanmar: 144 người chết, Myanmar và Thái Lan ban bố tình trạng khẩn cấp', 'Trận động đất chiều 28-3, với tâm chấn ở Myanmar đã gây ra rung chấn mạnh, có thể cảm nhận được tại Trung Quốc và Việt Nam. Nhiều tòa nhà ở Thái Lan rung lắc mạnh, có tòa nhà đã sụp đổ.\r\nTrận động đất xảy ra lúc 13h20 ngày 28-3 (giờ Việt Nam), theo thông tin từ Trung tâm Địa chấn quốc gia Ấn Độ (NCS). Tâm chấn nằm tại vĩ độ 21,93 độ Bắc, kinh độ 96,07 độ Đông, ở độ sâu 10km, khu vực gần thành phố Sagaing. \r\n\r\nBáo New York Times dẫn lời một bác sĩ tại Bệnh viện Đa khoa Mandalay cho biết tính đến 16h30, trận động đất đã khiến ít nhất 20 người thiệt mạng và 200 người bị thương tại thành phố này.\r\n\r\nĐến 21h30, Reuters dẫn cập nhật trên Telegram của MRTV cho hay tại Myanmar đã có ít nhất 144 người chết, 732 người bị thương.\r\n\r\nBáo Global New Light of Myanmar cũng cho biết trận động đất đã làm sập nhiều cây cầu và tòa nhà trên khắp Myanmar, bao gồm cả ở thủ đô Naypyidaw.', '1743532841.webp', 4, '2025-04-01 11:40:41', '2025-04-01 11:41:03'),
(8, 'Tình trạng cạn kiệt xe tăng bắt đầu thể hiện rõ?', 'GD&TĐ - Ngành công nghiệp xe tăng Nga cho thấy họ đang không bù đắp được tổn thất trong chiến đấu.\r\nDựa trên phân tích hình ảnh vệ tinh tại căn cứ lưu trữ và nhà máy sửa chữa, các nhà nghiên cứu kết luận rằng tốc độ phục hồi xe tăng của Nga đã giảm 3,5 - 4 lần so với năm 2022, con số trên không còn đủ để bù đắp cho những tổn thất trên chiến trường.\r\n\r\nTheo ước tính, vào tháng 2 năm 2025, tổng cộng 2.069 xe tăng các loại đã được rút khỏi những căn cứ lưu trữ mở của Nga.\r\n\r\nCó tới 2.000 xe tăng vẫn còn trong các nhà chứa kín - đây là những chiến xa đầu tiên được đưa vào sử dụng trở lại. Việc thiếu hoạt động mới gần những kho lưu trữ thể hiện trên hình ảnh vệ tinh xác nhận điều này.', '1743571047.webp', 4, '2025-04-01 22:17:27', '2025-04-01 22:17:27'),
(9, '4 điểm thăm lại Biệt động Sài Gòn xưa', 'Bảo tàng Biệt động Sài Gòn, cà phê Đỗ Phủ là hai trong những địa chỉ các chiến sĩ biệt động từng hoạt động, ngày nay thành nơi trưng bày kỷ vật cho khách tham quan.\r\n\r\nTrần Văn Lai hay Năm Lai, nhà thầu khoán nức tiếng Sài Gòn những năm 1960, đã mở nhiều đường dây cất giữ vũ khí và hầm trú ẩn cho lực lượng Biệt động Sài Gòn phục vụ cuộc Tổng tiến công và nổi dậy Tết Mậu Thân năm 1968. Ngày nay, một số ngôi nhà của ông trở thành di tích và mở cửa đón khách tham quan. Dưới đây là những địa chỉ gắn liền với sự kiện lịch sử Tết Mậu Thân 1968, nằm ở trung tâm, dễ di chuyển, nhiều trải nghiệm dịp lễ 30/4 năm nay do phóng viên VnExpress khảo sát và gợi ý.\r\n\r\nBảo tàng Biệt động Sài Gòn - Gia Định\r\n\r\nĐịa chỉ: 145, Trần Quang Khải, phường Tân Định, quận 1\r\n\r\nGiờ mở cửa: 7h30 đến 19h; thứ Sáu và thứ Bảy mở cửa đến 17h30\r\n\r\nCải tạo cuối năm 2019 từ căn nhà ba tầng hơn 60 năm tuổi, nhà trưng bày Biệt động Sài Gòn - Gia Định mở cửa đón khách tham quan từ tháng 8/2023. Bảo tàng lưu giữ hơn 300 hiện vật vũ khí, thư tín, vật dụng sinh hoạt thời chiến và một số kỷ vật như máy đánh chữ của tổng thống Nguyễn Văn Thiệu, máy in truyền đơn của ông Đỗ Miễn, xe đạp của nữ giao liên Nguyễn Ngọc Huệ.', '1743571228.webp', 3, '2025-04-01 22:20:28', '2025-04-01 22:20:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
