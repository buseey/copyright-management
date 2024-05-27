CREATE DATABASE copyright_management;

USE copyright_management;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE copyrights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    owner VARCHAR(255) NOT NULL,
    type VARCHAR(50) NOT NULL,
    license_status VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    copyright VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    release_date DATE NOT NULL
);

INSERT INTO `copyrights` (`id`, `title`, `owner`, `type`, `license_status`, `description`, `copyright`, `created_at`, `release_date`) VALUES
(3, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Book', 'Licensed', 'A story about the jazz age in the American Roaring Twenties.', 'F. Scott Fitzgerald', '2024-05-26 21:00:00', '1925-04-10 00:00:00'),
(4, 'Harry Potter and the Philosopher\'s Stone', 'J.K. Rowling', 'Book', 'Licensed', 'A fantasy novel about a young wizard.', 'J.K. Rowling', '2024-05-26 21:00:00', '1997-06-26 00:00:00'),
(5, 'The Catcher in the Rye', 'J.D. Salinger', 'Book', 'Licensed', 'A novel about teenage angst and alienation.', 'J.D. Salinger', '2024-05-26 21:00:00', '1951-07-16 00:00:00'),
(6, 'Thriller', 'Michael Jackson', 'Music', 'Licensed', 'The best-selling album of all time', 'Epic Records', '2024-05-26 21:00:00', '1982-11-30 00:00:00'),
(7, 'Back in Black', 'AC/DC', 'Music', 'Licensed', 'One of the best-selling albums of all time', 'Atlantic Records', '2024-05-26 21:00:00', '1980-07-25 00:00:00'),
(8, 'The Dark Side of the Moon', 'Pink Floyd', 'Music', 'Licensed', 'A concept album exploring various themes', 'Harvest Records', '2024-05-26 21:00:00', '1973-03-01 00:00:00'),
(9, 'The Bodyguard Soundtrack', 'Whitney Houston', 'Music', 'Licensed', 'Best-selling soundtrack of all time', 'Arista Records', '2024-05-26 21:00:00', '1992-11-17 00:00:00'),
(10, 'Rumours', 'Fleetwood Mac', 'Music', 'Licensed', 'A rock album by the British-American band', 'Warner Bros. Records', '2024-05-26 21:00:00', '0000-00-00 00:00:00'),
(11, 'The Godfather', 'Francis Ford Coppola', 'Film', 'Licensed', 'A crime film based on the novel of the same name', 'Paramount Pictures', '2024-05-26 21:00:00', '1972-03-24 00:00:00'),
(12, 'The Shawshank Redemption', 'Frank Darabont', 'Film', 'Licensed', 'A drama film based on a Stephen King novella', 'Columbia Pictures', '2024-05-26 21:00:00', '1994-09-23 00:00:00'),
(13, 'The Dark Knight', 'Christopher Nolan', 'Film', 'Licensed', 'A superhero film based on the DC Comics character Batman', 'Warner Bros. Pictures', '2024-05-26 21:00:00', '2008-07-18 00:00:00'),
(14, 'Pulp Fiction', 'Quentin Tarantino', 'Film', 'Licensed', 'A crime film known for its eclectic dialogue and ensemble cast', 'Miramax Films', '2024-05-26 21:00:00', '1994-10-14 00:00:00'),
(15, 'Forrest Gump', 'Robert Zemeckis', 'Film', 'Licensed', 'A drama film based on the 1986 novel of the same name', 'Paramount Pictures', '2024-05-26 21:00:00', '1994-07-06 00:00:00'),
(16, 'Bohemian Rhapsody', 'Queen', 'Music', 'Licensed', 'A song by the British rock band Queen', 'EMI Records', '2024-05-26 21:00:00', '1975-10-31 00:00:00'),
(17, 'Imagine', 'John Lennon', 'Music', 'Licensed', 'A song by John Lennon from his album of the same name', 'Apple Records', '2024-05-26 21:00:00', '1971-10-11 00:00:00'),
(18, 'Like a Rolling Stone', 'Bob Dylan', 'Music', 'Licensed', 'A song by American singer Bob Dylan', 'Columbia Records', '2024-05-26 21:00:00', '1965-07-20 00:00:00'),
(19, 'Hotel California', 'Eagles', 'Music', 'Licensed', 'A song by American rock band Eagles', 'Asylum Records', '2024-05-26 21:00:00', '1977-02-22 00:00:00'),
(20, 'Stairway to Heaven', 'Led Zeppelin', 'Music', 'Licensed', 'A song by the English rock band Led Zeppelin', 'Atlantic Records', '2024-05-26 21:00:00', '1971-11-08 00:00:00'),
(21, 'Bad Guy', 'Billie Eilish', 'Music', 'Licensed', 'A well-known song by Billie Eilish from the album \"When We All Fall Asleep, Where Do We Go?', 'Billie Eilish', '2024-05-27 15:28:34', '2009-03-03 00:00:00'),
(24, 'The Matrix', 'Lana and Lilly Wachowski', 'Film', 'Licensed', 'A sci-fi action film', 'Warner Bros. Pictures', '1999-03-30 21:00:00', '1999-03-31 00:00:00'),
(25, 'Jurassic Park', 'Steven Spielberg', 'Film', 'Licensed', 'A sci-fi adventure film', 'Universal Pictures', '1993-06-10 21:00:00', '1993-06-11 00:00:00'),
(26, 'Star Wars: Episode IV - A New Hope', 'George Lucas', 'Film', 'Licensed', 'The original Star Wars film', 'Lucasfilm', '1977-05-24 21:00:00', '1977-05-25 00:00:00'),
(27, 'The Lion King', 'Roger Allers and Rob Minkoff', 'Film', 'Licensed', 'A classic animated film', 'Walt Disney Pictures', '1994-06-14 21:00:00', '1994-06-15 00:00:00'),
(28, 'Moby Dick', 'Herman Melville', 'Book', 'Public Domain', 'A novel about the quest for a giant white whale', 'Herman Melville', '0000-00-00 00:00:00', '1851-10-18 00:00:00'),
(29, 'War and Peace', 'Leo Tolstoy', 'Book', 'Public Domain', 'A historical novel set during the Napoleonic Wars', 'Leo Tolstoy', '0000-00-00 00:00:00', '1869-01-01 00:00:00'),
(30, 'The Alchemist', 'Paulo Coelho', 'Book', 'Licensed', 'A philosophical book about a shepherd\'s journey', '© 1988 Paulo Coelho', '1988-09-30 21:00:00', '1988-10-01 00:00:00'),
(31, 'Pride and Prejudice', 'Jane Austen', 'Book', 'Public Domain', 'A classic novel about manners and marriage', '© 1813 Jane Austen', '0000-00-00 00:00:00', '1813-01-28 00:00:00'),
(32, 'Everything Everywhere All at Once', 'Daniel Kwan and Daniel Scheinert', 'Film', 'Licensed', 'A sci-fi adventure film about a woman who is swept up in an adventure where she alone can save existence by exploring other universes', 'A24', '2022-03-10 21:00:00', '2022-03-11 00:00:00'),
(33, 'The Banshees of Inisherin', 'Martin McDonagh', 'Film', 'Licensed', 'A drama film about two lifelong friends who find themselves at an impasse when one abruptly ends their relationship', 'Searchlight Pictures', '2022-10-20 21:00:00', '2022-10-21 00:00:00'),
(34, 'Elvis', 'Baz Luhrmann', 'Film', 'Licensed', 'A biographical musical drama about the life of Elvis Presley', 'Warner Bros. Pictures', '2022-06-23 21:00:00', '2022-06-24 00:00:00'),
(35, 'Top Gun: Maverick', 'Joseph Kosinski', 'Film', 'Licensed', 'A sequel to the 1986 film Top Gun, featuring Maverick as he confronts the ghosts of his past', 'Paramount Pictures', '2022-05-26 21:00:00', '2022-05-27 00:00:00'),
(36, 'TÁR', 'Todd Field', 'Film', 'Licensed', 'A drama film about a renowned composer-conductor', 'Focus Features', '2022-10-06 21:00:00', '2022-10-07 00:00:00'),
(42, 'Livin\' on a Prayer', 'Bon Jovi', 'Music', 'Licensed', 'A rock anthem by Bon Jovi', '© 1986 Mercury Records', '1986-10-30 21:00:00', '1986-10-31 00:00:00'),
(43, 'Paranoid', 'Black Sabbath', 'Music', 'Licensed', 'A heavy metal song by Black Sabbath', '© 1970 Vertigo Records', '1970-09-17 21:00:00', '1970-09-18 00:00:00'),
(44, 'Enter Sandman', 'Metallica', 'Music', 'Licensed', 'A heavy metal song by Metallica', '© 1991 Elektra Records', '1991-07-28 21:00:00', '1991-07-29 00:00:00'),
(45, 'Another Brick in the Wall', 'Pink Floyd', 'Music', 'Licensed', 'A progressive rock song by Pink Floyd', '© 1979 Harvest Records', '1979-11-29 21:00:00', '1979-11-30 00:00:00'),
(46, 'Highway to Hell', 'AC/DC', 'Music', 'Licensed', 'A hard rock song by AC/DC', '© 1979 Albert Productions', '1979-07-26 21:00:00', '1979-07-27 00:00:00'),
(47, 'Born to Run', 'Bruce Springsteen', 'Music', 'Licensed', 'A rock song by Bruce Springsteen', '© 1975 Columbia Records', '1975-08-24 21:00:00', '1975-08-25 00:00:00'),
(48, 'Free Bird', 'Lynyrd Skynyrd', 'Music', 'Licensed', 'A southern rock song by Lynyrd Skynyrd', '© 1973 MCA Records', '1973-11-01 21:00:00', '1973-11-02 00:00:00'),
(49, 'Layla', 'Derek and the Dominos', 'Music', 'Licensed', 'A rock song by Derek and the Dominos', '© 1970 Polydor Records', '1970-11-08 21:00:00', '1970-11-09 00:00:00'),
(50, 'Whole Lotta Love', 'Led Zeppelin', 'Music', 'Licensed', 'A rock song by Led Zeppelin', '© 1969 Atlantic Records', '0000-00-00 00:00:00', '1969-10-22 00:00:00'),
(51, 'Smoke on the Water', 'Deep Purple', 'Music', 'Licensed', 'A rock song by Deep Purple', '© 1972 Warner Bros. Records', '1972-03-24 21:00:00', '1972-03-25 00:00:00'),
(52, 'Light My Fire', 'The Doors', 'Music', 'Licensed', 'A rock song by The Doors', '© 1967 Elektra Records', '0000-00-00 00:00:00', '1967-04-24 00:00:00'),
(53, 'Dream On', 'Aerosmith', 'Music', 'Licensed', 'A rock ballad by Aerosmith', '© 1973 Columbia Records', '1973-06-26 21:00:00', '1973-06-27 00:00:00');
