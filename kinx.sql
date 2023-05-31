-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 03:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_models`
--

CREATE TABLE `admin_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_models`
--

INSERT INTO `admin_models` (`id`, `Full_name`, `Username`, `Email`, `Password`, `Phone`, `Gender`, `Image`, `created_at`, `updated_at`) VALUES
(1, 'kelvin Osas', 'kelvin', 'markel123@gmail.com', '$2y$10$xqX5R9wV6taNOPfVBzK5vuBi.SdraMjZkzbeoNw3lqn7hpdats3X6', 8162942636, NULL, 'Imgs/oSY0QexwgtNTfA041bs5hGodFmONt15bnRBO5lx1.jpg', '2022-10-17 05:37:43', '2022-11-09 22:57:12'),
(2, 'kelvin Osazee', 'kelvin', 'lvinzamani@gmail.com', '$2y$10$ZEO4FEJggK/PhypYtF2Ae.EhgcywMcbIu/tXLjZ6tJV4GTaPM4fze', 8162942636, NULL, 'Imgs/nEzV7SSrxTKwFc3Jx13KbsNIRzroyZ0PxXTYGxyx.jpg', '2022-11-09 02:05:47', '2022-11-09 02:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories_models`
--

CREATE TABLE `categories_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `Content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_models`
--

INSERT INTO `categories_models` (`id`, `cat_id`, `Content`, `Images`, `Title`, `Author`, `Categories`, `Description`, `created_at`, `updated_at`) VALUES
(13, 1, 'Jude Bellingham is wanted by Liverpool, Chelsea and Manchester City', 'category_img/d2TdlnfgZAP0QMc5bsEXbXEKcNDVa5ji3buRoWX2.jpg', 'Borussia Dortmund will demand €150m for Jude Bellingham as Chelsea, Liverpool and Manchester City circle', 'knx', 'Football', 'The 19-year-old is expected to be one of the most in-demand midfielders at the end of the season following his impressive performances for Dortmund this term.\r\n\r\nBellingham is believes to be one of Liverpool’s top targets with Jurgen Klopp keen to strengthen his midfield options after a poor start to the campaign.\r\n\r\nBut Liverpool face stiff competition as Chelsea and Manchester City are also in the running, while Real Madrid have registered their interest.According to Bild, Dortmund are aware that it will be difficult to keep Bellingham for another year, but the German club will hold out for a €150m (£128.9m) transfer fee.\r\n\r\nThe report also claims that Dortmund are aware of interest from Real Madrid, Manchester City, Chelsea and Liverpool.Speaking about his future last week, Bellingham said: ‘In all honesty I’m not thinking about anything like that [the transfer rumours].\r\n\r\n‘You [the media] will be angry with me as you won’t get a headline, but I’m just focused on the next games with Borussia Dortmund.\r\n\r\n‘I’m not even thinking about the World Cup. I’m trying to win games with Borussia Dortmund and then we’ll see what happens.’', '2022-11-02 20:27:15', '2022-11-02 20:27:15'),
(14, 1, 'Kalidou Koulibaly has endured a difficult start to his Chelsea career', 'category_img/6DaW9dWOQHfvlfczQF4SW5WPVZbuMgZHWWWyBOlP.jpg', 'Kalidou Koulibaly reveals two Chelsea legends told he could struggle at new club', 'Knx', 'Football', 'The Senegal international had been coveted by a succession of Chelsea managers in the past but eventually made the move to the Premier League in the summer to fill the void left by Andreas Christensen and Antonio Rudiger.\r\n\r\nKoulibaly enjoyed an encouraging start under Thomas Tuchel but suffered a chastening experience in a 3-0 defeat during which he was sent off for two bookable offences.\r\n\r\nKoulibaly returned to first team training earlier this week and could be available for tomorrow night’s Champions League game against Dinamo Zagreb.\r\n\r\nThe former Napoli captain has vowed to underline his importance to his new manager and knew it would take time for him to adapt to the rigours of English football.\r\n\r\n‘The beauty of football is also this, I arrive with a coach who wanted me at all costs and then he leaves,’ Koulibaly told Corriere della Sera. ‘Both Tuchel and Potter play with the three-man defence. At Napoli I was used to playing with a four-man backline. It’s another arrow that I put in my bow, you never stop learning. \r\n\r\n‘I knew I was going to have a hard time, and it has been this way. Even Zola, Drogba had anticipated it would be and told me.’Despite his difficulties, Koulibaly insists he harbours no regrets about leaving Napoli after eight years with the Italian club, but still holds a special affection for his old team.\r\n\r\nHe added: ‘I believe in destiny. My period was over, I had given everything. From the point of view of emotions it changes little. I feel every goal, every victory, as if I lived them first hand. \r\n\r\n‘This Naples is my Naples. I am happy to have contributed to the growth of the team. Do you know what I’m talking about in the Chelsea locker room? Of the victories of my former teammates. And do you know why? I’m proud of it. I often hear Anguissa, Osimhen. I have also exchanged messages with Kvara, whom I don’t know yet.’\r\n\r\nThe 31-year-old has struggled to hold down a place since the appointment of Graham Potter with an injury rendering him unavailable for the last three matches.', '2022-11-02 20:31:27', '2022-11-02 20:31:27'),
(15, 1, 'Crawford and Spence remain separated by promotional red tape', 'category_img/H9JXhrU9fLIbTYNZeoYWo8IUm6Q6eUXzIxmtLsFb.jpg', '‘Disrespected and stepped on’ – Terence Crawford breaks silence over failed Errol Spence Jr negotiations', 'Knx', 'Boxing', 'WBO champion Crawford and IBF, WBC and WBA champion Spence sit at the summit of the welterweight division, both undefeated, pound-for-pound greats operating at the peak of their powers.\r\n\r\nA unification bout between the two with all the gold at 147lbs on the line represents one of the most eagerly anticipated fights in boxing with genuine hope the fight was close to being made earlier this year.\r\n\r\nAn exasperating year for boxing fans – who have also seen Tyson Fury vs Anthony Joshua collapse – provided more frustration with Crawford vs Spence talks coming to a halt due to a contract dispute last month.Crawford is now set to fight the undefeated David Avanesyan in December with reports suggesting the American will bank a career-high payday from that title defence.\r\n\r\nAddressing how and why the fight broke down, Crawford sat down for a ‘raw and uncut’ Instagram Live on Tuesday night where he revealed two unnamed groups offered to pay him and Spence a guaranteed purse of $25million each for the fight.\r\n\r\nAfter personally informing Spence of the deal, Crawford then turned to Al Haymon, Spence’s advisor to get the deal over the line. Haymon however refused to work with third parties, it is claimed.Crawford also insisted he was ready to accept an offer that would have seen him move forward without a guaranteed split, convinced a share of the revenue would make it worthwhile.\r\n\r\n‘We were just going back and forth on the numbers,’ Spence said during the 20-minute video. ‘I had two companies reach out to me, that wanted to give me and spence $25m guaranteed.\r\n\r\n‘A real guy like myself, I called Spence. He had to go back and ask Al for permission. He didn’t call me back. So I went back to Al and Al told me straight up, “I’m not letting anyone touch this fight”.\r\n\r\n‘I was the only one taking all the risk. So I told him I will take no guarantee, I will take the lesser end of the money. Whatever it is you want, I will take it because that is how much confidence I have got that I beat that man.\r\n\r\n‘Even though I knew I was getting f****d in the long run, I just wanted a little transparency.’\r\n\r\nSpence continued: ‘So you mad at me, for taking a fight against a tough opponent for a bigger pursue, a guarantee that I wasn’t even going to get (with you). You crazy in the head.\r\n\r\n‘You expect me to be disrespected, ran over and stepped on and just sit there at take it.’\r\n\r\nWith Crawford taking o Avanesyan 10 December, Spence could now be in action the following week against Keith Thurman on 17 December.', '2022-11-02 20:34:42', '2022-11-02 20:34:42'),
(16, 1, 'Russia/Ukraine war: Nigerian students to continue studies online, in other nations', 'category_img/TWHEVN4jWFWJYW17aI1azxCESCj8XUGdzuNLYqKV.jpg', 'Russia/Ukraine war: Nigerian students to continue studies online, in other nations', 'Knx', 'Education', 'Nigerian students, whose programmes were abruptly interrupted by the Russia-Ukraine war, would continue their studies online and in other admitting institutions of choice.\r\n\r\nAddressing the 36th media briefing at the Presidential Villa, Abuja, yesterday, Permanent Secretary, Ministry of Foreign Affairs, Gabriel Aduda, noted that besides those institutions that have begun virtual classes since the outset of the conflict, other universities in neighbouring nations, with similar curricular to Ukraine’s, have readily offered Nigerian students admissions to complete their studies.\r\n\r\nAduda, who joined the Minister of State for Foreign Affairs, Ambassador Zubairu Dada, during the session, explained that all admission processes must be done through the Nigerian missions.\r\n\r\nHis words: “Some universities have continued their classes online. But also, some universities in neighbouring countries such as Romania have reached out to us to offer placement to our students, who want to continue their studies physically.\r\n\r\n“However, all processing must be done through Nigerian missions. That’s the only way these nations can know that the students were in Ukraine.\r\n\r\n“Education desks are being set up in our missions and the government is happy to help get them (students) placement in universities that have offered to help.\r\n\r\n“The forms will be available to students. A lot of students are being taken in. In Romania, some universities have opened their hostels to Nigerian students fleeing the war to continue their studies.”\r\n\r\nDada, on his part, said government was seeking justice for Itunu Babalola, the 21-year-old trader, who was wrongfully jailed and died in Cote d’ Ivoire late last year.\r\n\r\nHe said staff of the Nigerian embassy in Abidjan underwrote the legal bills of the deceased.', '2022-11-02 20:43:03', '2022-11-02 20:43:03'),
(19, 2, 'Armando Broja has opened up about his lack of game time at Chelsea this season and rumours linking him with an exit in the summer.', 'category_img/Kjg4jkcSWygIVCw0WsmYrwQcqLR5o59cpiJQNztm.jpg', 'Armando Broja opens up about his lack of game time and speculation over his future at Chelsea', 'Knx', 'Football', 'Broja impressed last season on loan at Southampton in the Premier League, scoring six goals across 32 games.\r\n\r\nThe 21-year-old Albania international had been linked with several Premier League clubs in the summer, but opted to stay at Stamford Bridge and ended up signing a new six-year deal to stay and fight for his place in west London.\r\n\r\nBroja progressed through the Blues’ academy and describes Chelsea as his ‘boyhood club’.The Slough-born forward registered his first Chelsea goal in the 3-0 victory over Wolves last month.\r\n\r\nThat has been Broja’s only goal from 14 appearances this season, although he has only made one start and has been limited to 272 minutes of action.\r\n\r\nGraham Potter described Broja’s first start for Chelsea this season as ‘okay’ following the Blues’ disappointing 0-0 draw with Brentford in October.Speaking about his lack of playing time, Broja said: ‘I’ll try and perform as much as possible on the pitch and in training to get chances.\r\n\r\n‘The competitiveness is very big and I know it’s not going to be easy but it’s something I look forward to.\r\n\r\n‘I play quite freely. I try and do my best. When the manager does put me on, I try and provide a goal or assist. You’ve just got to give your best for the team.‘I try to look at the positives from it. Every day working with big footballers, it’s a positive impact for me as a football player.\r\n\r\n‘I look forward to the opportunities [Graham Potter] does give me. It shows the manager does trust me.’\r\n\r\nQuizzed about reports in the summer that he could have left Chelsea for a different club in the Premier League, Broja added: ‘There’s always talk.‘You see it at every club. I was just focused on getting ready for the season and showing the manager what I can do. I wasn’t really too sure what was going on outside.\r\n\r\n‘I see [the new contract] as a massive opportunity for me. This is my boyhood club. I want to do my best and give it my all to break into the starting lineup.\r\n\r\n‘For me, it’s a big stepping stone from where I was last season to where I am now. That’s my aim, to get better. There’s not many better clubs [you can be at] to learn.’', '2022-11-14 21:57:25', '2022-11-14 21:57:25'),
(20, 2, 'David Beckham has been slated on Good Morning Britain for being a paid ambassador for Qatar where homosexuality is illegal.', 'category_img/ommAyVNgU6fp0I1gzsZTMkK70zCNZobw82YoXZLt.jpg', 'David Beckham lambasted on Good Morning Britain for Qatar ambassador role: ‘He should be hanging his head in shame’', 'Knx', 'Entertainment', 'The ex-footballer has come under fire in recent weeks over his controversial position, with Joe Lycett demanding that he forfeits his role before the World Cup 2022 gets underway next week.\r\n\r\nIf Beckham fails to comply with Lycett’s proposition, the comedian has vowed to shred £10,000 of his own money on a live stream as well as shred the sports star’s status as a ‘gay icon’.\r\n\r\nPresenters Susanna Reid and Richard Madeley discussed the pressure facing Beckham on Monday’s Good Morning Britain, prompting political journalist Andrew Pierce, who is a regular feature on the programme, to hit out.‘As you know I don’t watch football, but I would not go to that country as a gay man because I would be very worried,’ he said.Pierce continued: ‘As for David Beckham, he should be hanging his head in shame. He is a gay icon, hugely popular around the world, and he’s doing this for one reason: millions in the bank.’\r\n\r\nIn August, Beckham confirmed his reported £10million deal with an advert promoting Qatar tourism released in September ahead of the major sporting event. His collaboration sparked outrage among many, including television personality Rob Rinder, who accused the sports star of choosing ‘money over morals’.In a video message, comedian Lycett addressed Beckham directly and called for him to end his relationship with Qatar.\r\n\r\n‘If you end your relationship with Qatar, I will donate ten grand of my own money (that’s a grand for every million you’re reportedly getting) to charities that support queer people in football,’ he said.However, if you do not, I will throw the money into a shredder at midday next Sunday, just before the opening ceremony of the World Cup and stream it right here. Not just the money, but also your status as gay icon will be shredded.’Homosexuality is illegal in Qatar and anyone found participating in same-sex sexual activity can be punished by up to seven years in prison.\r\n\r\nForeign Office advice notes ‘any intimacy between persons in public can be considered offensive, regardless of gender, sexual orientation or intent’.', '2022-11-14 22:02:19', '2022-11-15 21:09:34'),
(21, 2, 'Former Manchester United and England defender Rio Ferdinand says he would ‘put his house’ on three teams finishing in the top-four this season.', 'category_img/1qnJb7OX9YgMIbfVH3gxElqX12fpdsOTp4dBkbRn.jpg', 'Manchester United legend Rio Ferdinand would ‘put his house’ on three teams finishing in the top-four', 'KinxMedia', 'Football', 'Ferdinand believes the top-four race is beginning to take shape with Arsenal and Manchester City threatening to pull away from their rivals and the four clubs below separated by just five points.\r\n\r\nThe Gunners, who finished fifth last season, have enjoyed their best ever start to a league campaign, amassing 31 points from 12 games to top the table.\r\n\r\nDefending champions Man City appear to be in ominous form sitting second while Antonio Conte’s Tottenham are third despite the questions over Spurs’ style of play.Newcastle United, one of the richest clubs in the world following their Saudi-backed takeover last year, have only lost once this season to climb to fourth.\r\n\r\nManchester United are also impressing under Erik ten Hag and moved ahead of Chelsea into fifth over the weekend.\r\n\r\nNewly-promoted Fulham and Graham Potter’s former club Brighton are seventh and eighth respectively, ahead of Liverpool who are enduring a dismal run, winning just a third of their league fixtures.While there is still much to play for, Ferdinand is adamant that three teams will finish in the top-four, insisting he would ‘put his house’ on the outcome.\r\n\r\nSpeaking on the Vibe with Five YouTube channel, he said: ‘It will be Arsenal, Man City and Man United – they are the three teams I would put my house on now.\r\n\r\n‘And then the fourth one I can’t pick. Newcastle could come in and take it.’\r\n\r\nLiverpool were expected to challenge for the Premier League title after going close to the quadruple last season but a shocking run has seen the Reds slip to mid-table.Rating Liverpool’s top-four chances after Saturday’s shock defeat to Leeds United, Klopp said: ‘That is actually not my main worry.\r\n\r\n‘There are a lot of other worries, but of course I am not that dumb that I don’t know about distances and who is up there.\r\n\r\n‘But we cannot qualify for the Champions League if you play as inconsistent as we do at the moment. We have to fix that and then we will see where we will end up.\r\n\r\n‘We know everything is possible, or a lot of things are possible. But for that we have to win football games and we didn’t do that often enough yet.’Manchester United legend Gary Neville, meanwhile, has backed his former club to make the top-four this season following their turnaround under Ten Hag.\r\n\r\nThe Red Devils lost their opening two games of the season but have largely impressed since then, winning six from eight in all competitions.\r\n\r\n‘I think they have a great chance of finishing in the top four now. A great chance,’ Neville told Sky Sports.\r\n\r\n‘I think there is enough around Chelsea, Liverpool, and Spurs that United will feel they can push through that bunch. I never would have thought that four or five weeks ago.’', '2022-11-14 22:04:44', '2022-11-14 22:04:44'),
(22, 2, 'Chelsea have told Brazilian sensation Endrick that he will have a place in the first team when he joins the club as the Blues look to beat off competition from Real Madrid and PSG for his signature.', 'category_img/jtAwuiLPuBOnSx6C6plemOKLMkYxpJkFJJBGYINi.jpg', 'Chelsea make transfer promise to Endrick as Palmeiras set big asking price', 'KinxMedia', 'Gossip', 'The 16-year-old Palmeiras star has netted three times in just six top-flight appearances – registering a goal or assist every 61 minutes – and has already been dubbed ‘the new Neymar’ after helping his side lift the Brazilian title.\r\n\r\nSome of Europe’s biggest clubs are circling, with Real Madrid long having been considered the frontrunners given their well-established recruitment network in South America – which has seen the likes of Federico Valverde and Vinicius Junior join as teenagers.\r\n\r\nBut Chelsea are ‘pushing hard’ to land Endrick and have been ramping up their charm offensive in recent weeks, having invited the youngster’s family to their Cobham training centre.They were also introduced to Thiago Silva, who attempted to sell the club to the young forward’s family, while the legendary Brazilian skipper is also believed to have met Endrick personally.\r\n\r\nNow transfer guru Fabrizio Romano claims Chelsea made a promise to the teenager’s family during their recent meeting in which the west London club gave assurances that Endrick would be fast-tracked straight into the first team when he eventually joins.\r\n\r\nHe cannot actually sign with a club until early 2023, while a move to Europe will have to wait another year after that once he has turned 18.By that time, though, Chelsea believe he will have firmly established himself at Palmeiras – accruing plenty of experience in the process – and will be ready to step straight up into the first-team squad at Stamford Bridge.\r\n\r\nThe Blues told Endrick’s entourage that they view him as one of the most promising teenagers in world football and can be an ‘important’ player from the moment he arrives at the club in 2024.\r\n\r\nEndrick’s family will weigh up a host of factors before deciding which club to join, with a clear pathway and development plan one of their main considerations.Whoever wants to sign the teenager will also have to stump up a massive fee, with Fabrizio Romano confirming that Palmeiras have set his price tag at €60million (£52.5m) – which is his release clause.\r\n\r\nHowever, the Brazilian side will allow that package to include add-ons and clauses.\r\n\r\nEndrick’s father, Douglas, recently said of negotiations: ‘There’s nothing decided for Real Madrid or any other club. We’ve no preference yet.\r\n\r\n‘We’ll decide in the next months, the club that will pay what Palmeiras want and show us the best technical project for Endrick, will sign the boy.’', '2022-11-14 22:10:00', '2022-11-15 21:06:50'),
(23, 2, 'Hire me as A Full Stack Developer', 'category_img/JCtY5tovGL1yDcUEE1YNylFlYLmb5mNuAwIuCAEu.jpg', 'Hire Me', 'Knx', 'News', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"\r\n\r\nSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"\r\n\r\n1914 translation by H. Rackham\r\n\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', '2022-11-21 21:40:01', '2022-11-21 21:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `category_comment_models`
--

CREATE TABLE `category_comment_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Cat_id` bigint(20) UNSIGNED NOT NULL,
  `Comments` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_comment_models`
