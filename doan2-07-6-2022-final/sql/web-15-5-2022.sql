-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2022 lúc 12:22 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `account_admin` varchar(200) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `account_admin`, `password_admin`, `status`) VALUES
(4, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id_baiviet` int(10) NOT NULL,
  `img_baiviet` varchar(500) NOT NULL,
  `title_baiviet` varchar(400) NOT NULL,
  `content_baiviet` text NOT NULL,
  `status_baiviet` varchar(100) NOT NULL,
  `ngayviet` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id_baiviet`, `img_baiviet`, `title_baiviet`, `content_baiviet`, `status_baiviet`, `ngayviet`) VALUES
(1, '1640059621_', 'Sale off 50%', '<p>Chương tr&igrave;nh giảm gi&aacute; đặt biệt cuối năm!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chương tr&igrave;nh giảm gi&aacute; đặt biệt cuối năm!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chương tr&igrave;nh giảm gi&aacute; đặt biệt cuối năm!!</p>\r\n', '0', '2021-12-21'),
(2, '1652008263_', 'Sale off 50%', '<p>Sale off 50%&nbsp;Sale off 50%&nbsp;Sale off 50%</p>\r\n\r\n<p>Sale off 50%&nbsp;Sale off 50%&nbsp;Sale off 50%</p>\r\n\r\n<p>Sale off 50%&nbsp;Sale off 50%&nbsp;Sale off 50%</p>\r\n\r\n<p>Sale off 50%&nbsp;Sale off 50%&nbsp;Sale off 50%</p>\r\n\r\n<p>Sale off 50%&nbsp;Sale off 50%&nbsp;Sale off 50%</p>\r\n\r\n<p>Sale off 50%&nbsp;Sale off 50%&nbsp;Sale off 50%</p>\r\n', '1', '2022-05-08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_chitiethoadon` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong_sp` int(11) NOT NULL,
  `id_hoadon` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_chitiethoadon`, `id_sanpham`, `soluong_sp`, `id_hoadon`) VALUES
(4, 2, 2, 20),
(5, 3, 1, 21),
(6, 3, 1, 22),
(7, 3, 1, 23),
(8, 3, 1, 24),
(9, 3, 1, 25),
(10, 3, 1, 26),
(11, 14, 1, 27),
(12, 14, 1, 28),
(13, 1, 1, 29),
(16, 22, 1, 31),
(17, 2, 1, 31),
(18, 13, 2, 32),
(19, 16, 1, 32),
(20, 5, 1, 32),
(21, 13, 2, 33),
(22, 16, 1, 33),
(23, 5, 1, 33),
(24, 7, 1, 34),
(25, 15, 1, 34),
(26, 1, 1, 34),
(27, 7, 1, 35),
(28, 15, 1, 35),
(29, 1, 1, 35),
(30, 7, 1, 36),
(31, 15, 1, 36),
(32, 1, 1, 36),
(33, 7, 1, 37),
(34, 16, 1, 38),
(35, 12, 1, 39),
(36, 13, 1, 40),
(37, 13, 1, 41),
(38, 2, 1, 42),
(39, 7, 1, 43),
(40, 6, 1, 44);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madanhmuc` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`madanhmuc`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hoa cưới', '2021-10-14', '2021-10-14'),
(2, 'Hoa trang trí', '2021-10-14', '2021-10-14'),
(3, 'Hoa chúc mừng', '2021-10-14', '2021-10-14'),
(4, 'Hoa chia buồn', '2021-10-14', '2021-10-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `phone_user` varchar(20) NOT NULL,
  `address_user` varchar(300) NOT NULL,
  `date_hoadon` varchar(50) NOT NULL,
  `status_hoadon` int(11) NOT NULL,
  `status_transport_hoadon` varchar(200) NOT NULL,
  `phuongthucthanhtoan` varchar(11) NOT NULL,
  `id_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `id_user`, `name_user`, `phone_user`, `address_user`, `date_hoadon`, `status_hoadon`, `status_transport_hoadon`, `phuongthucthanhtoan`, `id_shipping`) VALUES
(20, 1, 'Trần Thiên Vạn', '0835605007', 'ben tre', '2022-04-15 15:32:50', 2, '3', 'tienmat', 1),
(21, 1, 'Trần Thiên Vạn', '0835605007', 'ben tre', '2022-04-15 15:39:02', 1, '', 'vnpay', 1),
(22, 1, 'Trần Thiên Vạn', '0835605007', 'ben tre', '2022-04-15 15:39:28', 0, '2', 'vnpay', 1),
(23, 1, 'Trần Thiên Vạn', '0835605007', 'ben tre', '2022-04-15 15:40:11', 1, '', 'vnpay', 1),
(24, 1, 'Trần Thiên Vạn', '0835605007', 'ben tre', '2022-04-15 15:41:56', 1, '', 'vnpay', 1),
(25, 1, 'Trần Thiên Vạn', '0835605007', 'ben tre', '2022-04-15 15:51:55', 1, '', 'tienmat', 1),
(26, 1, 'Trần Thiên Vạn', '0835605007', 'ben tre', '2022-04-15 15:59:55', 1, '', 'vnpay', 1),
(27, 2, 'Phúc Ngân', '0123456789', 'Việt Nam', '2022-04-21 10:00:11', 0, '2', 'vnpay', 2),
(28, 2, 'Phúc Ngân', '0123456789', 'Việt Nam', '2022-04-21 10:01:36', 2, '3', 'vnpay', 2),
(29, 2, 'Phúc Ngân', '0123456789', 'Việt Nam', '2022-04-28 15:14:06', 0, '2', 'tienmat', 2),
(31, 2, 'Phúc Ngân', '0123456789', 'Việt Nam', '2022-04-28 15:33:24', 2, '3', 'vnpay', 2),
(32, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam', '2022-05-11 22:27:05', 2, '3', 'vnpay', 3),
(33, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam', '2022-05-11 22:40:53', 2, '3', 'tienmat', 3),
(34, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam', '2022-05-11 22:54:55', 2, '3', 'tienmat', 3),
(35, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam', '2022-05-11 22:55:58', 2, '3', 'tienmat', 3),
(36, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam', '2022-05-11 23:06:39', 2, '3', 'tienmat', 3),
(37, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam', '2022-05-11 23:16:12', 2, '3', 'tienmat', 3),
(38, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam', '2022-05-11 23:22:03', 2, '3', 'vnpay', 3),
(39, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam', '2022-05-11 23:24:01', 2, '3', 'vnpay', 3),
(40, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam, Bến Tre', '2022-05-12 09:36:47', 2, '3', 'tienmat', 3),
(41, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam, Bến Tre', '2022-05-14 22:13:49', 2, '3', 'tienmat', 3),
(42, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam, Bến Tre', '2022-05-14 22:33:03', 2, '3', 'tienmat', 3),
(43, 4, 'Phúc Ngân 2', '01236547859', 'Việt Nam, Bến Tre', '2022-05-14 22:37:59', 0, '2', 'tienmat', 3),
(44, 4, 'Võ Nguyễn Phúc Ngân', '01236547859', 'Việt Nam, Bến Tre', '2022-05-14 23:08:31', 0, '1', 'tienmat', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotro`
--

CREATE TABLE `hotro` (
  `id_hotro` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `gioitinh` int(10) NOT NULL,
  `sdt` varchar(100) NOT NULL,
  `noidung` longtext NOT NULL,
  `status_hotro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hotro`
--

INSERT INTO `hotro` (`id_hotro`, `hoten`, `gioitinh`, `sdt`, `noidung`, `status_hotro`) VALUES
(1, 'Ngan', 1, '0123654789', '<p>alolaooaloo</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `masanpham` varchar(10) NOT NULL,
  `title` varchar(400) NOT NULL,
  `gia` float NOT NULL,
  `img` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `nuocsx` varchar(20) NOT NULL,
  `hang` varchar(20) NOT NULL,
  `kho` int(200) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `madanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `masanpham`, `title`, `gia`, `img`, `content`, `created_at`, `updated_at`, `nuocsx`, `hang`, `kho`, `tinhtrang`, `madanhmuc`) VALUES
(1, 'HC001', 'Giây phút êm đềm', 880000, '1640051657_HC001.png', '<p>B&oacute; hoa đơn giản với hoa hồng trắng phối hợp c&ugrave;ng hoa baby tạo n&ecirc;n sức cuốn h&uacute;t đặc biệt. M&agrave;u trắng của sự tinh kh&ocirc;i như m&agrave;u v&aacute;y c&ocirc; d&acirc;u trong ng&agrave;y vui trọng đại của đời m&igrave;nh. B&oacute; hoa kho&aacute;c l&ecirc;n m&igrave;nh một vẻ đẹp sang trọng đến lạ l&ugrave;ng.</p>\n\n<p>&nbsp;</p>\n\n<p>B&oacute; hoa đơn giản với hoa hồng trắng phối hợp c&ugrave;ng hoa baby tạo n&ecirc;n sức cuốn h&uacute;t đặc biệt. M&agrave;u trắng của sự tinh kh&ocirc;i như m&agrave;u v&aacute;y c&ocirc; d&acirc;u trong ng&agrave;y vui trọng đại của đời m&igrave;nh. B&oacute; hoa kho&aacute;c l&ecirc;n m&igrave;nh một vẻ đẹp sang trọng đến lạ l&ugrave;ng.</p>\n\n<p>&nbsp;</p>\n\n<p>B&oacute; hoa đơn giản với hoa hồng trắng phối hợp c&ugrave;ng hoa baby tạo n&ecirc;n sức cuốn h&uacute;t đặc biệt. M&agrave;u trắng của sự tinh kh&ocirc;i như m&agrave;u v&aacute;y c&ocirc; d&acirc;u trong ng&agrave;y vui trọng đại của đời m&igrave;nh. B&oacute; hoa kho&aacute;c l&ecirc;n m&igrave;nh một vẻ đẹp sang trọng đến lạ l&ugrave;ng.</p>\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER ', 235, 1, 1),
(2, 'HTT001', 'MÙA XUÂN CỦA MẸ', 600000, '1640049743_HTT001.png', '<p>T&igrave;nh y&ecirc;u của mẹ d&agrave;nh cho c&aacute;c con l&agrave; một t&igrave;nh y&ecirc;u v&ocirc; gi&aacute; v&agrave; bất diệt. Kh&ocirc;ng một từ ngữ n&agrave;o c&oacute; thể lột tả được hết sự lớn lao của t&igrave;nh mẫu tử. V&agrave; kh&ocirc;ng c&oacute; một m&oacute;n qu&agrave; vật chất n&agrave;o c&oacute; thể b&ugrave; đắp lại t&igrave;nh y&ecirc;u ấy. V&igrave; vậy, nh&acirc;n c&aacute;c ng&agrave;y đặc biệt hoặc dịp lễ, ch&uacute;ng ta đừng ngại ngần m&agrave; h&atilde;y d&agrave;nh tặng những c&agrave;nh hoa xinh đẹp nhất tặng cho người mẹ y&ecirc;u qu&yacute; của m&igrave;nh. Những b&ocirc;ng hoa sẽ thay bạn gửi gắm những cảm x&uacute;c m&agrave; l&acirc;u nay kh&oacute; n&oacute;i th&agrave;nh lời từ bạn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>T&igrave;nh y&ecirc;u của mẹ d&agrave;nh cho c&aacute;c con l&agrave; một t&igrave;nh y&ecirc;u v&ocirc; gi&aacute; v&agrave; bất diệt. Kh&ocirc;ng một từ ngữ n&agrave;o c&oacute; thể lột tả được hết sự lớn lao của t&igrave;nh mẫu tử. V&agrave; kh&ocirc;ng c&oacute; một m&oacute;n qu&agrave; vật chất n&agrave;o c&oacute; thể b&ugrave; đắp lại t&igrave;nh y&ecirc;u ấy. V&igrave; vậy, nh&acirc;n c&aacute;c ng&agrave;y đặc biệt hoặc dịp lễ, ch&uacute;ng ta đừng ngại ngần m&agrave; h&atilde;y d&agrave;nh tặng những c&agrave;nh hoa xinh đẹp nhất tặng cho người mẹ y&ecirc;u qu&yacute; của m&igrave;nh. Những b&ocirc;ng hoa sẽ thay bạn gửi gắm những cảm x&uacute;c m&agrave; l&acirc;u nay kh&oacute; n&oacute;i th&agrave;nh lời từ bạn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>T&igrave;nh y&ecirc;u của mẹ d&agrave;nh cho c&aacute;c con l&agrave; một t&igrave;nh y&ecirc;u v&ocirc; gi&aacute; v&agrave; bất diệt. Kh&ocirc;ng một từ ngữ n&agrave;o c&oacute; thể lột tả được hết sự lớn lao của t&igrave;nh mẫu tử. V&agrave; kh&ocirc;ng c&oacute; một m&oacute;n qu&agrave; vật chất n&agrave;o c&oacute; thể b&ugrave; đắp lại t&igrave;nh y&ecirc;u ấy. V&igrave; vậy, nh&acirc;n c&aacute;c ng&agrave;y đặc biệt hoặc dịp lễ, ch&uacute;ng ta đừng ngại ngần m&agrave; h&atilde;y d&agrave;nh tặng những c&agrave;nh hoa xinh đẹp nhất tặng cho người mẹ y&ecirc;u qu&yacute; của m&igrave;nh. Những b&ocirc;ng hoa sẽ thay bạn gửi gắm những cảm x&uacute;c m&agrave; l&acirc;u nay kh&oacute; n&oacute;i th&agrave;nh lời từ bạn.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 122, 1, 2),
(3, 'HCM004', 'REAL LOVE', 790000, '1640049440_HCM004.png', '<p>B&oacute; hoa được thiết kế với t&ocirc;ng m&agrave;u đỏ n&oacute;ng bỏng l&agrave; biểu tượng cho một t&igrave;nh y&ecirc;u m&atilde;nh liệt, t&igrave;nh cảm ch&acirc;n th&agrave;nh, l&atilde;ng mạn, sẵn s&agrave;ng b&ugrave;ng ch&aacute;y v&agrave; mang th&ocirc;ng th&ocirc;ng điệp: &ldquo;I love you&rdquo; . H&atilde;y tạo bất ngờ cho người bạn y&ecirc;u thương trong những dịp kỷ niệm nh&eacute;, chắn chắn n&agrave;ng sẽ cảm nhận được t&igrave;nh y&ecirc;u ch&acirc;n th&agrave;nh m&agrave; bạn d&agrave;nh cho n&agrave;ng đấy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B&oacute; hoa được thiết kế với t&ocirc;ng m&agrave;u đỏ n&oacute;ng bỏng l&agrave; biểu tượng cho một t&igrave;nh y&ecirc;u m&atilde;nh liệt, t&igrave;nh cảm ch&acirc;n th&agrave;nh, l&atilde;ng mạn, sẵn s&agrave;ng b&ugrave;ng ch&aacute;y v&agrave; mang th&ocirc;ng th&ocirc;ng điệp: &ldquo;I love you&rdquo; . H&atilde;y tạo bất ngờ cho người bạn y&ecirc;u thương trong những dịp kỷ niệm nh&eacute;, chắn chắn n&agrave;ng sẽ cảm nhận được t&igrave;nh y&ecirc;u ch&acirc;n th&agrave;nh m&agrave; bạn d&agrave;nh cho n&agrave;ng đấy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B&oacute; hoa được thiết kế với t&ocirc;ng m&agrave;u đỏ n&oacute;ng bỏng l&agrave; biểu tượng cho một t&igrave;nh y&ecirc;u m&atilde;nh liệt, t&igrave;nh cảm ch&acirc;n th&agrave;nh, l&atilde;ng mạn, sẵn s&agrave;ng b&ugrave;ng ch&aacute;y v&agrave; mang th&ocirc;ng th&ocirc;ng điệp: &ldquo;I love you&rdquo; . H&atilde;y tạo bất ngờ cho người bạn y&ecirc;u thương trong những dịp kỷ niệm nh&eacute;, chắn chắn n&agrave;ng sẽ cảm nhận được t&igrave;nh y&ecirc;u ch&acirc;n th&agrave;nh m&agrave; bạn d&agrave;nh cho n&agrave;ng đấy.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 0, 1, 3),
(5, 'HCB005', 'CÁT BỤI', 1200000, '1640053272_HCB005.png', '<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được , nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với v&ograve;ng hoa chia buồn C&aacute;t bụi được kết từ hoa C&uacute;c trắng, hoa hồng t&iacute;m v&agrave; c&aacute;c phụ liệu kh&aacute;c ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẽ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được , nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với v&ograve;ng hoa chia buồn C&aacute;t bụi được kết từ hoa C&uacute;c trắng, hoa hồng t&iacute;m v&agrave; c&aacute;c phụ liệu kh&aacute;c ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẽ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được , nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với v&ograve;ng hoa chia buồn C&aacute;t bụi được kết từ hoa C&uacute;c trắng, hoa hồng t&iacute;m v&agrave; c&aacute;c phụ liệu kh&aacute;c ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẽ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 12, 1, 4),
(6, 'HCM001', 'LOVE MONDIAL', 500000, '1640049020_HCM001.png', '<p>Pink Mondial l&agrave; những b&ocirc;ng hồng nổi tiếng nhập khẩu từ Ecuador. Với sự h&ograve;a quyện độc đ&aacute;o giữa m&agrave;u hồng phớt, ch&uacute;t trắng tinh tế v&agrave; sắc cam nhẹ b&iacute; ẩn ở trung t&acirc;m, những b&ocirc;ng Pink Mondial đại diện cho một t&acirc;m hồn tư do, nghệ sĩ v&agrave; ph&oacute;ng kho&aacute;ng n&ecirc;n khi nở hoa tự tin ph&ocirc; diễn hết sức sống v&agrave; vẻ đẹp mang trong m&igrave;nh, chẳng ch&uacute;t ngại ngần hay rụt r&egrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pink Mondial l&agrave; những b&ocirc;ng hồng nổi tiếng nhập khẩu từ Ecuador. Với sự h&ograve;a quyện độc đ&aacute;o giữa m&agrave;u hồng phớt, ch&uacute;t trắng tinh tế v&agrave; sắc cam nhẹ b&iacute; ẩn ở trung t&acirc;m, những b&ocirc;ng Pink Mondial đại diện cho một t&acirc;m hồn tư do, nghệ sĩ v&agrave; ph&oacute;ng kho&aacute;ng n&ecirc;n khi nở hoa tự tin ph&ocirc; diễn hết sức sống v&agrave; vẻ đẹp mang trong m&igrave;nh, chẳng ch&uacute;t ngại ngần hay rụt r&egrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pink Mondial l&agrave; những b&ocirc;ng hồng nổi tiếng nhập khẩu từ Ecuador. Với sự h&ograve;a quyện độc đ&aacute;o giữa m&agrave;u hồng phớt, ch&uacute;t trắng tinh tế v&agrave; sắc cam nhẹ b&iacute; ẩn ở trung t&acirc;m, những b&ocirc;ng Pink Mondial đại diện cho một t&acirc;m hồn tư do, nghệ sĩ v&agrave; ph&oacute;ng kho&aacute;ng n&ecirc;n khi nở hoa tự tin ph&ocirc; diễn hết sức sống v&agrave; vẻ đẹp mang trong m&igrave;nh, chẳng ch&uacute;t ngại ngần hay rụt r&egrave;.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 5000, 1, 3),
(7, 'HCM002', 'ONLY YOU', 200000, '1640049137_HCM002.png', '<p>Một b&oacute; hoa đơn giản ph&ugrave; hợp tặng sinh nhật đồng nghiệp, bạn b&egrave; trong lớp v&agrave; người y&ecirc;u. B&oacute; hoa được thiết kế nhẹ nh&agrave;ng, kết hợp giữa m&agrave;u t&iacute;m của Calimero v&agrave; hồng d&acirc;u đem lại cảm gi&aacute;c ch&acirc;n th&agrave;nh v&agrave; qu&yacute; trọng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một b&oacute; hoa đơn giản ph&ugrave; hợp tặng sinh nhật đồng nghiệp, bạn b&egrave; trong lớp v&agrave; người y&ecirc;u. B&oacute; hoa được thiết kế nhẹ nh&agrave;ng, kết hợp giữa m&agrave;u t&iacute;m của Calimero v&agrave; hồng d&acirc;u đem lại cảm gi&aacute;c ch&acirc;n th&agrave;nh v&agrave; qu&yacute; trọng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một b&oacute; hoa đơn giản ph&ugrave; hợp tặng sinh nhật đồng nghiệp, bạn b&egrave; trong lớp v&agrave; người y&ecirc;u. B&oacute; hoa được thiết kế nhẹ nh&agrave;ng, kết hợp giữa m&agrave;u t&iacute;m của Calimero v&agrave; hồng d&acirc;u đem lại cảm gi&aacute;c ch&acirc;n th&agrave;nh v&agrave; qu&yacute; trọng.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 213, 1, 3),
(8, 'HCM003', 'LOVE SONG', 580000, '1640049231_HCM003.png', '<p>Love Song l&agrave; b&oacute; hoa Hồng Đỏ được b&oacute; theo phong c&aacute;ch hiện đại với giấy g&oacute;i t&ocirc;ng m&agrave;u pastel l&agrave;m nổi bật l&ecirc;n vẻ đẹp ngọt ng&agrave;o vốn c&oacute; của hoa Hồng v&agrave; hoa ly. H&igrave;nh ảnh b&oacute; hoa gợi l&ecirc;n những nốt nhạc t&igrave;nh y&ecirc;u dịu d&agrave;ng. L&agrave; m&oacute;n qu&agrave; tặng th&iacute;ch hợp cho những đ&ocirc;i lứa y&ecirc;u nhau, lễ kỉ niệm của vợ chồng...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Love Song l&agrave; b&oacute; hoa Hồng Đỏ được b&oacute; theo phong c&aacute;ch hiện đại với giấy g&oacute;i t&ocirc;ng m&agrave;u pastel l&agrave;m nổi bật l&ecirc;n vẻ đẹp ngọt ng&agrave;o vốn c&oacute; của hoa Hồng v&agrave; hoa ly. H&igrave;nh ảnh b&oacute; hoa gợi l&ecirc;n những nốt nhạc t&igrave;nh y&ecirc;u dịu d&agrave;ng. L&agrave; m&oacute;n qu&agrave; tặng th&iacute;ch hợp cho những đ&ocirc;i lứa y&ecirc;u nhau, lễ kỉ niệm của vợ chồng...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Love Song l&agrave; b&oacute; hoa Hồng Đỏ được b&oacute; theo phong c&aacute;ch hiện đại với giấy g&oacute;i t&ocirc;ng m&agrave;u pastel l&agrave;m nổi bật l&ecirc;n vẻ đẹp ngọt ng&agrave;o vốn c&oacute; của hoa Hồng v&agrave; hoa ly. H&igrave;nh ảnh b&oacute; hoa gợi l&ecirc;n những nốt nhạc t&igrave;nh y&ecirc;u dịu d&agrave;ng. L&agrave; m&oacute;n qu&agrave; tặng th&iacute;ch hợp cho những đ&ocirc;i lứa y&ecirc;u nhau, lễ kỉ niệm của vợ chồng...</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 230, 1, 3),
(9, 'HCM005', 'LOVE YOU MORE', 1850000, '1640049506_HCM005.png', '<p>Anh tặng em 100 b&ocirc;ng hồng l&agrave; tặng cho em cả thể giới của anh, anh khẳng định rằng 100% anh y&ecirc;u em, kh&ocirc;ng c&oacute; bất cứ điều g&igrave; c&oacute; thể s&aacute;nh bằng t&igrave;nh y&ecirc;u anh d&agrave;nh cho em.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Anh tặng em 100 b&ocirc;ng hồng l&agrave; tặng cho em cả thể giới của anh, anh khẳng định rằng 100% anh y&ecirc;u em, kh&ocirc;ng c&oacute; bất cứ điều g&igrave; c&oacute; thể s&aacute;nh bằng t&igrave;nh y&ecirc;u anh d&agrave;nh cho em.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Anh tặng em 100 b&ocirc;ng hồng l&agrave; tặng cho em cả thể giới của anh, anh khẳng định rằng 100% anh y&ecirc;u em, kh&ocirc;ng c&oacute; bất cứ điều g&igrave; c&oacute; thể s&aacute;nh bằng t&igrave;nh y&ecirc;u anh d&agrave;nh cho em.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Anh tặng em 100 b&ocirc;ng hồng l&agrave; tặng cho em cả thể giới của anh, anh khẳng định rằng 100% anh y&ecirc;u em, kh&ocirc;ng c&oacute; bất cứ điều g&igrave; c&oacute; thể s&aacute;nh bằng t&igrave;nh y&ecirc;u anh d&agrave;nh cho em.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 23, 1, 3),
(10, 'HCM007', 'DARLING GIRL', 530000, '1640049660_HCM007.png', '<p>Darling Girl l&agrave; b&oacute; hoa c&oacute; t&ocirc;ng m&agrave;u tươi s&aacute;ng thể hiện vẻ đẹp đằm thắm, dịu d&agrave;ng của một qu&yacute; c&ocirc;. M&oacute;n qu&agrave; n&oacute;i l&ecirc;n hết được t&igrave;nh cảm của người tặng d&agrave;nh cho người nhận. Th&iacute;ch hợp d&agrave;nh tặng ph&aacute;i đẹp d&ugrave; họ l&agrave; ai đối với bạn</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Darling Girl l&agrave; b&oacute; hoa c&oacute; t&ocirc;ng m&agrave;u tươi s&aacute;ng thể hiện vẻ đẹp đằm thắm, dịu d&agrave;ng của một qu&yacute; c&ocirc;. M&oacute;n qu&agrave; n&oacute;i l&ecirc;n hết được t&igrave;nh cảm của người tặng d&agrave;nh cho người nhận. Th&iacute;ch hợp d&agrave;nh tặng ph&aacute;i đẹp d&ugrave; họ l&agrave; ai đối với bạn</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Darling Girl l&agrave; b&oacute; hoa c&oacute; t&ocirc;ng m&agrave;u tươi s&aacute;ng thể hiện vẻ đẹp đằm thắm, dịu d&agrave;ng của một qu&yacute; c&ocirc;. M&oacute;n qu&agrave; n&oacute;i l&ecirc;n hết được t&igrave;nh cảm của người tặng d&agrave;nh cho người nhận. Th&iacute;ch hợp d&agrave;nh tặng ph&aacute;i đẹp d&ugrave; họ l&agrave; ai đối với bạn</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 435, 1, 3),
(11, 'HTT002', 'BÌNH HỒNG ĐỎ SA', 400000, '1640049836_HTT002.png', '<p>Hoa hồng Đ&agrave; Lạt theo m&ugrave;a.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hoa hồng Đ&agrave; Lạt theo m&ugrave;a.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hoa hồng Đ&agrave; Lạt theo m&ugrave;a.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hoa hồng Đ&agrave; Lạt theo m&ugrave;a.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 100, 1, 2),
(12, 'HTT003', 'SWEET ROSSIE', 1100000, '1640049901_HTT003.png', '<p>Điểm một ch&uacute;t m&agrave;u xanh tươi m&aacute;t b&ecirc;n những sắc hồng pastel dịu ngọt, kh&ocirc;ng chỉ khiến người ta l&acirc;ng l&acirc;ng trong sự pha trộn sắc m&agrave;u của thị gi&aacute;c, m&agrave; hơn thế, hạnh ph&uacute;c c&ograve;n đến từ &yacute; nghĩa ẩn s&acirc;u: &ldquo;Anh chẳng biết thi&ecirc;n đường c&oacute; ở nơi đ&acirc;u. Nhưng anh nghĩ, chỉ cần hai ta cứ m&atilde;i y&ecirc;u thương v&agrave; tin tưởng v&agrave;o t&igrave;nh y&ecirc;u n&agrave;y - em v&agrave; anh - hai ta c&ugrave;ng nh&igrave;n về một hướng, th&igrave; bất cứ nơi đ&acirc;u cũng sẽ trở th&agrave;nh thi&ecirc;n đường với đong đầy những y&ecirc;u thương.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Điểm một ch&uacute;t m&agrave;u xanh tươi m&aacute;t b&ecirc;n những sắc hồng pastel dịu ngọt, kh&ocirc;ng chỉ khiến người ta l&acirc;ng l&acirc;ng trong sự pha trộn sắc m&agrave;u của thị gi&aacute;c, m&agrave; hơn thế, hạnh ph&uacute;c c&ograve;n đến từ &yacute; nghĩa ẩn s&acirc;u: &ldquo;Anh chẳng biết thi&ecirc;n đường c&oacute; ở nơi đ&acirc;u. Nhưng anh nghĩ, chỉ cần hai ta cứ m&atilde;i y&ecirc;u thương v&agrave; tin tưởng v&agrave;o t&igrave;nh y&ecirc;u n&agrave;y - em v&agrave; anh - hai ta c&ugrave;ng nh&igrave;n về một hướng, th&igrave; bất cứ nơi đ&acirc;u cũng sẽ trở th&agrave;nh thi&ecirc;n đường với đong đầy những y&ecirc;u thương.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Điểm một ch&uacute;t m&agrave;u xanh tươi m&aacute;t b&ecirc;n những sắc hồng pastel dịu ngọt, kh&ocirc;ng chỉ khiến người ta l&acirc;ng l&acirc;ng trong sự pha trộn sắc m&agrave;u của thị gi&aacute;c, m&agrave; hơn thế, hạnh ph&uacute;c c&ograve;n đến từ &yacute; nghĩa ẩn s&acirc;u: &ldquo;Anh chẳng biết thi&ecirc;n đường c&oacute; ở nơi đ&acirc;u. Nhưng anh nghĩ, chỉ cần hai ta cứ m&atilde;i y&ecirc;u thương v&agrave; tin tưởng v&agrave;o t&igrave;nh y&ecirc;u n&agrave;y - em v&agrave; anh - hai ta c&ugrave;ng nh&igrave;n về một hướng, th&igrave; bất cứ nơi đ&acirc;u cũng sẽ trở th&agrave;nh thi&ecirc;n đường với đong đầy những y&ecirc;u thương.&rdquo;</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 100, 1, 2),
(13, 'HTT004', 'HẠNH PHÚC BẤT TẬN', 1100000, '1640049981_HTT004.png', '<p>Hạnh ph&uacute;c bất tận ch&iacute;nh l&agrave; l&uacute;c bạn t&igrave;m kiếm được một nửa tr&aacute;i tim y&ecirc;u thương c&ograve;n lại trong h&agrave;ng tỉ người tr&ecirc;n thế giới n&agrave;y. Một người thực sự y&ecirc;u thương bạn v&ocirc; điều kiện v&agrave; đ&oacute; được gọi l&agrave; hạnh ph&uacute;c. H&atilde;y tr&acirc;n trọng người ấy bằng cả cuộc đời của bạn nh&eacute;!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hạnh ph&uacute;c bất tận ch&iacute;nh l&agrave; l&uacute;c bạn t&igrave;m kiếm được một nửa tr&aacute;i tim y&ecirc;u thương c&ograve;n lại trong h&agrave;ng tỉ người tr&ecirc;n thế giới n&agrave;y. Một người thực sự y&ecirc;u thương bạn v&ocirc; điều kiện v&agrave; đ&oacute; được gọi l&agrave; hạnh ph&uacute;c. H&atilde;y tr&acirc;n trọng người ấy bằng cả cuộc đời của bạn nh&eacute;!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hạnh ph&uacute;c bất tận ch&iacute;nh l&agrave; l&uacute;c bạn t&igrave;m kiếm được một nửa tr&aacute;i tim y&ecirc;u thương c&ograve;n lại trong h&agrave;ng tỉ người tr&ecirc;n thế giới n&agrave;y. Một người thực sự y&ecirc;u thương bạn v&ocirc; điều kiện v&agrave; đ&oacute; được gọi l&agrave; hạnh ph&uacute;c. H&atilde;y tr&acirc;n trọng người ấy bằng cả cuộc đời của bạn nh&eacute;!</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 210, 1, 2),
(14, 'HTT005', 'CÂY THÔNG GỖ TRẮNG', 1250000, '1640050921_HTT005.png', '<p>Th&ocirc;ng Noel l&agrave; một h&igrave;nh ảnh kh&ocirc;ng thể thiếu trong mỗi dịp Gi&aacute;ng sinh. Hiện nay, ngo&agrave;i loại th&ocirc;ng tươi rất được ưa chuộng th&igrave; c&ograve;n c&oacute; rất nhiều loại th&ocirc;ng được l&agrave;m từ c&aacute;c chất liệu kh&aacute;c nhau như nhựa PE, gỗ &eacute;p.... Sản phẩm th&ocirc;ng noel được l&agrave;m từ gỗ t&aacute;i chế, th&acirc;n thiện với m&ocirc;i trường v&agrave; đặc biệt l&agrave; c&oacute; thể t&aacute;i sử dụng nhiều lần. ***Lưu &yacute;: Sản phẩm chỉ c&oacute; b&aacute;n tại khu vực TP. Hồ Ch&iacute; Minh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Th&ocirc;ng Noel l&agrave; một h&igrave;nh ảnh kh&ocirc;ng thể thiếu trong mỗi dịp Gi&aacute;ng sinh. Hiện nay, ngo&agrave;i loại th&ocirc;ng tươi rất được ưa chuộng th&igrave; c&ograve;n c&oacute; rất nhiều loại th&ocirc;ng được l&agrave;m từ c&aacute;c chất liệu kh&aacute;c nhau như nhựa PE, gỗ &eacute;p.... Sản phẩm th&ocirc;ng noel được l&agrave;m từ gỗ t&aacute;i chế, th&acirc;n thiện với m&ocirc;i trường v&agrave; đặc biệt l&agrave; c&oacute; thể t&aacute;i sử dụng nhiều lần. ***Lưu &yacute;: Sản phẩm chỉ c&oacute; b&aacute;n tại khu vực TP. Hồ Ch&iacute; Minh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Th&ocirc;ng Noel l&agrave; một h&igrave;nh ảnh kh&ocirc;ng thể thiếu trong mỗi dịp Gi&aacute;ng sinh. Hiện nay, ngo&agrave;i loại th&ocirc;ng tươi rất được ưa chuộng th&igrave; c&ograve;n c&oacute; rất nhiều loại th&ocirc;ng được l&agrave;m từ c&aacute;c chất liệu kh&aacute;c nhau như nhựa PE, gỗ &eacute;p.... Sản phẩm th&ocirc;ng noel được l&agrave;m từ gỗ t&aacute;i chế, th&acirc;n thiện với m&ocirc;i trường v&agrave; đặc biệt l&agrave; c&oacute; thể t&aacute;i sử dụng nhiều lần. ***Lưu &yacute;: Sản phẩm chỉ c&oacute; b&aacute;n tại khu vực TP. Hồ Ch&iacute; Minh</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 60, 1, 2),
(15, 'HC002', 'Ta Mãi Bên Nhau', 770000, '1640052171_HC002.png', '<p>B&oacute; hoa với tone m&agrave;u dịu d&agrave;ng, ngọt ng&agrave;o th&ecirc;m gia vị cho cuộc sống h&ocirc;n nh&acirc;n lu&ocirc;n đẹp đẽ v&agrave; b&igrave;nh y&ecirc;n. Ph&ugrave; hợp với c&ocirc; d&acirc;u y&ecirc;u th&iacute;ch sự nhẹ nh&agrave;ng, dịu &ecirc;m như vi&ecirc;n kẹo ngọt</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B&oacute; hoa với tone m&agrave;u dịu d&agrave;ng, ngọt ng&agrave;o th&ecirc;m gia vị cho cuộc sống h&ocirc;n nh&acirc;n lu&ocirc;n đẹp đẽ v&agrave; b&igrave;nh y&ecirc;n. Ph&ugrave; hợp với c&ocirc; d&acirc;u y&ecirc;u th&iacute;ch sự nhẹ nh&agrave;ng, dịu &ecirc;m như vi&ecirc;n kẹo ngọt</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B&oacute; hoa với tone m&agrave;u dịu d&agrave;ng, ngọt ng&agrave;o th&ecirc;m gia vị cho cuộc sống h&ocirc;n nh&acirc;n lu&ocirc;n đẹp đẽ v&agrave; b&igrave;nh y&ecirc;n. Ph&ugrave; hợp với c&ocirc; d&acirc;u y&ecirc;u th&iacute;ch sự nhẹ nh&agrave;ng, dịu &ecirc;m như vi&ecirc;n kẹo ngọt</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B&oacute; hoa với tone m&agrave;u dịu d&agrave;ng, ngọt ng&agrave;o th&ecirc;m gia vị cho cuộc sống h&ocirc;n nh&acirc;n lu&ocirc;n đẹp đẽ v&agrave; b&igrave;nh y&ecirc;n. Ph&ugrave; hợp với c&ocirc; d&acirc;u y&ecirc;u th&iacute;ch sự nhẹ nh&agrave;ng, dịu &ecirc;m như vi&ecirc;n kẹo ngọt</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 60, 1, 1),
(16, 'HC003', 'Happy Ending', 1320000, '1640052669_HC003.png', '<p>B&oacute; hoa thiết kế phong c&aacute;ch sang trọng với nhiều loại hoa cao cấp gi&uacute;p c&ocirc; d&acirc;u th&ecirc;m phần sang trọng v&agrave; qu&yacute; ph&aacute;i khi s&aacute;nh vai c&ugrave;ng ch&uacute; rể c&ugrave;ng nhau x&acirc;y đắp hạnh ph&uacute;c</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B&oacute; hoa thiết kế phong c&aacute;ch sang trọng với nhiều loại hoa cao cấp gi&uacute;p c&ocirc; d&acirc;u th&ecirc;m phần sang trọng v&agrave; qu&yacute; ph&aacute;i khi s&aacute;nh vai c&ugrave;ng ch&uacute; rể c&ugrave;ng nhau x&acirc;y đắp hạnh ph&uacute;c</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B&oacute; hoa thiết kế phong c&aacute;ch sang trọng với nhiều loại hoa cao cấp gi&uacute;p c&ocirc; d&acirc;u th&ecirc;m phần sang trọng v&agrave; qu&yacute; ph&aacute;i khi s&aacute;nh vai c&ugrave;ng ch&uacute; rể c&ugrave;ng nhau x&acirc;y đắp hạnh ph&uacute;c</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>B&oacute; hoa thiết kế phong c&aacute;ch sang trọng với nhiều loại hoa cao cấp gi&uacute;p c&ocirc; d&acirc;u th&ecirc;m phần sang trọng v&agrave; qu&yacute; ph&aacute;i khi s&aacute;nh vai c&ugrave;ng ch&uacute; rể c&ugrave;ng nhau x&acirc;y đắp hạnh ph&uacute;c</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 456, 1, 1),
(17, 'HC004', 'Will You Marry Me', 1100000, '1640052733_HC004.png', '', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 100, 1, 1),
(18, 'HC005', 'Bên Nhau Trọn Đời', 880000, '1640052828_HC005.png', '', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 60, 1, 1),
(19, 'HC006', 'Trắng tinh khôi', 1000000, '1640052901_HC006.png', '', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 23, 1, 1),
(20, 'HCB', 'HƯ KHÔNG', 660000, '1640053029_HCB001.png', '<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được, nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với v&ograve;ng hoa chia buồn Hư kh&ocirc;ng được kết từ hoa c&uacute;c, hoa m&otilde;m s&oacute;i, ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẽ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được, nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với v&ograve;ng hoa chia buồn Hư kh&ocirc;ng được kết từ hoa c&uacute;c, hoa m&otilde;m s&oacute;i, ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẽ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được, nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với v&ograve;ng hoa chia buồn Hư kh&ocirc;ng được kết từ hoa c&uacute;c, hoa m&otilde;m s&oacute;i, ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẽ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 23, 1, 4),
(21, 'HCB002', 'HẠC TRẮNG', 1450000, '1640053087_HCB002.png', '<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được, nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với kệ hoa chia buồn Hạc Trắng 3 được kết từ hoa Lan, hoa Hồng, hoa Ly v&agrave; c&aacute;c phụ liệu kh&aacute;c ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẻ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được, nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với kệ hoa chia buồn Hạc Trắng 3 được kết từ hoa Lan, hoa Hồng, hoa Ly v&agrave; c&aacute;c phụ liệu kh&aacute;c ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẻ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được, nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với kệ hoa chia buồn Hạc Trắng 3 được kết từ hoa Lan, hoa Hồng, hoa Ly v&agrave; c&aacute;c phụ liệu kh&aacute;c ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẻ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 60, 1, 4),
(22, 'HCB003', 'KIẾP VÔ THƯỜNG', 3300000, '1640053148_HCB003.png', '<p>Cuộc sống sinh l&atilde;o bệnh tử l&agrave; điều kh&ocirc;ng ai c&oacute; thể tr&aacute;nh khỏi. Tất cả rồi sẽ trở về với c&aacute;t bụi mọi thứ đều v&ocirc; thường. Kệ hoa như sự chia sẽ với nỗi buồn mất m&aacute;t khi người th&acirc;n ra đi. Mong người ra đi được thanh thản kh&ocirc;ng c&ograve;n vương vấn bụi trần.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cuộc sống sinh l&atilde;o bệnh tử l&agrave; điều kh&ocirc;ng ai c&oacute; thể tr&aacute;nh khỏi. Tất cả rồi sẽ trở về với c&aacute;t bụi mọi thứ đều v&ocirc; thường. Kệ hoa như sự chia sẽ với nỗi buồn mất m&aacute;t khi người th&acirc;n ra đi. Mong người ra đi được thanh thản kh&ocirc;ng c&ograve;n vương vấn bụi trần.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cuộc sống sinh l&atilde;o bệnh tử l&agrave; điều kh&ocirc;ng ai c&oacute; thể tr&aacute;nh khỏi. Tất cả rồi sẽ trở về với c&aacute;t bụi mọi thứ đều v&ocirc; thường. Kệ hoa như sự chia sẽ với nỗi buồn mất m&aacute;t khi người th&acirc;n ra đi. Mong người ra đi được thanh thản kh&ocirc;ng c&ograve;n vương vấn bụi trần.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 21, 1, 4),
(23, 'HCB004', 'GIỌT MƯA SA', 3000000, '1640053219_HCB004.png', '<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được, nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với v&ograve;ng hoa chia buồn Giọt mưa sa được thiết kế theo t&ocirc;ng chủ đạo l&agrave; m&agrave;u trắng kết từ hoa lan v&agrave; c&aacute;c phụ liệu kh&aacute;c ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẻ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được, nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với v&ograve;ng hoa chia buồn Giọt mưa sa được thiết kế theo t&ocirc;ng chủ đạo l&agrave; m&agrave;u trắng kết từ hoa lan v&agrave; c&aacute;c phụ liệu kh&aacute;c ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẻ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong cuộc sống ch&uacute;ng ta mất bất cứ thứ g&igrave; ch&uacute;ng ta cũng c&oacute; thể c&oacute; lại được, nhưng khi ch&uacute;ng ta mất vĩnh viễn một người th&acirc;n hay một người bạn ch&uacute;ng ta kh&ocirc;ng bao giờ t&igrave;m lại được. Với v&ograve;ng hoa chia buồn Giọt mưa sa được thiết kế theo t&ocirc;ng chủ đạo l&agrave; m&agrave;u trắng kết từ hoa lan v&agrave; c&aacute;c phụ liệu kh&aacute;c ch&uacute;ng t&ocirc;i sẽ thay mặt bạn đưa tiễn họ v&agrave; chia sẻ c&ugrave;ng gia đ&igrave;nh họ.</p>\r\n', '2021-12-21', '2021-12-21', 'Việt Nam', 'FLOWER', 43, 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

CREATE TABLE `shipping` (
  `id_shipping` int(11) NOT NULL,
  `name_shipping` varchar(100) NOT NULL,
  `phone_shipping` varchar(20) NOT NULL,
  `address_shipping` varchar(255) NOT NULL,
  `node_shipping` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shipping`
--

INSERT INTO `shipping` (`id_shipping`, `name_shipping`, `phone_shipping`, `address_shipping`, `node_shipping`, `id_user`) VALUES
(1, 'Trần Thiên Vạn', '0835605007', 'ben tre', 'dcfvv', 1),
(2, 'Phúc Ngân', '0123456789', 'Việt Nam', 'ngan', 2),
(3, 'Phúc Ngân 2', '01236547859', 'Việt Nam', 'abc123\r\n123123', 4),
(4, 'Phúc Ngân 2', '01236547859', 'Việt Nam', 'abc123\r\n123123', 4),
(5, 'Phúc Ngân 2', '01236547859', 'Việt Nam', 'abc123\r\n123123', 4),
(6, 'Phúc Ngân 2', '01236547859', 'Việt Nam', 'abc123\r\n123123', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongke`
--

CREATE TABLE `thongke` (
  `id_thongke` int(11) NOT NULL,
  `ngay_thongke` varchar(50) NOT NULL,
  `tongdon_thongke` int(11) NOT NULL,
  `doanhthu_thongke` varchar(100) NOT NULL,
  `soluongbanra_thongke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongke`
--

INSERT INTO `thongke` (`id_thongke`, `ngay_thongke`, `tongdon_thongke`, `doanhthu_thongke`, `soluongbanra_thongke`) VALUES
(1, '2022-04-14', 1, '880000', 1),
(2, '2022-04-15', 1, '1200000', 2),
(3, '2022-05-14', 4, '3550000', 1),
(4, '2022-05-15', 2, '1290000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(200) NOT NULL,
  `gmail_user` varchar(100) NOT NULL,
  `account_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `phone_user` varchar(20) NOT NULL,
  `address_user` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `gmail_user`, `account_user`, `password_user`, `phone_user`, `address_user`) VALUES
(1, 'Trần Thiên Vạn', '019101018.tgu@gmail.com', 'vantran123', '202cb962ac59075b964b07152d234b70', '0835605007', 'ben tre'),
(2, 'Phúc Ngân', 'ngannn@gmail.com', 'user1', 'e10adc3949ba59abbe56e057f20f883e', '0123456789', 'Việt Nam'),
(4, 'Võ Nguyễn Phúc Ngân', 'ngan222@gmail.com', 'user22', '202cb962ac59075b964b07152d234b70', '01236547859', 'Việt Nam, Bến Tre');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(50) NOT NULL,
  `vnp_bankcode` varchar(50) NOT NULL,
  `vnp_banktranno` varchar(50) NOT NULL,
  `vnp_cardtype` varchar(50) NOT NULL,
  `vnp_orderinfo` varchar(100) NOT NULL,
  `vnp_paydate` varchar(50) NOT NULL,
  `vnp_tmncode` varchar(50) NOT NULL,
  `vnp_transactionno` varchar(50) NOT NULL,
  `id_hoadon` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`id_vnpay`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `id_hoadon`) VALUES
(3, '79000000', 'NCB', 'VNP13725888', 'ATM', 'Thanh toán qua VNPAY cho đơn hàng', '20220415160120', '0UMNR5YN', '13725888', 26),
(4, '125000000', 'NCB', 'VNP13730076', 'ATM', 'Thanh toán qua VNPAY cho đơn hàng', '20220421100223', '0UMNR5YN', '13730076', 28),
(6, '390000000', 'NCB', 'VNP13736228', 'ATM', 'Thanh toán qua VNPAY cho đơn hàng', '20220428153331', '0UMNR5YN', '13736228', 31),
(23, '390000000', 'NCB', 'VNP13736228', 'ATM', 'Thanh toán qua VNPAY cho đơn hàng', '20220428153331', '0UMNR5YN', '13736228', 31),
(25, '110000000', 'NCB', 'VNP13744032', 'ATM', 'Thanh toán qua VNPAY cho đơn hàng', '20220511232415', '0UMNR5YN', '13744032', 39);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_chitiethoadon`),
  ADD KEY `chitiethoadon_ibfk_1` (`id_sanpham`),
  ADD KEY `chitiethoadon_ibfk_2` (`id_hoadon`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madanhmuc`) USING BTREE;

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD KEY `hoadon_ibfk_2` (`id_user`),
  ADD KEY `hoadon_ibfk_1` (`id_shipping`);

--
-- Chỉ mục cho bảng `hotro`
--
ALTER TABLE `hotro`
  ADD PRIMARY KEY (`id_hotro`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `sanpham_ibfk_1` (`madanhmuc`);

--
-- Chỉ mục cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id_shipping`),
  ADD KEY `shipping_ibfk_1` (`id_user`);

--
-- Chỉ mục cho bảng `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id_thongke`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id_vnpay`),
  ADD KEY `vnpay_ibfk_1` (`id_hoadon`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_baiviet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_chitiethoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `hotro`
--
ALTER TABLE `hotro`
  MODIFY `id_hotro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id_thongke` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`id_hoadon`) REFERENCES `hoadon` (`id_hoadon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_shipping`) REFERENCES `shipping` (`id_shipping`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmuc` (`madanhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD CONSTRAINT `vnpay_ibfk_1` FOREIGN KEY (`id_hoadon`) REFERENCES `hoadon` (`id_hoadon`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
