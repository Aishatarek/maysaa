-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 06:19 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maysaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'adminmaysaa83@gmail.com', 'c0634f82f75afd48780b668f2e2307c7');

-- --------------------------------------------------------

--
-- Table structure for table `sa_branch`
--

CREATE TABLE `sa_branch` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sa_branch`
--

INSERT INTO `sa_branch` (`id`, `title`) VALUES
(1, 'الأنتساب المهني او الجمعيات'),
(2, 'الجوائز والتكريم الأكاديمي'),
(3, 'الخبرة الأكاديمية والتدريس');

-- --------------------------------------------------------

--
-- Table structure for table `scientific_activities`
--

CREATE TABLE `scientific_activities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `branch` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scientific_activities`
--

INSERT INTO `scientific_activities` (`id`, `title`, `branch`, `image`) VALUES
(21, 'Mohammad Ali', 2, '8951.jpg'),
(22, 'Orizon', 2, '9061.jpg'),
(23, 'Fundo', 3, '451.jpg'),
(24, 'brawlhalla', 1, '3431.jpg'),
(25, 'DSM', 3, '31.jpg'),
(26, 'MetaSpark', 3, '2771.jpg'),
(27, 'Summary', 3, '9241.jpg'),
(28, 'Task Manager', 1, '7481.jpg'),
(29, 'Arrival', 3, '4551.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `scientific_publications`
--

CREATE TABLE `scientific_publications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `link` longtext NOT NULL,
  `publication_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scientific_publications`
--

