-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.25 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table poppinco.co.calculations
DROP TABLE IF EXISTS `calculations`;
CREATE TABLE IF NOT EXISTS `calculations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `reference_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `current_value` double NOT NULL DEFAULT '0',
  `years_of_investment` smallint NOT NULL DEFAULT '0',
  `annual_return_rate` smallint NOT NULL DEFAULT '0',
  `annual_withdrawal` double NOT NULL DEFAULT '0',
  `management_fee` double NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `market_history` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK1_user_id` (`user_id`),
  CONSTRAINT `FK1_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poppinco.co.calculations: ~0 rows (approximately)
DELETE FROM `calculations`;
/*!40000 ALTER TABLE `calculations` DISABLE KEYS */;
/*!40000 ALTER TABLE `calculations` ENABLE KEYS */;

-- Dumping structure for table poppinco.co.migration
DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apply_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poppinco.co.migration: 3 rows
DELETE FROM `migration`;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1645432851),
	('m130524_201442_init', 1645432856),
	('m190124_110200_add_verification_token_column_to_user_table', 1645432856);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;

-- Dumping structure for table poppinco.co.results
DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` int NOT NULL AUTO_INCREMENT,
  `calc_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `relationship_status` varchar(100) NOT NULL,
  `number_of_dependents` varchar(5) NOT NULL,
  `employment_income` double NOT NULL DEFAULT '0',
  `pension_income` double NOT NULL DEFAULT '0',
  `investment_income` double NOT NULL DEFAULT '0',
  `other_income` double NOT NULL DEFAULT '0',
  `cash_savings` double NOT NULL DEFAULT '0',
  `pensions_including_sipps` double NOT NULL DEFAULT '0',
  `property_including_investment_properties` double NOT NULL DEFAULT '0',
  `investment_portfolios` double NOT NULL DEFAULT '0',
  `mortgages` double NOT NULL DEFAULT '0',
  `other_secured_loans` double NOT NULL DEFAULT '0',
  `credit_card_debt` double NOT NULL DEFAULT '0',
  `other_unsecured_loans` double NOT NULL DEFAULT '0',
  `rent_mortgage_payments` double NOT NULL DEFAULT '0',
  `utilities_electricity_water_internet_etc` double NOT NULL DEFAULT '0',
  `food` double NOT NULL DEFAULT '0',
  `debt_repayment` double NOT NULL DEFAULT '0',
  `other` double NOT NULL DEFAULT '0',
  `q1` tinyint NOT NULL,
  `q2` tinyint NOT NULL,
  `q3` tinyint NOT NULL,
  `q4` tinyint NOT NULL,
  `q5` tinyint NOT NULL,
  `q6` tinyint NOT NULL,
  `q7` tinyint NOT NULL,
  `q8` tinyint NOT NULL,
  `q9` tinyint NOT NULL,
  `q10` tinyint NOT NULL,
  `q11` tinyint NOT NULL,
  `q12` tinyint NOT NULL,
  `q13` tinyint NOT NULL,
  `q14` tinyint NOT NULL,
  `total_income` double NOT NULL DEFAULT '0',
  `total_assets` double NOT NULL DEFAULT '0',
  `total_liquid_assets` double NOT NULL DEFAULT '0',
  `total_liabilities` double NOT NULL DEFAULT '0',
  `total_current_liabilities` double NOT NULL DEFAULT '0',
  `total_monthly_spend` double NOT NULL DEFAULT '0',
  `total_annual_spend` double NOT NULL DEFAULT '0',
  `rc` double NOT NULL DEFAULT '0',
  `rc_text` varchar(50) NOT NULL,
  `rc_description` varchar(1000) NOT NULL,
  `rt` double NOT NULL DEFAULT '0',
  `rt_text` varchar(50) NOT NULL,
  `composure` double NOT NULL DEFAULT '0',
  `composure_text` varchar(50) NOT NULL,
  `market` double NOT NULL DEFAULT '0',
  `market_text` varchar(50) NOT NULL,
  `overall` double NOT NULL DEFAULT '0',
  `overal_text` varchar(50) NOT NULL,
  `overll_description` varchar(1000) NOT NULL,
  `recomendation_text` varchar(50) NOT NULL,
  `recomendation_description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table poppinco.co.results: ~4 rows (approximately)
DELETE FROM `results`;
/*!40000 ALTER TABLE `results` DISABLE KEYS */;
INSERT INTO `results` (`id`, `calc_date`, `full_name`, `email_address`, `age`, `relationship_status`, `number_of_dependents`, `employment_income`, `pension_income`, `investment_income`, `other_income`, `cash_savings`, `pensions_including_sipps`, `property_including_investment_properties`, `investment_portfolios`, `mortgages`, `other_secured_loans`, `credit_card_debt`, `other_unsecured_loans`, `rent_mortgage_payments`, `utilities_electricity_water_internet_etc`, `food`, `debt_repayment`, `other`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `total_income`, `total_assets`, `total_liquid_assets`, `total_liabilities`, `total_current_liabilities`, `total_monthly_spend`, `total_annual_spend`, `rc`, `rc_text`, `rc_description`, `rt`, `rt_text`, `composure`, `composure_text`, `market`, `market_text`, `overall`, `overal_text`, `overll_description`, `recomendation_text`, `recomendation_description`) VALUES
	(1, '2021-04-03 11:03:01', 'Bla bla Bla', 'artrmart@gmail.com', 60, 'Married/Civil partnership', '1', 64000, 0, 0, 6500, 3000, 4000, 200000, 4000, 275000, 0, 6000, 0, 800, 200, 200, 700, 350, 4, 4, 4, 4, 4, 4, 5, 5, 2, 5, 4, 2, 4, 4, 70500, 211000, 11000, 281000, 6001, 2250, 27000, 0.48880742098539, 'Moderate', 'Based on your inputs, you appear to have a Moderate capacity for risk. Your risk capacity looks at things like your age, any income and expenditure to show you how much risk you are able to take. By having a Moderate capacity for risk you have a Moderate ability to take risk and potentially absorb losses. This suggests that you can afford to put some money into investments.', 0.8, 'High', 0.84, 'High', 0.66666666666667, 'Medium High', 0.77464788732394, 'Medium High', 'Based on your level of composure, your understanding of finance and your feelings towards risk taking you appear to have a Medium High tolerance for risk. A Medium High tolerance for risk means that you are comfortable taking risk in the pursuit of earning a greater return on your money. You recognise that investing is a riskier activity than holding cash but are willing and able to stomach movement in the value of your investments in return for your funds growing over the long term.', 'Medium High', 'By combining the results of the risk capacity assessment with your attitudes towards risk you have an overall result of ‘Medium High’. This result suggests that investing your long term funds would be comfortable for you and therefore give you the opportunity to capture long term positive returns in excess of the likely return from holding cash. Investment returns are not guaranteed and portfolio values can go down as well as up. The information you have provided suggests that you could comfortably withstand short term falls in the value of your portfolio.'),
	(2, '2021-04-03 11:05:01', 'Bla bla Bla', 'artrmart@gmail.com', 60, 'Married/Civil partnership', '1', 64000, 0, 0, 6500, 3000, 4000, 200000, 4000, 275000, 0, 6000, 0, 800, 200, 200, 700, 350, 4, 4, 4, 4, 4, 4, 5, 5, 2, 5, 4, 2, 4, 4, 70500, 211000, 11000, 281000, 6001, 2250, 27000, 0.48880742098539, 'Moderate', 'Based on your inputs, you appear to have a Moderate capacity for risk. Your risk capacity looks at things like your age, any income and expenditure to show you how much risk you are able to take. By having a Moderate capacity for risk you have a Moderate ability to take risk and potentially absorb losses. This suggests that you can afford to put some money into investments.', 0.8, 'High', 0.84, 'High', 0.66666666666667, 'Medium High', 0.77464788732394, 'Medium High', 'Based on your level of composure, your understanding of finance and your feelings towards risk taking you appear to have a Medium High tolerance for risk. A Medium High tolerance for risk means that you are comfortable taking risk in the pursuit of earning a greater return on your money. You recognise that investing is a riskier activity than holding cash but are willing and able to stomach movement in the value of your investments in return for your funds growing over the long term.', 'Medium High', 'By combining the results of the risk capacity assessment with your attitudes towards risk you have an overall result of ‘Medium High’. This result suggests that investing your long term funds would be comfortable for you and therefore give you the opportunity to capture long term positive returns in excess of the likely return from holding cash. Investment returns are not guaranteed and portfolio values can go down as well as up. The information you have provided suggests that you could comfortably withstand short term falls in the value of your portfolio.'),
	(3, '2021-04-03 11:05:58', 'Bla bla Bla', 'artrmart@gmail.com', 60, 'Married/Civil partnership', '1', 64000, 0, 0, 6500, 3000, 4000, 200000, 4000, 275000, 0, 6000, 0, 800, 200, 200, 700, 350, 4, 4, 4, 4, 4, 4, 5, 5, 2, 5, 4, 2, 4, 4, 70500, 211000, 11000, 281000, 6001, 2250, 27000, 0.48880742098539, 'Moderate', 'Based on your inputs, you appear to have a Moderate capacity for risk. Your risk capacity looks at things like your age, any income and expenditure to show you how much risk you are able to take. By having a Moderate capacity for risk you have a Moderate ability to take risk and potentially absorb losses. This suggests that you can afford to put some money into investments.', 0.8, 'High', 0.84, 'High', 0.66666666666667, 'Medium High', 0.77464788732394, 'Medium High', 'Based on your level of composure, your understanding of finance and your feelings towards risk taking you appear to have a Medium High tolerance for risk. A Medium High tolerance for risk means that you are comfortable taking risk in the pursuit of earning a greater return on your money. You recognise that investing is a riskier activity than holding cash but are willing and able to stomach movement in the value of your investments in return for your funds growing over the long term.', 'Medium High', 'By combining the results of the risk capacity assessment with your attitudes towards risk you have an overall result of ‘Medium High’. This result suggests that investing your long term funds would be comfortable for you and therefore give you the opportunity to capture long term positive returns in excess of the likely return from holding cash. Investment returns are not guaranteed and portfolio values can go down as well as up. The information you have provided suggests that you could comfortably withstand short term falls in the value of your portfolio.'),
	(4, '2021-04-08 08:56:43', 'Bla bla Bla', 'artrmart@gmail.com', 60, 'Married/Civil partnership', '1', 64000, 0, 0, 6500, 3000, 4000, 200000, 4000, 275000, 0, 6000, 0, 800, 200, 200, 700, 350, 3, 3, 4, 3, 3, 2, 3, 4, 3, 2, 3, 4, 3, 2, 70500, 211000, 11000, 281000, 6001, 2250, 27000, 0.48880742098539, 'Moderate', 'Based on your inputs, you appear to have a Moderate capacity for risk. Your risk capacity looks at things like your age, any income and expenditure to show you how much risk you are able to take. By having a Moderate capacity for risk you have a Moderate ability to take risk and potentially absorb losses. This suggests that you can afford to put some money into investments.', 0.63333333333333, 'Moderate', 0.6, 'Moderate', 0.53333333333333, 'Moderate', 0.59154929577465, 'Moderate', 'Based on your level of composure, your understanding of finance and your feelings towards risk taking you appear to have a Moderate tolerance for risk. A Moderate tolerance for risk means that you are reasonably comfortable taking some risk in the pursuit of earning a greater return on your money. You recognise that investing is a riskier activity than holding cash but are willing and able to stomach some movement in the value of your investments in return for your funds growing over the long term.', 'Moderate', 'By combining the results of the risk capacity assessment with your attitudes towards risk you have an overall result of ‘Moderate’. This result suggests that investing some of your long term funds would be comfortable for you and therefore give you the opportunity to capture long term positive returns in excess of the likely return from holding cash. Investment returns are not guaranteed and portfolio values can go down as well as up. The information you have provided suggests that you could withstand some short term falls in the value of your portfolio.');
/*!40000 ALTER TABLE `results` ENABLE KEYS */;

-- Dumping structure for table poppinco.co.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_group` int NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- Dumping data for table poppinco.co.user: ~2 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `firstname`, `lastname`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `user_group`) VALUES
	(1, 'admin', 'admin', 'kAkN4H87BnXNH-Dxtta20T-tP17cN5-j', '$2y$13$4TIXcVp6GTlbV4t1Y9clk.X3LAZVgl.3ELFn8BfGnkjogMKRZoeUS', NULL, 'artrmart@gmail.com', 10, 1610058395, 1645513947, 'H-p5k5P-uwHCKt1ZNSD7sGWd5iH5Rnqg_1610058395', 1),
	(6, 'demo', 'demo', '0zZLYf7QJDLUVcER5BMLHIWuUQVMpiGh', '$2y$13$aUBX5Rz3nMYCx8pjBjO/LO7uMKxdrCsIhjnOg04YrpBP8w3mWEtKa', NULL, 'demo@demo.com', 10, 1645517710, 1645518559, 'I0qYW3W3SL9SdHWJ1J3Hr-TH48-xslGP_1645517710', 2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table poppinco.co.user_groups
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table poppinco.co.user_groups: ~2 rows (approximately)
DELETE FROM `user_groups`;
/*!40000 ALTER TABLE `user_groups` DISABLE KEYS */;
INSERT INTO `user_groups` (`id`, `group_name`) VALUES
	(1, 'Administrator'),
	(2, 'User');
/*!40000 ALTER TABLE `user_groups` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
