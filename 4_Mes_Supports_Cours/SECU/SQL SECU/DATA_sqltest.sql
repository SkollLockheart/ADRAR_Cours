INSERT INTO category(name_category) VALUES('actu'),('news'),('sport'),('cuisine'),('animaux');
INSERT INTO users(name_users, mail_users, password_users) VALUES 
('Lambert', 'test1@test.fr', md5('1234')),
('Da Silva', 'test2@test.fr', md5('azertythh55')),
('Da Silva', 'test3@test.fr', sha1('vuygfuuh852')),
('Becker', 'test4@test.fr', md5('fioeiijgt88'));
INSERT INTO article(title_article, content_article, date_article) VALUES
('article1', 'Excepteur pariatur veniam consectetur non exercitation, amet voluptate incididunt qui sint excepteur officia occaecat nisi. Et ex deserunt quis magna commodo. Et id tempor proident est mollit laboris nulla magna sit, occaecat dolore et nisi eiusmod aute. Magna esse cillum est, eu labore veniam amet fugiat eu eu. Sed ullamco in do sunt eu sunt, ipsum veniam aliqua commodo officia commodo excepteur ea labore pariatur, ipsum eu veniam in veniam quis officia ad cillum amet. Cillum excepteur reprehenderit dolore sunt ut, laborum qui tempor eu sed, aliqua cupidatat ipsum qui dolore laboris eu. In sit esse consectetur irure do eu lorem, minim qui ea est aliquip id. Aute excepteur elit elit tempor officia, dolor qui aliqua eu sunt enim et labore eu magna, elit minim est quis nostrud.

Minim veniam exercitation ad enim irure laborum nisi labore cillum. Cillum ullamco enim adipiscing irure tempor duis nisi. Magna aliqua aliquip reprehenderit labore sit in. Aliquip reprehenderit irure velit pariatur ullamco labore nulla do. Ex ad amet eiusmod commodo voluptate do. Exercitation lorem magna veniam occaecat non velit mollit. Nisi commodo nulla officia nulla magna dolore, voluptate esse laboris est ullamco sunt duis nostrud labore. Esse aliquip elit ullamco labore consequat sed, enim anim aliqua mollit irure cillum laborum, excepteur tempor nisi velit ea cupidatat et aliqua. Ipsum amet laboris amet deserunt cupidatat ut do. Labore dolor ea ex enim ea non labore et, occaecat mollit non aute ad laboris consectetur. Irure ipsum minim in incididunt aliquip dolore tempor. Fugiat consectetur dolor lorem minim minim enim minim duis sed.

Voluptate aliquip do et lorem nulla eu, cupidatat occaecat non labore esse, lorem magna reprehenderit excepteur ut reprehenderit veniam. Velit reprehenderit dolore ipsum aliquip excepteur elit non ad do. Nostrud tempor ex cillum dolor mollit. Amet laborum amet id occaecat, pariatur deserunt lorem ex tempor in ut amet anim duis. Commodo sed incididunt voluptate cupidatat velit dolore. Labore cupidatat excepteur aliquip qui. Sit reprehenderit ad do, occaecat mollit nisi exercitation aliqua minim. Voluptate aliqua eu tempor nostrud dolore esse sint.', '2022-10-25'),
('news numero 1', 'Duis officia culpa minim. Laborum pariatur reprehenderit fugiat. Proident nostrud tempor cillum, in do cillum dolor adipiscing cupidatat consequat. Anim sit sed quis ad ad. Qui ullamco magna et. Sit deserunt excepteur magna. Adipiscing labore sint adipiscing incididunt aliquip consectetur aliqua nulla.', '2023-02-27'),
('cours sql','Ex sint duis anim sit cillum aliquip ea, ullamco irure culpa irure aute ullamco esse nulla ex. Adipiscing deserunt sit velit enim, nulla ullamco velit lorem. Cupidatat dolor laborum magna aliquip ex aliqua labore. Labore exercitation anim excepteur pariatur sunt laborum laboris. Tempor elit ea adipiscing dolor. Dolor aliqua eiusmod reprehenderit nisi duis do qui id, culpa deserunt non reprehenderit ullamco cupidatat et labore commodo.','2023-01-21');
INSERT INTO completed(id_article, id_category) VALUES
(1,1),
(1,3),
(2,4),
(2,5),
(3,4),
(3,2);