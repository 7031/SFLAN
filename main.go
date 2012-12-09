package main

import (
	_ "github.com/7031/SFLAN/controller"
	_ "github.com/7031/SFLAN/webroot"
	"net/http"
)

func main() {
	http.ListenAndServe(":8080", nil)
}
