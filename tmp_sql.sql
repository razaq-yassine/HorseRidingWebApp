
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_04_28_2052145377_create_users_table', 1),
(2, '2021_04_28_2052146068_create_clients_table', 1),
(3, '2021_04_28_2052146558_create_subscriptions_table', 1),
(4, '2021_04_28_2052147044_create_subclients_table', 1),
(5, '2021_04_28_2052147482_create_employees_table', 1),
(6, '2021_04_28_2052147913_create_monitors_table', 1),
(7, '2021_04_28_2052148394_create_sessions_table', 1),
(8, '2021_04_28_2052148830_create_sessionclients_table', 1),
(9, '2021_04_28_2052149252_create_admins_table', 1),
(10, '2021_04_28_2052149681_create_tasks_table', 1),
(11, '2021_04_28_2052150118_create_employeetasks_table', 1);

INSERT INTO `subscriptions` (`id_Subscription`, `Name_Subscription`, `Price_Subsciption`, `created_at`, `updated_at`) VALUES
(1, 'Premium', '3000', '2021-05-25 13:10:27', '2021-05-25 13:10:27'),
(2, 'Gold', '4000', '2021-05-25 13:10:36', '2021-05-25 13:10:36'),
(3, 'Alpha', '5000', '2021-05-25 13:10:50', '2021-05-25 13:10:50'),
(12, 'Oméga', '8000', '2021-05-27 08:11:09', '2021-05-27 08:11:09');
INSERT INTO `users` (`id_User`, `Name_User`, `Email_User`, `password`, `Img_User`, `Type_User`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed méchant', 'Ahmed@gmail.com', '$2y$10$mdWQDU3H6XHyk64fnQLdy.U2GN/vss6iUj633Xr7zdAT/gixH.SPW', NULL, 1, '2021-05-11 18:20:52', '2021-05-21 15:49:31'),
(2, 'Yassine', 'Yassine@gmail.com', '$2y$10$FXslH42Tcn6M/2AnuJOkd.A7/VIf.ESCaxBpuq3RVuaFDauEhBpvO', NULL, -99, '2021-05-17 16:02:39', '2021-05-23 09:45:18');

INSERT INTO `users` (`id_User`, `Name_User`, `Email_User`, `password`, `Img_User`, `Type_User`, `created_at`, `updated_at`) VALUES (NULL, 'Achraf', 'monitor@gmail.com', '$2y$12$83A9MukXFegeHFkNMl7nZemJdD/LJmzD3IOKnBMkXsmDN/AfGmS2G', NULL, '-1', "2021-05-27 12:29:18.000000","2021-05-27 12:29:28.000000");
INSERT INTO `employees` (`id_Employee`,`Id_User`,  `Salary_Employee`, `Role_Employee`, `created_at`, `updated_at`) VALUES (NULL, 3, '7000', 'Moniteur', '2021-05-27 12:31:38', '2021-05-27 12:31:38');
INSERT INTO `monitors` (`id_Monitor`, `Id_Employee`, `created_at`, `updated_at`) VALUES (NULL, '1', '2021-05-27 12:42:50', '2021-05-27 12:42:50');
-- Sessions insert --
INSERT INTO `sessions` (`id_Session`, `Id_Monitor`, `Name_Session`, `Price_Session`, `Date_Session`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Working on the position ', '200', '2021-05-27', '2021-05-27 12:43:42', '2021-05-27 12:43:42');
INSERT INTO `sessions` (`id_Session`, `Id_Monitor`, `Name_Session`, `Price_Session`, `Date_Session`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Staying on position ', '200', '2021-05-27', '2021-05-27 12:43:42', '2021-05-27 12:43:42');
INSERT INTO `sessions` (`id_Session`, `Id_Monitor`, `Name_Session`, `Price_Session`, `Date_Session`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Free Workout ', '200', '2021-05-27', '2021-05-27 12:43:42', '2021-05-27 12:43:42');
INSERT INTO `sessions` (`id_Session`, `Id_Monitor`, `Name_Session`, `Price_Session`, `Date_Session`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Great training session', '200', '2021-05-27', '2021-05-27 12:43:42', '2021-05-27 12:43:42');
INSERT INTO `sessions` (`id_Session`, `Id_Monitor`, `Name_Session`, `Price_Session`, `Date_Session`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Sabitus Session ', '200', '2021-05-27', '2021-05-27 12:43:42', '2021-05-27 12:43:42');
INSERT INTO `sessions` (`id_Session`, `Id_Monitor`, `Name_Session`, `Price_Session`, `Date_Session`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Working on the position ', '200', '2021-06-10', '2021-05-27 12:43:42', '2021-05-27 12:43:42');
INSERT INTO `sessions` (`id_Session`, `Id_Monitor`, `Name_Session`, `Price_Session`, `Date_Session`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Staying on position ', '200', '2021-06-10', '2021-05-27 12:43:42', '2021-05-27 12:43:42');
INSERT INTO `sessions` (`id_Session`, `Id_Monitor`, `Name_Session`, `Price_Session`, `Date_Session`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Free Workout ', '200', '2021-06-10', '2021-05-27 12:43:42', '2021-05-27 12:43:42');
INSERT INTO `sessions` (`id_Session`, `Id_Monitor`, `Name_Session`, `Price_Session`, `Date_Session`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Great training session', '200', '2021-06-10', '2021-05-27 12:43:42', '2021-05-27 12:43:42');
INSERT INTO `sessions` (`id_Session`, `Id_Monitor`, `Name_Session`, `Price_Session`, `Date_Session`, `created_at`, `updated_at`) VALUES (NULL, '1', 'Sabitus Session ', '200', '2021-06-10', '2021-05-27 12:43:42', '2021-05-27 12:43:42');
