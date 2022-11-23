create table users
(
    user_id           bigint unsigned auto_increment
        primary key,
    name              varchar(255)    not null,
    role_model_id     bigint unsigned not null,
    email             varchar(255)    not null,
    email_verified_at timestamp       null,
    reputation        int             not null,
    password          varchar(255)    not null,
    remember_token    varchar(100)    null,
    created_at        timestamp       null,
    updated_at        timestamp       null,
    constraint users_email_unique
        unique (email)
)
    collate = utf8mb4_unicode_ci;