INSERT INTO `scientific_publications` (`id`, `title`, `description`, `link`, `publication_date`) VALUES
(8, 'ASSOCIATION BETWEEN LEUKOCYTES COUNT AND THE SEVERITY OF COVID-19 INFECTION', 'The aim: To find an association of COVID-19 on different types of leukocytes either count increasing or decreasing. Materials and methods: A cross sectional study conducted from October /2020 to January /2021. Eighty patients out of 170 were enrolled in this study, who were attended a private clinic for clinical investigation and a private laboratory for laboratory diagnosis of COVID-19 who were divided into two groups, asymptomatic or mild (group 1), and moderate or severe (group 2). Five milliliter of blood samples were collected from patients with COVD-19 by venipuncture using a syringe for evaluation of different cells. Results: The current study revealed a significant difference in white blood cells count, neutrophils count, monocytes count, basophils count, and neutrophil to lymphocyte ratio, lymphocyte to monocyte ratio between group 1 and group 2. While lymphocytes, and eosinophil showed no significant difference. Conclusion: The current study concluded that COVID-19 may affect the count of some leukocytes in patient with severe infection\r\n\r\n\r\n', 'https://scholar.google.com/citations?view_op=view_citation&hl=en&user=d_yYA9UAAAAJ&sortby=pubdate&authuser=7&citation_for_view=d_yYA9UAAAAJ:YOwf2qJgpHMC', '2021-12-03'),
(9, 'Cytomegalovirus Infection As Risk Of Atherogenic Lipid Profile In Iraqi', 'Introducion: Atherosclerosis is a form of the cardiovascular diseases which may occur due to a chronic inflammatory reaction to endothelial damage caused by multiple causes which include infection by microorganisms like Cytomegalovirus (CMV). Methods: The present study aims to evaluate the effect of cytomegalovirus infection in patients and its relation to atherosclerosis and to measure the monocyte chemoattractant protein-1 (MCP-1) as a predictive marker for inflammatory process. A total of 30 women who were attending the Gynecology outpatient clinics and were suffering from abortion for first time or with recurrent abortion due to CMV infection were enrolled in the current study. For comparison, twenty blood samples were collected from healthy apparent women as a control group in this study. Serum MCP-1, IL-6 and\r\n\r\n', 'https://scholar.google.com/citations?view_op=view_citation&hl=en&user=d_yYA9UAAAAJ&authuser=7&citation_for_view=d_yYA9UAAAAJ:_kc_bZDykSQC', '2020-03-01'),
(10, 'Antibacterial Activity Of Fenugreek Essential Oil Against Pseudomonas Aeroginosa .', 'Multiple drugs resistance has increased due to the random use of available antimicrobial drugs in treatment of infectious diseases.\r\n\r\n', 'https://scholar.google.com/citations?view_op=view_citation&hl=en&user=d_yYA9UAAAAJ&authuser=7&citation_for_view=d_yYA9UAAAAJ:2osOgNQ5qMEC', '2015-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `theprofile`
--

CREATE TABLE `theprofile` (
  `id` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theprofile`
--

INSERT INTO `theprofile` (`id`, `avatar`, `cv`) VALUES
(1, '736505111.png', '875CV.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `university_activities`
--

CREATE TABLE `university_activities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `publication_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university_activities`
--

INSERT INTO `university_activities` (`id`, `title`, `description`, `image`, `image2`, `image3`, `image4`, `image5`, `publication_date`) VALUES
(1, '  لقاء الاستاذ المساعد الدكتور ميساء علي عبد الخالق معاون العميد للشؤون العلمية بممثلي المراحل والاقسام كافة', 'عقدت كلية الرشيد الجامعة صباح هذا اليوم المصادف 2021/05/02 الساعة التاسعة صباحاً في قاعة الدكتور خاشع المعاضيدي المركزية لقاء مع ممثلي المراحل الدراسية وترأس هذا اللقاء معاون العميد للشؤون العلمية الاستاذ المساعد الدكتور ميساء علي عبد الخالق حيث شمل اللقاء ممثلي المراحل لكافة الاقسام العلمية والانسانية للدراستين الصباحية والمسائية ', '7651.jpg', '8356.jpg', '6004.jpeg', '4793.jpg', '3861.jpg', '2021-02-05'),
(2, 'معاون عميد كلية الرشيد الجامعة للشؤون العلمية الاستاذ المساعد الدكتورة ميساء علي عبد الخالق تمنح شهادة اجتياز دورة', 'منحت الاستاذ المساعد الدكتوره ميساء علي عبد الخالق شهادة اجتياز من قبل نقابة صيادلة العراق وذلك لمشاركتها واجتيازها دورة الاعداد للعمل في الاعلام الدوائي والتي اقامتها النقابة في بغداد.. كل التوفيق والتالق لمعاون العميد للشؤون العلمية وتمنياتنا لها بدوام النجاح على الصعيد العلمي والعملي', '142.jpg', '', '', '', '', '2021-01-20'),
(4, 'قبول نشر بحث لمعاون العميد للشؤون العلمية الأستاذ المساعد الدكتور ميساء                     علي عبد الخالق', '\r\n                    معاون العميد للشؤون العلمية الأستاذ المساعد الدكتور ميساء علي عبد الخالق تواصل إنجازاتها البحثية\r\n                    والعلمية الجديدة والتي تضاف الى سلسلة إنجازاتها العلمية حيث حصلت على قبول نشر لبحثها العلمي الموسوم\r\n                    (Associatio between Leukocytes acount and the severity of Covid-19 infection ) في المجلة\r\n                    العلمية(Wiadomosci Lekarskie ) وهي مجله علمية عالمية عالية التصنيف وضمن مستوعبات scopus مبارك لها\r\n                    هذا الإنجاز متمنين لها المزيد من التقدم في مسيرتها العلمية والأكاديمية\r\n                  ', '1673.jpg', '', '', '', '', '2021-01-04'),
(5, 'مشاركة متميزة لمعاون عميد كلية الرشيد الجامعة للشؤون العلمية أ. م. د ميساء علي عبد خالق. ', '\r\n                    شارك أ. م. د ميساء علي عبدالخالق معاون العميد للشؤون العلمية في ورشة عمل والتي جاءت تحت عنوان (طرق التحري عن التغايرات الوراثية) .\r\n                    التي عقدتها جامعة البصرة / كلية العلوم قسم الكيمياء يوم الاربعاء المصادف 2021/03/10\r\n                    عبر وسائل الاتصال التفاعلية Free conference call\r\n                    مبارك لها هذا الانجاز والتميز متمنين لها المزيد من التقدم في مسيرتها العلمية والاكاديمية. ', '7274.jpeg', '', '', '', '', '2021-03-23'),
(6, 'مشاركة علمية وتألق لمعاون عميد كلية الرشيد الجامعة للشؤون العلمية تم منح معاون العميد للشؤون العلمية الاستاذ المساعد الدكتور ميساء علي عبد الخالق', '\r\n                    مشاركة علمية وتألق لمعاون عميد كلية الرشيد الجامعة للشؤون العلمية\r\n                    تم منح معاون العميد للشؤون العلمية الاستاذ المساعد الدكتور ميساء علي عبد الخالق شهاده مقيم علمي دولية لتقيم البحث العلمي الموسوم ...\r\n                    A Review on the Use of Honey in The Treatment of Wound Infection\r\n                    في المجلة العلمية العالمية الموسومة:\r\n                    Asian Food Science Journal\r\n\r\n                    رمز البحث\r\n\r\n                    Ms_AFSJ_64714\r\n\r\n                    ومن الجدير بالذكر ان معاون العميد للشؤون العلمية عملت على تقييم العديد من البحوث الدولية والمحلية\r\n                    مبارك لها هذا التقدم العلمي\r\n                    متمنين لها مزيدا من التألق على المستوى العلمي والاكاديمي . ', '7565.jpeg', '', '', '', '', '2021-03-18'),
(7, 'نشرت الأستاذ المساعد الدكتورة ميساء علي عبد الخالق معاونة العميد للشؤون العلمية بحثها الموسوم ضمن مستوعبات Scopus', '\r\n                    وفقأ للفقرات التي تضمنتها أهداف كلية الرشيد الجامعة هو الارتقاء بمنظومة البحث العلمي وزيادة الأبحاث والدراسات المنشورة في المجلات والدوريات العلمية المحكمة وزيادة معامل التأثير ، نشرت الأستاذ المساعد الدكتورة ميساء علي عبد الخالق معاونة العميد للشؤون العلمية بحثها الموسوم (Detection of biomarkers in serum and synovial fluid of Iraqi patients with knee osteoarthritis) في مجلة (International journal of pharmaceutical research ) وهي إحدى المجلات العلمية الرصينة ضمن مستوعبات Scopus,مما يخدم وبشكل مباشر عملية التعليم والبحث العلمي وتعزيز دورها الريادي كداعمة للبحث العلمي في العراق وخدمة المجتمع. ', '8256.jpg', '', '', '', '', '2020-06-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sa_branch`
--
ALTER TABLE `sa_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scientific_activities`
--
ALTER TABLE `scientific_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `scientific_publications`
--
ALTER TABLE `scientific_publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theprofile`
--
ALTER TABLE `theprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_activities`
--
ALTER TABLE `university_activities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sa_branch`
--
ALTER TABLE `sa_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `scientific_activities`
--
ALTER TABLE `scientific_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `scientific_publications`
--
ALTER TABLE `scientific_publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `theprofile`
--
ALTER TABLE `theprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `university_activities`
--
ALTER TABLE `university_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scientific_activities`
--
ALTER TABLE `scientific_activities`
  ADD CONSTRAINT `scientific_activities_ibfk_1` FOREIGN KEY (`branch`) REFERENCES `sa_branch` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
