create table migrations
(
    id        int unsigned auto_increment
        primary key,
    migration varchar(255) not null,
    batch     int          not null
)
    collate = utf8mb4_unicode_ci;

INSERT INTO hacktheice4.migrations (id, migration, batch) VALUES (10, '2022_11_23_180121_user_controller_migration', 1);
INSERT INTO hacktheice4.migrations (id, migration, batch) VALUES (11, '2014_10_12_000000_create_users_table', 2);
INSERT INTO hacktheice4.migrations (id, migration, batch) VALUES (12, '2014_10_12_100000_create_password_resets_table', 2);
INSERT INTO hacktheice4.migrations (id, migration, batch) VALUES (13, '2019_08_19_000000_create_failed_jobs_table', 2);
INSERT INTO hacktheice4.migrations (id, migration, batch) VALUES (14, '2019_12_14_000001_create_personal_access_tokens_table', 2);
