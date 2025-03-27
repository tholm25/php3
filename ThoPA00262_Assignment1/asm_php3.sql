-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 27, 2025 lúc 06:50 AM
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
-- Cơ sở dữ liệu: `asm_php3`
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
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thời sự', NULL, NULL),
(2, 'Kinh tế', NULL, NULL),
(3, 'Thế giới', NULL, NULL);

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
(17, '0001_01_01_000000_create_users_table', 1),
(18, '0001_01_01_000001_create_cache_table', 1),
(19, '0001_01_01_000002_create_jobs_table', 1),
(20, '2025_03_25_052639_create_categories_table', 1),
(21, '2025_03_25_052752_create_posts_table', 1),
(22, '2025_03_25_054257_add_image_to_posts_table', 1),
(23, '2025_03_26_153620_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', 'Hc6Uz6fsIEoht9gwyTdYYADCvi63FvDwRfkuep3xahb5AABpXyCk5DB5mxF0', '2025-03-26 08:57:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('leminhtho762@gmail.com', '$2y$12$hzrdCvh6XzoWc0BKw5t98e4ZogkoOtVv1vnXDI8uRHLIQAeG/r3/6', '2025-03-26 08:04:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(550) NOT NULL,
  `description` varchar(550) NOT NULL,
  `detail` varchar(10000) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `viewers` int(11) NOT NULL DEFAULT 0,
  `category` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`, `detail`, `image`, `viewers`, `category`, `created_at`, `updated_at`) VALUES
(1, '\'Kinh tế tư nhân là đòn bẩy cho Việt Nam thịnh vượng\'', 'Tổng Bí thư Tô Lâm khẳng định kinh tế tư nhân là lực lượng tiên phong trong kỷ nguyên mới, góp phần xây dựng một Việt Nam năng động, độc lập, tự chủ, tự cường và phát triển thịnh vượng.', 'Trong bài viết Phát triển kinh tế tư nhân - đòn bẩy cho một Việt Nam thịnh vượng, Tổng Bí thư Tô Lâm đánh giá những thành công trên chặng đường gần 40 năm đổi mới có sự đóng góp rất quan trọng của khu vực kinh tế tư nhân.\n\nGiai đoạn đầu đổi mới, kinh tế tư nhân chỉ giữ vai trò thứ yếu. Trong hai thập niên gần đây, khu vực này trỗi dậy mạnh mẽ, trở thành một trong những trụ cột quan trọng hàng đầu của nền kinh tế và ngày càng thể hiện là động lực quan trong nhất để thúc đẩy tăng trưởng kinh tế quốc gia.\n\nVới gần một triệu doanh nghiệp, 5 triệu hộ kinh doanh cá thể, khu vực kinh tế tư nhân hiện đóng góp 51% GDP, hơn 30% ngân sách nhà nước, tạo ra hơn 40 triệu việc làm, chiếm hơn 82% tổng số lao động trong nền kinh tế, đóng góp gần 60% vốn đầu tư toàn xã hội.\n\nKinh tế tư nhân không chỉ giúp mở rộng sản xuất, thương mại, dịch vụ mà còn góp phần quan trọng trong việc nâng cao năng suất lao động, thúc đẩy đổi mới sáng tạo và gia tăng năng lực cạnh tranh quốc gia. Sự vươn lên mạnh mẽ của nhiều doanh nghiệp tư nhân Việt Nam không chỉ làm chủ thị trường nội địa mà còn khẳng định thương hiệu trên thị trường quốc tế. \"Điều này chứng tỏ rằng nếu có môi trường phát triển thuận lợi, doanh nghiệp Việt Nam hoàn toàn có thể vươn xa, cạnh tranh sòng phẳng với thế giới\", Tổng Bí thư viết.\n\nTuy nhiên, kinh tế tư nhân vẫn đối mặt với nhiều rào cản kìm hãm sự phát triển, không thể bứt phá về quy mô và năng lực cạnh tranh. Nhiều hộ kinh tế cá thể vẫn theo nếp kinh doanh cũ, thiếu động lực phát triển thành doanh nghiệp, thậm chí \"không muốn lớn\".\n\nPhần lớn doanh nghiệp tư nhân Việt Nam thuộc nhóm nhỏ và siêu nhỏ, tiềm lực tài chính và trình độ quản trị hạn chế, thiếu sự kết nối với nhau cũng như với khu vực đầu tư trực tiếp nước ngoài; chưa tận dụng tốt các cơ hội mà cách mạng công nghiệp 4.0 mang lại, chậm chuyển đổi số. Rất ít doanh nghiệp đầu tư vào nghiên cứu và phát triển (R&D), ít chú trọng đổi mới mô hình kinh doanh, đổi mới công nghệ hoặc sáng tạo sản phẩm mới. Vì vậy, doanh nghiệp tư nhân rất khó nâng cao giá trị gia tăng, thúc đẩy năng lực cạnh tranh, nâng tầm giá trị doanh nghiệp và vươn tới đẳng cấp quốc tế.\n\nBên cạnh đó, doanh nghiệp tư nhân còn gặp nhiều rào cản trong tiếp cận nguồn lực, đặc biệt là vốn tín dụng, đất đai, tài nguyên và nhân lực chất lượng cao, nhất là trong các ngành công nghệ, kỹ thuật và tài chính. Hệ thống pháp luật nhiều bất cập, chồng chéo, môi trường kinh doanh nhiều trở ngại, thủ tục hành chính phức tạp, tốn nhiều thời gian, chi phí và tiềm ẩn rủi ro. Nhiều trường hợp quyền tự do kinh doanh và quyền tài sản bị xâm hại bởi sự yếu kém hoặc lạm quyền của một số cán bộ công chức trong thực thi công vụ.\n\nMặt khác, các chính sách ưu đãi, hỗ trợ của Chính phủ chưa thực sự hiệu quả, công bằng giữa các khu vực kinh tế và không dễ tiếp cận đối với kinh tế tư nhân.\n\nTổng Bí thư chỉ rõ những điểm nghẽn nêu trên không chỉ kìm hãm tốc độ tăng trưởng của khu vực kinh tế tư nhân, khiến tỷ trọng đóng góp của khu vực này trong GDP gần như không thay đổi trong hơn một thập kỷ qua mà còn cản trở nền kinh tế nâng cao giá trị gia tăng, thoát khỏi bẫy thu nhập trung bình, làm chậm tiến trình đưa Việt Nam trở thành quốc gia phát triển có thu nhập cao vào năm 2045.\n\nVì vậy, người đứng đầu Đảng cho rằng kinh tế tư nhân phải xác định rõ hơn về sứ mạng và tầm nhìn là lực lượng tiên phong trong kỷ nguyên mới, thực hiện thành công sự nghiệp công nghiệp hóa - hiện đại hóa nền kinh tế, nâng cao sức cạnh tranh quốc gia, góp phần xây dựng một Việt Nam năng động và hội nhập quốc tế.\nGiai đoạn đầu đổi mới, kinh tế', 'anh1.jpg', 237, 2, '2025-03-21 03:05:36', '2025-03-26 11:15:30'),
(2, '5 cựu Bí thư Tỉnh ủy bị đề nghị truy tố trong vụ án Phúc Sơn', '5 cựu Bí thư Tỉnh ủy Vĩnh Phúc, Phú Thọ, Quảng Ngãi cùng nhiều cựu Chủ tịch tỉnh bị đề nghị truy tố trong vụ án liên quan Tập đoàn Phúc Sơn.', 'Ngày 17/3, Cục Cảnh sát điều tra tội phạm về tham nhũng, kinh tế, buôn lậu (C03 Bộ Công an) đề nghị truy tố 41 bị can trong vụ án xảy ra tại Tập đoàn Phúc Sơn và các đơn vị, địa phương liên quan.\n\nTrong số này có 5 cựu Bí thư Tỉnh ủy là bà Hoàng Thị Thúy Lan, ông Phạm Văn Vọng, đều là cựu Bí thư Tỉnh ủy Vĩnh Phúc; ông Ngô Đức Vượng, ông Nguyễn Doãn Khánh, cựu Bí thư Tỉnh ủy Phú Thọ; ông Lê Viết Chữ, cựu Bí thư Tỉnh ủy Quảng Ngãi. Những người này bị đề nghị truy tố về tội Nhận hối lộ hoặc Lợi dụng chức vụ, quyền hạn trong khi thi hành công vụ.\n\nCùng vụ án, ông Đặng Trung Hoành (Chánh Văn phòng Huyện ủy huyện Mang Thít, tỉnh Vĩnh Long) bị đề nghị truy tố với cáo buộc Lợi dụng ảnh hưởng với người có chức vụ, quyền hạn để trục lợi.\n\nTại Tập đoàn Phúc Sơn, C03 đề nghị truy tố Nguyễn Văn Hậu (tức Hậu Pháo, Chủ tịch HĐQT tập đoàn Phúc Sơn) với cáo buộc Đưa hối lộ và Vi phạm quy định về kế toán gây hậu quả nghiêm trọng.', 'anh2.jpg', 225, 1, '2025-03-21 06:11:45', '2025-03-26 22:27:47'),
(3, 'Cảnh sát Mỹ phá đường dây mại dâm cao cấp, giao dịch bí mật', 'Công tố viên công khai danh tính nhiều khách mua dâm cùng chi tiết về cách thức giao dịch tại các nhà chứa hạng sang ở bang Massachusetts.', 'Trong phiên điều trần vào ngày 14/3 tại tòa án ở Cambridge, công tố viên nêu tên 12 khách làng chơi tiếng tăm thường lui tới các nhà chứa hạng sang ở bang Massachusetts và tiết lộ những chi tiết đen tối trong các giao dịch.\n\nMark Zhu, 28 tuổi, một trong những khách mua dâm bị xác định danh tính. Anh ta bị cáo buộc đã trả 840 USD cho hai giờ quan hệ tình dục không an toàn với một gái mại dâm.\n\nCảnh sát cáo buộc những kẻ mua dâm thường sử dụng các từ viết tắt trong tin nhắn để sắp xếp cuộc hẹn với gái gọi, việc trả tiền được gọi là \"quyên góp\".\n\nKhách mua dâm được hướng dẫn chi tiết về cuộc hẹn, bao gồm việc phải đến một khu chung cư cụ thể và nhắn tin khi đến nơi để được dẫn vào bên trong. Họ được yêu cầu nhanh chóng di chuyển vào căn hộ, không được quanh quẩn ở hành lang. Nhưng nếu có người khác ở xung quanh, họ sẽ được yêu cầu đợi ở thang máy hoặc cầu thang trước khi vào. Họ cũng được hướng dẫn không bao giờ được thực hiện các giao dịch bí mật với các phụ nữ, nếu không sẽ bị đưa vào danh sách đen.\n\nThẩm phán Sharon Casey cho rằng có đủ căn cứ để buộc tội 12 người đàn ông. Dự kiến 16 người khác sẽ được công khai danh tính trong các phiên điều trần tiếp theo.\n\nLuật sư của Jason Han, bác sĩ X-quang 29 tuổi có tên trong danh sách, thừa nhận hành vi mà thân chủ bị cáo buộc là \"sai trái về mặt đạo đức\", cho biết Han \"vô cùng hối hận và xấu hổ\".\nMark Zhu, 28 tuổi, một trong', 'anh3.jpg', 255, 3, '2025-03-21 08:30:00', '2025-03-26 07:27:51'),
(4, 'Cựu vụ phó khai thông thầu với AIC do áp lực từ cựu bộ trưởng Trương Minh Tuấn', 'Hà Nội - Cựu vụ phó Nguyễn Trọng Đường khai bị ông Trương Minh Tuấn, Bộ trưởng Thông tin Truyền thông khi đó, yêu cầu tạo điều kiện cho AIC bán thiết bị khi đấu thầu.', 'Ngày 17/3, ông Nguyễn Trọng Đường, cựu Vụ phó, cựu Giám đốc Trung tâm ứng cứu khẩn cấp máy tính Việt Nam VNCERT, bị TAND Hà Nội xét xử về tội Vi phạm quy định về đấu thầu gây hậu quả nghiêm trọng.\n\nTrong 12 bị cáo đồng phạm có bà Nguyễn Thị Thanh Nhàn, Chủ tịch HĐQT Công ty Cổ phần Tiến bộ quốc tế (AIC) - người bị xét xử vắng mặt trong vụ án thứ 5 liên tiếp, đều liên quan các sai phạm mua sắm công.\n\nTại vụ án này, ông Đường bị cáo buộc khi làm giám đốc VNCERT, đơn vị trực thuộc Cục An toàn thông tin, đã \"chỉ đạo cấp dưới thực hiện hành vi thông thầu\" với AIC, gây thiệt hại hơn 17 tỷ đồng. Đây là số tiền chênh của giá các thiết bị, do AIC nâng khống và được VNCERT thanh toán.', 'anh4.jpg', 199, 1, '2025-03-21 17:07:33', '2025-03-26 07:28:02'),
(6, 'Dự kiến hoàn thành sáp nhập các tỉnh thành trước 30/8', 'Bộ trưởng Nội vụ Phạm Thị Thanh Trà cho biết việc sáp nhập các đơn vị hành chính cấp tỉnh trên cả nước sẽ hoàn tất trước 30/8 và đi vào hoạt động từ tháng 9.', 'Tại phiên họp Ban Chỉ đạo của Chính phủ về phát triển khoa học, công nghệ, đổi mới sáng tạo, chuyển đổi số và Đề án 06 sáng 18/3, Bộ trưởng Nội vụ Phạm Thị Thanh Trà cho biết toàn quốc sẽ hoàn thành sáp nhập đơn vị hành chính cấp xã trước 30/6 và vận hành các xã phường mới từ 1/7.\n\nTheo bà Trà, việc sắp xếp đơn vị hành chính cấp tỉnh và xã, tổ chức chính quyền địa phương hai cấp \"phải đảm bảo thận trọng, kỹ lưỡng, khẩn trương, hiệu quả\". Quy trình tổ chức chính quyền địa phương hai cấp đang được triển khai với tinh thần \"vừa chạy vừa xếp hàng\", đáp ứng yêu cầu của Bộ Chính trị, Trung ương, Chính phủ và Thủ tướng.\n\nBộ trưởng Nội vụ mong muốn nhận được sự phối hợp chặt chẽ từ các bộ, ngành để kịp thời hướng dẫn các địa phương trong quá trình thực hiện nhiệm vụ \"hết sức hệ trọng và cấp bách\" này.\nBộ trưởng Nội vụ cho biết sau tinh gọn, các bộ, cơ quan ngang bộ và cơ quan thuộc Chính phủ đã giảm 22.323 biên chế sau quá trình tinh gọn, tương đương 20% tổng biên chế. Các bộ ngành đã giảm 13 tổng cục và tổ chức tương đương, 519 cục, 219 vụ, 3.303 chi cục và 203 đơn vị sự nghiệp công lập. Nghị quyết của Quốc hội thông qua giữa tháng 2 xác định Chính phủ sau tinh gọn còn 14 bộ và 3 cơ quan ngang bộ, giảm 5 đầu mối so với đầu nhiệm kỳ.\n\nĐến nay, tất cả bộ ngành và địa phương đã hoàn thành việc phê duyệt đề án vị trí việc làm, bao gồm 840 vị trí trong cơ quan, tổ chức hành chính; 559 vị trí trong đơn vị sự nghiệp công lập và 17 vị trí cán bộ, công chức cấp xã.\n\nCác địa phương cũng đã giảm 343 cơ quan chuyên môn và tương đương thuộc UBND cấp tỉnh, cùng với 1.454 cơ quan chuyên môn thuộc UBND cấp huyện.\n\nBộ trưởng Phạm Thị Thanh Trà nhấn mạnh việc cải cách tổ chức bộ máy là một \"cuộc cách mạng thực sự trong toàn hệ thống chính trị\".', 'anh5.jpg', 213, 1, '2025-03-21 20:43:11', '2025-03-26 07:28:15'),
(8, '\'Cần chính sách giúp cán bộ tinh giản chuyển sang khu vực tư\'', 'Phó chủ tịch Quốc hội Nguyễn Thị Thanh đề nghị Chính phủ nghiên cứu chính sách giúp cán bộ, công chức nghỉ sau sắp xếp được chuyển sang khu vực tư nhân làm việc.', 'Chiều 25/4, đại biểu Quốc hội chuyên trách thảo luận dự án Luật Việc làm sửa đổi. Đề cập đến hơn 100.000 người bị ảnh hưởng khi sắp xếp tinh gọn bộ máy, Phó chủ tịch Quốc hội Nguyễn Thị Thanh cho rằng dự án luật chưa có chính sách thỏa đáng cho những ngườChiều 25/4, đại biểu Quốc hội chuyên trách thảo luận dự án Luật Việc làm sửa đổi. Đề cập đến hơn 100.000 người bị ảnh hưởng khi sắp xếp tinh gọn bộ máy, Phó chủ tịch Quốc hội Nguyễn Thị Thanh cho rằng dự án luật chưa có chính sách thỏa đáng cho những người trong diện này.\n\nBà phân tích hiện nay cả nước tiếp tục sắp xếp, tinh gọn bộ máy với việc sáp nhập tỉnh thành, tiến tới bỏ cấp huyện và sắp xếp lại cấp xã. Con số cán bộ, công chức, viên chức bị ảnh hưởng có thể gấp đôi so với 100.000 người trước đó.\n\nCán bộ, công viên chức nghỉ do sắp xếp hiện không chỉ 2-3 năm mà có thể lên đến 10 năm. Ngành Nội vụ cần thống kê cụ thể trong số này nhóm nghỉ trước 2 năm, 5 năm, 10 năm là bao nhiêu. Mức độ đào tạo và trình độ chuyên môn của những người này ra sao để có biện pháp giải quyết cho nhân lực dôi dư này.', 'anh6.jpg\r\n', 7, 1, '2025-03-25 11:53:23', '2025-03-26 22:25:53'),
(9, 'Thủ tướng: Việt Nam phấn đấu có thêm 1 triệu doanh nghiệp đến 2030', 'Thủ tướng yêu cầu ưu tiên nguồn lực, hỗ trợ phát triển doanh nghiệp nhỏ và vừa, phấn đấu từ nay đến năm 2030 có thêm ít nhất 1 triệu doanh nghiệp.', 'Tại Nghị quyết số 10/2017, Việt Nam dự kiến có 1 triệu doanh nghiệp vào 2020 và số này tăng lên 1,5 triệu năm nay. Song hiện tại cả nước mới có gần 1 triệu doanh nghiệp, bằng khoảng hai phần ba mục tiêu đề ra.\n\nTại Chỉ thị số 10 ngày 25/3 về thúc đẩy phát triển doanh nghiệp nhỏ và vừa, Thủ tướng Phạm Minh Chính cho rằng khu vực doanh nghiệp này cần phải tăng về số lượng, chất lượng, quy mô, cũng như đóng góp vào nền kinh tế. Theo đó, Việt Nam đặt mục tiêu phấn đấu có thêm ít nhất 1 triệu doanh nghiệp tới 2030.\n\nKinh tế tư nhân đóng vai trò quan trọng trong nền kinh tế, góp khoảng 51% GDP và hơn 30% tổng thu ngân sách, theo số liệu năm 2023. Tuy nhiên, phần lớn khu vực này vẫn là doanh nghiệp nhỏ và vừa, chiếm tới 98%. Họ gặp nhiều rào cản trong việc mở rộng quy mô và nâng cao năng lực cạnh tranh quốc tế\n\nDo đó, Thủ tướng yêu cầu các cơ quan ưu tiên nguồn lực hỗ trợ phát triển doanh nghiệp nhỏ và vừa, trong đó tập trung vào đổi mới sáng tạo, nâng năng lực cạnh tranh tham gia chuỗi giá trị, chuyển đổi số chuyển đổi xanh, phát triển các mô hình kinh doanh mới và tăng ứng dụng công nghệ.\n\n\"Bộ ngành, địa phương phải lấy người dân, doanh nghiệp làm trung tâm để chủ động hỗ trợ, tháo gỡ\", Thủ tướng yêu cầu, thêm rằng việc này phải trên tinh thần \"không nói không, nói khó, hình sự hóa các quan hệ kinh tế, quan hệ dân sự\".', 'anh7.jpg', 17, 2, '2025-03-25 15:07:51', '2025-03-26 07:55:36'),
(10, 'Đề xuất miễn thuế 3 năm cho hộ kinh doanh lên doanh nghiệp', 'Để khuyến khích hơn 5 triệu hộ kinh doanh chuyển đổi lên doanh nghiệp, các chuyên gia cho rằng nên miễn thuế trong khoảng 3 năm.', 'Tại hội thảo \"Bức tranh kinh tế Việt Nam 2025 và những chính sách kinh tế cần quan tâm\" sáng 25/3, ông Đậu Anh Tuấn, Phó tổng thư ký, Trưởng Ban Pháp chế Liên đoàn Thương mại và Công nghiệp Việt Nam (VCCI) cho biết khuyến khích hộ kinh doanh chuyển đổi sang doanh nghiệp là một trong các nội dung đang được thảo luận trong Nghị quyết sắp ra đời của Bộ Chính trị về kinh tế tư nhân.\n\nTheo ông Tuấn, chuyển sang mô hình doanh nghiệp giúp hộ kinh doanh nâng cao tính chuyên nghiệp và cạnh tranh. \"Chúng ta có thể mạnh dạn miễn thuế 3 năm cho các hộ kinh doanh trở thành doanh nghiệp\", ông đề xuất.\n\nTuần trước, tại một tọa đàm về kinh tế tư nhân, TS. Cấn Văn Lực, Chuyên gia kinh tế trưởng BIDV cũng nêu ý tưởng miễn thuế thu nhập trong 3-5 năm đầu cho hộ kinh doanh chuyển đổi thành doanh nghiệp siêu nhỏ, để nuôi dưỡng nguồn thu. Đồng thời, đơn giản hóa thủ tục thành lập và có hỗ trợ về kế toán, quản lý.', 'anh8.jpg', 3, 2, '2025-03-25 09:39:51', '2025-03-26 07:31:30'),
(12, 'Người Thụy Điển tẩy chay siêu thị vì giá thực phẩm tăng vọt', 'Sau đợt tăng giá thực phẩm mạnh nhất trong vòng hai năm qua, hàng nghìn người Thụy Điển quyết định tẩy chay các siêu thị lớn trong 7 ngày.', '\"Giá chắc chắn đã tăng\", Marcel Demir, 21 tuổi, sinh viên người Thụy Điển, bình luận về mặt hàng khoai tây và chocolate khi đứng ngoài một cửa hàng thuộc chuỗi siêu thị Coop ở ga trung tâm Stockholm hồi đầu tuần.\n\n\"Tôi thường mua khoai chiên và chocolat\"Giá chắc chắn đã tăng\", Marcel Demir, 21 tuổi, sinh viên người Thụy Điển, bình luận về mặt hàng khoai tây và chocolate khi đứng ngoài một cửa hàng thuộc chuỗi siêu thị Coop ở ga trung tâm Stockholm hồi đầu tuần.\n\n\"Tôi thường mua khoai chiên và chocolate, nhưng cả hai mặt hàng này đều đã tăng giá rất mạnh. Chocolate mới tăng gần đây, còn khoai chiên đã tăng từ năm ngoái\", anh nói.\nChi phí thực phẩm một năm của một hộ gia đình ở Thụy Điển đã tăng tới 300.000 kronor (2.970 USD) kể từ tháng 1/2022. Một gói cà phê dự kiến tăng giá lên 100 kronor (9,9 USD), cao hơn 25% so với đầu năm ngoái, theo cơ quan thống kê Thụy Điển.\n\nSau đợt tăng giá thực phẩm mạnh nhất tronng vòng hai năm hồi tháng 2, hàng nghìn người khắp Thụy Điển quyết định tẩy chay các siêu thị lớn nhất đất nước trong 7 ngày, bắt đầu từ 17/3.\n\nNhờ TikTok và Instagram, chiến dịch trở thành chủ đề thảo luận nóng nhất toàn quốc. Những người tẩy chay chỉ trích tính độc quyền của các siêu thị đã khiến thực phẩm tăng giá, cũng như việc các nhà sản xuất lớn đặt lợi nhuận của mình lên trên khách hàng và các doanh nghiệp thiếu cạnh tranh.\n\nTuy nhiên, các siêu thị phủ nhận cáo buộc này, cho rằng những yếu tố ảnh hưởng đến giá cả hàng hóa là chiến tranh, cạnh tranh địa chính trị, giá hàng hóa nói chung, vụ mùa và khí hậu.\n\nĐây là một trong số những cuộc biểu tình phản đối chi phí sinh hoạt tăng cao tại châu Âu trong những tuần gần đây. Người tiêu dùng ở Bulgaria tháng trước tẩy chay các chuỗi bán lẻ lớn và siêu thị nhằm phản đối giá thực phẩm tăng, khiến doanh thu của các doanh nghiệp này giảm gần 30%. Hồi tháng 1, chiến dịch tẩy chay ở Croatia lan sang Bosnia và Herzegovina, Montenegro và Serbia.\n\nSáng kiến tẩy chay của người dân Thụy Điển có tên \"Tuần tẩy chay thứ 12\", vì được tổ chức vào tuần thứ 12 của năm. Các nhà tổ chức đề nghị người tiêu dùng ngừng mua sắm lại các cửa hàng thực phẩm lớn như Lidl, Hemkop, Ica, Coop và Willys.\n\n\"Chúng ta không còn gì để mất\", là thông điệp trong nhiều bài đăng trên mạng xã hội. \"Giá thực phẩm tăng vọt, còn gã khổng lồ thực phẩm và các nhà sản xuất lớn đang kiếm lời hàng tỷ USD từ túi tiền của chúng ta\".\n\nTrong số các loại thực phẩm ở Thụy Điển, giá chocolate tăng mạnh nhất vào tháng trước với 9,2%, giá dầu ăn tăng 7,2% và phô mai tăng 6,4%, sữa và kem tăng 5,4%.\n\nTuy nhiên, không phải người nào cũng bị thuyết phục trước lập luận của chiến dịch tẩy chay 7 ngày. Sandra Gustavsson, 34 tuổi, nhận thấy giá thực phẩm tăng nhưng ủng hộ thay đổi thói quen mua sắm như sử dụng hàng hóa sản xuất tại địa phương mà không qua trung gian.\n\n\"Từ khi Covid-19 ập tới, giá thực phẩm cứ thế tăng mãi\", Gustavsson, giám đốc điều hành sống ở Gothenburg, nói. \"Tẩy chay một tuần cũng ổn vì nó khiến người bàn tán đến, nhưng tôi cho rằng không có tác dụng\".\n\nFilippa Lind, một trong những người đi đầu chiến dịch tẩy chay, cho hay người ta bàn luận khắp nơi về hành động ngừng mua hàng từ siêu thị. Lind, sinh viên đến từ Malmo, tham gia chiến dịch vì bản thân là một người bị ảnh hưởng vì \"giá cả cao vô lý\", đồng thời muốn thể hiện \"tình đoàn kết vì mọi người\".\n\n\"Các chính trị gia cần vào cuộc, phá vỡ thế độc quyền khiến giá cả tăng cao do thiếu cạnh tranh giữa các siêu thị\", cô nói, kêu gọi chính phủ Thụy Điển hành động.\n\nHọ đang lên kế hoạch tiếp tục biểu thị sự phản đối bằng chiến dịch tẩy chay dài ba tuần đối với Ica, nhà bán lẻ thực phẩm hàng đầu tại Thụy Điển với 1/3 thị phần trong nước, và nhà sản xuất sữa Arla. Nhiều công ty đang nằm trong danh sách tẩy chay của nhóm.\n\n\"Tôi hy vọng chiến dịch này sẽ thúc đẩy những quyết sách giúp hạ giá những mặt hàng thiết yếu về lâu dài\", Lind nói.\n\nMikael Damberg, phát ngôn viên đảng Dân chủ Xã hội, chỉ trích liên minh cầm quyền do đảng Ôn hòa lãnh đạo đã không hành động trước cuộc khủng hoảng vật giá. \"Ở Thụy Điển bây giờ, các gia đình đã rút sạch tiền tiết kiệm và vay tiền trang trải cuộc sống hàng ngày\", ông phát biểu trước quốc hội ngày 25/3.\n\nBộ trưởng Tài chính Elisabeth Svantesson bác bỏ chỉ trích này. Bà lưu ý khi chính phủ mới lên nắm quyền năm 2022, lạm phát khi đó là 10%. Đến tháng 2 năm nay, lạm phát là 1,3%, tăng so với 0,6% hồi tháng 1.\n\nTuy nhiên, bà thừa nhận giá thực phẩm vẫn cao. \"Cần hỗ trợ những người khó khăn nhất\", bà nói. \"Cũng cần xem xét chúng ta có thể làm gì với giá thực phẩm\".\n\nBộ trưởng Nông thôn Peter Kullgren cho hay giá cả tăng chủ yếu là do các yếu tố quốc tế như mất mùa, nhưng cũng lưu ý cần cải thiện tính cạnh tranh trong thương mại.\n\n\"Giá thực phẩm tăng trong thời gian qua, ảnh hưởng nghiêm trọng nhất đến những hộ gia đình kinh tế khó khăn, nhất là gia đình có con nhỏ, sinh viên và người cao tuổi lương hưu thấp. Cần giải quyết vấn đề này\", ông Kullgren bày tỏ.\n\nBộ trưởng Kullgren lưu ý đảm bảo bình ổn giá là \"ưu tiên hàng đầu\" của chính phủ, cho hay tuần trước các ban ngành đã họp bàn giải pháp hạ nhiệt giá thực phẩm với những nhà sản xuất và cung ứng.\n\nChính quyền đã đưa ra chiến lược mới về thực phẩm, trong đó đề xuất biện pháp tăng sản lượng thực phẩm của Thụy Điển. Ông Kullgren hy vọng tính cạnh tranh trong ngành thực phẩm sẽ được tăng cường bằng các biện pháp như khai trương các cửa hàng tạp hóa mới, đồng thời cảnh báo chiến dịch tẩy chay siêu thị có thể \"phản tác dụng\".\n\nJenny Pedersen, phát ngôn viên của Hemkop, không nói rõ khách hàng bị ảnh hưởng như thế nào từ chiến dịch tẩy chay và nhấn mạnh giá thực phẩm ở Thụy Điển đang bị ảnh hưởng giống những quốc gia khác.', 'anh9.jpg', 6, 3, '2025-03-25 13:13:31', '2025-03-26 07:42:25'),
(13, 'Bộ trưởng Giáo dục Iceland từ chức vì từng có con với thiếu niên 15 tuổi', 'Bộ trưởng Giáo dục Iceland Porsdottir từ chức sau khi thừa nhận có một con trai với thiếu niên 15 tuổi cách đây hơn 30 năm.', 'Trong cuộc phỏng vấn với hãng thông tấn Iceland Visir gần đây, Bộ trưởng Giáo dục Asthildur Loa Porsdottir, 58 tuổi, thừa nhận bắt đầu mối quan hệ với một thiếu niên 15 tuổi mà bà hướng dẫn tại một nhóm tôn giáo hồi năm 22 tuổi.\n\nBà mang bầu và có con trai với thiếu niên này, người được xác định là Eirikur Asmundsson, một năm sau. Mối quan hệ này được hai người giữ kín, nhưng được công bố hơn ba thập kỷ sau, khi đài RUV của Iceland tiến hành phóng sự điều tra.\n\nTheo đài RUV, một người thân của Asmundsson đã nộp đơn khiếu nại lên Văn phòng Thủ tướng Iceland hồi tuần trước. Bà Porsdottir được thông báo về khiếu nại này và đã từ chức.\n\nAsmundsson được cho là đã có mặt khi con trai chào đời, cùng bà Porsdottir nuôi con trong năm đầu tiên, nhưng sau đó bị ngăn cản tiếp xúc với con trai. RUV tìm thấy các tài liệu Asmundsson gửi lên Bộ Tư pháp Iceland yêu cầu được gặp con nhưng bị từ chối. Ông vẫn tiếp tục trả tiền cấp dưỡng nuôi con trong 18 năm.\n', 'anh10.jpg', 4, 3, '2025-03-25 01:40:31', '2025-03-26 07:42:43');

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
('Vuy26r3PkuPwsIAh7wHsSDAU7px3SD9NC4lq9XBo', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicTRnUmd3d3JsMzBua1kxTXd0UU04b2ZvQmdSRTVhWFp5ZEhldUhZNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90aW0ta2llbT9uYW1lPSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7fQ==', 1743053536);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tins`
--

CREATE TABLE `thong_tins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `viewers` int(11) NOT NULL DEFAULT 0,
  `category` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'phong', 'lap@gmail.com', NULL, '$2y$12$HUknEGYhjAUOGZujzqRnT.ze.XwLSJuKwLCo5roC8rg1rslqksu/e', NULL, '2025-03-24 22:55:06', '2025-03-24 22:55:06'),
(2, 'Lê Minh Thọ', 'leminhtho762@gmail.com', NULL, '$2y$12$5S0HY0HaDLm1aAG3yTykGOZ6i.ezI7pM3ctAT7RSYKFBttSFzJcr2', NULL, '2025-03-24 22:56:39', '2025-03-26 10:54:47'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$12$D0YlkB3LjI/f3Ydyhhorf.VHLGYCCDuAfepcT/fEwVMBULigHKdMu', NULL, '2025-03-25 10:15:24', '2025-03-25 10:15:24'),
(4, 'admin1', 'admin1@gmail.com', NULL, '$2y$12$B9yF2uvghjwVH9JHL8MnTOPtjv5H1ulWuex16jkHg.H1L.SgBs//O', NULL, '2025-03-26 08:57:17', '2025-03-26 08:57:17'),
(5, 'Lê Thành Nam', 'nle61144@gmail.com', NULL, '$2y$12$U3Bd3pfHQqpWZ7k2M/Ij7OZKfiFLhIPQhsbfH9G7GYnNTtbF4EoFi', NULL, '2025-03-26 22:15:12', '2025-03-26 22:16:55');

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
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_name_unique` (`name`),
  ADD KEY `posts_category_foreign` (`category`);

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
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `thong_tins`
--
ALTER TABLE `thong_tins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
