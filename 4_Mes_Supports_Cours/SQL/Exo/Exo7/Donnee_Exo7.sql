use exo7;
INSERT INTO right_(name_right) VALUES ('utilisateur'), ('moderateur'), ('admin');
INSERT INTO users(name_users,first_name_users,mail_users,password_users,active_users,id_right) VALUES
('Mathieu', 'Mithridate', 'mathieu@mail.com', 'adaurnapnanifunaifnaueifnenfinfjsnnsqqapqon', 1, 2),
('Test', 'test', 'test@test.com', 'testtestestsetsetset', 0, 1); 
INSERT INTO article(name_art, content_art, date_art, validate_art, id_users) VALUES
('new', 'aieahoainbfzrpgonjhbapfsndfspinfein', '2022/10/18 12:13:00', 0, 1);
UPDATE users SET name_users ='Admin' WHERE id_users=2;
DELETE FROM article;