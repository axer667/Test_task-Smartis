create table if not exists fruits
(
    id     int auto_increment
        primary key,
    name   text not null,
    weight int  not null
);

INSERT INTO fruits.fruits (name, weight) VALUES ('apple', 200);


create table if not exists authors
(
    id   int auto_increment
        primary key,
    name text not null
);

INSERT INTO fruits.authors (name) VALUES ('Пушкин Александр Сергеевич');
INSERT INTO fruits.authors (name) VALUES ('Толстой Лев Николаевич');
INSERT INTO fruits.authors (name) VALUES ('Блок Александр Александрович');



create table if not exists books
(
    id        int auto_increment
        primary key,
    author_id int  not null,
    title     text not null,
    constraint books_authors_id_fk
        foreign key (author_id) references authors (id)
);

INSERT INTO fruits.books (author_id, title) VALUES (1, 'Я вас любил');
INSERT INTO fruits.books (author_id, title) VALUES (1, 'Руслан и Людмила');
INSERT INTO fruits.books (author_id, title) VALUES (1, 'Медный всадник');
INSERT INTO fruits.books (author_id, title) VALUES (2, 'Война и мир');
INSERT INTO fruits.books (author_id, title) VALUES (2, 'Анна Каренина');
INSERT INTO fruits.books (author_id, title) VALUES (2, 'Детство');
INSERT INTO fruits.books (author_id, title) VALUES (3, 'Двенадцать');
INSERT INTO fruits.books (author_id, title) VALUES (3, 'Незнакомка');
INSERT INTO fruits.books (author_id, title) VALUES (3, 'Ночь, улица, фонарь, аптека');

