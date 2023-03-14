-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 11:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ergasiatheorias`
--

-- --------------------------------------------------------

--
-- Table structure for table `diaxeiristis`
--

CREATE TABLE `diaxeiristis` (
  `id_diaxeiristi` varchar(10) NOT NULL,
  `email_diaxeiristi` varchar(50) NOT NULL,
  `onoma_diaxeiristi` varchar(50) NOT NULL,
  `eponimo_diaxeiristi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diaxeiristis`
--

INSERT INTO `diaxeiristis` (`id_diaxeiristi`, `email_diaxeiristi`, `onoma_diaxeiristi`, `eponimo_diaxeiristi`) VALUES
('3213221000', 'giannis@gmail.com', 'ΙΩΑΝΝΗΣ', 'ΚΥΡΙΑΖΗΣ'),
('3213441000', 'panos@gmail.com', 'ΠΑΝΑΓΙΩΤΗΣ', 'ΠΑΠΑΔΟΠΟΥΛΟΣ'),
('3213661000', 'apostolis@gmail.com', 'ΑΠΟΣΤΟΛΟΣ', 'ΜΑΜΟΥΛΕΛΛΗΣ');

-- --------------------------------------------------------

--
-- Table structure for table `didaskalia`
--

CREATE TABLE `didaskalia` (
  `id_didaskalias` int(10) NOT NULL,
  `id_mathimatos` varchar(10) NOT NULL,
  `etos_didaskalias` int(4) NOT NULL,
  `eksamino_didaskalias` int(2) NOT NULL,
  `id_didaskonta` varchar(10) NOT NULL,
  `varostheorias` double DEFAULT NULL,
  `varosergastiriou` double DEFAULT NULL,
  `periorismostheorias` double DEFAULT NULL,
  `periorismosergastiriou` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `didaskalia`
--

INSERT INTO `didaskalia` (`id_didaskalias`, `id_mathimatos`, `etos_didaskalias`, `eksamino_didaskalias`, `id_didaskonta`, `varostheorias`, `varosergastiriou`, `periorismostheorias`, `periorismosergastiriou`) VALUES
(2, '321-5502', 2020, 4, '3213662000', 0.3, 0.7, 5, 4),
(3, '321-3404', 2020, 6, '3213662000', 0.6, 0.4, 4, 5),
(4, '321-3604', 2020, 6, '3213222000', 0.8, 0.2, 4, 5),
(5, '321-88103', 2021, 6, '3213662000', 0.6, 0.4, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `didaskon`
--

CREATE TABLE `didaskon` (
  `id_didaskonta` varchar(10) NOT NULL,
  `email_didaskonta` varchar(50) NOT NULL,
  `onoma_didaskonta` varchar(50) NOT NULL,
  `eponimo_didaskonta` varchar(50) NOT NULL,
  `vathmida_didaskonta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `didaskon`
--

INSERT INTO `didaskon` (`id_didaskonta`, `email_didaskonta`, `onoma_didaskonta`, `eponimo_didaskonta`, `vathmida_didaskonta`) VALUES
('3213222000', 'giorgos@gmail.com', 'ΓΕΩΡΓΙΟΣ', 'ΓΕΩΡΓΟΠΟΥΛΟΣ', 'ΚΑΘΗΓΗΤΗΣ'),
('3213442000', 'kostas@gmail.com', 'ΚΩΝΣΤΑΝΤΙΝΟΣ', 'ΚΩΝΣΤΑΝΤΙΝΟΠΟΥΛΟΣ', 'ΑΝΑΠΛΗΡΩΤΗΣ ΚΑΘΗΓΗΤΗΣ'),
('3213662000', 'dimitris@gmail.com', 'ΔΗΜΗΤΡΙΟΣ', 'ΔΗΜΗΤΡΟΠΟΥΛΟΣ', 'ΕΠΙΚΟΥΡΟΣ ΚΑΘΗΓΗΤΗΣ');

-- --------------------------------------------------------

--
-- Table structure for table `dilosi`
--