--

INSERT INTO `category_comment_models` (`id`, `Cat_id`, `Comments`, `created_at`, `updated_at`) VALUES
(1, 7, 'jcbvjf', '2022-10-24 22:12:06', '2022-10-24 22:12:06'),
(2, 6, 'jhnujnrujg', '2022-10-24 22:13:11', '2022-10-24 22:13:11'),
(3, 7, 'm gjrf', '2022-10-31 21:45:58', '2022-10-31 21:45:58'),
(4, 7, 'bfhkjgbhj vh jkrfkjrv', '2022-10-31 21:46:34', '2022-10-31 21:46:34'),
(5, 7, 'jnbujg jtb j4t jr4j lj4j tgj ngl jnfi gn glj', '2022-10-31 21:47:03', '2022-10-31 21:47:03'),
(6, 7, 'nrnginfbngjlgbnjtnbjtnkt', '2022-10-31 21:49:03', '2022-10-31 21:49:03'),
(7, 7, 'kefnjr gjl j nj kj n jl n j  jr', '2022-10-31 21:49:24', '2022-10-31 21:49:24'),
(8, 7, 'kefnjr gjl j nj kj n jl n j  jr', '2022-10-31 21:49:48', '2022-10-31 21:49:48'),
(9, 7, 'kefnjr gjl j nj kj n jl n j  jr', '2022-10-31 21:50:04', '2022-10-31 21:50:04'),
(10, 7, 'kefnjr gjl j nj kj n jl n j  jr', '2022-10-31 21:52:13', '2022-10-31 21:52:13'),
(11, 6, 'Cute 2pac', '2022-10-31 22:34:27', '2022-10-31 22:34:27'),
(12, 12, 'We The Chelsea Fans Love yhu Brodja', '2022-11-11 19:16:06', '2022-11-11 19:16:06'),
(13, 12, 'Keep up the good Work', '2022-11-11 19:19:11', '2022-11-11 19:19:11'),
(14, 13, 'Jude', '2022-11-11 19:29:10', '2022-11-11 19:29:10'),
(15, 16, 'Great Nigeria Students...', '2022-11-21 21:32:45', '2022-11-21 21:32:45'),
(16, 22, 'We love You Endrick...', '2022-11-21 21:33:57', '2022-11-21 21:33:57'),
(17, 15, 'Crawford and Spence', '2022-11-21 21:34:40', '2022-11-21 21:34:40'),
(18, 23, 'Hire Me as a Full Stack Developer', '2022-11-21 21:41:14', '2022-11-21 21:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `comment_models`
--

CREATE TABLE `comment_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_models`
--

INSERT INTO `comment_models` (`id`, `Comment`, `Comment_id`, `created_at`, `updated_at`) VALUES
(11, 'mvkbmgk gkmborgt', 6, '2022-10-22 07:08:04', '2022-10-22 07:08:04'),
(12, 'mvkbmgk gkmborgt', 6, '2022-10-22 07:09:04', '2022-10-22 07:09:04'),
(13, 'knj vdfj', 4, '2022-10-22 07:10:46', '2022-10-22 07:10:46'),
(14, 'm,c v', 6, '2022-10-24 22:03:38', '2022-10-24 22:03:38'),
(15, 'GLory TO GOD', 4, '2022-10-31 22:44:49', '2022-10-31 22:44:49'),
(16, 'good', 3, '2022-10-31 22:54:59', '2022-10-31 22:54:59'),
(17, 'gbk.u', 6, '2022-11-02 18:33:08', '2022-11-02 18:33:08'),
(18, 'Nice Blog', 5, '2022-11-07 22:54:44', '2022-11-07 22:54:44'),
(19, 'What a Wicked World', 3, '2022-11-11 19:03:26', '2022-11-11 19:03:26'),
(20, 'We will Miss You ma', 2, '2022-11-11 19:32:41', '2022-11-11 19:32:41'),
(21, 'ohh, What a Wicked World', 11, '2022-11-21 21:31:55', '2022-11-21 21:31:55'),
(22, 'Hire Me', 12, '2022-11-21 21:40:30', '2022-11-21 21:40:30'),
(23, 'Nice Blog', 10, '2022-12-02 21:37:22', '2022-12-02 21:37:22'),
(24, 'fuck you', 6, '2023-02-09 23:27:42', '2023-02-09 23:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2022_09_08_111515_create_admin_models_table', 1),
(19, '2022_09_12_164756_create_post_models_table', 1),
(20, '2022_10_16_202532_create_categories_models_table', 1),
(21, '2022_10_21_093215_create_comment_models_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_models`
--

CREATE TABLE `post_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Admin_id` bigint(20) UNSIGNED NOT NULL,
  `Content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_models`
--

INSERT INTO `post_models` (`id`, `Admin_id`, `Content`, `Images`, `Author`, `Title`, `Description`, `created_at`, `updated_at`) VALUES
(2, 1, 'Brits have voted to name the late Queen Elizabeth II the most ‘iconic’ woman in recent history.', 'UpdatePost_img/PBxC3TQqOaN7GQmzoS7Pw0Q2hHaHowTpmNGWTFFN.jpg', 'Kinx', 'Brits have voted to name the late Queen Elizabeth II the most ‘iconic’ woman in recent history.', 'The monarch, who died aged 96 last month, saw off competition from a diverse field, ranging from Princess Diana to Mother Teresa in second and third and the Spice Girls down in eighth.\r\n\r\nThe poll of 2,000 Brits aimed to find the most influential and important woman in the last 60 years.\r\n\r\nElizabeth, who reigned from 1952 to 2022, took more than a quarter of the vote.\r\nDiana was significantly behind the Queen’s 27% on 6%, followed by the nun Mother Teresa on 5% and American civil rights activist Rosa Parks on 4%.\r\n\r\nYoung climate activist Greta Thunberg, singer Dolly Parton and tennis player Emma Raducanu all pipped the Spice Girls to the top 7.\r\n\r\nTelevision interviewer Oprah Winfrey and Pakistani female education campaigner Malala Yousafzai made up the rest of the top ten.\r\nTop 10 most iconic women in recent history\r\n1 – The Queen – 27%\r\n\r\n2 – Diana, Princess of Wales – 6%\r\n\r\n3 – Mother Teresa – 5%\r\n\r\n4 – Rosa Parks – 4%\r\n\r\n5 – Greta Thunberg – 3%\r\n\r\n6 – Dolly Parton – 2%\r\n\r\n7 – Emma Raducanu – 2%\r\n\r\n8 – The Spice Girls – 2%\r\n\r\n9 – Oprah Winfrey – 2%\r\n\r\n10 – Malala Yousafzai – 2%\r\nThe poll was organised by bath and skincare brand fenjal.\r\n\r\nThe company’s Joanne Ward said: ‘Queen Elizabeth II held the nation’s heart for 70 years, so it seems very fitting and a touching tribute that the UK has voted her their most iconic woman.’', '2022-10-18 21:42:04', '2022-11-15 21:01:02'),
(3, 1, 'A devout Christian Mee Kuen Chong, known as Deborah (left) decapitated by a friend who wanted to inherit her estate kept a Bible verse in her jacket pocket, a court heard.', 'Post_img/CX6vs0pa9x0rQkvlU74W6BaDk97g8OpNNoClgsM3.jpg', 'Kinx', 'Beheaded murder victim’s body ‘was found with Bible quote in her jacket pocket’', 'Mee Kuen Chong, known as Deborah, was found dead in the woods in Salcombe, Devon, on June 27 last year – 15 days after Jemma Mitchell, 38, allegedly attacked her in her north-west London home.\r\n\r\nThe Old Bailey on Monday heard pathologist Dr Deborah Cook describe examining the 67-year-old’s headless body.\r\n\r\nShe said she found small pieces of paper torn from a notepad with a quote from the Bible on them in the Marks and Spencer jacket Ms Chong was wearing.The pensioner also kept a plastic wallet, an Oyster card and business cards for a GP, dentist and evangelical church.\r\n\r\nMs Chong’s was discovered wearing a dress and strappy sandals with the handle of a purple handbag.\r\n\r\nInside the bag was a camera, a tote bag and a length of orange rope which the prosecution alleges matches some found at Mitchell’s home.\r\nDr Cook told jurors ‘It was apparent that the head and at least the first two bones that form the spine were absent.\r\n\r\n‘The larynx at the front of the neck was also missing.’\r\n\r\nLast week, the court was told how Ms Chong was a vulnerable person who suffered from mental illness.\r\n\r\nFor example, doctors said she had a ‘perceived relationship’ with the-then Prince Charles, believing she could communicate with him via YouTube.\r\n\r\nMs Chong’s mental health issues date bate to 2015, when she was noted in GP records as having schizo-affective disorder and acute stress.\r\n\r\nMedical records say she suffered an episode of mania with psychotic symptoms in 2017.\r\n\r\nBut by the next year her condition had stabilised and she was discharged by community mental health team.\r\n\r\nIn May 2021, records indicate she had paranoid schizophrenia.\r\n\r\nProsecutors say Mitchell killed Ms Chong in order to fake her will, steal her money and finish the repairs to her dilapidated home in Willesden, north-west London.\r\n\r\nThe defendant, an expert in body dissection, denies murder.\r\n\r\nThe trial continues.', '2022-10-18 21:53:13', '2022-10-18 21:53:13'),
(4, 1, 'American researchers have developed a new lethal Covid strain in a laboratory – echoing experiments that many fear started the pandemic.', 'Post_img/eg0xf5MGAEezPxvQA22Lc94zL2riCRmtSWnZqZYO.jpg', 'Kinx', 'Scientists develop new lethal Covid strain that killed 80% of mice infected', 'The mutant variant — which is a hybrid of Omicron and the original Wuhan virus — killed 80 per cent of mice infected with it at Boston University.\r\n\r\nWhen a similar group of rodents were exposed to the standard Omicron strain, however, they all survived and only experienced ‘mild’ symptoms.\r\n\r\nThe scientists also infected human cells with the hybrid variant and found it was five times more infectious than Omicron.\r\n\r\nThis suggests the man-made virus might be the most contagious form yet.\r\n\r\nIn the new research, a team of scientists from Boston and Florida extracted Omicron’s spike protein — the unique structure that binds to and invades human cells.\r\n\r\nThey attached Omicron’s spike to the original wildtype strain that first emerged in Wuhan at the start of the pandemic.\r\nWriting in the paper, they said: ‘In…mice, while Omicron causes mild, non-fatal infection, the Omicron S-carrying virus inflicts severe disease with a mortality rate of 80 percent.’\r\n\r\nThe researchers said it signaled that while the spike protein is responsible for infectivity, changes to other parts of its structure determine its deadliness.\r\n\r\nThe scientists also looked at the different strains’ effect on human lung cells that were grown in the lab.Covid latches onto human cells with its spike protein, and instructs healthy cells to produce copies of itself.\r\n\r\nScientists measured how many copies each variant caused the health cells to produce.\r\n\r\nThey found the hybrid strain produced five times more viral particles than the original Omicron.\r\n\r\nThe scientists admit the hybrid virus would be unlikely to be as deadly in real humans as it was in mice.\r\n\r\nThey noted that one limitation of their study was the specific breed of mice used, as other types of mice are more similar to humans.\r\n\r\nMice and humans also don’t have identical immune responses, as there are variations in DNA and genes between the species.\r\n\r\nThe genes that regulate the immune system behave differently, for example, and the response to stress is different in mice and humans.\r\nThe type of mice used in the study were developed specifically for looking at severe Covid infection, but currently, no mouse model replicates all aspects of Covid in humans.\r\n\r\nThe lab, at Boston University’s National Emerging Infectious Diseases Laboratories, is one of 13 biosafety level 4 labs in the US.\r\n\r\nThese are labs that are authorized to handle the most dangerous pathogens. There are also facilities in Texas, Atlanta and Manhattan, Kansas.\r\n\r\nExperiments at these labs often involve tinkering with animal viruses to advance treatments and vaccines that could be used in a future outbreak.', '2022-10-18 21:57:33', '2022-10-18 21:57:33'),
(5, 1, 'Netflix has postponed its Prince Harry and Meghan Markle documentary until next year following backlash to The Crown season 5, reports claim.', 'Post_img/esu90VS44Aq9GjlLpFlLpZI4nkZMuk5ZZ676Rpgt.jpg', 'Kinx', 'Harry and Meghan’s Netflix documentary ‘postponed’ after The Crown backlash', 'The series is said to have been unofficially slated for December 2022, however, the streaming giant has delayed the project after fierce criticism regarding its period drama based on the royal family. \r\n\r\nIt comes after former Prime Minister Sir John Major blasted The Crown as a ‘damaging and malicious’ work of fiction in a new statement. \r\n\r\n‘They’re rattled at Netflix, and they blinked first and decided to postpone the documentary,’ a source told Deadline. Former Prime Minister Sir John, who was in office from 1990 to 1997, will be portrayed in The Crown’s upcoming fifth series by actor Jonny Lee Miller. \r\n\r\nA spokesperson for Sir John said over the weekend that he had not cooperated – in any way – with The Crown.  \r\n‘Nor has he ever been approached by them to fact-check any script material in this or any other series,’ a statement read. \r\n\r\n‘Discussions between the monarch and prime minister are entirely private and – for Sir John – will always remain so.’ \r\n\r\nThe spokesperson added: ‘There was never any discussion between Sir John and the then Prince of Wales about any possible abdication of the late Queen Elizabeth II – nor was such an improbable and improper subject ever raised by the then Prince of Wales (or Sir John).’ \r\nIn response, a spokesperson for The Crown told Metro.co.uk: ‘The Crown has always been presented as a drama based on historical events. Series 5 is a fictional dramatisation, imagining what could have happened behind closed doors during a significant decade for the royal family – one that has already been scrutinised and well-documented by journalists, biographers and historians.’ \r\n\r\nHarry and Meghan are expected to talk extensively about other members of the royal family in their docuseries, including the Prince and Princess of Wales, King Charles, and Queen Camilla.\r\n\r\nIt was previously reported that they requested so many edits that there were fears it could be ‘shelved indefinitely’.\r\n\r\nNetflix initially stood firm and told the couple it would be airing the series this winter while demand was at its highest. \r\n\r\n‘A lot in the show contradicted what Harry had written, so that was an issue,’ a senior Netflix source previously told Page Six. \r\n\r\n‘Then Harry and Meghan made significant requests [to filmmakers] to walk back content they themselves have provided, for their own project,’ the insider added. \r\n\r\nRoyal biographer Tom Bower compared the couple’s numerous back-and-fourths on the docuseries and memoirs to being ‘stuck with the devil.’  \r\n\r\n‘I don’t see how the Sussexes can give up both the Netflix and book deal,’ the author told GB News. \r\nHarry and Meghan were followed for more than a year by camera crews for the project.\r\n\r\nThey were filmed during visits to New York and the Netherlands for the Invictus Games as part of the production.', '2022-10-18 22:03:36', '2022-10-18 22:03:36'),
(6, 1, 'At least three people have died after a military bomber crashed into an apartment building in southwest Russia, sending up a huge fireball.', 'Post_img/olZVEwO0cZcHKT3fbgPn5SosEVXh7XavoHkiZUsE.jpg', 'Kinx', 'Pilot ejects seconds before military jet crashes into block of flats in Russia', 'Footage shared online shows a large fire burning at the site in Yeysk, with the pilots having ejected using parachutes.\r\n\r\nIn addition to the dead at least 21 people were hurt, with emergency rooms reserved at local hospitals and medical aircraft to treat those injured, authorities said.\r\n\r\nThe Russian Defence Ministry said a Su-34 bomber suffered engine failure on takeoff and crashed into a residential area, with fuel igniting on impact.They said both crew members from the medium-range fighter bomber plane bailed out safely, with an incredible image showing one pilot floating down as the inferno raged.\r\n\r\nThe plane, which had been on a training flight from a nearby airfield, crashed at around the time people were having their evening meals this evening.\r\nRussian news agency TASS said that at least 15 apartments were damaged at the nine-storey building.\r\n\r\nAround 100 people were evacuated while fire fighters battled the inferno.\r\n\r\nAn eyewitness told Fontanka.ru: ‘It’s terrible there. Half the building is fully burning from the first to the ninth floor. \r\n\r\n‘Constantly [heard] explosions, windows flying out. \r\n\r\n‘The fire is such that people at the bus station feel it. Everything around is cordoned off. Cars do not pass in that direction.’\r\n\r\nYeysk has a population of around 90,000 and is situated on the Sea of Azov separating southern Ukraine from southern Russia.\r\nRoman Bublik, the head of the Yeysk district, wrote on his telegram channel: ‘An emergency has occurred in the city of Yeysk — a nine-story building is on fire. \r\n\r\n‘All services promptly went to the scene of the fire. I am also at the scene of the emergency, coordinating the work of all services. \r\n\r\n‘A help desk is being installed. Residents will be provided with all the necessary support. The details of the incident are being specified. I will keep you all informed.’\r\n\r\nRussian President Vladimir Putin was immediately told about the crash and ordered health and emergencies ministers – along with the local governor – to head to the site, the Kremlin said.\r\n\r\nThe city of Yeysk has a large military air base, including SU-34 jets which are supersonic twin-engine bombers equipped with sophisticated sensors and weapons.\r\n\r\nSuch aircrafts have been a key strike component of the Russian air force, widely used during the wars in Syria and Ukraine.', '2022-10-18 22:08:44', '2022-10-18 22:08:44'),
(10, 1, 'When I heard that a young Iranian woman, 22 year old Mahsa Amini, had died in police custody after allegedly being beaten so badly she suffered a fatal head injury, my British-Iranian blood ran cold.', 'Post_img/sxyXR0nUOY4UCDcdnKo6QONzZPkjw8YYUOmspiC7.jpg', 'Knx', 'As a British-Iranian, I’m in awe of the women protesting following Mahsa Amini’s death', 'Mahsa had been detained for an alleged hijab violation....\r\n\r\nThe undemocratic election of Iran’s Islamic government and the forcing of compulsory hijabs onto women  – plus the human rights violations and sexist oppression – that has ruled over the Iranian people, and especially its women, has lasted for over 40 painful long years.\r\n\r\nThis death of an innocent woman has rightly sparked mass nationwide protests in the country.\r\n\r\nThe women of Iran are so rightly filled with decades of rage, despair and the desire to finally have their free will and freedom reinstated that they have taken to burning their hijabs in public and even cutting off their hair in protest.Videos of these protests are slipping through to the rest of the world and it is both terrifying and sad to watch.\r\n\r\nThe fact women who want the right to show their hair in public are snipping it off in protest is tragic.\r\n\r\nAs a British Iranian who has visited Iran countless times throughout my life, as a child, a teenager, a young woman, a grown adult… I cannot begin to tell you how courageous these women truly are.I have walked those Tehran streets in my mandatory hijab and loose fitting specially-bought clothing and seen the so called ‘morality police’ eyeing me head to toe for any breach.\r\n\r\nNo nail polish. No make-up. No wisp of hair out. No coat or cover-up too tight. No ankles! No collarbones!\r\n\r\nEvery time I walked past the huddle of officers – because they were never alone, preying instead on women in numbers like a pack of wolves – I held my breath and kept my eyes down, praying they wouldn’t find some reason to arrest me.\r\n\r\nI saw with my own eyes women being violently shoved into the officers’ vehicles and witnessed the look of utter fear on their faces as they were driven away.\r\n\r\nAn absolute loss of human rights could befall me any time I set foot in Iran to simply spend time with my family.During the 1979 Revolution that ushered in Islamic rule in Iran, my uncle was executed by midnight gunfire after being denied access to a lawyer, his family or a trial.He was murdered by the same government that now has ‘morality police’ prowling streets looking for women like Mahsa to hassle and arrest.\r\n\r\nThose officials killed my uncle with a bullet between the eyes and dumped his body in an unmarked mass grave that is now used as a rubbish tip – and remains guarded 24/7 by police guards – simply because he gave food and shelter to people who lost every worldly possession overnight during the Revolution.\r\n\r\nMy grandmother went to her grave not ever being able to visit her youngest son’s.The echoes of my uncle’s execution ring through my mind because that’s what the homeland of my parents has become since the Revolution: a place of human rights breaches, oppression, sexism, misogyny and daily fear on a scale people in the West cannot even begin to comprehend.\r\n\r\nThat is why I am writing this article anonymously. Even though I pen it with pride, my fear for my family who remain in Iran remains.\r\n\r\nAnd that’s why reading how Mahsa was treated gives me chills.\r\n\r\nNow, a nation of women mourn Mahsa and fight for their own freedoms whilst facing barbaric treatment from their fellow countrymen who continue to support these crimes against humanity.\r\n\r\nI am filled with admiration for those unbelievably brave women risking their freedom and life on the streets whilst trying to end this heinous oppression.\r\n\r\nI wouldn’t have the guts.\r\n\r\nBut what makes me so sad is that I know no matter what they do, their lives will not change for the better until the rest of the civilised world lends overt vocal, political and financial support to these women.The fact that as these protests take place, president Ebrahim Raisi was still given a seat at the UN blows my mind. Why is the world giving this man a platform?He had the gall to ask Christiane Amanpour to wear a headscarf. When she rightly refused, he cancelled the interview. His actions clearly endorse those of his ‘morality police’.\r\n\r\nUnless the world speaks out and lends its support to the Iranian people in useful ways; unless we stop giving Iranian government officials any platform, support or help and until we instead start giving greater refuge, air time and tangible support to the women and men fighting the oppression in Iran, they will never break free – despite their rage, determination and numbers.\r\n\r\nInstead, young people like my beautiful, talented, smart and driven female Iranian cousins will continue to see their talents wasted, their lives oppressed and bodies regulated till their dying breaths.', '2022-11-14 21:52:07', '2022-11-14 21:52:07'),
(11, 1, 'A schoolgirl has allegedly become the latest victim of Iran’s security services after she was ‘beaten to death’ for refusing to sing a pro-regime song.', 'UpdatePost_img/I8AEwn4oWxskFEfua7B1fRxDV7YnmKlpkVgyR9es.jpg', 'Kinx', 'Iranian girl ‘beaten to death in classroom for refusing to sing pro-regime song’', 'Protests erupted in the northwestern city of Ardabil on Saturday over the death of Asra Panahi, a teenager from the Azeri ethnic minority.\r\n\r\nAccording to the Coordinating Council of Iranian Teachers’ Trade Associations, the 16-year-old was fatally injured after security forces stormed her classroom, demanding a group of girls sing an anthem praising Ali Khamenei, Iran’s supreme leader.\r\n\r\nWhen the pupils refused, the government agents launched a merciless attack on them.Asra reportedly died of her injuries later at the hospital while another girl remains in critical condition. \r\n\r\nA number of other students who chanted against the Iranian regime were also arrested, the council said.\r\n\r\nIranian officials have already denied the reports, while news agencies close to the Revolutionary Guards quoted Asra’s uncle as saying she had died of heart failure.But news of the incident further mobilised schoolgirls across the Middle-Eastern country to organise and join protests for freedom over the weekend, despite the deadly risks.\r\n\r\nIran has already been rocked by protests after the death of 22-year-old Mahsa (Jina) Amini on September 16.\r\n\r\nShe had been arrested by morality policy for ‘improperly’ wearing her headscarf.\r\n\r\nSince then, hundreds of girls have protested in their schools and in the streets, chanting and burning their head coverings.\r\n\r\nAs of October 11, the Iran-based Society to Support Children claims that at least 28 children have been killed during such demonstrations, most in the province of Sistan and Baluchistan, Human Rights Watch said.Their deaths have become a rallying cry for the imminent downfall of the Iranian government’s regime.\r\n\r\nOver the weekend, teachers in Ardabil threatened strike actions if the director of Asra’s school is not urgently dismissed.\r\n\r\nThey also called for the resignation of ‘incompetent’ education minister, Yousef Nouri.\r\n\r\n‘The range of brutal and inhuman behavior of arbitrary forces has been extended to universities, schools and educational spaces, who brazenly and illegally entered schools and made threats,’ they wrote in a statement on Telegram.', '2022-11-14 21:54:47', '2022-11-15 21:05:44'),
(12, 1, 'Hire Me', 'Post_img/xtIbLvL81vgkzGFeXVE0IeRvqOiu4q9ynACBun7z.jpg', 'Kinx', 'I am  a Full Stack Developer', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"\r\n\r\nSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"\r\n\r\n1914 translation by H. Rackham\r\n\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', '2022-11-21 21:38:47', '2022-11-21 21:38:47'),
(13, 1, 'A schoolgirl has allegedly become the latest victim of Iran’s security services after she was ‘beaten to death’ for refusing to sing a pro-regime song.', 'Post_img/ehXufFJYtgHg9saD7JQAuQU6khKwXJgimaptT5oS.png', 'kona', 'five star hotel', 'fuck offf', '2023-02-09 23:31:16', '2023-02-09 23:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_models`
--
ALTER TABLE `admin_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_models_email_unique` (`Email`);

--
-- Indexes for table `categories_models`
--
ALTER TABLE `categories_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_models_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `category_comment_models`
--
ALTER TABLE `category_comment_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_models`
--
ALTER TABLE `comment_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_models_comment_id_foreign` (`Comment_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_models`
--
ALTER TABLE `post_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_models_admin_id_foreign` (`Admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_models`
--
ALTER TABLE `admin_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories_models`
--
ALTER TABLE `categories_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category_comment_models`
--
ALTER TABLE `category_comment_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comment_models`
--
ALTER TABLE `comment_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_models`
--
ALTER TABLE `post_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories_models`
--
ALTER TABLE `categories_models`
  ADD CONSTRAINT `categories_models_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `admin_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment_models`
--
ALTER TABLE `comment_models`
  ADD CONSTRAINT `comment_models_comment_id_foreign` FOREIGN KEY (`Comment_id`) REFERENCES `post_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_models`
--
ALTER TABLE `post_models`
  ADD CONSTRAINT `post_models_admin_id_foreign` FOREIGN KEY (`Admin_id`) REFERENCES `admin_models` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
