	CREATE TABLE user(
			id int auto_increment,
			username varchar(255),
			fname varchar(225),
			lname varchar(225),
			time_reg TIMESTAMP DEFAULT(CURRENT_TIMESTAMP),
			CONSTRAINT user_pk PRIMARY KEY(ID)
			
	)
	
INSERT INTO `user`(`id`, `username`, `fname`, `lname`, `time_reg`) VALUES (1, 'numba_wan', 'Thewin', 'Thamma', '2021-08-16 20:32:04');
INSERT INTO `user`(`id`, `username`, `fname`, `lname`, `time_reg`) VALUES (2, 'ok_zzz', 'zaza', 'haha_1', '2021-08-16 20:32:15');
INSERT INTO `user`(`id`, `username`, `fname`, `lname`, `time_reg`) VALUES (3, 'zzz_aa', 'Wow1', 'zaMag', '2021-08-16 20:32:27');