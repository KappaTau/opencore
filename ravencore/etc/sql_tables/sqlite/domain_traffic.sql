DROP TABLE IF EXISTS domain_traffic;
CREATE TABLE domain_traffic (
  id integer not null primary key autoincrement unique,
  did int(10),
  type varchar(10),
  bytes int(10),
  datetime varchar(10)
);
