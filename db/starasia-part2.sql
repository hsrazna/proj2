-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 29 2016 г., 14:37
-- Версия сервера: 5.5.50
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `starasia`
--

-- --------------------------------------------------------

--
-- Структура таблицы `wp_revslider_css`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_css` (
  `id` int(9) NOT NULL,
  `handle` text NOT NULL,
  `settings` longtext,
  `hover` longtext,
  `params` longtext NOT NULL,
  `advanced` longtext
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_revslider_css`
--

INSERT INTO `wp_revslider_css` (`id`, `handle`, `settings`, `hover`, `params`, `advanced`) VALUES
(1, '.tp-caption.medium_grey', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"700","font-size":"20px","line-height":"20px","font-family":"Arial","padding":"2px 4px","border-width":"0px","border-style":"none","background-color":"#888"}', '{"idle":{"position":"absolute","text-shadow":"0px 2px 5px rgba(0, 0, 0, 0.5)","margin":"0px","white-space":"nowrap"},"hover":""}'),
(2, '.tp-caption.small_text', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"700","font-size":"14px","line-height":"20px","font-family":"Arial","border-width":"0px","border-style":"none"}', '{"idle":{"position":"absolute","text-shadow":"0px 2px 5px rgba(0, 0, 0, 0.5)","margin":"0px","white-space":"nowrap"},"hover":""}'),
(3, '.tp-caption.medium_text', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"700","font-size":"20px","line-height":"20px","font-family":"Arial","border-width":"0px","border-style":"none"}', '{"idle":{"position":"absolute","text-shadow":"0px 2px 5px rgba(0, 0, 0, 0.5)","margin":"0px","white-space":"nowrap"},"hover":""}'),
(4, '.tp-caption.large_text', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"700","font-size":"40px","line-height":"40px","font-family":"Arial","border-width":"0px","border-style":"none"}', '{"idle":{"position":"absolute","text-shadow":"0px 2px 5px rgba(0, 0, 0, 0.5)","margin":"0px","white-space":"nowrap"},"hover":""}'),
(5, '.tp-caption.very_large_text', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"700","font-size":"60px","line-height":"60px","font-family":"Arial","border-width":"0px","border-style":"none"}', '{"idle":{"position":"absolute","text-shadow":"0px 2px 5px rgba(0, 0, 0, 0.5)","margin":"0px","white-space":"nowrap","letter-spacing":"-2px"},"hover":""}'),
(6, '.tp-caption.very_big_white', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"800","font-size":"60px","line-height":"60px","font-family":"Arial","border-width":"0px","border-style":"none","padding":"0px 4px","background-color":"#000"}', '{"idle":{"position":"absolute","text-shadow":"none","margin":"0px","white-space":"nowrap","padding-top":"1px"},"hover":""}'),
(7, '.tp-caption.very_big_black', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#000","font-weight":"700","font-size":"60px","line-height":"60px","font-family":"Arial","border-width":"0px","border-style":"none","padding":"0px 4px","background-color":"#fff"}', '{"idle":{"position":"absolute","text-shadow":"none","margin":"0px","white-space":"nowrap","padding-top":"1px"},"hover":""}'),
(8, '.tp-caption.modern_medium_fat', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#000","font-weight":"800","font-size":"24px","line-height":"20px","font-family":"\\"Open Sans\\", sans-serif","border-width":"0px","border-style":"none"}', '{"idle":{"position":"absolute","text-shadow":"none","margin":"0px","white-space":"nowrap"},"hover":""}'),
(9, '.tp-caption.modern_medium_fat_white', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"800","font-size":"24px","line-height":"20px","font-family":"\\"Open Sans\\", sans-serif","border-width":"0px","border-style":"none"}', '{"idle":{"position":"absolute","text-shadow":"none","margin":"0px","white-space":"nowrap"},"hover":""}'),
(10, '.tp-caption.modern_medium_light', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#000","font-weight":"300","font-size":"24px","line-height":"20px","font-family":"\\"Open Sans\\", sans-serif","border-width":"0px","border-style":"none"}', '{"idle":{"position":"absolute","text-shadow":"none","margin":"0px","white-space":"nowrap"},"hover":""}'),
(11, '.tp-caption.modern_big_bluebg', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"800","font-size":"30px","line-height":"36px","font-family":"\\"Open Sans\\", sans-serif","padding":"3px 10px","border-width":"0px","border-style":"none","background-color":"#4e5b6c"}', '{"idle":{"position":"absolute","text-shadow":"none","margin":"0px","letter-spacing":"0"},"hover":""}'),
(12, '.tp-caption.modern_big_redbg', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"300","font-size":"30px","line-height":"36px","font-family":"\\"Open Sans\\", sans-serif","padding":"3px 10px","border-width":"0px","border-style":"none","background-color":"#de543e"}', '{"idle":{"position":"absolute","text-shadow":"none","padding-top":"1px","margin":"0px","letter-spacing":"0"},"hover":""}'),
(13, '.tp-caption.modern_small_text_dark', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#555","font-size":"14px","line-height":"22px","font-family":"Arial","border-width":"0px","border-style":"none"}', '{"idle":{"position":"absolute","text-shadow":"none","margin":"0px","white-space":"nowrap"},"hover":""}'),
(14, '.tp-caption.boxshadow', '{"translated":5,"type":"text","version":"4"}', 'null', '[]', '{"idle":{"-moz-box-shadow":"0px 0px 20px rgba(0, 0, 0, 0.5)","-webkit-box-shadow":"0px 0px 20px rgba(0, 0, 0, 0.5)","box-shadow":"0px 0px 20px rgba(0, 0, 0, 0.5)"},"hover":""}'),
(15, '.tp-caption.black', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#000"}', '{"idle":{"text-shadow":"none"},"hover":""}'),
(16, '.tp-caption.noshadow', '{"translated":5,"type":"text","version":"4"}', 'null', '[]', '{"idle":{"text-shadow":"none"},"hover":""}'),
(17, '.tp-caption.thinheadline_dark', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"rgba(0,0,0,0.85)","font-weight":"300","font-size":"30px","line-height":"30px","font-family":"\\"Open Sans\\"","background-color":"transparent"}', '{"idle":{"position":"absolute","text-shadow":"none"},"hover":""}'),
(18, '.tp-caption.thintext_dark', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"rgba(0,0,0,0.85)","font-weight":"300","font-size":"16px","line-height":"26px","font-family":"\\"Open Sans\\"","background-color":"transparent"}', '{"idle":{"position":"absolute","text-shadow":"none"},"hover":""}'),
(19, '.tp-caption.largeblackbg', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"300","font-size":"50px","line-height":"70px","font-family":"\\"Open Sans\\"","background-color":"#000","padding":"0px 20px","border-radius":"0px"}', '{"idle":{"position":"absolute","text-shadow":"none","-webkit-border-radius":"0px","-moz-border-radius":"0px"},"hover":""}'),
(20, '.tp-caption.largepinkbg', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"300","font-size":"50px","line-height":"70px","font-family":"\\"Open Sans\\"","background-color":"#db4360","padding":"0px 20px","border-radius":"0px"}', '{"idle":{"position":"absolute","text-shadow":"none","-webkit-border-radius":"0px","-moz-border-radius":"0px"},"hover":""}'),
(21, '.tp-caption.largewhitebg', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#000","font-weight":"300","font-size":"50px","line-height":"70px","font-family":"\\"Open Sans\\"","background-color":"#fff","padding":"0px 20px","border-radius":"0px"}', '{"idle":{"position":"absolute","text-shadow":"none","-webkit-border-radius":"0px","-moz-border-radius":"0px"},"hover":""}'),
(22, '.tp-caption.largegreenbg', '{"translated":5,"type":"text","version":"4"}', 'null', '{"color":"#fff","font-weight":"300","font-size":"50px","line-height":"70px","font-family":"\\"Open Sans\\"","background-color":"#67ae73","padding":"0px 20px","border-radius":"0px"}', '{"idle":{"position":"absolute","text-shadow":"none","-webkit-border-radius":"0px","-moz-border-radius":"0px"},"hover":""}'),
(23, '.tp-caption.excerpt', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"36px","line-height":"36px","font-weight":"700","font-family":"Arial","color":"#ffffff","text-decoration":"none","background-color":"rgba(0, 0, 0, 1)","padding":"1px 4px 0px 4px","border-width":"0px","border-color":"rgb(255, 255, 255)","border-style":"none"}', '{"idle":{"text-shadow":"none","margin":"0px","letter-spacing":"-1.5px","width":"150px","white-space":"normal !important","height":"auto"},"hover":""}'),
(24, '.tp-caption.large_bold_grey', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"60px","line-height":"60px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(102, 102, 102)","text-decoration":"none","background-color":"transparent","padding":"1px 4px 0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":{"text-shadow":"none","margin":"0px"},"hover":""}'),
(25, '.tp-caption.medium_thin_grey', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"34px","line-height":"30px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(102, 102, 102)","text-decoration":"none","background-color":"transparent","padding":"1px 4px 0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":{"text-shadow":"none","margin":"0px"},"hover":""}'),
(26, '.tp-caption.small_thin_grey', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"18px","line-height":"26px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(117, 117, 117)","text-decoration":"none","background-color":"transparent","padding":"1px 4px 0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":{"text-shadow":"none","margin":"0px"},"hover":""}'),
(27, '.tp-caption.lightgrey_divider', '{"translated":5,"type":"text","version":"4"}', 'null', '{"text-decoration":"none","background-color":"rgba(235, 235, 235, 1)","border-width":"0px","border-color":"rgb(34, 34, 34)","border-style":"none"}', '{"idle":{"width":"370px","height":"3px","background-position":"initial initial","background-repeat":"initial initial"},"hover":""}'),
(28, '.tp-caption.large_bold_darkblue', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"58px","line-height":"60px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(52, 73, 94)","text-decoration":"none","background-color":"transparent","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(29, '.tp-caption.medium_bg_darkblue', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"20px","line-height":"20px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"rgb(52, 73, 94)","padding":"10px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(30, '.tp-caption.medium_bold_red', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"24px","line-height":"30px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(227, 58, 12)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(31, '.tp-caption.medium_light_red', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"21px","line-height":"26px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(227, 58, 12)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(32, '.tp-caption.medium_bg_red', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"20px","line-height":"20px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"rgb(227, 58, 12)","padding":"10px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(33, '.tp-caption.medium_bold_orange', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"24px","line-height":"30px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(243, 156, 18)","text-decoration":"none","background-color":"transparent","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(34, '.tp-caption.medium_bg_orange', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"20px","line-height":"20px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"rgb(243, 156, 18)","padding":"10px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(35, '.tp-caption.grassfloor', '{"translated":5,"type":"text","version":"4"}', 'null', '{"text-decoration":"none","background-color":"rgba(160, 179, 151, 1)","border-width":"0px","border-color":"rgb(34, 34, 34)","border-style":"none"}', '{"idle":{"width":"4000px","height":"150px"},"hover":""}'),
(36, '.tp-caption.large_bold_white', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"58px","line-height":"60px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"transparent","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(37, '.tp-caption.medium_light_white', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"30px","line-height":"36px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(38, '.tp-caption.mediumlarge_light_white', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"34px","line-height":"40px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(39, '.tp-caption.mediumlarge_light_white_center', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"34px","line-height":"40px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"#ffffff","text-decoration":"none","background-color":"transparent","padding":"0px 0px 0px 0px","text-align":"center","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(40, '.tp-caption.medium_bg_asbestos', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"20px","line-height":"20px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"rgb(127, 140, 141)","padding":"10px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(41, '.tp-caption.medium_light_black', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"30px","line-height":"36px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(0, 0, 0)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(42, '.tp-caption.large_bold_black', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"58px","line-height":"60px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(0, 0, 0)","text-decoration":"none","background-color":"transparent","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(43, '.tp-caption.mediumlarge_light_darkblue', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"34px","line-height":"40px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(52, 73, 94)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(44, '.tp-caption.small_light_white', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"17px","line-height":"28px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(45, '.tp-caption.roundedimage', '{"translated":5,"type":"text","version":"4"}', 'null', '{"border-width":"0px","border-color":"rgb(34, 34, 34)","border-style":"none"}', '{"idle":[],"hover":""}'),
(46, '.tp-caption.large_bg_black', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"40px","line-height":"40px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"rgb(0, 0, 0)","padding":"10px 20px 15px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}', '{"idle":[],"hover":""}'),
(47, '.tp-caption.mediumwhitebg', '{"translated":5,"type":"text","version":"4"}', 'null', '{"font-size":"30px","line-height":"30px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(0, 0, 0)","text-decoration":"none","background-color":"rgb(255, 255, 255)","padding":"5px 15px 10px","border-width":"0px","border-color":"rgb(0, 0, 0)","border-style":"none"}', '{"idle":{"text-shadow":"none"},"hover":""}'),
(48, '.tp-caption.MarkerDisplay', '{"translated":5,"type":"text","version":"5.0"}', '{"color":"#ff0000","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0"}', '{"font-style":"normal","font-family":"Permanent Marker","padding":"0px 0px 0px 0px","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"#000000","border-style":"none","border-width":"0px","border-radius":"0px 0px 0px 0px","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"text-shadow":"none"},"hover":""}'),
(49, '.tp-caption.Restaurant-Display', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0"}', '{"color":"#ffffff","font-size":"120px","line-height":"120px","font-weight":"700","font-style":"normal","font-family":"Roboto","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":"","hover":""}'),
(50, '.tp-caption.Restaurant-Cursive', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0"}', '{"color":"#ffffff","font-size":"30px","line-height":"30px","font-weight":"400","font-style":"normal","font-family":"Nothing you could do","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(51, '.tp-caption.Restaurant-ScrollDownText', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0"}', '{"color":"#ffffff","font-size":"17px","line-height":"17px","font-weight":"400","font-style":"normal","font-family":"Roboto","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(52, '.tp-caption.Restaurant-Description', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0"}', '{"color":"#ffffff","font-size":"20px","line-height":"30px","font-weight":"300","font-style":"normal","font-family":"Roboto","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"3px"},"hover":""}'),
(53, '.tp-caption.Restaurant-Price', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0"}', '{"color":"#ffffff","font-size":"30px","line-height":"30px","font-weight":"300","font-style":"normal","font-family":"Roboto","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"3px"},"hover":""}'),
(54, '.tp-caption.Restaurant-Menuitem', '{"hover":"false","type":"text","version":"5.0","translated":"5"}', '{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"#ffffff","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"500","easing":"Power2.easeInOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"17px","line-height":"17px","font-weight":"400","font-style":"normal","font-family":"Roboto","padding":["10px","30px","10px","30px"],"text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(55, '.tp-caption.Furniture-LogoText', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#e6cfa3","color-transparency":"1","font-size":"160px","line-height":"150px","font-weight":"300","font-style":"normal","font-family":"\\"Raleway\\"","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"text-shadow":"none"},"hover":""}'),
(56, '.tp-caption.Furniture-Plus', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#000000","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["30px","30px","30px","30px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0.5","easing":"Linear.easeNone"}', '{"color":"#e6cfa3","color-transparency":"1","font-size":"20","line-height":"20px","font-weight":"400","font-style":"normal","font-family":"\\"Raleway\\"","padding":["6px","7px","4px","7px"],"text-decoration":"none","background-color":"#ffffff","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["30px","30px","30px","30px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"text-shadow":"none","box-shadow":"rgba(0,0,0,0.1) 0 1px 3px"},"hover":""}'),
(57, '.tp-caption.Furniture-Title', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#000000","color-transparency":"1","font-size":"20px","line-height":"20px","font-weight":"700","font-style":"normal","font-family":"\\"Raleway\\"","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"text-shadow":"none","letter-spacing":"3px"},"hover":""}'),
(58, '.tp-caption.Furniture-Subtitle', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#000000","color-transparency":"1","font-size":"17px","line-height":"20px","font-weight":"300","font-style":"normal","font-family":"\\"Raleway\\"","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"text-shadow":"none"},"hover":""}'),
(59, '.tp-caption.Gym-Display', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"80px","line-height":"70px","font-weight":"900","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":"","hover":""}'),
(60, '.tp-caption.Gym-Subline', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"30px","line-height":"30px","font-weight":"100","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"5px"},"hover":""}'),
(61, '.tp-caption.Gym-SmallText', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"17px","line-height":"22","font-weight":"300","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"text-shadow":"none"},"hover":""}'),
(62, '.tp-caption.Fashion-SmallText', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"12px","line-height":"20px","font-weight":"600","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(63, '.tp-caption.Fashion-BigDisplay', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#000000","color-transparency":"1","font-size":"60px","line-height":"60px","font-weight":"900","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(64, '.tp-caption.Fashion-TextBlock', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#000000","color-transparency":"1","font-size":"20px","line-height":"40px","font-weight":"400","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(65, '.tp-caption.Sports-Display', '{"translated":5,"type":"text","version":"5.0"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"130px","line-height":"130px","font-weight":"100","font-style":"normal","font-family":"\\"Raleway\\"","padding":"0 0 0 0","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":"0 0 0 0","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"13px"},"hover":""}'),
(66, '.tp-caption.Sports-DisplayFat', '{"translated":5,"type":"text","version":"5.0"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"130px","line-height":"130px","font-weight":"900","font-style":"normal","font-family":"\\"Raleway\\"","padding":"0 0 0 0","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":"0 0 0 0","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":[""],"hover":""}'),
(67, '.tp-caption.Sports-Subline', '{"translated":5,"type":"text","version":"5.0"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#000000","color-transparency":"1","font-size":"32px","line-height":"32px","font-weight":"400","font-style":"normal","font-family":"\\"Raleway\\"","padding":"0 0 0 0","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":"0 0 0 0","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"4px"},"hover":""}'),
(68, '.tp-caption.Instagram-Caption', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"20px","line-height":"20px","font-weight":"900","font-style":"normal","font-family":"Roboto","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":"","hover":""}'),
(69, '.tp-caption.News-Title', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"70px","line-height":"60px","font-weight":"400","font-style":"normal","font-family":"Roboto Slab","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":"","hover":""}'),
(70, '.tp-caption.News-Subtitle', '{"hover":"true","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"0.65","text-decoration":"none","background-color":"#ffffff","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"solid","border-width":"0px","border-radius":["0","0","0px","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"300","easing":"Power3.easeInOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"15px","line-height":"24px","font-weight":"300","font-style":"normal","font-family":"Roboto Slab","padding":["0","0","0","0"],"text-decoration":"none","background-color":"#ffffff","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":"","hover":""}'),
(71, '.tp-caption.Photography-Display', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"80px","line-height":"70px","font-weight":"100","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"5px"},"hover":""}'),
(72, '.tp-caption.Photography-Subline', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#777777","color-transparency":"1","font-size":"20px","line-height":"30px","font-weight":"300","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"3px"},"hover":""}'),
(73, '.tp-caption.Photography-ImageHover', '{"hover":"true","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"0.5","scalex":"0.8","scaley":"0.8","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"1000","easing":"Power3.easeInOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"20","line-height":"22","font-weight":"400","font-style":"normal","font-family":"","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"#ffffff","border-transparency":"0","border-style":"none","border-width":"0px","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":"","hover":""}'),
(74, '.tp-caption.Photography-Menuitem', '{"hover":"true","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#00ffde","background-transparency":"0.65","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"200","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"20px","line-height":"20px","font-weight":"300","font-style":"normal","font-family":"Raleway","padding":["3px","5px","3px","8px"],"text-decoration":"none","background-color":"#000000","background-transparency":"0.65","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(75, '.tp-caption.Photography-Textblock', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","speed":"0","easing":"Linear.easeNone"}', '{"color":"#fff","color-transparency":"1","font-size":"17px","line-height":"30px","font-weight":"300","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(76, '.tp-caption.Photography-Subline-2', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"0.35","font-size":"20px","line-height":"30px","font-weight":"300","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":{"letter-spacing":"3px"},"hover":""}');
INSERT INTO `wp_revslider_css` (`id`, `handle`, `settings`, `hover`, `params`, `advanced`) VALUES
(77, '.tp-caption.Photography-ImageHover2', '{"hover":"true","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"0.5","scalex":"0.8","scaley":"0.8","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"500","easing":"Back.easeOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"20","line-height":"22","font-weight":"400","font-style":"normal","font-family":"Arial","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"#ffffff","border-transparency":"0","border-style":"none","border-width":"0px","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":"","hover":""}'),
(78, '.tp-caption.WebProduct-Title', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#333333","color-transparency":"1","font-size":"90px","line-height":"90px","font-weight":"100","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":"","hover":""}'),
(79, '.tp-caption.WebProduct-SubTitle', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#999999","color-transparency":"1","font-size":"15px","line-height":"20px","font-weight":"400","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":"","hover":""}'),
(80, '.tp-caption.WebProduct-Content', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#999999","color-transparency":"1","font-size":"16px","line-height":"24px","font-weight":"600","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600"}', '{"idle":"","hover":""}'),
(81, '.tp-caption.WebProduct-Menuitem', '{"hover":"true","version":"5.0","translated":"5"}', '{"color":"#999999","color-transparency":"1","text-decoration":"none","background-color":"#ffffff","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"200","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"15px","line-height":"20px","font-weight":"500","font-style":"normal","font-family":"Raleway","padding":["3px","5px","3px","8px"],"text-decoration":"none","text-align":"left","background-color":"#333333","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(82, '.tp-caption.WebProduct-Title-Light', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#fff","color-transparency":"1","font-size":"90px","line-height":"90px","font-weight":"100","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","text-align":"left","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":"","hover":""}'),
(83, '.tp-caption.WebProduct-SubTitle-Light', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"0.35","font-size":"15px","line-height":"20px","font-weight":"400","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","text-align":"left","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","parallax":"-"}', '{"idle":"","hover":""}'),
(84, '.tp-caption.WebProduct-Content-Light', '{"hover":"false","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"0.65","font-size":"16px","line-height":"24px","font-weight":"600","font-style":"normal","font-family":"Raleway","padding":["0","0","0","0"],"text-decoration":"none","text-align":"left","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","parallax":"-"}', '{"idle":"","hover":""}'),
(85, '.tp-caption.FatRounded', '{"hover":"true","type":"text","version":"5.0","translated":"5"}', '{"color":"#fff","color-transparency":"1","text-decoration":"none","background-color":"#000000","background-transparency":"1","border-color":"#d3d3d3","border-transparency":"1","border-style":"none","border-width":"0px","border-radius":["50px","50px","50px","50px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"300","easing":"Linear.easeNone"}', '{"color":"#fff","color-transparency":"1","font-size":"30px","line-height":"30px","font-weight":"900","font-style":"normal","font-family":"Raleway","padding":["20px","22px","20px","25px"],"text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"0.5","border-color":"#d3d3d3","border-transparency":"1","border-style":"none","border-width":"0px","border-radius":["50px","50px","50px","50px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"text-shadow":"none"},"hover":""}'),
(86, '.tp-caption.NotGeneric-Title', '{"translated":5,"type":"text","version":"5.0"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"70px","line-height":"70px","font-weight":"800","font-style":"normal","font-family":"Raleway","padding":"10px 0px 10px 0","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":"0 0 0 0","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":"[object Object]","hover":""}'),
(87, '.tp-caption.NotGeneric-SubTitle', '{"translated":5,"type":"text","version":"5.0"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"13px","line-height":"20px","font-weight":"500","font-style":"normal","font-family":"Raleway","padding":"0 0 0 0","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":"0 0 0 0","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"4px","text-align":"left"},"hover":""}'),
(88, '.tp-caption.NotGeneric-CallToAction', '{"hover":"true","translated":5,"type":"text","version":"5.0"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"#ffffff","border-transparency":"1","border-style":"solid","border-width":"1","border-radius":"0px 0px 0px 0px","opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"300","easing":"Power3.easeOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"14px","line-height":"14px","font-weight":"500","font-style":"normal","font-family":"Raleway","padding":"10px 30px 10px 30px","text-decoration":"none","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.5","border-style":"solid","border-width":"1","border-radius":"0px 0px 0px 0px","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"3px","text-align":"left"},"hover":""}'),
(89, '.tp-caption.NotGeneric-Icon', '{"translated":5,"type":"text","version":"5.0"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"#ffffff","border-transparency":"1","border-style":"solid","border-width":"1","border-radius":["0px","0px","0px","0px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"default","speed":"300","easing":"Power3.easeOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"30px","line-height":"30px","font-weight":"400","font-style":"normal","font-family":"Raleway","padding":"0px 0px 0px 0px","text-decoration":"none","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"0","border-style":"solid","border-width":"0px","border-radius":"0px 0px 0px 0px","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"3px","text-align":"left"},"hover":""}'),
(90, '.tp-caption.NotGeneric-Menuitem', '{"hover":"true","translated":5,"type":"text","version":"5.0"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"1","border-style":"solid","border-width":"1px","border-radius":"0px 0px 0px 0px","opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"300","easing":"Power1.easeInOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"14px","line-height":"14px","font-weight":"500","font-style":"normal","font-family":"Raleway","padding":"27px 30px 27px 30px","text-decoration":"none","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.15","border-style":"solid","border-width":"1px","border-radius":"0px 0px 0px 0px","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"3px","text-align":"left"},"hover":""}'),
(91, '.tp-caption.MarkerStyle', '{"translated":5,"type":"text","version":"5.0"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"17px","line-height":"30px","font-weight":"100","font-style":"normal","font-family":"\\"Permanent Marker\\"","padding":"0 0 0 0","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":"0 0 0 0","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"text-align":"left","0":""},"hover":""}'),
(92, '.tp-caption.Gym-Menuitem', '{"hover":"true","translated":5,"type":"text","version":"5.0"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#000000","background-transparency":"1","border-color":"#ffffff","border-transparency":"0.25","border-style":"solid","border-width":"2px","border-radius":"3px 3px 3px 3px","opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"200","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"20px","line-height":"20px","font-weight":"300","font-style":"normal","font-family":"Raleway","padding":"3px 5px 3px 8px","text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"1","border-color":"#ffffff","border-transparency":"0","border-style":"solid","border-width":"2px","border-radius":"3px 3px 3px 3px","z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-","type":"text"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(93, '.tp-caption.Newspaper-Button', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"#FFFFFF","background-transparency":"1","border-color":"#ffffff","border-transparency":"1","border-style":"solid","border-width":"1px","border-radius":["0px","0px","0px","0px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"300","easing":"Power1.easeInOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"13px","line-height":"17px","font-weight":"700","font-style":"normal","font-family":"Roboto","padding":["12px","35px","12px","35px"],"text-decoration":"none","text-align":"left","background-color":"#ffffff","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.25","border-style":"solid","border-width":"1px","border-radius":["0px","0px","0px","0px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(94, '.tp-caption.Newspaper-Subtitle', '{"hover":"false","type":"text","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#a8d8ee","color-transparency":"1","font-size":"15px","line-height":"20px","font-weight":"900","font-style":"normal","font-family":"Roboto","padding":["0","0","0","0"],"text-decoration":"none","text-align":"left","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":"","hover":""}'),
(95, '.tp-caption.Newspaper-Title', '{"hover":"false","type":"text","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#fff","color-transparency":"1","font-size":"50px","line-height":"55px","font-weight":"400","font-style":"normal","font-family":"\\"Roboto Slab\\"","padding":["0","0","10px","0"],"text-decoration":"none","text-align":"left","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":"","hover":""}'),
(96, '.tp-caption.Newspaper-Title-Centered', '{"hover":"false","type":"text","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#fff","color-transparency":"1","font-size":"50px","line-height":"55px","font-weight":"400","font-style":"normal","font-family":"\\"Roboto Slab\\"","padding":["0","0","10px","0"],"text-decoration":"none","text-align":"center","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":"","hover":""}'),
(97, '.tp-caption.Hero-Button', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"#ffffff","background-transparency":"1","border-color":"#ffffff","border-transparency":"1","border-style":"solid","border-width":"1","border-radius":["0px","0px","0px","0px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"300","easing":"Power1.easeInOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"14px","line-height":"14px","font-weight":"500","font-style":"normal","font-family":"Raleway","padding":["10px","30px","10px","30px"],"text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.5","border-style":"solid","border-width":"1","border-radius":["0px","0px","0px","0px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"3px"},"hover":""}'),
(98, '.tp-caption.Video-Title', '{"hover":"false","type":"text","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#fff","color-transparency":"1","font-size":"30px","line-height":"30px","font-weight":"900","font-style":"normal","font-family":"Raleway","padding":["5px","5px","5px","5px"],"text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"-20%","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":"","hover":""}'),
(99, '.tp-caption.Video-SubTitle', '{"hover":"false","type":"text","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"0","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"12px","line-height":"12px","font-weight":"600","font-style":"normal","font-family":"Raleway","padding":["5px","5px","5px","5px"],"text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"0.35","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"-20%","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(100, '.tp-caption.NotGeneric-Button', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"0","border-color":"#ffffff","border-transparency":"1","border-style":"solid","border-width":"1","border-radius":["0px","0px","0px","0px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"300","easing":"Power1.easeInOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"14px","line-height":"14px","font-weight":"500","font-style":"normal","font-family":"Raleway","padding":["10px","30px","10px","30px"],"text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.5","border-style":"solid","border-width":"1","border-radius":["0px","0px","0px","0px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"3px","text-align":"left"},"hover":""}'),
(101, '.tp-caption.NotGeneric-BigButton', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"1","border-style":"solid","border-width":"1px","border-radius":["0px","0px","0px","0px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"300","easing":"Power1.easeInOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"14px","line-height":"14px","font-weight":"500","font-style":"normal","font-family":"Raleway","padding":["27px","30px","27px","30px"],"text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.15","border-style":"solid","border-width":"1px","border-radius":["0px","0px","0px","0px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"3px"},"hover":""}'),
(102, '.tp-caption.WebProduct-Button', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#333333","color-transparency":"1","text-decoration":"none","background-color":"#ffffff","background-transparency":"1","border-color":"#000000","border-transparency":"1","border-style":"none","border-width":"2","border-radius":["0","0","0","0"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"300","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"16px","line-height":"48px","font-weight":"600","font-style":"normal","font-family":"Raleway","padding":["0px","40px","0px","40px"],"text-decoration":"none","text-align":"left","background-color":"#333333","background-transparency":"1","border-color":"#000000","border-transparency":"1","border-style":"none","border-width":"2","border-radius":["0","0","0","0"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"1px"},"hover":""}'),
(103, '.tp-caption.Restaurant-Button', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#000000","background-transparency":"0","border-color":"#ffe081","border-transparency":"1","border-style":"solid","border-width":"2","border-radius":["0px","0px","0px","0px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"300","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"17px","line-height":"17px","font-weight":"500","font-style":"normal","font-family":"Roboto","padding":["12px","35px","12px","35px"],"text-decoration":"none","text-align":"left","background-color":"#0a0a0a","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.5","border-style":"solid","border-width":"2","border-radius":["0px","0px","0px","0px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"3px"},"hover":""}'),
(104, '.tp-caption.Gym-Button', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#72a800","background-transparency":"1","border-color":"#000000","border-transparency":"0","border-style":"solid","border-width":"0","border-radius":["30px","30px","30px","30px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"300","easing":"Power1.easeInOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"15px","line-height":"15px","font-weight":"600","font-style":"normal","font-family":"Raleway","padding":["13px","35px","13px","35px"],"text-decoration":"none","text-align":"left","background-color":"#8bc027","background-transparency":"1","border-color":"#000000","border-transparency":"0","border-style":"solid","border-width":"0","border-radius":["30px","30px","30px","30px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"1px"},"hover":""}'),
(105, '.tp-caption.Gym-Button-Light', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#72a800","background-transparency":"0","border-color":"#8bc027","border-transparency":"1","border-style":"solid","border-width":"2px","border-radius":["30px","30px","30px","30px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"300","easing":"Power2.easeInOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"15px","line-height":"15px","font-weight":"600","font-style":"normal","font-family":"Raleway","padding":["12px","35px","12px","35px"],"text-decoration":"none","text-align":"left","background-color":"transparent","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.25","border-style":"solid","border-width":"2px","border-radius":["30px","30px","30px","30px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":"","hover":""}'),
(106, '.tp-caption.Sports-Button-Light', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"1","border-style":"solid","border-width":"2","border-radius":["0px","0px","0px","0px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"500","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"17px","line-height":"17px","font-weight":"600","font-style":"normal","font-family":"Raleway","padding":["12px","35px","12px","35px"],"text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.5","border-style":"solid","border-width":"2","border-radius":["0px","0px","0px","0px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(107, '.tp-caption.Sports-Button-Red', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#000000","background-transparency":"1","border-color":"#000000","border-transparency":"1","border-style":"solid","border-width":"2","border-radius":["0px","0px","0px","0px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"500","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"17px","line-height":"17px","font-weight":"600","font-style":"normal","font-family":"Raleway","padding":["12px","35px","12px","35px"],"text-decoration":"none","text-align":"left","background-color":"#db1c22","background-transparency":"1","border-color":"#db1c22","border-transparency":"0","border-style":"solid","border-width":"2px","border-radius":["0px","0px","0px","0px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"2px"},"hover":""}'),
(108, '.tp-caption.Photography-Button', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"1","border-style":"solid","border-width":"1px","border-radius":["30px","30px","30px","30px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"auto","speed":"300","easing":"Power3.easeOut"}', '{"color":"#ffffff","color-transparency":"1","font-size":"15px","line-height":"15px","font-weight":"600","font-style":"normal","font-family":"Raleway","padding":["13px","35px","13px","35px"],"text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.25","border-style":"solid","border-width":"1px","border-radius":["30px","30px","30px","30px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":{"letter-spacing":"1px"},"hover":""}'),
(109, '.tp-caption.Newspaper-Button-2', '{"hover":"true","type":"button","version":"5.0","translated":"5"}', '{"color":"#ffffff","color-transparency":"1","text-decoration":"none","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"1","border-style":"solid","border-width":"2","border-radius":["3px","3px","3px","3px"],"opacity":"1","scalex":"1","scaley":"1","skewx":"0","skewy":"0","xrotate":"0","yrotate":"0","2d_rotation":"0","css_cursor":"pointer","speed":"300","easing":"Linear.easeNone"}', '{"color":"#ffffff","color-transparency":"1","font-size":"15px","line-height":"15px","font-weight":"900","font-style":"normal","font-family":"Roboto","padding":["10px","30px","10px","30px"],"text-decoration":"none","text-align":"left","background-color":"#000000","background-transparency":"0","border-color":"#ffffff","border-transparency":"0.5","border-style":"solid","border-width":"2","border-radius":["3px","3px","3px","3px"],"z":"0","skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":"0","yrotate":"0","2d_rotation":"0","2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"}', '{"idle":"","hover":""}');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_revslider_layer_animations`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_layer_animations` (
  `id` int(9) NOT NULL,
  `handle` text NOT NULL,
  `params` text NOT NULL,
  `settings` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_revslider_navigations`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_navigations` (
  `id` int(9) NOT NULL,
  `name` varchar(191) NOT NULL,
  `handle` varchar(191) NOT NULL,
  `css` longtext NOT NULL,
  `markup` longtext NOT NULL,
  `settings` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_revslider_sliders`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_sliders` (
  `id` int(9) NOT NULL,
  `title` tinytext NOT NULL,
  `alias` tinytext,
  `params` longtext NOT NULL,
  `settings` text,
  `type` varchar(191) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_revslider_sliders`
--

INSERT INTO `wp_revslider_sliders` (`id`, `title`, `alias`, `params`, `settings`, `type`) VALUES
(2, 'Home2', 'Home2', '{"hero_active":"-1","source_type":"gallery","instagram-count":"","instagram-transient":"1200","instagram-type":"user","instagram-user-id":"","flickr-count":"","flickr-transient":"1200","flickr-api-key":"","flickr-type":"publicphotos","flickr-user-url":"","flickr-photoset":"","flickr-photoset-select":"","flickr-gallery-url":"","flickr-group-url":"","facebook-count":"","facebook-transient":"1200","facebook-page-url":"","facebook-type-source":"album","facebook-album":"","facebook-album-select":"","facebook-app-id":"","facebook-app-secret":"","twitter-count":"","twitter-transient":"1200","twitter-user-id":"","twitter-image-only":"off","twitter-include-retweets":"off","twitter-exclude-replies":"off","twitter-consumer-key":"","twitter-consumer-secret":"","twitter-access-token":"","twitter-access-secret":"","youtube-count":"","youtube-transient":"1200","youtube-api":"","youtube-channel-id":"","youtube-type-source":"channel","youtube-playlist":"","youtube-playlist-select":"","vimeo-count":"","vimeo-transient":"1200","vimeo-type-source":"user","vimeo-username":"","vimeo-groupname":"","vimeo-albumid":"","vimeo-channelname":"","product_types":"product","product_category":"","posts_list":"","fetch_type":"cat_tag","post_types":"post","post_category":"","product_sortby":"ID","product_sort_direction":"DESC","max_slider_products":"30","excerpt_limit_product":"55","reg_price_from":"","reg_price_to":"","sale_price_from":"","sale_price_to":"","instock_only":"off","featured_only":"off","post_sortby":"ID","posts_sort_direction":"DESC","max_slider_posts":"30","excerpt_limit":"55","title":"Home2","alias":"Home2","shortcode":"[rev_slider alias=\\\\\\"Home2\\\\\\"]","slider-type":"standard","slider_type":"fullscreen","width":"1240","height":"620","width_notebook":"1024","height_notebook":"768","enable_custom_size_notebook":"off","width_tablet":"778","height_tablet":"960","enable_custom_size_tablet":"off","width_mobile":"480","height_mobile":"720","enable_custom_size_iphone":"off","full_screen_align_force":"off","fullscreen_min_height":"","autowidth_force":"off","fullscreen_offset_container":"","fullscreen_offset_size":"","main_overflow_hidden":"off","auto_height":"off","min_height":"","max_width":"","force_full_width":"on","next_slide_on_window_focus":"off","disable_focus_listener":"off","def-layer_selection":"off","slider_id":"","delay":"60000","start_js_after_delay":"0","def-slide_transition":"fade","def-transition_duration":"300","def-image_source_type":"full","def-background_fit":"cover","def-bg_fit_x":"100","def-bg_fit_y":"100","def-bg_position":"center center","def-bg_position_x":"0","def-bg_position_y":"0","def-bg_repeat":"no-repeat","def-kenburn_effect":"off","def-kb_start_fit":"100","def-kb_easing":"Linear.easeNone","def-kb_end_fit":"100","def-kb_start_offset_x":"0","def-kb_start_offset_y":"0","def-kb_end_offset_x":"0","def-kb_end_offset_y":"0","def-kb_start_rotate":"0","def-kb_end_rotate":"0","def-kb_duration":"10000","0":"\\u0421\\u0431\\u0440\\u043e\\u0441","start_with_slide_enable":"off","start_with_slide":"1","first_transition_active":"off","first_transition_type":"fade","first_transition_duration":"300","first_transition_slot_amount":"7","stop_on_hover":"on","stop_slider":"off","stop_after_loops":"0","stop_at_slide":"2","shuffle":"off","loop_slide":"off","label_viewport":"off","viewport_start":"wait","viewport_area":"80","waitforinit":"off","enable_progressbar":"on","show_timerbar":"bottom","progress_height":"5","progress_opa":"15","progressbar_color":"#ffffff","disable_on_mobile":"off","disable_kenburns_on_mobile":"off","hide_slider_under":"0","hide_defined_layers_under":"0","hide_all_layers_under":"0","shadow_type":"0","background_dotted_overlay":"none","background_color":"transparent","padding":"0","show_background_image":"off","background_image":"http:\\/\\/starasiaphuket.loc\\/wp-content\\/","bg_fit":"cover","bg_repeat":"no-repeat","bg_position":"center center","position":"center","margin_top":"0","margin_bottom":"0","margin_left":"0","margin_right":"0","use_spinner":"3","spinner_color":"#FFFFFF","enable_arrows":"on","rtl_arrows":"off","navigation_arrow_style":"","navigation_arrows_preset":"default","arrows_always_on":"false","hide_arrows":"200","hide_arrows_mobile":"1200","hide_arrows_on_mobile":"off","arrows_under_hidden":"0","hide_arrows_over":"off","arrows_over_hidden":"0","leftarrow_align_hor":"left","leftarrow_align_vert":"center","leftarrow_offset_hor":"0","leftarrow_offset_vert":"0","leftarrow_position":"slider","rightarrow_align_hor":"right","rightarrow_align_vert":"center","rightarrow_offset_hor":"0","rightarrow_offset_vert":"0","rightarrow_position":"slider","enable_bullets":"off","rtl_bullets":"off","navigation_bullets_style":"zeus","navigation_bullets_preset":"default","ph-zeus-bullets-title-line-height-custom-def":"off","ph-zeus-bullets-title-line-height-custom":"14","ph-zeus-bullets-title-font-size-custom-def":"off","ph-zeus-bullets-title-font-size-custom":"13","ph-zeus-bullets-tooltip-bottom-custom-def":"off","ph-zeus-bullets-tooltip-bottom-custom":"45","ph-zeus-bullets-title-color-color-def":"off","ph-zeus-bullets-title-color-color":"#ffffff","ph-zeus-bullets-img-height-custom-def":"off","ph-zeus-bullets-img-height-custom":"60","ph-zeus-bullets-img-width-custom-def":"off","ph-zeus-bullets-img-width-custom":"135","ph-zeus-bullets-size-custom-def":"off","ph-zeus-bullets-size-custom":"13","ph-zeus-bullets-color-color-def":"off","ph-zeus-bullets-color-color":"#ffffff","bullets_space":"5","bullets_direction":"horizontal","bullets_always_on":"false","hide_bullets":"200","hide_bullets_mobile":"1200","hide_bullets_on_mobile":"off","bullets_under_hidden":"0","hide_bullets_over":"off","bullets_over_hidden":"0","bullets_align_hor":"center","bullets_align_vert":"bottom","bullets_offset_hor":"0","bullets_offset_vert":"20","bullets_position":"slider","enable_thumbnails":"off","rtl_thumbnails":"off","thumbnails_padding":"5","span_thumbnails_wrapper":"off","thumbnails_wrapper_color":"transparent","thumbnails_wrapper_opacity":"100","thumbnails_style":"round","navigation_thumbs_preset":"default","ph-round-thumbs-title-font-size-custom-def":"off","ph-round-thumbs-title-font-size-custom":"12","ph-round-thumbs-title-color-color-rgba-def":"off","ph-round-thumbs-title-color-color-rgba":"#ffffff","ph-round-thumbs-title-bg-color-rgba-def":"off","ph-round-thumbs-title-bg-color-rgba":"rgba(0,0,0,0.85)","thumb_amount":"5","thumbnails_space":"5","thumbnail_direction":"horizontal","thumb_width":"100","thumb_height":"50","thumb_width_min":"100","thumbs_always_on":"false","hide_thumbs":"200","hide_thumbs_mobile":"1200","hide_thumbs_on_mobile":"off","thumbs_under_hidden":"0","hide_thumbs_over":"off","thumbs_over_hidden":"0","thumbnails_inner_outer":"inner","thumbnails_align_hor":"center","thumbnails_align_vert":"bottom","thumbnails_offset_hor":"0","thumbnails_offset_vert":"20","thumbnails_position":"slider","enable_tabs":"off","rtl_tabs":"off","tabs_padding":"5","span_tabs_wrapper":"off","tabs_wrapper_color":"transparent","tabs_wrapper_opacity":"5","tabs_style":"round","navigation_tabs_preset":"default","ph-round-tabs-param2-size-custom-def":"off","ph-round-tabs-param2-size-custom":"14","ph-round-tabs-param2-color-color-rgba-def":"off","ph-round-tabs-param2-color-color-rgba":"0,0,0,0","ph-round-tabs-contentcolor-color-rgba-def":"off","ph-round-tabs-contentcolor-color-rgba":"#333333","ph-round-tabs-bgcolor-color-rgba-def":"off","ph-round-tabs-bgcolor-color-rgba":"rgba(0,0,0,0)","ph-round-tabs-hover-bg-color-color-rgba-def":"off","ph-round-tabs-hover-bg-color-color-rgba":"#eeeeee","ph-round-tabs-param1-size-custom-def":"off","ph-round-tabs-param1-size-custom":"12","ph-round-tabs-param1-color-color-rgba-def":"off","ph-round-tabs-param1-color-color-rgba":"rgba(51,51,51,0.5)","ph-round-tabs-image-size-custom-def":"off","ph-round-tabs-image-size-custom":"60","ph-round-tabs-border-size-custom-def":"off","ph-round-tabs-border-size-custom":"1","ph-round-tabs-border-color-color-rgba-def":"off","ph-round-tabs-border-color-color-rgba":"#e5e5e5","ph-round-tabs-font-family-font_family-def":"off","ph-round-tabs-font-family-font_family":"Roboto","tabs_amount":"5","tabs_space":"5","tabs_direction":"horizontal","tabs_width":"100","tabs_height":"50","tabs_width_min":"100","tabs_always_on":"false","hide_tabs":"200","hide_tabs_mobile":"1200","hide_tabs_on_mobile":"off","tabs_under_hidden":"0","hide_tabs_over":"off","tabs_over_hidden":"0","tabs_inner_outer":"inner","tabs_align_hor":"center","tabs_align_vert":"bottom","tabs_offset_hor":"0","tabs_offset_vert":"20","tabs_position":"slider","touchenabled":"off","drag_block_vertical":"off","swipe_velocity":"75","swipe_min_touches":"1","swipe_direction":"horizontal","keyboard_navigation":"off","keyboard_direction":"horizontal","mousescroll_navigation":"off","mousescroll_navigation_reverse":"default","previewimage_width":"100","previewimage_height":"50","carousel_infinity":"off","carousel_space":"0","carousel_borderr":"0","carousel_borderr_unit":"px","carousel_padding_top":"0","carousel_padding_bottom":"0","carousel_maxitems":"3","carousel_stretch":"off","carousel_fadeout":"on","carousel_varyfade":"off","carousel_rotation":"off","carousel_varyrotate":"off","carousel_maxrotation":"0","carousel_scale":"off","carousel_varyscale":"off","carousel_scaledown":"50","carousel_hposition":"center","carousel_vposition":"center","use_parallax":"off","disable_parallax_mobile":"off","ddd_parallax":"off","ddd_parallax_shadow":"off","ddd_parallax_bgfreeze":"off","ddd_parallax_overflow":"off","ddd_parallax_layer_overflow":"off","ddd_parallax_zcorrection":"65","parallax_type":"mouse","parallax_origo":"enterpoint","parallax_speed":"400","parallax_level_16":"55","parallax_level_1":"5","parallax_level_2":"10","parallax_level_3":"15","parallax_level_4":"20","parallax_level_5":"25","parallax_level_6":"30","parallax_level_7":"35","parallax_level_8":"40","parallax_level_9":"45","parallax_level_10":"46","parallax_level_11":"47","parallax_level_12":"48","parallax_level_13":"49","parallax_level_14":"50","parallax_level_15":"51","lazy_load_type":"none","simplify_ie8_ios4":"off","show_alternative_type":"off","show_alternate_image":"","ignore_height_changes":"off","ignore_height_changes_px":"0","jquery_noconflict":"off","js_to_body":"false","output_type":"none","jquery_debugmode":"off","custom_css":"","custom_javascript":"revapi2.bind(\\\\\\"revolution.slide.onloaded\\\\\\",function (e) {\\n\\tjQuery(\\\\''.tp-leftarrow\\\\'').fadeOut(0);\\n});\\nvar left; \\nvar right;\\nrevapi2.bind(\\\\\\"revolution.slide.onchange\\\\\\",function (e,data) {\\n  if(data.slideIndex == 1){\\n\\tleft = jQuery(\\\\''.tp-leftarrow\\\\'');\\n\\tleft.fadeOut(0);\\n    right = jQuery(\\\\''.tp-rightarrow\\\\'');\\n\\tright.fadeIn(0);\\n  } else if(data.slideIndex == 3){\\n\\tleft = jQuery(\\\\''.tp-leftarrow\\\\'');\\n\\tleft.fadeIn(0);\\n    right = jQuery(\\\\''.tp-rightarrow\\\\'');\\n\\tright.fadeOut(0);\\n  } else {\\n\\tleft = jQuery(\\\\''.tp-leftarrow\\\\'');\\n\\tleft.fadeIn(0);\\n    right = jQuery(\\\\''.tp-rightarrow\\\\'');\\n\\tright.fadeIn(0);\\n  }\\n});"}', '{"version":5}', ''),
(3, 'Home', 'Home', '{"hero_active":"-1","source_type":"gallery","instagram-count":"","instagram-transient":"1200","instagram-type":"user","instagram-user-id":"","flickr-count":"","flickr-transient":"1200","flickr-api-key":"","flickr-type":"publicphotos","flickr-user-url":"","flickr-photoset":"","flickr-photoset-select":"","flickr-gallery-url":"","flickr-group-url":"","facebook-count":"","facebook-transient":"1200","facebook-page-url":"","facebook-type-source":"album","facebook-album":"","facebook-album-select":"","facebook-app-id":"","facebook-app-secret":"","twitter-count":"","twitter-transient":"1200","twitter-user-id":"","twitter-image-only":"off","twitter-include-retweets":"off","twitter-exclude-replies":"off","twitter-consumer-key":"","twitter-consumer-secret":"","twitter-access-token":"","twitter-access-secret":"","youtube-count":"","youtube-transient":"1200","youtube-api":"","youtube-channel-id":"","youtube-type-source":"channel","youtube-playlist":"","youtube-playlist-select":"","vimeo-count":"","vimeo-transient":"1200","vimeo-type-source":"user","vimeo-username":"","vimeo-groupname":"","vimeo-albumid":"","vimeo-channelname":"","product_types":"product","product_category":"","posts_list":"","fetch_type":"cat_tag","post_types":"post","post_category":"","product_sortby":"ID","product_sort_direction":"DESC","max_slider_products":"30","excerpt_limit_product":"55","reg_price_from":"","reg_price_to":"","sale_price_from":"","sale_price_to":"","instock_only":"off","featured_only":"off","post_sortby":"ID","posts_sort_direction":"DESC","max_slider_posts":"30","excerpt_limit":"55","title":"Home","alias":"Home","shortcode":"[rev_slider alias=\\\\\\"Home\\\\\\"]","slider-type":"standard","slider_type":"fullscreen","width":"1240","height":"620","width_notebook":"1024","height_notebook":"768","enable_custom_size_notebook":"off","width_tablet":"778","height_tablet":"960","enable_custom_size_tablet":"off","width_mobile":"480","height_mobile":"720","enable_custom_size_iphone":"off","full_screen_align_force":"off","fullscreen_min_height":"","autowidth_force":"off","fullscreen_offset_container":"","fullscreen_offset_size":"","main_overflow_hidden":"off","auto_height":"off","min_height":"","max_width":"","force_full_width":"on","next_slide_on_window_focus":"off","disable_focus_listener":"off","def-layer_selection":"off","slider_id":"","delay":"60000","start_js_after_delay":"0","def-slide_transition":"fade","def-transition_duration":"300","def-image_source_type":"full","def-background_fit":"cover","def-bg_fit_x":"100","def-bg_fit_y":"100","def-bg_position":"center center","def-bg_position_x":"0","def-bg_position_y":"0","def-bg_repeat":"no-repeat","def-kenburn_effect":"off","def-kb_start_fit":"100","def-kb_easing":"Linear.easeNone","def-kb_end_fit":"100","def-kb_start_offset_x":"0","def-kb_start_offset_y":"0","def-kb_end_offset_x":"0","def-kb_end_offset_y":"0","def-kb_start_rotate":"0","def-kb_end_rotate":"0","def-kb_duration":"10000","0":"\\u0421\\u0431\\u0440\\u043e\\u0441","start_with_slide_enable":"off","start_with_slide":"1","first_transition_active":"off","first_transition_type":"fade","first_transition_duration":"300","first_transition_slot_amount":"7","stop_on_hover":"on","stop_slider":"off","stop_after_loops":"0","stop_at_slide":"2","shuffle":"off","loop_slide":"off","label_viewport":"off","viewport_start":"wait","viewport_area":"80","waitforinit":"off","enable_progressbar":"on","show_timerbar":"bottom","progress_height":"5","progress_opa":"15","progressbar_color":"#ffffff","disable_on_mobile":"off","disable_kenburns_on_mobile":"off","hide_slider_under":"0","hide_defined_layers_under":"0","hide_all_layers_under":"0","shadow_type":"0","background_dotted_overlay":"none","background_color":"transparent","padding":"0","show_background_image":"off","background_image":"http:\\/\\/starasiaphuket.loc\\/wp-content\\/","bg_fit":"cover","bg_repeat":"no-repeat","bg_position":"center center","position":"center","margin_top":"0","margin_bottom":"0","margin_left":"0","margin_right":"0","use_spinner":"3","spinner_color":"#FFFFFF","enable_arrows":"on","rtl_arrows":"off","navigation_arrow_style":"","navigation_arrows_preset":"default","arrows_always_on":"false","hide_arrows":"200","hide_arrows_mobile":"1200","hide_arrows_on_mobile":"off","arrows_under_hidden":"0","hide_arrows_over":"off","arrows_over_hidden":"0","leftarrow_align_hor":"left","leftarrow_align_vert":"center","leftarrow_offset_hor":"0","leftarrow_offset_vert":"0","leftarrow_position":"slider","rightarrow_align_hor":"right","rightarrow_align_vert":"center","rightarrow_offset_hor":"0","rightarrow_offset_vert":"0","rightarrow_position":"slider","enable_bullets":"off","rtl_bullets":"off","navigation_bullets_style":"zeus","navigation_bullets_preset":"default","ph-zeus-bullets-title-line-height-custom-def":"off","ph-zeus-bullets-title-line-height-custom":"14","ph-zeus-bullets-title-font-size-custom-def":"off","ph-zeus-bullets-title-font-size-custom":"13","ph-zeus-bullets-tooltip-bottom-custom-def":"off","ph-zeus-bullets-tooltip-bottom-custom":"45","ph-zeus-bullets-title-color-color-def":"off","ph-zeus-bullets-title-color-color":"#ffffff","ph-zeus-bullets-img-height-custom-def":"off","ph-zeus-bullets-img-height-custom":"60","ph-zeus-bullets-img-width-custom-def":"off","ph-zeus-bullets-img-width-custom":"135","ph-zeus-bullets-size-custom-def":"off","ph-zeus-bullets-size-custom":"13","ph-zeus-bullets-color-color-def":"off","ph-zeus-bullets-color-color":"#ffffff","bullets_space":"5","bullets_direction":"horizontal","bullets_always_on":"false","hide_bullets":"200","hide_bullets_mobile":"1200","hide_bullets_on_mobile":"off","bullets_under_hidden":"0","hide_bullets_over":"off","bullets_over_hidden":"0","bullets_align_hor":"center","bullets_align_vert":"bottom","bullets_offset_hor":"0","bullets_offset_vert":"20","bullets_position":"slider","enable_thumbnails":"off","rtl_thumbnails":"off","thumbnails_padding":"5","span_thumbnails_wrapper":"off","thumbnails_wrapper_color":"transparent","thumbnails_wrapper_opacity":"100","thumbnails_style":"round","navigation_thumbs_preset":"default","ph-round-thumbs-title-font-size-custom-def":"off","ph-round-thumbs-title-font-size-custom":"12","ph-round-thumbs-title-color-color-rgba-def":"off","ph-round-thumbs-title-color-color-rgba":"#ffffff","ph-round-thumbs-title-bg-color-rgba-def":"off","ph-round-thumbs-title-bg-color-rgba":"rgba(0,0,0,0.85)","thumb_amount":"5","thumbnails_space":"5","thumbnail_direction":"horizontal","thumb_width":"100","thumb_height":"50","thumb_width_min":"100","thumbs_always_on":"false","hide_thumbs":"200","hide_thumbs_mobile":"1200","hide_thumbs_on_mobile":"off","thumbs_under_hidden":"0","hide_thumbs_over":"off","thumbs_over_hidden":"0","thumbnails_inner_outer":"inner","thumbnails_align_hor":"center","thumbnails_align_vert":"bottom","thumbnails_offset_hor":"0","thumbnails_offset_vert":"20","thumbnails_position":"slider","enable_tabs":"off","rtl_tabs":"off","tabs_padding":"5","span_tabs_wrapper":"off","tabs_wrapper_color":"transparent","tabs_wrapper_opacity":"5","tabs_style":"round","navigation_tabs_preset":"default","ph-round-tabs-param2-size-custom-def":"off","ph-round-tabs-param2-size-custom":"14","ph-round-tabs-param2-color-color-rgba-def":"off","ph-round-tabs-param2-color-color-rgba":"0,0,0,0","ph-round-tabs-contentcolor-color-rgba-def":"off","ph-round-tabs-contentcolor-color-rgba":"#333333","ph-round-tabs-bgcolor-color-rgba-def":"off","ph-round-tabs-bgcolor-color-rgba":"rgba(0,0,0,0)","ph-round-tabs-hover-bg-color-color-rgba-def":"off","ph-round-tabs-hover-bg-color-color-rgba":"#eeeeee","ph-round-tabs-param1-size-custom-def":"off","ph-round-tabs-param1-size-custom":"12","ph-round-tabs-param1-color-color-rgba-def":"off","ph-round-tabs-param1-color-color-rgba":"rgba(51,51,51,0.5)","ph-round-tabs-image-size-custom-def":"off","ph-round-tabs-image-size-custom":"60","ph-round-tabs-border-size-custom-def":"off","ph-round-tabs-border-size-custom":"1","ph-round-tabs-border-color-color-rgba-def":"off","ph-round-tabs-border-color-color-rgba":"#e5e5e5","ph-round-tabs-font-family-font_family-def":"off","ph-round-tabs-font-family-font_family":"Roboto","tabs_amount":"5","tabs_space":"5","tabs_direction":"horizontal","tabs_width":"100","tabs_height":"50","tabs_width_min":"100","tabs_always_on":"false","hide_tabs":"200","hide_tabs_mobile":"1200","hide_tabs_on_mobile":"off","tabs_under_hidden":"0","hide_tabs_over":"off","tabs_over_hidden":"0","tabs_inner_outer":"inner","tabs_align_hor":"center","tabs_align_vert":"bottom","tabs_offset_hor":"0","tabs_offset_vert":"20","tabs_position":"slider","touchenabled":"off","drag_block_vertical":"off","swipe_velocity":"75","swipe_min_touches":"1","swipe_direction":"horizontal","keyboard_navigation":"off","keyboard_direction":"horizontal","mousescroll_navigation":"off","mousescroll_navigation_reverse":"default","previewimage_width":"100","previewimage_height":"50","carousel_infinity":"off","carousel_space":"0","carousel_borderr":"0","carousel_borderr_unit":"px","carousel_padding_top":"0","carousel_padding_bottom":"0","carousel_maxitems":"3","carousel_stretch":"off","carousel_fadeout":"on","carousel_varyfade":"off","carousel_rotation":"off","carousel_varyrotate":"off","carousel_maxrotation":"0","carousel_scale":"off","carousel_varyscale":"off","carousel_scaledown":"50","carousel_hposition":"center","carousel_vposition":"center","use_parallax":"off","disable_parallax_mobile":"off","ddd_parallax":"off","ddd_parallax_shadow":"off","ddd_parallax_bgfreeze":"off","ddd_parallax_overflow":"off","ddd_parallax_layer_overflow":"off","ddd_parallax_zcorrection":"65","parallax_type":"mouse","parallax_origo":"enterpoint","parallax_speed":"400","parallax_level_16":"55","parallax_level_1":"5","parallax_level_2":"10","parallax_level_3":"15","parallax_level_4":"20","parallax_level_5":"25","parallax_level_6":"30","parallax_level_7":"35","parallax_level_8":"40","parallax_level_9":"45","parallax_level_10":"46","parallax_level_11":"47","parallax_level_12":"48","parallax_level_13":"49","parallax_level_14":"50","parallax_level_15":"51","lazy_load_type":"none","simplify_ie8_ios4":"off","show_alternative_type":"off","show_alternate_image":"","ignore_height_changes":"off","ignore_height_changes_px":"0","jquery_noconflict":"off","js_to_body":"false","output_type":"none","jquery_debugmode":"off","custom_css":"","custom_javascript":"revapi3.bind(\\\\\\"revolution.slide.onloaded\\\\\\",function (e) {\\n\\tjQuery(\\\\''.tp-leftarrow\\\\'').fadeOut(0);\\n});\\nvar left; \\nvar right;\\nrevapi3.bind(\\\\\\"revolution.slide.onchange\\\\\\",function (e,data) {\\n  if(data.slideIndex == 1){\\n\\tleft = jQuery(\\\\''.tp-leftarrow\\\\'');\\n\\tleft.fadeOut(0);\\n    right = jQuery(\\\\''.tp-rightarrow\\\\'');\\n\\tright.fadeIn(0);\\n  } else if(data.slideIndex == 3){\\n\\tleft = jQuery(\\\\''.tp-leftarrow\\\\'');\\n\\tleft.fadeIn(0);\\n    right = jQuery(\\\\''.tp-rightarrow\\\\'');\\n\\tright.fadeOut(0);\\n  } else {\\n\\tleft = jQuery(\\\\''.tp-leftarrow\\\\'');\\n\\tleft.fadeIn(0);\\n    right = jQuery(\\\\''.tp-rightarrow\\\\'');\\n\\tright.fadeIn(0);\\n  }\\n});"}', '{"version":5}', '');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_revslider_slides`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_slides` (
  `id` int(9) NOT NULL,
  `slider_id` int(9) NOT NULL,
  `slide_order` int(11) NOT NULL,
  `params` longtext NOT NULL,
  `layers` longtext NOT NULL,
  `settings` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_revslider_slides`
--

INSERT INTO `wp_revslider_slides` (`id`, `slider_id`, `slide_order`, `params`, `layers`, `settings`) VALUES
(8, 2, 1, '{"background_type":"image","title":"Slide","rs-gallery-type":"gallery","bg_external":"","bg_color":"#E7E7E7","0":"\\u0421\\u0431\\u0440\\u043e\\u0441","slide_bg_youtube":"","slide_bg_vimeo":"","slide_bg_html_mpeg":"","slide_bg_html_webm":"","slide_bg_html_ogv":"","image_source_type":"full","alt_option":"media_library","alt_attr":"","ext_width":"1920","ext_height":"1080","title_option":"media_library","title_attr":"","video_force_cover":"on","video_dotted_overlay":"none","video_ratio":"16:9","video_start_at":"","video_end_at":"","video_loop":"none","video_nextslide":"off","video_force_rewind":"on","video_mute":"on","video_volume":"","video_speed":"1","video_arguments":"hd=1&wmode=opaque&showinfo=0&rel=0;","video_arguments_vim":"title=0&byline=0&portrait=0&api=1","bg_fit":"cover","bg_fit_x":"100","bg_fit_y":"100","bg_position":"center center","bg_position_x":"0","bg_position_y":"0","bg_repeat":"no-repeat","kenburn_effect":"off","kb_start_fit":"100","kb_end_fit":"100","kb_start_offset_x":"0","kb_end_offset_x":"0","kb_start_offset_y":"0","kb_end_offset_y":"0","kb_start_rotate":"0","kb_end_rotate":"0","kb_easing":"Linear.easeNone","kb_duration":"10000","image_id":"1956","delay":"","stoponpurpose":"false","invisibleslide":"false","state":"published","hideslideafter":"0","hideslideonmobile":"off","date_from":"","date_to":"","save_performance":"off","slide_thumb":"","thumb_dimension":"slider","thumb_for_admin":"off","slide_transition":["fade"],"slot_amount":["default"],"transition_rotation":["0"],"transition_duration":["300"],"transition_ease_in":["default"],"transition_ease_out":["default"],"ph-round-arrows-bg-color-custom-slide":"off","ph-round-arrows-bg-color-custom":"0,0,0,0.5","ph-round-arrows-bg-size-custom-slide":"off","ph-round-arrows-bg-size-custom":"40","ph-round-arrows-arrow-color-color-slide":"off","ph-round-arrows-arrow-color-color":"#ffffff","ph-round-arrows-arrow-size-custom-slide":"off","ph-round-arrows-arrow-size-custom":"20","ph-round-arrows-hover-bg-color-color-rgba-slide":"off","ph-round-arrows-hover-bg-color-color-rgba":"#000000","ph-zeus-bullets-color-color-slide":"off","ph-zeus-bullets-color-color":"#ffffff","ph-zeus-bullets-size-custom-slide":"off","ph-zeus-bullets-size-custom":"13","ph-zeus-bullets-img-width-custom-slide":"off","ph-zeus-bullets-img-width-custom":"135","ph-zeus-bullets-img-height-custom-slide":"off","ph-zeus-bullets-img-height-custom":"60","ph-zeus-bullets-title-color-color-slide":"off","ph-zeus-bullets-title-color-color":"#ffffff","ph-zeus-bullets-tooltip-bottom-custom-slide":"off","ph-zeus-bullets-tooltip-bottom-custom":"45","ph-zeus-bullets-title-font-size-custom-slide":"off","ph-zeus-bullets-title-font-size-custom":"13","ph-zeus-bullets-title-line-height-custom-slide":"off","ph-zeus-bullets-title-line-height-custom":"14","ph-round-tabs-font-family-font_family-slide":"off","ph-round-tabs-font-family-font_family":"Roboto","ph-round-tabs-border-color-color-rgba-slide":"off","ph-round-tabs-border-color-color-rgba":"#e5e5e5","ph-round-tabs-border-size-custom-slide":"off","ph-round-tabs-border-size-custom":"1","ph-round-tabs-image-size-custom-slide":"off","ph-round-tabs-image-size-custom":"60","ph-round-tabs-param1-color-color-rgba-slide":"off","ph-round-tabs-param1-color-color-rgba":"rgba(51,51,51,0.5)","ph-round-tabs-param1-size-custom-slide":"off","ph-round-tabs-param1-size-custom":"12","ph-round-tabs-hover-bg-color-color-rgba-slide":"off","ph-round-tabs-hover-bg-color-color-rgba":"#eeeeee","ph-round-tabs-bgcolor-color-rgba-slide":"off","ph-round-tabs-bgcolor-color-rgba":"rgba(0,0,0,0)","ph-round-tabs-contentcolor-color-rgba-slide":"off","ph-round-tabs-contentcolor-color-rgba":"#333333","ph-round-tabs-param2-color-color-rgba-slide":"off","ph-round-tabs-param2-color-color-rgba":"0,0,0,0","ph-round-tabs-param2-size-custom-slide":"off","ph-round-tabs-param2-size-custom":"14","ph-round-thumbs-title-bg-color-rgba-slide":"off","ph-round-thumbs-title-bg-color-rgba":"rgba(0,0,0,0.85)","ph-round-thumbs-title-color-color-rgba-slide":"off","ph-round-thumbs-title-color-color-rgba":"#ffffff","ph-round-thumbs-title-font-size-custom-slide":"off","ph-round-thumbs-title-font-size-custom":"12","params_1":"","params_1_chars":"10","params_2":"","params_2_chars":"10","params_3":"","params_3_chars":"10","params_4":"","params_4_chars":"10","params_5":"","params_5_chars":"10","params_6":"","params_6_chars":"10","params_7":"","params_7_chars":"10","params_8":"","params_8_chars":"10","params_9":"","params_9_chars":"10","params_10":"","params_10_chars":"10","slide_description":"","class_attr":"","id_attr":"","data_attr":"","enable_link":"false","link_type":"regular","link":"","link_open_in":"same","slide_link":"nothing","link_pos":"front","slide_bg_color":"#E7E7E7","slide_bg_external":"","image":"http:\\/\\/starasiaphuket.loc\\/wp-content\\/uploads\\/2016\\/11\\/slide1-1.jpg","0":"\\u0421\\u0431\\u0440\\u043e\\u0441"}', '[{"text":"","type":"text","special_type":null,"subtype":"","specialsettings":{},"unique_id":1,"left":{"desktop":168},"top":{"desktop":289},"internal_class":"","hover":false,"alias":"form","loop_animation":"none","loop_easing":"linearEaseNone","loop_speed":"2","loop_startdeg":-20,"loop_enddeg":20,"loop_xorigin":50,"loop_yorigin":50,"loop_xstart":0,"loop_xend":0,"loop_ystart":0,"loop_yend":0,"loop_zoomstart":"1","loop_zoomend":"1","loop_angle":"0","loop_radius":"10","html_tag":"div","mask_start":false,"mask_end":false,"x_start_reverse":false,"y_start_reverse":false,"x_end_reverse":false,"y_end_reverse":false,"x_rotate_start_reverse":false,"y_rotate_start_reverse":false,"z_rotate_start_reverse":false,"x_rotate_end_reverse":false,"y_rotate_end_reverse":false,"z_rotate_end_reverse":false,"scale_x_start_reverse":false,"scale_y_start_reverse":false,"scale_x_end_reverse":false,"scale_y_end_reverse":false,"skew_x_start_reverse":false,"skew_y_start_reverse":false,"skew_x_end_reverse":false,"skew_y_end_reverse":false,"mask_x_start_reverse":false,"mask_y_start_reverse":false,"mask_x_end_reverse":false,"mask_y_end_reverse":false,"mask_x_start":"0","mask_y_start":"0","mask_x_end":"0","mask_y_end":"0","mask_speed_end":"inherit","mask_ease_end":"inherit","alt_option":"media_library","alt":"","animation":"custom","easing":"Power2.easeInOut","split":"none","endsplit":"none","splitdelay":"10","endsplitdelay":"10","max_height":{"desktop":"auto"},"max_width":{"desktop":"749px"},"video_width":{"desktop":"480"},"video_height":{"desktop":"360"},"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"whitespace":{"desktop":"normal"},"static_start":"1","static_end":"last","speed":300,"align_hor":{"desktop":"left"},"align_vert":{"desktop":"top"},"hiddenunder":false,"resizeme":true,"seo-optimized":false,"link_slide":"nothing","scrollunder_offset":"","style":"","visible-desktop":true,"visible-notebook":true,"visible-tablet":true,"visible-mobile":true,"resize-full":true,"show-on-hover":false,"basealign":"grid","responsive_offset":true,"lazy-load":"auto","image-size":"auto","time":500,"endspeed":300,"endtime":9300,"endanimation":"custom","endeasing":"nothing","width":134,"height":34,"cover_mode":"custom","static_styles":{"font-size":{"desktop":"20"},"line-height":{"desktop":"22"},"font-weight":{"desktop":"400"},"color":{"desktop":"#ffffff"}},"x_start":"inherit","y_start":"inherit","z_start":"inherit","x_end":"inherit","y_end":"inherit","z_end":"inherit","opacity_start":"0","opacity_end":"0","x_rotate_start":"inherit","y_rotate_start":"inherit","z_rotate_start":"inherit","x_rotate_end":"inherit","y_rotate_end":"inherit","z_rotate_end":"inherit","scale_x_start":"inherit","scale_y_start":"inherit","scale_x_end":"inherit","scale_y_end":"inherit","skew_x_start":"inherit","skew_y_start":"inherit","skew_x_end":"inherit","skew_y_end":"inherit","deformation":{"font-family":"","padding":["0","0","0","0"],"font-style":"normal","color-transparency":"1","text-decoration":"none","text-align":"left","text-transform":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"},"svg":{"svgstroke-color":"transparent","svgstroke-transparency":"1","svgstroke-dasharray":"0","svgstroke-dashoffset":"0","svgstroke-width":"0","svgstroke-hover-color":"transparent","svgstroke-hover-transparency":"1","svgstroke-hover-dasharray":"0","svgstroke-hover-dashoffset":"0","svgstroke-hover-width":"0"},"deformation-hover":{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"speed":"0","zindex":"auto","easing":"Linear.easeNone","css_cursor":"auto"},"visible":true,"animation_overwrite":"wait","trigger_memory":"keep","serial":0,"split_in_extratime":-10,"split_out_extratime":-10,"endWithSlide":false,"toggle":false,"toggle_use_hover":false,"texttoggle":"","scaleX":{"desktop":""},"scaleY":{"desktop":""},"autolinebreak":true,"scaleProportional":false,"attrID":"","attrClasses":"","attrTitle":"","attrRel":"","layer-selectable":"default","orig-endanim":"Fade-Out","orig-endanim-handle":"fadeout","orig-anim":"Fade-In","orig-anim-handle":"tp-fade","layer_action":{"tooltip_event":[],"action":[],"image_link":[],"link_open_in":[],"jump_to_slide":[],"scrollunder_offset":[],"actioncallback":[],"layer_target":[],"link_type":[],"action_delay":[],"toggle_layer_type":[],"toggle_class":[]},"parallax_layer_ddd_zlevel":"front","mask_speed_start":"inherit","mask_ease_start":"inherit","link":"","link_open_in":"same","pers_start":"inherit","pers_end":"inherit"},{"text":"<div class=\\"ls-mask2\\">\\n\\t<form role=\\"search\\" method=\\"get\\" id=\\"searchform\\" class=\\"searchform\\" action=\\"\\/advanced-search\\/\\">\\n\\t\\t<div class=\\"ls-form-ru\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"min-price\\" class=\\"min-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$1,000\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"max-price\\" class=\\"max-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$500,000\\">\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<select class=\\"selectpicker\\" name=\\"bedrooms\\" data-live-search=\\"false\\" data-live-search-style=\\"begins\\">\\n\\t\\t\\t\\t\\t<option value>\\u041a\\u043e\\u043b. \\u0441\\u043f\\u0430\\u043b\\u0435\\u043d<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"1\\">1<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"2\\">2<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"3\\">3<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"4\\">4<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"5\\">5<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"any\\">\\u041b\\u044e\\u0431\\u043e\\u0435<\\/option>\\n\\t\\t\\t\\t<\\/select>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<select name=\\"area\\" class=\\"selectpicker\\" data-live-search=\\"false\\" data-live-search-style=\\"begins\\">\\n\\t\\t\\t\\t\\t<option value>\\u0412\\u0435\\u0441\\u044c \\u043f\\u0445\\u0443\\u043a\\u0435\\u0442<\\/option>\\n\\t\\t\\t\\t\\t<option data-parentcity=\\"\\" value=\\"Phang Nga\\">\\u041f\\u0430\\u043d\\u0433 \\u043d\\u0433\\u0430<\\/option>\\n\\t\\t\\t\\t\\t<option data-parentcity=\\"\\" value=\\"Mai Khao\\">\\u041c\\u0430\\u0439 \\u043a\\u0430\\u043e<\\/option>\\n\\t\\t\\t\\t\\t<option data-parentcity=\\"\\" value=\\"Nai Yang\\">\\u041d\\u0430\\u0439 \\u044f\\u043d\\u0433<\\/option>\\n\\t\\t\\t\\t\\t<option data-parentcity=\\"\\" value=\\"East\\">\\u0412\\u043e\\u0441\\u0442\\u043e\\u043a<\\/option>\\n\\t\\t\\t\\t<\\/select>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<input type=\\"text\\" name=\\"daterange\\" value=\\"\\"\\/>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"ls-submit-ru\\">\\n\\t\\t\\t<div class=\\"col-md-12 col-sm-12\\">\\n\\t\\t\\t\\t<button class=\\"btn btn-orange\\">\\u041f\\u043e\\u0438\\u0441\\u043a<\\/button>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t<\\/form>\\n<\\/div>","type":"text","special_type":null,"subtype":"","specialsettings":{},"unique_id":2,"left":{"desktop":198},"top":{"desktop":263},"internal_class":"","hover":false,"alias":"Caption Text2","loop_animation":"none","loop_easing":"linearEaseNone","loop_speed":"2","loop_startdeg":-20,"loop_enddeg":20,"loop_xorigin":50,"loop_yorigin":50,"loop_xstart":0,"loop_xend":0,"loop_ystart":0,"loop_yend":0,"loop_zoomstart":"1","loop_zoomend":"1","loop_angle":"0","loop_radius":"10","html_tag":"div","mask_start":false,"mask_end":false,"x_start_reverse":false,"y_start_reverse":false,"x_end_reverse":false,"y_end_reverse":false,"x_rotate_start_reverse":false,"y_rotate_start_reverse":false,"z_rotate_start_reverse":false,"x_rotate_end_reverse":false,"y_rotate_end_reverse":false,"z_rotate_end_reverse":false,"scale_x_start_reverse":false,"scale_y_start_reverse":false,"scale_x_end_reverse":false,"scale_y_end_reverse":false,"skew_x_start_reverse":false,"skew_y_start_reverse":false,"skew_x_end_reverse":false,"skew_y_end_reverse":false,"mask_x_start_reverse":false,"mask_y_start_reverse":false,"mask_x_end_reverse":false,"mask_y_end_reverse":false,"mask_x_start":"0","mask_y_start":"0","mask_x_end":"0","mask_y_end":"0","mask_speed_end":"inherit","mask_ease_end":"inherit","alt_option":"media_library","alt":"","animation":"tp-fade","easing":"Power2.easeInOut","split":"none","endsplit":"none","splitdelay":"10","endsplitdelay":"10","max_height":{"desktop":"152px"},"max_width":{"desktop":"874px"},"video_width":{"desktop":"480"},"video_height":{"desktop":"360"},"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"whitespace":{"desktop":"normal"},"static_start":"1","static_end":"last","speed":300,"align_hor":{"desktop":"left"},"align_vert":{"desktop":"top"},"hiddenunder":false,"resizeme":true,"seo-optimized":false,"link_slide":"nothing","scrollunder_offset":"","style":"","visible-desktop":true,"visible-notebook":true,"visible-tablet":true,"visible-mobile":true,"resize-full":true,"show-on-hover":false,"basealign":"grid","responsive_offset":true,"lazy-load":"auto","image-size":"auto","time":500,"endspeed":300,"endtime":60300,"endanimation":"fadeout","endeasing":"nothing","width":874,"height":152,"cover_mode":"custom","static_styles":{"font-size":{"desktop":"20"},"line-height":{"desktop":"22"},"font-weight":{"desktop":"400"},"color":{"desktop":"#ffffff"}},"x_start":"inherit","y_start":"inherit","z_start":"inherit","x_end":"inherit","y_end":"inherit","z_end":"inherit","opacity_start":"0","opacity_end":"0","x_rotate_start":"inherit","y_rotate_start":"inherit","z_rotate_start":"inherit","x_rotate_end":"inherit","y_rotate_end":"inherit","z_rotate_end":"inherit","scale_x_start":"inherit","scale_y_start":"inherit","scale_x_end":"inherit","scale_y_end":"inherit","skew_x_start":"inherit","skew_y_start":"inherit","skew_x_end":"inherit","skew_y_end":"inherit","deformation":{"font-family":"","padding":["0","0","0","0"],"font-style":"normal","color-transparency":"1","text-decoration":"none","text-align":"left","text-transform":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing"},"svg":{"svgstroke-color":"transparent","svgstroke-transparency":"1","svgstroke-dasharray":"0","svgstroke-dashoffset":"0","svgstroke-width":"0","svgstroke-hover-color":"transparent","svgstroke-hover-transparency":"1","svgstroke-hover-dasharray":"0","svgstroke-hover-dashoffset":"0","svgstroke-hover-width":"0"},"deformation-hover":{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"speed":"0","zindex":"auto","easing":"Linear.easeNone","css_cursor":"auto"},"visible":true,"animation_overwrite":"wait","trigger_memory":"keep","serial":1,"split_in_extratime":-10,"split_out_extratime":-10,"endWithSlide":true,"toggle":false,"toggle_use_hover":false,"texttoggle":"","scaleX":{"desktop":""},"scaleY":{"desktop":""},"autolinebreak":true,"scaleProportional":false,"attrID":"","attrClasses":"","attrTitle":"","attrRel":"","layer-selectable":"default","layer_action":{"tooltip_event":[],"action":[],"image_link":[],"link_open_in":[],"jump_to_slide":[],"scrollunder_offset":[],"actioncallback":[],"layer_target":[],"link_type":[],"action_delay":[],"toggle_layer_type":[],"toggle_class":[]}}]', '""'),
(9, 2, 2, '{"background_type":"image","rs-gallery-type":"gallery","bg_external":"","bg_color":"#E7E7E7","0":"\\u0421\\u0431\\u0440\\u043e\\u0441","slide_bg_youtube":"","slide_bg_vimeo":"","slide_bg_html_mpeg":"","slide_bg_html_webm":"","slide_bg_html_ogv":"","image_source_type":"full","alt_option":"media_library","alt_attr":"","ext_width":"1920","ext_height":"1080","title_option":"media_library","title_attr":"","video_force_cover":"on","video_dotted_overlay":"none","video_ratio":"16:9","video_start_at":"","video_end_at":"","video_loop":"none","video_nextslide":"off","video_force_rewind":"on","video_mute":"on","video_volume":"","video_speed":"1","video_arguments":"hd=1&wmode=opaque&showinfo=0&rel=0;","video_arguments_vim":"title=0&byline=0&portrait=0&api=1","bg_fit":"cover","bg_fit_x":"100","bg_fit_y":"100","bg_position":"center center","bg_position_x":"0","bg_position_y":"0","bg_repeat":"no-repeat","kenburn_effect":"off","kb_start_fit":"100","kb_end_fit":"100","kb_start_offset_x":"0","kb_end_offset_x":"0","kb_start_offset_y":"0","kb_end_offset_y":"0","kb_start_rotate":"0","kb_end_rotate":"0","kb_easing":"Linear.easeNone","kb_duration":"10000","image_id":"1957","title":"Slide","delay":"","stoponpurpose":"false","invisibleslide":"false","state":"published","hideslideafter":"0","hideslideonmobile":"off","date_from":"","date_to":"","save_performance":"off","slide_thumb":"","thumb_dimension":"slider","thumb_for_admin":"off","slide_transition":["fade"],"slot_amount":["default"],"transition_rotation":["0"],"transition_duration":["300"],"transition_ease_in":["default"],"transition_ease_out":["default"],"ph-round-arrows-bg-color-custom-slide":"off","ph-round-arrows-bg-color-custom":"0,0,0,0.5","ph-round-arrows-bg-size-custom-slide":"off","ph-round-arrows-bg-size-custom":"40","ph-round-arrows-arrow-color-color-slide":"off","ph-round-arrows-arrow-color-color":"#ffffff","ph-round-arrows-arrow-size-custom-slide":"off","ph-round-arrows-arrow-size-custom":"20","ph-round-arrows-hover-bg-color-color-rgba-slide":"off","ph-round-arrows-hover-bg-color-color-rgba":"#000000","ph-zeus-bullets-color-color-slide":"off","ph-zeus-bullets-color-color":"#ffffff","ph-zeus-bullets-size-custom-slide":"off","ph-zeus-bullets-size-custom":"13","ph-zeus-bullets-img-width-custom-slide":"off","ph-zeus-bullets-img-width-custom":"135","ph-zeus-bullets-img-height-custom-slide":"off","ph-zeus-bullets-img-height-custom":"60","ph-zeus-bullets-title-color-color-slide":"off","ph-zeus-bullets-title-color-color":"#ffffff","ph-zeus-bullets-tooltip-bottom-custom-slide":"off","ph-zeus-bullets-tooltip-bottom-custom":"45","ph-zeus-bullets-title-font-size-custom-slide":"off","ph-zeus-bullets-title-font-size-custom":"13","ph-zeus-bullets-title-line-height-custom-slide":"off","ph-zeus-bullets-title-line-height-custom":"14","ph-round-tabs-font-family-font_family-slide":"off","ph-round-tabs-font-family-font_family":"Roboto","ph-round-tabs-border-color-color-rgba-slide":"off","ph-round-tabs-border-color-color-rgba":"#e5e5e5","ph-round-tabs-border-size-custom-slide":"off","ph-round-tabs-border-size-custom":"1","ph-round-tabs-image-size-custom-slide":"off","ph-round-tabs-image-size-custom":"60","ph-round-tabs-param1-color-color-rgba-slide":"off","ph-round-tabs-param1-color-color-rgba":"rgba(51,51,51,0.5)","ph-round-tabs-param1-size-custom-slide":"off","ph-round-tabs-param1-size-custom":"12","ph-round-tabs-hover-bg-color-color-rgba-slide":"off","ph-round-tabs-hover-bg-color-color-rgba":"#eeeeee","ph-round-tabs-bgcolor-color-rgba-slide":"off","ph-round-tabs-bgcolor-color-rgba":"rgba(0,0,0,0)","ph-round-tabs-contentcolor-color-rgba-slide":"off","ph-round-tabs-contentcolor-color-rgba":"#333333","ph-round-tabs-param2-color-color-rgba-slide":"off","ph-round-tabs-param2-color-color-rgba":"0,0,0,0","ph-round-tabs-param2-size-custom-slide":"off","ph-round-tabs-param2-size-custom":"14","ph-round-thumbs-title-bg-color-rgba-slide":"off","ph-round-thumbs-title-bg-color-rgba":"rgba(0,0,0,0.85)","ph-round-thumbs-title-color-color-rgba-slide":"off","ph-round-thumbs-title-color-color-rgba":"#ffffff","ph-round-thumbs-title-font-size-custom-slide":"off","ph-round-thumbs-title-font-size-custom":"12","params_1":"","params_1_chars":"10","params_2":"","params_2_chars":"10","params_3":"","params_3_chars":"10","params_4":"","params_4_chars":"10","params_5":"","params_5_chars":"10","params_6":"","params_6_chars":"10","params_7":"","params_7_chars":"10","params_8":"","params_8_chars":"10","params_9":"","params_9_chars":"10","params_10":"","params_10_chars":"10","slide_description":"","class_attr":"","id_attr":"","data_attr":"","enable_link":"false","link_type":"regular","link":"","link_open_in":"same","slide_link":"nothing","link_pos":"front","slide_bg_color":"#E7E7E7","slide_bg_external":"","image":"http:\\/\\/starasiaphuket.loc\\/wp-content\\/uploads\\/2016\\/11\\/slide2.jpg","0":"\\u0421\\u0431\\u0440\\u043e\\u0441"}', '[{"text":"<div class=\\"ls-mask\\">\\n\\t<form role=\\"search\\" method=\\"get\\" id=\\"searchform\\" class=\\"searchform\\" action=\\"\\/advanced-search\\/\\">\\n\\t\\t<div class=\\"ls-form-ru\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"min-price\\" class=\\"min-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$1,000\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"max-price\\" class=\\"max-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$500,000\\">\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<select class=\\"selectpicker\\" name=\\"bedrooms\\" data-live-search=\\"false\\" data-live-search-style=\\"begins\\">\\n\\t\\t\\t\\t\\t<option value>\\u041a\\u043e\\u043b. \\u0441\\u043f\\u0430\\u043b\\u0435\\u043d<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"1\\">1<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"2\\">2<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"3\\">3<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"4\\">4<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"5\\">5<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"any\\">\\u041b\\u044e\\u0431\\u043e\\u0435<\\/option>\\n\\t\\t\\t\\t<\\/select>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<div class=\\"ls-absol\\">\\n\\t\\t\\t\\t<div class=\\"phuket\\">\\n\\t\\t\\t\\t<div class=\\"mapWrapper\\" id=\\"map\\">\\n\\t\\t\\t\\t<div class=\\"newmap\\" style=\\"height: 335px;\\">\\n\\t\\t\\t\\t<div class=\\"newmapLocations\\">\\n\\t\\t\\t\\t\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 40px; top: 51px\\">\\n\\t\\t\\t\\t<input id=\\"Mai Khao\\" title=\\"Mai Khao\\" type=\\"checkbox\\" class=\\"map-checkbox area-MAI\\" name=\\"area[]\\" value=\\"Mai Khao\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Mai Khao\\" class=\\"MAI\\" title=\\"Mai Khao Beach is Phuket''s longest beach that spans for about 11km. \\">\\n\\t\\t\\t\\t<div>\\u041c\\u0430\\u0439 \\u041a\\u0430\\u043e <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 37px; top: 84px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Yang\\" title=\\"Nai Yang\\" type=\\"checkbox\\" class=\\"map-checkbox area-NYG\\" name=\\"area[]\\" value=\\"Nai Yang\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Yang\\" class=\\"NYG\\" title=\\"Nai Yang is noted for its impressive forest of tall casuarina trees, and as a picnic spot for Thais. \\">\\n\\t\\t\\t\\t<div>\\u041d\\u0430\\u0439 \\u0419\\u0430\\u043d\\u0433 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 21px; top: 107px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Thon\\" title=\\"Nai Thon\\" type=\\"checkbox\\" class=\\"map-checkbox area-NAT\\" name=\\"area[]\\" value=\\"Nai Thon\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Thon\\" class=\\"NAT\\" title=\\"Nai Thon is a beautiful stretch of sand that for reasons unknown has been overlooked by large resort developers. \\">\\n\\t\\t\\t\\t<div>\\u041d\\u0430\\u0439 \\u0422\\u043e\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 26px; top: 125px\\">\\n\\t\\t\\t\\t<input id=\\"Layan\\" title=\\"Layan\\" type=\\"checkbox\\" class=\\"map-checkbox area-LAY\\" name=\\"area[]\\" value=\\"Layan\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Layan\\" class=\\"LAY\\" title=\\"Layan Beach is a beautiful and secluded beach with only a couple of resorts. \\">\\n\\t\\t\\t\\t<div>\\u041b\\u0430\\u0439\\u0430\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 34px; top: 149px\\">\\n\\t\\t\\t\\t<input id=\\"Bang Tao\\" title=\\"Bang Tao\\" type=\\"checkbox\\" class=\\"map-checkbox area-BAN\\" name=\\"area[]\\" value=\\"Bang Tao\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Bang Tao\\" class=\\"BAN\\" title=\\"Bang Tao is a large open bay with one of Phuket''s longest beaches. \\">\\n\\t\\t\\t\\t<div>\\u0411\\u0430\\u043d\\u0433 \\u0422\\u0430\\u043e <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 23px; top: 166px\\">\\n\\t\\t\\t\\t<input id=\\"Surin\\" title=\\"Surin\\" type=\\"checkbox\\" class=\\"map-checkbox area-SUR\\" name=\\"area[]\\" value=\\"Surin\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Surin\\" class=\\"SUR\\" title=\\"Surin Beach still has a small village atmosphere, but this is gradually changing as more and more major housing developments and hotel projects get underway. \\">\\n\\t\\t\\t\\t<div>\\u0421\\u0443\\u0440\\u0438\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 23px; top: 188px\\">\\n\\t\\t\\t\\t<input id=\\"Kamala\\" title=\\"Kamala\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAM\\" name=\\"area[]\\" value=\\"Kamala\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kamala\\" class=\\"KAM\\" title=\\"Just north of the lights and noise of Patong lies Kamala beach, a quieter stretch of sand with a more relaxed feel. \\">\\n\\t\\t\\t\\t<div>\\u041a\\u0430\\u043c\\u0430\\u043b\\u0430 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 36px; top: 229px\\">\\n\\t\\t\\t\\t<input id=\\"Patong\\" title=\\"Patong\\" type=\\"checkbox\\" class=\\"map-checkbox area-PAT\\" name=\\"area[]\\" value=\\"Patong\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Patong\\" class=\\"PAT\\" title=\\"Patong is the most famous beach resort in Phuket, with its wide variety of activities and nightlife. \\">\\n\\t\\t\\t\\t<div>\\u041f\\u0430\\u0442\\u043e\\u043d\\u0433 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 36px; top: 269px\\">\\n\\t\\t\\t\\t<input id=\\"Karon\\" title=\\"Karon\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAR\\" name=\\"area[]\\" value=\\"Karon\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Karon\\" class=\\"KAR\\" title=\\"One of the larger beaches in Phuket, Karon has plenty to offer the holiday visitor as well as long-term residents. \\">\\n\\t\\t\\t\\t<div>\\u041a\\u0430\\u0440\\u043e\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 38px; top: 291px\\">\\n\\t\\t\\t\\t<input id=\\"Kata\\" title=\\"Kata\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAT\\" name=\\"area[]\\" value=\\"Kata\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kata\\" class=\\"KAT\\" title=\\"Very popular with families, Kata is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. \\">\\n\\t\\t\\t\\t<div>\\u041a\\u0430\\u0442\\u0430 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 18px; top: 311px\\">\\n\\t\\t\\t\\t<input id=\\"Kata Noi\\" title=\\"Kata Noi\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAN\\" name=\\"area[]\\" value=\\"Kata Noi\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kata Noi\\" class=\\"KAN\\" title=\\"Very popular with families, Kata Noi is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. \\">\\n\\t\\t\\t\\t<div>\\u041a\\u0430\\u0442\\u0430 \\u041d\\u043e\\u0439 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<!-- \\u041a\\u0430\\u0442\\u0430 \\u041d\\u043e\\u0439 -->\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 42px; top: 332px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Harn\\" title=\\"Nai Harn\\" type=\\"checkbox\\" class=\\"map-checkbox area-NAI\\" name=\\"area[]\\" value=\\"13\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Harn\\" class=\\"NAI\\" title=\\"Nai Harn is a quiet beach in the south, near Phromthep Cape view point. \\">\\n\\t\\t\\t\\t<div>\\u041d\\u0430\\u0439 \\u0425\\u0430\\u0440\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 67px; top: 219px\\">\\n\\t\\t\\t\\t<input id=\\"Kathu\\" title=\\"Kathu\\" type=\\"checkbox\\" class=\\"map-checkbox area-KTH\\" name=\\"area[]\\" value=\\"Kathu\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kathu\\" class=\\"KTH\\" title=\\"Kathu is located in the middle of the island, between Patong to the west and Phuket City to the east. \\">\\n\\t\\t\\t\\t<div>\\u041a\\u0430\\u0442\\u0443 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 101px; top: 233px\\">\\n\\t\\t\\t\\t<input id=\\"Phuket City\\" title=\\"Phuket City\\" type=\\"checkbox\\" class=\\"map-checkbox area-PHU\\" name=\\"area[]\\" value=\\"Phuket City\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Phuket City\\" class=\\"PHU\\" title=\\"Phuket City features an exciting mix of old and new, simple and sophisticated, peaceful and pulsating. \\">\\n\\t\\t\\t\\t<div>\\u041f\\u0445\\u0443\\u043a\\u0435\\u0442 \\u0422\\u0430\\u0443\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 54px; top: 316px\\">\\n\\t\\t\\t\\t<input id=\\"Rawai\\" title=\\"Rawai\\" type=\\"checkbox\\" class=\\"map-checkbox area-RAW\\" name=\\"area[]\\" value=\\"4\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Rawai\\" class=\\"RAW\\" title=\\"Rawai is home to quite a few of Phuket''s foreign expat population, lending a bohemian and laid-back flavour to the way of life there. \\">\\n\\t\\t\\t\\t<div>\\u0420\\u0430\\u0432\\u0430\\u0438 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 108px; top: 283px\\">\\n\\t\\t\\t\\t<input id=\\"Panwa\\" title=\\"Panwa\\" type=\\"checkbox\\" class=\\"map-checkbox area-PAN\\" name=\\"area[]\\" value=\\"Panwa\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Panwa\\" class=\\"PAN\\" title=\\"Panwa is a quiet cape at the south east of the Island. \\">\\n\\t\\t\\t\\t<div>\\u041f\\u0430\\u043d\\u0432\\u0430 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 129px; top: 94px\\">\\n\\t\\t\\t\\t<input id=\\"East\\" title=\\"East\\" type=\\"checkbox\\" class=\\"map-checkbox area-EAS\\" name=\\"area[]\\" value=\\"East\\"\\/>\\n\\t\\t\\t\\t<label for=\\"East\\" class=\\"EAS\\" title=\\"The east coast of the island includes all areas north of Phuket City on the coastline. \\">\\n\\t\\t\\t\\t<div>\\u0412\\u043e\\u0441\\u0442\\u043e\\u043a <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 63px; top: 126px\\">\\n\\t\\t\\t\\t<input id=\\"Talang\\" title=\\"Talang\\" type=\\"checkbox\\" class=\\"map-checkbox area-TAL\\" name=\\"area[]\\" value=\\"Talang\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Talang\\" class=\\"TAL\\" title=\\"Talang, close to the main highway which crosses Phuket from north to south is ideal for those looking for a place which is centralized and easily accessible. \\">\\n\\t\\t\\t\\t<div>\\u0422\\u0430\\u043b\\u0430\\u043d\\u0433 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 60px; top: 159px\\">\\n\\t\\t\\t\\t<input id=\\"Cherng Talay\\" title=\\"Cherng Talay\\" type=\\"checkbox\\" class=\\"map-checkbox area-CHE\\" name=\\"area[]\\" value=\\"Cherng Talay\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Cherng Talay\\" class=\\"CHE\\" title=\\"Cherng Talay is a town area towards the west coast, rapidly becoming a very popular area for expatriates \\">\\n\\t\\t\\t\\t<div>\\u0427\\u0435\\u043d\\u0442\\u0430\\u043b\\u0435 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 66px; top: 271px\\">\\n\\t\\t\\t\\t<input id=\\"Chalong\\" title=\\"Chalong\\" type=\\"checkbox\\" class=\\"map-checkbox area-CHA\\" name=\\"area[]\\" value=\\"Chalong\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Chalong\\" class=\\"CHA\\" title=\\"A heavily populated area of Phuket, Chalong extends from the southern end of Phuket City down towards Rawai. \\">\\n\\t\\t\\t\\t<div>\\u0427\\u0430\\u043b\\u043e\\u043d\\u0433 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 34px; top: 4px\\">\\n\\t\\t\\t\\t<input id=\\"Phang Nga\\" title=\\"Phang Nga\\" type=\\"checkbox\\" class=\\"map-checkbox area-PHA\\" name=\\"area[]\\" value=\\"Phang Nga\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Phang Nga\\" class=\\"PHA\\" title=\\"Phang Nga is a province just north of Phuket which is getting increased attention from developers with every year. \\">\\n\\t\\t\\t\\t<div>\\u041f\\u0430\\u043d\\u0433 \\u041d\\u0433\\u0430 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<input type=\\"text\\" name=\\"daterange\\" value=\\"\\"\\/>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"ls-submit-ru\\">\\n\\t\\t\\t<div class=\\"col-md-12\\">\\n\\t\\t\\t\\t<button class=\\"btn btn-orange\\">\\u041f\\u043e\\u0438\\u0441\\u043a<\\/button>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t<\\/form>\\n<\\/div>","type":"text","special_type":null,"subtype":"","specialsettings":{},"unique_id":1,"left":{"desktop":197},"top":{"desktop":123},"internal_class":"","hover":false,"alias":"Phang Nga Mai Khao N...","loop_animation":"none","loop_easing":"linearEaseNone","loop_speed":"2","loop_startdeg":-20,"loop_enddeg":20,"loop_xorigin":50,"loop_yorigin":50,"loop_xstart":0,"loop_xend":0,"loop_ystart":0,"loop_yend":0,"loop_zoomstart":"1","loop_zoomend":"1","loop_angle":"0","loop_radius":"10","html_tag":"div","mask_start":false,"mask_end":false,"x_start_reverse":false,"y_start_reverse":false,"x_end_reverse":false,"y_end_reverse":false,"x_rotate_start_reverse":false,"y_rotate_start_reverse":false,"z_rotate_start_reverse":false,"x_rotate_end_reverse":false,"y_rotate_end_reverse":false,"z_rotate_end_reverse":false,"scale_x_start_reverse":false,"scale_y_start_reverse":false,"scale_x_end_reverse":false,"scale_y_end_reverse":false,"skew_x_start_reverse":false,"skew_y_start_reverse":false,"skew_x_end_reverse":false,"skew_y_end_reverse":false,"mask_x_start_reverse":false,"mask_y_start_reverse":false,"mask_x_end_reverse":false,"mask_y_end_reverse":false,"mask_x_start":"0","mask_y_start":"0","mask_x_end":"0","mask_y_end":"0","mask_speed_end":"inherit","mask_ease_end":"inherit","alt_option":"media_library","alt":"","animation":"tp-fade","easing":"Power2.easeInOut","split":"none","endsplit":"none","splitdelay":"10","endsplitdelay":"10","max_height":{"desktop":"457px"},"max_width":{"desktop":"880px"},"video_width":{"desktop":"480"},"video_height":{"desktop":"360"},"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"whitespace":{"desktop":"normal"},"static_start":"1","static_end":"last","speed":300,"align_hor":{"desktop":"left"},"align_vert":{"desktop":"top"},"hiddenunder":false,"resizeme":true,"seo-optimized":false,"link_slide":"nothing","scrollunder_offset":"","style":"","visible-desktop":true,"visible-notebook":true,"visible-tablet":true,"visible-mobile":true,"resize-full":true,"show-on-hover":false,"basealign":"grid","responsive_offset":true,"lazy-load":"auto","image-size":"auto","time":500,"endspeed":300,"endtime":60300,"endanimation":"fadeout","endeasing":"nothing","width":880,"height":457,"cover_mode":"custom","static_styles":{"font-size":{"desktop":"20"},"line-height":{"desktop":"22"},"font-weight":{"desktop":"400"},"color":{"desktop":"#ffffff"}},"x_start":"inherit","y_start":"inherit","z_start":"inherit","x_end":"inherit","y_end":"inherit","z_end":"inherit","opacity_start":"0","opacity_end":"0","x_rotate_start":"inherit","y_rotate_start":"inherit","z_rotate_start":"inherit","x_rotate_end":"inherit","y_rotate_end":"inherit","z_rotate_end":"inherit","scale_x_start":"inherit","scale_y_start":"inherit","scale_x_end":"inherit","scale_y_end":"inherit","skew_x_start":"inherit","skew_y_start":"inherit","skew_x_end":"inherit","skew_y_end":"inherit","deformation":{"font-family":"","padding":["0","0","0","0"],"font-style":"normal","color-transparency":"1","text-decoration":"none","text-align":"left","text-transform":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing"},"svg":{"svgstroke-color":"transparent","svgstroke-transparency":"1","svgstroke-dasharray":"0","svgstroke-dashoffset":"0","svgstroke-width":"0","svgstroke-hover-color":"transparent","svgstroke-hover-transparency":"1","svgstroke-hover-dasharray":"0","svgstroke-hover-dashoffset":"0","svgstroke-hover-width":"0"},"deformation-hover":{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"speed":"0","zindex":"auto","easing":"Linear.easeNone","css_cursor":"auto"},"visible":true,"animation_overwrite":"wait","trigger_memory":"keep","serial":0,"split_in_extratime":-10,"split_out_extratime":-10,"endWithSlide":true,"toggle":false,"toggle_use_hover":false,"texttoggle":"","scaleX":{"desktop":""},"scaleY":{"desktop":""},"autolinebreak":true,"scaleProportional":false,"attrID":"","attrClasses":"","attrTitle":"","attrRel":"","layer-selectable":"default","layer_action":{"tooltip_event":[],"action":[],"image_link":[],"link_open_in":[],"jump_to_slide":[],"scrollunder_offset":[],"actioncallback":[],"layer_target":[],"link_type":[],"action_delay":[],"toggle_layer_type":[],"toggle_class":[]}}]', '""');
INSERT INTO `wp_revslider_slides` (`id`, `slider_id`, `slide_order`, `params`, `layers`, `settings`) VALUES
(10, 2, 3, '{"background_type":"image","rs-gallery-type":"gallery","bg_external":"","bg_color":"#E7E7E7","0":"\\u0421\\u0431\\u0440\\u043e\\u0441","slide_bg_youtube":"","slide_bg_vimeo":"","slide_bg_html_mpeg":"","slide_bg_html_webm":"","slide_bg_html_ogv":"","image_source_type":"full","alt_option":"media_library","alt_attr":"","ext_width":"1920","ext_height":"1080","title_option":"media_library","title_attr":"","video_force_cover":"on","video_dotted_overlay":"none","video_ratio":"16:9","video_start_at":"","video_end_at":"","video_loop":"none","video_nextslide":"off","video_force_rewind":"on","video_mute":"on","video_volume":"","video_speed":"1","video_arguments":"hd=1&wmode=opaque&showinfo=0&rel=0;","video_arguments_vim":"title=0&byline=0&portrait=0&api=1","bg_fit":"cover","bg_fit_x":"100","bg_fit_y":"100","bg_position":"center center","bg_position_x":"0","bg_position_y":"0","bg_repeat":"no-repeat","kenburn_effect":"off","kb_start_fit":"100","kb_end_fit":"100","kb_start_offset_x":"0","kb_end_offset_x":"0","kb_start_offset_y":"0","kb_end_offset_y":"0","kb_start_rotate":"0","kb_end_rotate":"0","kb_easing":"Linear.easeNone","kb_duration":"10000","image_id":"1958","title":"Slide","delay":"","stoponpurpose":"false","invisibleslide":"false","state":"published","hideslideafter":"0","hideslideonmobile":"off","date_from":"","date_to":"","save_performance":"off","slide_thumb":"","thumb_dimension":"slider","thumb_for_admin":"off","slide_transition":["fade"],"slot_amount":["default"],"transition_rotation":["0"],"transition_duration":["300"],"transition_ease_in":["default"],"transition_ease_out":["default"],"ph-round-arrows-bg-color-custom-slide":"off","ph-round-arrows-bg-color-custom":"0,0,0,0.5","ph-round-arrows-bg-size-custom-slide":"off","ph-round-arrows-bg-size-custom":"40","ph-round-arrows-arrow-color-color-slide":"off","ph-round-arrows-arrow-color-color":"#ffffff","ph-round-arrows-arrow-size-custom-slide":"off","ph-round-arrows-arrow-size-custom":"20","ph-round-arrows-hover-bg-color-color-rgba-slide":"off","ph-round-arrows-hover-bg-color-color-rgba":"#000000","ph-zeus-bullets-color-color-slide":"off","ph-zeus-bullets-color-color":"#ffffff","ph-zeus-bullets-size-custom-slide":"off","ph-zeus-bullets-size-custom":"13","ph-zeus-bullets-img-width-custom-slide":"off","ph-zeus-bullets-img-width-custom":"135","ph-zeus-bullets-img-height-custom-slide":"off","ph-zeus-bullets-img-height-custom":"60","ph-zeus-bullets-title-color-color-slide":"off","ph-zeus-bullets-title-color-color":"#ffffff","ph-zeus-bullets-tooltip-bottom-custom-slide":"off","ph-zeus-bullets-tooltip-bottom-custom":"45","ph-zeus-bullets-title-font-size-custom-slide":"off","ph-zeus-bullets-title-font-size-custom":"13","ph-zeus-bullets-title-line-height-custom-slide":"off","ph-zeus-bullets-title-line-height-custom":"14","ph-round-tabs-font-family-font_family-slide":"off","ph-round-tabs-font-family-font_family":"Roboto","ph-round-tabs-border-color-color-rgba-slide":"off","ph-round-tabs-border-color-color-rgba":"#e5e5e5","ph-round-tabs-border-size-custom-slide":"off","ph-round-tabs-border-size-custom":"1","ph-round-tabs-image-size-custom-slide":"off","ph-round-tabs-image-size-custom":"60","ph-round-tabs-param1-color-color-rgba-slide":"off","ph-round-tabs-param1-color-color-rgba":"rgba(51,51,51,0.5)","ph-round-tabs-param1-size-custom-slide":"off","ph-round-tabs-param1-size-custom":"12","ph-round-tabs-hover-bg-color-color-rgba-slide":"off","ph-round-tabs-hover-bg-color-color-rgba":"#eeeeee","ph-round-tabs-bgcolor-color-rgba-slide":"off","ph-round-tabs-bgcolor-color-rgba":"rgba(0,0,0,0)","ph-round-tabs-contentcolor-color-rgba-slide":"off","ph-round-tabs-contentcolor-color-rgba":"#333333","ph-round-tabs-param2-color-color-rgba-slide":"off","ph-round-tabs-param2-color-color-rgba":"0,0,0,0","ph-round-tabs-param2-size-custom-slide":"off","ph-round-tabs-param2-size-custom":"14","ph-round-thumbs-title-bg-color-rgba-slide":"off","ph-round-thumbs-title-bg-color-rgba":"rgba(0,0,0,0.85)","ph-round-thumbs-title-color-color-rgba-slide":"off","ph-round-thumbs-title-color-color-rgba":"#ffffff","ph-round-thumbs-title-font-size-custom-slide":"off","ph-round-thumbs-title-font-size-custom":"12","params_1":"","params_1_chars":"10","params_2":"","params_2_chars":"10","params_3":"","params_3_chars":"10","params_4":"","params_4_chars":"10","params_5":"","params_5_chars":"10","params_6":"","params_6_chars":"10","params_7":"","params_7_chars":"10","params_8":"","params_8_chars":"10","params_9":"","params_9_chars":"10","params_10":"","params_10_chars":"10","slide_description":"","class_attr":"","id_attr":"","data_attr":"","enable_link":"false","link_type":"regular","link":"","link_open_in":"same","slide_link":"nothing","link_pos":"front","slide_bg_color":"#E7E7E7","slide_bg_external":"","image":"http:\\/\\/starasiaphuket.loc\\/wp-content\\/uploads\\/2016\\/11\\/slide3.jpg","0":"\\u0421\\u0431\\u0440\\u043e\\u0441"}', '[{"text":"<div class=\\"ls-mask\\">\\n\\t<form role=\\"search\\" method=\\"get\\" id=\\"searchform\\" class=\\"searchform\\" action=\\"\\/advanced-search\\/\\">\\n\\t\\t<div class=\\"ls-form-ru\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"min-price\\" class=\\"min-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$1,000\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"max-price\\" class=\\"max-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$500,000\\">\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<select class=\\"selectpicker\\" name=\\"bedrooms\\" data-live-search=\\"false\\" data-live-search-style=\\"begins\\">\\n\\t\\t\\t\\t\\t<option value>\\u041a\\u043e\\u043b. \\u0441\\u043f\\u0430\\u043b\\u0435\\u043d<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"1\\">1<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"2\\">2<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"3\\">3<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"4\\">4<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"5\\">5<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"any\\">\\u041b\\u044e\\u0431\\u043e\\u0435<\\/option>\\n\\t\\t\\t\\t<\\/select>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<div class=\\"ls-absol\\">\\n\\t\\t\\t\\t<div class=\\"phuket\\">\\n\\t\\t\\t\\t<div class=\\"mapWrapper\\" id=\\"map\\">\\n\\t\\t\\t\\t<div class=\\"newmap\\" style=\\"height: 335px;\\">\\n\\t\\t\\t\\t<div class=\\"newmapLocations\\">\\n\\t\\t\\t\\t\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 40px; top: 51px\\">\\n\\t\\t\\t\\t<input id=\\"Mai Khao\\" title=\\"Mai Khao\\" type=\\"checkbox\\" class=\\"map-checkbox area-MAI\\" name=\\"area[]\\" value=\\"Mai Khao\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Mai Khao\\" class=\\"MAI\\" title=\\"Mai Khao Beach is Phuket''s longest beach that spans for about 11km. \\">\\n\\t\\t\\t\\t<div>\\u041c\\u0430\\u0439 \\u041a\\u0430\\u043e <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 37px; top: 84px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Yang\\" title=\\"Nai Yang\\" type=\\"checkbox\\" class=\\"map-checkbox area-NYG\\" name=\\"area[]\\" value=\\"Nai Yang\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Yang\\" class=\\"NYG\\" title=\\"Nai Yang is noted for its impressive forest of tall casuarina trees, and as a picnic spot for Thais. \\">\\n\\t\\t\\t\\t<div>\\u041d\\u0430\\u0439 \\u0419\\u0430\\u043d\\u0433 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 21px; top: 107px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Thon\\" title=\\"Nai Thon\\" type=\\"checkbox\\" class=\\"map-checkbox area-NAT\\" name=\\"area[]\\" value=\\"Nai Thon\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Thon\\" class=\\"NAT\\" title=\\"Nai Thon is a beautiful stretch of sand that for reasons unknown has been overlooked by large resort developers. \\">\\n\\t\\t\\t\\t<div>\\u041d\\u0430\\u0439 \\u0422\\u043e\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 26px; top: 125px\\">\\n\\t\\t\\t\\t<input id=\\"Layan\\" title=\\"Layan\\" type=\\"checkbox\\" class=\\"map-checkbox area-LAY\\" name=\\"area[]\\" value=\\"Layan\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Layan\\" class=\\"LAY\\" title=\\"Layan Beach is a beautiful and secluded beach with only a couple of resorts. \\">\\n\\t\\t\\t\\t<div>\\u041b\\u0430\\u0439\\u0430\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 34px; top: 149px\\">\\n\\t\\t\\t\\t<input id=\\"Bang Tao\\" title=\\"Bang Tao\\" type=\\"checkbox\\" class=\\"map-checkbox area-BAN\\" name=\\"area[]\\" value=\\"Bang Tao\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Bang Tao\\" class=\\"BAN\\" title=\\"Bang Tao is a large open bay with one of Phuket''s longest beaches. \\">\\n\\t\\t\\t\\t<div>\\u0411\\u0430\\u043d\\u0433 \\u0422\\u0430\\u043e <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 23px; top: 166px\\">\\n\\t\\t\\t\\t<input id=\\"Surin\\" title=\\"Surin\\" type=\\"checkbox\\" class=\\"map-checkbox area-SUR\\" name=\\"area[]\\" value=\\"Surin\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Surin\\" class=\\"SUR\\" title=\\"Surin Beach still has a small village atmosphere, but this is gradually changing as more and more major housing developments and hotel projects get underway. \\">\\n\\t\\t\\t\\t<div>\\u0421\\u0443\\u0440\\u0438\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 23px; top: 188px\\">\\n\\t\\t\\t\\t<input id=\\"Kamala\\" title=\\"Kamala\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAM\\" name=\\"area[]\\" value=\\"Kamala\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kamala\\" class=\\"KAM\\" title=\\"Just north of the lights and noise of Patong lies Kamala beach, a quieter stretch of sand with a more relaxed feel. \\">\\n\\t\\t\\t\\t<div>\\u041a\\u0430\\u043c\\u0430\\u043b\\u0430 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 36px; top: 229px\\">\\n\\t\\t\\t\\t<input id=\\"Patong\\" title=\\"Patong\\" type=\\"checkbox\\" class=\\"map-checkbox area-PAT\\" name=\\"area[]\\" value=\\"Patong\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Patong\\" class=\\"PAT\\" title=\\"Patong is the most famous beach resort in Phuket, with its wide variety of activities and nightlife. \\">\\n\\t\\t\\t\\t<div>\\u041f\\u0430\\u0442\\u043e\\u043d\\u0433 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 36px; top: 269px\\">\\n\\t\\t\\t\\t<input id=\\"Karon\\" title=\\"Karon\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAR\\" name=\\"area[]\\" value=\\"Karon\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Karon\\" class=\\"KAR\\" title=\\"One of the larger beaches in Phuket, Karon has plenty to offer the holiday visitor as well as long-term residents. \\">\\n\\t\\t\\t\\t<div>\\u041a\\u0430\\u0440\\u043e\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 38px; top: 291px\\">\\n\\t\\t\\t\\t<input id=\\"Kata\\" title=\\"Kata\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAT\\" name=\\"area[]\\" value=\\"Kata\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kata\\" class=\\"KAT\\" title=\\"Very popular with families, Kata is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. \\">\\n\\t\\t\\t\\t<div>\\u041a\\u0430\\u0442\\u0430 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 18px; top: 311px\\">\\n\\t\\t\\t\\t<input id=\\"Kata Noi\\" title=\\"Kata Noi\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAN\\" name=\\"area[]\\" value=\\"Kata Noi\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kata Noi\\" class=\\"KAN\\" title=\\"Very popular with families, Kata Noi is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. \\">\\n\\t\\t\\t\\t<div>\\u041a\\u0430\\u0442\\u0430 \\u041d\\u043e\\u0439 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<!-- \\u041a\\u0430\\u0442\\u0430 \\u041d\\u043e\\u0439 -->\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 42px; top: 332px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Harn\\" title=\\"Nai Harn\\" type=\\"checkbox\\" class=\\"map-checkbox area-NAI\\" name=\\"area[]\\" value=\\"13\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Harn\\" class=\\"NAI\\" title=\\"Nai Harn is a quiet beach in the south, near Phromthep Cape view point. \\">\\n\\t\\t\\t\\t<div>\\u041d\\u0430\\u0439 \\u0425\\u0430\\u0440\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 67px; top: 219px\\">\\n\\t\\t\\t\\t<input id=\\"Kathu\\" title=\\"Kathu\\" type=\\"checkbox\\" class=\\"map-checkbox area-KTH\\" name=\\"area[]\\" value=\\"Kathu\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kathu\\" class=\\"KTH\\" title=\\"Kathu is located in the middle of the island, between Patong to the west and Phuket City to the east. \\">\\n\\t\\t\\t\\t<div>\\u041a\\u0430\\u0442\\u0443 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 101px; top: 233px\\">\\n\\t\\t\\t\\t<input id=\\"Phuket City\\" title=\\"Phuket City\\" type=\\"checkbox\\" class=\\"map-checkbox area-PHU\\" name=\\"area[]\\" value=\\"Phuket City\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Phuket City\\" class=\\"PHU\\" title=\\"Phuket City features an exciting mix of old and new, simple and sophisticated, peaceful and pulsating. \\">\\n\\t\\t\\t\\t<div>\\u041f\\u0445\\u0443\\u043a\\u0435\\u0442 \\u0422\\u0430\\u0443\\u043d <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 54px; top: 316px\\">\\n\\t\\t\\t\\t<input id=\\"Rawai\\" title=\\"Rawai\\" type=\\"checkbox\\" class=\\"map-checkbox area-RAW\\" name=\\"area[]\\" value=\\"4\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Rawai\\" class=\\"RAW\\" title=\\"Rawai is home to quite a few of Phuket''s foreign expat population, lending a bohemian and laid-back flavour to the way of life there. \\">\\n\\t\\t\\t\\t<div>\\u0420\\u0430\\u0432\\u0430\\u0438 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 108px; top: 283px\\">\\n\\t\\t\\t\\t<input id=\\"Panwa\\" title=\\"Panwa\\" type=\\"checkbox\\" class=\\"map-checkbox area-PAN\\" name=\\"area[]\\" value=\\"Panwa\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Panwa\\" class=\\"PAN\\" title=\\"Panwa is a quiet cape at the south east of the Island. \\">\\n\\t\\t\\t\\t<div>\\u041f\\u0430\\u043d\\u0432\\u0430 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 129px; top: 94px\\">\\n\\t\\t\\t\\t<input id=\\"East\\" title=\\"East\\" type=\\"checkbox\\" class=\\"map-checkbox area-EAS\\" name=\\"area[]\\" value=\\"East\\"\\/>\\n\\t\\t\\t\\t<label for=\\"East\\" class=\\"EAS\\" title=\\"The east coast of the island includes all areas north of Phuket City on the coastline. \\">\\n\\t\\t\\t\\t<div>\\u0412\\u043e\\u0441\\u0442\\u043e\\u043a <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 63px; top: 126px\\">\\n\\t\\t\\t\\t<input id=\\"Talang\\" title=\\"Talang\\" type=\\"checkbox\\" class=\\"map-checkbox area-TAL\\" name=\\"area[]\\" value=\\"Talang\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Talang\\" class=\\"TAL\\" title=\\"Talang, close to the main highway which crosses Phuket from north to south is ideal for those looking for a place which is centralized and easily accessible. \\">\\n\\t\\t\\t\\t<div>\\u0422\\u0430\\u043b\\u0430\\u043d\\u0433 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 60px; top: 159px\\">\\n\\t\\t\\t\\t<input id=\\"Cherng Talay\\" title=\\"Cherng Talay\\" type=\\"checkbox\\" class=\\"map-checkbox area-CHE\\" name=\\"area[]\\" value=\\"Cherng Talay\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Cherng Talay\\" class=\\"CHE\\" title=\\"Cherng Talay is a town area towards the west coast, rapidly becoming a very popular area for expatriates \\">\\n\\t\\t\\t\\t<div>\\u0427\\u0435\\u043d\\u0442\\u0430\\u043b\\u0435 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 66px; top: 271px\\">\\n\\t\\t\\t\\t<input id=\\"Chalong\\" title=\\"Chalong\\" type=\\"checkbox\\" class=\\"map-checkbox area-CHA\\" name=\\"area[]\\" value=\\"Chalong\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Chalong\\" class=\\"CHA\\" title=\\"A heavily populated area of Phuket, Chalong extends from the southern end of Phuket City down towards Rawai. \\">\\n\\t\\t\\t\\t<div>\\u0427\\u0430\\u043b\\u043e\\u043d\\u0433 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 34px; top: 4px\\">\\n\\t\\t\\t\\t<input id=\\"Phang Nga\\" title=\\"Phang Nga\\" type=\\"checkbox\\" class=\\"map-checkbox area-PHA\\" name=\\"area[]\\" value=\\"Phang Nga\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Phang Nga\\" class=\\"PHA\\" title=\\"Phang Nga is a province just north of Phuket which is getting increased attention from developers with every year. \\">\\n\\t\\t\\t\\t<div>\\u041f\\u0430\\u043d\\u0433 \\u041d\\u0433\\u0430 <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<input type=\\"text\\" name=\\"daterange\\" value=\\"\\"\\/>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"ls-submit-ru\\">\\n\\t\\t\\t<div class=\\"col-md-12\\">\\n\\t\\t\\t\\t<button class=\\"btn btn-orange\\">\\u041f\\u043e\\u0438\\u0441\\u043a<\\/button>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t<\\/form>\\n<\\/div>","type":"text","special_type":null,"subtype":"","specialsettings":{},"unique_id":1,"left":{"desktop":197},"top":{"desktop":123},"internal_class":"","hover":false,"alias":"Phang Nga Mai Khao N...","loop_animation":"none","loop_easing":"linearEaseNone","loop_speed":"2","loop_startdeg":-20,"loop_enddeg":20,"loop_xorigin":50,"loop_yorigin":50,"loop_xstart":0,"loop_xend":0,"loop_ystart":0,"loop_yend":0,"loop_zoomstart":"1","loop_zoomend":"1","loop_angle":"0","loop_radius":"10","html_tag":"div","mask_start":false,"mask_end":false,"x_start_reverse":false,"y_start_reverse":false,"x_end_reverse":false,"y_end_reverse":false,"x_rotate_start_reverse":false,"y_rotate_start_reverse":false,"z_rotate_start_reverse":false,"x_rotate_end_reverse":false,"y_rotate_end_reverse":false,"z_rotate_end_reverse":false,"scale_x_start_reverse":false,"scale_y_start_reverse":false,"scale_x_end_reverse":false,"scale_y_end_reverse":false,"skew_x_start_reverse":false,"skew_y_start_reverse":false,"skew_x_end_reverse":false,"skew_y_end_reverse":false,"mask_x_start_reverse":false,"mask_y_start_reverse":false,"mask_x_end_reverse":false,"mask_y_end_reverse":false,"mask_x_start":"0","mask_y_start":"0","mask_x_end":"0","mask_y_end":"0","mask_speed_end":"inherit","mask_ease_end":"inherit","alt_option":"media_library","alt":"","animation":"tp-fade","easing":"Power2.easeInOut","split":"none","endsplit":"none","splitdelay":"10","endsplitdelay":"10","max_height":{"desktop":"457px"},"max_width":{"desktop":"880px"},"video_width":{"desktop":"480"},"video_height":{"desktop":"360"},"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"whitespace":{"desktop":"normal"},"static_start":"1","static_end":"last","speed":300,"align_hor":{"desktop":"left"},"align_vert":{"desktop":"top"},"hiddenunder":false,"resizeme":true,"seo-optimized":false,"link_slide":"nothing","scrollunder_offset":"","style":"","visible-desktop":true,"visible-notebook":true,"visible-tablet":true,"visible-mobile":true,"resize-full":true,"show-on-hover":false,"basealign":"grid","responsive_offset":true,"lazy-load":"auto","image-size":"auto","time":500,"endspeed":300,"endtime":60300,"endanimation":"fadeout","endeasing":"nothing","width":880,"height":457,"cover_mode":"custom","static_styles":{"font-size":{"desktop":"20"},"line-height":{"desktop":"22"},"font-weight":{"desktop":"400"},"color":{"desktop":"#ffffff"}},"x_start":"inherit","y_start":"inherit","z_start":"inherit","x_end":"inherit","y_end":"inherit","z_end":"inherit","opacity_start":"0","opacity_end":"0","x_rotate_start":"inherit","y_rotate_start":"inherit","z_rotate_start":"inherit","x_rotate_end":"inherit","y_rotate_end":"inherit","z_rotate_end":"inherit","scale_x_start":"inherit","scale_y_start":"inherit","scale_x_end":"inherit","scale_y_end":"inherit","skew_x_start":"inherit","skew_y_start":"inherit","skew_x_end":"inherit","skew_y_end":"inherit","deformation":{"font-family":"","padding":["0","0","0","0"],"font-style":"normal","color-transparency":"1","text-decoration":"none","text-align":"left","text-transform":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing"},"svg":{"svgstroke-color":"transparent","svgstroke-transparency":"1","svgstroke-dasharray":"0","svgstroke-dashoffset":"0","svgstroke-width":"0","svgstroke-hover-color":"transparent","svgstroke-hover-transparency":"1","svgstroke-hover-dasharray":"0","svgstroke-hover-dashoffset":"0","svgstroke-hover-width":"0"},"deformation-hover":{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"speed":"0","zindex":"auto","easing":"Linear.easeNone","css_cursor":"auto"},"visible":true,"animation_overwrite":"wait","trigger_memory":"keep","serial":0,"split_in_extratime":-10,"split_out_extratime":-10,"endWithSlide":true,"toggle":false,"toggle_use_hover":false,"texttoggle":"","scaleX":{"desktop":""},"scaleY":{"desktop":""},"autolinebreak":true,"scaleProportional":false,"attrID":"","attrClasses":"","attrTitle":"","attrRel":"","layer-selectable":"default","layer_action":{"tooltip_event":[],"action":[],"image_link":[],"link_open_in":[],"jump_to_slide":[],"scrollunder_offset":[],"actioncallback":[],"layer_target":[],"link_type":[],"action_delay":[],"toggle_layer_type":[],"toggle_class":[]}},{"text":"\\u0417\\u0434\\u0435\\u0441\\u044c \\u0431\\u0443\\u0434\\u0435\\u0442 \\u0437\\u0430\\u0433\\u043e\\u043b\\u043e\\u0432\\u043e\\u043a","type":"text","special_type":null,"subtype":"","specialsettings":{},"unique_id":2,"left":{"desktop":90},"top":{"desktop":53},"internal_class":"","hover":false,"alias":"Lorem ipsum","loop_animation":"none","loop_easing":"linearEaseNone","loop_speed":"2","loop_startdeg":-20,"loop_enddeg":20,"loop_xorigin":50,"loop_yorigin":50,"loop_xstart":0,"loop_xend":0,"loop_ystart":0,"loop_yend":0,"loop_zoomstart":"1","loop_zoomend":"1","loop_angle":"0","loop_radius":"10","html_tag":"div","mask_start":false,"mask_end":false,"x_start_reverse":false,"y_start_reverse":false,"x_end_reverse":false,"y_end_reverse":false,"x_rotate_start_reverse":false,"y_rotate_start_reverse":false,"z_rotate_start_reverse":false,"x_rotate_end_reverse":false,"y_rotate_end_reverse":false,"z_rotate_end_reverse":false,"scale_x_start_reverse":false,"scale_y_start_reverse":false,"scale_x_end_reverse":false,"scale_y_end_reverse":false,"skew_x_start_reverse":false,"skew_y_start_reverse":false,"skew_x_end_reverse":false,"skew_y_end_reverse":false,"mask_x_start_reverse":false,"mask_y_start_reverse":false,"mask_x_end_reverse":false,"mask_y_end_reverse":false,"mask_x_start":"0","mask_y_start":"0","mask_x_end":"0","mask_y_end":"0","mask_speed_end":"inherit","mask_ease_end":"inherit","alt_option":"media_library","alt":"","animation":"tp-fade","easing":"Power2.easeInOut","split":"none","endsplit":"none","splitdelay":"10","endsplitdelay":"10","max_height":{"desktop":"24px"},"max_width":{"desktop":"1061px"},"video_width":{"desktop":"480"},"video_height":{"desktop":"360"},"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"whitespace":{"desktop":"normal"},"static_start":"1","static_end":"last","speed":300,"align_hor":{"desktop":"left"},"align_vert":{"desktop":"top"},"hiddenunder":false,"resizeme":true,"seo-optimized":false,"link_slide":"nothing","scrollunder_offset":"","style":"","visible-desktop":true,"visible-notebook":true,"visible-tablet":true,"visible-mobile":true,"resize-full":true,"show-on-hover":false,"basealign":"grid","responsive_offset":true,"lazy-load":"auto","image-size":"auto","time":500,"endspeed":300,"endtime":60300,"endanimation":"fadeout","endeasing":"nothing","width":1061,"height":24,"cover_mode":"custom","static_styles":{"font-size":{"desktop":"20"},"line-height":{"desktop":"22"},"font-weight":{"desktop":"400"},"color":{"desktop":"#ffffff"}},"x_start":"inherit","y_start":"inherit","z_start":"inherit","x_end":"inherit","y_end":"inherit","z_end":"inherit","opacity_start":"0","opacity_end":"0","x_rotate_start":"inherit","y_rotate_start":"inherit","z_rotate_start":"inherit","x_rotate_end":"inherit","y_rotate_end":"inherit","z_rotate_end":"inherit","scale_x_start":"inherit","scale_y_start":"inherit","scale_x_end":"inherit","scale_y_end":"inherit","skew_x_start":"inherit","skew_y_start":"inherit","skew_x_end":"inherit","skew_y_end":"inherit","deformation":{"font-family":"","padding":["0","0","0","0"],"font-style":"normal","color-transparency":"1","text-decoration":"none","text-align":"center","text-transform":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"},"svg":{"svgstroke-color":"transparent","svgstroke-transparency":"1","svgstroke-dasharray":"0","svgstroke-dashoffset":"0","svgstroke-width":"0","svgstroke-hover-color":"transparent","svgstroke-hover-transparency":"1","svgstroke-hover-dasharray":"0","svgstroke-hover-dashoffset":"0","svgstroke-hover-width":"0"},"deformation-hover":{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"speed":"0","zindex":"auto","easing":"Linear.easeNone","css_cursor":"auto"},"visible":true,"animation_overwrite":"wait","trigger_memory":"keep","serial":1,"split_in_extratime":-10,"split_out_extratime":-10,"endWithSlide":true,"toggle":false,"toggle_use_hover":false,"texttoggle":"","scaleX":{"desktop":""},"scaleY":{"desktop":""},"autolinebreak":true,"scaleProportional":false,"attrID":"","attrClasses":"","attrTitle":"","attrRel":"","layer-selectable":"default","layer_action":{"tooltip_event":[],"action":[],"image_link":[],"link_open_in":[],"jump_to_slide":[],"scrollunder_offset":[],"actioncallback":[],"layer_target":[],"link_type":[],"action_delay":[],"toggle_layer_type":[],"toggle_class":[]},"parallax_layer_ddd_zlevel":"front","mask_speed_start":"inherit","mask_ease_start":"inherit","link":"","link_open_in":"same","pers_start":"inherit","pers_end":"inherit"}]', '""'),
(11, 3, 1, '{"background_type":"image","title":"Slide","rs-gallery-type":"gallery","bg_external":"","bg_color":"#E7E7E7","0":"\\u0421\\u0431\\u0440\\u043e\\u0441","slide_bg_youtube":"","slide_bg_vimeo":"","slide_bg_html_mpeg":"","slide_bg_html_webm":"","slide_bg_html_ogv":"","image_source_type":"full","alt_option":"media_library","alt_attr":"","ext_width":"1920","ext_height":"1080","title_option":"media_library","title_attr":"","video_force_cover":"on","video_dotted_overlay":"none","video_ratio":"16:9","video_start_at":"","video_end_at":"","video_loop":"none","video_nextslide":"off","video_force_rewind":"on","video_mute":"on","video_volume":"","video_speed":"1","video_arguments":"hd=1&wmode=opaque&showinfo=0&rel=0;","video_arguments_vim":"title=0&byline=0&portrait=0&api=1","bg_fit":"cover","bg_fit_x":"100","bg_fit_y":"100","bg_position":"center center","bg_position_x":"0","bg_position_y":"0","bg_repeat":"no-repeat","kenburn_effect":"off","kb_start_fit":"100","kb_end_fit":"100","kb_start_offset_x":"0","kb_end_offset_x":"0","kb_start_offset_y":"0","kb_end_offset_y":"0","kb_start_rotate":"0","kb_end_rotate":"0","kb_easing":"Linear.easeNone","kb_duration":"10000","image_id":"1956","delay":"","stoponpurpose":"false","invisibleslide":"false","state":"published","hideslideafter":"0","hideslideonmobile":"off","date_from":"","date_to":"","save_performance":"off","slide_thumb":"","thumb_dimension":"slider","thumb_for_admin":"off","slide_transition":["fade"],"slot_amount":["default"],"transition_rotation":["0"],"transition_duration":["300"],"transition_ease_in":["default"],"transition_ease_out":["default"],"ph-round-arrows-bg-color-custom-slide":"off","ph-round-arrows-bg-color-custom":"0,0,0,0.5","ph-round-arrows-bg-size-custom-slide":"off","ph-round-arrows-bg-size-custom":"40","ph-round-arrows-arrow-color-color-slide":"off","ph-round-arrows-arrow-color-color":"#ffffff","ph-round-arrows-arrow-size-custom-slide":"off","ph-round-arrows-arrow-size-custom":"20","ph-round-arrows-hover-bg-color-color-rgba-slide":"off","ph-round-arrows-hover-bg-color-color-rgba":"#000000","ph-zeus-bullets-color-color-slide":"off","ph-zeus-bullets-color-color":"#ffffff","ph-zeus-bullets-size-custom-slide":"off","ph-zeus-bullets-size-custom":"13","ph-zeus-bullets-img-width-custom-slide":"off","ph-zeus-bullets-img-width-custom":"135","ph-zeus-bullets-img-height-custom-slide":"off","ph-zeus-bullets-img-height-custom":"60","ph-zeus-bullets-title-color-color-slide":"off","ph-zeus-bullets-title-color-color":"#ffffff","ph-zeus-bullets-tooltip-bottom-custom-slide":"off","ph-zeus-bullets-tooltip-bottom-custom":"45","ph-zeus-bullets-title-font-size-custom-slide":"off","ph-zeus-bullets-title-font-size-custom":"13","ph-zeus-bullets-title-line-height-custom-slide":"off","ph-zeus-bullets-title-line-height-custom":"14","ph-round-tabs-font-family-font_family-slide":"off","ph-round-tabs-font-family-font_family":"Roboto","ph-round-tabs-border-color-color-rgba-slide":"off","ph-round-tabs-border-color-color-rgba":"#e5e5e5","ph-round-tabs-border-size-custom-slide":"off","ph-round-tabs-border-size-custom":"1","ph-round-tabs-image-size-custom-slide":"off","ph-round-tabs-image-size-custom":"60","ph-round-tabs-param1-color-color-rgba-slide":"off","ph-round-tabs-param1-color-color-rgba":"rgba(51,51,51,0.5)","ph-round-tabs-param1-size-custom-slide":"off","ph-round-tabs-param1-size-custom":"12","ph-round-tabs-hover-bg-color-color-rgba-slide":"off","ph-round-tabs-hover-bg-color-color-rgba":"#eeeeee","ph-round-tabs-bgcolor-color-rgba-slide":"off","ph-round-tabs-bgcolor-color-rgba":"rgba(0,0,0,0)","ph-round-tabs-contentcolor-color-rgba-slide":"off","ph-round-tabs-contentcolor-color-rgba":"#333333","ph-round-tabs-param2-color-color-rgba-slide":"off","ph-round-tabs-param2-color-color-rgba":"0,0,0,0","ph-round-tabs-param2-size-custom-slide":"off","ph-round-tabs-param2-size-custom":"14","ph-round-thumbs-title-bg-color-rgba-slide":"off","ph-round-thumbs-title-bg-color-rgba":"rgba(0,0,0,0.85)","ph-round-thumbs-title-color-color-rgba-slide":"off","ph-round-thumbs-title-color-color-rgba":"#ffffff","ph-round-thumbs-title-font-size-custom-slide":"off","ph-round-thumbs-title-font-size-custom":"12","params_1":"","params_1_chars":"10","params_2":"","params_2_chars":"10","params_3":"","params_3_chars":"10","params_4":"","params_4_chars":"10","params_5":"","params_5_chars":"10","params_6":"","params_6_chars":"10","params_7":"","params_7_chars":"10","params_8":"","params_8_chars":"10","params_9":"","params_9_chars":"10","params_10":"","params_10_chars":"10","slide_description":"","class_attr":"","id_attr":"","data_attr":"","enable_link":"false","link_type":"regular","link":"","link_open_in":"same","slide_link":"nothing","link_pos":"front","slide_bg_color":"#E7E7E7","slide_bg_external":"","image":"http:\\/\\/starasiaphuket.loc\\/wp-content\\/uploads\\/2016\\/11\\/slide1-1.jpg","0":"\\u0421\\u0431\\u0440\\u043e\\u0441"}', '[{"text":"","type":"text","special_type":null,"subtype":"","specialsettings":{},"unique_id":1,"left":{"desktop":168},"top":{"desktop":289},"internal_class":"","hover":false,"alias":"form","loop_animation":"none","loop_easing":"linearEaseNone","loop_speed":"2","loop_startdeg":-20,"loop_enddeg":20,"loop_xorigin":50,"loop_yorigin":50,"loop_xstart":0,"loop_xend":0,"loop_ystart":0,"loop_yend":0,"loop_zoomstart":"1","loop_zoomend":"1","loop_angle":"0","loop_radius":"10","html_tag":"div","mask_start":false,"mask_end":false,"x_start_reverse":false,"y_start_reverse":false,"x_end_reverse":false,"y_end_reverse":false,"x_rotate_start_reverse":false,"y_rotate_start_reverse":false,"z_rotate_start_reverse":false,"x_rotate_end_reverse":false,"y_rotate_end_reverse":false,"z_rotate_end_reverse":false,"scale_x_start_reverse":false,"scale_y_start_reverse":false,"scale_x_end_reverse":false,"scale_y_end_reverse":false,"skew_x_start_reverse":false,"skew_y_start_reverse":false,"skew_x_end_reverse":false,"skew_y_end_reverse":false,"mask_x_start_reverse":false,"mask_y_start_reverse":false,"mask_x_end_reverse":false,"mask_y_end_reverse":false,"mask_x_start":"0","mask_y_start":"0","mask_x_end":"0","mask_y_end":"0","mask_speed_end":"inherit","mask_ease_end":"inherit","alt_option":"media_library","alt":"","animation":"custom","easing":"Power2.easeInOut","split":"none","endsplit":"none","splitdelay":"10","endsplitdelay":"10","max_height":{"desktop":"auto"},"max_width":{"desktop":"749px"},"video_width":{"desktop":"480"},"video_height":{"desktop":"360"},"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"whitespace":{"desktop":"normal"},"static_start":"1","static_end":"last","speed":300,"align_hor":{"desktop":"left"},"align_vert":{"desktop":"top"},"hiddenunder":false,"resizeme":true,"seo-optimized":false,"link_slide":"nothing","scrollunder_offset":"","style":"","visible-desktop":true,"visible-notebook":true,"visible-tablet":true,"visible-mobile":true,"resize-full":true,"show-on-hover":false,"basealign":"grid","responsive_offset":true,"lazy-load":"auto","image-size":"auto","time":500,"endspeed":300,"endtime":9300,"endanimation":"custom","endeasing":"nothing","width":134,"height":34,"cover_mode":"custom","static_styles":{"font-size":{"desktop":"20"},"line-height":{"desktop":"22"},"font-weight":{"desktop":"400"},"color":{"desktop":"#ffffff"}},"x_start":"inherit","y_start":"inherit","z_start":"inherit","x_end":"inherit","y_end":"inherit","z_end":"inherit","opacity_start":"0","opacity_end":"0","x_rotate_start":"inherit","y_rotate_start":"inherit","z_rotate_start":"inherit","x_rotate_end":"inherit","y_rotate_end":"inherit","z_rotate_end":"inherit","scale_x_start":"inherit","scale_y_start":"inherit","scale_x_end":"inherit","scale_y_end":"inherit","skew_x_start":"inherit","skew_y_start":"inherit","skew_x_end":"inherit","skew_y_end":"inherit","deformation":{"font-family":"","padding":["0","0","0","0"],"font-style":"normal","color-transparency":"1","text-decoration":"none","text-align":"left","text-transform":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing","parallax":"-"},"svg":{"svgstroke-color":"transparent","svgstroke-transparency":"1","svgstroke-dasharray":"0","svgstroke-dashoffset":"0","svgstroke-width":"0","svgstroke-hover-color":"transparent","svgstroke-hover-transparency":"1","svgstroke-hover-dasharray":"0","svgstroke-hover-dashoffset":"0","svgstroke-hover-width":"0"},"deformation-hover":{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"speed":"0","zindex":"auto","easing":"Linear.easeNone","css_cursor":"auto"},"visible":true,"animation_overwrite":"wait","trigger_memory":"keep","serial":0,"split_in_extratime":-10,"split_out_extratime":-10,"endWithSlide":false,"toggle":false,"toggle_use_hover":false,"texttoggle":"","scaleX":{"desktop":""},"scaleY":{"desktop":""},"autolinebreak":true,"scaleProportional":false,"attrID":"","attrClasses":"","attrTitle":"","attrRel":"","layer-selectable":"default","orig-endanim":"Fade-Out","orig-endanim-handle":"fadeout","orig-anim":"Fade-In","orig-anim-handle":"tp-fade","layer_action":{"tooltip_event":[],"action":[],"image_link":[],"link_open_in":[],"jump_to_slide":[],"scrollunder_offset":[],"actioncallback":[],"layer_target":[],"link_type":[],"action_delay":[],"toggle_layer_type":[],"toggle_class":[]},"parallax_layer_ddd_zlevel":"front","mask_speed_start":"inherit","mask_ease_start":"inherit","link":"","link_open_in":"same","pers_start":"inherit","pers_end":"inherit"},{"text":"<div class=\\"ls-mask2\\">\\n\\t<form role=\\"search\\" method=\\"get\\" id=\\"searchform\\" class=\\"searchform\\" action=\\"\\/advanced-search\\/\\">\\n\\t\\t<div class=\\"ls-form\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"min-price\\" class=\\"min-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$1,000\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"max-price\\" class=\\"max-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$500,000\\">\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<select class=\\"selectpicker\\" name=\\"bedrooms\\" data-live-search=\\"false\\" data-live-search-style=\\"begins\\">\\n\\t\\t\\t\\t\\t<option value>Badrooms<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"1\\">1<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"2\\">2<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"3\\">3<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"4\\">4<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"5\\">5<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"any\\">Any<\\/option>\\n\\t\\t\\t\\t<\\/select>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<select name=\\"area\\" class=\\"selectpicker\\" data-live-search=\\"false\\" data-live-search-style=\\"begins\\">\\n\\t\\t\\t\\t\\t<option value>Phuket<\\/option>\\n\\t\\t\\t\\t\\t<option data-parentcity=\\"\\" value=\\"Phang Nga\\">Phang Nga<\\/option>\\n\\t\\t\\t\\t\\t<option data-parentcity=\\"\\" value=\\"Mai Khao\\">Mai Khao<\\/option>\\n\\t\\t\\t\\t\\t<option data-parentcity=\\"\\" value=\\"Nai Yang\\">Nai Yang<\\/option>\\n\\t\\t\\t\\t\\t<option data-parentcity=\\"\\" value=\\"East\\">East<\\/option>\\n\\t\\t\\t\\t<\\/select>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t<input type=\\"text\\" name=\\"daterange\\" value=\\"\\"\\/>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"ls-submit\\">\\n\\t\\t\\t<div class=\\"col-md-12\\">\\n\\t\\t\\t\\t<button class=\\"btn btn-orange\\">Go<\\/button>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t<\\/form>\\n<\\/div>","type":"text","special_type":null,"subtype":"","specialsettings":{},"unique_id":2,"left":{"desktop":198},"top":{"desktop":263},"internal_class":"","hover":false,"alias":"Caption Text2","loop_animation":"none","loop_easing":"linearEaseNone","loop_speed":"2","loop_startdeg":-20,"loop_enddeg":20,"loop_xorigin":50,"loop_yorigin":50,"loop_xstart":0,"loop_xend":0,"loop_ystart":0,"loop_yend":0,"loop_zoomstart":"1","loop_zoomend":"1","loop_angle":"0","loop_radius":"10","html_tag":"div","mask_start":false,"mask_end":false,"x_start_reverse":false,"y_start_reverse":false,"x_end_reverse":false,"y_end_reverse":false,"x_rotate_start_reverse":false,"y_rotate_start_reverse":false,"z_rotate_start_reverse":false,"x_rotate_end_reverse":false,"y_rotate_end_reverse":false,"z_rotate_end_reverse":false,"scale_x_start_reverse":false,"scale_y_start_reverse":false,"scale_x_end_reverse":false,"scale_y_end_reverse":false,"skew_x_start_reverse":false,"skew_y_start_reverse":false,"skew_x_end_reverse":false,"skew_y_end_reverse":false,"mask_x_start_reverse":false,"mask_y_start_reverse":false,"mask_x_end_reverse":false,"mask_y_end_reverse":false,"mask_x_start":"0","mask_y_start":"0","mask_x_end":"0","mask_y_end":"0","mask_speed_end":"inherit","mask_ease_end":"inherit","alt_option":"media_library","alt":"","animation":"tp-fade","easing":"Power2.easeInOut","split":"none","endsplit":"none","splitdelay":"10","endsplitdelay":"10","max_height":{"desktop":"152px"},"max_width":{"desktop":"874px"},"video_width":{"desktop":"480"},"video_height":{"desktop":"360"},"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"whitespace":{"desktop":"normal"},"static_start":"1","static_end":"last","speed":300,"align_hor":{"desktop":"left"},"align_vert":{"desktop":"top"},"hiddenunder":false,"resizeme":true,"seo-optimized":false,"link_slide":"nothing","scrollunder_offset":"","style":"","visible-desktop":true,"visible-notebook":true,"visible-tablet":true,"visible-mobile":true,"resize-full":true,"show-on-hover":false,"basealign":"grid","responsive_offset":true,"lazy-load":"auto","image-size":"auto","time":500,"endspeed":300,"endtime":60300,"endanimation":"fadeout","endeasing":"nothing","width":874,"height":152,"cover_mode":"custom","static_styles":{"font-size":{"desktop":"20"},"line-height":{"desktop":"22"},"font-weight":{"desktop":"400"},"color":{"desktop":"#ffffff"}},"x_start":"inherit","y_start":"inherit","z_start":"inherit","x_end":"inherit","y_end":"inherit","z_end":"inherit","opacity_start":"0","opacity_end":"0","x_rotate_start":"inherit","y_rotate_start":"inherit","z_rotate_start":"inherit","x_rotate_end":"inherit","y_rotate_end":"inherit","z_rotate_end":"inherit","scale_x_start":"inherit","scale_y_start":"inherit","scale_x_end":"inherit","scale_y_end":"inherit","skew_x_start":"inherit","skew_y_start":"inherit","skew_x_end":"inherit","skew_y_end":"inherit","deformation":{"font-family":"","padding":["0","0","0","0"],"font-style":"normal","color-transparency":"1","text-decoration":"none","text-align":"left","text-transform":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing"},"svg":{"svgstroke-color":"transparent","svgstroke-transparency":"1","svgstroke-dasharray":"0","svgstroke-dashoffset":"0","svgstroke-width":"0","svgstroke-hover-color":"transparent","svgstroke-hover-transparency":"1","svgstroke-hover-dasharray":"0","svgstroke-hover-dashoffset":"0","svgstroke-hover-width":"0"},"deformation-hover":{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"speed":"0","zindex":"auto","easing":"Linear.easeNone","css_cursor":"auto"},"visible":true,"animation_overwrite":"wait","trigger_memory":"keep","serial":1,"split_in_extratime":-10,"split_out_extratime":-10,"endWithSlide":true,"toggle":false,"toggle_use_hover":false,"texttoggle":"","scaleX":{"desktop":""},"scaleY":{"desktop":""},"autolinebreak":true,"scaleProportional":false,"attrID":"","attrClasses":"","attrTitle":"","attrRel":"","layer-selectable":"default","layer_action":{"tooltip_event":[],"action":[],"image_link":[],"link_open_in":[],"jump_to_slide":[],"scrollunder_offset":[],"actioncallback":[],"layer_target":[],"link_type":[],"action_delay":[],"toggle_layer_type":[],"toggle_class":[]}}]', '""');
INSERT INTO `wp_revslider_slides` (`id`, `slider_id`, `slide_order`, `params`, `layers`, `settings`) VALUES
(12, 3, 2, '{"background_type":"image","rs-gallery-type":"gallery","bg_external":"","bg_color":"#E7E7E7","0":"\\u0421\\u0431\\u0440\\u043e\\u0441","slide_bg_youtube":"","slide_bg_vimeo":"","slide_bg_html_mpeg":"","slide_bg_html_webm":"","slide_bg_html_ogv":"","image_source_type":"full","alt_option":"media_library","alt_attr":"","ext_width":"1920","ext_height":"1080","title_option":"media_library","title_attr":"","video_force_cover":"on","video_dotted_overlay":"none","video_ratio":"16:9","video_start_at":"","video_end_at":"","video_loop":"none","video_nextslide":"off","video_force_rewind":"on","video_mute":"on","video_volume":"","video_speed":"1","video_arguments":"hd=1&wmode=opaque&showinfo=0&rel=0;","video_arguments_vim":"title=0&byline=0&portrait=0&api=1","bg_fit":"cover","bg_fit_x":"100","bg_fit_y":"100","bg_position":"center center","bg_position_x":"0","bg_position_y":"0","bg_repeat":"no-repeat","kenburn_effect":"off","kb_start_fit":"100","kb_end_fit":"100","kb_start_offset_x":"0","kb_end_offset_x":"0","kb_start_offset_y":"0","kb_end_offset_y":"0","kb_start_rotate":"0","kb_end_rotate":"0","kb_easing":"Linear.easeNone","kb_duration":"10000","image_id":"1957","title":"Slide","delay":"","stoponpurpose":"false","invisibleslide":"false","state":"published","hideslideafter":"0","hideslideonmobile":"off","date_from":"","date_to":"","save_performance":"off","slide_thumb":"","thumb_dimension":"slider","thumb_for_admin":"off","slide_transition":["fade"],"slot_amount":["default"],"transition_rotation":["0"],"transition_duration":["300"],"transition_ease_in":["default"],"transition_ease_out":["default"],"ph-round-arrows-bg-color-custom-slide":"off","ph-round-arrows-bg-color-custom":"0,0,0,0.5","ph-round-arrows-bg-size-custom-slide":"off","ph-round-arrows-bg-size-custom":"40","ph-round-arrows-arrow-color-color-slide":"off","ph-round-arrows-arrow-color-color":"#ffffff","ph-round-arrows-arrow-size-custom-slide":"off","ph-round-arrows-arrow-size-custom":"20","ph-round-arrows-hover-bg-color-color-rgba-slide":"off","ph-round-arrows-hover-bg-color-color-rgba":"#000000","ph-zeus-bullets-color-color-slide":"off","ph-zeus-bullets-color-color":"#ffffff","ph-zeus-bullets-size-custom-slide":"off","ph-zeus-bullets-size-custom":"13","ph-zeus-bullets-img-width-custom-slide":"off","ph-zeus-bullets-img-width-custom":"135","ph-zeus-bullets-img-height-custom-slide":"off","ph-zeus-bullets-img-height-custom":"60","ph-zeus-bullets-title-color-color-slide":"off","ph-zeus-bullets-title-color-color":"#ffffff","ph-zeus-bullets-tooltip-bottom-custom-slide":"off","ph-zeus-bullets-tooltip-bottom-custom":"45","ph-zeus-bullets-title-font-size-custom-slide":"off","ph-zeus-bullets-title-font-size-custom":"13","ph-zeus-bullets-title-line-height-custom-slide":"off","ph-zeus-bullets-title-line-height-custom":"14","ph-round-tabs-font-family-font_family-slide":"off","ph-round-tabs-font-family-font_family":"Roboto","ph-round-tabs-border-color-color-rgba-slide":"off","ph-round-tabs-border-color-color-rgba":"#e5e5e5","ph-round-tabs-border-size-custom-slide":"off","ph-round-tabs-border-size-custom":"1","ph-round-tabs-image-size-custom-slide":"off","ph-round-tabs-image-size-custom":"60","ph-round-tabs-param1-color-color-rgba-slide":"off","ph-round-tabs-param1-color-color-rgba":"rgba(51,51,51,0.5)","ph-round-tabs-param1-size-custom-slide":"off","ph-round-tabs-param1-size-custom":"12","ph-round-tabs-hover-bg-color-color-rgba-slide":"off","ph-round-tabs-hover-bg-color-color-rgba":"#eeeeee","ph-round-tabs-bgcolor-color-rgba-slide":"off","ph-round-tabs-bgcolor-color-rgba":"rgba(0,0,0,0)","ph-round-tabs-contentcolor-color-rgba-slide":"off","ph-round-tabs-contentcolor-color-rgba":"#333333","ph-round-tabs-param2-color-color-rgba-slide":"off","ph-round-tabs-param2-color-color-rgba":"0,0,0,0","ph-round-tabs-param2-size-custom-slide":"off","ph-round-tabs-param2-size-custom":"14","ph-round-thumbs-title-bg-color-rgba-slide":"off","ph-round-thumbs-title-bg-color-rgba":"rgba(0,0,0,0.85)","ph-round-thumbs-title-color-color-rgba-slide":"off","ph-round-thumbs-title-color-color-rgba":"#ffffff","ph-round-thumbs-title-font-size-custom-slide":"off","ph-round-thumbs-title-font-size-custom":"12","params_1":"","params_1_chars":"10","params_2":"","params_2_chars":"10","params_3":"","params_3_chars":"10","params_4":"","params_4_chars":"10","params_5":"","params_5_chars":"10","params_6":"","params_6_chars":"10","params_7":"","params_7_chars":"10","params_8":"","params_8_chars":"10","params_9":"","params_9_chars":"10","params_10":"","params_10_chars":"10","slide_description":"","class_attr":"","id_attr":"","data_attr":"","enable_link":"false","link_type":"regular","link":"","link_open_in":"same","slide_link":"nothing","link_pos":"front","slide_bg_color":"#E7E7E7","slide_bg_external":"","image":"http:\\/\\/starasiaphuket.loc\\/wp-content\\/uploads\\/2016\\/11\\/slide2.jpg","0":"\\u0421\\u0431\\u0440\\u043e\\u0441"}', '[{"text":"<div class=\\"ls-mask\\">\\n\\t<form role=\\"search\\" method=\\"get\\" id=\\"searchform\\" class=\\"searchform\\" action=\\"\\/advanced-search\\/\\">\\n\\t\\t<div class=\\"ls-form\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"min-price\\" class=\\"min-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$1,000\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"max-price\\" class=\\"max-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$500,000\\">\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<select class=\\"selectpicker\\" name=\\"bedrooms\\" data-live-search=\\"false\\" data-live-search-style=\\"begins\\">\\n\\t\\t\\t\\t\\t<option value>Badrooms<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"1\\">1<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"2\\">2<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"3\\">3<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"4\\">4<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"5\\">5<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"any\\">Any<\\/option>\\n\\t\\t\\t\\t<\\/select>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<div class=\\"ls-absol\\">\\n\\t\\t\\t\\t<div class=\\"phuket\\">\\n\\t\\t\\t\\t<div class=\\"mapWrapper\\" id=\\"map\\">\\n\\t\\t\\t\\t<div class=\\"newmap\\" style=\\"height: 335px;\\">\\n\\t\\t\\t\\t<div class=\\"newmapLocations\\">\\n\\t\\t\\t\\t\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 40px; top: 51px\\">\\n\\t\\t\\t\\t<input id=\\"Mai Khao\\" title=\\"Mai Khao\\" type=\\"checkbox\\" class=\\"map-checkbox area-MAI\\" name=\\"area[]\\" value=\\"Mai Khao\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Mai Khao\\" class=\\"MAI\\" title=\\"Mai Khao Beach is Phuket''s longest beach that spans for about 11km. \\">\\n\\t\\t\\t\\t<div>Mai Khao <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 37px; top: 84px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Yang\\" title=\\"Nai Yang\\" type=\\"checkbox\\" class=\\"map-checkbox area-NYG\\" name=\\"area[]\\" value=\\"Nai Yang\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Yang\\" class=\\"NYG\\" title=\\"Nai Yang is noted for its impressive forest of tall casuarina trees, and as a picnic spot for Thais. \\">\\n\\t\\t\\t\\t<div>Nai Yang <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 21px; top: 107px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Thon\\" title=\\"Nai Thon\\" type=\\"checkbox\\" class=\\"map-checkbox area-NAT\\" name=\\"area[]\\" value=\\"Nai Thon\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Thon\\" class=\\"NAT\\" title=\\"Nai Thon is a beautiful stretch of sand that for reasons unknown has been overlooked by large resort developers. \\">\\n\\t\\t\\t\\t<div>Nai Thon <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 26px; top: 125px\\">\\n\\t\\t\\t\\t<input id=\\"Layan\\" title=\\"Layan\\" type=\\"checkbox\\" class=\\"map-checkbox area-LAY\\" name=\\"area[]\\" value=\\"Layan\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Layan\\" class=\\"LAY\\" title=\\"Layan Beach is a beautiful and secluded beach with only a couple of resorts. \\">\\n\\t\\t\\t\\t<div>Layan <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 34px; top: 149px\\">\\n\\t\\t\\t\\t<input id=\\"Bang Tao\\" title=\\"Bang Tao\\" type=\\"checkbox\\" class=\\"map-checkbox area-BAN\\" name=\\"area[]\\" value=\\"Bang Tao\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Bang Tao\\" class=\\"BAN\\" title=\\"Bang Tao is a large open bay with one of Phuket''s longest beaches. \\">\\n\\t\\t\\t\\t<div>Bang Tao <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 23px; top: 166px\\">\\n\\t\\t\\t\\t<input id=\\"Surin\\" title=\\"Surin\\" type=\\"checkbox\\" class=\\"map-checkbox area-SUR\\" name=\\"area[]\\" value=\\"Surin\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Surin\\" class=\\"SUR\\" title=\\"Surin Beach still has a small village atmosphere, but this is gradually changing as more and more major housing developments and hotel projects get underway. \\">\\n\\t\\t\\t\\t<div>Surin <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 23px; top: 188px\\">\\n\\t\\t\\t\\t<input id=\\"Kamala\\" title=\\"Kamala\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAM\\" name=\\"area[]\\" value=\\"Kamala\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kamala\\" class=\\"KAM\\" title=\\"Just north of the lights and noise of Patong lies Kamala beach, a quieter stretch of sand with a more relaxed feel. \\">\\n\\t\\t\\t\\t<div>Kamala <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 36px; top: 229px\\">\\n\\t\\t\\t\\t<input id=\\"Patong\\" title=\\"Patong\\" type=\\"checkbox\\" class=\\"map-checkbox area-PAT\\" name=\\"area[]\\" value=\\"Patong\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Patong\\" class=\\"PAT\\" title=\\"Patong is the most famous beach resort in Phuket, with its wide variety of activities and nightlife. \\">\\n\\t\\t\\t\\t<div>Patong <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 36px; top: 269px\\">\\n\\t\\t\\t\\t<input id=\\"Karon\\" title=\\"Karon\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAR\\" name=\\"area[]\\" value=\\"Karon\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Karon\\" class=\\"KAR\\" title=\\"One of the larger beaches in Phuket, Karon has plenty to offer the holiday visitor as well as long-term residents. \\">\\n\\t\\t\\t\\t<div>Karon <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 38px; top: 291px\\">\\n\\t\\t\\t\\t<input id=\\"Kata\\" title=\\"Kata\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAT\\" name=\\"area[]\\" value=\\"Kata\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kata\\" class=\\"KAT\\" title=\\"Very popular with families, Kata is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. \\">\\n\\t\\t\\t\\t<div>Kata <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 18px; top: 311px\\">\\n\\t\\t\\t\\t<input id=\\"Kata Noi\\" title=\\"Kata Noi\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAN\\" name=\\"area[]\\" value=\\"Kata Noi\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kata Noi\\" class=\\"KAN\\" title=\\"Very popular with families, Kata Noi is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. \\">\\n\\t\\t\\t\\t<div>Kata Noi <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<!-- \\u041a\\u0430\\u0442\\u0430 \\u041d\\u043e\\u0439 -->\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 42px; top: 332px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Harn\\" title=\\"Nai Harn\\" type=\\"checkbox\\" class=\\"map-checkbox area-NAI\\" name=\\"area[]\\" value=\\"13\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Harn\\" class=\\"NAI\\" title=\\"Nai Harn is a quiet beach in the south, near Phromthep Cape view point. \\">\\n\\t\\t\\t\\t<div>Nai Harn <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 67px; top: 219px\\">\\n\\t\\t\\t\\t<input id=\\"Kathu\\" title=\\"Kathu\\" type=\\"checkbox\\" class=\\"map-checkbox area-KTH\\" name=\\"area[]\\" value=\\"Kathu\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kathu\\" class=\\"KTH\\" title=\\"Kathu is located in the middle of the island, between Patong to the west and Phuket City to the east. \\">\\n\\t\\t\\t\\t<div>Kathu <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 101px; top: 233px\\">\\n\\t\\t\\t\\t<input id=\\"Phuket City\\" title=\\"Phuket City\\" type=\\"checkbox\\" class=\\"map-checkbox area-PHU\\" name=\\"area[]\\" value=\\"Phuket City\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Phuket City\\" class=\\"PHU\\" title=\\"Phuket City features an exciting mix of old and new, simple and sophisticated, peaceful and pulsating. \\">\\n\\t\\t\\t\\t<div>Phuket City <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 54px; top: 316px\\">\\n\\t\\t\\t\\t<input id=\\"Rawai\\" title=\\"Rawai\\" type=\\"checkbox\\" class=\\"map-checkbox area-RAW\\" name=\\"area[]\\" value=\\"4\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Rawai\\" class=\\"RAW\\" title=\\"Rawai is home to quite a few of Phuket''s foreign expat population, lending a bohemian and laid-back flavour to the way of life there. \\">\\n\\t\\t\\t\\t<div>Rawai <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 108px; top: 283px\\">\\n\\t\\t\\t\\t<input id=\\"Panwa\\" title=\\"Panwa\\" type=\\"checkbox\\" class=\\"map-checkbox area-PAN\\" name=\\"area[]\\" value=\\"Panwa\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Panwa\\" class=\\"PAN\\" title=\\"Panwa is a quiet cape at the south east of the Island. \\">\\n\\t\\t\\t\\t<div>Panwa <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 129px; top: 94px\\">\\n\\t\\t\\t\\t<input id=\\"East\\" title=\\"East\\" type=\\"checkbox\\" class=\\"map-checkbox area-EAS\\" name=\\"area[]\\" value=\\"East\\"\\/>\\n\\t\\t\\t\\t<label for=\\"East\\" class=\\"EAS\\" title=\\"The east coast of the island includes all areas north of Phuket City on the coastline. \\">\\n\\t\\t\\t\\t<div>East <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 63px; top: 126px\\">\\n\\t\\t\\t\\t<input id=\\"Talang\\" title=\\"Talang\\" type=\\"checkbox\\" class=\\"map-checkbox area-TAL\\" name=\\"area[]\\" value=\\"Talang\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Talang\\" class=\\"TAL\\" title=\\"Talang, close to the main highway which crosses Phuket from north to south is ideal for those looking for a place which is centralized and easily accessible. \\">\\n\\t\\t\\t\\t<div>Talang <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 60px; top: 159px\\">\\n\\t\\t\\t\\t<input id=\\"Cherng Talay\\" title=\\"Cherng Talay\\" type=\\"checkbox\\" class=\\"map-checkbox area-CHE\\" name=\\"area[]\\" value=\\"Cherng Talay\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Cherng Talay\\" class=\\"CHE\\" title=\\"Cherng Talay is a town area towards the west coast, rapidly becoming a very popular area for expatriates \\">\\n\\t\\t\\t\\t<div>Cherng Talay <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 66px; top: 271px\\">\\n\\t\\t\\t\\t<input id=\\"Chalong\\" title=\\"Chalong\\" type=\\"checkbox\\" class=\\"map-checkbox area-CHA\\" name=\\"area[]\\" value=\\"Chalong\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Chalong\\" class=\\"CHA\\" title=\\"A heavily populated area of Phuket, Chalong extends from the southern end of Phuket City down towards Rawai. \\">\\n\\t\\t\\t\\t<div>Chalong <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 34px; top: 4px\\">\\n\\t\\t\\t\\t<input id=\\"Phang Nga\\" title=\\"Phang Nga\\" type=\\"checkbox\\" class=\\"map-checkbox area-PHA\\" name=\\"area[]\\" value=\\"Phang Nga\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Phang Nga\\" class=\\"PHA\\" title=\\"Phang Nga is a province just north of Phuket which is getting increased attention from developers with every year. \\">\\n\\t\\t\\t\\t<div>Phang Nga <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<input type=\\"text\\" name=\\"daterange\\" value=\\"\\"\\/>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"ls-submit\\">\\n\\t\\t\\t<div class=\\"col-md-12\\">\\n\\t\\t\\t\\t<button class=\\"btn btn-orange\\">Go<\\/button>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t<\\/form>\\n<\\/div>","type":"text","special_type":null,"subtype":"","specialsettings":{},"unique_id":1,"left":{"desktop":197},"top":{"desktop":123},"internal_class":"","hover":false,"alias":"Phang Nga Mai Khao N...","loop_animation":"none","loop_easing":"linearEaseNone","loop_speed":"2","loop_startdeg":-20,"loop_enddeg":20,"loop_xorigin":50,"loop_yorigin":50,"loop_xstart":0,"loop_xend":0,"loop_ystart":0,"loop_yend":0,"loop_zoomstart":"1","loop_zoomend":"1","loop_angle":"0","loop_radius":"10","html_tag":"div","mask_start":false,"mask_end":false,"x_start_reverse":false,"y_start_reverse":false,"x_end_reverse":false,"y_end_reverse":false,"x_rotate_start_reverse":false,"y_rotate_start_reverse":false,"z_rotate_start_reverse":false,"x_rotate_end_reverse":false,"y_rotate_end_reverse":false,"z_rotate_end_reverse":false,"scale_x_start_reverse":false,"scale_y_start_reverse":false,"scale_x_end_reverse":false,"scale_y_end_reverse":false,"skew_x_start_reverse":false,"skew_y_start_reverse":false,"skew_x_end_reverse":false,"skew_y_end_reverse":false,"mask_x_start_reverse":false,"mask_y_start_reverse":false,"mask_x_end_reverse":false,"mask_y_end_reverse":false,"mask_x_start":"0","mask_y_start":"0","mask_x_end":"0","mask_y_end":"0","mask_speed_end":"inherit","mask_ease_end":"inherit","alt_option":"media_library","alt":"","animation":"tp-fade","easing":"Power2.easeInOut","split":"none","endsplit":"none","splitdelay":"10","endsplitdelay":"10","max_height":{"desktop":"457px"},"max_width":{"desktop":"880px"},"video_width":{"desktop":"480"},"video_height":{"desktop":"360"},"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"whitespace":{"desktop":"normal"},"static_start":"1","static_end":"last","speed":300,"align_hor":{"desktop":"left"},"align_vert":{"desktop":"top"},"hiddenunder":false,"resizeme":true,"seo-optimized":false,"link_slide":"nothing","scrollunder_offset":"","style":"","visible-desktop":true,"visible-notebook":true,"visible-tablet":true,"visible-mobile":true,"resize-full":true,"show-on-hover":false,"basealign":"grid","responsive_offset":true,"lazy-load":"auto","image-size":"auto","time":500,"endspeed":300,"endtime":60300,"endanimation":"fadeout","endeasing":"nothing","width":880,"height":457,"cover_mode":"custom","static_styles":{"font-size":{"desktop":"20"},"line-height":{"desktop":"22"},"font-weight":{"desktop":"400"},"color":{"desktop":"#ffffff"}},"x_start":"inherit","y_start":"inherit","z_start":"inherit","x_end":"inherit","y_end":"inherit","z_end":"inherit","opacity_start":"0","opacity_end":"0","x_rotate_start":"inherit","y_rotate_start":"inherit","z_rotate_start":"inherit","x_rotate_end":"inherit","y_rotate_end":"inherit","z_rotate_end":"inherit","scale_x_start":"inherit","scale_y_start":"inherit","scale_x_end":"inherit","scale_y_end":"inherit","skew_x_start":"inherit","skew_y_start":"inherit","skew_x_end":"inherit","skew_y_end":"inherit","deformation":{"font-family":"","padding":["0","0","0","0"],"font-style":"normal","color-transparency":"1","text-decoration":"none","text-align":"left","text-transform":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing"},"svg":{"svgstroke-color":"transparent","svgstroke-transparency":"1","svgstroke-dasharray":"0","svgstroke-dashoffset":"0","svgstroke-width":"0","svgstroke-hover-color":"transparent","svgstroke-hover-transparency":"1","svgstroke-hover-dasharray":"0","svgstroke-hover-dashoffset":"0","svgstroke-hover-width":"0"},"deformation-hover":{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"speed":"0","zindex":"auto","easing":"Linear.easeNone","css_cursor":"auto"},"visible":true,"animation_overwrite":"wait","trigger_memory":"keep","serial":0,"split_in_extratime":-10,"split_out_extratime":-10,"endWithSlide":true,"toggle":false,"toggle_use_hover":false,"texttoggle":"","scaleX":{"desktop":""},"scaleY":{"desktop":""},"autolinebreak":true,"scaleProportional":false,"attrID":"","attrClasses":"","attrTitle":"","attrRel":"","layer-selectable":"default","layer_action":{"tooltip_event":[],"action":[],"image_link":[],"link_open_in":[],"jump_to_slide":[],"scrollunder_offset":[],"actioncallback":[],"layer_target":[],"link_type":[],"action_delay":[],"toggle_layer_type":[],"toggle_class":[]}}]', '""');
INSERT INTO `wp_revslider_slides` (`id`, `slider_id`, `slide_order`, `params`, `layers`, `settings`) VALUES
(13, 3, 3, '{"background_type":"image","rs-gallery-type":"gallery","bg_external":"","bg_color":"#E7E7E7","0":"\\u0421\\u0431\\u0440\\u043e\\u0441","slide_bg_youtube":"","slide_bg_vimeo":"","slide_bg_html_mpeg":"","slide_bg_html_webm":"","slide_bg_html_ogv":"","image_source_type":"full","alt_option":"media_library","alt_attr":"","ext_width":"1920","ext_height":"1080","title_option":"media_library","title_attr":"","video_force_cover":"on","video_dotted_overlay":"none","video_ratio":"16:9","video_start_at":"","video_end_at":"","video_loop":"none","video_nextslide":"off","video_force_rewind":"on","video_mute":"on","video_volume":"","video_speed":"1","video_arguments":"hd=1&wmode=opaque&showinfo=0&rel=0;","video_arguments_vim":"title=0&byline=0&portrait=0&api=1","bg_fit":"cover","bg_fit_x":"100","bg_fit_y":"100","bg_position":"center center","bg_position_x":"0","bg_position_y":"0","bg_repeat":"no-repeat","kenburn_effect":"off","kb_start_fit":"100","kb_end_fit":"100","kb_start_offset_x":"0","kb_end_offset_x":"0","kb_start_offset_y":"0","kb_end_offset_y":"0","kb_start_rotate":"0","kb_end_rotate":"0","kb_easing":"Linear.easeNone","kb_duration":"10000","image_id":"1958","title":"Slide","delay":"","stoponpurpose":"false","invisibleslide":"false","state":"published","hideslideafter":"0","hideslideonmobile":"off","date_from":"","date_to":"","save_performance":"off","slide_thumb":"","thumb_dimension":"slider","thumb_for_admin":"off","slide_transition":["fade"],"slot_amount":["default"],"transition_rotation":["0"],"transition_duration":["300"],"transition_ease_in":["default"],"transition_ease_out":["default"],"ph-round-arrows-bg-color-custom-slide":"off","ph-round-arrows-bg-color-custom":"0,0,0,0.5","ph-round-arrows-bg-size-custom-slide":"off","ph-round-arrows-bg-size-custom":"40","ph-round-arrows-arrow-color-color-slide":"off","ph-round-arrows-arrow-color-color":"#ffffff","ph-round-arrows-arrow-size-custom-slide":"off","ph-round-arrows-arrow-size-custom":"20","ph-round-arrows-hover-bg-color-color-rgba-slide":"off","ph-round-arrows-hover-bg-color-color-rgba":"#000000","ph-zeus-bullets-color-color-slide":"off","ph-zeus-bullets-color-color":"#ffffff","ph-zeus-bullets-size-custom-slide":"off","ph-zeus-bullets-size-custom":"13","ph-zeus-bullets-img-width-custom-slide":"off","ph-zeus-bullets-img-width-custom":"135","ph-zeus-bullets-img-height-custom-slide":"off","ph-zeus-bullets-img-height-custom":"60","ph-zeus-bullets-title-color-color-slide":"off","ph-zeus-bullets-title-color-color":"#ffffff","ph-zeus-bullets-tooltip-bottom-custom-slide":"off","ph-zeus-bullets-tooltip-bottom-custom":"45","ph-zeus-bullets-title-font-size-custom-slide":"off","ph-zeus-bullets-title-font-size-custom":"13","ph-zeus-bullets-title-line-height-custom-slide":"off","ph-zeus-bullets-title-line-height-custom":"14","ph-round-tabs-font-family-font_family-slide":"off","ph-round-tabs-font-family-font_family":"Roboto","ph-round-tabs-border-color-color-rgba-slide":"off","ph-round-tabs-border-color-color-rgba":"#e5e5e5","ph-round-tabs-border-size-custom-slide":"off","ph-round-tabs-border-size-custom":"1","ph-round-tabs-image-size-custom-slide":"off","ph-round-tabs-image-size-custom":"60","ph-round-tabs-param1-color-color-rgba-slide":"off","ph-round-tabs-param1-color-color-rgba":"rgba(51,51,51,0.5)","ph-round-tabs-param1-size-custom-slide":"off","ph-round-tabs-param1-size-custom":"12","ph-round-tabs-hover-bg-color-color-rgba-slide":"off","ph-round-tabs-hover-bg-color-color-rgba":"#eeeeee","ph-round-tabs-bgcolor-color-rgba-slide":"off","ph-round-tabs-bgcolor-color-rgba":"rgba(0,0,0,0)","ph-round-tabs-contentcolor-color-rgba-slide":"off","ph-round-tabs-contentcolor-color-rgba":"#333333","ph-round-tabs-param2-color-color-rgba-slide":"off","ph-round-tabs-param2-color-color-rgba":"0,0,0,0","ph-round-tabs-param2-size-custom-slide":"off","ph-round-tabs-param2-size-custom":"14","ph-round-thumbs-title-bg-color-rgba-slide":"off","ph-round-thumbs-title-bg-color-rgba":"rgba(0,0,0,0.85)","ph-round-thumbs-title-color-color-rgba-slide":"off","ph-round-thumbs-title-color-color-rgba":"#ffffff","ph-round-thumbs-title-font-size-custom-slide":"off","ph-round-thumbs-title-font-size-custom":"12","params_1":"","params_1_chars":"10","params_2":"","params_2_chars":"10","params_3":"","params_3_chars":"10","params_4":"","params_4_chars":"10","params_5":"","params_5_chars":"10","params_6":"","params_6_chars":"10","params_7":"","params_7_chars":"10","params_8":"","params_8_chars":"10","params_9":"","params_9_chars":"10","params_10":"","params_10_chars":"10","slide_description":"","class_attr":"","id_attr":"","data_attr":"","enable_link":"false","link_type":"regular","link":"","link_open_in":"same","slide_link":"nothing","link_pos":"front","slide_bg_color":"#E7E7E7","slide_bg_external":"","image":"http:\\/\\/starasiaphuket.loc\\/wp-content\\/uploads\\/2016\\/11\\/slide3.jpg","0":"\\u0421\\u0431\\u0440\\u043e\\u0441"}', '[{"text":"<div class=\\"ls-mask\\">\\n\\t<form role=\\"search\\" method=\\"get\\" id=\\"searchform\\" class=\\"searchform\\" action=\\"\\/advanced-search\\/\\">\\n\\t\\t<div class=\\"ls-form\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"min-price\\" class=\\"min-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$1,000\\">\\n\\t\\t\\t<input type=\\"hidden\\" name=\\"max-price\\" class=\\"max-price-range-hidden range-input\\" readonly=\\"\\" value=\\"$500,000\\">\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<select class=\\"selectpicker\\" name=\\"bedrooms\\" data-live-search=\\"false\\" data-live-search-style=\\"begins\\">\\n\\t\\t\\t\\t\\t<option value>Badrooms<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"1\\">1<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"2\\">2<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"3\\">3<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"4\\">4<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"5\\">5<\\/option>\\n\\t\\t\\t\\t\\t<option value=\\"any\\">Any<\\/option>\\n\\t\\t\\t\\t<\\/select>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<div class=\\"ls-absol\\">\\n\\t\\t\\t\\t<div class=\\"phuket\\">\\n\\t\\t\\t\\t<div class=\\"mapWrapper\\" id=\\"map\\">\\n\\t\\t\\t\\t<div class=\\"newmap\\" style=\\"height: 335px;\\">\\n\\t\\t\\t\\t<div class=\\"newmapLocations\\">\\n\\t\\t\\t\\t\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 40px; top: 51px\\">\\n\\t\\t\\t\\t<input id=\\"Mai Khao\\" title=\\"Mai Khao\\" type=\\"checkbox\\" class=\\"map-checkbox area-MAI\\" name=\\"area[]\\" value=\\"Mai Khao\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Mai Khao\\" class=\\"MAI\\" title=\\"Mai Khao Beach is Phuket''s longest beach that spans for about 11km. \\">\\n\\t\\t\\t\\t<div>Mai Khao <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 37px; top: 84px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Yang\\" title=\\"Nai Yang\\" type=\\"checkbox\\" class=\\"map-checkbox area-NYG\\" name=\\"area[]\\" value=\\"Nai Yang\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Yang\\" class=\\"NYG\\" title=\\"Nai Yang is noted for its impressive forest of tall casuarina trees, and as a picnic spot for Thais. \\">\\n\\t\\t\\t\\t<div>Nai Yang <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 21px; top: 107px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Thon\\" title=\\"Nai Thon\\" type=\\"checkbox\\" class=\\"map-checkbox area-NAT\\" name=\\"area[]\\" value=\\"Nai Thon\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Thon\\" class=\\"NAT\\" title=\\"Nai Thon is a beautiful stretch of sand that for reasons unknown has been overlooked by large resort developers. \\">\\n\\t\\t\\t\\t<div>Nai Thon <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 26px; top: 125px\\">\\n\\t\\t\\t\\t<input id=\\"Layan\\" title=\\"Layan\\" type=\\"checkbox\\" class=\\"map-checkbox area-LAY\\" name=\\"area[]\\" value=\\"Layan\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Layan\\" class=\\"LAY\\" title=\\"Layan Beach is a beautiful and secluded beach with only a couple of resorts. \\">\\n\\t\\t\\t\\t<div>Layan <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 34px; top: 149px\\">\\n\\t\\t\\t\\t<input id=\\"Bang Tao\\" title=\\"Bang Tao\\" type=\\"checkbox\\" class=\\"map-checkbox area-BAN\\" name=\\"area[]\\" value=\\"Bang Tao\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Bang Tao\\" class=\\"BAN\\" title=\\"Bang Tao is a large open bay with one of Phuket''s longest beaches. \\">\\n\\t\\t\\t\\t<div>Bang Tao <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 23px; top: 166px\\">\\n\\t\\t\\t\\t<input id=\\"Surin\\" title=\\"Surin\\" type=\\"checkbox\\" class=\\"map-checkbox area-SUR\\" name=\\"area[]\\" value=\\"Surin\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Surin\\" class=\\"SUR\\" title=\\"Surin Beach still has a small village atmosphere, but this is gradually changing as more and more major housing developments and hotel projects get underway. \\">\\n\\t\\t\\t\\t<div>Surin <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 23px; top: 188px\\">\\n\\t\\t\\t\\t<input id=\\"Kamala\\" title=\\"Kamala\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAM\\" name=\\"area[]\\" value=\\"Kamala\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kamala\\" class=\\"KAM\\" title=\\"Just north of the lights and noise of Patong lies Kamala beach, a quieter stretch of sand with a more relaxed feel. \\">\\n\\t\\t\\t\\t<div>Kamala <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 36px; top: 229px\\">\\n\\t\\t\\t\\t<input id=\\"Patong\\" title=\\"Patong\\" type=\\"checkbox\\" class=\\"map-checkbox area-PAT\\" name=\\"area[]\\" value=\\"Patong\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Patong\\" class=\\"PAT\\" title=\\"Patong is the most famous beach resort in Phuket, with its wide variety of activities and nightlife. \\">\\n\\t\\t\\t\\t<div>Patong <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 36px; top: 269px\\">\\n\\t\\t\\t\\t<input id=\\"Karon\\" title=\\"Karon\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAR\\" name=\\"area[]\\" value=\\"Karon\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Karon\\" class=\\"KAR\\" title=\\"One of the larger beaches in Phuket, Karon has plenty to offer the holiday visitor as well as long-term residents. \\">\\n\\t\\t\\t\\t<div>Karon <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 38px; top: 291px\\">\\n\\t\\t\\t\\t<input id=\\"Kata\\" title=\\"Kata\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAT\\" name=\\"area[]\\" value=\\"Kata\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kata\\" class=\\"KAT\\" title=\\"Very popular with families, Kata is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. \\">\\n\\t\\t\\t\\t<div>Kata <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 18px; top: 311px\\">\\n\\t\\t\\t\\t<input id=\\"Kata Noi\\" title=\\"Kata Noi\\" type=\\"checkbox\\" class=\\"map-checkbox area-KAN\\" name=\\"area[]\\" value=\\"Kata Noi\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kata Noi\\" class=\\"KAN\\" title=\\"Very popular with families, Kata Noi is an all round favourite due to its spectacular beach, great restaurants and lively but not raucous nightlife. \\">\\n\\t\\t\\t\\t<div>Kata Noi <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<!-- \\u041a\\u0430\\u0442\\u0430 \\u041d\\u043e\\u0439 -->\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 42px; top: 332px\\">\\n\\t\\t\\t\\t<input id=\\"Nai Harn\\" title=\\"Nai Harn\\" type=\\"checkbox\\" class=\\"map-checkbox area-NAI\\" name=\\"area[]\\" value=\\"13\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Nai Harn\\" class=\\"NAI\\" title=\\"Nai Harn is a quiet beach in the south, near Phromthep Cape view point. \\">\\n\\t\\t\\t\\t<div>Nai Harn <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 67px; top: 219px\\">\\n\\t\\t\\t\\t<input id=\\"Kathu\\" title=\\"Kathu\\" type=\\"checkbox\\" class=\\"map-checkbox area-KTH\\" name=\\"area[]\\" value=\\"Kathu\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Kathu\\" class=\\"KTH\\" title=\\"Kathu is located in the middle of the island, between Patong to the west and Phuket City to the east. \\">\\n\\t\\t\\t\\t<div>Kathu <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 101px; top: 233px\\">\\n\\t\\t\\t\\t<input id=\\"Phuket City\\" title=\\"Phuket City\\" type=\\"checkbox\\" class=\\"map-checkbox area-PHU\\" name=\\"area[]\\" value=\\"Phuket City\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Phuket City\\" class=\\"PHU\\" title=\\"Phuket City features an exciting mix of old and new, simple and sophisticated, peaceful and pulsating. \\">\\n\\t\\t\\t\\t<div>Phuket City <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 54px; top: 316px\\">\\n\\t\\t\\t\\t<input id=\\"Rawai\\" title=\\"Rawai\\" type=\\"checkbox\\" class=\\"map-checkbox area-RAW\\" name=\\"area[]\\" value=\\"4\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Rawai\\" class=\\"RAW\\" title=\\"Rawai is home to quite a few of Phuket''s foreign expat population, lending a bohemian and laid-back flavour to the way of life there. \\">\\n\\t\\t\\t\\t<div>Rawai <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 108px; top: 283px\\">\\n\\t\\t\\t\\t<input id=\\"Panwa\\" title=\\"Panwa\\" type=\\"checkbox\\" class=\\"map-checkbox area-PAN\\" name=\\"area[]\\" value=\\"Panwa\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Panwa\\" class=\\"PAN\\" title=\\"Panwa is a quiet cape at the south east of the Island. \\">\\n\\t\\t\\t\\t<div>Panwa <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 129px; top: 94px\\">\\n\\t\\t\\t\\t<input id=\\"East\\" title=\\"East\\" type=\\"checkbox\\" class=\\"map-checkbox area-EAS\\" name=\\"area[]\\" value=\\"East\\"\\/>\\n\\t\\t\\t\\t<label for=\\"East\\" class=\\"EAS\\" title=\\"The east coast of the island includes all areas north of Phuket City on the coastline. \\">\\n\\t\\t\\t\\t<div>East <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 63px; top: 126px\\">\\n\\t\\t\\t\\t<input id=\\"Talang\\" title=\\"Talang\\" type=\\"checkbox\\" class=\\"map-checkbox area-TAL\\" name=\\"area[]\\" value=\\"Talang\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Talang\\" class=\\"TAL\\" title=\\"Talang, close to the main highway which crosses Phuket from north to south is ideal for those looking for a place which is centralized and easily accessible. \\">\\n\\t\\t\\t\\t<div>Talang <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 60px; top: 159px\\">\\n\\t\\t\\t\\t<input id=\\"Cherng Talay\\" title=\\"Cherng Talay\\" type=\\"checkbox\\" class=\\"map-checkbox area-CHE\\" name=\\"area[]\\" value=\\"Cherng Talay\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Cherng Talay\\" class=\\"CHE\\" title=\\"Cherng Talay is a town area towards the west coast, rapidly becoming a very popular area for expatriates \\">\\n\\t\\t\\t\\t<div>Cherng Talay <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 66px; top: 271px\\">\\n\\t\\t\\t\\t<input id=\\"Chalong\\" title=\\"Chalong\\" type=\\"checkbox\\" class=\\"map-checkbox area-CHA\\" name=\\"area[]\\" value=\\"Chalong\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Chalong\\" class=\\"CHA\\" title=\\"A heavily populated area of Phuket, Chalong extends from the southern end of Phuket City down towards Rawai. \\">\\n\\t\\t\\t\\t<div>Chalong <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<div class=\\"loc\\" style=\\"height: 0px; position: absolute; left: 34px; top: 4px\\">\\n\\t\\t\\t\\t<input id=\\"Phang Nga\\" title=\\"Phang Nga\\" type=\\"checkbox\\" class=\\"map-checkbox area-PHA\\" name=\\"area[]\\" value=\\"Phang Nga\\"\\/>\\n\\t\\t\\t\\t<label for=\\"Phang Nga\\" class=\\"PHA\\" title=\\"Phang Nga is a province just north of Phuket which is getting increased attention from developers with every year. \\">\\n\\t\\t\\t\\t<div>Phang Nga <\\/div>\\n\\t\\t\\t\\t<\\/label>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t\\t<\\/div>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"col-md-4 col-sm-4\\">\\n\\t\\t\\t\\t<input type=\\"text\\" name=\\"daterange\\" value=\\"\\"\\/>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"ls-submit\\">\\n\\t\\t\\t<div class=\\"col-md-12\\">\\n\\t\\t\\t\\t<button class=\\"btn btn-orange\\">Go<\\/button>\\n\\t\\t\\t<\\/div>\\n\\t\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t\\t<\\/div>\\n\\t\\t<div class=\\"clearfix\\"><\\/div>\\n\\t<\\/form>\\n<\\/div>","type":"text","special_type":null,"subtype":"","specialsettings":{},"unique_id":1,"left":{"desktop":197},"top":{"desktop":123},"internal_class":"","hover":false,"alias":"Phang Nga Mai Khao N...","loop_animation":"none","loop_easing":"linearEaseNone","loop_speed":"2","loop_startdeg":-20,"loop_enddeg":20,"loop_xorigin":50,"loop_yorigin":50,"loop_xstart":0,"loop_xend":0,"loop_ystart":0,"loop_yend":0,"loop_zoomstart":"1","loop_zoomend":"1","loop_angle":"0","loop_radius":"10","html_tag":"div","mask_start":false,"mask_end":false,"x_start_reverse":false,"y_start_reverse":false,"x_end_reverse":false,"y_end_reverse":false,"x_rotate_start_reverse":false,"y_rotate_start_reverse":false,"z_rotate_start_reverse":false,"x_rotate_end_reverse":false,"y_rotate_end_reverse":false,"z_rotate_end_reverse":false,"scale_x_start_reverse":false,"scale_y_start_reverse":false,"scale_x_end_reverse":false,"scale_y_end_reverse":false,"skew_x_start_reverse":false,"skew_y_start_reverse":false,"skew_x_end_reverse":false,"skew_y_end_reverse":false,"mask_x_start_reverse":false,"mask_y_start_reverse":false,"mask_x_end_reverse":false,"mask_y_end_reverse":false,"mask_x_start":"0","mask_y_start":"0","mask_x_end":"0","mask_y_end":"0","mask_speed_end":"inherit","mask_ease_end":"inherit","alt_option":"media_library","alt":"","animation":"tp-fade","easing":"Power2.easeInOut","split":"none","endsplit":"none","splitdelay":"10","endsplitdelay":"10","max_height":{"desktop":"457px"},"max_width":{"desktop":"880px"},"video_width":{"desktop":"480"},"video_height":{"desktop":"360"},"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"whitespace":{"desktop":"normal"},"static_start":"1","static_end":"last","speed":300,"align_hor":{"desktop":"left"},"align_vert":{"desktop":"top"},"hiddenunder":false,"resizeme":true,"seo-optimized":false,"link_slide":"nothing","scrollunder_offset":"","style":"","visible-desktop":true,"visible-notebook":true,"visible-tablet":true,"visible-mobile":true,"resize-full":true,"show-on-hover":false,"basealign":"grid","responsive_offset":true,"lazy-load":"auto","image-size":"auto","time":500,"endspeed":300,"endtime":60300,"endanimation":"fadeout","endeasing":"nothing","width":880,"height":457,"cover_mode":"custom","static_styles":{"font-size":{"desktop":"20"},"line-height":{"desktop":"22"},"font-weight":{"desktop":"400"},"color":{"desktop":"#ffffff"}},"x_start":"inherit","y_start":"inherit","z_start":"inherit","x_end":"inherit","y_end":"inherit","z_end":"inherit","opacity_start":"0","opacity_end":"0","x_rotate_start":"inherit","y_rotate_start":"inherit","z_rotate_start":"inherit","x_rotate_end":"inherit","y_rotate_end":"inherit","z_rotate_end":"inherit","scale_x_start":"inherit","scale_y_start":"inherit","scale_x_end":"inherit","scale_y_end":"inherit","skew_x_start":"inherit","skew_y_start":"inherit","skew_x_end":"inherit","skew_y_end":"inherit","deformation":{"font-family":"","padding":["0","0","0","0"],"font-style":"normal","color-transparency":"1","text-decoration":"none","text-align":"left","text-transform":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing"},"svg":{"svgstroke-color":"transparent","svgstroke-transparency":"1","svgstroke-dasharray":"0","svgstroke-dashoffset":"0","svgstroke-width":"0","svgstroke-hover-color":"transparent","svgstroke-hover-transparency":"1","svgstroke-hover-dasharray":"0","svgstroke-hover-dashoffset":"0","svgstroke-hover-width":"0"},"deformation-hover":{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"speed":"0","zindex":"auto","easing":"Linear.easeNone","css_cursor":"auto"},"visible":true,"animation_overwrite":"wait","trigger_memory":"keep","serial":0,"split_in_extratime":-10,"split_out_extratime":-10,"endWithSlide":true,"toggle":false,"toggle_use_hover":false,"texttoggle":"","scaleX":{"desktop":""},"scaleY":{"desktop":""},"autolinebreak":true,"scaleProportional":false,"attrID":"","attrClasses":"","attrTitle":"","attrRel":"","layer-selectable":"default","layer_action":{"tooltip_event":[],"action":[],"image_link":[],"link_open_in":[],"jump_to_slide":[],"scrollunder_offset":[],"actioncallback":[],"layer_target":[],"link_type":[],"action_delay":[],"toggle_layer_type":[],"toggle_class":[]}},{"text":"Here will be a title","type":"text","special_type":null,"subtype":"","specialsettings":{},"unique_id":2,"left":{"desktop":90},"top":{"desktop":53},"internal_class":"","hover":false,"alias":"Lorem ipsum","loop_animation":"none","loop_easing":"linearEaseNone","loop_speed":"2","loop_startdeg":-20,"loop_enddeg":20,"loop_xorigin":50,"loop_yorigin":50,"loop_xstart":0,"loop_xend":0,"loop_ystart":0,"loop_yend":0,"loop_zoomstart":"1","loop_zoomend":"1","loop_angle":"0","loop_radius":"10","html_tag":"div","mask_start":false,"mask_end":false,"x_start_reverse":false,"y_start_reverse":false,"x_end_reverse":false,"y_end_reverse":false,"x_rotate_start_reverse":false,"y_rotate_start_reverse":false,"z_rotate_start_reverse":false,"x_rotate_end_reverse":false,"y_rotate_end_reverse":false,"z_rotate_end_reverse":false,"scale_x_start_reverse":false,"scale_y_start_reverse":false,"scale_x_end_reverse":false,"scale_y_end_reverse":false,"skew_x_start_reverse":false,"skew_y_start_reverse":false,"skew_x_end_reverse":false,"skew_y_end_reverse":false,"mask_x_start_reverse":false,"mask_y_start_reverse":false,"mask_x_end_reverse":false,"mask_y_end_reverse":false,"mask_x_start":"0","mask_y_start":"0","mask_x_end":"0","mask_y_end":"0","mask_speed_end":"inherit","mask_ease_end":"inherit","alt_option":"media_library","alt":"","animation":"tp-fade","easing":"Power2.easeInOut","split":"none","endsplit":"none","splitdelay":"10","endsplitdelay":"10","max_height":{"desktop":"24px"},"max_width":{"desktop":"1061px"},"video_width":{"desktop":"480"},"video_height":{"desktop":"360"},"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"whitespace":{"desktop":"normal"},"static_start":"1","static_end":"last","speed":300,"align_hor":{"desktop":"left"},"align_vert":{"desktop":"top"},"hiddenunder":false,"resizeme":true,"seo-optimized":false,"link_slide":"nothing","scrollunder_offset":"","style":"","visible-desktop":true,"visible-notebook":true,"visible-tablet":true,"visible-mobile":true,"resize-full":true,"show-on-hover":false,"basealign":"grid","responsive_offset":true,"lazy-load":"auto","image-size":"auto","time":500,"endspeed":300,"endtime":60300,"endanimation":"fadeout","endeasing":"nothing","width":1061,"height":24,"cover_mode":"custom","static_styles":{"font-size":{"desktop":"20"},"line-height":{"desktop":"22"},"font-weight":{"desktop":"400"},"color":{"desktop":"#ffffff"}},"x_start":"inherit","y_start":"inherit","z_start":"inherit","x_end":"inherit","y_end":"inherit","z_end":"inherit","opacity_start":"0","opacity_end":"0","x_rotate_start":"inherit","y_rotate_start":"inherit","z_rotate_start":"inherit","x_rotate_end":"inherit","y_rotate_end":"inherit","z_rotate_end":"inherit","scale_x_start":"inherit","scale_y_start":"inherit","scale_x_end":"inherit","scale_y_end":"inherit","skew_x_start":"inherit","skew_y_start":"inherit","skew_x_end":"inherit","skew_y_end":"inherit","deformation":{"font-family":"","padding":["0","0","0","0"],"font-style":"normal","color-transparency":"1","text-decoration":"none","text-align":"center","text-transform":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0","0","0","0"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_origin_x":"50","2d_origin_y":"50","pers":"600","corner_left":"nothing","corner_right":"nothing"},"svg":{"svgstroke-color":"transparent","svgstroke-transparency":"1","svgstroke-dasharray":"0","svgstroke-dashoffset":"0","svgstroke-width":"0","svgstroke-hover-color":"transparent","svgstroke-hover-transparency":"1","svgstroke-hover-dasharray":"0","svgstroke-hover-dashoffset":"0","svgstroke-hover-width":"0"},"deformation-hover":{"color":"#000000","color-transparency":"1","text-decoration":"none","background-color":"transparent","background-transparency":"1","border-color":"transparent","border-transparency":"1","border-style":"none","border-width":"0","border-radius":["0px","0px","0px","0px"],"x":0,"y":0,"z":0,"skewx":"0","skewy":"0","scalex":"1","scaley":"1","opacity":"1","xrotate":0,"yrotate":0,"2d_rotation":0,"2d_origin_x":50,"2d_origin_y":50,"speed":"0","zindex":"auto","easing":"Linear.easeNone","css_cursor":"auto"},"visible":true,"animation_overwrite":"wait","trigger_memory":"keep","serial":1,"split_in_extratime":-10,"split_out_extratime":-10,"endWithSlide":true,"toggle":false,"toggle_use_hover":false,"texttoggle":"","scaleX":{"desktop":""},"scaleY":{"desktop":""},"autolinebreak":true,"scaleProportional":false,"attrID":"","attrClasses":"","attrTitle":"","attrRel":"","layer-selectable":"default","layer_action":{"tooltip_event":[],"action":[],"image_link":[],"link_open_in":[],"jump_to_slide":[],"scrollunder_offset":[],"actioncallback":[],"layer_target":[],"link_type":[],"action_delay":[],"toggle_layer_type":[],"toggle_class":[]}}]', '""');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_revslider_static_slides`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_static_slides` (
  `id` int(9) NOT NULL,
  `slider_id` int(9) NOT NULL,
  `params` longtext NOT NULL,
  `layers` longtext NOT NULL,
  `settings` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_termmeta`
--

CREATE TABLE IF NOT EXISTS `wp_termmeta` (
  `meta_id` bigint(20) unsigned NOT NULL,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wp_terms`
--

CREATE TABLE IF NOT EXISTS `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Без рубрики', '%d0%b1%d0%b5%d0%b7-%d1%80%d1%83%d0%b1%d1%80%d0%b8%d0%ba%d0%b8', 0),
(2, 'Business', 'business', 0),
(3, 'Construction', 'construction', 0),
(4, 'Marketing', 'marketing', 0),
(5, 'Real Estate', 'real-estate', 0),
(6, 'Uncategorized', 'uncategorized', 0),
(7, 'Apartment', 'apartment', 0),
(8, 'Business Development', 'business-development', 0),
(9, 'House for families', 'house-for-families', 0),
(10, 'Houzez', 'houzez', 0),
(11, 'Luxury', 'luxury', 0),
(12, 'Real Estate', 'real-estate', 0),
(13, 'Air Conditioning', 'air-conditioning', 0),
(14, 'Apartment', 'apartment', 0),
(15, 'Barbeque', 'barbeque', 0),
(16, 'Brooklyn', 'brooklyn', 0),
(17, 'Chicago', 'chicago', 0),
(18, 'Chicago', 'chicago', 0),
(19, 'Condo', 'condo', 0),
(20, 'Dryer', 'dryer', 0),
(21, 'Farm', 'farm', 0),
(22, 'Florida', 'florida', 0),
(23, 'For Rent', 'for-rent', 0),
(24, 'For Sale', 'for-sale', 0),
(25, 'Foreclosures', 'foreclosures', 0),
(26, 'Gym', 'gym', 0),
(27, 'Land', 'land', 0),
(28, 'Laundry', 'laundry', 0),
(29, 'Lawn', 'lawn', 0),
(30, 'Loft', 'loft', 0),
(31, 'Los Angeles', 'los-angeles', 0),
(32, 'Los Angeles', 'los-angeles', 0),
(33, 'Lot', 'lot', 0),
(34, 'Manhattan', 'manhattan', 0),
(35, 'Miami', 'miami', 0),
(36, 'Microwave', 'microwave', 0),
(37, 'Multi Family Home', 'multi-family-home', 0),
(38, 'New Costruction', 'new-costruction', 0),
(39, 'New Listing', 'new-listing', 0),
(40, 'New York', 'new-york', 0),
(41, 'New York', 'new-york', 0),
(42, 'Open House', 'open-house', 0),
(43, 'Outdoor Shower', 'outdoor-shower', 0),
(44, 'Punjab', 'punjab', 0),
(45, 'Reduced Price', 'reduced-price', 0),
(46, 'Refrigerator', 'refrigerator', 0),
(47, 'Resale', 'resale', 0),
(48, 'Sauna', 'sauna', 0),
(49, 'Single Family Home', 'single-family-home', 0),
(50, 'Swimming Pool', 'swimming-pool', 0),
(51, 'Townhouse', 'townhouse', 0),
(52, 'TV Cable', 'tv-cable', 0),
(53, 'Villa', 'villa', 0),
(54, 'Washer', 'washer', 0),
(55, 'WiFi', 'wifi', 0),
(56, 'Window Coverings', 'window-coverings', 0),
(57, 'Footer menu', 'footer-menu', 0),
(58, 'Help', 'help', 0),
(59, 'Main Menu', 'main-menu', 0),
(60, 'Pages menu', 'pages-menu', 0),
(61, 'House', 'house', 0),
(62, 'Articles', 'articles', 0),
(63, 'Ао Йон', '%d0%b0%d0%be-%d0%b9%d0%be%d0%bd', 0),
(64, 'Банана', '%d0%b1%d0%b0%d0%bd%d0%b0%d0%bd%d0%b0', 0),
(65, 'Mai Khao', 'mai-khao', 0),
(66, 'East', 'east', 0),
(67, 'Nai Yang', 'nai-yang', 0),
(68, 'Phang Nga', 'phang-nga', 0),
(69, 'Main Menu2', 'main-menu2', 0),
(70, 'Наши услуги', 'our-services', 0),
(71, 'транспорт', '%d1%82%d1%80%d0%b0%d0%bd%d1%81%d0%bf%d0%be%d1%80%d1%82', 0),
(72, 'Недвижимость и качество жизни', 'reale-estate-and-life-quality', 0),
(74, 'Транспортные услуги', 'transport-services', 0),
(75, 'Качественный отдых', '%d0%ba%d0%b0%d1%87%d0%b5%d1%81%d1%82%d0%b2%d0%b5%d0%bd%d0%bd%d1%8b%d0%b9-%d0%be%d1%82%d0%b4%d1%8b%d1%85', 0),
(76, 'экскурсии', '%d1%8d%d0%ba%d1%81%d0%ba%d1%83%d1%80%d1%81%d0%b8%d0%b8', 0),
(77, 'морские экскурсии', '%d0%bc%d0%be%d1%80%d1%81%d0%ba%d0%b8%d0%b5-%d1%8d%d0%ba%d1%81%d0%ba%d1%83%d1%80%d1%81%d0%b8%d0%b8', 0),
(78, 'рыбалка', '%d1%80%d1%8b%d0%b1%d0%b0%d0%bb%d0%ba%d0%b0', 0),
(79, 'пхи-пхи', '%d0%bf%d1%85%d0%b8-%d0%bf%d1%85%d0%b8', 0),
(80, 'острова', '%d0%be%d1%81%d1%82%d1%80%d0%be%d0%b2%d0%b0', 0),
(81, 'саймон', '%d1%81%d0%b0%d0%b9%d0%bc%d0%be%d0%bd', 0),
(82, 'сиам нирамит', '%d1%81%d0%b8%d0%b0%d0%bc-%d0%bd%d0%b8%d1%80%d0%b0%d0%bc%d0%b8%d1%82', 0),
(83, 'свадьба', '%d1%81%d0%b2%d0%b0%d0%b4%d1%8c%d0%b1%d0%b0', 0),
(84, 'фыва', '%d1%84%d1%8b%d0%b2%d0%b0', 0),
(85, 'Качественный отдых', 'qualitative-leisure', 0),
(86, 'Недвижимость и качество жизни', '%d0%bd%d0%b5%d0%b4%d0%b2%d0%b8%d0%b6%d0%b8%d0%bc%d0%be%d1%81%d1%82%d1%8c-%d0%b8-%d0%ba%d0%b0%d1%87%d0%b5%d1%81%d1%82%d0%b2%d0%be-%d0%b6%d0%b8%d0%b7%d0%bd%d0%b8', 0),
(87, 'Транспортные услуги', '%d1%82%d1%80%d0%b0%d0%bd%d1%81%d0%bf%d0%be%d1%80%d1%82%d0%bd%d1%8b%d0%b5-%d1%83%d1%81%d0%bb%d1%83%d0%b3%d0%b8', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_term_relationships`
--

CREATE TABLE IF NOT EXISTS `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(271, 13, 0),
(271, 14, 0),
(271, 15, 0),
(271, 16, 0),
(271, 20, 0),
(271, 24, 0),
(271, 26, 0),
(271, 28, 0),
(271, 29, 0),
(271, 36, 0),
(271, 40, 0),
(271, 41, 0),
(271, 43, 0),
(271, 46, 0),
(271, 48, 0),
(271, 50, 0),
(271, 52, 0),
(271, 54, 0),
(271, 55, 0),
(271, 56, 0),
(276, 13, 0),
(276, 14, 0),
(276, 15, 0),
(276, 20, 0),
(276, 23, 0),
(276, 26, 0),
(276, 28, 0),
(276, 29, 0),
(276, 36, 0),
(276, 40, 0),
(276, 41, 0),
(276, 43, 0),
(276, 46, 0),
(276, 48, 0),
(276, 50, 0),
(276, 52, 0),
(276, 54, 0),
(276, 55, 0),
(276, 56, 0),
(279, 13, 0),
(279, 14, 0),
(279, 15, 0),
(279, 20, 0),
(279, 23, 0),
(279, 26, 0),
(279, 28, 0),
(279, 29, 0),
(279, 36, 0),
(279, 40, 0),
(279, 41, 0),
(279, 43, 0),
(279, 46, 0),
(279, 48, 0),
(279, 50, 0),
(279, 52, 0),
(279, 54, 0),
(279, 55, 0),
(279, 56, 0),
(282, 13, 0),
(282, 14, 0),
(282, 15, 0),
(282, 20, 0),
(282, 24, 0),
(282, 26, 0),
(282, 28, 0),
(282, 29, 0),
(282, 36, 0),
(282, 40, 0),
(282, 41, 0),
(282, 43, 0),
(282, 46, 0),
(282, 48, 0),
(282, 50, 0),
(282, 52, 0),
(282, 54, 0),
(282, 55, 0),
(282, 56, 0),
(285, 13, 0),
(285, 14, 0),
(285, 15, 0),
(285, 20, 0),
(285, 23, 0),
(285, 26, 0),
(285, 28, 0),
(285, 29, 0),
(285, 36, 0),
(285, 40, 0),
(285, 41, 0),
(285, 43, 0),
(285, 46, 0),
(285, 48, 0),
(285, 50, 0),
(285, 52, 0),
(285, 54, 0),
(285, 55, 0),
(285, 56, 0),
(288, 13, 0),
(288, 14, 0),
(288, 15, 0),
(288, 20, 0),
(288, 24, 0),
(288, 26, 0),
(288, 28, 0),
(288, 29, 0),
(288, 36, 0),
(288, 40, 0),
(288, 41, 0),
(288, 43, 0),
(288, 46, 0),
(288, 48, 0),
(288, 50, 0),
(288, 52, 0),
(288, 54, 0),
(288, 55, 0),
(288, 56, 0),
(291, 13, 0),
(291, 14, 0),
(291, 15, 0),
(291, 20, 0),
(291, 23, 0),
(291, 26, 0),
(291, 28, 0),
(291, 29, 0),
(291, 36, 0),
(291, 40, 0),
(291, 41, 0),
(291, 43, 0),
(291, 46, 0),
(291, 48, 0),
(291, 50, 0),
(291, 52, 0),
(291, 54, 0),
(291, 55, 0),
(291, 56, 0),
(294, 13, 0),
(294, 14, 0),
(294, 15, 0),
(294, 20, 0),
(294, 24, 0),
(294, 26, 0),
(294, 28, 0),
(294, 29, 0),
(294, 36, 0),
(294, 40, 0),
(294, 41, 0),
(294, 43, 0),
(294, 46, 0),
(294, 48, 0),
(294, 50, 0),
(294, 52, 0),
(294, 54, 0),
(294, 55, 0),
(294, 56, 0),
(297, 13, 0),
(297, 14, 0),
(297, 15, 0),
(297, 20, 0),
(297, 23, 0),
(297, 26, 0),
(297, 28, 0),
(297, 29, 0),
(297, 36, 0),
(297, 40, 0),
(297, 41, 0),
(297, 43, 0),
(297, 46, 0),
(297, 48, 0),
(297, 50, 0),
(297, 52, 0),
(297, 54, 0),
(297, 55, 0),
(297, 56, 0),
(300, 13, 0),
(300, 14, 0),
(300, 15, 0),
(300, 20, 0),
(300, 24, 0),
(300, 26, 0),
(300, 28, 0),
(300, 29, 0),
(300, 36, 0),
(300, 40, 0),
(300, 41, 0),
(300, 43, 0),
(300, 46, 0),
(300, 48, 0),
(300, 50, 0),
(300, 52, 0),
(300, 54, 0),
(300, 55, 0),
(300, 56, 0),
(341, 13, 0),
(341, 14, 0),
(341, 15, 0),
(341, 20, 0),
(341, 24, 0),
(341, 26, 0),
(341, 28, 0),
(341, 29, 0),
(341, 36, 0),
(341, 40, 0),
(341, 41, 0),
(341, 43, 0),
(341, 46, 0),
(341, 48, 0),
(341, 50, 0),
(341, 52, 0),
(341, 54, 0),
(341, 55, 0),
(341, 56, 0),
(344, 13, 0),
(344, 14, 0),
(344, 15, 0),
(344, 20, 0),
(344, 23, 0),
(344, 26, 0),
(344, 28, 0),
(344, 29, 0),
(344, 36, 0),
(344, 40, 0),
(344, 41, 0),
(344, 43, 0),
(344, 46, 0),
(344, 48, 0),
(344, 50, 0),
(344, 52, 0),
(344, 54, 0),
(344, 55, 0),
(344, 56, 0),
(350, 13, 0),
(350, 15, 0),
(350, 18, 0),
(350, 20, 0),
(350, 24, 0),
(350, 26, 0),
(350, 28, 0),
(350, 29, 0),
(350, 36, 0),
(350, 40, 0),
(350, 43, 0),
(350, 46, 0),
(350, 48, 0),
(350, 49, 0),
(350, 50, 0),
(350, 52, 0),
(350, 54, 0),
(350, 55, 0),
(350, 56, 0),
(354, 13, 0),
(354, 14, 0),
(354, 15, 0),
(354, 18, 0),
(354, 20, 0),
(354, 23, 0),
(354, 26, 0),
(354, 28, 0),
(354, 29, 0),
(354, 36, 0),
(354, 40, 0),
(354, 43, 0),
(354, 46, 0),
(354, 48, 0),
(354, 50, 0),
(354, 52, 0),
(354, 54, 0),
(354, 55, 0),
(354, 56, 0),
(357, 13, 0),
(357, 15, 0),
(357, 18, 0),
(357, 20, 0),
(357, 24, 0),
(357, 26, 0),
(357, 28, 0),
(357, 29, 0),
(357, 36, 0),
(357, 40, 0),
(357, 43, 0),
(357, 46, 0),
(357, 48, 0),
(357, 49, 0),
(357, 50, 0),
(357, 52, 0),
(357, 54, 0),
(357, 55, 0),
(357, 56, 0),
(361, 13, 0),
(361, 15, 0),
(361, 20, 0),
(361, 24, 0),
(361, 26, 0),
(361, 28, 0),
(361, 29, 0),
(361, 36, 0),
(361, 40, 0),
(361, 41, 0),
(361, 43, 0),
(361, 46, 0),
(361, 48, 0),
(361, 49, 0),
(361, 50, 0),
(361, 52, 0),
(361, 54, 0),
(361, 55, 0),
(361, 56, 0),
(365, 13, 0),
(365, 15, 0),
(365, 18, 0),
(365, 20, 0),
(365, 24, 0),
(365, 26, 0),
(365, 28, 0),
(365, 29, 0),
(365, 36, 0),
(365, 40, 0),
(365, 43, 0),
(365, 46, 0),
(365, 48, 0),
(365, 49, 0),
(365, 50, 0),
(365, 52, 0),
(365, 54, 0),
(365, 55, 0),
(365, 56, 0),
(368, 13, 0),
(368, 15, 0),
(368, 18, 0),
(368, 20, 0),
(368, 23, 0),
(368, 26, 0),
(368, 28, 0),
(368, 29, 0),
(368, 36, 0),
(368, 40, 0),
(368, 43, 0),
(368, 46, 0),
(368, 48, 0),
(368, 50, 0),
(368, 52, 0),
(368, 53, 0),
(368, 54, 0),
(368, 55, 0),
(368, 56, 0),
(373, 13, 0),
(373, 15, 0),
(373, 18, 0),
(373, 20, 0),
(373, 24, 0),
(373, 26, 0),
(373, 28, 0),
(373, 29, 0),
(373, 36, 0),
(373, 40, 0),
(373, 43, 0),
(373, 46, 0),
(373, 48, 0),
(373, 50, 0),
(373, 52, 0),
(373, 53, 0),
(373, 54, 0),
(373, 55, 0),
(373, 56, 0),
(376, 13, 0),
(376, 14, 0),
(376, 15, 0),
(376, 18, 0),
(376, 20, 0),
(376, 23, 0),
(376, 26, 0),
(376, 28, 0),
(376, 29, 0),
(376, 36, 0),
(376, 40, 0),
(376, 43, 0),
(376, 46, 0),
(376, 48, 0),
(376, 50, 0),
(376, 52, 0),
(376, 54, 0),
(376, 55, 0),
(376, 56, 0),
(379, 13, 0),
(379, 14, 0),
(379, 15, 0),
(379, 18, 0),
(379, 20, 0),
(379, 24, 0),
(379, 26, 0),
(379, 28, 0),
(379, 29, 0),
(379, 36, 0),
(379, 40, 0),
(379, 43, 0),
(379, 46, 0),
(379, 48, 0),
(379, 50, 0),
(379, 52, 0),
(379, 54, 0),
(379, 55, 0),
(379, 56, 0),
(383, 13, 0),
(383, 15, 0),
(383, 18, 0),
(383, 20, 0),
(383, 23, 0),
(383, 26, 0),
(383, 28, 0),
(383, 29, 0),
(383, 36, 0),
(383, 40, 0),
(383, 43, 0),
(383, 46, 0),
(383, 48, 0),
(383, 49, 0),
(383, 50, 0),
(383, 52, 0),
(383, 54, 0),
(383, 55, 0),
(383, 56, 0),
(390, 13, 0),
(390, 14, 0),
(390, 15, 0),
(390, 18, 0),
(390, 20, 0),
(390, 24, 0),
(390, 26, 0),
(390, 28, 0),
(390, 29, 0),
(390, 36, 0),
(390, 40, 0),
(390, 43, 0),
(390, 46, 0),
(390, 48, 0),
(390, 50, 0),
(390, 52, 0),
(390, 54, 0),
(390, 55, 0),
(390, 56, 0),
(616, 3, 0),
(616, 7, 0),
(616, 8, 0),
(616, 9, 0),
(616, 10, 0),
(616, 11, 0),
(616, 12, 0),
(618, 2, 0),
(618, 7, 0),
(618, 8, 0),
(618, 9, 0),
(618, 10, 0),
(618, 11, 0),
(618, 12, 0),
(623, 5, 0),
(623, 7, 0),
(623, 8, 0),
(623, 9, 0),
(623, 10, 0),
(623, 11, 0),
(623, 12, 0),
(625, 5, 0),
(625, 7, 0),
(625, 8, 0),
(625, 9, 0),
(625, 10, 0),
(625, 11, 0),
(625, 12, 0),
(627, 3, 0),
(627, 7, 0),
(627, 8, 0),
(627, 9, 0),
(627, 10, 0),
(627, 11, 0),
(627, 12, 0),
(629, 2, 0),
(629, 7, 0),
(629, 8, 0),
(629, 9, 0),
(629, 10, 0),
(629, 11, 0),
(629, 12, 0),
(631, 5, 0),
(631, 7, 0),
(631, 8, 0),
(631, 9, 0),
(631, 10, 0),
(631, 11, 0),
(631, 12, 0),
(633, 5, 0),
(633, 7, 0),
(633, 8, 0),
(633, 9, 0),
(633, 10, 0),
(633, 11, 0),
(633, 12, 0),
(635, 3, 0),
(635, 7, 0),
(635, 8, 0),
(635, 9, 0),
(635, 10, 0),
(635, 11, 0),
(635, 12, 0),
(637, 2, 0),
(637, 7, 0),
(637, 8, 0),
(637, 9, 0),
(637, 10, 0),
(637, 11, 0),
(637, 12, 0),
(1221, 3, 0),
(1221, 7, 0),
(1221, 8, 0),
(1221, 9, 0),
(1221, 10, 0),
(1221, 11, 0),
(1221, 12, 0),
(1222, 2, 0),
(1222, 7, 0),
(1222, 8, 0),
(1222, 9, 0),
(1222, 10, 0),
(1222, 11, 0),
(1222, 12, 0),
(1825, 60, 0),
(1826, 60, 0),
(1829, 60, 0),
(1831, 60, 0),
(1832, 60, 0),
(1833, 58, 0),
(1834, 58, 0),
(1835, 58, 0),
(1839, 59, 0),
(1840, 59, 0),
(1843, 59, 0),
(1848, 23, 0),
(1848, 24, 0),
(1848, 61, 0),
(1848, 66, 0),
(1853, 23, 0),
(1853, 24, 0),
(1853, 61, 0),
(1853, 67, 0),
(1917, 59, 0),
(1946, 23, 0),
(1946, 24, 0),
(1946, 61, 0),
(1946, 65, 0),
(1948, 23, 0),
(1948, 24, 0),
(1948, 61, 0),
(1948, 68, 0),
(1949, 23, 0),
(1949, 24, 0),
(1949, 61, 0),
(1949, 67, 0),
(1992, 69, 0),
(1993, 69, 0),
(1994, 69, 0),
(1995, 69, 0),
(2004, 70, 0),
(2091, 71, 0),
(2091, 74, 0),
(2103, 70, 0),
(2124, 72, 0),
(2146, 57, 0),
(2147, 57, 0),
(2148, 57, 0),
(2150, 75, 0),
(2150, 76, 0),
(2150, 77, 0),
(2150, 78, 0),
(2155, 75, 0),
(2155, 76, 0),
(2155, 77, 0),
(2155, 79, 0),
(2155, 80, 0),
(2157, 75, 0),
(2157, 76, 0),
(2157, 81, 0),
(2159, 75, 0),
(2159, 76, 0),
(2159, 82, 0),
(2169, 75, 0),
(2169, 83, 0),
(2180, 85, 0),
(2181, 85, 0),
(2182, 85, 0),
(2188, 85, 0),
(2189, 85, 0),
(2191, 59, 0),
(2192, 59, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_term_taxonomy`
--

CREATE TABLE IF NOT EXISTS `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 0),
(2, 2, 'category', '', 0, 0),
(3, 3, 'category', '', 0, 0),
(4, 4, 'category', '', 0, 0),
(5, 5, 'category', '', 0, 0),
(6, 6, 'category', '', 0, 0),
(7, 7, 'post_tag', '', 0, 0),
(8, 8, 'post_tag', '', 0, 0),
(9, 9, 'post_tag', '', 0, 0),
(10, 10, 'post_tag', '', 0, 0),
(11, 11, 'post_tag', '', 0, 0),
(12, 12, 'post_tag', '', 0, 0),
(13, 13, 'property_feature', '', 0, 23),
(14, 14, 'property_type', '', 0, 16),
(15, 15, 'property_feature', '', 0, 23),
(16, 16, 'property_area', '', 0, 1),
(17, 17, 'property_city', '', 0, 0),
(18, 18, 'property_state', '', 0, 10),
(19, 19, 'property_type', '', 0, 0),
(20, 20, 'property_feature', '', 0, 23),
(21, 21, 'property_type', '', 0, 0),
(22, 22, 'property_state', '', 0, 0),
(23, 23, 'property_status', '', 0, 15),
(24, 24, 'property_status', '', 0, 18),
(25, 25, 'property_status', '', 0, 0),
(26, 26, 'property_feature', '', 0, 23),
(27, 27, 'property_type', '', 0, 0),
(28, 28, 'property_feature', '', 0, 23),
(29, 29, 'property_feature', '', 0, 23),
(30, 30, 'property_type', '', 0, 0),
(31, 31, 'property_city', 'This is subtitle', 0, 0),
(32, 32, 'property_state', '', 0, 0),
(33, 33, 'property_type', '', 0, 0),
(34, 34, 'property_area', '', 0, 0),
(35, 35, 'property_city', '', 0, 0),
(36, 36, 'property_feature', '', 0, 23),
(37, 37, 'property_type', '', 0, 0),
(38, 38, 'property_status', '', 0, 0),
(39, 39, 'property_status', '', 0, 0),
(40, 40, 'property_city', '', 0, 23),
(41, 41, 'property_state', '', 0, 13),
(42, 42, 'property_status', '', 0, 0),
(43, 43, 'property_feature', '', 0, 23),
(44, 44, 'property_state', '', 0, 0),
(45, 45, 'property_status', '', 0, 0),
(46, 46, 'property_feature', '', 0, 23),
(47, 47, 'property_status', '', 0, 0),
(48, 48, 'property_feature', '', 0, 23),
(49, 49, 'property_type', '', 0, 5),
(50, 50, 'property_feature', '', 0, 23),
(51, 51, 'property_type', '', 0, 0),
(52, 52, 'property_feature', '', 0, 23),
(53, 53, 'property_type', '', 0, 2),
(54, 54, 'property_feature', '', 0, 23),
(55, 55, 'property_feature', '', 0, 23),
(56, 56, 'property_feature', '', 0, 23),
(57, 57, 'nav_menu', '', 0, 3),
(58, 58, 'nav_menu', '', 0, 3),
(59, 59, 'nav_menu', '', 0, 6),
(60, 60, 'nav_menu', '', 0, 5),
(61, 61, 'property_type', '', 0, 5),
(62, 62, 'category', '', 0, 0),
(63, 63, 'property_area', '', 0, 0),
(64, 64, 'property_area', '', 0, 0),
(65, 65, 'property_area', '', 0, 1),
(66, 66, 'property_area', '', 0, 1),
(67, 67, 'property_area', '', 0, 2),
(68, 68, 'property_area', '', 0, 1),
(69, 69, 'nav_menu', '', 0, 4),
(70, 70, 'category', '', 0, 1),
(71, 71, 'post_tag', '', 0, 1),
(72, 72, 'category', '', 70, 1),
(74, 74, 'category', '', 70, 1),
(75, 75, 'category', '', 70, 1),
(76, 76, 'post_tag', '', 0, 0),
(77, 77, 'post_tag', '', 0, 0),
(78, 78, 'post_tag', '', 0, 0),
(79, 79, 'post_tag', '', 0, 0),
(80, 80, 'post_tag', '', 0, 0),
(81, 81, 'post_tag', '', 0, 0),
(82, 82, 'post_tag', '', 0, 0),
(83, 83, 'post_tag', '', 0, 1),
(84, 84, 'category', '', 0, 0),
(85, 85, 'servicescat', '[:ru]esdfrghjufdassegfsegwrhrtjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcdcd[:en]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis nisi sit amet metus sagittis, vel fringilla metus semper. Praesent luctus placerat sagittis. Aliquam dapibus laoreet odio, in ornare ante ultrices vitae. Proin sed arcu quam. Aliquam sit amet dictum mi. Donec feugiat tortor at leo malesuada varius.[:]', 0, 3),
(86, 86, 'servicescat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis nisi sit amet metus sagittis, vel fringilla metus semper. Praesent luctus placerat sagittis. Aliquam dapibus laoreet odio, in ornare ante ultrices vitae. Proin sed arcu quam. Aliquam sit amet dictum mi. Donec feugiat tortor at leo malesuada varius.', 0, 0),
(87, 87, 'servicescat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis nisi sit amet metus sagittis, vel fringilla metus semper. Praesent luctus placerat sagittis. Aliquam dapibus laoreet odio, in ornare ante ultrices vitae. Proin sed arcu quam. Aliquam sit amet dictum mi. Donec feugiat tortor at leo malesuada varius.', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wp_usermeta`
--

CREATE TABLE IF NOT EXISTS `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=InnoDB AUTO_INCREMENT=439 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'comment_shortcuts', 'false'),
(7, 1, 'admin_color', 'fresh'),
(8, 1, 'use_ssl', '0'),
(9, 1, 'show_admin_bar_front', 'true'),
(10, 1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(11, 1, 'wp_user_level', '10'),
(12, 1, 'dismissed_wp_pointers', 'vc_pointers_backend_editor'),
(13, 1, 'show_welcome_panel', '1'),
(15, 1, 'wp_dashboard_quick_press_last_post_id', '2196'),
(16, 1, 'wp_r_tru_u_x', 'a:2:{s:2:"id";s:0:"";s:7:"expires";i:86400;}'),
(18, 1, 'wp_user-settings', 'libraryContent=browse&editor=html&mfold=o&edit_element_vcUIPanelWidth=650&edit_element_vcUIPanelLeft=692px&edit_element_vcUIPanelTop=82px&template_window_vcUIPanelWidth=1092&template_window_vcUIPanelLeft=128px&template_window_vcUIPanelTop=74px&align=center&uploader=1'),
(19, 1, 'wp_user-settings-time', '1482866228'),
(20, 1, 'nav_menu_recently_edited', '59'),
(21, 1, 'managenav-menuscolumnshidden', 'a:0:{}'),
(22, 1, 'metaboxhidden_nav-menus', 'a:16:{i:0;s:26:"add-post-type-houzez_agent";i:1;s:29:"add-post-type-houzez_packages";i:2;s:22:"add-post-type-property";i:3;s:33:"add-post-type-houzez_testimonials";i:4;s:28:"add-post-type-houzez_partner";i:5;s:28:"add-post-type-houzez_invoice";i:6;s:27:"add-post-type-user_packages";i:7;s:12:"add-post_tag";i:8;s:15:"add-post_format";i:9;s:17:"add-property_type";i:10;s:20:"add-property_feature";i:11;s:19:"add-property_status";i:12;s:17:"add-property_city";i:13;s:17:"add-property_area";i:14;s:18:"add-property_state";i:15;s:18:"add-property_label";}'),
(25, 1, 'closedpostboxes_post', 'a:0:{}'),
(26, 1, 'metaboxhidden_post', 'a:8:{i:0;s:19:"fave_format_gallery";i:1;s:17:"fave_format_video";i:2;s:17:"fave_format_audio";i:3;s:13:"trackbacksdiv";i:4;s:10:"postcustom";i:5;s:16:"commentstatusdiv";i:6;s:7:"slugdiv";i:7;s:9:"authordiv";}'),
(28, 2, 'nickname', 'anzar'),
(29, 2, 'first_name', ''),
(30, 2, 'last_name', ''),
(31, 2, 'description', ''),
(32, 2, 'rich_editing', 'true'),
(33, 2, 'comment_shortcuts', 'false'),
(34, 2, 'admin_color', 'fresh'),
(35, 2, 'use_ssl', '0'),
(36, 2, 'show_admin_bar_front', 'true'),
(37, 2, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(38, 2, 'wp_user_level', '0'),
(39, 2, 'dismissed_wp_pointers', ''),
(40, 2, 'fave_author_agent_id', '1961'),
(41, 3, 'nickname', 'anzar'),
(45, 3, 'rich_editing', 'true'),
(46, 3, 'comment_shortcuts', 'false'),
(47, 3, 'admin_color', 'fresh'),
(48, 3, 'use_ssl', '0'),
(49, 3, 'show_admin_bar_front', 'true'),
(50, 3, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(51, 3, 'wp_user_level', '0'),
(52, 3, 'dismissed_wp_pointers', ''),
(53, 3, 'fave_author_agent_id', '1962'),
(54, 3, 'session_tokens', 'a:2:{s:64:"65a81315834532120042ffb021435960efc1597485cc98f87df1963b21c82e70";a:4:{s:10:"expiration";i:1480874098;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:108:"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36";s:5:"login";i:1480701298;}s:64:"131f892c76e4282d7e40ebb417daddfec39652e1d139fc3305a2b6873cac880d";a:4:{s:10:"expiration";i:1480953169;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36";s:5:"login";i:1480780369;}}'),
(94, 3, 'default_password_nag', ''),
(96, 3, 'first_name', ''),
(97, 3, 'last_name', ''),
(98, 3, 'description', ''),
(99, 3, 'fave_author_title', ''),
(100, 3, 'fave_author_company', ''),
(101, 3, 'fave_author_phone', ''),
(102, 3, 'fave_author_fax', ''),
(103, 3, 'fave_author_mobile', ''),
(104, 3, 'fave_author_skype', ''),
(105, 3, 'fave_author_custom_picture', ''),
(106, 3, 'package_id', ''),
(107, 3, 'package_activation', ''),
(108, 3, 'package_listings', ''),
(109, 3, 'package_featured_listings', ''),
(110, 3, 'fave_paypal_profile', ''),
(111, 3, 'fave_stripe_user_profile', ''),
(112, 3, 'fave_author_facebook', ''),
(113, 3, 'fave_author_linkedin', ''),
(114, 3, 'fave_author_twitter', ''),
(115, 3, 'fave_author_pinterest', ''),
(116, 3, 'fave_author_instagram', ''),
(117, 3, 'fave_author_youtube', ''),
(118, 3, 'fave_author_vimeo', ''),
(119, 3, 'fave_author_googleplus', ''),
(121, 1, 'fave_author_title', ''),
(122, 1, 'fave_author_company', ''),
(123, 1, 'fave_author_phone', '324234'),
(124, 1, 'fave_author_fax', ''),
(125, 1, 'fave_author_mobile', ''),
(126, 1, 'fave_author_skype', ''),
(127, 1, 'fave_author_custom_picture', ''),
(128, 1, 'fave_author_agent_id', ''),
(129, 1, 'package_id', ''),
(130, 1, 'package_activation', ''),
(131, 1, 'package_listings', ''),
(132, 1, 'package_featured_listings', ''),
(133, 1, 'fave_paypal_profile', ''),
(134, 1, 'fave_stripe_user_profile', ''),
(135, 1, 'fave_author_facebook', ''),
(136, 1, 'fave_author_linkedin', ''),
(137, 1, 'fave_author_twitter', ''),
(138, 1, 'fave_author_pinterest', ''),
(139, 1, 'fave_author_instagram', ''),
(140, 1, 'fave_author_youtube', ''),
(141, 1, 'fave_author_vimeo', ''),
(142, 1, 'fave_author_googleplus', ''),
(146, 5, 'nickname', 'aaaa'),
(147, 5, 'first_name', ''),
(148, 5, 'last_name', ''),
(149, 5, 'description', ''),
(150, 5, 'rich_editing', 'true'),
(151, 5, 'comment_shortcuts', 'false'),
(152, 5, 'admin_color', 'fresh'),
(153, 5, 'use_ssl', '0'),
(154, 5, 'show_admin_bar_front', 'true'),
(155, 5, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(156, 5, 'wp_user_level', '0'),
(157, 5, 'dismissed_wp_pointers', ''),
(158, 5, 'fave_author_agent_id', '1964'),
(160, 5, 'fave_author_phone', '2342424'),
(162, 1, 'closedpostboxes_page', 'a:2:{i:0;s:18:"fave_menu_settings";i:1;s:20:"qtranxs-meta-box-lsb";}'),
(163, 1, 'metaboxhidden_page', 'a:12:{i:0;s:19:"wpb_visual_composer";i:1;s:21:"fave_listing_template";i:2;s:22:"fave_agencies_template";i:3;s:20:"fave_agents_template";i:4;s:30:"fave_default_template_settings";i:5;s:8:"acf_2017";i:6;s:8:"acf_2183";i:7;s:10:"postcustom";i:8;s:16:"commentstatusdiv";i:9;s:11:"commentsdiv";i:10;s:7:"slugdiv";i:11;s:9:"authordiv";}'),
(198, 6, 'nickname', 'aaa'),
(199, 6, 'first_name', ''),
(200, 6, 'last_name', ''),
(201, 6, 'description', ''),
(202, 6, 'rich_editing', 'true'),
(203, 6, 'comment_shortcuts', 'false'),
(204, 6, 'admin_color', 'fresh'),
(205, 6, 'use_ssl', '0'),
(206, 6, 'show_admin_bar_front', 'true'),
(207, 6, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(208, 6, 'wp_user_level', '0'),
(209, 6, 'dismissed_wp_pointers', ''),
(210, 6, 'fave_author_agent_id', '1991'),
(213, 7, 'nickname', 'aaaaaa@mail.ru'),
(214, 7, 'first_name', ''),
(215, 7, 'last_name', ''),
(216, 7, 'description', ''),
(217, 7, 'rich_editing', 'true'),
(218, 7, 'comment_shortcuts', 'false'),
(219, 7, 'admin_color', 'fresh'),
(220, 7, 'use_ssl', '0'),
(221, 7, 'show_admin_bar_front', 'true'),
(222, 7, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(223, 7, 'wp_user_level', '0'),
(224, 7, 'dismissed_wp_pointers', ''),
(225, 7, 'fave_author_agent_id', '1999'),
(226, 7, 'session_tokens', 'a:1:{s:64:"a36ba10850d31345ede93360b0e24b83dedf13ac25a8febac9f5e1c054b26eff";a:4:{s:10:"expiration";i:1481893141;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1481720341;}}'),
(227, 8, 'nickname', 'asda@zasd.ru'),
(228, 8, 'first_name', ''),
(229, 8, 'last_name', ''),
(230, 8, 'description', ''),
(231, 8, 'rich_editing', 'true'),
(232, 8, 'comment_shortcuts', 'false'),
(233, 8, 'admin_color', 'fresh'),
(234, 8, 'use_ssl', '0'),
(235, 8, 'show_admin_bar_front', 'true'),
(236, 8, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(237, 8, 'wp_user_level', '0'),
(238, 8, 'dismissed_wp_pointers', ''),
(241, 9, 'nickname', 'asd@asd.ru'),
(242, 9, 'first_name', ''),
(243, 9, 'last_name', ''),
(244, 9, 'description', ''),
(245, 9, 'rich_editing', 'true'),
(246, 9, 'comment_shortcuts', 'false'),
(247, 9, 'admin_color', 'fresh'),
(248, 9, 'use_ssl', '0'),
(249, 9, 'show_admin_bar_front', 'true'),
(250, 9, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(251, 9, 'wp_user_level', '0'),
(252, 9, 'dismissed_wp_pointers', ''),
(253, 10, 'nickname', 'asd@asd.ru234'),
(254, 10, 'first_name', ''),
(255, 10, 'last_name', ''),
(256, 10, 'description', ''),
(257, 10, 'rich_editing', 'true'),
(258, 10, 'comment_shortcuts', 'false'),
(259, 10, 'admin_color', 'fresh'),
(260, 10, 'use_ssl', '0'),
(261, 10, 'show_admin_bar_front', 'true'),
(262, 10, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(263, 10, 'wp_user_level', '0'),
(264, 10, 'dismissed_wp_pointers', ''),
(265, 11, 'nickname', 'asd'),
(266, 11, 'first_name', ''),
(267, 11, 'last_name', ''),
(268, 11, 'description', ''),
(269, 11, 'rich_editing', 'true'),
(270, 11, 'comment_shortcuts', 'false'),
(271, 11, 'admin_color', 'fresh'),
(272, 11, 'use_ssl', '0'),
(273, 11, 'show_admin_bar_front', 'true'),
(274, 11, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(275, 11, 'wp_user_level', '0'),
(276, 11, 'dismissed_wp_pointers', ''),
(277, 12, 'nickname', 'asdads'),
(278, 12, 'first_name', ''),
(279, 12, 'last_name', ''),
(280, 12, 'description', ''),
(281, 12, 'rich_editing', 'true'),
(282, 12, 'comment_shortcuts', 'false'),
(283, 12, 'admin_color', 'fresh'),
(284, 12, 'use_ssl', '0'),
(285, 12, 'show_admin_bar_front', 'true'),
(286, 12, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(287, 12, 'wp_user_level', '0'),
(288, 12, 'dismissed_wp_pointers', ''),
(289, 13, 'nickname', 'asdad'),
(290, 13, 'first_name', ''),
(291, 13, 'last_name', ''),
(292, 13, 'description', ''),
(293, 13, 'rich_editing', 'true'),
(294, 13, 'comment_shortcuts', 'false'),
(295, 13, 'admin_color', 'fresh'),
(296, 13, 'use_ssl', '0'),
(297, 13, 'show_admin_bar_front', 'true'),
(298, 13, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(299, 13, 'wp_user_level', '0'),
(300, 13, 'dismissed_wp_pointers', ''),
(301, 14, 'nickname', 'qwe'),
(302, 14, 'first_name', ''),
(303, 14, 'last_name', ''),
(304, 14, 'description', ''),
(305, 14, 'rich_editing', 'true'),
(306, 14, 'comment_shortcuts', 'false'),
(307, 14, 'admin_color', 'fresh'),
(308, 14, 'use_ssl', '0'),
(309, 14, 'show_admin_bar_front', 'true'),
(310, 14, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(311, 14, 'wp_user_level', '0'),
(312, 14, 'dismissed_wp_pointers', ''),
(313, 15, 'nickname', 'a@a.e'),
(314, 15, 'first_name', ''),
(315, 15, 'last_name', ''),
(316, 15, 'description', ''),
(317, 15, 'rich_editing', 'true'),
(318, 15, 'comment_shortcuts', 'false'),
(319, 15, 'admin_color', 'fresh'),
(320, 15, 'use_ssl', '0'),
(321, 15, 'show_admin_bar_front', 'true'),
(322, 15, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(323, 15, 'wp_user_level', '0'),
(324, 15, 'dismissed_wp_pointers', ''),
(325, 16, 'nickname', 'a@a.ew'),
(326, 16, 'first_name', ''),
(327, 16, 'last_name', ''),
(328, 16, 'description', ''),
(329, 16, 'rich_editing', 'true'),
(330, 16, 'comment_shortcuts', 'false'),
(331, 16, 'admin_color', 'fresh'),
(332, 16, 'use_ssl', '0'),
(333, 16, 'show_admin_bar_front', 'true'),
(334, 16, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(335, 16, 'wp_user_level', '0'),
(336, 16, 'dismissed_wp_pointers', ''),
(337, 17, 'nickname', 'anzar@po.rr'),
(338, 17, 'first_name', ''),
(339, 17, 'last_name', ''),
(340, 17, 'description', ''),
(341, 17, 'rich_editing', 'true'),
(342, 17, 'comment_shortcuts', 'false'),
(343, 17, 'admin_color', 'fresh'),
(344, 17, 'use_ssl', '0'),
(345, 17, 'show_admin_bar_front', 'true'),
(346, 17, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(347, 17, 'wp_user_level', '0'),
(348, 17, 'dismissed_wp_pointers', ''),
(349, 18, 'nickname', 'asd@asd.ruqw'),
(350, 18, 'first_name', ''),
(351, 18, 'last_name', ''),
(352, 18, 'description', ''),
(353, 18, 'rich_editing', 'true'),
(354, 18, 'comment_shortcuts', 'false'),
(355, 18, 'admin_color', 'fresh'),
(356, 18, 'use_ssl', '0'),
(357, 18, 'show_admin_bar_front', 'true'),
(358, 18, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(359, 18, 'wp_user_level', '0'),
(360, 18, 'dismissed_wp_pointers', ''),
(361, 19, 'nickname', 'sdd@fgdf.ru'),
(362, 19, 'first_name', ''),
(363, 19, 'last_name', ''),
(364, 19, 'description', ''),
(365, 19, 'rich_editing', 'true'),
(366, 19, 'comment_shortcuts', 'false'),
(367, 19, 'admin_color', 'fresh'),
(368, 19, 'use_ssl', '0'),
(369, 19, 'show_admin_bar_front', 'true'),
(370, 19, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(371, 19, 'wp_user_level', '0'),
(372, 19, 'dismissed_wp_pointers', ''),
(373, 20, 'nickname', 'a@a.ru'),
(374, 20, 'first_name', ''),
(375, 20, 'last_name', ''),
(376, 20, 'description', ''),
(377, 20, 'rich_editing', 'true'),
(378, 20, 'comment_shortcuts', 'false'),
(379, 20, 'admin_color', 'fresh'),
(380, 20, 'use_ssl', '0'),
(381, 20, 'show_admin_bar_front', 'true'),
(382, 20, 'wp_capabilities', 'a:1:{s:10:"subscriber";b:1;}'),
(383, 20, 'wp_user_level', '0'),
(384, 20, 'dismissed_wp_pointers', ''),
(385, 20, 'fave_author_agent_id', '2024'),
(386, 20, 'session_tokens', 'a:1:{s:64:"b11b1ef296d98aca1d672ebff945825f8552a012702f6faac8f1dea7c8fdb973";a:4:{s:10:"expiration";i:1482333048;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1482160248;}}'),
(387, 20, 'fave_author_phone', 'asdaa'),
(394, 1, 'session_tokens', 'a:12:{s:64:"645311ae2b96cf203e75f0953ebec47c3971a2108b4120c13ef12eae24772b5e";a:4:{s:10:"expiration";i:1483934924;s:2:"ip";s:14:"185.82.216.114";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1482725324;}s:64:"4288713a19718329f1e1c7f8c8ee09bc49fe79fc02604484b6061e0faefe1689";a:4:{s:10:"expiration";i:1483028256;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:72:"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0";s:5:"login";i:1482855456;}s:64:"396adb91aed6a856100c60ac2e4f9688f8c97169ba0429fc21280dc1ff5f0c57";a:4:{s:10:"expiration";i:1483038566;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:108:"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1482865766;}s:64:"fe79868ee511adec3281d9c9dea920185eabd61db6d6d2af9b017191e2844c43";a:4:{s:10:"expiration";i:1483054656;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:108:"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1482881856;}s:64:"2cbc84b658306e005fb15a766f67eeb8893e1ec712d64d59fb75cdd26cba1d3f";a:4:{s:10:"expiration";i:1483068883;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:108:"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1482896083;}s:64:"31e6abe365e2477bf6276e8be1f4ea63e9e73621b6523053137592f120b5e86f";a:4:{s:10:"expiration";i:1484113558;s:2:"ip";s:14:"119.76.124.209";s:2:"ua";s:120:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36";s:5:"login";i:1482903958;}s:64:"35ea17986d33f4992db5bde2beaafe386985c55b29eb0f14f6954ba51971299d";a:4:{s:10:"expiration";i:1483076960;s:2:"ip";s:15:"188.162.167.175";s:2:"ua";s:108:"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1482904160;}s:64:"b0716b75e63f4a3188a7c9ff2b035b8dcdc8e2313aea8882d7e1f503fee6ba00";a:4:{s:10:"expiration";i:1484121438;s:2:"ip";s:14:"178.162.216.34";s:2:"ua";s:120:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36";s:5:"login";i:1482911838;}s:64:"4811ff819508fffd3ddbcf04e3d14348e4425da239a81984085a0fcb3439f5e1";a:4:{s:10:"expiration";i:1483101606;s:2:"ip";s:13:"178.35.230.85";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1482928806;}s:64:"325a1202c471f855afa04d3016ce36bcd74dc9773391070fb3611dbc89499ac5";a:4:{s:10:"expiration";i:1483104711;s:2:"ip";s:13:"178.35.230.85";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1482931911;}s:64:"45f458eb869fe34e33b21515f8f83d414d7d69c192225984f13fa95f2d3fb811";a:4:{s:10:"expiration";i:1483183014;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:72:"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0";s:5:"login";i:1483010214;}s:64:"6a6656b0ae76059bd67be5bbd0fcd6999bd288e48c32dda8eed811b6eb0a4c9e";a:4:{s:10:"expiration";i:1483183879;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:108:"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1483011079;}}'),
(395, 21, 'nickname', 'Barbara Stoyanova'),
(396, 21, 'first_name', 'Barbara'),
(397, 21, 'last_name', 'Stoyanova'),
(398, 21, 'description', ''),
(399, 21, 'rich_editing', 'true'),
(400, 21, 'comment_shortcuts', 'false'),
(401, 21, 'admin_color', 'fresh'),
(402, 21, 'use_ssl', '0'),
(403, 21, 'show_admin_bar_front', 'true'),
(404, 21, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(405, 21, 'wp_user_level', '10'),
(406, 21, 'dismissed_wp_pointers', ''),
(407, 21, 'session_tokens', 'a:5:{s:64:"19755a37229a40daa1fe191bcb1810cf9065aacf0888c5603ad660253549ae45";a:4:{s:10:"expiration";i:1484020108;s:2:"ip";s:14:"185.82.216.114";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1482810508;}s:64:"52dcc17e46595307fef6c6d436e8d496b371b0796233be916edebccd1d64b37d";a:4:{s:10:"expiration";i:1483014907;s:2:"ip";s:14:"49.228.229.237";s:2:"ua";s:137:"Mozilla/5.0 (iPhone; CPU iPhone OS 10_0_1 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Mobile/14A403 Safari/602.1";s:5:"login";i:1482842107;}s:64:"ad7e34b7da74ea9796fe94b70d7d1b188536003c26dca13b40cdd050774b8cba";a:4:{s:10:"expiration";i:1484054745;s:2:"ip";s:14:"49.228.229.237";s:2:"ua";s:137:"Mozilla/5.0 (iPhone; CPU iPhone OS 10_0_1 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Mobile/14A403 Safari/602.1";s:5:"login";i:1482845145;}s:64:"6eaa7bb0ad55d89c12cc174196c69ff075cbce4c66f65898091b74546bd4245c";a:4:{s:10:"expiration";i:1483097787;s:2:"ip";s:14:"49.228.229.237";s:2:"ua";s:109:"Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1482924987;}s:64:"c25ae2decdf4313e1beec3c3027d6a1cf53833a3af96406f2a9f47f7857a6b03";a:4:{s:10:"expiration";i:1483098271;s:2:"ip";s:14:"49.228.229.237";s:2:"ua";s:137:"Mozilla/5.0 (iPhone; CPU iPhone OS 10_0_1 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Mobile/14A403 Safari/602.1";s:5:"login";i:1482925471;}}'),
(408, 21, 'fave_author_title', ''),
(409, 21, 'fave_author_company', ''),
(410, 21, 'fave_author_phone', ''),
(411, 21, 'fave_author_fax', ''),
(412, 21, 'fave_author_mobile', ''),
(413, 21, 'fave_author_skype', ''),
(414, 21, 'fave_author_custom_picture', ''),
(415, 21, 'fave_author_agent_id', ''),
(416, 21, 'package_id', ''),
(417, 21, 'package_activation', ''),
(418, 21, 'package_listings', ''),
(419, 21, 'package_featured_listings', ''),
(420, 21, 'fave_paypal_profile', ''),
(421, 21, 'fave_stripe_user_profile', ''),
(422, 21, 'fave_author_facebook', ''),
(423, 21, 'fave_author_linkedin', ''),
(424, 21, 'fave_author_twitter', ''),
(425, 21, 'fave_author_pinterest', ''),
(426, 21, 'fave_author_instagram', ''),
(427, 21, 'fave_author_youtube', ''),
(428, 21, 'fave_author_vimeo', ''),
(429, 21, 'fave_author_googleplus', ''),
(430, 21, 'wp_dashboard_quick_press_last_post_id', '2115'),
(431, 21, 'wp_user-settings', 'editor=tinymce&libraryContent=browse'),
(432, 21, 'wp_user-settings-time', '1482831971'),
(433, 21, 'nav_menu_recently_edited', '59'),
(434, 21, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";i:4;s:15:"title-attribute";}'),
(435, 21, 'metaboxhidden_nav-menus', 'a:16:{i:0;s:26:"add-post-type-houzez_agent";i:1;s:29:"add-post-type-houzez_packages";i:2;s:22:"add-post-type-property";i:3;s:33:"add-post-type-houzez_testimonials";i:4;s:28:"add-post-type-houzez_partner";i:5;s:28:"add-post-type-houzez_invoice";i:6;s:27:"add-post-type-user_packages";i:7;s:12:"add-post_tag";i:8;s:15:"add-post_format";i:9;s:17:"add-property_type";i:10;s:20:"add-property_feature";i:11;s:19:"add-property_status";i:12;s:17:"add-property_city";i:13;s:17:"add-property_area";i:14;s:18:"add-property_state";i:15;s:18:"add-property_label";}'),
(436, 21, 'wp_r_tru_u_x', 'a:2:{s:2:"id";i:0;s:7:"expires";i:1482817759;}'),
(437, 1, 'closedpostboxes_services', 'a:1:{i:0;s:20:"qtranxs-meta-box-lsb";}'),
(438, 1, 'metaboxhidden_services', 'a:2:{i:0;s:8:"acf_2017";i:1;s:7:"slugdiv";}');

-- --------------------------------------------------------

--
-- Структура таблицы `wp_users`
--

CREATE TABLE IF NOT EXISTS `wp_users` (
  `ID` bigint(20) unsigned NOT NULL,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$Bma6bCTDjBdkUKm5D3yU0BbJ7FArgy.', 'admin', 'anzarsh@mail.ru', '', '2016-10-16 08:42:38', '', 0, 'admin'),
(3, 'anzar', '$P$BMJuHZnmSBozn786JofYOBYX1XYol/0', 'anzar', 'anzar@pochta.ru', '', '2016-12-02 17:49:19', '', 0, 'anzar'),
(5, 'aaaa', '$P$Bm6D/22h0odHHyodu2KvG3mJ9D322v0', 'aaaa', 'aaaa@aaaa.ru', '', '2016-12-04 11:36:57', '', 0, 'aaaa'),
(6, 'aaa', '$P$BL5jgtQoEtlUWX75tZiaR3EMUEFmo/.', 'aaa', 'aaa@aaa.ru', '', '2016-12-12 10:17:20', '', 0, 'aaa'),
(7, 'aaaaaa@mail.ru', '$P$BR3walgbCYXFnWW/p/Em6nfQJJa4Zb.', 'aaaaaamail-ru', 'aaaaaa@mail.ru', '', '2016-12-14 12:58:45', '', 0, 'aaaaaa@mail.ru'),
(8, 'asda@zasd.ru', '$P$BZZszNE2ED/HzPk9Dru/N2yUsdyf3i.', 'asdazasd-ru', 'asda@zasd.ru', '', '2016-12-15 07:05:17', '', 0, 'asda@zasd.ru'),
(9, 'asd@asd.ru', '$P$BqKuw2FmfC7W3efWQrHgmlJ7pRZMJz1', 'asdasd-ru', 'asd@asd.ru', '', '2016-12-15 07:27:24', '', 0, 'asd@asd.ru'),
(10, 'asd@asd.ru234', '$P$B8uMzXkJcJBKLC8gtQFY71.kuc5OKy.', 'asdasd-ru234', 'asd@asd.ru234', '', '2016-12-15 07:29:28', '', 0, 'asd@asd.ru234'),
(11, 'asd', '$P$B67juRtVh0MAV03YalRRIVmwHy8Dnx1', 'asd', '', '', '2016-12-15 17:34:05', '', 0, 'asd'),
(12, 'asdads', '$P$Bw3zBM4/bEBj2AbJoB1uNxiNlbp5Gv/', 'asdads', '', '', '2016-12-15 17:34:44', '', 0, 'asdads'),
(13, 'asdad', '$P$BnO7EC2nDscocZnhd9UEDoAlUpp.zP.', 'asdad', '', '', '2016-12-15 17:48:15', '', 0, 'asdad'),
(14, 'qwe', '$P$BsxAbvehzxVnio29NLqF7swoxHCnTt1', 'qwe', '', '', '2016-12-15 17:54:11', '', 0, 'qwe'),
(15, 'a@a.e', '$P$Bf6EdIOPx7SPm5UJdmxyVwW1iMCJaR0', 'aa-e', 'a@a.e', '', '2016-12-15 18:04:38', '', 0, 'a@a.e'),
(16, 'a@a.ew', '$P$Bsy75ygYWq6HfnxEg7VDae0JAT1XQ40', 'aa-ew', 'a@a.ew', '', '2016-12-15 18:12:21', '', 0, 'a@a.ew'),
(17, 'anzar@po.rr', '$P$BdAyVeSJKp18NRGcv/gSaLND65PPeb/', 'anzarpo-rr', 'anzar@po.rr', '', '2016-12-15 19:40:04', '', 0, 'anzar@po.rr'),
(18, 'asd@asd.ruqw', '$P$BWnD02LQU/NvS18uIpP494F5.NLVML.', 'asdasd-ruqw', 'asd@asd.ruqw', '', '2016-12-15 21:53:42', '', 0, 'asd@asd.ruqw'),
(19, 'sdd@fgdf.ru', '$P$BOKnhmSpt0a3DQdfnRPF99CdD53XNj0', 'sddfgdf-ru', 'sdd@fgdf.ru', '', '2016-12-16 07:38:18', '', 0, 'sdd@fgdf.ru'),
(20, 'a@a.ru', '$P$BqA9YG0RoKTBn4ZF.ZN3phU8UmVhG/0', 'aa-ru', 'a@a.ru', '', '2016-12-19 15:10:36', '', 0, 'a@a.ru'),
(21, 'Barbara Stoyanova', '$P$BNSEW5vuYApzQtl7NQsAcxPuUcgHa10', 'barbara-stoyanova', 'barbara.stoyanova@gmail.com', 'http://-', '2016-12-26 05:26:07', '1482729967:$P$BGhpnSKquiq7.ICdmQAVE9YYHDWlpk.', 0, 'Barbara');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `wp_revslider_css`
--
ALTER TABLE `wp_revslider_css`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `wp_revslider_layer_animations`
--
ALTER TABLE `wp_revslider_layer_animations`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `wp_revslider_navigations`
--
ALTER TABLE `wp_revslider_navigations`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `wp_revslider_sliders`
--
ALTER TABLE `wp_revslider_sliders`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `wp_revslider_slides`
--
ALTER TABLE `wp_revslider_slides`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `wp_revslider_static_slides`
--
ALTER TABLE `wp_revslider_static_slides`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Индексы таблицы `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Индексы таблицы `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Индексы таблицы `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Индексы таблицы `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `wp_revslider_css`
--
ALTER TABLE `wp_revslider_css`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT для таблицы `wp_revslider_layer_animations`
--
ALTER TABLE `wp_revslider_layer_animations`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_revslider_navigations`
--
ALTER TABLE `wp_revslider_navigations`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_revslider_sliders`
--
ALTER TABLE `wp_revslider_sliders`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `wp_revslider_slides`
--
ALTER TABLE `wp_revslider_slides`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `wp_revslider_static_slides`
--
ALTER TABLE `wp_revslider_static_slides`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT для таблицы `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT для таблицы `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=439;
--
-- AUTO_INCREMENT для таблицы `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
