package main

import (
	_ "github.com/7031/SFLAN/controller"
	"net/http"
)

func main() {
	http.ListenAndServe(":8080", nil)
}
