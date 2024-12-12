-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3066
-- Generation Time: Dec 12, 2024 at 07:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` enum('admin','recruiter','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `user_name`, `password`, `email`, `full_name`, `avatar`, `role`) VALUES
(2, 'Adminz', '827ccb0eea8a706c4c34a16891f84e7b', 'manhphuc2003@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/default-avatar.jpg', 'admin'),
(3, 'Ctyuuu', '827ccb0eea8a706c4c34a16891f84e7b', 'Ete@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/avt1.jpg', 'recruiter'),
(10, 'Esttt', '827ccb0eea8a706c4c34a16891f84e7b', '555@gmail.com', 'Fuv', '/storage/photos/shares/avatar/avt1.jpg', 'recruiter'),
(13, 'Estogen', '827ccb0eea8a706c4c34a16891f84e7b', 'manhphuc244003@gmail.com', 'PHuccccccc', '/storage/photos/shares/avatar/avt1.jpg', 'recruiter'),
(14, 'Ingredian', '827ccb0eea8a706c4c34a16891f84e7b', 'manhphuc2333003@gmail.com', 'Manh Phucrrr', '/storage/photos/shares/avatar/avt2.jpg', 'recruiter'),
(15, 'User999', '827ccb0eea8a706c4c34a16891f84e7b', 'mp@gmail.com', 'Manh phhhh', '/storage/photos/shares/avatar/client-1.jpg', 'user'),
(16, 'User888', '827ccb0eea8a706c4c34a16891f84e7b', 'bmp@gmail.com', 'Bui Manh Phuc', '/storage/photos/shares/avatar/client-2.jpg', 'user'),
(17, 'User777', '827ccb0eea8a706c4c34a16891f84e7b', 'bmp1@gmail.com', 'Bui Manh Phuc', '/storage/photos/shares/avatar/client-3.jpg', 'user'),
(18, 'User666', '827ccb0eea8a706c4c34a16891f84e7b', 'bmp12@gmail.com', 'Bui Manh Phuc', '/storage/photos/shares/avatar/client-4.jpg', 'user'),
(19, 'User555', '827ccb0eea8a706c4c34a16891f84e7b', 'bmp123@gmail.com', 'Bui Manh Phuc', '/storage/photos/shares/avatar/client-5.jpg', 'user'),
(20, 'Ezzzzzzzz', '827ccb0eea8a706c4c34a16891f84e7b', 'Ete222@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/avt1.jpg', 'recruiter'),
(21, 'Esto666', '827ccb0eea8a706c4c34a16891f84e7b', 'manhp2huc2003@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/avt2.jpg', 'recruiter'),
(22, 'Adminz333', '827ccb0eea8a706c4c34a16891f84e7b', 'manhph222uc2003@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/avt1.jpg', 'recruiter'),
(23, 'Adminz2222', 'b0baee9d279d34fa1dfd71aadb908c3f', 'Eteww@gmail.com', 'Manh Phuc444', '/storage/photos/shares/avatar/avt2.jpg', 'recruiter'),
(24, 'Adminz22222', '827ccb0eea8a706c4c34a16891f84e7b', 'manhphu222c2003@gmail.com', 'Manh Phuczzz', '/storage/photos/shares/avatar/default-avatar.jpg', 'recruiter'),
(25, 'Adminzdd', '827ccb0eea8a706c4c34a16891f84e7b', 'manhphuc20203@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/default-avatar.jpg', 'recruiter'),
(26, 'Adminz55', '827ccb0eea8a706c4c34a16891f84e7b', 'manhph33uc2003@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/default-avatar.jpg', 'recruiter'),
(27, 'Adminz2244', '827ccb0eea8a706c4c34a16891f84e7b', 'manhphuc22003@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/default-avatar.jpg', 'recruiter'),
(28, 'Adminz22', '827ccb0eea8a706c4c34a16891f84e7b', '42222@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/default-avatar.jpg', 'recruiter'),
(29, 'Adminz222', '827ccb0eea8a706c4c34a16891f84e7b', 'manh2phuc2003@gmail.com', 'sssssss', '/storage/photos/shares/avatar/default-avatar.jpg', 'recruiter'),
(30, 'Adminz298989', '827ccb0eea8a706c4c34a16891f84e7b', 'manhph2uc2003@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/default-avatar.jpg', 'recruiter'),
(31, 'User123', '827ccb0eea8a706c4c34a16891f84e7b', 'manhphuc2s003@gmail.com', 'Manh Phuc', '/storage/photos/shares/avatar/default-avatar.jpg', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `account_id`) VALUES
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `application_id` int(11) NOT NULL,
  `cv_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('0','1','2','3','4') NOT NULL,
  `academy` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT 'N/A',
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `response` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`application_id`, `cv_id`, `job_id`, `name`, `type`, `academy`, `email`, `phone`, `description`, `status`, `created_at`, `response`) VALUES
(1, 5, 4, 'Manh phuc', '1', 'Đại học Vinh', 'manhphuc2003@gmail.com', '090282883', 'hhhhahahah', 1, '2024-12-11 08:04:35', '<h2>Discover the riches of our editor ✨</h2>\r\n\r\n<p>Read on to better understand the functionalities you can test with this demo.</p>\r\n\r\n<h3>💡 Did you know that&hellip;</h3>\r\n\r\n<ul>\r\n	<li>CKEditor is <strong>customizable</strong>. You can fine-tune the set of enabled plugins, available toolbar buttons, and the behavior of features.</li>\r\n	<li>The editor supports <strong>@mentions</strong>. Start typing <code>@An</code> to see available suggestions.</li>\r\n	<li>You can also insert dynamic placeholders within the content using <strong>merge fields</strong>! Start typing <code>{{</code> or use the <img alt=\"Insert merge field\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/merge-field-insert.png\" style=\"height:20px; width:20px\" /> button to insert them. Use the <img alt=\"Preview merge field\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/merge-fields-preview.png\" style=\"height:20px; width:20px\" /> button to preview values. {{mergeFieldExample}}</li>\r\n	<li>You can <strong>paste content</strong> from Word or Google Docs, retaining the original document structure and formatting.</li>\r\n	<li>Thanks to Import from Word <img alt=\"Import from Word\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/import_word.png\" style=\"height:20px; width:20px\" />, you can <strong>convert</strong> a DOCX document into HTML and edit it in CKEditor 5.</li>\r\n	<li>You can <strong>export your document</strong> to PDF <img alt=\"Export to PDF\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/export_pdf.png\" style=\"height:20px; width:20px\" /> or Word <img alt=\"Export to Word\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/export_word.png\" style=\"height:20px; width:20px\" /> with a single click.</li>\r\n	<li>This demo showcases <a href=\"https://ckeditor.com/ckbox/\" target=\"_blank\">CKBox</a> <img alt=\"Browse files\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/browse-files.png\" style=\"height:20px; width:20px\" /> to <strong>manage images and other files</strong>. You can enable your own upload adapter instead.</li>\r\n</ul>\r\n\r\n<h3>🚀 Autoformatting in CKEditor 5</h3>\r\n\r\n<p>Some features of CKEditor 5 might be hard to spot at first glance. Thanks to <strong>autoformatting</strong>, you can use handy shortcuts in the editor to format the text on the fly:</p>'),
(2, 1, 2, 'Manh phuc', '2', 'Đại học Vinh', 'manhphuc2003@gmail.com', '090282883', 'hhhhahahah', 1, '2024-12-11 07:55:35', NULL),
(3, 2, 4, 'Manh phuc', '4', 'Đại học Vinh', 'manhphuc2003@gmail.com', '090282883', 'hhhhahahah', 1, '2024-12-11 08:04:03', '<h2>Discover the riches of our editor ✨</h2>\r\n\r\n<p>Read on to better understand the functionalities you can test with this demo.</p>\r\n\r\n<h3>💡 Did you know that&hellip;</h3>\r\n\r\n<ul>\r\n	<li>CKEditor is <strong>customizable</strong>. You can fine-tune the set of enabled plugins, available toolbar buttons, and the behavior of features.</li>\r\n	<li>The editor supports <strong>@mentions</strong>. Start typing <code>@An</code> to see available suggestions.</li>\r\n	<li>You can also insert dynamic placeholders within the content using <strong>merge fields</strong>! Start typing <code>{{</code> or use the <img alt=\"Insert merge field\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/merge-field-insert.png\" style=\"height:20px; width:20px\" /> button to insert them. Use the <img alt=\"Preview merge field\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/merge-fields-preview.png\" style=\"height:20px; width:20px\" /> button to preview values. {{mergeFieldExample}}</li>\r\n	<li>You can <strong>paste content</strong> from Word or Google Docs, retaining the original document structure and formatting.</li>\r\n	<li>Thanks to Import from Word <img alt=\"Import from Word\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/import_word.png\" style=\"height:20px; width:20px\" />, you can <strong>convert</strong> a DOCX document into HTML and edit it in CKEditor 5.</li>\r\n	<li>You can <strong>export your document</strong> to PDF <img alt=\"Export to PDF\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/export_pdf.png\" style=\"height:20px; width:20px\" /> or Word <img alt=\"Export to Word\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/export_word.png\" style=\"height:20px; width:20px\" /> with a single click.</li>\r\n	<li>This demo showcases <a href=\"https://ckeditor.com/ckbox/\" target=\"_blank\">CKBox</a> <img alt=\"Browse files\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/browse-files.png\" style=\"height:20px; width:20px\" /> to <strong>manage images and other files</strong>. You can enable your own upload adapter instead.</li>\r\n</ul>\r\n\r\n<h3>🚀 Autoformatting in CKEditor 5</h3>\r\n\r\n<p>Some features of CKEditor 5 might be hard to spot at first glance. Thanks to <strong>autoformatting</strong>, you can use handy shortcuts in the editor to format the text on the fly:</p>'),
(16, 1, 2, 'Manh phuc', '1', 'Đại học Vinh', 'manhphuc2003@gmail.com', '090282883', 'hhhhahahah', 1, '2024-12-11 07:57:33', '<h2>Discover the riches of our editor ✨</h2>\r\n\r\n<p>Read on to better understand the functionalities you can test with this demo.</p>\r\n\r\n<h3>💡 Did you know that&hellip;</h3>\r\n\r\n<ul>\r\n	<li>CKEditor is <strong>customizable</strong>. You can fine-tune the set of enabled plugins, available toolbar buttons, and the behavior of features.</li>\r\n	<li>The editor supports <strong>@mentions</strong>. Start typing <code>@An</code> to see available suggestions.</li>\r\n	<li>You can also insert dynamic placeholders within the content using <strong>merge fields</strong>! Start typing <code>{{</code> or use the <img alt=\"Insert merge field\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/merge-field-insert.png\" style=\"height:20px; width:20px\" /> button to insert them. Use the <img alt=\"Preview merge field\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/merge-fields-preview.png\" style=\"height:20px; width:20px\" /> button to preview values. {{mergeFieldExample}}</li>\r\n	<li>You can <strong>paste content</strong> from Word or Google Docs, retaining the original document structure and formatting.</li>\r\n	<li>Thanks to Import from Word <img alt=\"Import from Word\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/import_word.png\" style=\"height:20px; width:20px\" />, you can <strong>convert</strong> a DOCX document into HTML and edit it in CKEditor 5.</li>\r\n	<li>You can <strong>export your document</strong> to PDF <img alt=\"Export to PDF\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/export_pdf.png\" style=\"height:20px; width:20px\" /> or Word <img alt=\"Export to Word\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/export_word.png\" style=\"height:20px; width:20px\" /> with a single click.</li>\r\n	<li>This demo showcases <a href=\"https://ckeditor.com/ckbox/\" target=\"_blank\">CKBox</a> <img alt=\"Browse files\" src=\"https://ckeditor.com/assets/images/ckdemo/feature-rich/browse-files.png\" style=\"height:20px; width:20px\" /> to <strong>manage images and other files</strong>. You can enable your own upload adapter instead.</li>\r\n</ul>\r\n\r\n<h3>🚀 Autoformatting in CKEditor 5</h3>\r\n\r\n<p>Some features of CKEditor 5 might be hard to spot at first glance. Thanks to <strong>autoformatting</strong>, you can use handy shortcuts in the editor to format the text on the fly:</p>'),
(17, 5, 2, 'Samsuck galaseck s25', '0', 'Đại học này kia', 'Ete@gmail.com', '09047868933', 'test', 1, '2024-12-11 07:58:25', NULL),
(18, 1, 7, 'Samsuck galaseck s25', '1', 'Đại học này kia', 'manhphuc2003@gmail.com', '0904786893', 'aaaaewew', 0, '2024-12-11 06:43:09', 'a'),
(19, 1, 8, 'Samsuck galaseck s25', '1', 'Đại học này kia', 'Ete@gmail.com', '09047868934', 'aaaajjjjss', 2, '2024-12-11 09:04:21', '<p>adsadsadsad</p>'),
(20, 9, 9, 'Bui Phuc', '1', 'Đại học này kia', 'manhphuc2003@gmail.com', '090478689344', 'aaaajjjj', 2, '2024-12-11 08:06:16', '<p>$application = applications::find($request-&gt;application_id);</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; if ($application) {</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // Cập nhật dữ liệu</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $application-&gt;response = $request-&gt;response;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $application-&gt;status = 1; // Chấp nhận</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $application-&gt;save();</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; // Gửi email với nội dung phản hồi</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mail::to(&#39;manhphuc2003@gmail.com&#39;)-&gt;send(new ApplicationApproveMail($application-&gt;response));</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return redirect()-&gt;route(&#39;collab.view-application&#39;, $request-&gt;application_id);</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; }</p>'),
(21, 1, 8, 'Samsuck galaseck s25', '1', 'Đại học này kia', 'manhphuc2003@gmail.com', '0904786893', 'test', 0, '2024-12-11 09:03:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`area_id`, `area_name`, `description`) VALUES
(1, 'Công nghệ thông tin', ''),
(2, 'Kinh tế', NULL),
(3, 'Vận chuyển', NULL),
(4, 'Khác', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(1, 'Nghệ An'),
(2, 'Hà Nội'),
(3, 'Thanh Hóa'),
(4, 'Hải Phỏng'),
(5, 'An Giang'),
(6, 'Bạc Liêu'),
(7, 'Hòa Bình'),
(8, 'Hà Nam'),
(9, 'Hà Tĩnh'),
(10, 'Hưng Yên');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `cv_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cv_name` varchar(255) NOT NULL,
  `cv_path` varchar(255) DEFAULT NULL,
  `cv_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`cv_id`, `user_id`, `cv_name`, `cv_path`, `cv_content`) VALUES
(1, 1, 'cv 1', '/storage/files/shares/public_cv/Test.pdf', NULL),
(2, 1, 'cv 2', '/storage/files/shares/public_cv/Test.pdf', NULL),
(3, 3, 'cv 3', '/storage/files/shares/public_cv/Test.pdf', NULL),
(4, 4, 'cv 4', '/storage/files/shares/public_cv/Test.pdf', NULL),
(5, 1, 'CV ứng tuyển cho Kế toán', '/storage/files/15/part-1.pdf', NULL),
(6, 2, 'CV ứng tuyển cho Kế toán B', '/storage/files/16/part-1.pdf', NULL),
(7, 2, 'CV ứng tuyển cho Kế toán B', '/storage/files/16/part-1.pdf', NULL),
(8, 1, 'CV ứng tuyển cho Kế toán', '/storage/files/15/part-1.pdf', NULL),
(9, 1, 'CV ứng tuyển cho Dev C++', '/storage/files/15/part-1.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_category_id` int(11) DEFAULT NULL,
  `job_name` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `city_id` int(11) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 5,
  `content` text NOT NULL,
  `recruiter_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_category_id`, `job_name`, `salary`, `location`, `city_id`, `requirement`, `quantity`, `content`, `recruiter_id`, `status`, `created_at`, `expired_at`) VALUES
(2, 2, 'Kế toán B', '166 triệu', 'Số 16, Quang Trung, Vinh, Nghệ An', 5, '3 năm làm việc', 5, '<h3>M&ocirc; tả c&ocirc;ng việc</h3>\r\n\r\n<p>- Kiểm tra, kiểm so&aacute;t c&aacute;c nghiệp vụ kinh tế ph&aacute;t sinh, hạch to&aacute;n theo quy định của thuế</p>\r\n\r\n<p>- Ho&agrave;n thiện hồ sơ, chứng từ lưu trữ ph&ugrave; hợp với quy định về thuế - Kiểm so&aacute;t, lập, gửi c&aacute;c b&aacute;o c&aacute;o, tờ khai thuế đ&uacute;ng quy định</p>\r\n\r\n<p>- Kiểm so&aacute;t, đối chiếu, chốt số dư c&aacute;c t&agrave;i khoản định kỳ - Lập b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh, quyết to&aacute;n thuế TNDN, TNCN h&agrave;ng năm</p>\r\n\r\n<p>- Trực tiếp l&agrave;m việc với cơ quan thuế khi c&oacute; ph&aacute;t sinh.</p>\r\n\r\n<p>- Cập nhật kịp thời c&aacute;c th&ocirc;ng tin, ch&iacute;nh s&aacute;ch của Luật thuế c&oacute; li&ecirc;n quan đến hoạt động kinh doanh của c&ocirc;ng ty.</p>\r\n\r\n<p>- C&aacute;c c&ocirc;ng việc kh&aacute;c theo y&ecirc;u cầu của cấp tr&ecirc;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Y&ecirc;u cầu ứng vi&ecirc;n</h3>\r\n\r\n<p>- C&oacute; &iacute;t nhất 3-5 năm kinh nghiệm ở vị tr&iacute; kế to&aacute;n thuế hoặc kế to&aacute;n tổng hợp trở l&ecirc;n</p>\r\n\r\n<p>- Tốt nghiệp Đại học chuy&ecirc;n ng&agrave;nh Kế to&aacute;n.</p>\r\n\r\n<p>- Sử dụng th&agrave;nh thạo phần mềm Excel, phần mềm văn ph&ograve;ng.</p>\r\n\r\n<p>- C&oacute; kỹ năng ph&acirc;n t&iacute;ch, tổng hợp, xử l&yacute; th&ocirc;ng tin.</p>\r\n\r\n<p>- C&oacute; kỹ năng giao tiếp, c&oacute; tư duy logic, cẩn thận, tỉ mỉ, trung thực.</p>\r\n\r\n<p>- Nắm vững c&aacute;c kiến thức về kế to&aacute;n thuế - C&oacute; khả năng l&agrave;m việc độc lập v&agrave; theo nh&oacute;m.</p>\r\n\r\n<p>- Ưu ti&ecirc;n ứng vi&ecirc;n c&oacute; kinh nghiệm l&agrave;m việc trong lĩnh vực m&ocirc;i giới bất động sản</p>\r\n\r\n<p>- Độ tuổi 22-35 tuổi</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Quyền lợi</h3>\r\n\r\n<p><strong>- Mức lương từ 12-14 triệu</strong></p>\r\n\r\n<p>- Được hưởng đầy đủ c&aacute;c chế độ theo luật lao động hiện h&agrave;nh (BHXH, BHYT, BHTN).</p>\r\n\r\n<p>- Được tham gia c&aacute;c hoạt động tập thể, teambuilding, du lịch.</p>\r\n\r\n<p>- Được đ&agrave;o tạo n&acirc;ng cao nghiệp vụ.</p>\r\n\r\n<p>- M&ocirc;i trường l&agrave;m việc chuy&ecirc;n nghiệp, năng động, th&acirc;n thiện</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Địa điểm l&agrave;m việc</h3>\r\n\r\n<p>- H&agrave; Nội: Tầng 3, To&agrave; Handiresco Complex, Số 31 L&ecirc; Văn Lương, Thanh Xu&acirc;n</p>\r\n\r\n<h3>C&aacute;ch thức ứng tuyển</h3>\r\n\r\n<p>Ứng vi&ecirc;n nộp hồ sơ trực tuyến bằng c&aacute;ch bấm&nbsp;<strong>Ứng tuyển</strong>&nbsp;ngay dưới đ&acirc;y.</p>\r\n\r\n<p>Hạn nộp hồ sơ: 06/12/2024</p>', 9, 1, '2024-12-03 18:17:21', '2024-12-29 18:18:06'),
(4, 2, 'Kế toán', '16 triệu', 'Số 16, Quang Trung, Vinh', 5, '3 năm', 5, '<h3>M&ocirc; tả c&ocirc;ng việc</h3>\r\n\r\n<p>- Kiểm tra, kiểm so&aacute;t c&aacute;c nghiệp vụ kinh tế ph&aacute;t sinh, hạch to&aacute;n theo quy định của thuế</p>\r\n\r\n<p>- Ho&agrave;n thiện hồ sơ, chứng từ lưu trữ ph&ugrave; hợp với quy định về thuế - Kiểm so&aacute;t, lập, gửi c&aacute;c b&aacute;o c&aacute;o, tờ khai thuế đ&uacute;ng quy định</p>\r\n\r\n<p>- Kiểm so&aacute;t, đối chiếu, chốt số dư c&aacute;c t&agrave;i khoản định kỳ - Lập b&aacute;o c&aacute;o t&agrave;i ch&iacute;nh, quyết to&aacute;n thuế TNDN, TNCN h&agrave;ng năm</p>\r\n\r\n<p>- Trực tiếp l&agrave;m việc với cơ quan thuế khi c&oacute; ph&aacute;t sinh.</p>\r\n\r\n<p>- Cập nhật kịp thời c&aacute;c th&ocirc;ng tin, ch&iacute;nh s&aacute;ch của Luật thuế c&oacute; li&ecirc;n quan đến hoạt động kinh doanh của c&ocirc;ng ty.</p>\r\n\r\n<p>- C&aacute;c c&ocirc;ng việc kh&aacute;c theo y&ecirc;u cầu của cấp tr&ecirc;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Y&ecirc;u cầu ứng vi&ecirc;n</h3>\r\n\r\n<p>- C&oacute; &iacute;t nhất 3-5 năm kinh nghiệm ở vị tr&iacute; kế to&aacute;n thuế hoặc kế to&aacute;n tổng hợp trở l&ecirc;n</p>\r\n\r\n<p>- Tốt nghiệp Đại học chuy&ecirc;n ng&agrave;nh Kế to&aacute;n.</p>\r\n\r\n<p>- Sử dụng th&agrave;nh thạo phần mềm Excel, phần mềm văn ph&ograve;ng.</p>\r\n\r\n<p>- C&oacute; kỹ năng ph&acirc;n t&iacute;ch, tổng hợp, xử l&yacute; th&ocirc;ng tin.</p>\r\n\r\n<p>- C&oacute; kỹ năng giao tiếp, c&oacute; tư duy logic, cẩn thận, tỉ mỉ, trung thực.</p>\r\n\r\n<p>- Nắm vững c&aacute;c kiến thức về kế to&aacute;n thuế - C&oacute; khả năng l&agrave;m việc độc lập v&agrave; theo nh&oacute;m.</p>\r\n\r\n<p>- Ưu ti&ecirc;n ứng vi&ecirc;n c&oacute; kinh nghiệm l&agrave;m việc trong lĩnh vực m&ocirc;i giới bất động sản</p>\r\n\r\n<p>- Độ tuổi 22-35 tuổi</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Quyền lợi</h3>\r\n\r\n<p><strong>- Mức lương từ 12-14 triệu</strong></p>\r\n\r\n<p>- Được hưởng đầy đủ c&aacute;c chế độ theo luật lao động hiện h&agrave;nh (BHXH, BHYT, BHTN).</p>\r\n\r\n<p>- Được tham gia c&aacute;c hoạt động tập thể, teambuilding, du lịch.</p>\r\n\r\n<p>- Được đ&agrave;o tạo n&acirc;ng cao nghiệp vụ.</p>\r\n\r\n<p>- M&ocirc;i trường l&agrave;m việc chuy&ecirc;n nghiệp, năng động, th&acirc;n thiện</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Địa điểm l&agrave;m việc</h3>\r\n\r\n<p>- H&agrave; Nội: Tầng 3, To&agrave; Handiresco Complex, Số 31 L&ecirc; Văn Lương, Thanh Xu&acirc;n</p>\r\n\r\n<h3>C&aacute;ch thức ứng tuyển</h3>\r\n\r\n<p>Ứng vi&ecirc;n nộp hồ sơ trực tuyến bằng c&aacute;ch bấm&nbsp;<strong>Ứng tuyển</strong>&nbsp;ngay dưới đ&acirc;y.</p>\r\n\r\n<p>Hạn nộp hồ sơ: 06/12/2024</p>', 9, 1, '2024-12-03 18:17:21', '2024-12-29 18:18:06'),
(5, 1, 'Kế toán', '16 triệu', 'zzz', 3, '3 năm làm việc', 5, '<p>aaaaa</p>', 9, 1, '2024-12-03 18:17:21', '2024-12-29 18:18:06'),
(6, 2, 'Kế t', '19 triệu', 'Số 16, Quang Trung, Vinh, Nghệ An', 4, '3 năm làm việc', 5, '<p>111</p>', 9, 1, '2024-12-03 18:17:21', '2024-12-29 18:18:06'),
(7, 1, 'Dev C++', '50 triệu', 'Số 2, đường B, thành phố C, tỉnh Nghệ An', 10, '3 năm làm việc', 7, '<h3>M&ocirc; tả c&ocirc;ng việc</h3>\r\n\r\n<ul>\r\n	<li>Quản l&yacute; nh&oacute;m kiểm to&aacute;n</li>\r\n	<li>Chịu tr&aacute;ch nhiệm tổ chức v&agrave; thực hiện c&ocirc;ng việc kiểm to&aacute;n</li>\r\n	<li>Quản l&yacute;, tư vấn v&agrave; hỗ trợ kh&aacute;ch h&agrave;ng</li>\r\n	<li>Đ&agrave;o tạo v&agrave; n&acirc;ng cao kỹ năng chuy&ecirc;n m&ocirc;n cho th&agrave;nh vi&ecirc;n trong nh&oacute;m kiểm to&aacute;n</li>\r\n</ul>\r\n\r\n<h3>Y&ecirc;u cầu ứng vi&ecirc;n</h3>\r\n\r\n<ul>\r\n	<li><strong>Ưu ti&ecirc;n đ&atilde; c&oacute; chứng chỉ CPA</strong></li>\r\n	<li><strong>C&oacute; kinh nghiệm l&agrave;m việc trong lĩnh vực kiểm to&aacute;n độc lập từ tr&ecirc;n 3 năm</strong></li>\r\n	<li>C&oacute; kỹ năng giao tiếp v&agrave; xử l&yacute; văn bản bằng tiếng Anh (ưu ti&ecirc;n)</li>\r\n	<li>Nắm vững c&aacute;c quy định, chuẩn mực kế to&aacute;n v&agrave; kiểm to&aacute;n, c&aacute;c ph&aacute;p luật li&ecirc;n quan đến t&agrave;i ch&iacute;nh v&agrave; thuế</li>\r\n	<li>Kỹ năng l&atilde;nh đạo tốt, c&oacute; khả năng quản l&yacute; đội ngũ, lập kế hoạch v&agrave; ph&acirc;n c&ocirc;ng c&ocirc;ng việc hiệu quả</li>\r\n</ul>\r\n\r\n<h3>Quyền lợi</h3>\r\n\r\n<ul>\r\n	<li><strong>Lương: lương cứng c&oacute; thể đến 25tr/th&aacute;ng</strong></li>\r\n	<li>Thưởng, phụ cấp: phụ cấp c&ocirc;ng t&aacute;c, phụ cấp kinh nghiệm, x&eacute;t thưởng hiệu suất l&agrave;m việc, v&agrave; thưởng CPA k&yacute; BCKT ...</li>\r\n	<li>Cơ hội thăng tiến: được xem x&eacute;t l&ecirc;n vị tr&iacute; trưởng ph&ograve;ng, quản l&yacute; cấp cao của C&ocirc;ng ty</li>\r\n	<li>Ph&uacute;c lợi: tham gia bảo hiểm đầy đủ, đảm bảo ng&agrave;y nghỉ ph&eacute;p, ng&agrave;y nghỉ lễ theo quy định, tham gia team building h&agrave;ng năm, lương th&aacute;ng 13 ...</li>\r\n	<li>M&ocirc;i trường l&agrave;m việc: được l&agrave;m việc trong m&ocirc;i trường chuy&ecirc;n nghiệp, c&oacute; đội ngũ l&atilde;nh đạo kỳ cựu trong ng&agrave;nh Kiểm to&aacute;n lu&ocirc;n tạo điều kiện, hỗ trợ về mặt chuy&ecirc;n m&ocirc;n v&agrave; chuy&ecirc;n ng&agrave;nh</li>\r\n</ul>\r\n\r\n<h3>Địa điểm l&agrave;m việc</h3>\r\n\r\n<p>- Hồ Ch&iacute; Minh: 115-115A V&otilde; Văn Tần, P. V&otilde; Thị S&aacute;u, Quận 3</p>\r\n\r\n<h3>Thời gian l&agrave;m việc</h3>\r\n\r\n<p>Thứ 2 - Thứ 6 (từ 08:00 đến 17:00)</p>\r\n\r\n<h3>C&aacute;ch thức ứng tuyển</h3>\r\n\r\n<p>Ứng vi&ecirc;n nộp hồ sơ trực tuyến bằng c&aacute;ch bấm&nbsp;<strong>Ứng tuyển</strong>&nbsp;ngay dưới đ&acirc;y.</p>\r\n\r\n<p>Hạn nộp hồ sơ: 27/12/2024</p>', 11, 1, '2024-12-03 18:17:21', '2024-12-29 18:18:06'),
(8, 1, 'Dev Python', '166 triệu', 'Số 16, Quang Trung, Vinh, Nghệ An', 5, '3 năm làm việc', 7, '<h3>M&ocirc; tả c&ocirc;ng việc</h3>\r\n\r\n<ul>\r\n	<li>Quản l&yacute; nh&oacute;m kiểm to&aacute;n</li>\r\n	<li>Chịu tr&aacute;ch nhiệm tổ chức v&agrave; thực hiện c&ocirc;ng việc kiểm to&aacute;n</li>\r\n	<li>Quản l&yacute;, tư vấn v&agrave; hỗ trợ kh&aacute;ch h&agrave;ng</li>\r\n	<li>Đ&agrave;o tạo v&agrave; n&acirc;ng cao kỹ năng chuy&ecirc;n m&ocirc;n cho th&agrave;nh vi&ecirc;n trong nh&oacute;m kiểm to&aacute;n</li>\r\n</ul>\r\n\r\n<h3>Y&ecirc;u cầu ứng vi&ecirc;n</h3>\r\n\r\n<ul>\r\n	<li><strong>Ưu ti&ecirc;n đ&atilde; c&oacute; chứng chỉ CPA</strong></li>\r\n	<li><strong>C&oacute; kinh nghiệm l&agrave;m việc trong lĩnh vực kiểm to&aacute;n độc lập từ tr&ecirc;n 3 năm</strong></li>\r\n	<li>C&oacute; kỹ năng giao tiếp v&agrave; xử l&yacute; văn bản bằng tiếng Anh (ưu ti&ecirc;n)</li>\r\n	<li>Nắm vững c&aacute;c quy định, chuẩn mực kế to&aacute;n v&agrave; kiểm to&aacute;n, c&aacute;c ph&aacute;p luật li&ecirc;n quan đến t&agrave;i ch&iacute;nh v&agrave; thuế</li>\r\n	<li>Kỹ năng l&atilde;nh đạo tốt, c&oacute; khả năng quản l&yacute; đội ngũ, lập kế hoạch v&agrave; ph&acirc;n c&ocirc;ng c&ocirc;ng việc hiệu quả</li>\r\n</ul>\r\n\r\n<h3>Quyền lợi</h3>\r\n\r\n<ul>\r\n	<li><strong>Lương: lương cứng c&oacute; thể đến 25tr/th&aacute;ng</strong></li>\r\n	<li>Thưởng, phụ cấp: phụ cấp c&ocirc;ng t&aacute;c, phụ cấp kinh nghiệm, x&eacute;t thưởng hiệu suất l&agrave;m việc, v&agrave; thưởng CPA k&yacute; BCKT ...</li>\r\n	<li>Cơ hội thăng tiến: được xem x&eacute;t l&ecirc;n vị tr&iacute; trưởng ph&ograve;ng, quản l&yacute; cấp cao của C&ocirc;ng ty</li>\r\n	<li>Ph&uacute;c lợi: tham gia bảo hiểm đầy đủ, đảm bảo ng&agrave;y nghỉ ph&eacute;p, ng&agrave;y nghỉ lễ theo quy định, tham gia team building h&agrave;ng năm, lương th&aacute;ng 13 ...</li>\r\n	<li>M&ocirc;i trường l&agrave;m việc: được l&agrave;m việc trong m&ocirc;i trường chuy&ecirc;n nghiệp, c&oacute; đội ngũ l&atilde;nh đạo kỳ cựu trong ng&agrave;nh Kiểm to&aacute;n lu&ocirc;n tạo điều kiện, hỗ trợ về mặt chuy&ecirc;n m&ocirc;n v&agrave; chuy&ecirc;n ng&agrave;nh</li>\r\n</ul>\r\n\r\n<h3>Địa điểm l&agrave;m việc</h3>\r\n\r\n<p>- Hồ Ch&iacute; Minh: 115-115A V&otilde; Văn Tần, P. V&otilde; Thị S&aacute;u, Quận 3</p>\r\n\r\n<h3>Thời gian l&agrave;m việc</h3>\r\n\r\n<p>Thứ 2 - Thứ 6 (từ 08:00 đến 17:00)</p>\r\n\r\n<h3>C&aacute;ch thức ứng tuyển</h3>\r\n\r\n<p>Ứng vi&ecirc;n nộp hồ sơ trực tuyến bằng c&aacute;ch bấm&nbsp;<strong>Ứng tuyển</strong>&nbsp;ngay dưới đ&acirc;y.</p>\r\n\r\n<p>Hạn nộp hồ sơ: 27/12/2024</p>', 9, 1, '2024-12-03 18:17:21', '2024-12-29 18:18:06'),
(9, 1, 'Dev C++', '16 triệu', 'Số 2, đường B, thành phố C, tỉnh Nghệ An', 3, '3 năm làm việc', 5, '<p>ggggg</p>', 9, 1, '2024-12-03 18:17:21', '2024-12-29 18:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_migrate`
--

CREATE TABLE `jobs_migrate` (
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
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `job_category_id` int(11) NOT NULL,
  `job_category_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`job_category_id`, `job_category_name`, `description`, `status`) VALUES
(1, 'Công nghệ', 'test', 1),
(2, 'Game Developer', 'h', 1),
(4, 'Kiến trúc', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `menu_order` int(11) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `icon` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2014_10_12_000000_create_users_table', 2),
(5, '2024_11_16_121800_create_jobs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `shorten` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `post_category_id`, `image`, `shorten`, `admin_id`, `created_at`, `updated_at`, `content`, `status`) VALUES
(18, 'Các ngành nghề khối C nào HOT? Thu nhập cao?aa', 1, '/storage/photos/shares/post_title_image/cong-viec-nganh-logistic-topcv4.jpg', 'Các ngành nghề khối C có đặc trưng là thiên về mảng văn hóa, xã hội. Bởi vậy, các nghề nghiệp sau khi tốt nghiệp ngành học khối C cũng yêu cầu nhiều hơn về kỹ năng văn chương và sử dụng ngôn ngữ. Vậy, đâu là những ngành khối C có mức lương ổn định và dễ xin việc nhất? Bài viết sau đây của TopCV.vn sẽ giúp bạn giải đáp nhé!', 12, '2024-11-09 13:17:50', '2024-11-10 09:05:38', '<h2><strong>Khối C l&agrave; g&igrave;?</strong></h2>\r\n\r\n<p>Khối C l&agrave; một trong bốn khối thi/x&eacute;t tuyển đại học ch&iacute;nh tại Việt Nam. Khối C tập trung v&agrave;o c&aacute;c m&ocirc;n Khoa học X&atilde; hội, l&agrave; lựa chọn của nhiều bạn trẻ c&oacute; niềm đam m&ecirc; về văn chương v&agrave; viết l&aacute;ch.&nbsp;</p>\r\n\r\n<p>Từ năm 2017, Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo đ&atilde; mở rộng v&agrave; ph&aacute;t triển khối C từ một khối thi đại học th&agrave;nh 19 khối x&eacute;t tuyển đại học. Trong số n&agrave;y, m&ocirc;n Ngữ văn l&agrave; m&ocirc;n bắt buộc xuất hiện trong tất cả c&aacute;c tổ hợp m&ocirc;n x&eacute;t tuyển.</p>\r\n\r\n<p>So với khối A hay khối B, D th&igrave; khối C c&oacute; tỷ lệ đăng k&yacute; thi v&agrave; theo học &iacute;t hơn, nhưng vẫn l&agrave; điểm đến l&yacute; tưởng của c&aacute;c bạn trẻ muốn theo đuổi nghề sư phạm, b&aacute;o ch&iacute;, luật, ch&iacute;nh trị hay du lịch, v.vv..</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/storage/photos/2/depositphotos_77620065-stock-pho.jpg\" style=\"height:398px; width:600px\" /></p>\r\n\r\n<h2><strong>C&aacute;c tổ hợp m&ocirc;n thi khối C</strong></h2>\r\n\r\n<p>Khối C gồm những m&ocirc;n n&agrave;o? Th&ocirc;ng thường khối C sẽ c&oacute; m&ocirc;n chủ đạo l&agrave; Ngữ Văn, khối C được chia l&agrave;m 20 tổ hợp như sau:</p>\r\n\r\n<ul>\r\n	<li>C01 (Văn - To&aacute;n - H&oacute;a)</li>\r\n	<li>C03 (Văn - To&aacute;n - Sử)</li>\r\n	<li>C04 (Văn - To&aacute;n - Địa)</li>\r\n	<li>C05 (Văn - L&yacute; - H&oacute;a)</li>\r\n	<li>C06 (Văn - L&yacute; - Sinh)</li>\r\n	<li>C07 (Văn - L&yacute; - Sử)</li>\r\n	<li>C08 (Văn - H&oacute;a - Sinh)</li>\r\n	<li>C09 (Văn - L&yacute; - Địa)</li>\r\n	<li>C10 (Văn - H&oacute;a - Sử)</li>\r\n	<li>C12 (Văn - Sinh - Sử)</li>\r\n	<li>C13 (Văn - Sinh - Địa)</li>\r\n	<li>C14 (Văn - To&aacute;n - GDCD)</li>\r\n	<li>C15 (Văn - To&aacute;n - KHXH)</li>\r\n	<li>C16 (Văn - L&yacute; - GDCD)</li>\r\n	<li>C17 (Văn - H&oacute;a - GDCD)</li>\r\n	<li>C19 (Văn - Sử - GDCD)</li>\r\n	<li>C20 (Văn - Địa - GDCD)</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/storage/photos/shares/post_image/gioi-thieu-ban-than-khi-phong-va (1).jpg\" style=\"height:500px; width:800px\" /></p>', 1),
(20, 'UAHAHHAHA', 2, '/storage/photos/shares/post_title_image/cac-nganh-nghe-khoi-a-1.jpg65d85.jpg', 'jhjhjhj', 12, '2024-11-09 13:18:32', '2024-11-10 09:05:41', '<h2><strong>Khối C l&agrave; g&igrave;?</strong></h2>\r\n\r\n<p>Khối C l&agrave; một trong bốn khối thi/x&eacute;t tuyển đại học ch&iacute;nh tại Việt Nam. Khối C tập trung v&agrave;o c&aacute;c m&ocirc;n Khoa học X&atilde; hội, l&agrave; lựa chọn của nhiều bạn trẻ c&oacute; niềm đam m&ecirc; về văn chương v&agrave; viết l&aacute;ch.&nbsp;</p>\r\n\r\n<p>Từ năm 2017, Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo đ&atilde; mở rộng v&agrave; ph&aacute;t triển khối C từ một khối thi đại học th&agrave;nh 19 khối x&eacute;t tuyển đại học. Trong số n&agrave;y, m&ocirc;n Ngữ văn l&agrave; m&ocirc;n bắt buộc xuất hiện trong tất cả c&aacute;c tổ hợp m&ocirc;n x&eacute;t tuyển.</p>\r\n\r\n<p>So với khối A hay khối B, D th&igrave; khối C c&oacute; tỷ lệ đăng k&yacute; thi v&agrave; theo học &iacute;t hơn, nhưng vẫn l&agrave; điểm đến l&yacute; tưởng của c&aacute;c bạn trẻ muốn theo đuổi nghề sư phạm, b&aacute;o ch&iacute;, luật, ch&iacute;nh trị hay du lịch, v.vv..</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/storage/photos/2/depositphotos_77620065-stock-pho.jpg\" /></p>\r\n\r\n<h2><strong>C&aacute;c tổ hợp m&ocirc;n thi khối C</strong></h2>\r\n\r\n<p>Khối C gồm những m&ocirc;n n&agrave;o? Th&ocirc;ng thường khối C sẽ c&oacute; m&ocirc;n chủ đạo l&agrave; Ngữ Văn, khối C được chia l&agrave;m 20 tổ hợp như sau:</p>\r\n\r\n<ul>\r\n	<li>C01 (Văn - To&aacute;n - H&oacute;a)</li>\r\n	<li>C03 (Văn - To&aacute;n - Sử)</li>\r\n	<li>C04 (Văn - To&aacute;n - Địa)</li>\r\n	<li>C05 (Văn - L&yacute; - H&oacute;a)</li>\r\n	<li>C06 (Văn - L&yacute; - Sinh)</li>\r\n	<li>C07 (Văn - L&yacute; - Sử)</li>\r\n	<li>C08 (Văn - H&oacute;a - Sinh)</li>\r\n	<li>C09 (Văn - L&yacute; - Địa)</li>\r\n	<li>C10 (Văn - H&oacute;a - Sử)</li>\r\n	<li>C12 (Văn - Sinh - Sử)</li>\r\n	<li>C13 (Văn - Sinh - Địa)</li>\r\n	<li>C14 (Văn - To&aacute;n - GDCD)</li>\r\n	<li>C15 (Văn - To&aacute;n - KHXH)</li>\r\n	<li>C16 (Văn - L&yacute; - GDCD)</li>\r\n	<li>C17 (Văn - H&oacute;a - GDCD)</li>\r\n	<li>C19 (Văn - Sử - GDCD)</li>\r\n	<li>C20 (Văn - Địa - GDCD)</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/storage/photos/shares/post_image/gioi-thieu-ban-than-khi-phong-va (1).jpg\" />​​​​​​​</p>', 1),
(21, 'Hôm nay trời đẹp', 1, '/storage/photos/2/depositphotos_77620065-stock-pho.jpg', 'Đẹp', 12, '2024-11-10 08:57:57', '2024-11-10 08:57:57', '<p>H&ocirc;m nay trời đẹp</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `post_category_id` int(11) NOT NULL,
  `post_category_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`post_category_id`, `post_category_name`, `description`, `status`) VALUES
(1, 'Định hướng nghề nghiệp', 'aaaawww22', 0),
(2, 'Kiến thức chuyên ngành', 'aaaaewew', 0),
(3, 'Hành trang nghề nghiệp', NULL, 0),
(4, 'Nghề nghiệp HOT', 'Hay', 1),
(19, 'Hướng dẫn tìm việc', 'dddd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

CREATE TABLE `recruiters` (
  `recruiter_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `introduction` text DEFAULT NULL,
  `employee_count` int(11) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `expire_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`recruiter_id`, `account_id`, `phone`, `company_name`, `area_id`, `city_id`, `location`, `introduction`, `employee_count`, `website`, `status`, `expire_date`) VALUES
(1, 3, '0904786893', 'CTY cổ phần mealone', 1, 1, 'Số 2, đường B, thành phố C, tỉnh Nghệ An', NULL, NULL, NULL, 3, '2024-12-09 16:34:54'),
(6, 10, '0904786899', 'CTY ABC', 2, 1, 'Số 2, đường B, thành phố C, tỉnh Nghệ An', NULL, NULL, NULL, 3, '2024-12-27 08:37:02'),
(9, 13, '0904786893222', 'CTY cổ phần mealonesss', 1, 10, 'Số 2, đường B, thành phố C, tỉnh Nghệ An', NULL, NULL, NULL, 3, '2024-12-09 18:47:09'),
(10, 14, '09047868932', 'CTY ABC', 2, 1, 'Số 2, đường B, thành phố C, tỉnh Nghệ An', NULL, NULL, NULL, 1, '2024-11-29 08:36:54'),
(11, 20, '0904786893555', 'CTY ABC2', 1, 6, '1', NULL, NULL, NULL, 0, '2024-11-11 04:36:07'),
(12, 21, '0904786893000', 'CTY cổ phần mealone', 2, 9, 'Số 16, Quang Trung, Vinh, Nghệ An', NULL, NULL, NULL, 0, '2024-11-11 04:46:05'),
(13, 22, '0904786893322', 'CTY cổ phần mealone', 1, 1, '12345', NULL, NULL, NULL, 0, '2024-11-11 04:46:40'),
(14, 23, '0904786865', 'CTY cổ phần mealone', 2, 1, 'Số 16, Quang Trung, Vinh Nghệ An', NULL, NULL, NULL, 0, '2024-11-11 04:48:28'),
(15, 24, '0904786893344', 'CTY cổ phần mealone', 1, 1, '12345', NULL, NULL, NULL, 0, '2024-11-11 04:54:41'),
(16, 25, '090478689311', 'CTY cổ phần mealone', 2, 9, 'Số 2, đường B, thành phố C, tỉnh Nghệ An', NULL, NULL, NULL, 0, '2024-11-16 12:20:12'),
(17, 26, '09047868932222', 'CTY cổ phần mealone', 1, 1, 'Số 16, Quang Trung, Vinh Nghệ An', NULL, NULL, NULL, 0, '2024-11-16 12:27:14'),
(18, 27, '09047868931', 'CTY cổ phần mealone', 2, 1, 'Số 16, Quang Trung, Vinh Nghệ An', NULL, NULL, NULL, 0, '2024-11-16 12:27:36'),
(19, 28, '090478689312', 'CTY ABC', 1, 1, '12345', NULL, NULL, NULL, 0, '2024-11-16 12:28:24'),
(20, 29, '09047868933', 'CTY cổ phần mealone', 2, 1, 'Số 16, Quang Trung, Vinh, Nghệ An', NULL, NULL, NULL, 0, '2024-11-16 12:29:41'),
(21, 30, '090478689344', 'CTY ABC', 1, 1, 'Số 16, Quang Trung, Vinh Nghệ An', NULL, NULL, NULL, 0, '2024-11-16 12:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `account_id`, `gender`, `phone`, `status`) VALUES
(1, 15, 'male', '0987654321', 1),
(2, 16, 'female', '09876543212', 1),
(3, 17, 'male', '09876543213', 1),
(4, 18, 'other', '09876543218', 1),
(5, 19, 'male', '098765432', 1),
(6, 31, 'male', '09047868293', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_migrate`
--

CREATE TABLE `users_migrate` (
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
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `username` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `cv_id` (`cv_id`,`job_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `UserID` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `CityID` (`city_id`,`recruiter_id`),
  ADD KEY `JCategoryID` (`job_category_id`),
  ADD KEY `recruiter_id` (`recruiter_id`);

--
-- Indexes for table `jobs_migrate`
--
ALTER TABLE `jobs_migrate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_migrate_queue_index` (`queue`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`job_category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `CategoryID` (`post_category_id`,`admin_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`post_category_id`);

--
-- Indexes for table `recruiters`
--
ALTER TABLE `recruiters`
  ADD PRIMARY KEY (`recruiter_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `users_migrate`
--
ALTER TABLE `users_migrate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_migrate_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs_migrate`
--
ALTER TABLE `jobs_migrate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `job_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `post_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `recruiters`
--
ALTER TABLE `recruiters`
  MODIFY `recruiter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_migrate`
--
ALTER TABLE `users_migrate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`) ON DELETE CASCADE;

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_3` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applications_ibfk_4` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`cv_id`) ON DELETE CASCADE;

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`job_category_id`) REFERENCES `job_categories` (`job_category_id`),
  ADD CONSTRAINT `jobs_ibfk_3` FOREIGN KEY (`recruiter_id`) REFERENCES `recruiters` (`recruiter_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_ibfk_4` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_category_id`) REFERENCES `post_categories` (`post_category_id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `recruiters`
--
ALTER TABLE `recruiters`
  ADD CONSTRAINT `recruiters_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`),
  ADD CONSTRAINT `recruiters_ibfk_3` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recruiters_ibfk_4` FOREIGN KEY (`area_id`) REFERENCES `areas` (`area_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
