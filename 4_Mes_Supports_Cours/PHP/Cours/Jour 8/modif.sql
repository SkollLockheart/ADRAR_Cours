delete from category;
alter table category
MODIFY name_cat varchar(50) not null unique;
