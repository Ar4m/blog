-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 27 jan. 2020 à 06:03
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` longtext NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'post.png',
  `createdDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `createdDate`) VALUES
(11, 'Article 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna duis convallis convallis tellus. Lacus viverra vitae congue eu consequat ac. Volutpat ac tincidunt vitae semper. Fringilla ut morbi tincidunt augue interdum. Velit aliquet sagittis id consectetur purus ut faucibus pulvinar elementum. Nibh mauris cursus mattis molestie. Dictum non consectetur a erat nam at lectus urna. Ultricies mi eget mauris pharetra et ultrices neque ornare. Vel orci porta non pulvinar neque laoreet suspendisse. Arcu felis bibendum ut tristique et. Odio facilisis mauris sit amet massa vitae tortor condimentum. Ac turpis egestas integer eget aliquet nibh praesent. Viverra vitae congue eu consequat ac felis donec. Sit amet purus gravida quis. Pellentesque sit amet porttitor eget dolor morbi non arcu risus. Massa id neque aliquam vestibulum morbi. Cras adipiscing enim eu turpis egestas pretium. Ac felis donec et odio pellentesque diam volutpat commodo. Integer vitae justo eget magna fermentum iaculis eu non. Mi proin sed libero enim sed faucibus turpis in. Augue neque gravida in fermentum et sollicitudin ac orci. Malesuada fames ac turpis egestas sed tempus urna et pharetra. Posuere urna nec tincidunt praesent semper feugiat nibh. Dolor sit amet consectetur adipiscing elit duis. Turpis nunc eget lorem dolor sed viverra ipsum. Volutpat ac tincidunt vitae semper quis lectus nulla. Gravida quis blandit turpis cursus in hac habitasse platea. Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit. Nec dui nunc mattis enim. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc. Libero enim sed faucibus turpis. Senectus et netus et malesuada. Dolor sed viverra ipsum nunc aliquet bibendum. Fringilla urna porttitor rhoncus dolor purus. Cursus sit amet dictum sit amet justo donec enim diam. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Libero enim sed faucibus turpis in eu. Laoreet suspendisse interdum consectetur libero id faucibus nisl. Vel pharetra vel turpis nunc eget lorem. Vitae sapien pellentesque habitant morbi tristique. Tempus iaculis urna id volutpat. Mattis ullamcorper velit sed ullamcorper. Sit amet volutpat consequat mauris nunc congue nisi. Diam quis enim lobortis scelerisque fermentum. Tincidunt dui ut ornare lectus sit amet est. Consectetur adipiscing elit pellentesque habitant morbi. Est velit egestas dui id ornare arcu odio ut sem. Aliquam sem fringilla ut morbi. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Mus mauris vitae ultricies leo integer malesuada. Dictum non consectetur a erat. Ac ut consequat semper viverra nam libero justo laoreet. Cras fermentum odio eu feugiat pretium nibh. Amet nisl suscipit adipiscing bibendum est ultricies integer. Egestas congue quisque egestas diam in arcu cursus. Sapien eget mi proin sed. Tortor id aliquet lectus proin nibh nisl condimentum. Sed viverra ipsum nunc aliquet bibendum enim facilisis. Curabitur vitae nunc sed velit dignissim sodales. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Molestie ac feugiat sed lectus vestibulum. Ut enim blandit volutpat maecenas volutpat blandit aliquam. Facilisi etiam dignissim diam quis enim lobortis. Purus non enim praesent elementum facilisis. Pharetra massa massa ultricies mi quis. Habitant morbi tristique senectus et netus. Dolor purus non enim praesent elementum facilisis leo vel fringilla. Ullamcorper eget nulla facilisi etiam dignissim. Est sit amet facilisis magna. Tellus orci ac auctor augue mauris augue neque gravida in. Cursus mattis molestie a iaculis at erat pellentesque adipiscing commodo. Sed velit dignissim sodales ut eu. Egestas purus viverra accumsan in nisl. Et ligula ullamcorper malesuada proin libero.</p>', '', '2020-01-26 16:08:55'),
(24, 'Article 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis urna cursus eget nunc scelerisque viverra mauris. Tortor vitae purus faucibus ornare suspendisse sed nisi. Varius vel pharetra vel turpis. Nullam non nisi est sit amet facilisis magna etiam. Leo vel fringilla est ullamcorper eget nulla facilisi etiam dignissim. Porta non pulvinar neque laoreet suspendisse interdum. Tincidunt nunc pulvinar sapien et ligula. Arcu dui vivamus arcu felis bibendum ut tristique. Vitae tortor condimentum lacinia quis vel eros. Tortor vitae purus faucibus ornare suspendisse. In tellus integer feugiat scelerisque varius morbi enim nunc.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur. Purus sit amet volutpat consequat mauris nunc. Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Convallis convallis tellus id interdum velit laoreet id donec ultrices. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Pellentesque adipiscing commodo elit at imperdiet dui. Orci ac auctor augue mauris augue neque gravida in. Morbi blandit cursus risus at ultrices mi tempus imperdiet nulla. Lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor. Nulla posuere sollicitudin aliquam ultrices sagittis orci. Dictum varius duis at consectetur lorem donec massa sapien faucibus. Duis at tellus at urna condimentum mattis. Convallis convallis tellus id interdum. Magna fermentum iaculis eu non. Porttitor eget dolor morbi non arcu risus quis. Sit amet mauris commodo quis imperdiet massa tincidunt. Risus quis varius quam quisque. Habitant morbi tristique senectus et netus. Vel pretium lectus quam id. Mi proin sed libero enim sed.</p>\r\n<p>Felis imperdiet proin fermentum leo vel orci porta. Tristique nulla aliquet enim tortor. Egestas fringilla phasellus faucibus scelerisque eleifend donec. Dolor sit amet consectetur adipiscing. Sit amet dictum sit amet justo donec. Duis tristique sollicitudin nibh sit amet commodo nulla. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Ut etiam sit amet nisl purus in. Amet consectetur adipiscing elit pellentesque habitant morbi tristique. Amet consectetur adipiscing elit duis tristique sollicitudin. Amet risus nullam eget felis eget nunc lobortis mattis. Rhoncus aenean vel elit scelerisque. Maecenas ultricies mi eget mauris.</p>\r\n<p>Arcu cursus euismod quis viverra nibh cras pulvinar. Sed cras ornare arcu dui vivamus arcu. Semper auctor neque vitae tempus quam pellentesque nec nam aliquam. Est velit egestas dui id ornare arcu. Eget est lorem ipsum dolor sit. Molestie at elementum eu facilisis sed odio morbi quis commodo. Amet est placerat in egestas erat. Dictum non consectetur a erat nam at lectus urna. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Habitant morbi tristique senectus et netus et malesuada fames ac. At tellus at urna condimentum mattis. Iaculis eu non diam phasellus vestibulum lorem sed risus ultricies. Tincidunt arcu non sodales neque sodales. Diam maecenas ultricies mi eget mauris pharetra et ultrices neque. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus. Sed libero enim sed faucibus turpis in eu. A scelerisque purus semper eget duis at tellus at. Posuere ac ut consequat semper viverra nam. Sit amet massa vitae tortor condimentum lacinia quis.</p>\r\n<p>Nunc mattis enim ut tellus elementum sagittis vitae et. Facilisi cras fermentum odio eu. In eu mi bibendum neque. Potenti nullam ac tortor vitae purus faucibus ornare suspendisse. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Viverra ipsum nunc aliquet bibendum enim facilisis. Duis at tellus at urna condimentum. Malesuada fames ac turpis egestas integer eget aliquet nibh. Viverra nam libero justo laoreet sit amet cursus. Aliquet sagittis id consectetur purus. Enim nunc faucibus a pellentesque sit amet. In aliquam sem fringilla ut morbi tincidunt.</p>', '', '2020-01-26 18:33:05'),
(40, 'Article 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc sed id semper risus in hendrerit gravida. Nisl rhoncus mattis rhoncus urna neque viverra. Faucibus interdum posuere lorem ipsum dolor sit amet. Mattis ullamcorper velit sed ullamcorper morbi. Senectus et netus et malesuada fames. Vulputate odio ut enim blandit volutpat maecenas volutpat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. Non arcu risus quis varius. Diam vulputate ut pharetra sit amet aliquam id diam. Nibh tortor id aliquet lectus proin nibh nisl condimentum. Sit amet cursus sit amet dictum sit amet.</p>\r\n<p><img class=\"\" src=\"static/source/petite%20image.jpg\" alt=\"\" width=\"245\" height=\"232\" /></p>\r\n<p>Egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Fermentum iaculis eu non diam. Ultrices sagittis orci a scelerisque purus semper. Ac turpis egestas sed tempus urna. Dui accumsan sit amet nulla facilisi. Aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc. Varius sit amet mattis vulputate enim nulla aliquet porttitor. Ullamcorper dignissim cras tincidunt lobortis feugiat. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit. Condimentum vitae sapien pellentesque habitant morbi tristique. Cras fermentum odio eu feugiat pretium nibh ipsum consequat nisl. Leo a diam sollicitudin tempor id eu nisl nunc mi. Neque volutpat ac tincidunt vitae semper quis lectus nulla.</p>\r\n<p>Quis blandit turpis cursus in hac habitasse platea dictumst quisque. Tincidunt vitae semper quis lectus nulla at volutpat. Sed sed risus pretium quam vulputate dignissim suspendisse in est. Duis at tellus at urna condimentum mattis. Volutpat lacus laoreet non curabitur gravida arcu ac tortor. Sed odio morbi quis commodo. In vitae turpis massa sed elementum tempus egestas. Dui ut ornare lectus sit amet. In pellentesque massa placerat duis ultricies. Accumsan lacus vel facilisis volutpat est velit egestas dui. Arcu cursus euismod quis viverra nibh cras pulvinar mattis. Cursus vitae congue mauris rhoncus aenean vel. Lacus luctus accumsan tortor posuere.</p>', '', '2020-01-26 13:41:04');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(120) NOT NULL,
  `password` char(60) NOT NULL,
  `admin` int(11) DEFAULT NULL,
  `pseudo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `admin`, `pseudo`) VALUES
(16, 'admin@admin.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', 1, 'admin'),
(17, 'test@test.com', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', NULL, 'testeur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
