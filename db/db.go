package db

import (
	"database/sql"
	_ "code.google.com/p/go-mysql-driver/mysql"
)

func Get() *sql.DB {
	db, err := sql.Open("mysql", "sflan_site:9cBK0oMaZgxu@/sflan_site")
	if err != nil {
		panic(err)
	}
	return db
}
