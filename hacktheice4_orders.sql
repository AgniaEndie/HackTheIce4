create table orders
(
    order_id        bigint unsigned auto_increment
        primary key,
    title           varchar(240)    not null,
    description     text            not null,
    adress          text            not null,
    longtitude      text            not null,
    latitude        text            not null,
    user_id_user    bigint unsigned not null,
    status_model_id bigint unsigned not null,
    commentary      text            not null
)
    collate = utf8mb4_unicode_ci;

