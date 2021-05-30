
INSERT INTO `subscriptions` (`id_Subscription`, `Name_Subscription`, `Price_Subsciption`, `created_at`, `updated_at`) VALUES
(1, 'Premium', '3000', '2021-05-25 13:10:27', '2021-05-25 13:10:27'),
(2, 'Gold', '4000', '2021-05-25 13:10:36', '2021-05-25 13:10:36'),
(3, 'Alpha', '5000', '2021-05-25 13:10:50', '2021-05-25 13:10:50'),
(12, 'Oméga', '8000', '2021-05-27 08:11:09', '2021-05-27 08:11:09');
INSERT INTO `users` (`id_User`, `Name_User`, `Email_User`, `password`, `Img_User`, `Type_User`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed méchant', 'Ahmed@gmail.com', '$2y$10$mdWQDU3H6XHyk64fnQLdy.U2GN/vss6iUj633Xr7zdAT/gixH.SPW', NULL, 1, '2021-05-11 18:20:52', '2021-05-21 15:49:31'),
(2, 'Yassine', 'Yassine@gmail.com', '$2y$10$FXslH42Tcn6M/2AnuJOkd.A7/VIf.ESCaxBpuq3RVuaFDauEhBpvO', NULL, -99, '2021-05-17 16:02:39', '2021-05-23 09:45:18'),
(3, 'Achraf', 'monitor@gmail.com', '$2y$12$83A9MukXFegeHFkNMl7nZemJdD/LJmzD3IOKnBMkXsmDN/AfGmS2G', NULL, '-1', "2021-05-27 12:29:18.000000","2021-05-27 12:29:28.000000");
-- Clients insert--
INSERT INTO `clients` (`id_Client`, `Id_User`, `created_at`, `updated_at`) VALUES (NULL, '1', NULL, NULL);
-- adding admin
INSERT INTO `admins` (`id_Admin`, `Id_User`, `created_at`, `updated_at`) VALUES ('1', '2', NULL, NULL);
-- adding employee : monitor --
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

-- Session Clients insert --
INSERT INTO `sessionclients` (`id_SessionClient`, `Id_Session`, `Id_Client`, `IsPayed_SessionClient`, `IsPresent_SessionClient`, `created_at`, `updated_at`) VALUES (NULL, '10', '1', '0', '0', NULL, NULL);
INSERT INTO `sessionclients` (`id_SessionClient`, `Id_Session`, `Id_Client`, `IsPayed_SessionClient`, `IsPresent_SessionClient`, `created_at`, `updated_at`) VALUES (NULL, '6', '1', '1', '0', NULL, NULL);
INSERT INTO `sessionclients` (`id_SessionClient`, `Id_Session`, `Id_Client`, `IsPayed_SessionClient`, `IsPresent_SessionClient`, `created_at`, `updated_at`) VALUES (NULL, '7', '1', '0', '0', NULL, NULL);
INSERT INTO `sessionclients` (`id_SessionClient`, `Id_Session`, `Id_Client`, `IsPayed_SessionClient`, `IsPresent_SessionClient`, `created_at`, `updated_at`) VALUES (NULL, '8', '1', '1', '0', NULL, NULL);
INSERT INTO `sessionclients` (`id_SessionClient`, `Id_Session`, `Id_Client`, `IsPayed_SessionClient`, `IsPresent_SessionClient`, `created_at`, `updated_at`) VALUES (NULL, '1', '1', '0', '0', NULL, NULL);
INSERT INTO `sessionclients` (`id_SessionClient`, `Id_Session`, `Id_Client`, `IsPayed_SessionClient`, `IsPresent_SessionClient`, `created_at`, `updated_at`) VALUES (NULL, '2', '1', '1', '0', NULL, NULL);
INSERT INTO `sessionclients` (`id_SessionClient`, `Id_Session`, `Id_Client`, `IsPayed_SessionClient`, `IsPresent_SessionClient`, `created_at`, `updated_at`) VALUES (NULL, '3', '1', '0', '0', NULL, NULL);