CREATE TABLE `dilosi` (
  `id_dilosis` int(10) NOT NULL,
  `id_didaskalias` int(10) DEFAULT NULL,
  `AM_foititi` varchar(10) NOT NULL,
  `vathmostheorias` double DEFAULT NULL,
  `vathmosergastiriou` double DEFAULT NULL,
  `telikosvathmos` double DEFAULT NULL,
  `katastasi` varchar(10) DEFAULT NULL,
  `pliros_vathmologimeno` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dilosi`
--

INSERT INTO `dilosi` (`id_dilosis`, `id_didaskalias`, `AM_foititi`, `vathmostheorias`, `vathmosergastiriou`, `telikosvathmos`, `katastasi`, `pliros_vathmologimeno`) VALUES
(11, 4, '3212018107', NULL, NULL, NULL, NULL, NULL),
(12, 3, '3212018107', 8, 8, 8, 'ΕΠΙΤΥΧΙΑ', NULL),
(16, 3, '3212018161', 7, 5, 6.2, 'ΕΠΙΤΥΧΙΑ', NULL),
(17, 5, '3212018107', NULL, NULL, NULL, NULL, NULL),
(19, 2, '3212018107', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `foititis`
--

CREATE TABLE `foititis` (
  `AM_foititi` varchar(10) NOT NULL,
  `email_foititi` varchar(50) NOT NULL,
  `onoma_foititi` varchar(50) NOT NULL,
  `eponimo_foititi` varchar(50) NOT NULL,
  `etoseisagogis` int(4) NOT NULL,
  `oristikopoihmenh_dilosi` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foititis`
--

INSERT INTO `foititis` (`AM_foititi`, `email_foititi`, `onoma_foititi`, `eponimo_foititi`, `etoseisagogis`, `oristikopoihmenh_dilosi`) VALUES
('3212017108', 'icsd17108@aegean.gr', 'Apostolos', 'Mamoulellis', 2017, NULL),
('3212018107', 'icsd18107@aegean.gr', 'Ioannis', 'Kyriazis', 2018, 'NAI'),
('3212018161', 'icsd18161@aegean.gr', 'Panagiotis', 'Papadopoulos', 2018, 'OXI');

-- --------------------------------------------------------

--
-- Table structure for table `mathima`
--

CREATE TABLE `mathima` (
  `id_mathimatos` varchar(10) NOT NULL,
  `onoma_mathimatos` varchar(100) NOT NULL,
  `perigrafi_mathimatos` varchar(5000) DEFAULT NULL,
  `proapaitoumenamathimata` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mathima`
--

INSERT INTO `mathima` (`id_mathimatos`, `onoma_mathimatos`, `perigrafi_mathimatos`, `proapaitoumenamathimata`) VALUES
('321-3354', 'Αρχιτεκτονική Υπολογιστών', 'Ιστορικά στοιχεία για την εξέλιξη των υπολογιστών. Αρχιτεκτονική Von Neumann. Κύρια μνήμη. Βοηθητική μνήμη. Κρυφή Μνήμη (Cache memory). Ιδεατή Μνήμη (Virtual Memory). Μονάδες Εισόδου/Εξόδου. Αξιολόγηση των Υπολογιστών. Μορφές αναπαράστασης αριθμητικών δεδομένων (σταθερής και κινητής υποδιαστολής). Δομή και χαρακτηριστικά των Ομάδων Εντολών που υποστηρίζει η κεντρική μονάδα επεξεργασίας. Εντολές γλώσσας μηχανής. Είδη εντολών γλώσσας μηχανής. Είδη και μέγεθος δεδομένων. Υπολογιστές απλού (RISC) και πολύπλοκου συνόλου εντολών (CISC). Υποστήριξη γλωσσών προγραμματισμού υψηλού επιπέδου. Οργάνωση και λειτουργία της Κεντρικής Μονάδας Επεξεργασίας (CPU). Παράλληλη επεξεργασία. Συστήματα πολλαπλών επεξεργαστών (MIMD, SIMD). Υλοποίηση αριθμητικής. Δίαυλοι. Τεχνολογίες και μεθοδολογίες σχεδίασης της μνήμης του υπολογιστή. Συμπεριφορά και διαχείριση μνήμης πολλαπλών επιπέδων ιεραρχίας. Ιδεατή Μνήμη. Τύποι διευθυνσιοδότησης για τη διαχείριση των δεδομένων από και προς τη μνήμη. Τρόποι διευθυνσιοδότησης της κύριας μνήμης. Τεχνολογία μνημών. Ημιαγωγικές μνήμες. Στατικές μνήμες άμεσης προσπέλασης, Δυναμικές μνήμες άμεσης προσπέλασης. Ημιαγωγικές μνήμες προσπελάσιμες ανάλογα με το περιεχόμενο (Content Addressable Memories, CAM). Μαγνητικές Μνήμες. Μνήμες μαγνητικών δίσκων. Μνήμες μαγνητικής ταινίας. Οπτικές Μνήμες. Κατανόηση των βασικών αρχιτεκτονικών στοιχείων ενός υπολογιστικού συστήματος.', 'Δεν απαιτούνται.'),
('321-3404', 'Ασφάλεια Πληροφοριακών και Επικοινωνιακών Συστημάτων', 'Εννοιολογική Θεμελίωση όρων Ασφάλειας Πληροφοριακών και Επικοινωνιακών Συστημάτων. Ταυτοποίηση και Αυθεντικοποίηση. Έλεγχος Προσπέλασης. Πολιτικές και Φορμαλιστικά Μοντέλα Ασφάλειας. Ασφάλεια Λειτουργικών Συστημάτων, Μοντέλο περίπτωσης: Unix. Κακόβουλο Λογισμικό. Ανάλυση, Αποτίμηση και Διαχείριση Επικινδυνότητας Πληροφοριακών Συστημάτων. Πολιτικές Ασφάλειας Πληροφοριακών Συστημάτων. Στοιχεία Εφαρμοσμένης Κρυπτογραφίας: Κλασικές Κρυπτογραφικές Μέθοδοι, Συμμετρικά και Ασύμμετρα Κρυπτοσυστήματα, Κώδικες Αυθεντικοποίησης Μηνυμάτων, Ψηφιακές Υπογραφές, Πάροχοι Υπηρεσιών Πιστοποίησης, Υποδομή Δημόσιων Κλειδιών, Νομοθετικό και Ρυθμιστικό Πλαίσιο στην Ελλάδα. Ασφάλεια Δικτύων Υπολογιστών. Απειλές και Ευπάθειες. Αρχιτεκτονική Ασφάλειας στο μοντέλο του Internet: Ασφάλεια Επιπέδου Internet, Ασφάλεια Επιπέδου Transport, Ασφάλεια Επιπέδου Application, Ασφάλεια υπεράνω του Επιπέδου Application. Εφαρμογές.', 'Δεν απαιτούνται.'),
('321-3604', 'Τεχνητή Νοημοσύνη', 'Πράκτορες (βασικές έννοιες). Αναζήτηση σε ένα χώρο δυνατοτήτων για την εύρεση λύσεων: Αναζήτηση σε χώρο καταστάσεων / προβλημάτων, Τυφλή (αλλά συστηματική) αναζήτηση, Αναζήτηση με χρήση γνώσης και ευρετικών μεθόδων, Κόστος αναζήτησης, Τοπική αναζήτηση, Γενετικοί Αλγόριθμοι, Προβλήματα Ικανοποίησης Περιορισμών (Βασικές ‘Εννοιες και Αλγόριθμοι). Αναπαράσταση Γνώσης: Προτασιακή Λογική, Κατηγορική Λογική. Σχεδιασμός ενεργειών: Βασικές αρχές, Βασικοί Αλγόριθμοι, Ιεραρχικός Σχεδιασμός, Σχεδιασμός με συνθήκες, Σχεδιασμός με Προτασιακή Λογική. Μηχανική Μάθηση: Εισαγωγή, Επαγωγική Μάθηση, Δέντρα Απόφασης, Αλγόριθμοι Μηχανικής Μάθησης.', 'Δεν απαιτούνται.'),
('321-5205', 'Νομικό Πλαίσιο Κοινωνίας της Πληροφορίας', 'To δίκαιο στην Κοινωνία της Πληροφορίας. Eισαγωγή στις βασικές έννοιες. Ηλεκτρονικές συναλλαγές και πράξεις. Ρυθμιστικό και νομοθετικό πλαίσιο του Ηλεκτρονικού Εμπορίου. Ψηφιακή/ Ηλεκτρονική Υπογραφή: Ρυθμιστικό πλαίσιο και νομικά ζητήματα. Προστασία Καταναλωτή στο Διαδίκτυο και στην Κοινωνία της Πληροφορίας. Ζητήματα διανοητικής ιδιοκτησίας στην Κοινωνία της Πληροφορίας. Συμβάσεις και προστασία λογισμικού και βάσεων δεδομένων. Ζητήματα διανοητικής ιδιοκτησίας στο διαδίκτυο και ψηφιακά δικαιώματα. Διαχείριση των ονομάτων χώρου (Domain names): Ρυθμιστικό πλαίσιο και νομικά ζητήματα. Παραβατικότητα και Ποινικό Δίκαιο στην Κοινωνία της Πληροφορίας. Νέες μορφές εγκληματικότητας, διεθνές και ελληνικό ποινικό δίκαιο πληροφορικής. Νομικά ζητήματα Computer/Internet forensics. Νομικά ζητήματα του τομέα των ηλεκτρονικών επικοινωνιών: άδειες, καθολική υπηρεσία, προστασία καταναλωτή κ.λπ.', 'Δεν απαιτούνται.'),
('321-5502', 'Σήματα και Συστήματα', 'Βασικοί ορισμοί σημάτων και συστημάτων, περιοδικά σήματα, μοναδιαία βηματική συνάρτηση, κρουστική συνάρτηση. Κατηγορίες συστημάτων, στατικά και δυναμικά συστήματα, αιτιατά και μη-αιτιατά συστήματα, γραμμικά και μη-γραμμικά συστήματα, χρονικά αμετάβλητα και μεταβαλλόμενα συστήματα. Κρουστική απόκριση γραμμικών συστημάτων. Ιδιότητες της συνέλιξης. Ευστάθεια συστημάτων. Ευθύς και αντίστροφος μετασχηματισμός Fourier. Σύγκλιση και ιδιότητες του μετασχηματισμού Fourier. Εφαρμογή του μετασχηματισμού Fourier στη μελέτη γραμμικών συστημάτων, απόκριση συχνοτήτων συστήματος, περιγραφή γραμμικών χρονικά αμετάβλητων συστημάτων με διαφορικές εξισώσεις και ο μετασχηματισμός Fourier, ιδανικό κατωπερατό φίλτρο. Σειρές Fourier, σειρές Fourier περιοδικών συναρτήσεων, σειρά Fourier για άρτια και περιττή συμμετρία, θεώρημα Parseval. Μετασχηματισμός Laplace, ιδιότητές του και θεωρήματα. Αντίστροφος μετασχηματισμός Laplace. Σχέση μετασχηματισμών Laplace και Fourier. Αμφίπλευρος μετασχηματισμός Laplace. Χρήση μετασχηματισμού Laplace για την επίλυση γραμμικών διαφορικών εξισώσεων. Χρήση μετασχηματισμού Laplace στην ανάλυση γραμμικών συστημάτων και τη μελέτη της ευστάθειάς τους. Χώρος κατάστασης, κατάσταση, παρατηρησιμότητα, ελεγξιμότητα. Σήματα και συστήματα διακριτού χρόνου, ευθύς και αντίστροφος μετασχηματισμός Ζ και ιδιότητές του. Μετασχηματισμός Fourier διακριτού χρόνου. Μονόπλευρος μετασχηματισμός Ζ. Δειγματοληψία – Θεώρημα Nyquist. Διακριτός μετασχηματισμός Fourier.', 'Δεν απαιτούνται.'),
('321-6503', 'Διοίκηση Πληροφοριακών Συστημάτων', 'Πληροφορικά συστήματα στην ψηφιακή εποχή, η-επιχειρείν: πώς χρησιμοποιούν οι επιχειρήσεις τα πληροφοριακά συστήματα, επίτευξη ανταγωνιστικού πλεονεκτήματος με πληροφοριακά συστήματα, υποδομή της τεχνολογίας πληροφοριών (υλικό, λογισμικό, διαδίκτυο, ασύρματη τεχνολογία), διαχείριση βάσεων δεδομένων και πληροφοριών, επιχειρησιακά συστήματα, η-εμπόριο: ψηφιακές αγορές και ψηφιακά αγαθά, ηθικά και κοινωνικά ζητήματα, μελέτες περίπτωσης.', 'Δεν απαιτούνται.'),
('321-6702', 'Θεωρία Υπολογισμού', 'Τυπικές γλώσσες. Κανονικές γλώσσες, πεπερασμένα αυτόματα, λήμμα άντλησης για κανονικές γλώσσες. Γραμματικές και γλώσσες χωρίς συμφραζόμενα, αυτόματα στοίβας, λήμμα άντλησης για γλώσσες χωρίς συμφραζόμενα. Μηχανές Turing, υπολογισιμότητα, η θέση των Church-Turing. Μη-υπολογισιμότητα, το πρόβλημα του τερματισμού. Χρονική πολυπλοκότητα, η κλάση Ρ, η θέση των Cook-Karp. Αναγωγή και πληρότητα. Μη-ντετερμινισμός και NP-πληρότητα, σχέση Ρ και ΝΡ, αλγοριθμικές συνέπειες NP-πληρότητας. Πολυπλοκότητα χώρου, η κλάση PSPACE, το θεώρημα του Savitch, PSPACE-πλήρη προβλήματα. Πιθανοτικός υπολογισμός. Πιθανοτικά ελέγξιμες αποδείξεις.', 'Δεν απαιτούνται.'),
('321-7951', 'Κατανεμημένα Συστήματα', 'Βασικές έννοιες και αρχές Κατανεμημένων Συστημάτων, Ενδιάμεσο λογισμικό και πόροι, Μοντέλο Πελάτη-Εξυπηρετητή, Μοντέλο τριών επιπέδων, Μοντέλα επικοινωνίας και προγραμματισμού (κατανεμημένης συναλλαγής, απομακρυσμένης κλήσης διαδικασιών, απομακρυσμένης επίκλησης μεθόδου, ουράς μηνυμάτων), Ονομασία (σύστημα ονομάτων περιοχών DNS, υπηρεσίες κατανεμημένων καταλόγων), Συγχρονισμός (συγχρονισμός ρολογιών, λογικός χρόνος, κατανεμημένος αμοιβαίος αποκλεισμός, εκλογή αρχηγού, καθολικές καταστάσεις), Συνέπεια και αντίγραφα, Ανοχή σφαλμάτων.', 'Δεν απαιτούνται.'),
('321-88103', 'Προγραμματισμός στο Διαδίκτυο', 'Εισαγωγή στις τεχνολογίες διαδικτύου και στον προγραμματισμό δαδικτυακών εφαρμογών, Αρχιτεκτονική εφαρμογών και πρωτόκολλα στο διαδίκτυο, Αρχιτεκτονικές εφαρμογών πολλών στρωμάτων, Προγραμματισμός περιεχομένου (HTML, XML, CSS), Βάσεις δεδομένων για εφαρμογές διαδικτύου, Προγραμματισμός στην πλευρά του πελάτη (JavaScript, DOM, DHTML), Προγραμματισμός στην πλευρά του εξυπηρετητή (Java Servlets, PHP, αποθήκευση και ανάκληση δεδομένων σε MySQL με PHP, PHP sessions, JSP), Τεχνολογία Υπηρεσιών Παγκόσμιου Ιστού (Web Services), Τεχνικές ασφαλείας εφαρμογών Διαδικτύου, Πλατφόρμες διαχείρισης περιεχομένου στο Διαδίκτυο.', 'Δεν απαιτούνται.');

-- --------------------------------------------------------

--
-- Table structure for table `omadaxrhsth`
--

CREATE TABLE `omadaxrhsth` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `onoma_omadaxrhsth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `omadaxrhsth`
--

INSERT INTO `omadaxrhsth` (`username`, `password`, `onoma_omadaxrhsth`) VALUES
('apostolis-admin-03', '$2y$10$CCGA./2ofRD4P60PuV3aG.QfmCLNoGo7ux2vBfv9oID55/M0S/WZC', 'ΔΙΑΧΕΙΡΙΣΤΗΣ'),
('dimitris-didaskon-03', '$2y$04$NFCFcukErrfB7IOzDTgnOetvZevtFDo7V6dwyPln.CDcscdEuNiIu', 'ΔΙΔΑΣΚΩΝ'),
('giannis-admin-01', '$2y$10$.mG//PBJR1zPtkOGDmIAbOH7dA8oODM6fZ04AwlG5.E02/249JESK', 'ΔΙΑΧΕΙΡΙΣΤΗΣ'),
('giorgos-didaskon-01', '$2y$10$i41EUmKbfSIoyEfkJYJxHuMPMnCWdX1fFWQAgXJskmdehN8ePRt4q', 'ΔΙΔΑΣΚΩΝ'),
('icsd17108', '$2y$04$eGpR4GZZJypKqqlsVjoJAOfYrHUmEsFLLB9c1iDkFWidsL8zddWE6', 'ΦΟΙΤΗΤΗΣ'),
('icsd18107', '$2y$10$frwJEKUiIZMI7t75rAWP..zkIawA/fWJO3MEGUf6RGp7g6AD2mIIq', 'ΦΟΙΤΗΤΗΣ'),
('icsd18161', '$2y$10$tM1qkwUoQDeoQu5bUgWbv.U9KYXGEF0wJgS.hq292Hn5Zf3omBJqK', 'ΦΟΙΤΗΤΗΣ'),
('kostas-didaskon-02', '$2y$10$8mXADJ2OYdynpPdf7XsajOFZyqBgUJKyc7YEAdOO.7LhlNcmjXXAO', 'ΔΙΔΑΣΚΩΝ'),
('panos-admin-02', '$2y$10$674817PnBD/WlcPH4spohun0zOKAxqLnJ6Dn4RhlbMHJtRk4lS2iq', 'ΔΙΑΧΕΙΡΙΣΤΗΣ');

-- --------------------------------------------------------

--
-- Table structure for table `omadaxrhsth_me_diaxeiristi`
--

CREATE TABLE `omadaxrhsth_me_diaxeiristi` (
  `id_diaxeiristi` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `omadaxrhsth_me_diaxeiristi`
--

INSERT INTO `omadaxrhsth_me_diaxeiristi` (`id_diaxeiristi`, `username`) VALUES
('3213221000', 'giannis-admin-01'),
('3213441000', 'panos-admin-02'),
('3213661000', 'apostolis-admin-03');

-- --------------------------------------------------------

--
-- Table structure for table `omadaxrhsth_me_didaskonta`
--

CREATE TABLE `omadaxrhsth_me_didaskonta` (
  `id_didaskonta` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `omadaxrhsth_me_didaskonta`
--

INSERT INTO `omadaxrhsth_me_didaskonta` (`id_didaskonta`, `username`) VALUES
('3213222000', 'giorgos-didaskon-01'),
('3213442000', 'kostas-didaskon-02'),
('3213662000', 'dimitris-didaskon-03');

-- --------------------------------------------------------

--
-- Table structure for table `omadaxrhsth_me_foititi`
--

CREATE TABLE `omadaxrhsth_me_foititi` (
  `AM_foititi` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `omadaxrhsth_me_foititi`
--

INSERT INTO `omadaxrhsth_me_foititi` (`AM_foititi`, `username`) VALUES
('3212018107', 'icsd18107'),
('3212018161', 'icsd18161'),
('3212017108', 'icsd17108');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diaxeiristis`
--
ALTER TABLE `diaxeiristis`
  ADD PRIMARY KEY (`id_diaxeiristi`),
  ADD UNIQUE KEY `id_diaxeiristi` (`id_diaxeiristi`),
  ADD UNIQUE KEY `email_diaxeiristi` (`email_diaxeiristi`);

--
-- Indexes for table `didaskalia`
--
ALTER TABLE `didaskalia`
  ADD PRIMARY KEY (`id_didaskalias`),
  ADD UNIQUE KEY `id_didaskalias` (`id_didaskalias`),
  ADD KEY `id_mathimatos` (`id_mathimatos`),
  ADD KEY `id_didaskonta` (`id_didaskonta`);

--
-- Indexes for table `didaskon`
--
ALTER TABLE `didaskon`
  ADD PRIMARY KEY (`id_didaskonta`),
  ADD UNIQUE KEY `id_didaskonta` (`id_didaskonta`),
  ADD UNIQUE KEY `email_didaskonta` (`email_didaskonta`);

--
-- Indexes for table `dilosi`
--
ALTER TABLE `dilosi`
  ADD PRIMARY KEY (`id_dilosis`),
  ADD KEY `id_didaskalias` (`id_didaskalias`),
  ADD KEY `AM_foititi` (`AM_foititi`);

--
-- Indexes for table `foititis`
--
ALTER TABLE `foititis`
  ADD PRIMARY KEY (`AM_foititi`),
  ADD UNIQUE KEY `AM_foititi` (`AM_foititi`),
  ADD UNIQUE KEY `email_foititi` (`email_foititi`);

--
-- Indexes for table `mathima`
--
ALTER TABLE `mathima`
  ADD PRIMARY KEY (`id_mathimatos`),
  ADD UNIQUE KEY `id_mathimatos` (`id_mathimatos`);

--
-- Indexes for table `omadaxrhsth`
--
ALTER TABLE `omadaxrhsth`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `omadaxrhsth_me_diaxeiristi`
--
ALTER TABLE `omadaxrhsth_me_diaxeiristi`
  ADD KEY `id_diaxeiristi` (`id_diaxeiristi`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `omadaxrhsth_me_didaskonta`
--
ALTER TABLE `omadaxrhsth_me_didaskonta`
  ADD KEY `id_didaskonta` (`id_didaskonta`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `omadaxrhsth_me_foititi`
--
ALTER TABLE `omadaxrhsth_me_foititi`
  ADD KEY `AM_foititi` (`AM_foititi`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `didaskalia`
--
ALTER TABLE `didaskalia`
  MODIFY `id_didaskalias` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dilosi`
--
ALTER TABLE `dilosi`
  MODIFY `id_dilosis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `didaskalia`
--
ALTER TABLE `didaskalia`
  ADD CONSTRAINT `didaskalia_ibfk_1` FOREIGN KEY (`id_mathimatos`) REFERENCES `mathima` (`id_mathimatos`) ON DELETE CASCADE,
  ADD CONSTRAINT `didaskalia_ibfk_2` FOREIGN KEY (`id_didaskonta`) REFERENCES `didaskon` (`id_didaskonta`) ON DELETE CASCADE;

--
-- Constraints for table `dilosi`
--
ALTER TABLE `dilosi`
  ADD CONSTRAINT `dilosi_ibfk_1` FOREIGN KEY (`id_didaskalias`) REFERENCES `didaskalia` (`id_didaskalias`) ON DELETE CASCADE,
  ADD CONSTRAINT `dilosi_ibfk_2` FOREIGN KEY (`AM_foititi`) REFERENCES `foititis` (`AM_foititi`) ON DELETE CASCADE;

--
-- Constraints for table `omadaxrhsth_me_diaxeiristi`
--
ALTER TABLE `omadaxrhsth_me_diaxeiristi`
  ADD CONSTRAINT `omadaxrhsth_me_diaxeiristi_ibfk_1` FOREIGN KEY (`id_diaxeiristi`) REFERENCES `diaxeiristis` (`id_diaxeiristi`) ON DELETE CASCADE,
  ADD CONSTRAINT `omadaxrhsth_me_diaxeiristi_ibfk_2` FOREIGN KEY (`username`) REFERENCES `omadaxrhsth` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `omadaxrhsth_me_didaskonta`
--
ALTER TABLE `omadaxrhsth_me_didaskonta`
  ADD CONSTRAINT `omadaxrhsth_me_didaskonta_ibfk_1` FOREIGN KEY (`id_didaskonta`) REFERENCES `didaskon` (`id_didaskonta`) ON DELETE CASCADE,
  ADD CONSTRAINT `omadaxrhsth_me_didaskonta_ibfk_2` FOREIGN KEY (`username`) REFERENCES `omadaxrhsth` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `omadaxrhsth_me_foititi`
--
ALTER TABLE `omadaxrhsth_me_foititi`
  ADD CONSTRAINT `omadaxrhsth_me_foititi_ibfk_1` FOREIGN KEY (`AM_foititi`) REFERENCES `foititis` (`AM_foititi`) ON DELETE CASCADE,
  ADD CONSTRAINT `omadaxrhsth_me_foititi_ibfk_2` FOREIGN KEY (`username`) REFERENCES `omadaxrhsth` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
