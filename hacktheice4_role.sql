create table role
(
    role_id bigint unsigned auto_increment
        primary key,
    role    varchar(240) not null
)
    collate = utf8mb4_unicode_ci;

