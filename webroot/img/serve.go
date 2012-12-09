package img

import "net/http"

func init() {
	http.Handle("/img/", http.FileServer(http.Dir("webroot")))
}
