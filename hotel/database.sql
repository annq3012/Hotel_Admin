use mydb;
-- Insert user
insert into `user`(username,`password`,fullname,permission,created_at,updated_at) values
('admin','123','Nguyễn Quốc Ân', 1, current_timestamp(),null),
('mod','123','Ngô Thị T H', 2, current_timestamp(),null),
('an','123','Nguyễn A', 3, current_timestamp(),null),
('demo','123','Đỗ Demo', 3, current_timestamp(),null),
('anq','123','NQA', 3, current_timestamp(),null);
