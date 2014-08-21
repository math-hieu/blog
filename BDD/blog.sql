-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 03 Juin 2013 à 16:04
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `techno_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `techno_id` (`techno_id`),
  KEY `techno_id_2` (`techno_id`),
  KEY `techno_id_3` (`techno_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Contenu de la table `blog`
--

INSERT INTO `blog` (`id`, `title`, `author`, `text`, `created`, `updated`, `techno_id`) VALUES
(1, 'Commande indispensable', 'Mathieu Thomas', '<div style="background:#eee; border:1px solid #ccc; padding:5px 10px">Cr&eacute;ation d&#39;un Bundle</div>\r\n\r\n<ul>\r\n	<li>php app/console generate:bundle</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style="background:#eee; border:1px solid #ccc; padding:5px 10px">V&eacute;rifier les routes installer dans Symfony</div>\r\n\r\n<ul>\r\n	<li>php app/console router:debug</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style="background:#eee; border:1px solid #ccc; padding:5px 10px">Cr&eacute;ation des assets d&#39;un Bundle accessible par le web</div>\r\n\r\n<ul>\r\n	<li>php app/console assets:install web/ --symlink</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style="background:#eee; border:1px solid #ccc; padding:5px 10px">Cr&eacute;ation des entit&eacute;es dans doctrine</div>\r\n\r\n<ul>\r\n	<li>\r\n	<p>php app/console generate:doctrine:entity<br />\r\n	<samp><em>G&eacute;n&egrave;re une nouvelle entit&eacute;/classe dans le bundle s&eacute;lectionn&eacute;</em></samp></p>\r\n	</li>\r\n	<li>\r\n	<p>php app/console doctrine:schema:update<br />\r\n	<samp><em>Update du schema.yml</em></samp></p>\r\n	</li>\r\n	<li>\r\n	<p>php app/console doctrine:schema:update --dump-sql<br />\r\n	<samp><em>Affiche la requ&egrave;te SQL qui sera &eacute;x&eacute;cut&eacute; pour g&eacute;n&eacute;r&eacute; la base de donn&eacute;e suivant le schema.yml</em></samp></p>\r\n	</li>\r\n	<li>\r\n	<p>php app/console doctrine:schema:update --force<br />\r\n	<samp><em>On force la mise &agrave; jour de la base de donn&eacute;es</em></samp></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style="background:#eee;border:1px solid #ccc;padding:5px 10px;">Cr&eacute;ation du mod&egrave;le de donn&eacute;e &agrave; partir de la base de donn&eacute;es</div>\r\n\r\n<ul>\r\n	<li>\r\n	<p>php app/console doctrine:mapping:convert yml ./src/[package]/[Bundle]/Resources/config/doctrine/metadata/orm --from-database --force<br />\r\n	<em><samp>Cette </samp> <samp>commande g&eacute;n&egrave;re le sch&eacute;ma.yml dans le dossier sp&eacute;cifi&eacute;.</samp></em></p>\r\n	</li>\r\n	<li>\r\n	<p>php app/console doctrine:mapping:import [packageBundle] annotation</p>\r\n	</li>\r\n	<li>\r\n	<p>php app/console doctrine:generate:entities AcmeBlogBundle</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>La premi&egrave;re commande g&eacute;n&egrave;re les classes entit&eacute; avec des annotations de correspondance, mais vous pouvez bien s&ucirc;r changer l&#39;argument <tt><code>annotation</code></tt> pour &ecirc;tre <tt><code>xml</code></tt> ou <tt><code>yml</code></tt>.</p>\r\n\r\n<p>La derni&egrave;re commande a g&eacute;n&eacute;r&eacute; tous les &laquo; getters &raquo; et &laquo; setters &raquo; pour les propri&eacute;t&eacute;s.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2013-05-27 00:00:00', NULL, 1),
(11, 'Vhost d''installation', 'Mathieu Thomas', '<p>Afin que notre nouvelle application Symfony2 pointe vers l&#39;adresse : http://localhost:8080 en local. Il faut ajouter un <strong>Vhost</strong>.</p>\r\n\r\n<p>Pour cela, rendez-vous dans :</p>\r\n\r\n<ul>\r\n	<li>Windows : c:\\wamp\\bin\\apache\\apache2.2.[votre_version]\\conf</li>\r\n</ul>\r\n\r\n<p>Editez le fichier <strong>httpd.conf</strong> et ajoutez &agrave; la fin du fichier:</p>\r\n\r\n<p><tt>NameVirtualHost 127.0.0.1:8080</tt></p>\r\n\r\n<p><tt>Listen 127.0.0.1:8080</tt></p>\r\n\r\n<p><tt>&lt;VirtualHost 127.0.0.1:8080&gt;<br />\r\n&nbsp;&nbsp;&nbsp; DocumentRoot &quot;c:/wamp/www/[votre-projet]/web&quot;<br />\r\n&nbsp;&nbsp;&nbsp; DirectoryIndex app.php<br />\r\n&nbsp;&nbsp;&nbsp; ErrorLog &quot;c:/wamp/bin/apache/apache2.2.22/logs/sym-error.log&quot;<br />\r\n&nbsp;&nbsp;&nbsp; CustomLog &quot;c:/wamp/bin/apache/apache2.2.22/logs/sym-access.log&quot; combined<br />\r\n&nbsp;&nbsp;&nbsp; &lt;Directory &quot;c:/wamp/www/[votre-projet]/web&quot;&gt;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; AllowOverride All<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Allow from All<br />\r\n&nbsp;&nbsp;&nbsp; &lt;/Directory&gt;<br />\r\n&lt;/VirtualHost&gt;</tt></p>\r\n\r\n<p>&nbsp;</p>', '2013-06-03 00:00:00', NULL, 1),
(12, 'Aide-mémoire TWIG', 'Mathieu Thomas', '<p><strong>Quelques fonctions indispensables leur de la cr&eacute;ation d&#39;une template</strong></p>\r\n\r\n<div style="background:#eee; border:1px solid #ccc; padding:5px 10px">\r\n<pre>\r\n&lt;!-- g&eacute;n&eacute;rer une URL --&gt;\r\n{{ path (&quot;ma_route&quot;, {&quot;elementId&quot;: 12} ) }}\r\n\r\n&lt;!-- appeler une action d&#39;un bundle depuis un template twig --&gt;\r\n{% render &#39;KitpagesCmsBundle:Zone:widget&#39; with {&#39;slug&#39;: &#39;actuHome&#39;} %}\r\n\r\n&lt;!-- inclure un template dans un autre --&gt;\r\n{% include &#39;AppSiteBundle:Page:template/_bigContent.html.twig&#39; %}\r\n\r\n&lt;!-- inclure un template dans un autre en modifiant des variables,\r\nonly indique que les autres variables ne sont pas transmises --&gt;\r\n{% include &#39;AppSiteBundle:Page:template/_bigContent.html.twig&#39; \r\n  with {&#39;foo&#39;: &#39;bar&#39;} only %}\r\n\r\n&lt;!-- acc&egrave;s &agrave; des assets globaux --&gt;\r\n&lt;img src=&quot;{{asset(&#39;img/footer/logo-footer.png&#39;)}}&quot; alt=&quot;back to home&quot;/&gt;\r\n\r\n&lt;!-- acc&egrave;s &agrave; un asset &agrave; l&#39;int&eacute;rieur d&#39;un bundle --&gt;\r\n&lt;link href=&quot;{{ asset(&#39;bundles/kitpagescms/css/common.css&#39;) }}&quot;\r\nrel=&quot;stylesheet&quot; type=&quot;text/css&quot; media=&quot;all&quot; /&gt;</pre>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Objet accessible par Twig dans un template</strong></p>\r\n\r\n<div style="background:#eee; border:1px solid #ccc; padding:5px 10px">\r\n<ul>\r\n	<li>app.security\r\n	<ul>\r\n		<li>.token\r\n		<ul>\r\n			<li>.key</li>\r\n			<li>.user</li>\r\n			<li>.roles</li>\r\n			<li>.authenticated</li>\r\n			<li>.attributes</li>\r\n		</ul>\r\n		</li>\r\n		<li>.alwaysAuthenticate</li>\r\n	</ul>\r\n	</li>\r\n	<li>app.user (entity User)</li>\r\n	<li>app.request\r\n	<ul>\r\n		<li>.attributes</li>\r\n		<li>.query</li>\r\n		<li>.server</li>\r\n		<li>.files</li>\r\n		<li>.cookies</li>\r\n		<li>.headers</li>\r\n		<li>.content</li>\r\n		<li>.languages</li>\r\n		<li>.charsets</li>\r\n		<li>.acceptableContentTypes</li>\r\n		<li>.pathInfo</li>\r\n		<li>.requestUri</li>\r\n		<li>.baseUrl</li>\r\n		<li>.basePath</li>\r\n		<li>.method</li>\r\n		<li>.format</li>\r\n	</ul>\r\n	</li>\r\n	<li>app.session\r\n	<ul>\r\n		<li>.locale</li>\r\n		<li>.defaultLocale</li>\r\n		<li>.saved</li>\r\n	</ul>\r\n	</li>\r\n	<li>app.environment</li>\r\n	<li>app.debug</li>\r\n</ul>\r\n\r\n<pre>\r\n&lt;!-- Permet par exemple de r&eacute;cup&eacute;rer le nom de la route --&gt;\r\n{{ app.request.attributes.get(&#39;_route&#39;) }}</pre>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Syntaxe pratique de Twig</strong></p>\r\n\r\n<div style="background:#eee; border:1px solid #ccc; padding:5px 10px">\r\n<pre>\r\n&lt;!-- formater une date --&gt;\r\n{{ entity.createdAt|date(&quot;d-m-Y&quot;) }}</pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n&lt;!-- Interprete les balise HTML --&gt;\r\n{{ entity.article|raw }}</pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n&lt;!-- Dans twig, pour faire un var_dump() de $varname --&gt;\r\n{% debug expression.varname %}</pre>\r\n</div>', '2013-06-03 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `blog_comment`
--

CREATE TABLE IF NOT EXISTS `blog_comment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `blog_id` int(20) NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_comment_post_id_idx` (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `blog_techno`
--

CREATE TABLE IF NOT EXISTS `blog_techno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `techno` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `blog_techno`
--

INSERT INTO `blog_techno` (`id`, `techno`) VALUES
(1, 'Symfony2'),
(2, 'Symfony1.4');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`techno_id`) REFERENCES `blog_techno` (`id`);

--
-- Contraintes pour la table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD CONSTRAINT `blog_id` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
