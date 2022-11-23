create table status
(
    status_id bigint unsigned auto_increment
        primary key,
    status    varchar(240) not null
)
    collate = utf8mb4_unicode_ci;

