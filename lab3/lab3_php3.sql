-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 22, 2025 lúc 07:07 AM
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
-- Cơ sở dữ liệu: `lab3_php3`
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(6, '2025_03_11_071651_create_products_table', 2),
(7, '2025_03_17_132705_create_thong_tins_table', 3);

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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(11,0) DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 14', 45000000, 2, 'Điện thoại thông minh ghê ', NULL, NULL),
(2, 'Sam sung', 23000000, 5, 'Điện thoại sam sung nè', NULL, NULL),
(3, 'Giày VANS SKATE OLD SKOOL BLACK/WHITE', 12900000, 34, 'giày đẹp', '2025-03-15 00:08:07', '2025-03-15 00:08:07'),
(5, 'Giày thể thao nam Sneaker Low - Top - XB20649FK', 234687, 6, 'Xấu vãi ò', '2025-03-17 22:58:40', '2025-03-17 23:30:54');

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
('2HudZVERX8VZCqg8jJe6FE3qjsywfKq40iVRJLca', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTllESUczWGxqOXQwbm8wa2J2TzloTjhmczI5WndabzdYN3NCUmdvNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742622711);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tins`
--

CREATE TABLE `thong_tins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `detail` varchar(5000) NOT NULL,
  `viewers` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tins`
--

INSERT INTO `thong_tins` (`id`, `name`, `description`, `detail`, `viewers`, `category`, `created_at`, `updated_at`) VALUES
(1, '\'Kinh tế tư nhân là đòn bẩy cho Việt Nam thịnh vượng\'', 'Tổng Bí thư Tô Lâm khẳng định kinh tế tư nhân là lực lượng tiên phong trong kỷ nguyên mới, góp phần xây dựng một Việt Nam năng động, độc lập, tự chủ, tự cường và phát triển thịnh vượng.', 'Trong bài viết Phát triển kinh tế tư nhân - đòn bẩy cho một Việt Nam thịnh vượng, Tổng Bí thư Tô Lâm đánh giá những thành công trên chặng đường gần 40 năm đổi mới có sự đóng góp rất quan trọng của khu vực kinh tế tư nhân.\r\n\r\nGiai đoạn đầu đổi mới, kinh tế tư nhân chỉ giữ vai trò thứ yếu. Trong hai thập niên gần đây, khu vực này trỗi dậy mạnh mẽ, trở thành một trong những trụ cột quan trọng hàng đầu của nền kinh tế và ngày càng thể hiện là động lực quan trong nhất để thúc đẩy tăng trưởng kinh tế quốc gia.\r\n\r\nVới gần một triệu doanh nghiệp, 5 triệu hộ kinh doanh cá thể, khu vực kinh tế tư nhân hiện đóng góp 51% GDP, hơn 30% ngân sách nhà nước, tạo ra hơn 40 triệu việc làm, chiếm hơn 82% tổng số lao động trong nền kinh tế, đóng góp gần 60% vốn đầu tư toàn xã hội.\r\n\r\nKinh tế tư nhân không chỉ giúp mở rộng sản xuất, thương mại, dịch vụ mà còn góp phần quan trọng trong việc nâng cao năng suất lao động, thúc đẩy đổi mới sáng tạo và gia tăng năng lực cạnh tranh quốc gia. Sự vươn lên mạnh mẽ của nhiều doanh nghiệp tư nhân Việt Nam không chỉ làm chủ thị trường nội địa mà còn khẳng định thương hiệu trên thị trường quốc tế. \"Điều này chứng tỏ rằng nếu có môi trường phát triển thuận lợi, doanh nghiệp Việt Nam hoàn toàn có thể vươn xa, cạnh tranh sòng phẳng với thế giới\", Tổng Bí thư viết.\r\n\r\nTuy nhiên, kinh tế tư nhân vẫn đối mặt với nhiều rào cản kìm hãm sự phát triển, không thể bứt phá về quy mô và năng lực cạnh tranh. Nhiều hộ kinh tế cá thể vẫn theo nếp kinh doanh cũ, thiếu động lực phát triển thành doanh nghiệp, thậm chí \"không muốn lớn\".\r\n\r\nPhần lớn doanh nghiệp tư nhân Việt Nam thuộc nhóm nhỏ và siêu nhỏ, tiềm lực tài chính và trình độ quản trị hạn chế, thiếu sự kết nối với nhau cũng như với khu vực đầu tư trực tiếp nước ngoài; chưa tận dụng tốt các cơ hội mà cách mạng công nghiệp 4.0 mang lại, chậm chuyển đổi số. Rất ít doanh nghiệp đầu tư vào nghiên cứu và phát triển (R&D), ít chú trọng đổi mới mô hình kinh doanh, đổi mới công nghệ hoặc sáng tạo sản phẩm mới. Vì vậy, doanh nghiệp tư nhân rất khó nâng cao giá trị gia tăng, thúc đẩy năng lực cạnh tranh, nâng tầm giá trị doanh nghiệp và vươn tới đẳng cấp quốc tế.\r\n\r\nBên cạnh đó, doanh nghiệp tư nhân còn gặp nhiều rào cản trong tiếp cận nguồn lực, đặc biệt là vốn tín dụng, đất đai, tài nguyên và nhân lực chất lượng cao, nhất là trong các ngành công nghệ, kỹ thuật và tài chính. Hệ thống pháp luật nhiều bất cập, chồng chéo, môi trường kinh doanh nhiều trở ngại, thủ tục hành chính phức tạp, tốn nhiều thời gian, chi phí và tiềm ẩn rủi ro. Nhiều trường hợp quyền tự do kinh doanh và quyền tài sản bị xâm hại bởi sự yếu kém hoặc lạm quyền của một số cán bộ công chức trong thực thi công vụ.\r\n\r\nMặt khác, các chính sách ưu đãi, hỗ trợ của Chính phủ chưa thực sự hiệu quả, công bằng giữa các khu vực kinh tế và không dễ tiếp cận đối với kinh tế tư nhân.\r\n\r\nTổng Bí thư chỉ rõ những điểm nghẽn nêu trên không chỉ kìm hãm tốc độ tăng trưởng của khu vực kinh tế tư nhân, khiến tỷ trọng đóng góp của khu vực này trong GDP gần như không thay đổi trong hơn một thập kỷ qua mà còn cản trở nền kinh tế nâng cao giá trị gia tăng, thoát khỏi bẫy thu nhập trung bình, làm chậm tiến trình đưa Việt Nam trở thành quốc gia phát triển có thu nhập cao vào năm 2045.\r\n\r\nVì vậy, người đứng đầu Đảng cho rằng kinh tế tư nhân phải xác định rõ hơn về sứ mạng và tầm nhìn là lực lượng tiên phong trong kỷ nguyên mới, thực hiện thành công sự nghiệp công nghiệp hóa - hiện đại hóa nền kinh tế, nâng cao sức cạnh tranh quốc gia, góp phần xây dựng một Việt Nam năng động và hội nhập quốc tế.', 230, 2, '2025-03-21 10:05:36', NULL),
(2, '5 cựu Bí thư Tỉnh ủy bị đề nghị truy tố trong vụ án Phúc Sơn', '5 cựu Bí thư Tỉnh ủy Vĩnh Phúc, Phú Thọ, Quảng Ngãi cùng nhiều cựu Chủ tịch tỉnh bị đề nghị truy tố trong vụ án liên quan Tập đoàn Phúc Sơn.', 'Ngày 17/3, Cục Cảnh sát điều tra tội phạm về tham nhũng, kinh tế, buôn lậu (C03 Bộ Công an) đề nghị truy tố 41 bị can trong vụ án xảy ra tại Tập đoàn Phúc Sơn và các đơn vị, địa phương liên quan.\r\n\r\nTrong số này có 5 cựu Bí thư Tỉnh ủy là bà Hoàng Thị Thúy Lan, ông Phạm Văn Vọng, đều là cựu Bí thư Tỉnh ủy Vĩnh Phúc; ông Ngô Đức Vượng, ông Nguyễn Doãn Khánh, cựu Bí thư Tỉnh ủy Phú Thọ; ông Lê Viết Chữ, cựu Bí thư Tỉnh ủy Quảng Ngãi. Những người này bị đề nghị truy tố về tội Nhận hối lộ hoặc Lợi dụng chức vụ, quyền hạn trong khi thi hành công vụ.\r\n\r\nCùng vụ án, ông Đặng Trung Hoành (Chánh Văn phòng Huyện ủy huyện Mang Thít, tỉnh Vĩnh Long) bị đề nghị truy tố với cáo buộc Lợi dụng ảnh hưởng với người có chức vụ, quyền hạn để trục lợi.\r\n\r\nTại Tập đoàn Phúc Sơn, C03 đề nghị truy tố Nguyễn Văn Hậu (tức Hậu Pháo, Chủ tịch HĐQT tập đoàn Phúc Sơn) với cáo buộc Đưa hối lộ và Vi phạm quy định về kế toán gây hậu quả nghiêm trọng.', 222, 1, '2025-03-21 13:11:45', '0000-00-00 00:00:00'),
(3, 'Cảnh sát Mỹ phá đường dây mại dâm cao cấp, giao dịch bí mật', 'Công tố viên công khai danh tính nhiều khách mua dâm cùng chi tiết về cách thức giao dịch tại các nhà chứa hạng sang ở bang Massachusetts.', 'Trong phiên điều trần vào ngày 14/3 tại tòa án ở Cambridge, công tố viên nêu tên 12 khách làng chơi tiếng tăm thường lui tới các nhà chứa hạng sang ở bang Massachusetts và tiết lộ những chi tiết đen tối trong các giao dịch.\r\n\r\nMark Zhu, 28 tuổi, một trong những khách mua dâm bị xác định danh tính. Anh ta bị cáo buộc đã trả 840 USD cho hai giờ quan hệ tình dục không an toàn với một gái mại dâm.\r\n\r\nCảnh sát cáo buộc những kẻ mua dâm thường sử dụng các từ viết tắt trong tin nhắn để sắp xếp cuộc hẹn với gái gọi, việc trả tiền được gọi là \"quyên góp\".\r\n\r\nKhách mua dâm được hướng dẫn chi tiết về cuộc hẹn, bao gồm việc phải đến một khu chung cư cụ thể và nhắn tin khi đến nơi để được dẫn vào bên trong. Họ được yêu cầu nhanh chóng di chuyển vào căn hộ, không được quanh quẩn ở hành lang. Nhưng nếu có người khác ở xung quanh, họ sẽ được yêu cầu đợi ở thang máy hoặc cầu thang trước khi vào. Họ cũng được hướng dẫn không bao giờ được thực hiện các giao dịch bí mật với các phụ nữ, nếu không sẽ bị đưa vào danh sách đen.\r\n\r\nThẩm phán Sharon Casey cho rằng có đủ căn cứ để buộc tội 12 người đàn ông. Dự kiến 16 người khác sẽ được công khai danh tính trong các phiên điều trần tiếp theo.\r\n\r\nLuật sư của Jason Han, bác sĩ X-quang 29 tuổi có tên trong danh sách, thừa nhận hành vi mà thân chủ bị cáo buộc là \"sai trái về mặt đạo đức\", cho biết Han \"vô cùng hối hận và xấu hổ\".', 250, 3, '2025-03-21 15:30:00', NULL),
(4, 'Cựu vụ phó khai thông thầu với AIC do áp lực từ cựu bộ trưởng Trương Minh Tuấn', 'Hà Nội - Cựu vụ phó Nguyễn Trọng Đường khai bị ông Trương Minh Tuấn, Bộ trưởng Thông tin Truyền thông khi đó, yêu cầu tạo điều kiện cho AIC bán thiết bị khi đấu thầu.', 'Ngày 17/3, ông Nguyễn Trọng Đường, cựu Vụ phó, cựu Giám đốc Trung tâm ứng cứu khẩn cấp máy tính Việt Nam VNCERT, bị TAND Hà Nội xét xử về tội Vi phạm quy định về đấu thầu gây hậu quả nghiêm trọng.\r\n\r\nTrong 12 bị cáo đồng phạm có bà Nguyễn Thị Thanh Nhàn, Chủ tịch HĐQT Công ty Cổ phần Tiến bộ quốc tế (AIC) - người bị xét xử vắng mặt trong vụ án thứ 5 liên tiếp, đều liên quan các sai phạm mua sắm công.\r\n\r\nTại vụ án này, ông Đường bị cáo buộc khi làm giám đốc VNCERT, đơn vị trực thuộc Cục An toàn thông tin, đã \"chỉ đạo cấp dưới thực hiện hành vi thông thầu\" với AIC, gây thiệt hại hơn 17 tỷ đồng. Đây là số tiền chênh của giá các thiết bị, do AIC nâng khống và được VNCERT thanh toán....', 198, 1, '2025-03-22 00:07:33', NULL),
(6, 'Dự kiến hoàn thành sáp nhập các tỉnh thành trước 30/8', 'Bộ trưởng Nội vụ Phạm Thị Thanh Trà cho biết việc sáp nhập các đơn vị hành chính cấp tỉnh trên cả nước sẽ hoàn tất trước 30/8 và đi vào hoạt động từ tháng 9.', 'Tại phiên họp Ban Chỉ đạo của Chính phủ về phát triển khoa học, công nghệ, đổi mới sáng tạo, chuyển đổi số và Đề án 06 sáng 18/3, Bộ trưởng Nội vụ Phạm Thị Thanh Trà cho biết toàn quốc sẽ hoàn thành sáp nhập đơn vị hành chính cấp xã trước 30/6 và vận hành các xã phường mới từ 1/7.\r\n\r\nTheo bà Trà, việc sắp xếp đơn vị hành chính cấp tỉnh và xã, tổ chức chính quyền địa phương hai cấp \"phải đảm bảo thận trọng, kỹ lưỡng, khẩn trương, hiệu quả\". Quy trình tổ chức chính quyền địa phương hai cấp đang được triển khai với tinh thần \"vừa chạy vừa xếp hàng\", đáp ứng yêu cầu của Bộ Chính trị, Trung ương, Chính phủ và Thủ tướng.\r\n\r\nBộ trưởng Nội vụ mong muốn nhận được sự phối hợp chặt chẽ từ các bộ, ngành để kịp thời hướng dẫn các địa phương trong quá trình thực hiện nhiệm vụ \"hết sức hệ trọng và cấp bách\" này.', 212, 1, '2025-03-22 03:43:11', NULL);

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
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `thong_tins`
--
ALTER TABLE `thong_tins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `thong_tins_name_unique` (`name`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `thong_tins`
--
ALTER TABLE `thong_tins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
