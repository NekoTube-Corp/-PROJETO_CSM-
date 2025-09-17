create table Users(
	id int(11) not null AUTO_INCREMENT primary key,
    nome_usuario varchar (15) not null unique,
    password_hash varchar (50) not null,
    email varchar (50) not null unique
);

select * from users;

insert into users(id, nome_usuario, password_hash, email)
values
(1, 'Morango',  123456789, 'morango@exemplo.com'),
(2, 'Amora', 987654321, 'amora@exemplo.com'),
(3, 'Laranja', 123459876, 'laranja@exemplo.com0'),
(4, 'Maça', 123498765, 'maça@exemplo.com'),
(5, 'Melancia', 1233987654, 'melancia@exemplo.com');

